<?php session_start();

	if ($_SESSION['level'] == 'Admin'){

include "config/config.php";

$iduser = (mysql_real_escape_string($_SESSION['id']));

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'");
	$r_nama = mysql_fetch_array($q_nama);
	

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";
echo "
		<img src='".$alamatweb."img/people.png'>
	<div class='profile'>
		<table border='1' class='profile'>
			<tr>
				<th colspan='3'>MY PROFILE</td>
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Name</td>
				<td width='20px'>:</td>
			<td width='280px' align='left'>".$r_nama['name']." | <a href='".$alamatweb."media.php?admin=edit-nama'>Ganti</a></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Password</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'><a href='".$alamatweb."media.php?admin=change-password'>Change Password</a></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Level</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'>".$r_nama['level']."</td> 
			</tr>
		</table>
	</div>
		
";
include "assets/admin/inc/footer-admin.php";
}

elseif ($_SESSION['level'] == 'Viewer') {
	
	include "config/config.php";

$iduser = $_SESSION['id'];

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'");
	$r_nama = mysql_fetch_array($q_nama);
	

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";
echo "
		<img src='".$alamatweb."img/people.png'>
	<div class='profile'>
		<table border='1' class='profile'>
			<tr>
				<th colspan='3'>MY PROFILE</td>
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Name</td>
				<td width='20px'>:</td>
			<td width='280px' align='left'>".$r_nama['name']." | <a href='".$alamatweb."media.php?admin=edit-nama'>Ganti</a></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Password</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'><a href='".$alamatweb."media.php?admin=change-password'>Change Password</a></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Level</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'>".$r_nama['level']."</td> 
			</tr>
		</table>
	</div>
		
";
include "assets/admin/inc/footer-admin.php";
}
?>
