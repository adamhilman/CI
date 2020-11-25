<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
	function cek_login_admin($table,$where){		
		return $this->db->get_where($table, $where);
	}	
	function cek_login_member($table,$where){		
		return $this->db->get_where($table, $where);
	}	
}
