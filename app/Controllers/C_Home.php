<?php

namespace App\Controllers;

use App\Models\Kemeja;

class C_Home extends BaseController
{
    protected $model_barang;

    public function __construct()
    {
        $this->model_barang = new Kemeja();
    }

    public function index()
    {
        $data = [
            'title' => 'Kemeja',
            'barang' => $this->model_barang->getAllKemeja()
        ];
        return view('v_home', $data);
    }

    public function cart()
    {
        return view('v_cart', [
            'title' => 'Cart'
        ]);
    }
}
