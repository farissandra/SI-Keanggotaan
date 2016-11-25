<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Dasbor extends CI_Controller {

	
	public function index() {
		$data = array('title'=>'Halaman Dashboard',
						'isi'=>'admin/dasbor_view');
		$this->load->view('layout/wrapper',$data);
		$this->load->view('layout/wrap_foot');
		
		
	}

}