<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class CLogin extends BaseController
{
    public function index()
    {
        return view("v_login");
    }

    public function authenticate()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];
        session()->setFlashdata('username', $data['username']);

        $model = new UserModel();
        $user = $model->getUserAuth($data);

        if ($user) {
            $session = session();
            $session->set($user);

            return redirect()->to(base_url('/template'));
        }

        return redirect()->to(base_url('/'))->withInput()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
}
