<?php
	//include "config/ceksession.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>Tampil Informasi</title>
</head>
<body>
<a href="index.php?mod=tambahinfo" title="Tambah Data Siswa">Tambah</a>
<table width="483" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40">No</td>
    <td width="62">Judul</td>
    <td width="173">Aksi</td>
  </tr>
<?php
	include "config/koneksi.php";		
	$sql="select * from informasi ";
	$query=mysql_query($sql) or die(mysql_error());
	while($data=mysql_fetch_array($query)){
		$n++;
?>
  <tr>
    <td><?php echo $n; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><a href="index.php?mod=ubahinfo&id=<?php echo $data['id']; ?>" title="Ubah data <?php echo $data['id']; ?>">Ubah</a> - <a href="hapusinfo.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
  </tr>
<?php
	}
?>
</table>
</body>
</html>