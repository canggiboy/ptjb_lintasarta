<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('usermodel');
	}

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['data'] = $this->usermodel->show()->result_array();
			$data['nik'] = $session_data['nik'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];

			/*$alldata = $this->usermodel->alldata();
			if($alldata){
				$table = $this->usermodel->create_table($alldata);
				$data['table'] = $table;
			}else{
				echo "<p>Tidak ada data</p>";
			}*/
			$this->load->view('user_view', $data);
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
			$password = $this->input->post('password');
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

	public function delete($nik)
	{
		$this->usermodel->delete_by_nik($nik);
		echo json_encode(array("status" => TRUE));
	}

	public function edit($nik)
		{
			$data = $this->usermodel->get_by_nik($nik);
			echo json_encode($data);
		}

	public function update()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik1');
		$fullname = $this->input->post('fullname1');
		$username = $this->input->post('username1');
		$password = $this->input->post('password1');
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
		$this->usermodel->update_user($where,$data,'user_android');
		echo json_encode(array("status" => TRUE));
	}
}