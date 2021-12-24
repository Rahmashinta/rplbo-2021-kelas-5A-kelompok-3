<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukModel extends Model
{
    protected $table = 'suratmasuk';
    protected $userTimestamps = true;
    protected $allowedFields = ['asalSurat', 'nomorSurat', 'tanggalSurat', 'perihalSurat', 'kategoriSurat', 'fileSurat'];

    public function getSuratMasuk()
    {
        return $this->findAll();
    }
    public function getSuratMasukById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function search($keyword)
    {
        return $this->table('suratmasuk')->like('asalSurat', $keyword)->orlike('nomorSurat', $keyword)->orlike('tanggalSurat', $keyword)->orlike('perihalSurat', $keyword)->orlike('kategoriSurat', $keyword)->orlike('fileSurat', $keyword);
    }
}
