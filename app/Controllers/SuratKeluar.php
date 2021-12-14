<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;

class SuratKeluar extends BaseController
{
    protected $suratKeluarModel;

    public function __construct()
    {
        $this->suratKeluarModel = new SuratKeluarModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Surat Keluar',
            'suratkeluar' => $this->suratKeluarModel->getSuratKeluar()
        ];

        return view('suratkeluar/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Surat Keluar',
            'validation' => \Config\Services::validation()
        ];
        return view('suratkeluar/create', $data);
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

        $this->suratKeluarModel->save([
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'kategoriSurat' => $this->request->getVar('kategoriSurat'),
            'fileSurat' => $file
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('suratkeluar');
    }

    public function delete($id)
    {

        $this->suratKeluarModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratkeluar');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Surat Masuk',
            'validation' => \Config\Services::validation(),
            'suratkeluar' => $this->suratKeluarModel->getSuratKeluarById($id)
        ];
        return view('suratkeluar/edit', $data);
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

        $fileSurat = $this->request->getFile('fileSurat');
        //cek gambar, apakah tetap gambar lama
        if ($fileSurat->getError() == 4) {
            $namaSurat = $this->request->getVar('fileLama');
        } else {
            //generate nama file random
            $namaSurat = $fileSurat->getName();
            //pindahkan gambar
            $fileSurat->move('file', $namaSurat);
        }

        $this->suratKeluarModel->save([
            'id' => $this->request->getVar('id'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'kategoriSurat' => $this->request->getVar('kategoriSurat'),
            'fileSurat' => $namaSurat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('suratkeluar');
    }
}
