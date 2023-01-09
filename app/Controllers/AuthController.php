<?php

namespace App\Controllers;
use App\Models\PelangganModel;

class AuthController extends BaseController
{
    // login untuk admin
    public function authAdmin() {
        return view('login');
    }

    public function authAdminAction() {
        // return view('login');
    }

    public function authPelanggan() { 

        if(session()->get('pelanggan_id')){
            return redirect()->to('/home'); 
        }

        return view('pelanggan/pelanggan_login');
    }

    public function authPelangganAction() {
            
        $rules = [
            "nama" => "required|min_length[3]",
            "notlpn" => "required|numeric|max_length[14]",
        ];

        if($this->validate($rules)) {
            $model = new PelangganModel();

            $session = session();
            $nama = $this->request->getVar('nama');
            $tlpn = preg_replace( '/(0|\+?\d{2})(\d{7,8})/', '0$2', $this->request->getVar('notlpn'));

            $isRegistered = $model->where('no_tlpn', $tlpn)->first();

            if($isRegistered) {
                $ses_data = [
                    'pelanggan_id' => $isRegistered["id"],
                    'pelanggan_nama' => $isRegistered["nama_pelanggan"],
                    'pelanggan_tlpn' => $isRegistered["no_tlpn"],
                ];

                $session->set($ses_data);
                return redirect()->to('/home');
            }

            $data = [
                "nama_pelanggan" => $nama,
                "no_tlpn" => $tlpn,
            ];

            $model->save($data);
            return redirect()->to('/home');
        } else {
            $data['validation'] = $this->validator;
            echo view('pelanggan/pelanggan_login', $data);
        } 
    }

    public function logoutAdmin(){
        session()->destroy();

        return redirect()->to('/admin');
    }

    public function logoutPelanggan(){
        session()->destroy();

        return redirect()->to('/login');
    }


}
