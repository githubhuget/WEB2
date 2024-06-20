<?php 
require "function.php";
// koneksi DBMS 

/// cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak?
    if(tambah($_POST) > 0){
        echo "
        <script>alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal ditambahkan";
    }

}
// source gambar google.com
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="">  
</head>
<body>
    <h1>Tambah Data alat</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="Nama_am">nama alat :</label>
                <input type="text" name="Nama_am" required id="Nama_am">
            </li>
            <li>
                <label for="Carapakai">Carapakai :</label>
                <input type="text" name="Carapakai" required id="Carapakai">
            </li>
            <li>
                <label for="Harga">Harga :</label>
                <input type="text" name="Harga" required id="Harga">
            </li>
            <li>
                <label for="img">img :</label>
                <input type="text" name="img" required id="img">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>
</html>