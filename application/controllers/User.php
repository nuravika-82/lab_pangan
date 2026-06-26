<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Memuat Model M_user (Pastikan nama file modelnya: M_user.php)
        $this->load->model('M_user');
    }

    public function index() {
        $data['title'] = 'Daftar Nama User';
        // Perbaikan: Pastikan pemanggilan model sesuai (M_user)
        $data['user'] = $this->M_user->get_all_data();

        // Load halaman sesuai layout terpisah
        // Perbaikan: Jika variabel $role belum ada, kita pakai default dashboard saja dulu
        $this->load->view('templates/v_header', $data);
        $this->load->view('v_user', $data);
        $this->load->view('templates/v_footer');
    }

    public function tambah() {
        $data['title'] = 'Tambah User';
        $this->load->view('templates/v_header', $data);
        $this->load->view('v_tambah_user');
        $this->load->view('templates/v_footer');
    }

    public function simpan() {
        $data = array(
            'username' => $this->input->post('username'),
            // 🔥 PERBAIKAN: Tangkap input 'role' dari dropdown, bukan 'nama' lagi
            'role'     => $this->input->post('role'), 
            'password' => md5('12345') 
        );
        
        $this->M_user->insert_data($data);
        redirect('index.php/user'); 
    }

    public function cari() {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Hasil Pencarian User';
        $data['user'] = $this->M_user->search_data($keyword);
        
        $this->load->view('templates/v_header', $data);
        $this->load->view('v_user', $data);
        $this->load->view('templates/v_footer');
    }
}