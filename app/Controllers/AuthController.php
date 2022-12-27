<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    // login / daftar pelanggan
    public function authPelanggan() {
        return view('pelanggan_login');
    }

    // login untuk admin
    public function auth() {
        return view('login');
    }
}
