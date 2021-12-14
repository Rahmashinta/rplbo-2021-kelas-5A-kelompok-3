<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratLegalisirModel extends Model
{
    protected $table = 'suratlegalisir';
    protected $userTimestamps = true;
    protected $allowedFields = ['nama', 'kelas', 'tahunAjaran', 'fileSurat'];

    public function getSuratLegalisir()
    {
        return $this->findAll();
    }
    public function getSuratLegalisirById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
