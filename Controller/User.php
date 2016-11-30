<?php
class User extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library(array('table','session','form_validation'));
		$this->load->helper(array('form', 'url','security'));
		$this->load->model('User_model');
		$this->load->database();
        $this->load->library('bcrypt');
        
        if(!$this->session->userdata('username')){
        redirect('login');
        }
	}

	function index(){
		$this->data['posts'] = $this->User_model->getAdmin();

        $data =  array('title' =>'Profile'); 
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header');
		$this->load->view('admin/admin_list',$this->data);
        $this->load->view('layout/footer');
	}

	function tambah(){
		   // set form validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('layout/head');
            $this->load->view('admin/admin_add');
        }
        else
        {
            //insert user details into db
            $data = array(
            	// 'id_user' => $this->input->post(NULL),
                'username' => $this->input->post('username'),
                'password' => $this->bcrypt->hash_password($this->input->post('password')),
            );

            if ($this->User_model->input_data($data))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Berhasil Menambahkan Admin!</div>');
                redirect('User/tambah');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('User/tambah');
            }
        }
     
		
	}
	function hapus($id){
        $this->db->where('username',$this->session->userdata('username'),$id);
        $this->db->delete('users');
        redirect('login');
	}
	function update(){
        // $this->form_validation->set_rules('opassword', 'Password', 'trim|required');
        // $this->form_validation->set_rules('npassword', 'New Password', 'required|matches[cpassword]');
        // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
        // if($this->form_validation->run() == FALSE){
        //     $sessionData = $this->session->userdata('username');
        //     // $this->data['id_user'] = $sessionData["id_user"];
        //     // $this->data['username'] = $sessionData["username"];

        //     $this->load->view('layout/header');
        //     $this->load->view('admin/updateAdmin');
        //     $this->load->view('layout/footer');
        // }else{
        //   $query = $this->User_model->cek_old(sha1($this->input->post('opassword')));
        //   if($query){
        //     $query = $this->User_model->save(sha1($this->input->post('npassword')));
        //     if($query){
        //       redirect('User');
        //     }else{
        //       redirect('User');
        //     }
        //   }

        // }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('opassword','Old Password','required|trim|callback_change');
        $this->form_validation->set_rules('npassword','New Password','required|trim');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[npassword]');

        if($this->form_validation->run()!= true)
        {
            $this->load->view('layout/head');
            $this->load->view('layout/header');
            $this->load->view('admin/updateAdmin');
            $this->load->view('layout/footer');
        }
}

    function change(){
        // $sessionData = $this->session->userdata('username');
        // $this->data['id_user'] = $sessionData['id_user'];
        // $this->data['username'] = $sessionData['username'];

        // $this->load->view('layout/head');
        //     $this->load->view('layout/header', $this->data);
        //     $this->load->view('admin/updateAdmin');
        //     $this->load->view('layout/footer');

        $sql = $this->db->select('*')->from('users')->where('username',$this->session->userdata('username'))->get();

        foreach ($sql->result() as $my_info) {

        $db_password = $my_info->password;
        $db_id = $my_info->id_user;

        }

        if(md5($this->input->post('opassword')) == $db_password){
            error_reporting(0);
        $fixed_pw = mysql_real_escape_string(md5($this->input->post('npassword')));
        $update = $this->db->query("UPDATE users SET password='$fixed_pw' WHERE id_user='$db_id'")or die(mysql_error());
        // $update = $this->db->
        // $update = $this->db->update('users');
        $this->form_validation->set_message('change','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Password Updated!</strong></div>');
        return false;

        }else
        $this->form_validation->set_message('change','<div class="alert alert-error"><a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Wrong Old Password!</strong> </div>');

        return false;

}

	// function profile(){
	// 		$details = $this->User_model->get_user_by_id($this->session->userdata('id_user'));
	// 	$data['username'] = $details->username;
	// 	$this->load->view('admin/profile_view', $data);
	// }
}
