<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Belajar PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="content-container">
        <h2>Hubungi Kami</h2>
        <form class="contact-form">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>
</body>

<?php
require 'footer.php';
?>

</html>