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
        <h2>Form Tambah Konsumen</h2>
        <form action="act-konsumen.php?pesan=simpan" method="post">
            <table>
                <tr>
                    <td>Kode Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="kode" id=""></td>
                </tr>
                <tr>
                    <td>Nama Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Alamat Konsumen</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="20" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>No. Telp Konsumen</td>
                    <td>:</td>
                    <td><input type="text" name="telp" id=""></td>
                </tr>
            </table>
            <br>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>