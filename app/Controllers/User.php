<?php

namespace App\Controllers;

class User extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Home | Faza.'
    //     ];
    //     return view('user/user', $data);
    // }

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

    public function belanja()
    {
        $data = [
            'title' => 'Belanja | Faza.'
        ];
        return view('pages/belanja', $data);
    }
}
