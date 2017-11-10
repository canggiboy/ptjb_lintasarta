<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username, $password){
		$this->db->select('nik,fullname,username,password');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		} else{
			return false;
		}
	}

	function getRecords(){
		$query = $this->db->get('user_android');
		if($query->num_rows()>0){
			return $query->row();
		}
	}
}
