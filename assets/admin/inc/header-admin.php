<?php
	include "ambildata.php";
	$iduser = $_SESSION['id'];

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'");
	$r_nama = mysql_fetch_array($q_nama);
	
echo "	
<!DOCTYPE html>
<head>
<title>Kontrol Panel</title>
<link rel='shortcut icon' href='".$favicon."'/>
<link rel='stylesheet' href='".$alamatweb."assets/admin/inc/css/header-admin.css' type='text/css'>
<link rel='stylesheet' href='".$alamatweb."assets/admin/inc/css/nav-admin.css' type='text/css'>
</head>
<body>

<div id='wrapper'>
	<div id='header'>
		<div class='judul'>
			<p><a href='".$alamatweb."page.php?home'><span class='khusus' style='color:#EE82EE'>K</span>ONTROL<br/>
			&nbsp;&nbsp;&nbsp;<span class='khusus' style='color:#20B2AA'>P</span>ANEL</a></p>
		</div>
		<div class='nav'>
			<ol>
				<li><a href='".$alamatweb."page.php?home=keluar'>LOGOUT</a></li>
				<li><a href='".$alamatweb."media.php?admin=view-profile'> Hallo, ".$r_nama['name']." !</a></li>
			</ol>
		</div>
	</div>

";

?>
