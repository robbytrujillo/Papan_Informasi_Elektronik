<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Informasi</title>
</head>
<body>
<form action="aksiticker.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="680" border="0" align="center">
    <tr>
      <td colspan="2"><strong>Tambah Ticker</strong></td>
    </tr>
    <tr>
      <td width="103" valign="top">Isi</td>
      <td width="387"><label>
        <textarea name="isi" id="isi" cols="45" rows="5" ></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Simpan" id="Simpan" value="Simpan" />
        <input type="reset" name="reset" id="reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>