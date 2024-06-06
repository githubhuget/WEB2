<?php

$koneksi = mysqli_connect("localhost","root","","alatmusik");
function query ($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $koneksi;
    $id_musik = htmlspecialchars($data["id_musik"]);
    $Nama_am = htmlspecialchars($data["Nama_am"]);
    $Carapakai= htmlspecialchars($data["Carapakai"]);
    $Harga= htmlspecialchars($data["Harga"]);
    $img = htmlspecialchars($data["img"]);

       //query insert ke database
       $query = "INSERT INTO kategori
       VALUES
       ('','$id_musik','$Nama_am','$Carapakai','$Harga','$img')
       ";
       
       mysqli_query($koneksi, $query);
       return mysqli_affected_rows($koneksi);
}

function hapus($id_musik){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kategori WHERE id = $id_musik");
    return mysqli_affected_rows($koneksi);
}

?>