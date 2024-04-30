<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields = ['nim', 'nama', 'jurusan'];

    public function getAllMahasiswa()
    {
        // Query SQL
        $query = $this->db->query('SELECT * FROM ' . $this->table);

        // Mengembalikan hasil query dalam bentuk array asosiatif
        return $query->getResultArray();
    }

    // public function deleeMahasiswa(){
    //     $query = $this->db->query('DELETE FROM ' . $this->table . '')
    // }
}
