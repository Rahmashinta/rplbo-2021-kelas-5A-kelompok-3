<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $userTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nama', 'levelakses'];

    public function getPengguna()
    {
        // return $this->table('suratmasuk');
        return $this->findAll();
    }
    public function getPenggunaByUsername($username)
    {
        if ($username == null) {
            return $this->findAll();
        }
        return $this->where(['username' => $username])->first();
    }
}
