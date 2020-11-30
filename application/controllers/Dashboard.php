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
	public function profile()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('profile');
		$this->load->view('footer');
	}
	function update_profile(){
		$konfirmasi = $this->session->userdata("password");
		$id = $this->input->post('id_admin');
		$new_pass = $this->input->post('new_pass');
		$old_pass = $this->input->post('old_pass');
		$nama = $this->input->post('nama_lengkap');
		$this->form_validation->set_rules('old_pass', 'Password Lama', 'required');
		if($this->form_validation->run() != false){
			if ($konfirmasi == md5($old_pass)){
				if( $new_pass == NULL ){
					$data = array(
						'nama_admin' => $nama
						);
						$where = array(
							'id_admin' => $id);
					
						$this->M_perpus->update_data('admin',$data,$where);
						$this->session->set_userdata('nama', $nama);
						redirect('dashboard/profile');
				}else{
					$data = array(
						'nama_admin' => $nama,
						'password' => $new_pass
						);
						$where = array(
							'id_admin' => $id);
					
						$this->M_perpus->update_data('admin',$data,$where);
						$this->session->set_userdata('nama', $nama);
						redirect('dashboard/profile');
				}
			}else{
				echo "salah password lama";
			}
		}else{
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('profile');
			$this->load->view('footer');
		}
	}
	
	function data_anggota()
	{
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/anggota', $data);
		$this->load->view('footer');
	}
	function data_buku()
	{
		$data['buku'] = $this->M_perpus->get_data('buku')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/buku', $data);
		$this->load->view('footer');
	}
	function tambah_buku()
	{
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/tambah_buku', $data);
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
				redirect('admin/data/buku');
			}else{
				$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/data/buku/tambah', $data);
				$this->load->view('footer');
			}
		}
	}

	function hapus_buku($id_buku){
		$where = array('id_buku' => $id_buku);
		$this->M_perpus->delete_data($where,'buku');
		redirect('admin/data/buku');
	}

	function edit_buku($id_buku){
		$where = array('id_buku' => $id_buku);
		$data['buku'] = $this->M_perpus->edit_data_buku($where)->result();
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/edit_buku',$data);
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
					redirect('admin/data/buku');
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
				redirect('admin/data/buku');
			}
		}	
	}

	function hapus_anggota($id_anggota){
			$where = array('id_anggota' => $id_anggota);
			$this->M_perpus->delete_data($where,'anggota');
			redirect('admin/data/anggota');
	}

	function tambah_anggota()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/tambah_anggota');
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
				redirect('admin/data/anggota');
		}
	}

	function edit_anggota($id_anggota){
		$where = array('id_anggota' => $id_anggota);
		$data['anggota'] = $this->M_perpus->edit_data_anggota($where)->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/edit_anggota',$data);
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
				redirect('admin/data/anggota');
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
					redirect('admin/data/anggota');
			}
		}	
	}

	function data_peminjam()
	{
		$where = array('id_user' => 'status_peminja');
		$data['pinjaman'] = $this->M_perpus->get_data_peminjam()->result();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/peminjam', $data);
		$this->load->view('footer');
	}

	function approve_pinjaman($id_pinjam){
		$data = array(
			'status_peminjaman' => '1'			
			);
		$where = array(
			'id_pinjam' => $id_pinjam);
		$this->M_perpus->update_data('transaksi',$data,$where);
		$this->session->set_flashdata('approved', 'Approved');
		redirect('admin/data/peminjam');
	}

	// function kembalikan_pinjaman($id_pinjam){
	// 	$tanggal_pengembalian = date('Y-m-d');
	// 	$data = array(
	// 		'status_peminjaman' => '1',
	// 		'tanggal_pengembalian' => $tanggal_pengembalian,
	// 		'denda' =>		
	// 		);
	// 	$where = array(
	// 		'id_pinjam' => $id_pinjam);
	// 	$this->M_perpus->update_data('transaksi',$data,$where);
	// 	redirect('admin/data/peminjam');
	// }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}
