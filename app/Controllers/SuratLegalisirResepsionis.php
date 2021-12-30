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
        $currentPage = $this->request->getVar('page_suratlegalisir') ? $this->request->getVar('page_suratlegalisir') : 1;
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratlegalisir' => $this->suratLegalisirModel->paginate(8, 'suratlegalisir'),
            'pager' => $this->suratLegalisirModel->pager,
            'currentPage' => $currentPage
        ];

        return view('halamansuratlegalisirresepsionis/HalamanSuratLegalisir', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('halamansuratlegalisirresepsionis/FormTambahSuratLegalisir', $data);
    }

    public function save()
    {

        $fileSurat = $this->request->getFile('fileSurat');

        $file = $fileSurat->getName();

        $fileSurat->move('file/suratlegalisir', $file);

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
