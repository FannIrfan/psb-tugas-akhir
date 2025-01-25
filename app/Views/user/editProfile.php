<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow-sm p-4">
        <h1 class="text-center">Edit Profil</h1>
        <form action="updateProfile" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" value="<?= session()->get('username') ?>" class="form-control" placeholder="Masukkan username baru" required>
            </div>
            <div class="mb-3">
                <label for="full_name" class="form-label">Nama Lengkap</label>
                <input type="text" name="full_name" value="<?= session()->get('full_name') ?>" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="birthplace" class="form-label">Tempat Lahir</label>
                    <input type="text" name="birthplace" value="<?= session()->get('birthplace') ?>" class="form-control" placeholder="Masukkan tempat lahir" required>
                </div>
                <div class="col-md-6">
                    <label for="birthdate" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="birthdate" value="<?= session()->get('birthdate') ?>" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select name="gender" class="form-control" required>
                    <option value="Laki-laki" <?= session()->get('gender') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= session()->get('gender') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" class="form-control" placeholder="Masukkan alamat" required><?= session()->get('address') ?></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="<?= session()->get('email') ?>" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password baru">
                </div>
                <div class="col-md-6">
                    <label for="confirm_password" class="form-label">Ulangi Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Ulangi password baru">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Perbarui Profil</button>
        </form>
    </div>
</body>
</html>
