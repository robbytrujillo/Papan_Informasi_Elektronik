<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Informasi</title>
    <script src="tinymcpuk/tiny_mce.js"></script>
    <script language="javascript" type="text/javascript">
        tinyMCE.init({
            mode: "none",
            theme: "advanced",
            plugins: "table, advhr, advimage, advlink, emotions, iespell, 
            paste, directionalty, noneditable, contextmenu", theme_advanced_buttons1_add_before : "save, newdocument, separator",
            theme_advanced_buttons1_add: "fontselect, fontsizeselect",
            theme_advanced_buttons2_add: "separator, insertdate,zoom, separator, forecolor, backcolor, liststyle",
            theme_advanced_buttons2_add_before: "cut, copy,paste, pastetext, pasteword, separator, search, replace, separator",
            theme_advanced_buttons3_add_before: "tablecontrols, separator",
            theme_advanced_buttons3_add: "emotions,iespell,flash,advhr,separator,print,separator,ltr,rtl,separator",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            plugin_insertdate_dateFormat: "%Y-%m-%d",
            plugin_insertdate_timeFormat: "%H:%M:%S",
            extended_valid_elements: "hr[class|width|size|noshade]",
            file_browser_callback: "fileBrowserCallBack",
            paste_use_dialog: false,
            theme_advanced_resizeing: true,
            theme_advanced_resize_horizontal: false,
            theme_advanced_link_targets: "_something=My somthing; 
            _something2=My somthing2; _something3=My somthing3; ",
            apply_source_formatting : true});
            
            
            
            
            


        ))
    </script>
</head>

<body>
    <form action="aksiinfo.php" method="post" enctype="multipart/from-data" name="form1" id="form1">
        <table border="0" align="center">
            <tr>
                <td colspan="2"><strong>Tambah Informasi</strong></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul" /></td>
            </tr>
            <tr>
                <td valign="top">Isi</td>
                <td><textarea name="isi" id="isi" cols="45" rows="5" style="width: 100%; height: 300px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Lama Durasi</td>
                <td><input type="text" name="lama" id="lama" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Simpan" id="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>