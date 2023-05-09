<?php

namespace App\Models;

use CodeIgniter\Model;

class Ongkir extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ongkir';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function get_ongkir()
    {
        return $this->db->table('ongkir')->get()->getResultArray();
    }

    public function getOngkir($kodepos)
    {
        return $this->db->table('ongkir')->where('kodepos_tujuan', $kodepos)->get()->getRowArray();
    }
}
