<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script type="text/javascript" src="jquery-1.7.2.js"></script>
    <script type="text/javascript" src="coolclock.js"></script>
    <script type="text/javascript" src="moreskins.js"></script>
    <script type="text/javascript">
        clearInterval(refreshId);
    </script>
    <script type="text/javascript">
        var refreshId = setInterval(function () {

            $('#badan').fadeOut("slow").load('response.php').fadeIn("slow");
        }, 1000);
    </script>
</head>

<body>
    <!-- kontainer utama -->
    <div id="kontainer">
        <div id="banner">
            <div id="jam">
                <canvas id="clk2" style="display: block;" class="CoolClock:fancy"></canvas>
            </div>
            <div id="logo">Papan Pengumuman LOKOMEDIA</div>
        </div>
        <div id="badan">
            <div id="judul"></div>
            <div id="isi"></div>
        </div>
        <div id="ticker">
            <marquee scrollamount="3">
                <?php
                include "panel/config/koneksi.php";
                $sql = "select * from ticker order by id";
                $query = mysql_query($sql) or die(mysql_error());
                while ($data = mysql_fetch_array($query)) {
                    ?>
                    <img src="bukulokomedia.png" height="25px" align="absmiddle" />
                    <?php echo $data['isi'] ?>
                <?php } ?>
            </marquee>
        </div>
    </div>
</body>

</html>