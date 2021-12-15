<?php

namespace App\Controllers;

use App\Models\DisposisiSuratMasukModel;

class DisposisiSuratMasuk extends BaseController
{
    protected $disposisiSuratMasukModel;

    public function __construct()
    {
        $this->disposisiSuratMasukModel = new DisposisiSuratMasukModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Disposisi Surat Masuk',
            'disposisisuratmasuk' => $this->disposisiSuratMasukModel->getDisposisiSuratMasuk()
        ];

        // $komiModel = new \App\Models\KomikModel();
        // $komiModel = new KomikModel();


        return view('halamandisposisisuratmasuk/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Disposisi Surat Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('halamandisposisisuratmasuk/create', $data);
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


        $this->disposisiSuratMasukModel->save([
            'nomorSurat' => $this->request->getVar('nomorSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'penerimaDisposisi' => $this->request->getVar('penerimaDisposisi'),
            'sifatSurat' => $this->request->getVar('sifatSurat'),
            'isiDisposisi' => $this->request->getVar('isiDisposisi'),
            'catatan' => $this->request->getVar('catatan'),
            'penerimaPengembalian' => $this->request->getVar('penerimaPengembalian'),
            'tanggalPengembalian' => $this->request->getVar('tanggalPengembalian'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('disposisisuratmasuk');
    }

    public function delete($id)
    {

        $this->disposisiSuratMasukModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/disposisisuratmasuk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Disposisi Surat Masuk',
            'validation' => \Config\Services::validation(),
            'disposisisuratmasuk' => $this->disposisiSuratMasukModel->getDisposisiSuratMasukById($id)
        ];
        return view('halamandisposisisuratmasuk/edit', $data);
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



        $this->disposisiSuratMasukModel->save([
            'id' => $this->request->getVar('id'),
            'nomorSurat' => $this->request->getVar('nomorSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'penerimaDisposisi' => $this->request->getVar('penerimaDisposisi'),
            'sifatSurat' => $this->request->getVar('sifatSurat'),
            'isiDisposisi' => $this->request->getVar('isiDisposisi'),
            'catatan' => $this->request->getVar('catatan'),
            'penerimaPengembalian' => $this->request->getVar('penerimaPengembalian'),
            'tanggalPengembalian' => $this->request->getVar('tanggalPengembalian'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('disposisisuratmasuk');
    }
}
