<?php
//array multidimensi
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Data mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs):  ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]  ?>">
        </li>
        <li>nama : <?= $mhs["nama"]  ?></li>
        <li>NIM : <?= $mhs["NIM"]  ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]  ?></li>
        <li>email : <?= $mhs["emaiL"]  ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
