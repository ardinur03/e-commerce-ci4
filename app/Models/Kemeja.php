<?php

namespace App\Models;

use CodeIgniter\Model;

class Kemeja extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kemeja';
    protected $primaryKey       = 'idkemeja';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['namabrg', 'harga', 'stok', 'diskon', 'namafile', 'berat_pergram'];

    public function getAllKemeja()
    {
        $sql = "SELECT * FROM kemeja";
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }

    public function getBarang($id)
    {
        $sql = "SELECT * FROM kemeja WHERE idkemeja = ?";
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();
    }
}
