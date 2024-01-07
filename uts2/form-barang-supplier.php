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
        <form action="act-supplier.php?pesan=simpan" method="POST">
            
            <h2>Form Supplier</h2>
            <h3>Ricky Wijaya</h3>
            <table>
                <tr>
                    <td>Kode Supplier</td>
                    <td>:</td>
                    <td><input type="text" name="kode" id=""></td>
                </tr>
                <tr>
                    <td>Nama Supplier</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Alamat Supplier</td>
                    <td>:</td>
                    <td><textarea type="text" name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td><input type="text" name="telp" id=""></td>
                </tr>
                <tr>
                    <td><button type="submit">Simpan</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>