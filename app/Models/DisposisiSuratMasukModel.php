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
        return $this->findAll();
    }
    public function getDisposisiSuratMasukById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('disposisisuratmasuk')->like('nomorSurat', $keyword)->orlike('tanggalSurat', $keyword)->orlike('perihalSurat', $keyword)->orlike('asalSurat', $keyword)->orlike('penerimaDisposisi', $keyword)->orlike('sifatSurat', $keyword)->orlike('isiDisposisi', $keyword)->orlike('catatan', $keyword)->orlike('penerimaPengembalian', $keyword)->orlike('tanggalPengembalian', $keyword);
    }
}
