<?php session_start();

if ($_SESSION['level'] == 'Admin' ) {

	include "config/config.php";
	
	include "assets/admin/inc/header-admin.php";
	include "assets/admin/inc/nav-admin.php";
	
	$iduser = (mysql_real_escape_string($_GET['user']));
	$q_user_id = mysql_query("SELECT id, name, username, password, level FROM user WHERE id='$iduser'") or die (mysql_error());
	$r_user_id = mysql_fetch_array($q_user_id);
	
?>
	<div class='profile'>
		<table class='profile'>
			<tr>
				<th colspan='3'>User <?php print $r_user_id['id']; ?></td>
			</tr>
			<tr>
				<td align='right' width='150px'>Nama</td>
				<td align='center' width='6%'>:</td>
				<td align='left' width='60%'><?php print $r_user_id['name']; ?> | <a href='media.php?admin=edit-nama-user&user=<?php print $r_user_id['id']; ?>'>Ganti</a></td>
			</tr>
			<tr>
				<td align='right' width='35%'>Username</td>
				<td align='center' width='10%'>:</td>
				<td align='left' width='50%'><?php print $r_user_id['username']; ?></td>
			</tr>
			<tr>
				<td align='right' width='35%'>Password</td>
				<td align='center' width='6%'>:</td>
				<td align='left' width='50%'><a href='media.php?admin=change-password-user&user=<?php print $r_user_id['id']; ?>'>Ganti Password</a></td>
			</tr>
			<tr>
				<td align='right' width='35%'>Level</td>
				<td align='center' width='6%'>:</td>
				<td align='left' width='50%'><?php print $r_user_id['level']; ?></td>
			</tr>
<?php
}
?>
