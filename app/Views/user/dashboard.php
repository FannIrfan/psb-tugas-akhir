<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Dashboard</h2>

        <div class="mb-3">
            <a href="/user/registration" class="btn btn-success">Pendaftaran</a>
            <a href="/user/profile" class="btn btn-info">Lihat Profil</a>
            <a href="/user/payment" class="btn btn-warning">Cetak Bukti Pembayaran</a>
        </div>

        <div class="mb-3">
            <a href="/user/edit-profile" class="btn btn-primary">Edit Profil</a>
        </div>

        <div class="mb-3">
            <a href="/user/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
