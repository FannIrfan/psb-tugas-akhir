<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penerimaan Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Pastikan body dan html memiliki tinggi penuh */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Gaya untuk background */
        body {
            background: url('/image/background.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            color: white;
            display: flex; /* Flexbox untuk mengatur posisi konten */
            align-items: center; /* Tengah secara vertikal */
            justify-content: center; /* Tengah secara horizontal */
        }

        /* Gaya untuk teks "Selamat Datang" */
        .content h2 {
            font-size: 3rem; /* Besarkan font */
            margin-bottom: 1.5rem; /* Tambahkan spasi di bawahnya */
        }


        /* Overlay untuk membuat gambar lebih gelap */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%; /* Pastikan overlay menutupi seluruh halaman */
            background: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi */
            z-index: 1;
        }

        /* Konten tetap terlihat di atas overlay */
        .content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PENERIMAAN SISWA BARU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
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
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



    <!-- Konten -->
    <div class="content">
        <h2>Selamat Datang, <strong><?= session()->get('username') ?></strong></h2>
        <p class="lead">Di Sistem Penerimaan Siswa Baru<br>SMK Ma'arif Cicalengka<br>Tahun Pelajaran 2025/2026</p>
        <a href="registerForm" class="btn btn-primary mt-3">Daftar Sekarang</a>
    </div>
</body>
</html>
