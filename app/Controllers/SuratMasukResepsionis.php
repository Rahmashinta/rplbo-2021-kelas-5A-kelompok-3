<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;

class SuratMasukResepsionis extends BaseController
{
    protected $suratMasukModel;

    public function __construct()
    {
        $this->suratMasukModel = new SuratMasukModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Surat Masuk',
            'suratmasuk' => $this->suratMasukModel->getSuratMasuk()
        ];

        // $komiModel = new \App\Models\KomikModel();
        // $komiModel = new KomikModel();


        return view('suratmasukresepsionis/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Surat Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('suratmasukresepsionis/create', $data);
    }

    public function save()
    {
        // validasi input
        // if (!$this->validate([
        //     'asalsurat' => [
        //         'rules' => 'required[suratmasuk.asalsurat]',
        //         'errors' => [
        //             'required' => '{field} suratmasuk harus diisi.',
        //         ]
        //     ]
        // ])) {

        //     $validation = \Config\Services::validation();

        //     return redirect()->to('suratmasuk/create')->withInput()->with('validation', $validation);
        //     return redirect()->to('suratmasuk/create')->withInput();
        // }

        $this->suratMasukModel->save([
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('suratmasukresepsionis');
    }
}
