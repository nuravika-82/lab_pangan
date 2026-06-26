<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
    // Mengambil seluruh data dari tabel users
    public function get_all_data() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    // Tambah data user
    public function insert_data($data) {
        return $this->db->insert('users', $data);
    } // Perbaikan: Tambah kurung kurawal penutup di sini


    // Cari data berdasarkan username atau role
    public function search_data($keyword) {
        $this->db->like('username', $keyword);
        // 🔥 PERBAIKAN: Ubah dari 'nama' menjadi 'role' agar tidak error saat mencari data
        $this->db->or_like('role', $keyword); 
        $query = $this->db->get('users');
        return $query->result_array();
    }
}