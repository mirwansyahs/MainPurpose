<?php

include "config/config.php";

$iduser = (mysql_real_escape_string($_GET['user']));

$q_hapus = mysql_query("DELETE FROM user WHERE id='$iduser'");

if ($q_hapus) {
	print "<script>alert('Penghapusan User Berhasil')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-user'>";
}else{
	print "<script>alert('Penghapusan User Gagal')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-user'>";
}

?>
