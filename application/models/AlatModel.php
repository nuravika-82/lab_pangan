<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $table            = 'alat';
    protected $primaryKey       = 'id_alat';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'kode_alat',
        'nama_alat',
        'kategori',
        'jumlah',
        'tersedia',
        'kondisi', // baik, rusak, perbaikan
        'lokasi_rak',
        'gambar',
        'keterangan'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'kode_alat'  => 'required|is_unique[alat.kode_alat,id_alat,{id_alat}]',
        'nama_alat'  => 'required|min_length[3]',
        'jumlah'     => 'required|integer|greater_than[0]',
        'tersedia'   => 'required|integer|greater_than_equal_to[0]',
        'kondisi'    => 'required|in_list[baik,rusak,perbaikan]',
    ];

    public function checkAvailability($id_alat, $jumlah_dipinjam)
    {
        $alat = $this->find($id_alat);
        if ($alat && $alat['tersedia'] >= $jumlah_dipinjam) {
            return true;
        }
        return false;
    }

    public function reduceStock($id_alat, $jumlah)
    {
        return $this->set('tersedia', "tersedia - $jumlah", false)
                    ->where('id_alat', $id_alat)
                    ->update();
    }

    public function addStock($id_alat, $jumlah)
    {
        return $this->set('tersedia', "tersedia + $jumlah", false)
                    ->where('id_alat', $id_alat)
                    ->update();
    }
}