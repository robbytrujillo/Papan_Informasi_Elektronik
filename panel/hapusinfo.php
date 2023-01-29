<?php
	//Memasukkan file koneksi.php untuk membukian koneksi
	include "config/koneksi.php";
	
	//Mengambil variabel id yang dikirim oleh form tampilsiswa.php
	$id=$_GET['id'];
	
	//Perintah SQL untuk menghapus record
	$sql="delete from informasi where id='$id'";
	$query=mysql_query($sql) or die(mysql_error());
	
	//Perintah untuk kembali ke form tambah siswa
	header("location:index.php?mod=informasi");
?>