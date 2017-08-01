<?php session_start();

if ($_SESSION['level'] == 'Admin') {

include "config/config.php";

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";





$iduser   = (mysql_real_escape_string($_POST['nomertogel']));
$namalama = $_POST['namalama'];
$namabaru = $_POST['namabaru'];
$konfpass = $_POST['konfpass'];

if (md5($konfpass) == $_SESSION['password']) {
	
	$qnama = mysql_query("UPDATE user SET name='$namabaru' WHERE id='$iduser'");
	if ($qnama) {
		print "<script>alert('Success to Change Name')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-profile'>";
	}else{
		print "<script>alert('Failed to Change Name')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-profile'>";
	}
}else {
	print "<script>alert('Password Konfirmasi Anda Tidak Sama !')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=view-profile'>";
}

}
?>
