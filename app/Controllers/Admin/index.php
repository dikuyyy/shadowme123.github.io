<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class index extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sistem Pakar'
        ];
        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar');
        echo view('admin/dashboard');
        echo view('admin/template/footer');
    }
}
