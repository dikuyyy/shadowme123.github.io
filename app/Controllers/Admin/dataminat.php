<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class dataminat extends BaseController
{
	public function index()
	{
		$dataminat = $this->dataminatModel->findAll();
		$data = [
			'title' => 'Data Minat Penelitian',
			'dataminat' => $dataminat
		];
		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/dataminat/dataminat', $data);
		echo view('admin/template/footer');
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Minat'
		];

		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/dataminat/create', $data);
		echo view('admin/template/footer');
	}

	public function update($id_minat)
	{
		$dataminat = $this->dataminatModel->query("SELECT * FROM dataminat WHERE id_minat = '$id_minat'");
		$data = [
			'title' => 'Form Ubah Data Minat',
			'dataminat' => $dataminat
		];

		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/dataminat/update', $data);
		echo view('admin/template/footer');
	}

	public function save()
	{

		$this->dataminatModel->save([
			'id_minat' => $this->request->getVar('kodeminat'),
			'nama_minat' => $this->request->getVar('namaminat')
		]);
		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
		return redirect()->to('admin/dataminat');
	}

	public function delete($id_minat)
	{
		$this->dataminatModel->query("DELETE FROM dataminat WHERE id_minat = '$id_minat'");
		return redirect()->to('admin/dataminat');
	}

	public function save_update($id)
	{
		$id_minat = $this->request->getVar('kodeminat');
		$nama_minat = $this->request->getVar('namaminat');
		$this->dataminatModel->query("UPDATE dataminat SET id_minat = '$id_minat', nama_minat = '$nama_minat' WHERE id_minat = '$id'");
		return redirect()->to('admin/dataminat');
	}
}
