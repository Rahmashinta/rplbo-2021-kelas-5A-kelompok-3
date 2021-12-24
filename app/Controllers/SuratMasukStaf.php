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
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratmasuk = $this->suratMasukModel->search($keyword);
        } else {
            $suratmasuk = $this->suratMasukModel;
        }

        $currentPage = $this->request->getVar('page_suratmasuk') ? $this->request->getVar('page_suratmasuk') : 1;
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratmasuk' => $suratmasuk->paginate(4, 'suratmasuk'),
            'pager' => $this->suratMasukModel->pager,
            'currentPage' => $currentPage
        ];
        return view('halamansuratmasukstaf/HalamanSuratMasuk', $data);
    }

    public function delete($id)
    {
        //cari file berdasarkan id
        $suratMasuk = $this->suratMasukModel->find($id);

        //cek apakah file ada atau tidak
        if ($suratMasuk['fileSurat'] !== '') {

            //hapus file dari penyimpanan
            unlink('file/suratmasuk/' . $suratMasuk['fileSurat']);
        }

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

        if ($this->request->getVar('fileLama') !== '') {
            //cek file, apakah tetap file lama
            if ($fileSurat->getError() == 4) {
                $namaSurat = $this->request->getVar('fileLama');
            } else {
                //generate nama file 
                $namaSurat = $fileSurat->getName();
                //pindahkan file
                $fileSurat->move('file/suratmasuk', $namaSurat);

                //hapus file yang lama
                unlink('file/suratmasuk/' . $this->request->getVar('fileLama'));
            }
        } else {
            //generate nama file 
            $namaSurat = $fileSurat->getName();
            //pindahkan file
            $fileSurat->move('file/suratmasuk', $namaSurat);
        }

        $this->suratMasukModel->save([
            'id' => $this->request->getVar('id'),
            'asalSurat' => $this->request->getVar('asalSurat'),
            'nomorSurat' => $this->request->getVar('nomorSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'kategoriSurat' => $this->request->getVar('kategoriSurat'),
            'fileSurat' => $namaSurat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit');

        return redirect()->to('suratmasukstaf');
    }
}
