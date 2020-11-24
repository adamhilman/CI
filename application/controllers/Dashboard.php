<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['jml_anggota'] = $this->db->query('SELECT * FROM anggota');
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	function data_anggota()
	{
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('anggota', $data);
		$this->load->view('footer');
	}
	function data_buku()
	{
		$data['buku'] = $this->M_perpus->get_data('buku')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('buku', $data);
		$this->load->view('footer');
	}
	function tambah_buku()
	{
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('tambah_buku', $data);
		$this->load->view('footer');
	}
	function tambah_buku_aksi(){
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
				$this->M_perpus->insert_data($data,'buku');
				redirect('dashboard/data_buku');
			}else{
				$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('tambah_buku', $data);
				$this->load->view('footer');
			}
		}
	}

	function hapus_buku($id_buku){
		$where = array('id_buku' => $id_buku);
		$this->M_perpus->delete_data($where,'buku');
		redirect('dashboard/data_buku');
	}

	function edit_buku($id_buku){
		$where = array('id_buku' => $id_buku);
		$data['buku'] = $this->M_perpus->edit_data_buku($where)->result();
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_buku',$data);
		$this->load->view('footer');
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
					redirect('dashboard/data_buku');
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
				redirect('dashboard/data_buku');
			}
		}	
	}

	function hapus_anggota($id_anggota){
			$where = array('id_anggota' => $id_anggota);
			$this->M_perpus->delete_data($where,'anggota');
			redirect('dashboard/data_anggota');
	}

	function tambah_anggota()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('tambah_anggota');
		$this->load->view('footer');
	}

	function tambah_anggota_aksi(){
		$nama_anggota = $this->input->post('nama_lengkap');
		$gender = $this->input->post('gender');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Anggota', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() != false){
				$data = array(
					'nama_anggota' => $nama_anggota,
					'gender' => $gender,
					'no_telp' => $no_telp,
					'alamat' => $alamat,
					'email' => $email,
					'password' => md5($password)
					);
				$this->M_perpus->insert_data($data,'anggota');
				redirect('dashboard/data_anggota');
		}
	}

	function edit_anggota($id_anggota){
		$where = array('id_anggota' => $id_anggota);
		$data['anggota'] = $this->M_perpus->edit_data_anggota($where)->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_anggota',$data);
		$this->load->view('footer');
	}

	function update_anggota(){
		$nama_anggota = $this->input->post('nama_lengkap');
		$id_anggota = $this->input->post('id_anggota');
		$gender = $this->input->post('gender');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Anggota', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run() != false){
			if($password == NULL){
				$data = array(
					'nama_anggota' => $nama_anggota,
					'gender' => $gender,
					'no_telp' => $no_telp,
					'alamat' => $alamat,
					'email' => $email					
				);
					$where = array(
						'id_anggota' => $id_anggota);
				$this->M_perpus->update_data('anggota',$data,$where);
				redirect('dashboard/data_anggota');
			}else{
				$data = array(
					'nama_anggota' => $nama_anggota,
					'gender' => $gender,
					'no_telp' => $no_telp,
					'alamat' => $alamat,
					'email' => $email,
					'password' => md5($password)				
				);
					$where = array(
						'id_anggota' => $id_anggota);
					$this->M_perpus->update_data('anggota',$data,$where);
					redirect('dashboard/data_anggota');
			}
		}	
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
