<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "alatmusik");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * from kategori");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Alat Musik</title>
</head>
<body>
  <h1>Kategori Alat Musik</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Id Musik</th>
        <th>Nama Alat Musik</th>
        <th>Cara Pakai</th>
        <th>Harga</th>
        
      </tr>

      <?php $i=1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id_musik'] ?></td>
            <td><?= $row['Nama_am'] ?></td>
            <td><?= $row['Carapakai'] ?></td>
            <td><?= $row['Harga'] ?></td>
			
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
              
    </table>
</body>
</html>