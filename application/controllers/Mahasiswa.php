<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct() {
	parent::__construct();
	// Memuat Model M_mahasiswa agar bisa digunakan di semua fungsi dalam controller ini
	$this->load->model('M_mahasiswa');
	}

	public function index() {
	// Menyiapkan data untuk dikirim ke View
	$data['title'] = 'Daftar Mahasiswa Berbakat';
	$data['mahasiswa'] = $this->M_mahasiswa->get_all_data();

	// 2. MENGAMBIL DATA PRODI (PENTING!)
        // Jika data prodi ada di tabel 'prodi', kamu bisa panggil langsung via query builder:
        $data['prodi'] = $this->db->get('prodi')->result_array();

	// Memuat View secara modular (Header, Isi Konten, Footer)
	$this->load->view('templates/v_header', $data);
	$this->load->view('v_mahasiswa', $data);
	$this->load->view('v_prodi', $data);
	$this->load->view('templates/v_footer');
	}

	public function tambah() {
	$data['title'] = 'Tambah Mahasiswa Baru';
	$this->load->view('templates/v_header', $data);
	$this->load->view('v_tambah_mahasiswa');
	$this->load->view('templates/v_footer');
	}

	public function simpan() {
	$data = array(
		'nim' => $this->input->post('nim'),
		'nama' => $this->input->post('nama')
	);
	$this->M_mahasiswa->insert_data($data);
	redirect('mahasiswa');
	}

	public function cari() {
	$keyword = $this->input->post('keyword');
	$data['title'] = 'Hasil Pencarian Mahasiswa';
	$data['mahasiswa'] = $this->M_mahasiswa->search_data($keyword);
	$this->load->view('templates/v_header', $data);
	$this->load->view('v_mahasiswa', $data);
	$this->load->view('templates/v_footer');
	}
}
?>
