<?php

include "config/config.php";

$judulberita = $_POST['judulberita'];
$tglberita   = $_POST['tglberita'];
$isiberita   = $_POST['isiberita'];

$tambah_data = mysql_query("INSERT INTO berita (judul, tglberita, isiberita) VALUES ('$judulberita', '$tglberita', '$isiberita')");

if ($tambah_data) {
	echo "<script>alert('Penambahan Berita Berhasil')</script>
		<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=add-article'>";
}else{
	echo "<script>alert('Penambahan Berita Gagal Silahkan Periksa Kembali !')</script>
		<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=add-article'>";
}

?>
