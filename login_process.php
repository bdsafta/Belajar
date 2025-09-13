<?php
session_start();

// Dummy akun (bisa diganti database nanti)
$valid_username = "admin";
$valid_password = "12345";

// Ambil data form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek login
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username; // simpan ke session
    header("Location: dashboard.php");
    exit;
} else {
    echo "<h2>Login Gagal!</h2>";
    echo "<p>Username atau password salah.</p>";
    echo '<a href="login.php">Coba lagi</a>';
}
