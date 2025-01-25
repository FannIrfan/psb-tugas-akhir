<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // Generate unique registration number
        function generateRegistrationNumber() {
            const currentTimestamp = new Date().getTime();
            return "PSB" + currentTimestamp;
        }

        // Auto-fill registration number on page load
        window.onload = function() {
            document.getElementById('noPendaftaran').value = generateRegistrationNumber();
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PENERIMAAN SISWA BARU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h4 class="text-center mb-4">DATA FORMULIR PENDAFTARAN</h4>
        <form class="mt-4" action="/controllers/PendaftaranController.php" method="post">
            <!-- No. Pendaftaran -->
            <div class="mb-3 row">
                <label for="noPendaftaran" class="col-sm-3 col-form-label">No. Pendaftaran</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="noPendaftaran" readonly>
                </div>
            </div>

            <!-- Bagian Data Diri -->
            <h5 class="bg-success text-white p-2">Data Diri</h5>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap">
                </div>
                <div class="col-md-6">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir">
                </div>
                <div class="col-md-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir">
                </div>
                <div class="col-md-3">
                    <label for="nik" class="form-label">Nomor Identitas (NIK)</label>
                    <input type="text" class="form-control" id="nik">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                    <input type="text" class="form-control" id="kewarganegaraan">
                </div>
                <div class="col-md-4">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" id="agama">
                        <option selected disabled>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelamin">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="berkebutuhanKhusus" class="form-label">Berkebutuhan Khusus</label>
                    <input type="text" class="form-control" id="berkebutuhanKhusus">
                </div>
                <div class="col-md-4">
                    <label for="noAktaLahir" class="form-label">No. Registrasi Akta Lahir</label>
                    <input type="text" class="form-control" id="noAktaLahir">
                </div>
                <div class="col-md-4">
                    <label for="anakKe" class="form-label">Anak ke-</label>
                    <input type="number" class="form-control" id="anakKe">
                </div>
            </div>

            <!-- Bagian Data Dapodik -->
            <h5 class="bg-primary text-white p-2">Data Dapodik</h5>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="tinggiBadan" class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" id="tinggiBadan">
                </div>
                <div class="col-md-3">
                    <label for="beratBadan" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" id="beratBadan">
                </div>
                <div class="col-md-3">
                    <label for="lingkarKepala" class="form-label">Lingkar Kepala</label>
                    <input type="number" class="form-control" id="lingkarKepala">
                </div>
                <div class="col-md-3">
                    <label for="jarak" class="form-label">Jarak Tempuh</label>
                    <select class="form-select" id="jarak">
                        <option selected disabled>Pilih Jarak</option>
                        <option value="< 1 jam">< 1 jam</option>
                        <option value="> 1 jam">> 1 jam</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="transportasi" class="form-label">Mode Transportasi</label>
                    <select class="form-select" id="transportasi">
                        <option selected disabled>Pilih Mode Transportasi</option>
                        <option value="Sepeda Motor">Sepeda Motor</option>
                        <option value="Sepeda">Sepeda</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Transportasi Umum">Transportasi Umum</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="sebutanSaudara" class="form-label">Jumlah Saudara Kandung</label>
                    <input type="number" class="form-control" id="sebutanSaudara">
                </div>
            </div>

            <form class="mt-4" action="detailRegister.php" method="post">
    <!-- Form fields -->
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
