<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table            = 'staff';
    protected $primaryKey       = 'id_staff';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'id_user',
        'posisi', // laboran, admin, teknisi
        'bidang_keahlian',
        'tanggal_bergabung',
        'jam_kerja_mulai',
        'jam_kerja_selesai',
        'status_keaktifan', // aktif, cuti, nonaktif
        'catatan'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'id_user'             => 'required|integer|is_unique[staff.id_user,id_staff,{id_staff}]',
        'posisi'              => 'required|in_list[laboran,admin,teknisi]',
        'status_keaktifan'    => 'required|in_list[aktif,cuti,nonaktif]',
    ];

    public function getActiveStaff()
    {
        return $this->where('status_keaktifan', 'aktif')->findAll();
    }

    public function getByPosisi($posisi)
    {
        return $this->where('posisi', $posisi)->findAll();
    }
}