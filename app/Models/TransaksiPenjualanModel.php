<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiPenjualanModel extends Model
{
    protected $table            = 'transaksipjl';
    protected $primaryKey       = 'idtrans';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idtrans', 'nama', 'no_hp', 'alamat', 'kecamatan', 'kota', 'total_transaksi', 'tanggal'];

    // Dates
    protected $useTimestamps = false;
}
