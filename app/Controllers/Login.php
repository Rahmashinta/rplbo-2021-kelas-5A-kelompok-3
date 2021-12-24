<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Login extends BaseController
{

    protected $penggunaModel;

    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
        ];
        return view('HalamanLogin.php', $data);
    }

    public function validasi()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];

        $username = $this->request->getVar('username');
        $username = strtolower($username);
        $password = $this->request->getVar('password');
        $password = strtolower($password);
        $levelakses = $this->request->getVar('levelakses');
        $levelakses = strtolower($levelakses);

        $pengguna = $this->penggunaModel->getPenggunaByUsername($username);

        if ($pengguna == null) {
            session()->setFlashdata('pesan', 'Username tidak Ditemukan');
            return redirect()->to('login');
        } else {
            if ($username == $pengguna['username'] && $pengguna['password'] == $password && $pengguna['levelakses'] == $levelakses) {
                if ($levelakses == 'resepsionis') {
                    return view('halamanpengguna/HalamanResepsionis', $data);
                } else if ($levelakses == 'staf tata usaha') {
                    return view('halamanpengguna/HalamanStafTataUsaha', $data);
                } else if ($levelakses == 'kepala tata usaha') {
                    return view('halamanpengguna/HalamanKepalaTataUsaha', $data);
                } else if ($levelakses == 'kepala sekolah') {
                    return view('halamanpengguna/HalamanKepalaSekolah', $data);
                }
                return redirect()->to('login');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password atau Level Akses tidak Ditemukan');
                return redirect()->to('login');
            }
        }
    }


    public function berandaResepsionis()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
        ];
        return view('halamanpengguna/HalamanResepsionis.php', $data);
    }
    public function berandaStafTataUsaha()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
        ];
        return view('halamanpengguna/HalamanStafTataUsaha.php', $data);
    }
    public function berandaKepalatataUsaha()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
        ];
        return view('halamanpengguna/HalamanKepalaTataUsaha.php', $data);
    }
    public function berandaKepalaSekolah()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
        ];
        return view('halamanpengguna/HalamanKepalaSekolah.php', $data);
    }
}
