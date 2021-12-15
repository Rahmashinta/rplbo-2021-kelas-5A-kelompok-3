<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('welcome.php', $data);
    }
}
