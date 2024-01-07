<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsumen</title>
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
        <h2>Latihan Tabel Konsumen</h2>
        <h3>Ricky Wijaya</h3>
        <a href="form-tambah-konsumen.php">Tambah Konsumen</a>
        <table>
            <tr>
                <th>Kode Konsumen</th>
                <th>Nama Konsumen</th>
                <th>Alamat Konsumen</th>
                <th>No. Telp Konsumen</th>
                <th>Opsi</th>
            </tr>
            <?php
            $sql = mysqli_query($conn, "select * from tbl_konsumen_rickywijaya");
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?php echo $data['kd_konsumen_rickywijaya']; ?></td>
                    <td><?php echo $data['nama_konsumen_rickywijaya']; ?></td>
                    <td><?php echo $data['alamat_konsumen_rickywijaya']; ?></td>
                    <td><?php echo $data['telp_konsumen_rickywijaya']; ?></td>
                    <td>
                        <a href="form-edit-konsumen.php?kode=<?php echo $data['kd_konsumen_rickywijaya']; ?>">Edit</a> | 
                        <a href="act-konsumen.php?pesan=delete&kode=<?php echo $data['kd_konsumen_rickywijaya'];?>">Delete</a>
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