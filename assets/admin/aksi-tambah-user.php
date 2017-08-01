<?php

include "config/config.php";

$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];

$pwnew = password_hash(($password));

$q_input = mysql_query("INSERT INTO user (name, username, password, level) VALUES ('$nama', '$username', '$pwnew', '$level')");

if ($q_input) {
	echo "<script>alert('Penambahan User Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-user'>";
}else{
	echo "<script>alert('Penambahan User Gagal')</script>";
	echo "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-user'>";
}
?>
