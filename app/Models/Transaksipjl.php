<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksipjl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transaksipjl';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idtrans', 'nama', 'no_hp', 'alamat', 'kecamatan', 'kota', 'total_transaksi', 'tanggal'];

    public function getTransaksiPenjualan($id_param)
    {
        $sql = "SELECT tp.idtrans, tp.tanggal, tp.nama, tp.no_hp, tp.alamat, tp.kecamatan, tp.kota, tp.total_transaksi,
               j.idkemeja,
               j.jmljual,
               j.hargajual,
               b.namabrg AS nama_barang,
               SUM(j.jmljual) AS jumlah_barang_terjual
        FROM transaksipjl tp
        JOIN detailjual j ON tp.idtrans = j.idtrans
        JOIN kemeja b ON j.idkemeja = b.idkemeja
        WHERE tp.idtrans = ?
        GROUP BY tp.idtrans, j.idkemeja";
        $query = $this->db->query($sql, [$id_param]);
        $data = $query->getResultArray();

        return $data;
    }
}
