<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where_admin = array(
			'username' => $username,
			'password' => md5($password)
			);
		$where_member = array(
			'email' => $username,
			'password' => md5($password)
			);	
		$cek_admin = $this->m_login->cek_login_admin("admin",$where_admin)->num_rows();
		$cek_member = $this->m_login->cek_login_member("anggota",$where_member)->num_rows();
		$ambil_admin = $this->m_login->cek_login_admin("admin",$where_admin)->row();
		$ambil_member = $this->m_login->cek_login_member("anggota",$where_member)->row();
		if($cek_admin > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login",
				'level' => "admin",
				'nama' => $ambil_admin->nama_admin,
				'password' => $ambil_admin->password,
				'id_admin' => $ambil_admin->id_admin
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
		if($cek_member > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login",
				'level' => "member",
				'nama' => $ambil_member->nama_anggota,
				'password' => $ambil_member->password,
				'id_member' => $ambil_member->id_anggota
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("member"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
}
