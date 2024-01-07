<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat       = $_POST['alamat'];
$telp       = $_POST['telp'];

mysqli_query($conn, "insert into tbl_konsumen_rickywijaya values('$kode', '$nama', '$alamat', '$telp')");
header("location:konsumen.php");

?>