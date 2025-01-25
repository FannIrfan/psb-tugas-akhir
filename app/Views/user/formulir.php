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
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="registerForm.php">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h4 class="text-center mb-4">DATA FORMULIR PENDAFTARAN</h4>
        <form class="mt-4" action="detailRegister.html" method="get">
            <!-- No. Pendaftaran -->
            <div class="mb-3 row">
                <label for="noPendaftaran" class="col-sm-3 col-form-label">No. Pendaftaran</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="noPendaftaran" name="noPendaftaran" readonly>
                </div>
            </div>

            <!-- Bagian Data Diri -->
            <h5 class="bg-success text-white p-2">Data Diri</h5>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
                </div>
                <div class="col-md-6">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" required>
                </div>
            </div>
            <!-- Add more fields as necessary -->

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
