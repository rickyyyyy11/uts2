<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="act-tambah.php" method="POST">
        <h2>Form Pemesanan Barang</h2>
        <h3>Ricky Wijaya - 06TPLP007 - 191011401387</h3>
            <table>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pemesan_rickywijaya" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea type="text" name="alamat_rickywijaya" id=""></textarea></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp_rickywijaya" id=""></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>:</td>
                    <td><input type="text" name="email_rickywijaya" id=""></td>
                </tr>
                <tr>
                    <td>Pesanan</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="barang_rickywijaya" id="barang1" value="Kaos">
                        <label for="barang1">Kaos</label><br>
                        <input type="radio" name="barang_rickywijaya" id="barang2" value="Kemeja">
                        <label for="barang2">Kemeja</label><br>
                        <input type="radio" name="barang_rickywijaya" id="barang3" value="Hem">
                        <label for="barang3">Hem</label><br>
                    </td>
                </tr>
                <tr>
                    <td>Pesanan</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="ukuran_rickywijaya" id="ukuran1" value="S">
                        <label for="barang1">S</label>
                        <input type="radio" name="ukuran_rickywijaya" id="ukuran2" value="M">
                        <label for="barang2">M</label>
                        <input type="radio" name="ukuran_rickywijaya" id="ukuran3" value="L">
                        <label for="barang3">L</label>
                        <input type="radio" name="ukuran_rickywijaya" id="ukuran4" value="XL">
                        <label for="barang4">XL</label>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah_rickywijaya" id=""></td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>