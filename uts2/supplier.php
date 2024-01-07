<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h2>Latihan Tabel Supplier</h2>
        <h3>Ricky Wijaya</h3>
        <a href="form-barang-supplier.php">Tambah Supplier</a>
        <table>
            <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat Supplier</th>
                <th>No. Telp Supplier</th>
                <th>Aksi</th>
            </tr>
            <?php
            $sql = mysqli_query($conn, "select * from tbl_supplier_rickywijaya");
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?php echo $data['kodesupplier_rickywijaya']; ?></td>
                    <td><?php echo $data['namasupplier_rickywijaya']; ?></td>
                    <td><?php echo $data['alamatsupplier_rickywijaya']; ?></td>
                    <td><?php echo $data['notelpsupplier_rickywijaya']; ?></td>
                    <td>

                        <a href="form-edit-supplier.php?kode=<?php echo $data['kodesupplier_rickywijaya']; ?>">Edit</a> | 
                        <a href="act-supplier.php?pesan=delete&kode=<?php echo $data['kodesupplier_rickywijaya'];?>">Delete</a>

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