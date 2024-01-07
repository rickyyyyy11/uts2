<?php
include 'koneksi.php';

$kode = $_POST['kd_barang_rickywijaya'];
$namabarang       = $_POST['nama_barang_rickywijaya'];
$jenis         = $_POST['jenis_barang_rickywijaya'];
$harga        = $_POST['hargasatuan_rickywijaya'];


if ($_GET['pesan'] == 'simpan') {
    mysqli_query($conn, "insert into tbl_barang_rickywijaya values('$kode', '$namabarang', '$jenis', '$harga')");
}elseif ($_GET['pesan'] == 'edit') {
    $kodel = $_GET['kodel'];
    mysqli_query($conn, "UPDATE tbl_barang_rickywijaya SET kd_barang_rickywijaya = '$kode', nama_barang_rickywijaya = '$namabarang', jenis_barang_rickywijaya = '$jenis', hargasatuan_rickywijaya = '$harga' WHERE kd_barang_rickywijaya = '$kodel'");
}elseif ($_GET['pesan'] == 'delete') {
    $kode = $_GET['kode'];
    mysqli_query($conn, "DELETE FROM tbl_barang_rickywijaya WHERE kd_barang_rickywijaya = '$kode'");
}
header("location:barang.php");
?>