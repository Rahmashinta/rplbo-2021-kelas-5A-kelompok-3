<?php

namespace App\Controllers;

use App\Models\SuratLegalisirModel;

class SuratLegalisirStaf extends BaseController
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

        return view('halamansuratlegalisirstaf/HalamanSuratLegalisir', $data);
    }

    public function delete($id)
    {

        $this->suratLegalisirModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratlegalisirstaf');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Surat Masuk',
            'validation' => \Config\Services::validation(),
            'suratlegalisir' => $this->suratLegalisirModel->getSuratLegalisirById($id)
        ];
        return view('halamansuratlegalisirstaf/FormEditSuratLegalisir', $data);
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

        $this->suratLegalisirModel->save([
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'tahunAjaran' => $this->request->getVar('tahunAjaran'),
            'fileSurat' => $namaSurat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('suratlegalisirstaf');
    }
    public function cari()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratlegalisir = $this->suratLegalisirModel->search($keyword);
        } else {
            $suratlegalisir = $this->suratLegalisirModel;
        }

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratlegalisir' => $suratlegalisir->paginate(6, 'suratlegalisir'),
        ];
        return view('halamansuratlegalisirstaf/HalamanSuratLegalisir', $data);
    }
}
