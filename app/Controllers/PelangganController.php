<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class PelangganController extends BaseController
{
    var $data = array();

    function __construct(){
        $this->data = array(
            'time' => Time::now('Asia/Jakarta', 'en_US'),
            'userType' => "pelanggan"
        );
        
    }

    public function index()
    {

        $this->data["title"] = "Pemesanan | Home";
        $this->data['menuActive'] = "home";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view("pelanggan/pelanggan_home", $this->data)
        .view("templates/footer");
    }

    public function daftarMenu()
    {

        $this->data["title"] = "Pemesanan | Daftar Menu";
        $this->data['menuActive'] = "daftarMenu";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('pelanggan/pelanggan_daftarmenu', $this->data)
        .view("templates/footer");
    }

    public function pemesanan()
    {

        $this->data["title"] = "Pemesanan | Pesanan Anda";
        $this->data['menuActive'] = "pesanan";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('pelanggan/pelanggan_pemesanan', $this->data)
        .view("templates/footer");

    }

}
