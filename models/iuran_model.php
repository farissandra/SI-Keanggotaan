<?php

class iuran_model extends CI_Model{

	function get_data(){
		//$result = array();
		$this->db->select("na_anggota,nama_anggota,nrp_anggota,bln_bayar AS byr_tanggal");
		$this->db->from('anggota');
		$query = $this->db->get();
		return $query->result();
	}

	function show($data){
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('na_anggota', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		}
	function update_iuran($id,$data){
		$this->load->database();
		$this->db->where('bln_bayar',$id);
		$this->db->update('anggota',$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('anggota'); //ganti dengan tabel data iuran
		if (!empty($ringkasan)) {
			$this->db->like('na_anggota', $ringkasan);
		}
		$this->db->order_by('na_anggota','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}

}