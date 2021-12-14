<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table = 'suratkeluar';
    protected $userTimestamps = true;
    protected $allowedFields = ['penerimaSurat', 'tanggalSurat', 'perihalSurat', 'kategoriSurat', 'fileSurat'];

    public function getSuratKeluar()
    {
        // return $this->table('suratmasuk');
        return $this->findAll();
    }
    public function getSuratKeluarById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
