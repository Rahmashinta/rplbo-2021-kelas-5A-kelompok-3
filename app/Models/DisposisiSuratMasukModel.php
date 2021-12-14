<?php

namespace App\Models;

use CodeIgniter\Model;

class DisposisiSuratMasukModel extends Model
{
    protected $table = 'disposisisuratmasuk';
    protected $userTimestamps = true;
    protected $allowedFields = ['nomorSurat', 'tanggalSurat', 'perihalSurat', 'asalSurat', 'penerimaDisposisi', 'sifatSurat', 'isiDisposisi', 'catatan', 'penerimaPengembalian', 'tanggalPengembalian'];

    public function getDisposisiSuratMasuk()
    {
        // return $this->table('suratmasuk');
        return $this->findAll();
    }
    // public function getSuratMasukById($id)
    // {
    //     //return $this->table('suratmasuk')->where('id', $id);
    //     return $this->findAll($id);
    // }
    public function getDisposisiSuratMasukById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
