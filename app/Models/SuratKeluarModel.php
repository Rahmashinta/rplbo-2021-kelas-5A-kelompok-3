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
        return $this->findAll();
    }
    public function getSuratKeluarById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function search($keyword)
    {
        return $this->table('suratkeluar')->like('penerimaSurat', $keyword)->orlike('tanggalSurat', $keyword)->orlike('perihalSurat', $keyword)->orlike('kategoriSurat', $keyword)->orlike('fileSurat', $keyword);
    }
}
