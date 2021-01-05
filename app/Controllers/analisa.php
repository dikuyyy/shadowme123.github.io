<?php

namespace App\Controllers;


class analisa extends BaseController
{
	public function index()
	{
		$analisa = $this->analisaModel->select('ciriminat.ciri_minat')->join('ciriminat', 'ciriminat.id_ciri = analisa.id_ciri')->get()->getResultArray();
		$data = [
			'title' => 'Analisa Minat Penelitian',
			'analisa' => $analisa
		];
		echo view('template/header', $data);
		echo view('template/sidebar');
		echo view('analisa/analisa');
		echo view('template/footer');
	}

	public function hasil()
	{
		$analisa = $this->analisaModel->select('ciriminat.id_ciri, ciriminat.ciri_minat')->join('ciriminat', 'ciriminat.id_ciri = analisa.id_ciri')->get()->getResultArray();

		$i = 1;
		$pendidikan = 0;
		$murni = 0;
		$nudipilih = [];
		$id_minat = $this->analisaModel->select('rule.id_minat')->join('rule', 'rule.id_ciri = analisa.id_ciri')->where("analisa.id_ciri = 'C004'")->get()->getResultArray();
		foreach ($analisa as $row) :
			$urutan = $this->request->getVar('ciriminat' . $i);
			$id_ciri = $row['id_ciri'];
			$id_minat = $this->analisaModel->select('rule.id_minat')->join('rule', 'rule.id_ciri = analisa.id_ciri')->where("analisa.id_ciri = '$id_ciri'")->get()->getResultArray();
			$jumlahrow = $this->analisaModel->select('rule.id_minat')->join('rule', 'rule.id_ciri = analisa.id_ciri')->where("analisa.id_ciri = '$id_ciri'")->countAllResults();
			$ciriminat = $this->ciriminatModel->select('ciriminat.ciri_minat')->join('analisa', 'analisa.id_ciri = ciriminat.id_ciri')->where("ciriminat.id_ciri = '$id_ciri'")->get()->getResultArray();
			$minat = $ciriminat[0];
			$id = $id_minat[0];
			if ($urutan == 'option1' and $jumlahrow == 1) :
				if ($id['id_minat'] == 'A001') :
					$murni = $murni + 10;
				endif;
				if ($id['id_minat'] == 'A002') :
					$pendidikan = $pendidikan + 10;
				endif;
				$nudipilih[] = $minat['ciri_minat'];
			endif;
			if ($urutan == 'option1' and $jumlahrow == 2) :
				$murni = $murni + 10;
				$pendidikan = $pendidikan + 10;
				$nudipilih[] = $minat['ciri_minat'];
			endif;
			$i++;
		endforeach;
		$jumlahpend = $this->ruleModel->select('id_ciri')->where("id_minat = 'A002'")->countAllResults();
		$jumlahmurni = $this->ruleModel->select('id_ciri')->where("id_minat = 'A001'")->countAllResults();
		$jenispenelitian = $this->dataminatModel->select('nama_minat')->get()->getResultArray();
		$hasilmurni = intval($murni / $jumlahmurni * 10);
		$hasilpendidikan = intval($pendidikan / $jumlahpend * 10);
		if ($hasilmurni > $hasilpendidikan) {
			$hasil = 'Penelitian Murni';
		};
		if ($hasilmurni < $hasilpendidikan) {
			$hasil = 'Penelitian Pendidikan';
		};
		if ($hasilmurni == $hasilpendidikan) {
			$hasil = 'Penelitian Murni';
		};
		$data = [
			'title' => 'Hasil Analisa',
			'hasilpendidikan' => $hasilpendidikan,
			'hasilmurni' => $hasilmurni,
			'kecenderungan' => $nudipilih,
			'jenispenelitian' => $jenispenelitian,
			'hasil' => $hasil
		];
		echo view('template/header', $data);
		echo view('template/sidebar');
		echo view('analisa/hasil', $data);
		echo view('template/footer');
	}
}
