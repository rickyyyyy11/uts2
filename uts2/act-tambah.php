<?php
include 'koneksi.php';

$nama_pemesan = $_POST['nama_pemesan_rickywijaya'];
$alamat       = $_POST['alamat_rickywijaya'];
$nohp         = $_POST['nohp_rickywijaya'];
$email        = $_POST['email_rickywijaya'];
$pesanan      = $_POST['barang_rickywijaya'];
$ukuran       = $_POST['ukuran_rickywijaya'];
$jumlah       = $_POST['jumlah_rickywijaya'];

mysqli_query($conn, "insert into tbl_pesanan_rickywijaya values('$nama_pemesan', '$alamat', '$nohp', '$email', '$pesanan', '$ukuran', '$jumlah')");
header("location:barang.php");

?>