<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form action="/user/updateProfile" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" name="username" id="username" value="<?= $user['username'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (leave blank to keep current):</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>