<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Rute Utama Bawaan Framework CodeIgniter 3
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// =========================================================================
// 1. GERBANG OTENTIKASI / PUBLIK (Huruf Kecil Semua)
// =========================================================================
$route['auth'] = 'auth/index';
$route['auth/login'] = 'auth/index';
$route['auth/proses_login'] = 'auth/proses_login';
$route['auth/register'] = 'auth/register';
$route['auth/proses_register'] = 'auth/proses_register';
$route['auth/lupa_password'] = 'auth/lupa_password';
$route['auth/proses_lupa_password'] = 'auth/proses_lupa_password';
$route['auth/logout'] = 'auth/logout';

// =========================================================================
// 2. HAK AKSES ROLE: ADMIN / LABORAN (CRUD Alat, Kontrol Stok, Verifikasi)
// =========================================================================
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/kelola_alat'] = 'admin/kelola_alat';
$route['admin/kelola_alat/simpan'] = 'admin/simpan_alat';
$route['admin/kelola_alat/ubah/(:num)'] = 'admin/ubah_alat/$1';
$route['admin/kelola_alat/hapus/(:num)'] = 'admin/hapus_alat/$1';
$route['admin/staff_admin'] = 'admin/staff_admin';
$route['admin/verifikasi_peminjaman'] = 'admin/verifikasi_peminjaman';
$route['admin/verifikasi_peminjaman/proses/(:num)'] = 'admin/proses_verifikasi/$1';

// =========================================================================
// 3. HAK AKSES ROLE: KEPALA LABORATORIUM / KALAB (Monitoring & Kelola Staff)
// =========================================================================
$route['kalab/dashboard'] = 'kalab/dashboard';
$route['kalab/kelola_staff'] = 'kalab/kelola_staff';
$route['kalab/kelola_staff/simpan'] = 'kalab/simpan_staff';
$route['kalab/kelola_staff/ubah/(:num)'] = 'kalab/ubah_staff/$1';
$route['kalab/kelola_staff/hapus/(:num)'] = 'kalab/hapus_staff/$1';

// =========================================================================
// 4. HAK AKSES ROLE: PEMINJAM / MAHASISWA / DOSEN (Sirkulasi Terkunci & Export)
// =========================================================================
$route['peminjam/dashboard'] = 'peminjam/dashboard';
$route['peminjam/pinjam_alat'] = 'peminjam/pinjam_alat';
$route['peminjam/proses_pinjam'] = 'peminjam/proses_pinjam';
$route['peminjam/pengembalian_alat'] = 'peminjam/pengembalian_alat';
$route['peminjam/proses_kembali/(:num)'] = 'peminjam/proses_kembali/$1';
$route['peminjam/riwayat'] = 'peminjam/riwayat';
$route['peminjam/cetak_bukti/(:num)'] = 'peminjam/cetak_bukti/$1';
$route['peminjam/cetak_word/(:num)'] = 'peminjam/cetak_word/$1';