<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['kode', 'nama_brg', 'harga', 'deskripsi', 'foto'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllBarang()
    {
        // Query SQL
        $query = $this->db->query('SELECT * FROM ' . $this->table);

        // Mengembalikan hasil query dalam bentuk array asosiatif
        return $query->getResultArray();
    }

    public function deleteBarang($kode)
    {
        $db = db_connect();
        $db->query("DELETE FROM barang WHERE kode = ?", [$kode]);
        // return redirect()->to(base_url('/Brg')); 
    }

    public function searchNama($nama)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM $this->table WHERE nama_brg LIKE ?", ["%$nama%"]);
        return $query->getResultArray();
    }

    public function createBarang($kode, $nama, $harga, $foto)
    {
        $db = db_connect();
        $db->query("INSERT INTO barang (kode, nama_brg, harga, foto) VALUES (?, ?, ?, ?)", [$kode, $nama, $harga, $foto]);
    }

    public function updateBarang($kode, $nama, $harga)
    {
        $db = db_connect();
        $db->query("UPDATE barang SET nama_brg = ?, harga = ? WHERE kode = ?", [$nama, $harga, $kode]);
    }

    public function findBarang($kode)
    {
        $db = db_connect();
        $query = $db->query("SELECT * FROM barang WHERE kode = ?", [$kode]);
        return $query->getRowArray();
    }
}
