<?php 
require'function.php';
$alatmusik = query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Daftar alatmusik</h1>
    <a href="tambah.php">Tambah Data musik</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Idmusik</th>
            <th>Aksi</th>
            <th>Nama Alat Musik</th>
            <th>Cara Pakai</th>
            <th>Harga</th>
            <th>Gambar</th>
           
        </tr>
        <?php $i = 1;?>
        <?php foreach ($alatmusik as $row ): ?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="">ubah</a>
                <a href="hapus.php?id=<?= $row['id'];?>">hapus</a>
            </td>
            <td><?= $row['Nama_am']?></td>
            <td><?= $row['Carapakai']?></td>
            <td><?= $row['Harga']?></td>
            <td>
                <img src="img/<?= $row['img']?>" alt="" width="50">
            </td>


        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>
</html>