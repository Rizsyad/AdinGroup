<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\AdminModel;

class AuthController extends BaseController
{
    // login untuk admin
    public function authAdmin() {

        if(session()->get('admin_id')){
            return redirect()->to('/dashboard/home'); 
        } 

        return view('admin/admin_login.php');
    }

    public function authAdminAction() {
        $session = session();
        $model = new AdminModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('username', $username)->first();

        if($data) {
            $pass = $data["password"];
            $verif_pass = password_verify($password, $pass);
            if($verif_pass){
                $ses_data = [
                    'admin_id'       => $data['id'],
                    'username'       => $data['username'],
                    'store'          => $data['store'],
                    'admin_role'     => $data['id_roles']
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard/home');
            } else{
                $session->setFlashdata('msg', 'Wrong Username or Password');
                return redirect()->to('/admin');
            }
        }

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
