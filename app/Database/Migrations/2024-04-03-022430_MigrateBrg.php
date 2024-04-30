<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrateBrg extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'nama_brg' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('kode', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
