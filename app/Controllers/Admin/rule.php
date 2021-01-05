<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class rule extends BaseController
{

	public function index()
	{
		$rule = $this->ruleModel->select('id, dataminat.nama_minat, ciriminat.ciri_minat')->join('dataminat', 'dataminat.id_minat = rule.id_minat')->join('ciriminat', 'ciriminat.id_ciri = rule.id_ciri')->get()->getResultArray();
		$data = [
			'title' => 'Basis Pengetahuan',
			'rule' => $rule
		];
		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/rule/rule', $data);
		echo view('admin/template/footer');
	}

	public function create()
	{
		$dataminat = $this->ruleModel->query("SELECT nama_minat FROM dataminat");
		$ciriminat = $this->ruleModel->query("SELECT ciri_minat FROM ciriminat");
		$data = [
			'title' => 'Basis Pengetahuan',
			'dataminat' => $dataminat,
			'ciriminat' => $ciriminat
		];
		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/rule/create', $data);
		echo view('admin/template/footer');
	}

	public function save()
	{
		$dataminat = $this->request->getVar('dataminat');
		$ciriminat = $this->request->getVar('ciriminat');
		$kodeminat = $this->dataminatModel->select('id_minat')->where('nama_minat', $dataminat)->get()->getResultArray();
		$kodeciri = $this->ciriminatModel->select('id_ciri')->where('ciri_minat', $ciriminat)->get()->getResultArray();

		foreach ($kodeminat as $row) :
			$id_minat = $row['id_minat'];
		endforeach;
		foreach ($kodeciri as $row) :
			$id_ciri = $row['id_ciri'];
		endforeach;
		$validasi = $this->ruleModel->select('*')->where('id_minat', $id_minat)->where('id_ciri', $id_ciri)->countAllResults();
		if ($validasi == 0) {
			$this->ruleModel->save([
				'id' => '',
				'id_minat' => $id_minat,
				'id_ciri' => $id_ciri
			]);
		}
		return redirect()->to('/admin/rule');
	}

	public function delete($id)
	{
		$this->ruleModel->delete($id);
		return redirect()->to('/admin/rule');
	}

	public function update($id)
	{
		$id_minat = $id;
		$dataminat = $this->ruleModel->select('dataminat.nama_minat')->join('dataminat', 'dataminat.id_minat = rule.id_minat')->where('id', $id)->get()->getResultArray();
		$ciriminat = $this->ruleModel->select('ciriminat.ciri_minat')->join('ciriminat', 'ciriminat.id_ciri = rule.id_ciri')->where('id', $id)->get()->getResultArray();
		$databaru = $this->dataminatModel->findAll();
		$ciribaru = $this->ciriminatModel->findAll();
		$data = [
			'title' => 'Basis Pengetahuan',
			'dataminat' => $dataminat,
			'ciriminat' => $ciriminat,
			'databaru' => $databaru,
			'ciribaru' => $ciribaru,
			'id_minat' => $id
		];
		echo view('admin/template/header', $data);
		echo view('admin/template/sidebar');
		echo view('admin/rule/update', $data);
		echo view('admin/template/footer');
	}

	public function update_process()
	{
		$dataminat = $this->request->getVar('dataminat');
		$ciriminat = $this->request->getVar('ciriminat');
		$id = $this->request->getVar('id_minat');
		$kodeminat = $this->dataminatModel->select('id_minat')->where('nama_minat', $dataminat)->get()->getResultArray();
		$kodeciri = $this->ciriminatModel->select('id_ciri')->where('ciri_minat', $ciriminat)->get()->getResultArray();
		foreach ($kodeminat as $row) :
			$id_minat = $row['id_minat'];
		endforeach;
		foreach ($kodeciri as $row) :
			$id_ciri = $row['id_ciri'];
		endforeach;
		$this->ruleModel->save([
			'id' => $id,
			'id_minat' => $id_minat,
			'id_ciri' => $id_ciri
		]);
		return redirect()->to('/admin/rule');
	}
}
