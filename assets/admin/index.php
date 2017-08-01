<?php session_start();


//Ini Jika Sesi Berlevel ADMIN
if ($_SESSION['level'] == 'Admin'){

	include  "config/config.php";

	include  "assets/admin/inc/header-admin.php";
	include  "assets/admin/inc/nav-admin.php";

	echo "Welcome To Dashboard Admin Panel :D";

	include  "assets/admin/inc/footer-admin.php";

}


//Ini Jika Sesi Berlevel Viewer
elseif ($_SESSION['level'] == 'Viewer') {
	
	include  "config/config.php";

	include  "assets/admin/inc/header-admin.php";
	include  "assets/admin/inc/nav-admin.php";
	
	echo "Welcome To Dashboard Admin Panel :D";
	
	include  "assets/admin/inc/footer-admin.php";

}



?>
