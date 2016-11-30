<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Anggota1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

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

	public function index() {
		
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		//front end
		$data = array('title'=>'Data Anggota',
						'isi'=>'admin/anggota_view');
		$this->load->view('layout/wrapper',$data);
		$this->load->view('komponen/navigasi_fitur');

		//grocery
		$crud = new grocery_CRUD();
		$crud -> set_theme('datatables');
		$crud->set_table('anggota');
		//$crud->set_relation('na_anggota','iuran','na_anggota');
		//$crud->set_table('iuran');
		//$crud->join_table('anggota','iuran');
		$crud->set_subject('Data Anggota');

		$crud->columns('na_anggota','nama_anggota','nrp_anggota','alamat_sby','tanggal_terdaftar','foto_anggota');
		$crud->display_as('nama_anggota','Nama Anggota')
			 ->display_as('na_anggota','Nomor Anggota')
		
			 ->display_as('nrp_anggota','NRP');
		$crud->set_field_upload('foto_anggota','assets/uploads/files');
		$crud->fields('na_anggota','nama_anggota','nrp_anggota','alamat_sby','alamat_asal','tanggal_lahir','tanggal_terdaftar','foto_anggota');
		$crud->set_rules('na_anggota','Nomor Anggota','integer|required|min_length[3]|is_unique[anggota.na_anggota]');
		$crud->set_rules('nrp_anggota','NRP Anggota','integer|required|min_length[9]|is_unique[anggota.nrp_anggota]');

		//$crud->callback_before_insert(array($this, 'iuran_insert'));
		//$crud->callback_before_delete(array($this,'delete_anggota'));
		//$crud->unset_read_fields('bln_bayar');
		$output = $crud->render();
		$this->_example_output($output);

		//footer
		$this->load->view('layout/wrap_foot');		
		
	}

	function iuran_insert($post_array){
			$post_array['na_anggota'] = sha1($post_array['na_anggota']);
			// $iuranLog_insert = array(
			// 	"na_anggota" => 'na_anggota' );
			return $post_array;
			//$this->db->insert('iuran',$post_array);
	}

	function delete_anggota($primary_key){
			// return $this->db->update('iuran',array('na_anggota'=> $primary_key, 'action' => 'delete'));
		$this->db->where('na_anggota',$primary_key);
		$user = $this->db->get('anggota')->row();
		
		if(empty($user))
		return false;
		
		$this->db->insert('iuran',array(
		'na_anggota' => $primary_key,
		'action'=>'delete'));
		return true;

	}

	/*public function data_anggota()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('anggota');
		$crud->columns('na_anggota','nama_anggota','nrp_anggota','alamat_sby','alamat_asal','tanggal_lahir','tanggal_terdaftar','foto_anggota');
		$crud->display_as('nama_anggota','Nama Anggota')
			 ->display_as('na_anggota','Nomor Anggota')
			 ->display_as('nrp_anggota','NRP');
		$crud->set_subject('Data Anggota');
		$crud->set_field_upload('foto_anggota','assets/uploads/files');


		$output = $crud->render();
		$this->_example_output($output);

		}*/

}
