<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		
	}

	function getAdmin(){
		$this->db->order_by('id_user','asc');
		$this->db->select("id_user, username");
		$this->db->from('users');
		$query = $this->db->get();
		return $query ->result();
	}
	
	function input_data($data){
		return $this->db->insert('users', $data);
	}

	function getLogin($username){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		if ($query-> num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}
	}
	
//Update Password
	public function save($new_pass)
	 {
			$data = array(
           'password' => $new_pass);
		    $this->db->where('id_user', $this->input->post('id_user'));
		    $this->db->update('users', $data);
		    return true; 
	 }

	  public function cek_old($old_password)
	  	{
					$id = $this->input->post('id_user');
		            $this->db->where('username', $this->session->userdata('username'));
		            $this->db->where('id_user', $id);
				    $this->db->where('password', $old_password);
				    $query = $this->db->get('users');
				    if($query->num_rows() > 0)
				        return 1;
				    else
				        return 0;
	 	}
}
