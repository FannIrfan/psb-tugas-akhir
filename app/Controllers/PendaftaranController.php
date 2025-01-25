<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class PendaftaranController extends BaseController
{
    public function store()
    {
        $pendaftaranModel = new PendaftaranModel();

        // Ambil data dari form
        $data = [
            'no_pendaftaran' => $this->request->getPost('noPendaftaran'),
            'nama_lengkap' => $this->request->getPost('namaLengkap'),
            'nisn' => $this->request->getPost('nisn'),
            'tempat_lahir' => $this->request->getPost('tempatLahir'),
            'tanggal_lahir' => $this->request->getPost('tanggalLahir'),
            'nik' => $this->request->getPost('nik'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'agama' => $this->request->getPost('agama'),
            'jenis_kelamin' => $this->request->getPost('jenisKelamin'),
            'berkebutuhan_khusus' => $this->request->getPost('berkebutuhanKhusus'),
            'no_akta_lahir' => $this->request->getPost('noAktaLahir'),
            'anak_ke' => $this->request->getPost('anakKe'),
            'tinggi_badan' => $this->request->getPost('tinggiBadan'),
            'berat_badan' => $this->request->getPost('beratBadan'),
            'lingkar_kepala' => $this->request->getPost('lingkarKepala'),
            'jarak_tempuh' => $this->request->getPost('jarak'),
            'mode_transportasi' => $this->request->getPost('transportasi'),
            'jumlah_saudara' => $this->request->getPost('sebutanSaudara'),
        ];

        // Simpan data ke database
        $pendaftaranModel->insert($data);

        // Redirect ke dashboard pengguna
        return redirect()->to('/user/dashboard');
    }
}
