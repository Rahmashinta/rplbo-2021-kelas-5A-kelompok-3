<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function pengguna()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('welcome.php', $data);
    }

    public function suratmasuk()
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('suratmasuk/index', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('pages/contact', $data);
    }
    public function beranda()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('pages/beranda', $data);
    }
}
