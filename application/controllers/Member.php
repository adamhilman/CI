<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('M_perpus');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
 
	}
	public function index()
	{
		$data['jml_buku'] = $this->db->query('SELECT * FROM buku');
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	
	function data_buku()
	{
		$data['buku'] = $this->M_perpus->get_data('buku')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('member/buku', $data);
		$this->load->view('footer');
	}

	function data_pinjaman($id_member)
	{
		$where = array('id_user' => $id_member);
		$data['pinjaman'] = $this->M_perpus->get_data_pinjam($where)->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('member/pinjaman', $data);
		$this->load->view('footer');
	}

	function pinjam_buku($id_buku){
		$where = array('id_buku' => $id_buku);
		$data['buku'] = $this->M_perpus->edit_data_buku($where)->result();
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('member/pinjam_buku',$data);
		$this->load->view('footer');
	}

	function pinjam_buku_aksi(){
		$id_user = $this->session->userdata("id_member");
		$id_buku = $this->input->post('id_buku');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$jumlah_pinjam = $this->input->post('jumlah_pinjam');
		$tanggal_pinjam = $this->input->post('tanggal_pinjam');
		$tanggal_kembali = $this->input->post('tanggal_kembali');
		$buku_tersedia = $jumlah_buku - $jumlah_pinjam;
		//Kurangi jumlah buku
		$data = array(
			'jumlah_buku' => $buku_tersedia		
				);
		$where = array(
				'id_buku' => $id_buku);
		$this->M_perpus->update_data('buku',$data,$where);		

		//Tambahkan ke tabel transaksi
			$this->form_validation->set_rules('tanggal_kembali', 'Tanggal kembali', 'required');
			$this->form_validation->set_rules('tanggal_pinjam', 'Tanggal pinjam', 'required');

			if($this->form_validation->run() != false){
					$data = array(
						'id_buku' => $id_buku,
						'id_user' => $id_user,
						'tanggal_pinjam' => $tanggal_pinjam,
						'tanggal_kembali' => $tanggal_kembali,
						'jumlah_pinjam' => $jumlah_pinjam,
						);
					$this->M_perpus->insert_data($data,'transaksi');
					redirect('user/data/pinjaman/'.$id_user);
			}	
	}

	function update_buku(){
		$id_buku = $this->input->post('id_buku');
		$kategori = $this->input->post('kategori');
		$judul_buku = $this->input->post('judul_buku');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun_terbit = $this->input->post('tahun_terbit');
		$isbn = $this->input->post('isbn');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$lokasi = $this->input->post('lokasi');
		$status_buku = $this->input->post('status_buku');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
		$this->form_validation->set_rules('status_buku', 'Status Buku', 'required');
		if($this->form_validation->run() != false){
			$config['upload_path'] = './asset/upload/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['file_name'] = 'gambar'.time();
			$this->load->library('upload', $config);
			if($this->upload->do_upload('gambar_buku')){
				$image = $this->upload->data();
				$data = array(
					'id_kategori' => $kategori,
					'judul_buku' => $judul_buku,
					'pengarang' => $pengarang,
					'penerbit' => $penerbit,
					'tahun_terbit' => $tahun_terbit,
					'isbn' => $isbn,
					'jumlah_buku' => $jumlah_buku,
					'lokasi' => $lokasi,
					'status_buku' => $status_buku,
					'gambar' => $image['file_name']
					);
					$where = array(
						'id_buku' => $id_buku);
				
					$this->M_perpus->update_data('buku',$data,$where);
					redirect('dashboard/admin/data_buku');
			}else{
				$data = array(
					'id_kategori' => $kategori,
					'judul_buku' => $judul_buku,
					'pengarang' => $pengarang,
					'penerbit' => $penerbit,
					'tahun_terbit' => $tahun_terbit,
					'isbn' => $isbn,
					'jumlah_buku' => $jumlah_buku,
					'lokasi' => $lokasi,
					'status_buku' => $status_buku);
				$where = array(
					'id_buku' => $id_buku);
				$this->M_perpus->update_data('buku',$data,$where);
				redirect('dashboard/admin/data_buku');
			}
		}	
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
