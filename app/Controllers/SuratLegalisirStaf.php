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
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratlegalisir = $this->suratLegalisirModel->search($keyword);
        } else {
            $suratlegalisir = $this->suratLegalisirModel;
        }

        $currentPage = $this->request->getVar('page_suratlegalisir') ? $this->request->getVar('page_suratlegalisir') : 1;

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratlegalisir' => $suratlegalisir->paginate(4, 'suratlegalisir'),
            'pager' => $this->suratLegalisirModel->pager,
            'currentPage' => $currentPage
        ];

        return view('halamansuratlegalisirstaf/HalamanSuratLegalisir', $data);
    }

    public function delete($id)
    {
        //cari file berdasarkan id
        $suratLegalisir = $this->suratLegalisirModel->find($id);

        //hapus file lama
        unlink('file/suratlegalisir/' . $suratLegalisir['fileSurat']);

        $this->suratLegalisirModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratlegalisirstaf');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
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
            $fileSurat->move('file/suratlegalisir', $namaSurat);
            //hapus file yang lama
            unlink('file/suratlegalisir/' . $this->request->getVar('fileLama'));
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
