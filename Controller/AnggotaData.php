<?php
class AnggotaData extends CI_Controller {

	private $limit = 5;

	function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library(array('table','form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('Anggota1_model','',TRUE);
	}

	function index($offset = 0, $order_column = 'na_anggota', $order_type = 'asc')
	{

		if (empty($offset)) $offset = 0;
		if (empty($order_column)) $order_column = 'na_anggota';
		if (empty($order_type)) $order_type = 'asc';
		//TODO: check for valid column
		 $data = array('title' => 'Daftar Anggota',
						'sub' => 'Utama');

		// load data
		$Students = $this->Anggota1_model->get_paged_list($this->limit, $offset, $order_column, $order_type)->result();
	 
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('AnggotaData/index/');
		$config['total_rows'] = $this->Anggota1_model->count_all();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = 3;

		//bootstrap
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '« prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'next »';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
	 
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$new_order = ($order_type == 'asc' ? 'desc' : 'asc');
		$this->table->set_heading(
			'No',
			anchor('AnggotaData/index/'.$offset.'/na_anggota/'.$new_order, 'Nomor Anggota'),
			anchor('AnggotaData/index/'.$offset.'/nama_anggota/'.$new_order, 'Nama'),
			anchor('AnggotaData/index/'.$offset.'/nrp_anggota/'.$new_order, 'NRP'),
			'Actions'
		);
		$i = 0 + $offset;
		foreach ($Students as $Student){
			$this->table->add_row(++$i, 
								  $Student->na_anggota,
								  $Student->nama_anggota, 
								  $Student->nrp_anggota,
				anchor('AnggotaData/view/'.$Student->na_anggota,'view',array('class'=>'view'))
			);
		}
		$data['table'] = $this->table->generate();
		
		
		// load view
		$this->load->view('anggota/head',$data);
		$this->load->view('layout/header_general');
		$this->load->view('anggota/index', $data);
		$this->load->view('layout/footer');
	}


	function view($id){
		// set common properties
		$data = array('title' => 'Anggota Details',
						'sub' => $id);
		$data['link_back'] = anchor('AnggotaData/index/','Kembali ke list anggota',array('class'=>'back'));

		// get Student details
		$data['Student'] = $this->Anggota1_model->get_by_id($id)->row();

		// load view
		$this->load->view('anggota/head',$data);
		$this->load->view('layout/header_general');
		$this->load->view('anggota/view', $data);
		$this->load->view('layout/footer');
	}


	 // function cariData(){
	 // 	$this->load->library('pagination');
		// $config['base_url'] = site_url('AnggotaData/cariData/');
		// $config['total_rows'] = $this->Anggota1_model->count_all();
		// $config['per_page'] = $this->limit;
		// $config['uri_segment'] = 3;
		// $this->pagination->initialize($config);
		// $data['pagination'] = $this->pagination->create_links();

		// $cari=$this->input->get('cari');
		// $data['cari']=$this->Anggota1_model->cariSiswa($cari);

		// $this->load->view('anggota/head');
		// $this->load->view('layout/header_general');
		// $this->load->view('anggota/search',$data);
		// $this->load->view('layout/footer');
		// }

  function cari() {

  // 	$this->load->library('pagination');
		// $config['base_url'] = site_url('AnggotaData/cari/');
		// $config['total_rows'] = $this->Anggota1_model->count_all();
		// $config['per_page'] = $this->limit;
		// $config['uri_segment'] = 3;
		// $this->pagination->initialize($config);
		// $data['pagination'] = $this->pagination->create_links();
  //      $data['tampil']=$this->Anggota1_model->caridata();
  //      //jika data yang dicari tidak ada maka akan keluar informasi 
  //      //bahwa data yang dicari tidak ada
  //      if($data['tampil']==null) {
  //        //  print 'maaf data yang anda cari tidak ada atau keywordnya salah';
  //        // print br(2);
  //        //  print anchor('AnggotaData','kembali');
  //      	$this->load->view('anggota/head');
  //         	$this->load->view('layout/header_general');
  //         	$this->load->view('anggota/search',$data); 
  //         	$this->load->view('anggota/error'); 
  //           $this->load->view('layout/footer');
  //         }
  //         else {
  //         	$this->load->view('anggota/head');
  //         	$this->load->view('layout/header_general');
  //            $this->load->view('anggota/search',$data); 
  //            $this->load->view('layout/footer');
  //        }
  //        if ($data['tampil']==0) {
  //        	$this->load->view('anggota/head');
  //         	$this->load->view('layout/header_general');
  //         	$this->load->view('anggota/search',$data); 
  //         	$this->load->view('anggota/error'); 
  //           $this->load->view('layout/footer');
  //        }
  	//Inisiasi Halaman
  	$data = array('title' => 'Pencarian',
						'sub' => 'Tampilkan');

  	$this->load->library('pagination');

  	if (isset($_POST['q'])) {
			$data['ringkasan'] = $this->input->post('cari');
			// se session userdata untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data['ringkasan']);
		}
		else {
			$data['ringkasan'] = $this->session->userdata('sess_ringkasan');
		}


		// load model
		$this->load->model('Anggota1_model');

		$this->db->like('nama_anggota', $data['ringkasan']);
        $this->db->from('anggota');

		// pagination limit
		$config['base_url'] = base_url().'AnggotaData/cari/page/';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = 4;
		$config['num_links'] = 5;

		//bootstrap
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '« prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'next »';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['ListAnggota'] = $this->Anggota1_model->ambildata($config['per_page'],$this->uri->segment(4,0),$data['ringkasan']);

		$this->load->view('anggota/head',$data);
		$this->load->view('layout/header_general');
		$this->load->view('anggota/search');
		$this->load->view('layout/footer');
	}
}


?>