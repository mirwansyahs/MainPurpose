<?php

include "config/config.php";

$idberita    = (mysql_real_escape_string($_POST['id']));
$judulberita = $_POST['judulberita'];
$tglberita   = $_POST['tglberita'];
$isiberita   = $_POST['isiberita'];

$edit = mysql_query("UPDATE berita SET judul='$judulberita', tglberita='$tglberita', isiberita='$isiberita' WHERE idberita='$idberita'")or die (mysql_error());

if ($edit) {
		print "<script>alert('Editing Sukses')</script>";
		print "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=edit-article&id=".$idberita."'>";
	}else{
		echo "<script>alert('Editing Gagal')</script>";
		echo "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin'>";
}
?>
