<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Admin extends BaseController
{
    public function index()
    {
        return $this->render('admin/index', [
            'title' => 'Dashboard'
        ]);
    }
}
