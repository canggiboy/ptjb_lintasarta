<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('activitymodel', 'activity');
	}

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['data'] = $this->activity->show()->result_array();
			$data['nik'] = $session_data['nik'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];
			$this->load->view('header_view', $data);
			$this->load->view('footer_view', $data);
			$this->load->view('activity_view', $data);
		} else{
			redirect('login', 'refresh');
		}
	}

	public function add(){
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['nik'] = $session_data['nik'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];

			$nik = $this->input->post('nik');
			$fullname = $this->input->post('fullname');
			$username = $this->input->post('username');
			$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$repassword = $this->input->post('password');
			$level = $this->input->post('level');
			$object = array(
				'nik' => $nik,
				'fullname' => $fullname,
				'username' => $username,
				'password' => $password,
				'level' => $level
			);
			$this->db->insert('user_android',$object);
			redirect('user');
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