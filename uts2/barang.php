<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <style>
        table,th,td{
            border:1px solid;
        }
            table{
                border-collapse:collapse;
            width:70%; 
        }
    </style>
</head>
<body>
    <center>
        <h2>Aplikasi UTS Form Pemesanan Barang</h2>
        <h3>Ricky Wijaya - 06TPLP007 - 191011401387</h3>
        <a href="form-barang.php">Tambah Barang</a>
        <table>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Harga Satuan</th>
                <th>Opsi</th>
            </tr>
            <?php
            $sql = mysqli_query($conn, "select * from tbl_barang_rickywijaya");
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?php echo $data['kd_barang_rickywijaya']; ?></td>
                    <td><?php echo $data['nama_barang_rickywijaya']; ?></td>
                    <td><?php echo $data['jenis_barang_rickywijaya']; ?></td>
                    <td><?php echo $data['hargasatuan_rickywijaya']; ?></td>
                    <td>
                        <a href="form-edit-barang.php?kode=<?php echo $data['kd_barang_rickywijaya']; ?>">Edit</a> | 
                        <a href="act-barang.php?pesan=delete&kode=<?php echo $data['kd_barang_rickywijaya'];?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
        <a href="dashboard.php">Kembali</a>
    </center>
</body>
</html>