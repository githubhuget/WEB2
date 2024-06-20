<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "alatmusik");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman utama</title>
</head>
<body>
    <h1>Daftar alat</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>idnama</th>
            <th>nama alat musik</th>
            <th>Carapakai</th>
            <th>harga</th>
            <th>img</th>
           
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><?= $row['Nama_am'] ?></td>
            <td><?= $row['Carapakai'] ?></td>
            <td><?= $row['harga'] ?></td>
			      <td>
                <img src="img/<?= $row['img'] ?>" width="50">
            </td>

        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </table>

</body>
</html>