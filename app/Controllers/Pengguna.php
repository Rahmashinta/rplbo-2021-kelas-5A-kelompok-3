<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    protected $penggunaModel;

    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'pengguna' => $this->penggunaModel->getPengguna()
        ];

        return view('halamanpengelolaanpengguna/HalamanPengelolaanPengguna', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'validation' => \Config\Services::validation()
        ];
        return view('halamanpengelolaanpengguna/FormTambahPengguna', $data);
    }

    public function save()
    {
        $this->penggunaModel->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('nama'),
            'levelakses' => $this->request->getVar('levelakses')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('pengguna');
    }

    public function delete($id)
    {

        $this->penggunaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pengguna');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'validation' => \Config\Services::validation(),
            'pengguna' => $this->penggunaModel->getPenggunaById($id)
        ];
        return view('halamanpengelolaanpengguna/FormEditPengguna', $data);
    }

    public function update()
    {
        $this->penggunaModel->save([
            'id' => $this->request->getVar('id'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('nama'),
            'levelakses' => $this->request->getVar('levelakses')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('pengguna');
    }
    public function cari()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pengguna = $this->penggunaModel->search($keyword);
        } else {
            $pengguna = $this->penggunaModel;
        }

        $data = [
            'title' => 'Sistem Informasi Pelayanan Surat Menyurat',
            'suratkeluar' => $pengguna->paginate(6, 'suratkeluar'),
        ];
        return view('halamanpengelolaanpengguna/HalamanPengelolaanPengguna', $data);
    }
}
