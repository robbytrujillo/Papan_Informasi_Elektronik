<?php
	//Untuk mengecek apakah ini proses simpan atau update
	if($_POST['Simpan']=='Simpan'){
		//mengmbil variabel yang dikirim oleh formulir		
		$isi=$_POST['isi'];
		include "config/koneksi.php";
		
		$sql="insert into ticker set isi='$isi'";
		$query=mysql_query($sql) or die(mysql_error());
		
		//kemabli ke halaman tampil info
		header("location:index.php?mod=ticker");
	}elseif($_POST['Ubah']=='Ubah'){
		//mengmbil variabel yang dikirim oleh formulir
		$kodeh=$_POST['kodeh'];		
		$isi=$_POST['isi'];
		include "config/koneksi.php";
		
		$sql="update ticker set isi='$isi' where id='$kodeh'";	
		$query=mysql_query($sql) or die(mysql_error());
		
		//kemabli ke halaman tampil siswa
		header("location:index.php?mod=ticker");
	}
?>