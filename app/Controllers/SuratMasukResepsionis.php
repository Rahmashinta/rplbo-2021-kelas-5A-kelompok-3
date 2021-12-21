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

        $currentPage = $this->request->getVar('page_suratmasuk') ? $this->request->getVar('page_suratmasuk') : 1;
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratmasuk' => $this->suratMasukModel->paginate(4, 'suratmasuk'),
            'pager' => $this->suratMasukModel->pager,
            'currentPage' => $currentPage
        ];
        return view('halamansuratmasukresepsionis/HalamanSuratMasuk', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Surat Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('halamansuratmasukresepsionis/FormTambahSuratMasuk', $data);
    }

    public function save()
    {
        $this->suratMasukModel->save([
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('suratmasukresepsionis');
    }
}
