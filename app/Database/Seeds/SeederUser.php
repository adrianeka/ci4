<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederUser extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
            ],
            [
                'username' => 'user',
                'password' => password_hash('user', PASSWORD_DEFAULT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
