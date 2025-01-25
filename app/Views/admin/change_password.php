<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
</head>
<body>
    <h1>Ganti Password</h1>
    <form action="/admin/update-password" method="post">
        <label for="current_password">Password Saat Ini:</label><br>
        <input type="password" id="current_password" name="current_password"><br><br>

        <label for="new_password">Password Baru:</label><br>
        <input type="password" id="new_password" name="new_password"><br><br>

        <label for="confirm_password">Konfirmasi Password Baru:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>

        <button type="submit">Update Password</button>
    </form>
</body>
</html>
