<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ciriminat extends BaseController
{
    public function index()
    {
        $ciriminat = $this->ciriminatModel->findAll();
        $cek = $this->ciriminatModel->select('*')->countAll();
        $data = [
            'title' => 'Ciri Minat Penelitian',
            'ciriminat' => $ciriminat,
            'cek' => $cek
        ];
        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar');
        echo view('admin/ciriminat/ciriminat', $data);
        echo view('admin/template/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Ciri Minat'
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar');
        echo view('admin/ciriminat/create', $data);
        echo view('admin/template/footer');
    }

    public function save()
    {
        $this->ciriminatModel->save([
            'id_ciri' => $this->request->getVar('kodeciri'),
            'ciri_minat' => $this->request->getVar('ciriminat')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/admin/ciriminat');
    }

    public function ubah($id)
    {
        $query = $this->ciriminatModel->select('id_ciri,ciri_minat')->where('id_ciri', $id)->get()->getResultArray();
        $data = [
            'title' => 'Form Ubah Data Ciri Minat',
            'query' => $query
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar');
        echo view('admin/ciriminat/ubah', $data);
        echo view('admin/template/footer');
    }

    public function delete($id_ciri)
    {
        $this->ciriminatModel->query("DELETE FROM ciriminat WHERE id_ciri = '$id_ciri'");
        return redirect()->to('/admin/ciriminat');
    }

    public function proses_ubah()
    {
        $id_ciri = $this->request->getVar('kodeciri');
        $ciri_minat = $this->request->getVar('ciriminat');
        $this->ciriminatModel->query("UPDATE ciriminat SET ciri_minat = '$ciri_minat' WHERE id_ciri = '$id_ciri'");
        return redirect()->to('/admin/ciriminat');
    }
}
