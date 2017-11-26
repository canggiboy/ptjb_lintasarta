<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
		if($this->form_validation->run()==false){
			$this->load->view('header_view');
			$this->load->view('footer_view');
			$this->load->view('login_view');
		} else{
			redirect(base_url('index.php/home'), 'refresh');
		}
	}

	function basisdata_cek($password){
		$username = $this->input->post('username');
		$result = $this->login->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array('nik' => $row->nik, 'username' => $row->username, 'fullname' => $row->fullname);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else{
			$this->form_validation->set_message('basisdata_cek', 'Invalid username or password (Nama pengguna dan kata sandi salah)');
			return false;
		}
	}
}
