<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function display()
    {
        return view('welcome_message');
    }

    public function formValidation()
    {
        return view('v_form_validation');
    }

    public function submitForm()
    {
        $validation = \Config\Services::validation();

        // Tentukan aturan validasi untuk setiap field
        $validation->setRules([
            'nip' => 'required|max_length[18]|numeric|min_length[18]',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'pendidikan' => 'required',
            'no_hp' => 'required|max_length[13]|numeric|min_length[10]',
            'email' => 'required|valid_email'
        ]);

        // Lakukan validasi
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            return redirect('formValidation')->with('success', 'Data Sudah Benar');
        }

        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama_lengkap' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'gender' => $this->request->getPost('gender'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
        ];
    }
}
