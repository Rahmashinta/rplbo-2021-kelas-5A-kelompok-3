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

        return view('halamansuratlegalisirstaf/index', $data);
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
        return view('halamansuratlegalisirstaf/edit', $data);
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
}
