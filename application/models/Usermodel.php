<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	var $table = 'user_android';

	public function alldata(){
		return $this->db->get('user_android')->result_object();
	}

	public function show(){
		return $this->db->get('user_android');
	}

	public function delete_by_nik($nik)
	{
		$this->db->where('nik', $nik);
		$this->db->delete($this->table);
	}
	public function get_by_nik($nik)
	{
		$this->db->from($this->table);
		$this->db->where('nik',$nik);
		$query = $this->db->get();
 
		return $query->row();
	}

	public function update_user($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
}
