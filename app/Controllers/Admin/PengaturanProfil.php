<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PengaturanProfilModel;

class PengaturanProfil extends BaseController
{
    public function __construct()
	{
		$this->pengaturanModel = new PengaturanProfilModel;
		$this->session = session();
		helper('form');
	}

    public function index()
    {
     return view('admin/pengaturan_profil', [
        'title' => 'Pengaturan Profil',
        'pengaturan' => $this->pengaturanModel->allData(),
    ]);
    }

	public function edit($id)
    {
        $data = [
		    'nama_website' => $this->request->getPost('nama_website'),
		    'nss' => $this->request->getPost('nss'),
		    'npsn' => $this->request->getPost('npsn'),
			'alamat' => $this->request->getPost('alamat'),
		    'desa' => $this->request->getPost('desa'),
		    'kecamatan' => $this->request->getPost('kecamatan'),
		    'kabupaten' => $this->request->getPost('kabupaten'),
			'provinsi' => $this->request->getPost('provinsi'),
			'tahun_pendirian' => $this->request->getPost('tahun_pendirian'),
			'luas_tanah' => $this->request->getPost('luas_tanah'),
			'status' => $this->request->getPost('status'),
		    'status_gugus' => $this->request->getPost('status_gugus'),
		    'akreditasi' => $this->request->getPost('akreditasi'),
		];
        
        $this->pengaturanModel->edit($id, $data);
		$this->session->setFlashdata('success', 'Data Pengaturan Profil Berhasil Di Update.');
		return redirect()->to(base_url('/admin/pengaturanprofil/'));

	}
}
