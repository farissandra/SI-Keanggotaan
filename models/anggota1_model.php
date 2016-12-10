<?php
class Anggota1_model extends CI_Model{
	private $primary_key='na_anggota';
	private $table_name='anggota';
	
	function __consturct(){
		parent::__construct();	
	}
	function get_paged_list($limit=10, $offset=0, $order_column='', $order_type='asc'){
		if(empty($order_column)||empty($order_type)){
			$this->db->order_by($this->primary_key,'asc');	
		}
		else{
			$this->db->order_by($order_column,$order_type);
			return $this->db->get($this->table_name, $limit, $offset);
			
		}
	}
	function count_all(){
		return $this->db->count_all($this->table_name);	
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function save($person){
		$this->db->insert($this->table_name,$person);
		return $this->db->insert_id();	
	}
	function update($id,$person){
		$this->db->where($this->primary_key,$id);	
		$this->db->update($this->table_name,$person);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}

		// public function cariSiswa($cari)
		// 	{
		// 	$cari=$this->db->query("select * from anggota where nama_anggota like '%$cari%'  ");
		// 	return $cari->result();
		// 	}

			  function tampil(){
		//$this->db->from('mahasiswa');
		$query = $this->db->get('anggota');
		return $query->result(); 
		 }

		 function caridata(){
		$c = $this->input->POST ('cari');
		$this->db->like('nama_anggota', $c);
		$this->db->like('nrp_anggota', $c);
		$query = $this->db->get ('anggota');
		return $query->result(); 
		 }

 function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('anggota');
		if (!empty($ringkasan)) {
			$this->db->like('nama_anggota', $ringkasan);
			$this->db->or_like('nrp_anggota', $ringkasan);
			$this->db->or_like('na_anggota', $ringkasan);
		}
		$this->db->order_by('na_anggota','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}


}

?>