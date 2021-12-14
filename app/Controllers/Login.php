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
            'pengguna' => $this->penggunaModel->getPengguna()
        ];
        return view('login.php', $data);
    }
    public function validasi()
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            //'pengguna' => $this->penggunaModel->getPenggunaByUsername($username)
        ];

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $levelakses = $this->request->getVar('levelakses');
        //dd($this->request->getVar());


        $pengguna = $this->penggunaModel->getPenggunaByUsername($username);

        //var_dump($pengguna);

        // dd($pengguna);

        if ($pengguna['username'] == $username && $pengguna['password'] == $password && $pengguna['levelakses'] == $levelakses) {
            if ($levelakses == 'Resepsionis') {
                return view('halamanpengguna/HalamanResepsionis', $data);
            } else if ($levelakses == 'Staf Tata Usaha') {
                return view('halamanpengguna/HalamanStafTataUsaha', $data);
            } else if ($levelakses == 'Kepala Tata Usaha') {
                return view('halamanpengguna/HalamanKepalaTataUsaha', $data);
            } else if ($levelakses == 'Kepala Sekolah') {
                return view('halamanpengguna/HalamanKepalaSekolah', $data);
            }

            return redirect()->to('login');
        } else {
            return redirect()->to('login');
        }
    }
}
