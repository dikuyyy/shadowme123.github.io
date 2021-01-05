<?php

namespace App\Controllers;

class tentangkami extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];
        echo view('template/header', $data);
        echo view('template/sidebar');
        echo view('aboutus');
        echo view('template/footer');
    }
}
