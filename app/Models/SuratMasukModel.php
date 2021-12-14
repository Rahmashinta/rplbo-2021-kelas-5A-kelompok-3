<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table = 'suratmasuk';
    protected $userTimestamps = true;
    protected $allowedFields = ['asalSurat', 'tanggalSurat', 'perihalSurat', 'kategoriSurat', 'fileSurat'];

    public function getSuratMasuk()
    {
        // return $this->table('suratmasuk');
        return $this->findAll();
    }
    // public function getSuratMasukById($id)
    // {
    //     //return $this->table('suratmasuk')->where('id', $id);
    //     return $this->findAll($id);
    // }
    public function getSuratMasukById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
