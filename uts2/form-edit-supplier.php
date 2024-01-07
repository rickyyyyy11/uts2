<?php
    include "koneksi.php";

    $kode = $_GET['kode'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_supplier_rickywijaya WHERE kodesupplier_rickywijaya = '$kode'");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konsumen</title>
</head>
<body>
    <center>
        <h2>Form Edit Konsumen</h2>
        <form action="act-supplier.php?pesan=edit&kodel=<?php echo $kode; ?>" method="post">
            <table>
                <tr>
                    <td>Kode Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="kode" id="" value="<?php echo $data['kodesupplier_rickywijaya'];?>"></td>
                </tr>
                <tr>
                    <td>Nama Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="" value="<?php echo $data['namasupplier_rickywijaya']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat Konsumen</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="20" rows="3"><?php echo $data['alamatsupplier_rickywijaya'];?></textarea></td>
                </tr>
                <tr>
                    <td>No. Telp Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="telp" id="" value="<?php echo $data['notelpsupplier_rickywijaya'];?>"></td>
                </tr>
            </table>
            <br>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>