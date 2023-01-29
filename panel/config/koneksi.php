<?php
$koneksi = mysqli_connect("localhost", "root", "");
if ($koneksi) {
	mysqli_select_db("eboard");
} else {
	echo "Koneksi gagal";
}
?>