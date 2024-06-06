<?php
$mahasiswa = [
    [
    'nama' => 'teguh',
    'NIM' => '23510031',
    'jurusan' => 'Teknologi Informasi',
    'email' => 'teguh@stimata.ac.id',
    'img' => 'teguh.jpeg'
    ],
];

?>
<!DOCTYPE html>
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
            <a href="latihan2.php?nama=<?php echo $mhs['nama']; ?>
                 &NIM=<?php echo $mhs['NIM']; ?>
                 &jurusan=<?php echo $mhs['jurusan']; ?>
                 &email=<?php echo $mhs['email']; ?>
                 &img=<?php echo $mhs['img']; ?>">
                 <?php echo $mhs['nama'];   ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html> 