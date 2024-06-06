<?php
$nama = $_GET["nama"];
$NIM = $_GET["NIM"];
$jurusan = $_GET["jurusan"];    
$email = $_GET["email"];
$img = $_GET["img"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li><img src="img/teguh.jpeg<?= $_GET["img/teguh.jpeg"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["NIM"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke Halaman sebelumnya</a>
</body>
</html>
