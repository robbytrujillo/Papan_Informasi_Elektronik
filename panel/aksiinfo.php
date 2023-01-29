<?php
	//Untuk mengecek apakah ini proses simpan atau update
	if($_POST['Simpan']=='Simpan'){
		//mengmbil variabel yang dikirim oleh formulir
		$judul=$_POST['judul'];
		$isi=$_POST['isi'];
		$lama=$_POST['lama'];
		include "config/koneksi.php";
		
		$sql="insert into informasi set judul='$judul', isi='$isi', lama='$lama'";
		$query=mysql_query($sql) or die(mysql_error());
		
		//kemabli ke halaman tampil info
		header("location:index.php?mod=informasi");
	}elseif($_POST['Ubah']=='Ubah'){
		//mengmbil variabel yang dikirim oleh formulir
		$kodeh=$_POST['kodeh'];
		$judul=$_POST['judul'];
		$isi=$_POST['isi'];
		$lama=$_POST['lama'];
		include "config/koneksi.php";
		
		$sql="update informasi set judul='$judul', isi='$isi', lama='$lama' where id='$kodeh'";	
		$query=mysql_query($sql) or die(mysql_error());
		
		//kemabli ke halaman tampil siswa
		header("location:index.php?mod=informasi");
	}
?>