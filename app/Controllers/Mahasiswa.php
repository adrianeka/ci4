<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelMahasiswa;

class Mahasiswa extends Controller
{
    public function display()
    {
        // Buat objek model
        $model = new ModelMahasiswa();

        // Panggil method pada model untuk mengambil data
        $data['data'] = $model->getAllMahasiswa();

        // Kirim data ke view
        return view('table_mhs', $data);
    }
}
