<?php
require '../Functions/functions.php';

$id = $_GET['id'];

if(hapus_barang($id) > 0){
    echo "<script>
    alert('Data Berhasil dihapus');
    document.location.href='data_barang.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus');
    document.location.href='data_barang.php';
    </script>";
}
?>
