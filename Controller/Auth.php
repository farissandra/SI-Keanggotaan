<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Auth extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->library('Bcrypt');
		$this->load->model('User_model');
		$this->load->database();
	}
	
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
		$password = $this->input->post("password");
		$valid->set_rules("username","Username","required");
		$valid->set_rules("password","Password","required");
		
		if ($result = $this->User_model->getLogin($username)) {
			foreach ($result as $row) {
				$stored_hash = $row->password;
				if ($this->bcrypt->check_password($password,$stored_hash)) {
					if($valid->run()) {
					 $this->simple_login->login($username,$stored_hash, base_url("dasbor"), base_url("Auth/login"));
					} 

				} else{
					$this->session->set_flashdata('sukses','Oops.. Username/password salah');
			 		redirect(base_url('Auth/login'));
				}
			}
		} else{

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
