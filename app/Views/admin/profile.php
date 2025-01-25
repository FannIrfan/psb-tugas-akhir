<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">My Profile</h1>
        <p class="text-center">Selamat datang di halaman profil Anda.</p>

        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                <h5>Informasi Profil</h5>
            </div>
            <div class="card-body">
                <!-- Profil Detail -->
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama:</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">Akhmad Irfan</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">NIP (Nomor Induk Pengajar):</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">00123654789</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Alamat:</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">Kajen, Kab. Pekalongan</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nomor HP:</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">085123456789</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Jabatan:</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">Kepala Sekolah</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="text-center mt-4">
            <a href="/admin/dashboard" class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
