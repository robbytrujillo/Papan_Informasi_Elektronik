<?php
	include "config/koneksi.php";
	$id=$_GET['id'];
	$sql="select * from informasi where id='$id'";
	$query=mysql_query($sql) or die(mysql_error());
	$data=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Informasi</title>
<script type="text/javascript" src="../jquery-1.7.2.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	
	tinyMCE.init({
		mode : "none",
		theme : "advanced",
		plugins : "table,advhr,advimage,advlink,emotions,iespell,insertdatetime,zoom,flash,searchreplace,print,paste,directionality,noneditable,contextmenu",
		theme_advanced_buttons1_add_before : "save,newdocument,separator",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,insertdate,zoom,separator,forecolor,backcolor,liststyle",
		theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "emotions,iespell,flash,advhr,separator,print,separator,ltr,rtl,separator",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		plugin_insertdate_dateFormat : "%Y-%m-%d",
		plugin_insertdate_timeFormat : "%H:%M:%S",
		extended_valid_elements : "hr[class|width|size|noshade]",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		apply_source_formatting : true
	});

	function fileBrowserCallBack(field_name, url, type, win) {
		var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
		var enableAutoTypeSelection = true;
		
		var cType;
		tinymcpuk_field = field_name;
		tinymcpuk = win;
		
		switch (type) {
			case "image":
				cType = "Image";
				break;
			case "flash":
				cType = "Flash";
				break;
			case "file":
				cType = "File";
				break;
		}
		
		if (enableAutoTypeSelection && cType) {
			connector += "&Type=" + cType;
		}
		window.open(connector, "tinymcpuk", "modal,width=400,height=400");
	}
	
	
	function addMCE()
    {
        tinyMCE.execCommand('mceAddControl',true,'isi');				
    }
	//Delay agar mencegah error yang disebabkan koneksi internet yang lambat
	setTimeout('addMCE()',4000);	
</script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="aksiinfo.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="780" border="0" align="center">
    <tr>
      <td colspan="2"><strong>Tambah Informasi</strong></td>
    </tr>
    <tr>
      <td width="103">Judul <input name="kodeh" type="hidden" value="<?php echo $data['id'] ?>" /></td>
      <td width="387"><span id="sprytextfield1">
      <label>
        <input type="text" name="judul" id="judul" value="<?php echo $data['judul'] ?>" />
      </label>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    </tr>
    <tr>
      <td valign="top">Isi</td>
      <td><label>
        <textarea name="isi" id="isi" cols="45" rows="5" style="width: 100%; height:300px;"><?php echo $data['isi'] ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Lama durasi</td>
      <td><span id="sprytextfield2">
      <label>
        <input type="text" name="lama" id="lama" value="<?php echo $data['lama'] ?>" />
      </label>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Ubah" id="Ubah" value="Ubah" />
        <input type="reset" name="reset" id="reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {maxChars:200});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer");
//-->
</script>
</body>
</html>