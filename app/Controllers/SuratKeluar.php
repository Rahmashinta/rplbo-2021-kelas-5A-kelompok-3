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
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $suratkeluar = $this->suratKeluarModel->search($keyword);
        } else {
            $suratkeluar = $this->suratKeluarModel;
        }
        $currentPage = $this->request->getVar('page_suratkeluar') ? $this->request->getVar('page_suratkeluar') : 1;

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratkeluar' => $suratkeluar->paginate(6, 'suratkeluar'),
            'pager' => $this->suratKeluarModel->pager,
            'currentPage' => $currentPage
        ];
        return view('halamansuratkeluar/HalamanSuratKeluar', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat'
        ];
        return view('halamansuratkeluar/FormTambahSuratKeluar', $data);
    }

    public function save()
    {
        $fileSurat = $this->request->getFile('fileSurat');

        $file = $fileSurat->getName();

        $fileSurat->move('file/suratkeluar', $file);

        $this->suratKeluarModel->save([
            'penerimaSurat' => $this->request->getVar('penerimaSurat'),
            'nomorSurat' => $this->request->getVar('nomorSurat'),
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
        //cari file berdasarkan id
        $suratKeluar = $this->suratKeluarModel->find($id);

        //hapus file dari penyimpanan
        unlink('file/suratkeluar/' . $suratKeluar['fileSurat']);

        $this->suratKeluarModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/suratkeluar');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Surat Masuk',
            'suratkeluar' => $this->suratKeluarModel->getSuratKeluarById($id)
        ];
        return view('halamansuratkeluar/FormEditSuratKeluar', $data);
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
            $fileSurat->move('file/suratkeluar', $namaSurat);
            //hapus file yang lama
            unlink('file/suratkeluar/' . $this->request->getVar('fileLama'));
        }

        $this->suratKeluarModel->save([
            'id' => $this->request->getVar('id'),
            'penerimaSurat' => $this->request->getVar('penerimaSurat'),
            'nomorSurat' => $this->request->getVar('nomorSurat'),
            'tanggalSurat' => $this->request->getVar('tanggalSurat'),
            'perihalSurat' => $this->request->getVar('perihalSurat'),
            'kategoriSurat' => $this->request->getVar('kategoriSurat'),
            'fileSurat' => $namaSurat
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('suratkeluar');
    }
}
