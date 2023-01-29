<?php
	session_start();
	if($_SESSION['nama']==""){
		header("location:login.php?pesan=Maaf, Anda Belum Login");	
	}
?>