<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_pendaftaran',
        'nama_lengkap',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'kewarganegaraan',
        'agama',
        'jenis_kelamin',
        'berkebutuhan_khusus',
        'no_akta_lahir',
        'anak_ke',
        'tinggi_badan',
        'berat_badan',
        'lingkar_kepala',
        'jarak_tempuh',
        'mode_transportasi',
        'jumlah_saudara',
    ];
}
