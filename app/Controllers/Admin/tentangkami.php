<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class tentangkami extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];
        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar');
        echo view('aboutus');
        echo view('admin/template/footer');
    }
}
