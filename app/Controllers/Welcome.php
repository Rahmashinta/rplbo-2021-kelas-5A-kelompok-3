<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('HalamanUtama.php', $data);
    }
}
