<?php

namespace App\Controllers;

class PemesananController extends BaseController
{
    public function index()
    {
        return view('pelanggan_home');
    }

    public function daftarMenu()
    {
        return view('pelanggan_daftarmenu');
    }

        public function pemesanan()
    {
        return view('pelanggan_pemesanan');
    }

    public function indexAdmin()
    {
        return view('welcome_message');
    }
}
