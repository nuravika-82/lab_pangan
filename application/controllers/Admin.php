<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Proteksi keamanan: pastikan user sudah login dan merupakan admin
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'admin') {
            $this->session->set_flashdata('error', 'Akses ditolak. Anda bukan Admin/Laboran.');
            redirect('auth/login');
        }
        $this->load->model('alatmodel');
        $this->load->model('peminjamanmodel');
    }

    public function dashboard() {
        // Menghitung ringkasan data statistik visual di dashboard
        $data['total_alat']     = $this->db->select_sum('jumlah')->get('alat')->row()->jumlah ?? 0;
        $data['total_dipinjam'] = $this->db->select_sum('jumlah_pinjam')->get_where('peminjaman', array('status' => 'dipinjam'))->row()->jumlah_pinjam ?? 0;
        $data['total_pending']  = $this->db->where('status', 'pending')->count_all_results('peminjaman');
        $data['total_selesai']  = $this->db->where('status', 'selesai')->count_all_results('peminjaman');
        
        // Mengambil semua riwayat peminjaman dengan teknik JOIN
        $this->db->select('peminjaman.*, users.nama as nama_peminjam, users.nim_nip, alat.nama_alat');
        $this->db->from('peminjaman');
        $this->db->join('users', 'users.id = peminjaman.id_user');
        $this->db->join('alat', 'alat.id_alat = peminjaman.id_alat');
        $this->db->order_by('peminjaman.id_peminjaman', 'DESC');
        $data['riwayat'] = $this->db->get()->result_array();

        $this->load->view('admin/dashboard', $data);
    }

    public function kelola_alat() {
        $data['alat'] = $this->db->get('alat')->result_array();
        $this->load->view('admin/kelola_alat', $data);
    }

    public function simpan_alat() {
        // Pengolahan upload berkas gambar alat laboratorium
        $config['upload_path']   = './public/img/alat/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);

        $gambar = 'default-alat.png';
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data_simpan = array(
            'kode_alat'   => $this->input->post('kode_alat'),
            'nama_alat'   => $this->input->post('nama_alat'),
            'kategori'    => $this->input->post('kategori'),
            'jumlah'      => $this->input->post('jumlah'),
            'tersedia'    => $this->input->post('jumlah'), // Stok awal tersedia disamakan dengan total jumlah alat
            'kondisi'     => $this->input->post('kondisi'),
            'lokasi_rak'  => $this->input->post('lokasi_rak'),
            'keterangan'  => $this->input->post('keterangan'),
            'gambar'      => $gambar,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s')
        );

        $this->db->insert('alat', $data_simpan);
        $this->session->set_flashdata('success', 'Data alat baru berhasil ditambahkan.');
        redirect('admin/kelola_alat');
    }

    public function ubah_alat($id_alat) {
        $alat = $this->db->get_where('alat', array('id_alat' => $id_alat))->row_array();
        
        $config['upload_path']   = './public/img/alat/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);

        $gambar = $alat['gambar'];
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data_update = array(
            'nama_alat'   => $this->input->post('nama_alat'),
            'kategori'    => $this->input->post('kategori'),
            'jumlah'      => $this->input->post('jumlah'),
            'tersedia'    => $this->input->post('tersedia'),
            'kondisi'     => $this->input->post('kondisi'),
            'lokasi_rak'  => $this->input->post('lokasi_rak'),
            'keterangan'  => $this->input->post('keterangan'),
            'gambar'      => $gambar,
            'updated_at'  => date('Y-m-d H:i:s')
        );

        $this->db->where('id_alat', $id_alat);
        $this->db->update('alat', $data_update);
        $this->session->set_flashdata('success', 'Data spesifikasi alat berhasil diperbarui.');
        redirect('admin/kelola_alat');
    }

    public function hapus_alat($id_alat) {
        $this->db->where('id_alat', $id_alat);
        $this->db->delete('alat');
        $this->session->set_flashdata('success', 'Alat berhasil dihapus dari inventaris.');
        redirect('admin/kelola_alat');
    }

    public function staff_admin() {
        // Menampilkan ringkasan seluruh staff yang ada di laboratorium
        $data['staff'] = $this->db->get('staff')->result_array();
        $this->load->view('admin/staff_admin', $data);
    }

    public function verifikasi_peminjaman() {
        $this->db->select('peminjaman.*, users.nama as nama_peminjam, users.nim_nip, alat.nama_alat');
        $this->db->from('peminjaman');
        $this->db->join('users', 'users.id = peminjaman.id_user');
        $this->db->join('alat', 'alat.id_alat = peminjaman.id_alat');
        $data['peminjaman'] = $this->db->get()->result_array();
        
        $this->load->view('admin/verifikasi_peminjaman', $data);
    }

    public function proses_verifikasi($id_peminjaman) {
        $status_baru = $this->input->post('status'); // dipinjam atau selesai
        $peminjaman = $this->db->get_where('peminjaman', array('id_peminjaman' => $id_peminjaman))->row_array();

        if ($status_baru === 'dipinjam') {
            $alat = $this->db->get_where('alat', array('id_alat' => $peminjaman['id_alat']))->row_array();
            
            // Validasi sisa stok riil di database
            if ($alat['tersedia'] < $peminjaman['jumlah_pinjam']) {
                $this->session->set_flashdata('error', 'Stok alat saat ini tidak memadai untuk disetujui.');
                redirect('admin/verifikasi_peminjaman');
                return;
            }

            // Kurangi stok alat secara dinamis menggunakan database builder
            $this->db->set('tersedia', 'tersedia - ' . (int)$peminjaman['jumlah_pinjam'], FALSE);
            $this->db->where('id_alat', $peminjaman['id_alat']);
            $this->db->update('alat');
        }

        $data_update = array(
            'status'         => $status_baru,
            'disetujui_oleh' => $this->session->userdata('id_user'),
            'updated_at'     => date('Y-m-d H:i:s')
        );

        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('peminjaman', $data_update);
        
        $this->session->set_flashdata('success', 'Status validasi peminjaman sukses diperbarui.');
        redirect('admin/verifikasi_peminjaman');
    }
}