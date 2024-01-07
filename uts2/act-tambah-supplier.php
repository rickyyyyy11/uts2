<?php
include 'koneksi.php';

$kodesupplier = $_POST['kodesupplier_rickywijaya'];
$namasupplier       = $_POST['namasupplier_rickywijaya'];
$alamat       = $_POST['alamatsupplier_rickywijaya'];
$notelp        = $_POST['notelpsupplier_rickywijaya'];

mysqli_query($conn, "insert into tbl_supplier_rickywijaya values('$kodesupplier', '$namasupplier', '$alamat', '$notelp')");
header("location:supplier.php");

?>