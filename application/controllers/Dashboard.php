<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper('url');

        // Proteksi: Jika belum login, lempar balik ke login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    // 1. TAMPILAN DASHBOARD UTAMA & FITUR PENCARIAN (SEARCH)
    public function index() {
        $role = $this->session->userdata('role');
        $keyword = $this->input->get('keyword'); // Ambil kata kunci dari form pencarian

        // Logika Pencarian Dinamis
        if (!empty($keyword)) {
            $this->db->like('username', $keyword);
            $this->db->or_like('role', $keyword);
        }
        $data['users'] = $this->db->get('users')->result();

        // Load halaman sesuai layout terpisah
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/' . $role, $data);
        $this->load->view('layout/footer');
    }

    // 2. FUNGSI TAMBAH DATA (INSERT)
    public function tambah() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $data_simpan = [
            'username' => $username,
            'password' => md5($password), // Gunakan enkripsi md5 atau ganti password_hash jika pakai password asli
            'role'     => $role
        ];

        $this->db->insert('users', $data_simpan);
        $this->session->set_flashdata('success', 'Pengguna baru berhasil ditambahkan!');
        redirect('dashboard');
    }

    // 3. FUNGSI EDIT DATA (UPDATE)
    public function edit() {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $data_update = [
            'username' => $username,
            'role'     => $role
        ];

        // Jika form password baru diisi, maka update passwordnya
        if (!empty($password)) {
            $data_update['password'] = md5($password); 
        }

        $this->db->where('id', $id);
        $this->db->update('users', $data_update);
        
        $this->session->set_flashdata('success', 'Data pengguna berhasil diperbarui!');
        redirect('dashboard');
    }

    // 4. FUNGSI HAPUS DATA (DELETE)
    public function hapus($id) {
        // Mencegah admin tidak sengaja menghapus dirinya sendiri yang sedang login
        if ($id == $this->session->userdata('id')) {
            $this->session->set_flashdata('error', 'Anda tidak bisa menghapus akun Anda sendiri yang sedang aktif!');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('users');
            $this->session->set_flashdata('success', 'Pengguna berhasil dihapus dari sistem!');
        }
        redirect('dashboard');
    }
}