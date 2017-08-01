<?php

include "config/config.php";

$iduser = $_POST['nomertogel'];

//Ini Query User Sesuai IDnya :D
$query = mysql_query("SELECT name, username, password, level FROM user WHERE id='$iduser'");
$row   = mysql_fetch_array($query);

?>
