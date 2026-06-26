<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'nama',
        'email',
        'password',
        'role', // admin, kalab, peminjam
        'nim_nip',
        'no_hp',
        'foto',
        'status'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        'nama'  => 'required|min_length[3]',
        'role'  => 'required|in_list[admin,kalab,peminjam]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Email sudah terdaftar. Silakan gunakan email lain.',
        ],
    ];

    public function getByRole($role)
    {
        return $this->where('role', $role)->findAll();
    }

    public function isActivePeminjam($id)
    {
        return $this->where('id', $id)->where('status', 'aktif')->first();
    }
}