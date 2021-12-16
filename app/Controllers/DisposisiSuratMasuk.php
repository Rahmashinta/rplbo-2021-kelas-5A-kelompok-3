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
        return view('halamandisposisisuratmasuk/HalamanDisposisiSuratMasuk', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Disposisi Surat Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('halamandisposisisuratmasuk/FormTambahDisposisiSuratMasuk', $data);
    }

    public function save()
    {
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
        return view('halamandisposisisuratmasuk/FormEditDisposisiSuratMasuk', $data);
    }

    public function update()
    {

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

    public function cari()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $disposisi = $this->disposisiSuratMasukModel->search($keyword);
        } else {
            $disposisi = $this->disposisiSuratMasukModel;
        }

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratkeluar' => $disposisi->paginate(6, 'suratkeluar'),
        ];
        return view('halamandisposisisuratmasuk/HalamanDDisposisiSratMasuk', $data);
    }
}
