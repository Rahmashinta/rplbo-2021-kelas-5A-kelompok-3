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
        return view('halamansuratmasukstaf/HalamanSuratMasuk', $data);
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
        return view('halamansuratmasukstaf/FormEditSuratMasuk', $data);
    }

    public function update()
    {
        $fileSurat = $this->request->getFile('fileSurat');
        //cek file, apakah tetap file lama
        if ($fileSurat->getError() == 4) {
            $namaSurat = $this->request->getVar('fileLama');
        } else {
            //generate nama file 
            $namaSurat = $fileSurat->getName();
            //pindahkan file
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

        session()->setFlashdata('pesan', 'Data berhasil diedit');

        return redirect()->to('suratmasukstaf');
    }
    public function cari()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratmasuk = $this->suratMasukModel->search($keyword);
        } else {
            $suratmasuk = $this->suratMasukModel;
        }

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratmasuk' => $suratmasuk->paginate(6, 'suratmasuk'),
        ];
        return view('halamansuratmasukstaf/index', $data);
    }
}
