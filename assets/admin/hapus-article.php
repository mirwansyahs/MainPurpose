<?php

include "config/config.php";

$idberita = (mysql_real_escape_string($_GET['id']));

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";


$delete = mysql_query("DELETE FROM berita WHERE idberita='$idberita'");

if ($delete) {
	echo "<script>alert('Penghapusan Artikel / Berita Berhasil')</script>
		<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=article'>";
}else{
	echo "<script>alert('Penghapusan Artikel / Berita Gagal')</script>
		<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=article'>";
}
?>
