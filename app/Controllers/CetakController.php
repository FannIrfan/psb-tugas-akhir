<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CetakController extends BaseController
{
    public function buktiPendaftaran()
    {
        return view('admin/cetak_bukti_pendaftaran'); // Halaman Cetak Bukti Pendaftaran
    }
}
