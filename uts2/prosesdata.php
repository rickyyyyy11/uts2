<?php
include('koneksi.php');

$nama       = "";
$alamat     = "";
$kode       = "";
$ukuran     = "";
$noHp       = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from tbl_supplier_rickywijaya where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from tbl_supplier_rickywijaya where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama       = $r1['nama_rickywijaya'];
    $alamat     = $r1['alamat_rickywijaya'];
    $kode       = $r1['kodesupplier_rickywijaya'];
    $noHp       = $r1['notelpsupplier_rickywijaya'];


    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama       =  $_POST['nama_rickywijaya'];
    $alamat     =  $_POST['alamat_rickywijaya'];
    $kode       =  $_POST['kodesupplier_rickywijaya'];
    $noHp       =  $_POST['notelpsupplier_rickywijaya'];

    if ( $nama && $alamat && $noHp && $kode ) {
        if ($op == 'edit') { //untuk update
            $sql1       = "UPDATE tbl_supplier_rickywijaya set nama_rickywijaya='$nama',alamat_rickywijaya = '$alamat',notelpsupplier_rickywijaya='$noHp',kodesupplier_rickywijaya='$kode' where id = '$id'";

            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "INSERT into  tbl_supplier_rickywijaya(nama_rickywijaya,alamat_rickywijaya,notelpsupplier_rickywijaya,kodesupplier_rickywijaya) VALUES ('$nama','$alamat','$noHp','$kode')";

            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>