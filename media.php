<?php 
//Ini Link Untuk Halaman ADMINISTRATOR
// Update 29 Okotber 2019
if ($_GET[admin] == ""){
	include "assets/admin/index.php";
}

elseif ($_GET[admin] == 'view-user'        ){
	include "assets/admin/view-user.php";
}

elseif ($_GET[admin] == 'add-user' ){
	include "assets/admin/add-user.php";
}

elseif ($_GET[admin] == 'proses-add-user' ){
	include "assets/admin/aksi-tambah-user.php";
}

elseif ($_GET[admin] == 'edit-user' ){
	include "assets/admin/edit-user.php";
}

elseif ($_GET[admin] == 'edit-nama-user' ){
	include "assets/admin/edit-nama-user.php";
}

elseif ($_GET[admin] == 'change-password-user' ){
	include "assets/admin/edit-password-user.php";
}

elseif ($_GET[admin] == 'delete-user' ){
	include "assets/admin/hapus-user.php";
}

elseif ($_GET[admin] == 'proses-edit-user' ){
	include "assets/admin/aksi-edit-user.php";
}

elseif ($_GET[admin] == 'view-profile'        ){
	include "assets/admin/view-profile.php";
}

elseif ($_GET[admin] == 'edit-nama' ){
	include "assets/admin/edit-nama.php";
}

elseif ($_GET[admin] == 'proses-edit-nama' ){
	include "assets/admin/aksi-edit-nama.php";
}

elseif ($_GET[admin] == 'proses-edit-password' ){
	include "assets/admin/aksi-edit-password.php";
}

elseif ($_GET[admin] == 'proses-edit' ){
	include "assets/admin/inc/proses-update.php";
}

elseif ($_GET[admin] == 'edit-header' ){
	include "assets/admin/edit-header.php";
}

elseif ($_GET[admin] == 'article'     ){
	include "assets/admin/article.php";
}

elseif ($_GET[admin] == 'add-article' ){
	include "assets/admin/add-article.php";
}

elseif ($_GET[admin] == 'proses-add-article' ){
	include "assets/admin/aksi-tambah-article.php";
}

elseif ($_GET[admin] == 'edit-article' ){
	include "assets/admin/edit-article.php";
}

elseif ($_GET[admin] == 'hapus-article' ){
	include "assets/admin/hapus-article.php";
}

elseif ($_GET[admin] == 'proses-edit-article' ){
	include "assets/admin/aksi-edit-article.php";
}

elseif ($_GET[admin] == 'change-password' ){
	include "assets/admin/edit-password.php";
}



?>
