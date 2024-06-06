<?php
$mahasiswa = [
    [
    "nama" => "Teguh Firmansyah",
    "NIM" => "23510031",
    "Jurusan" => "Sistem Informasi",
    "email" => "teguh@stimata.ac.id",
    "gambar" => "teguh.jpeg"
    ],

    [
    "nama" => "Firman Saputra",
    "NIM" => "23510032",
    "Jurusan" => "Sistem Informasi",
    "email" => "firman@stimata.ac.id",
    "gambar" => "firman.jpeg"
    ]
];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
        <li>
            <a
                 href="latihan1.php?nama=<?= $mhs["nama"]; ?>&NIM=  <?= $mhs["NIM"]; ?>&
                 jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= 
                 $mhs["gambar"]; ?>"><?= $mhs["nama"];   ?></a>

        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html> 