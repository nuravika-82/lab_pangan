<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalab extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Proteksi pimpinan: pastikan user adalah Kepala Laboratorium (kalab)
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'kalab') {
            $this->session->set_flashdata('error', 'Akses ditolak. Halaman khusus Kepala Laboratorium.');
            redirect('auth/login');
        }
        $this->load->model('staffmodel');
        $this->load->model('kalabmodel');
    }

    public function dashboard() {
        $data['total_alat']   = $this->db->count_all('alat');
        $data['total_staff']  = $this->db->count_all('staff');
        $data['total_pinjam'] = $this->db->count_all('peminjaman');

        // Tarik data riwayat lengkap untuk pantauan eksekutif pimpinan
        $this->db->select('peminjaman.*, users.nama as nama_peminjam, alat.nama_alat');
        $this->db->from('peminjaman');
        $this->db->join('users', 'users.id = peminjaman.id_user');
        $this->db->join('alat', 'alat.id_alat = peminjaman.id_alat');
        $data['riwayat'] = $this->db->get()->result_array();

        $this->load->view('kalab/dashboard', $data);
    }

    public function kelola_staff() {
        // Ambil data staff laboratorium pangan secara menyeluruh
        $data['staff'] = $this->db->get('staff')->result_array();
        $this->load->view('kalab/kelola_staff', $data);
    }

    public function simpan_staff() {
        $data_simpan = array(
            'id_user'           => $this->input->post('id_user'), // Terhubung ke tabel user id
            'posisi'            => $this->input->post('posisi'),  // laboran, admin, teknisi
            'bidang_keahlian'   => $this->input->post('bidang_keahlian'),
            'tanggal_bergabung' => $this->input->post('tanggal_bergabung'),
            'jam_kerja_mulai'   => $this->input->post('jam_kerja_mulai'),
            'jam_kerja_selesai' => $this->input->post('jam_kerja_selesai'),
            'status_keaktifan'  => $this->input->post('status_keaktifan'),
            'catatan'           => $this->input->post('catatan'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        );

        $this->db->insert('staff', $data_simpan);
        $this->session->set_flashdata('success', 'Data teknisi staff baru berhasil didaftarkan pimpinan.');
        redirect('kalab/kelola_staff');
    }

    public function ubah_staff($id_staff) {
        $data_update = array(
            'posisi'            => $this->input->post('posisi'),
            'bidang_keahlian'   => $this->input->post('bidang_keahlian'),
            'tanggal_bergabung' => $this->input->post('tanggal_bergabung'),
            'jam_kerja_mulai'   => $this->input->post('jam_kerja_mulai'),
            'jam_kerja_selesai' => $this->input->post('jam_kerja_selesai'),
            'status_keaktifan'  => $this->input->post('status_keaktifan'),
            'catatan'           => $this->input->post('catatan'),
            'updated_at'        => date('Y-m-d H:i:s')
        );

        $this->db->where('id_staff', $id_staff);
        $this->db->update('staff', $data_update);
        $this->session->set_flashdata('success', 'Data berkas staff berhasil dimodifikasi.');
        redirect('kalab/kelola_staff');
    }

    public function hapus_staff($id_staff) {
        $this->db->where('id_staff', $id_staff);
        $this->db->delete('staff');
        $this->session->set_flashdata('success', 'Data penugasan staff berhasil dicabut oleh Kalab.');
        redirect('kalab/kelola_staff');
    }
}