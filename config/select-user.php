<?php

$query = mysql_query("SELECT * FROM user");
$row = mysql_fetch_array($query);
	$_SESSION['name']     = $row['name'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['level']    = $row['level'];
?>
