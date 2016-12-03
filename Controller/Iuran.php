<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Iuran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		//$this->load->model('iuran_model');
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin/anggota_view.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	function index(){
		// $this->load->model('iuran_model');
		// $query = $this->iuran_model->get_data();
		// $data['IURAN'] = null;
		// if ($query) {
		// 	$data['IURAN'] = $query;
		// }
		// $this->load->view('admin/iuran_view', $data);

		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		$data = array('title'=>'Iuran Anggota',
						'isi'=>'admin/anggota_view');
		$this->load->view('layout/wrapper',$data);
		$this->load->view('komponen/navigasi_fitur');

		$crud = new grocery_CRUD();
		$crud -> set_theme('datatables');
		$crud->set_table('anggota');
		//$crud->set_primary_key('na_anggota','iuran');
		// $crud->set_relation_n_n('iuran','anggota','iuran','na_anggota','na_anggota','na_anggota','nama_anggota');
		// $crud->set_relation('na_anggota','anggota','na_anggota');
		// $crud->set_relation('nama_anggota','anggota','nama_anggota');
		// $crud->set_relation('nrp_anggota','anggota','nrp_anggota');
		$crud->columns('na_anggota','nama_anggota','nrp_anggota','bln_bayar');
		$crud->display_as('nama_anggota','Nama Anggota')
			 ->display_as('na_anggota','Nomor Anggota')
			 ->display_as('nrp_anggota','NRP')
			 ->display_as('bln_bayar','Bulan Terakhir Lunas');
		$crud->fields('na_anggota','bln_bayar');
		$crud->set_subject('Iuran Anggota');
		$crud->callback_edit_field('na_anggota',array($this,'disable_field'));
		// $state_code == $crud->getState();
		// 	if($state_code == 'edit'){
		// 		$crud->change_field_type('na_anggota','disable');	
		// 	}
		$crud->unset_read();
		$crud->unset_delete();
		//$crud->callback_before_delete(array($this,'delete_anggota'));
		//$crud->unset_add();
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function disable_field($value,$primary_key){
		return '<input type="text" name="na_anggota" value="'.$value.'" style="cursor:not-allowed" disabled>';
	}

	// function edit($na_anggota){
	// 	//$id = $this->uri->segment(3);
	// 	// $data['bayar'] = $this->iuran_model->show($id);
	// 	// $this->load->view('admin/iuran_update',$data);

	// 	$where = array('na_anggota' => $na_anggota);
	// 	$data['bayar'] = $this->iuran_model->edit_data($where,'anggota')->result();
	// 	$this->load->view('admin/iuran_update',$data);
	// }

	//function update(){
		// $id = $this->input->post('id');
		// $data = array(
		// 	'tgl_bayar' => $this->input->post('tgl_bayar')
		// 	);
			
		// 	$this->iuran_model->update_iuran($id,$data);
		// 	$this->index();

	// 	$na_anggota = $this->input->post('na_anggota');
	// 	$bln_bayar = $this->input->post('bln_bayar');

	// 	$data = array(
	// 		'na_anggota' => $na_anggota
	// 	);

	// 	$where = array(
	// 		'na_anggota' => $na_anggota
	// 	);

	// 	$this->iuran_model->update_data($where,$data,'anggota');
	// 	redirect('iuran/index');
	// }

	// public function delete_anggota($primary_key){
	// 		//return $this->db->update('iuran',array('na_anggota'=> $primary_key, 'action' => 'delete'));
	// 	$this->db->where('na_anggota',$primary_key);
	// 	$user = $this->db->get('iuran')->row();
		
	// 	if(empty($user))
	// 	return false;
		
	// 	$this->db->insert('anggota',array(
	// 	'na_anggota' => $primary_key,
	// 	'action'=>'delete'));
	// 	return true;
	// }

}