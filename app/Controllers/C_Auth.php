<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class C_Auth extends BaseController
{

    protected $model_admin;

    public function __construct()
    {
        $this->model_admin = new AuthModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('v_login', $data);
    }

    public function login()
    {
        $nip = request()->getPost('nip');
        $username = request()->getPost('username');
        $password = request()->getPost('password');

        $user = $this->model_admin->where('nip', $nip)->first();

        if ($user) {
            if ($user['username'] == $username) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nip' => $user['nip'],
                        'username' => $user['username'],
                        'password' => $user['password'],
                        'logged_in' => true
                    ];
                    session()->set($data);
                    return redirect()->to('/admin/barang');
                } else {
                    session()->setFlashdata('pesan', 'Username atau Password salah');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('pesan', 'Username Atau Password salah');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('pesan', 'NIP Atau Usernametidak terdaftar');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
