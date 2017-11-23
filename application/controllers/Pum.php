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
			$location = $this->input->post('location');
			$object1 = array(
				'id' => $id,
				'jumlah_pum' => $number_of_pum,
			);
			$object2 = array(
				'nama_kegiatan' => $activity_name,
				'lokasi' => $location,
				'id' => $id,
				'id_pum' => $id,
			);
			$this->db->insert('pum_detail',$object1);
			$this->db->insert('kegiatan',$object2);
			redirect('pum');
			} else{
				redirect('login', 'refresh');
			}
	}

	public function delete($id)
	{
		$this->user->delete_by_nik($id);
		echo json_encode(array("status" => TRUE));
	}

	public function edit($id)
		{
			$data = $this->user->get_by_nik($id);
			echo json_encode($data);
		}

	public function update()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik1');
		$fullname = $this->input->post('fullname1');
		$username = $this->input->post('username1');
		$password = password_hash($this->input->post('password1'), PASSWORD_BCRYPT);
		$repassword = $this->input->post('password1');
		$level = $this->input->post('level1');

		$data = array(
				'nik' => $nik,
				'fullname' => $fullname,
				'username' => $username,
				'password' => $password,
				'level' => $level
			);

		$where = array(
			'id' => $id
		);
		$this->user->update_user($where,$data,'user_android');
		echo json_encode(array("status" => TRUE));
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
			$row[] = $li->username;
			$row[] = $li->password;
			$row[] = $li->level;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit('."'".$li->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$li->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->user->count_all(),
						"recordsFiltered" => $this->user->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


}