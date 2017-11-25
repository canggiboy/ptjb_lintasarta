<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pum extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('pummodel', 'pum');
	}

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['data'] = $this->pum->show()->result_array();
			$data['nik'] = $session_data['nik'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];
			$this->load->view('header_view', $data);
			$this->load->view('footer_view', $data);
			$this->load->view('pum_view', $data);
		} else{
			redirect('login', 'refresh');
		}
	}

	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('user_android')->like('nik',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nik,
				'id'	=>$row->id,
				'fullname'	=>$row->fullname,
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	public function add(){
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['nik'] = $session_data['nik'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];

			$id = $this->input->post('id_user');
			$nik = $this->input->post('nik');
			$fullname = $this->input->post('fullname');
			$number_of_pum = $this->input->post('number_of_pum');
			$activity_name = $this->input->post('activity_name');
			$date_of_activity = $this->input->post('date_of_activity');
			$location = $this->input->post('location');
			$object = array(
				'id' => $id,
				'jumlah_pum' => $number_of_pum,
			);
			$this->db->insert('pum_detail',$object);

			$object = array(
				'nama_kegiatan' => $activity_name,
				'lokasi' => $location,
				'tgl_mulai' => $date_of_activity,
				'id_pum' => $this->db->insert_id(),
			);
			$this->db->insert('kegiatan',$object);
			redirect('pum');
			} else{
				redirect('login', 'refresh');
			}
	}

	public function update()
	{
		$id = $this->input->post('id_user1');
		$id_pum = $this->input->post('id_pum');
		$id_kegiatan = $this->input->post('id_kegiatan');
		$nik = $this->input->post('nik1');
		$fullname = $this->input->post('fullname1');
		$number_of_pum = $this->input->post('number_of_pum1');
		$activity_name = $this->input->post('activity_name1');
		$date_of_activity = $this->input->post('date_of_activity1');
		$location = $this->input->post('location1');

		$data1 = array(
				'pum_detail.id' => $id,
				'pum_detail.jumlah_pum' => $number_of_pum
			);

		$data2 = array(
				'kegiatan.id_pum' => $id_pum,
				'kegiatan.nama_kegiatan' => $activity_name,
				'kegiatan.tgl_mulai' => $date_of_activity,
				'kegiatan.lokasi' => $location
			);

		$where1 = array(
			'pum_detail.id_pum' => $id_pum
		);

		$where2 = array(
			'kegiatan.id_kegiatan' => $id_kegiatan
		);

		$this->pum->update_pum($where1,$where2,$data1,$data2);
		echo json_encode(array("status" => TRUE));
	}

	public function delete($id,$id_pum)
	{
		$this->pum->delete_by_id($id,$id_pum);
		echo json_encode(array("status" => TRUE));
	}

	public function edit($id)
		{
			$data = $this->pum->get_by_id($id);
			echo json_encode($data);
		}

    public function ajax_list()
	{
		$list = $this->pum->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $li) {
			$no++;
			$row = array();
			$row[] = $li->nik;
			$row[] = $li->fullname;
			$row[] = $li->jumlah_pum;
			$row[] = $li->nama_kegiatan;
			$row[] = $li->tgl_mulai;
			$row[] = $li->lokasi;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-info" href="javascript:void(0)" title="Hapus" onclick="detail('."'".$li->id."'".')"><i class="glyphicon glyphicon-info-sign"></i> Detail</a>
			<a class="btn btn-sm btn-primary" href="javascript:void(0)" data-toggle="modal" data-target="#myModalPumEdit" title="Edit" onclick="edit('."'".$li->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$li->id."'".','."'".$li->id_pum."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pum->count_all(),
						"recordsFiltered" => $this->pum->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


}