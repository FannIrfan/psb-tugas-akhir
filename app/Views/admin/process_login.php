<?php
// Simulated credentials for admin
$adminUsername = 'admin';
$adminPassword = '123';

// Retrieve submitted data
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
if ($username === $adminUsername && $password === $adminPassword) {
    // Start session and redirect to dashboard
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: views/admin/dashboard.php');
} else {
    // Redirect back to login with error
    header('Location: views/admin/login.php?error=1');
}
?>
