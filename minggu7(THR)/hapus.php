<?php 
require 'function.php';
$id_musik= $_GET["id_musik"];

if(hapus($id_musik) > 0){
    echo "
    <script>alert('Data berhasil dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data gagal dihapus');
    document.location.href = 'index.php';
    </script>
    ";
}



?>