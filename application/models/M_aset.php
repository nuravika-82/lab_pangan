<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {
    public function get_all_aset() {
        $this->db->select('barang.*, kategori.nama_kategori, lokasi.nama_lokasi, lokasi.penanggung_jawab');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->join('lokasi', 'lokasi.id_lokasi = barang.id_lokasi');
        return $this->db->get()->result_array();
    }
}