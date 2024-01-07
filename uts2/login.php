<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM tbl_login_rickywijaya WHERE username_rickywijaya = '$username' AND password_rickywijaya = '$password'");
if (mysqli_num_rows($sql) == 1) {
    header("location:dashboard.php");
}else{
    header("location:ndex.php");
}
?>