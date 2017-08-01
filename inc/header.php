<?php
	include "config/config.php";
	include "ambildata.php";
	include "config/select-user.php";
echo "	
<!DOCTYPE html>
<head>
<title>".$judul."</title>
<link rel='shortcut icon' href='".$favicon."'/>
<link rel='stylesheet' href='".$alamatweb."inc/css/header.css' type='text/css'>
</head>
<body>
<div id='wrapper'>
	<div class='judul'>
		<p><a href='".$linkjdl."'><span class='khusus' style='color:#FF0000;'>M</span>AIN<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='khusus' style='color:#00FFFF'>P</span>URPOSE</a></p>
	</div>
	
		<div class='nav'>
			<ol>
			";
				$row = mysql_fetch_array($query);
				$_SESSION['name']     == $row['name'];
				$_SESSION['username'] == $row['username'];
				$_SESSION['level']    == $row['level'];
				
				if ( $_SESSION['level'] == 'Admin' ) {
					print "<li><a href='#'>Hello ".$_SESSION['name']."</a></li>";
				}
				else if ( $_SESSION['level'] == 'User' ) {
					print "<li><a href='#'>Hello ".$_SESSION['name']."</a></li>";
				}
			
			print "
				<li><a href='".$linkmenu2."'>".$menu2."</a></li>
				<li><a href='".$linkmenu3."'>".$menu3."</a></li>
				<li><a href='".$linkmenu4."'>".$menu4."</a></li>
			</ol>
		</div>
</div>
";

?>
