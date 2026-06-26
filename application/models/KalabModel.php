<?php

namespace App\Models;

use CodeIgniter\Model;

class KalabModel extends Model
{
    protected $table            = 'kalab';
    protected $primaryKey       = 'id_kalab';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'id_user',
        'nip',
        'gelar_depan',
        'gelar_belakang',
        'spesialisasi',
        'tanggal_mulai_jabatan',
        'periode_jabatan',
        'visi_misi',
        'catatan_kepemimpinan'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'id_user'  => 'required|integer|is_unique[kalab.id_user,id_kalab,{id_kalab}]',
        'nip'      => 'required|is_unique[kalab.nip,id_kalab,{id_kalab}]',
        'tanggal_mulai_jabatan' => 'required|valid_date',
    ];

    public function getKalabWithUser()
    {
        return $this->select('kalab.*, users.nama, users.email, users.foto')
                    ->join('users', 'users.id = kalab.id_user')
                    ->first();
    }

    public function isStillActive($id_kalab)
    {
        $data = $this->find($id_kalab);
        if ($data) {
            $akhir = date('Y-m-d', strtotime($data['tanggal_mulai_jabatan'] . ' + ' . $data['periode_jabatan'] . ' months'));
            return date('Y-m-d') <= $akhir;
        }
        return false;
    }
}