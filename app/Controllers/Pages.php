<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Web Programming UNPAS',
            'tes' => ['satu', 'dua']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('suratmasuk/index', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL. abc no 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'JL. Setiabudi no 123',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
    public function beranda()
    {

        $data = [
            'title' => 'Beranda',
            'tes' => ['satu', 'dua']
        ];
        return view('pages/beranda', $data);
    }
}
