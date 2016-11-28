<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Auth extends CI_Controller {

	
	public function index() {
		redurect('Auth/login');		
		
	}
	
	function login(){
		if ($this->session->userdata('username')) 
		{	
			redirect('dasbor');
		}

		//fungsi login
		$valid = $this->form_validation;
		$username = $this->input->post("username");
		$password = md5($this->input->post("password"));
		$valid->set_rules("username","Username","required");
		$valid->set_rules("password","Password","required");
		if($valid->run()) {
		$this->simple_login->login($username,$password, base_url("dasbor"), base_url("Auth/login"));
		}
		// End fungsi login

		$data = array('title'=>'Halaman Login Admin');
		$this->load->view('admin/login_view',$data);
	}

	//Fungsi logout
	public function logout() {
	$this->simple_login->logout();
	}

}
