<?php session_start();
	if ($_SESSION['level'] == 'Admin'){

include "config/config.php";

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";

$ambil = mysql_query("SELECT * FROM berita");


print "
<div class='tbl-artikel'>
<h3 align='center'>[ <a href='".$alamatweb."media.php?admin=add-article'>Tambah Article</a> ]</h3>
	<h3>Your Article !</h3>
	";
	
		while ($rows = mysql_fetch_array($ambil)) {
			echo "
		<table border='0'>
		
			<tr>
				<td><h2>".$rows['judul']."</h2></td>
				<td align='center' rowspan='2' valign='center'><a href='".$alamatweb."page.php?home=view-article&id=".htmlspecialchars($rows['idberita'])."'>View</a> | <a href='".$alamatweb."media.php?admin=edit-article&id=".$rows['idberita']."'>Edit</a> | <a href='".$alamatweb."media.php?admin=hapus-article&id=".$rows['idberita']."'>Delete</a></td>
			</tr>
			<tr>
				<td width='80%' style='border-collapse:collapse;'><p>".$rows['tglberita']."</p><p dir='ltr'>".substr($rows['isiberita'],0,80).". . . .</p></td>
				";
				print "<hr/>";	
			}
			
			print "
			
			</tr>
		</table>
</div>";


include "assets/admin/inc/footer-admin.php";

}

elseif ($_SESSION['level'] == 'Viewer') {
	
	include "config/config.php";

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";

$ambil = mysql_query("SELECT * FROM berita");


print "
<div class='tbl-artikel'>
<h3 align='center'>[ <a href='".$alamatweb."media.php?admin=add-article'>Tambah Article</a> ]</h3>
	<h3>Your Article !</h3>
	";
	
		while ($rows = mysql_fetch_array($ambil)) {
			echo "
		<table border='0'>
		
			<tr>
				<td><h2>".$rows['judul']."</h2></td>
				<td align='center' rowspan='2' valign='center'><a href='".$alamatweb."page.php?home=view-article&id=".$rows['idberita']."'>View</a> | <a href='media.php?admin=edit-article&id=".$rows['idberita']."'>Edit</a> | <a href='#media.php?admin=hapus-article'>Delete</a></td>
			</tr>
			<tr>
				<td width='80%' style='border-collapse:collapse;'><p>".$rows['tglberita']."</p><p dir='ltr'>".substr($rows['isiberita'],0,80).". . . .</p></td>
				";
				print "<hr/>";	
			}
			
			print "
			
			</tr>
		</table>
</div>";


include "assets/admin/inc/footer-admin.php";

}
?>
