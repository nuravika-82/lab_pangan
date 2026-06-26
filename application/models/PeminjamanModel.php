<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id_peminjaman';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'kode_peminjaman',
        'id_user',
        'id_alat',
        'jumlah_pinjam',
        'tgl_pinjam',
        'tgl_kembali',
        'status', // pending, dipinjam, selesai, terlambat
        'keterangan',
        'dokumentasi',
        'disetujui_oleh',
        'tgl_pengembalian_aktual'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'kode_peminjaman' => 'required|is_unique[peminjaman.kode_peminjaman,id_peminjaman,{id_peminjaman}]',
        'id_user'         => 'required|integer',
        'id_alat'         => 'required|integer',
        'jumlah_pinjam'   => 'required|integer|greater_than[0]',
        'tgl_pinjam'      => 'required|valid_date',
        'tgl_kembali'     => 'required|valid_date',
        'status'          => 'required|in_list[pending,dipinjam,selesai,terlambat]',
    ];

    // Method custom untuk menarik data gabungan secara lengkap untuk Dashboard & View
    public function getLengkap()
    {
        return $this->select('peminjaman.*, users.nama as nama_peminjam, users.nim_nip, users.role as role_peminjam, alat.nama_alat, alat.gambar as foto_alat')
                    ->join('users', 'users.id = peminjaman.id_user')
                    ->join('alat', 'alat.id_alat = peminjaman.id_alat')
                    ->orderBy('peminjaman.id_peminjaman', 'DESC')
                    ->findAll();
    }

    public function getByStatus($status)
    {
        return $this->where('status', $status)->findAll();
    }

    public function getHistoryByUser($id_user)
    {
        return $this->where('id_user', $id_user)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }

    public function checkLateReturns()
    {
        $today = date('Y-m-d');
        return $this->set('status', 'terlambat')
                    ->where('tgl_kembali <', $today)
                    ->where('status !=', 'selesai')
                    ->update();
    }
}