<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bukti Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h1 class="text-center mb-4">Bukti Pembayaran</h1>
        <?php if ($registration): ?>
            <p><strong>Nama Lengkap:</strong> <?= $registration['full_name'] ?></p>
            <p><strong>Kelas:</strong> <?= $registration['grade'] ?></p>
            <p><strong>Program Studi:</strong> <?= $registration['program'] ?></p>
            <p><strong>Status:</strong> Terdaftar</p>
        <?php else: ?>
            <p class="text-danger">Belum ada pendaftaran yang ditemukan.</p>
        <?php endif; ?>
        <button onclick="window.print()" class="btn btn-success mt-3 w-100">Cetak Bukti</button>
    </div>
</body>
</html>
