<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Informasi</title>
</head>

<body>
    <form action="aksiinfo.php" method="post" enctype="multipart/from-data" name="form1" id="form1">
        <table border="0" align="center">
            <tr>
                <td colspan="2"><strong>Tambah Informasi</strong></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul" /></td>
            </tr>
            <tr>
                <td valign="top">Isi</td>
                <td><textarea name="isi" id="isi" cols="45" rows="5" style="width: 100%; height: 300px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Lama Durasi</td>
                <td><input type="text" name="lama" id="lama" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Simpan" id="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>