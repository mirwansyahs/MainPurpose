<?php session_start();

if ($_SESSION['level'] == 'Admin' ) {
	include "config/config.php";
	include "assets/admin/inc/header-admin.php";
	include "assets/admin/inc/nav-admin.php";
	
	$idberita = htmlspecialchars($_GET['id']);
	$query = mysql_query("SELECT * FROM berita WHERE idberita='$idberita'");
	$rows = mysql_fetch_array($query);
	
?>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-edit-article' method='POST'>
	<input type='hidden' name='id' value='<?php print $idberita; ?>'>
<table border='1' width='100%' style='border-collapse:collapse;'>
	<tr>
		<td>Judul</td>
		<td><textarea name='judulberita' style='padding:10px;width:97.5%;height:17px;resize:none;font-size:15px;font-weight:bold;'><?php print $rows['judul']; ?></textarea></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		
		<td><input type='text' name='tglberita' value='<?php print date("D - d - M - Y"); ?>' readonly='readonly' style='border:none;'></td>
	</tr>
	<tr>
		<td>Isi Berita</td>
		<td width='100%'><textarea name='isiberita' style='padding:10px;width:97.5%;height:300px;resize:none;'><?php print $rows['isiberita']; ?></textarea></td>
	</tr>
	<tr>
		<td><input type='submit' name='submit' value='Edit !'></td>
	</tr>
</table>
</form>
<?php
include "assets/admin/inc/footer-admin.php";
}

elseif ($_SESSION['level'] == 'Viewer') {
	
		include "config/config.php";
	include "assets/admin/inc/header-admin.php";
	include "assets/admin/inc/nav-admin.php";
	
	$idberita = $_GET['id'];
	$query = mysql_query("SELECT * FROM berita WHERE idberita='$idberita'");
	$rows = mysql_fetch_array($query);
	
?>
<form action='../GOBLOGER/media.php?admin=proses-edit-article' method='POST'>
	<input type='hidden' name='id' value='<?php print $idberita; ?>'>
<table border='1' width='100%' style='border-collapse:collapse;'>
	<tr>
		<td>Judul</td>
		<td><textarea name='judulberita' style='padding:10px;width:97.5%;height:17px;resize:none;font-size:15px;font-weight:bold;' disabled><?php print $rows['judul']; ?></textarea></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		
		<td><input type='text' name='tglberita' value='<?php print date("D - d - M - Y"); ?>'  disabled style='border:none;'></td>
	</tr>
	<tr>
		<td>Isi Berita</td>
		<td width='100%'><textarea name='isiberita' style='padding:10px;width:97.5%;height:300px;resize:none;' disabled><?php print $rows['isiberita']; ?></textarea></td>
	</tr>
	<tr>
		<td><input type='submit' name='submit' value='Edit !'  disabled></td>
	</tr>
</table>
</form>
	
<?php
include "assets/admin/inc/footer-admin.php";
}
?>
