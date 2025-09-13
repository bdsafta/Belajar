<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Simpan konten jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $konten = $_POST['konten'] ?? '';
    file_put_contents("content.txt", $konten); // simpan ke file
    $message = "Konten berhasil disimpan!";
}
?>

<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Website Belajar Backend PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="content-container">
        <h2>Selamat datang, <?= $_SESSION['username'] ?> </h2>

        <?php if (!empty($message)) : ?>
            <p class="success-message"><?= $message ?></p>
        <?php endif; ?>

        <form method="POST" class="dashboard-form">
            <label for="konten">Konten untuk Homepage:</label>
            <textarea id="konten" name="konten" rows="6"><?= @file_get_contents("content.txt") ?></textarea>
            <button type="submit">Simpan Konten</button>
        </form>
    </main>
</body>
<?php
require 'footer.php';
?>

</html>