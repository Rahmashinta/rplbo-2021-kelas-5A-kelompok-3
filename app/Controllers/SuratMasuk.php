<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;
use App\Models\PenggunaModel;

class SuratMasuk extends BaseController
{
    protected $suratMasukModel;

    public function __construct()
    {
        $this->suratMasukModel = new SuratMasukModel();
        $this->penggunaModel = new PenggunaModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Surat Masuk',
            'suratmasuk' => $this->suratMasukModel->getSuratMasuk()
        ];

        // $komiModel = new \App\Models\KomikModel();
        // $komiModel = new KomikModel();


        return view('suratmasuk/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Surat Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('suratmasuk/create', $data);
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
            'perihalSurat' => $this->request->getVar('perihalSurat')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('suratmasuk');
    }

    public function delete($id)
    {

        $this->suratMasukModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratmasuk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Surat Masuk',
            'validation' => \Config\Services::validation(),
            'suratmasuk' => $this->suratMasukModel->getSuratMasukById($id)
        ];
        return view('suratmasuk/edit', $data);
    }

    public function update()
    {
        // cek asal surat

        // $suratmasukLama = $this->suratmasukModel->getSuratMasuk();
        // if ($suratmasukLama['asalsurat'] == $this->request->getVar('asalsurat')) {
        //     $rule_judul = 'required';
        // } else {
        //     $rule_judul = 'required|is_unique[komik.judul]';
        // }

        // if (!$this->validate([
        //     'asalsurat' => [
        //         'rules' => $rule_judul,
        //         'errors' => [
        //             'required' => '{field} suratmasuk harus diisi.'
        //         ]
        //     ]
        // ])) {

        //     return redirect()->to('suratmasuk/edit')->withInput();
        // }

        // $this->suratMasukModel->save([
        //     'id' => $id,
        //     'asalSurat' => $this->request->getVar('asalSurat'),
        //     'tanggalSurat' => $this->request->getVar('tanggalSurat'),
        //     'perihalSurat' => $this->request->getVar('perihalSurat')
        // ]);

        // session()->setFlashdata('pesan', 'Data berhasil diubah');

        // return redirect()->to('suratmasuk');



        $this->suratMasukModel->save([
            'id' => $this->request->getVar('id'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('suratmasuk');
    }
}
