<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederBrg extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => 'B001',
                'nama_brg' => 'PENA',
                'harga' => '5000',
                'deskripsi' => 'INI PENA',
            ],
            [
                'kode' => 'B002',
                'nama_brg' => 'PENGHAPUS',
                'harga' => '3000',
                'deskripsi' => 'INI PENNGHAPUS',
            ],
            [
                'kode' => 'B003',
                'nama_brg' => 'PENSIL',
                'harga' => '2000',
                'deskripsi' => 'INI PENSIL',
            ],
        ];

        // Insert data ke dalam tabel 'mahasiswa'
        $this->db->table('barang')->insertBatch($data);
    }
}
