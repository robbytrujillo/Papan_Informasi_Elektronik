<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel Admin Papan Informasi</title>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="kontainer">
    	<div id="banner"></div>
        <div id="menu">
       	  <ul id="MenuBar1" class="MenuBarHorizontal">
        	  <li><a href="index.php">Home</a>       	    </li>
        	  <li><a href="#" class="MenuBarItemSubmenu">Master</a>
        	    <ul>
                  <li><a href="index.php?mod=informasi">Informasi</a></li>
                  <li><a href="index.php?mod=ticker">Ticker</a></li>
        	    </ul>
        	  </li>
        	  <li><a href="logout.php">Log Out</a>       	    </li>
</ul>
        </div>
        <div id="badan">
        	<?php
				$mod=$_GET['mod'];
				if($mod==""){
					include "home.php";
				}elseif($mod=="informasi"){					
					include "tampilinfo.php";
				}elseif($mod=="tambahinfo"){					
					include "tambahinfo.php";
				}elseif($mod=="ubahinfo"){					
					include "ubahinfo.php";
				}elseif($mod=="ticker"){					
					include "tampilticker.php";
				}elseif($mod=="tambahticker"){					
					include "tambahticker.php";
				}elseif($mod=="ubahticker"){					
					include "ubahticker.php";
				}
			?>
        </div>
        <div id="footer">Copyright by Lokomedia <?php echo date('Y'); ?></div>
    </div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
    </script>
</body>
</html>