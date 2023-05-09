<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Kemeja extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new \App\Models\Kemeja();
    }

    public function index()
    {
        return $this->render('kemeja/index', [
            'title' => 'Kemeja',
            'barang' => $this->model->getAllKemeja()
        ]);
    }

    public function show()
    {
        return $this->render('kemeja/create', [
            'title' => 'Tambah Kemeja'
        ]);
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'namabrg' => 'required',
            'harga' => 'required|numeric',
            'diskon' => 'required|numeric',
            'stok' => 'required|numeric',
            'berat' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $nama_barang = $this->request->getPost('namabrg');
        $harga = $this->request->getPost('harga');
        $stok = $this->request->getPost('stok');
        $berat = floatval($this->request->getPost('berat'));
        $diskon = $this->request->getPost('diskon');
        $gambar = $this->request->getFile('namafile');


        $fileName = $gambar->getRandomName();

        $gambar->move(ROOTPATH . 'public/gambar', $fileName);


        $this->model->insert([
            'namabrg' => $nama_barang,
            'stok' => $stok,
            'harga' => $harga,
            'diskon' => $diskon,
            'namafile' => $fileName,
            'berat_pergram' => $berat
        ]);

        return redirect()->to(base_url('admin/kemeja'));
    }

    public function getBarang()
    {
        $uri = service('uri');
        $id = $uri->getSegment(3);

        try {
            $barang = $this->model->getBarang($id);

            if ($barang) {
                return response()->setJSON($barang);
            } else {
                return response()->setJSON([
                    'status' => 404,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->setJSON([
                'status' => 500,
                'message' => 'Terjadi kesalahan'
            ]);
        }
    }

    public function tampil($id)
    {
        $model_transaksi_penjualan = new \App\Models\Transaksipjl();

        $data = [
            'title' => 'Checkout Success',
            'data_transaksi' => $model_transaksi_penjualan->getTransaksiPenjualan($id),
        ];
        return view('v_success', $data);
    }
}
