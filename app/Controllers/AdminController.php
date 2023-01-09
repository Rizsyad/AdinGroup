<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class AdminController extends BaseController
{
    var $data = array();

    function __construct(){
        $this->data = array(
            'time' => Time::now('Asia/Jakarta', 'en_US')
        );
        
    }

    public function index()
    {
        $this->data["title"] = "Pemesanan | Home";
        $this->data['menuActive'] = "home";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view("pelanggan_home", $this->data)
        .view("templates/footer");
    }

    public function daftarMenu()
    {
        $this->data["title"] = "Pemesanan | Daftar Menu";
        $this->data['menuActive'] = "daftarMenu";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('pelanggan_daftarmenu', $this->data)
        .view("templates/footer");

    }

    public function pemesanan()
    {
        $this->data["title"] = "Pemesanan | Pesanan Pelanggan";
        $this->data['menuActive'] = "pesanan";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('pelanggan_pemesanan', $this->data)
        .view("templates/footer");

    }

}
