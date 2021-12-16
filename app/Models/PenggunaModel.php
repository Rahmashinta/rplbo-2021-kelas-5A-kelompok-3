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
        return $this->findAll();
    }
    public function getPenggunaByUsername($username)
    {
        if ($username == null) {
            return $this->findAll();
        }
        return $this->where(['username' => $username])->first();
    }

    public function getPenggunaById($id)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function search($keyword)
    {
        return $this->table('pengguna')->like('username', $keyword)->orlike('password', $keyword)->orlike('nama', $keyword)->orlike('levelakses', $keyword);
    }
}
