<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
	
	// Fungsi untuk mengambil seluruh data dari tabel mahasiswa
	public function get_all_data() {
		// Sama dengan query: SELECT * FROM mahasiswa
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}

	// Tambah data mahasiswa
	public function insert_data($data) {
	return $this->db->insert('mahasiswa', $data);
	}


	public function search_data($keyword) {
	$this->db->like('nim', $keyword);
	$this->db->or_like('nama', $keyword);
	$query = $this->db->get('mahasiswa');
	return $query->result_array();
	}
}