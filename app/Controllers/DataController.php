<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DataController extends BaseController
{
    public function pendaftaran()
    {
        return view('admin/data_pendaftaran'); // Halaman Data Pendaftaran
    }

    public function dataLain()
    {
        return view('admin/data_lain'); // Halaman Data Lain
    }
}
