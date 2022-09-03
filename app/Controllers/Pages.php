<?php

namespace App\Controllers;

use App\Models\BarangModel;


class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Faza.'
        ];
        return view('pages/home', $data);
    }

    public function tentang_kami()
    {
        $data = [
            'title' => 'Tentang Kami | Faza.'
        ];
        return view('pages/tentang_kami', $data);
    }

    public function promo()
    {
        $data = [
            'title' => 'Tentang Kami | Faza.'
        ];
        return view('pages/promo', $data);
    }

    public function ikuti_kami()
    {
        $data = [
            'title' => 'Ikuti | Faza.'
        ];
        return view('pages/ikuti_kami', $data);
    }


    public function kontak()
    {
        $data = [
            'title' => 'Kontak | Faza.'
        ];
        return view('pages/kontak', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Faza.'
        ];
        return view('pages/daftar', $data);
    }

    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new barangModel();
    }

    public function belanja()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Belanja | Faza.',
            'barang' => $barang

        ];

        return view('pages/belanja', $data);
    }

    // public function create()
    // {
    // $barang = $this->barangModel->findAll();


    // $data = [];



    // return view('barang/create', $data);
    // }


    public function masuk()
    {
        $data = [
            'title' => 'Masuk | Faza.'
        ];
        return view('pages/masuk', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail | Faza.'
        ];
        return view('pages/detail', $data);
    }
}
