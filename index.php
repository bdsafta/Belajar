<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Belajar PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="content-container">
        <h2>Artikel</h2>
        <div class="content-box">
            <?php
            if (file_exists("content.txt")) {
                echo nl2br(file_get_contents("content.txt"));
            } else {
                echo "Belum ada konten. Silakan login dan tambahkan melalui Dashboard.";
            }
            ?>
        </div>
    </main>
</body>
<?php
require 'footer.php';
?>

</html>