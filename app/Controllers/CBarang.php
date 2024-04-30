<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;

class CBarang extends BaseController
{
    public function index()
    {
        $model = new BarangModel();

        $data['data'] = $model->getAllBarang();

        return view('v_barang', $data);
    }
    public function search()
    {
        $model = new BarangModel();
        $nama = $this->request->getPost('nama');
        $data['data'] = $model->searchNama($nama);
        return view('v_barang', $data);
    }

    public function detail($kode)
    {
        $model = new BarangModel();
        $barang = $model->findBarang($kode);

        return view('v_detail_brg', ['barang' => $barang]);
    }

    public function create()
    {
        return view('v_input_brg');
    }

    public function store()
    {
        $barangModel = new BarangModel();
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
        ];
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $newName = $gambar->getRandomName();
            $gambar->move('path/to/upload/directory', $newName);
            $data['gambar'] = $newName;
        }

        $barangModel->createBarang($data['kode'], $data['nama_barang'], $data['harga'], $data['gambar']);

        return redirect()->to('/barang');
    }
}
