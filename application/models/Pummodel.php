<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pummodel extends CI_Model {

	var $table_user = 'user_android';
	var $table_pum = 'pum_detail';
	var $table_activity = 'kegiatan';

	var $column_order = array('nik','fullname','jumlah_pum','nama_kegiatan', 'lokasi',null); //set column field database for datatable orderable

	var $column_search = array('nik','fullname','jumlah_pum','nama_kegiatan', 'lokasi');

	public function alldata(){
		return $this->db->get('user_android')->result_object();
	}

	public function show(){
		return $this->db->get('user_android');
	}


	public function delete_by_id($id,$id_pum)
	{
		$sql = "DELETE pum_detail FROM user_android INNER JOIN pum_detail ON user_android.id=pum_detail.id INNER JOIN kegiatan ON pum_detail.id_pum=kegiatan.id_pum WHERE user_android.id=? AND pum_detail.id_pum=?";

    	$this->db->query($sql, array($id,$id_pum));
	}
	
	public function get_by_id($id)
	{
		$this->db->select('user_android.id, user_android.nik, user_android.fullname, pum_detail.id_pum, pum_detail.jumlah_pum, kegiatan.id_kegiatan, kegiatan.nama_kegiatan, kegiatan.tgl_mulai, kegiatan.lokasi')
			->from('user_android')
			->join('pum_detail', 'user_android.id = pum_detail.id')
			->join('kegiatan', 'pum_detail.id_pum = kegiatan.id_pum')
			->where('user_android.id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}

	public function getWhere($where){
	  $this->db->where($where);
	  return $this->db->get('user_android');
	 }

	public function update_pum($where1,$where2,$data1,$data2)
	{
		$this->db->set($data1);
		$this->db->where($where1);
		$this->db->update('pum_detail');

		$this->db->set($data2);
		$this->db->where($where2);
		$this->db->update('kegiatan');
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_query()
	{
		$this->db->select('user_android.id,user_android.nik, user_android.fullname, pum_detail.id_pum,pum_detail.jumlah_pum, kegiatan.nama_kegiatan, kegiatan.tgl_mulai, kegiatan.lokasi')
			->from('pum_detail')
			->join('user_android', 'pum_detail.id=user_android.id')
			->join('kegiatan', 'pum_detail.id_pum = kegiatan.id_pum');

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function count_all()
	{
		$this->db->from($this->table_user);
		return $this->db->count_all_results();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

}
