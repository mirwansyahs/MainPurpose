<?php
	include "".$alamatweb."config/config.php";
	include  "".$alamatweb."assets/admin/edit-header.php";
	
	$judul     = $_POST['judul'];
	$favicon   = $_POST['linkfavicon'];
	$linkjdl   = $_POST['linkjudul'];
	$menu1     = $_POST['menu1'];
	$linkmenu1 = $_POST['linkmenu1'];
	$menu2     = $_POST['menu2'];
	$linkmenu2 = $_POST['linkmenu2'];
	$menu3     = $_POST['menu3'];
	$linkmenu3 = $_POST['linkmenu3'];
	$menu4     = $_POST['menu4'];
	$linkmenu4 = $_POST['linkmenu4'];
	
	$query = mysql_query("UPDATE inc SET judul = '$judul', linkfavicon = '$favicon', linkjudul = '$linkjdl', menu1 = '$menu1', linkmenu1 = '$linkmenu1', menu2 = '$menu2', linkmenu2 = '$linkmenu2', menu3 = '$menu3', linkmenu3 = '$linkmenu3', menu4 = '$menu4', linkmenu4 = '$linkmenu4'") or die (mysql_error());
	
	if ($query) {
		
		echo "<script>alert('Editing Sukses')</script>";
		echo "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=edit-header'>";
	}else{
		echo "<script>alert('Editing Gagal')</script>";
		echo "<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin'>";
	}
?>
