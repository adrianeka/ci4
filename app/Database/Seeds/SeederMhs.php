<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederMhs extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Adrian Eka Saputra',
                'nim' => '221511036',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
            [
                'nama' => 'Muhammad Ikhsan',
                'nim' => '221511058',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],            [
                'nama' => 'Adrian Eka',
                'nim' => '221511037',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
            [
                'nama' => 'Muhammad',
                'nim' => '221511059',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],            [
                'nama' => 'Adrian',
                'nim' => '221511038',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
            [
                'nama' => 'Ikhsan',
                'nim' => '221511060',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],            [
                'nama' => 'Adrian',
                'nim' => '221511039',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
            [
                'nama' => 'san',
                'nim' => '221511061',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],            [
                'nama' => 'Eka',
                'nim' => '221511040',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
            [
                'nama' => 'Muhamad',
                'nim' => '221511062',
                'jurusan' => 'Jurusan Teknik Informatika'
            ],
        ];

        // Insert data ke dalam tabel 'mahasiswa'
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
