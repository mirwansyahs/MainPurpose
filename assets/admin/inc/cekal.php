<?php session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	header('location:page.php?home=masuk&log=only');
}

else if ($_SESSION['level'] != "Admin") {
	header('page.php?acces-admin&pembatasan=hak-akses');
}

?>
