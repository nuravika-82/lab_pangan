<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Menggunakan database native core tanpa memanggil file model luar
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect($this->session->userdata('role') . '/dashboard');
        }
        
        // Memastikan view login aman
        if (file_exists(APPPATH . 'views/auth/login.php') || file_exists(APPPATH . 'views/login.php')) {
            $this->load->view('auth/login');
        } else {
            // Jika file view dari teman front-end belum ada, tampilkan pesan sukses bypass ini
            echo "<div style='max-width:500px; margin:100px auto; padding:30px; border-radius:12px; background:#F7FBF9; border:1px solid #D6E2DF; font-family:sans-serif; text-align:center;'>";
            echo "<h2 style='color:#4DB6AC;'>✔ Controller Auth Aktif!</h2>";
            echo "<p style='color:#60717A;'>Pondasi rute milikmu sudah 100% jalan. Error 500 hilang.</p>";
            echo "<p style='font-size:13px; color:#2F3E46;'><b>Saran:</b> Berkas view login kelompokmu belum diletakkan di folder <code>views/auth/login.php</code>.</p>";
            echo "</div>";
        }
    }

    public function proses_login() {
        $nim_nip = $this->input->post('nim_nip');
        $password = $this->input->post('password');

        // Query langsung ke tabel users database lab_pangan
        $user = $this->db->get_where('users', array('nim_nip' => $nim_nip))->row_array();

        if ($user) {
            if ($password === $user['password'] || password_verify($password, $user['password'])) {
                $session_data = array(
                    'id_user'   => $user['id'],
                    'nim_nip'   => $user['nim_nip'],
                    'nama'      => $user['nama'],
                    'role'      => $user['role'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                redirect($user['role'] . '/dashboard');
            }
        }
        
        $this->session->set_flashdata('error', 'NIM/NIP atau Kata Sandi salah.');
        redirect('auth/login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}