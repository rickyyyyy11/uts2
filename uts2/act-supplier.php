<?php
include 'koneksi.php';

$kodesupplier = $_POST['kode'];
$namasupplier       = $_POST['nama'];
$alamat       = $_POST['alamat'];
$notelp        = $_POST['telp'];



if ($_GET['pesan'] == 'simpan') {
    mysqli_query($conn, "insert into tbl_supplier_rickywijaya values('$kodesupplier', '$namasupplier', '$alamat', '$notelp')");
}elseif ($_GET['pesan'] == 'edit') {
    $kodel = $_GET['kodel'];
    mysqli_query($conn, "UPDATE tbl_supplier_rickywijaya SET kodesupplier_rickywijaya = '$kodesupplier', namasupplier_rickywijaya = '$namasupplier', alamatsupplier_rickywijaya = '$alamat', notelpsupplier_rickywijaya = '$notelp' WHERE kodesupplier_rickywijaya = '$kodel'");
}elseif ($_GET['pesan'] == 'delete') {
    $kode = $_GET['kode'];
    mysqli_query($conn, "DELETE FROM tbl_supplier_rickywijaya WHERE kodesupplier_rickywijaya = '$kode'");
}
header("location:supplier.php");
?>