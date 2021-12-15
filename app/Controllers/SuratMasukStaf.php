<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;

class SuratMasukStaf extends BaseController
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


        return view('halamansuratmasukstaf/index', $data);
    }

    public function delete($id)
    {

        $this->suratMasukModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratmasukstaf');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Surat Masuk',
            'validation' => \Config\Services::validation(),
            'suratmasuk' => $this->suratMasukModel->getSuratMasukById($id)
        ];
        return view('halamansuratmasukstaf/edit', $data);
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

        $this->suratMasukModel->save([
            'id' => $this->request->getVar('id'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'kategoriSurat' => $this->request->getVar('kategoriSurat'),
            'fileSurat' => $namaSurat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('suratmasukstaf');
    }
}
