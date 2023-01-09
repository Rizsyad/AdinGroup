<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class AdminController extends BaseController
{
    var $data = array();

    function __construct(){
        $this->data = array(
            'time' => Time::now('Asia/Jakarta', 'en_US'),
            'userType' => "admin"
        );
        
    }

    public function index()
    {
        $this->data["title"] = "Dashboard |  Home";
        $this->data['menuActive'] = "home";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view("admin/admin_home", $this->data)
        .view("templates/footer");
    }

    public function daftarMenu()
    {
        $this->data["title"] = "Dashboard |  Daftar Menu";
        $this->data['menuActive'] = "daftarMenu";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('admin/admin_daftarmenu', $this->data)
        .view("templates/footer");

    }

    public function pemesanan()
    {
        $this->data["title"] = "Dashboard |  Pesanan Pelanggan";
        $this->data['menuActive'] = "pesanan";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('admin/admin_pemesanan', $this->data)
        .view("templates/footer");

    }

    public function meja()
    {
        $this->data["title"] = "Dashboard |  Meja";
        $this->data['menuActive'] = "meja";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('admin/admin_table', $this->data)
        .view("templates/footer");

    }

    public function kategori()
    {
        $this->data["title"] = "Dashboard | Kategori";
        $this->data['menuActive'] = "kategori";

        return view("templates/header", $this->data)
        .view("templates/navbar", $this->data)
        .view('admin/admin_kategori', $this->data)
        .view("templates/footer");

    }

    

}
