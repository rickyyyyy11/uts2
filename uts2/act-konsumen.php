<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat       = $_POST['alamat'];
$telp       = $_POST['telp'];

if ($_GET['pesan'] == 'simpan') {
    mysqli_query($conn, "insert into tbl_konsumen_rickywijaya values('$kode', '$nama', '$alamat', '$telp')");
}elseif ($_GET['pesan'] == 'edit') {
    $kodel = $_GET['kodel'];
    mysqli_query($conn, "UPDATE tbl_konsumen_rickywijaya SET kd_konsumen_rickywijaya = '$kode', nama_konsumen_rickywijaya = '$nama', alamat_konsumen_rickywijaya = '$alamat', telp_konsumen_rickywijaya = '$telp' WHERE kd_konsumen_rickywijaya = '$kodel'");
}elseif ($_GET['pesan'] == 'delete') {
    $kode = $_GET['kode'];
    mysqli_query($conn, "DELETE FROM tbl_konsumen_rickywijaya WHERE kd_konsumen_rickywijaya = '$kode'");
}
header("location:konsumen.php");
?>