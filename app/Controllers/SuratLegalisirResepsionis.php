<?php

namespace App\Controllers;

use App\Models\SuratLegalisirModel;

class SuratLegalisirResepsionis extends BaseController
{
    protected $suratLegalisirModel;

    public function __construct()
    {
        $this->suratLegalisirModel = new SuratLegalisirModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratlegalisir' => $this->suratLegalisirModel->getSuratLegalisir()
        ];

        return view('halamansuratlegalisirresepsionis/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Surat Legalisir',
            'validation' => \Config\Services::validation()
        ];
        return view('halamansuratlegalisirresepsionis/create', $data);
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

        $fileSurat = $this->request->getFile('fileSurat');

        $file = $fileSurat->getName();

        $fileSurat->move('file', $file);

        $this->suratLegalisirModel->save([
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'tahunAjaran' => $this->request->getVar('tahunAjaran'),
            'fileSurat' => $file
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('suratlegalisirresepsionis');
    }
}
