<?php session_start();
if ($_SESSION['level'] == 'Admin'){
	
include "config/config.php";
include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";

$iduser = (mysql_real_escape_string($_GET['user']));

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'") or die (mysql_error());
	$r_nama = mysql_fetch_array($q_nama);
	

echo "
		<img src='".$alamatweb."img/people.png'>
	<div class='profile'>
	<form action='".$alamatweb."media.php?admin=proses-edit-password' method='POST'>
	<input type='hidden' name='nomertogel' value='".$r_nama['id']."'>
		<table border='1' class='profile'>
			<tr>
				<th colspan='3'>MY PROFILE</th>
				
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Password Saat Ini</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'><input type='password' name='pwlama' class='password' placeholder='********' required='required'></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Password Baru</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'><input type='password' name='pwbaru' class='password' placeholder='********' required='required'></td> 
			</tr>
			<tr align='center'>
				<td width='150px' align='right'>Konfirmasi Pw</td>
				<td width='20px'>:</td>
				<td width='280px' align='left'><input type='password' name='konfpw' class='password' placeholder='********' required='required'></td> 
			</tr>
		</table>
		<input type='submit' name='submit' value='Edit !' class='button'>
		</form>
	</div>
		
";
}else{
	include "login.php";
	print "<script>alert('Silahkan Login Terlebih Dahulu')</script>";
}
?>
