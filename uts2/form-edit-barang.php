<?php
    include "koneksi.php";

    $kode = $_GET['kode'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_barang_rickywijaya WHERE kd_barang_rickywijaya = '$kode'");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
</head>
<body>
    <center>
        <h2>Form Edit Barang</h2>
        <form action="act-barang.php?pesan=edit&kodel=<?php echo $kode; ?>" method="post">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td><input type="text" name="kd_barang_rickywijaya" id="" value="<?php echo $data['kd_barang_rickywijaya'];?>"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang_rickywijaya" id="" value="<?php echo $data['nama_barang_rickywijaya']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td>:</td>
                    <td><textarea name="jenis_barang_rickywijaya" id="" cols="20" rows="3"><?php echo $data['jenis_barang_rickywijaya'];?></textarea></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td>:</td>
                    <td><input type="text" name="hargasatuan_rickywijaya" id="" value="<?php echo $data['hargasatuan_rickywijaya'];?>"></td>
                </tr>
            </table>
            <br>
            <button type="submit">Simpan</button>
        </form>
    </center>
</body>
</html>