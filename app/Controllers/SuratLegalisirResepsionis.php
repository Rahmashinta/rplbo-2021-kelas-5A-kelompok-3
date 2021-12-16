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

        return view('halamansuratlegalisirresepsionis/HalamanSuratLegalisir', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Surat Legalisir',
            'validation' => \Config\Services::validation()
        ];
        return view('halamansuratlegalisirresepsionis/FormTambahSuratLegalisir', $data);
    }

    public function save()
    {

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
