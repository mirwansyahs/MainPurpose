<?php session_start();

if ($_SESSION['level'] == 'Admin' ){
	
	include "config/config.php";
	
	include "assets/admin/inc/header-admin.php";
	include "assets/admin/inc/nav-admin.php";
	
$q_user = mysql_query("SELECT * FROM user");

?>
<div class='tbl-artikel'>
	<h3 align='center'>[ <a href='<?php echo $alamatweb; ?>media.php?admin=add-user'>Tambah User</a> ]</h2>
</div>
	<h3>List User</h3>

<?php
	while ($r_user = mysql_fetch_array($q_user)) {
?>

		<table border='0' width='100%' style='border:none;border-bottom:1px solid #BFBFBF;'>
			<tr>
				<td align='right'>User</td>
				<td align='center' width='10px'>:</td>
				<td width='50%'><?php print $r_user['name']; ?></td>
				<td align='center' width='20%' rowspan='4' class='tbl-artikel'><a href='<?php echo $alamatweb; ?></a>media.php?admin=edit-user&user=<?php print $r_user['id']; ?>'>Edit</a> | <a href='../GOBLOGER/media.php?admin=delete-user&user=<?php print $r_user['id']; ?>'>Hapus</a></div></td>
			</tr>
			
		</table>

<?php
}

	include "assets/admin/inc/footer-admin.php";
}
?>
