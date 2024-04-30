<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        $model = new BarangModel();

        $data['data'] = $model->getAllBarang();

        return view('data_brg', $data);
    }

    public function delete($kode)
    {
        $model = new BarangModel();
        // Menghapus barang dengan kode tertentu
        $model->deleteBarang($kode);
        return redirect()->to('/Brg');
    }

    public function search()
    {
        $model = new BarangModel();
        $nama = $this->request->getPost('nama');
        $data['data'] = $model->searchNama($nama);
        return view('data_brg', $data);
    }
    public function create()
    {
        return view('input_data_brg');
    }

    public function store()
    {
        $model = new BarangModel();
        $nama = $this->request->getPost('nama');
        $kode = $this->request->getPost('kode');
        $harga = $this->request->getPost('harga');
        $result = $model->createBarang($kode, $nama, $harga);

        return redirect()->to('/Brg');
    }

    public function edit($kode)
    {
        $model = new BarangModel();
        $barang = $model->findBarang($kode);

        return view('update_data_brg', ['barang' => $barang]);
    }

    public function update()
    {
        $model = new BarangModel();

        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $harga = $this->request->getPost('harga');

        $model->updateBarang($kode, $nama, $harga);

        return redirect()->to('/Brg');
    }
}
