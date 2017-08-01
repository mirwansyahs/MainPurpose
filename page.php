<?php


//Ini Link Untuk Halaman HOME
if     ($_GET[home] == ''             ){
	include "index.php";
}
elseif ($_GET[home] == 'disclaimer'   ){
	include "disclaimer.php";
}
elseif ($_GET[home] == 'contact'      ){
	include "contact.php";
}
elseif ($_GET[home] == 'view-article' ){
	include "view-article.php";
}

//Ini Logout

elseif ($_GET[home] == 'keluar' ){
	include "logout.php";
}
elseif ($_GET[home] == 'masuk' ){
	include "login.php";
}

?>
