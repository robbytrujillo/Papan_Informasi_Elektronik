<?php
//memulai sesi
session_start();
$kode = $_SESSION['kode'];

//apabila sesi kosong, maka sesi di set menjadi 0
if ($kode == "") {
    $kode = 0;
}

include "panel/config/koneksi.php";

//ambil record selanjutnya yang akan ditampilkan
$sql = "select * from informasi where id>'$kode'";
$query = mysqli_query($sql) or die(mysqli_error() . $sql);
$data = mysqli_fetch_array($query);

if (mysqli_num_rows($query) == 0) {
    $data['lama'] = 1000;
    $_SESSION['kode'] = 0;
} else {
    $_SESSION['kode'] = $data['id'];
}
?>
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript">
    clearInterval(refreshId);
</script>
<script type="text/javascript">
    var refreshId = setInterval(function () {
        $('#badan').fadeOut("slow").load('response.php').fadeIn("slow");
    }, <?php echo $data['lama']; ?>);
</script>

<div id="judul">
    <?php echo $data['judul']; ?>
</div>
<div id="isi">
    <?php echo $data['isi']; ?>
</div>