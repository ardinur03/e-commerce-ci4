<?php

namespace App\Models;

use CodeIgniter\Model;

class Detailjual extends Model
{
    protected $table            = 'detailjual';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idtrans', 'idkemeja', 'hargajual', 'jmljual'];

    public function insert_data_jual($data)
    {
        $this->db->table($this->table)->insertBatch($data);
    }

    public function insertData($data)
    {
        // $sql = "INSERT INTO detailjual (idtrans, idkemeja, jmljual, hargajual) VALUES (?, ?, ?, ?)";
        // $this->db->query($sql, $data);

        $this->db->table($this->table)->insert($data);
    }
}
