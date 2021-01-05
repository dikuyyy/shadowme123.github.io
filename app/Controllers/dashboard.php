<?php

namespace App\Controllers;

class dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Sistem Pakar'
		];
		echo view('template/header', $data);
		echo view('template/sidebar');
		echo view('dashboard');
		echo view('template/footer');
	}
}
