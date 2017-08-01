<?php session_start();
	if ($_SESSION['level'] == 'Admin'){

include "config/config.php";

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";


$query=mysql_query("SELECT * FROM inc");
$row = mysql_fetch_array($query);
echo "
<div class='edit-header'>
<form action='".$alamatweb."media.php?admin=proses-edit' method='post'>
		<p class='header'>Judul</p>
		<p align='center'><input type='text' name='judul' placeholder='".$row['judul']."' value='".$row['judul']."' style='width:70%;'></p>

		<p Align='center'>Link Website</p>
		<p Align='center'><input type='text' name='linkjudul' placeholder='".$row['linkjudul']."' value='".$row['linkjudul']."' style='width:70%;'></p>
	
		<p Align='center'>Favicon Website</p> 
		<p Align='center'><input type='text' name='linkfavicon' placeholder='".$row['linkfavicon']."' value='".$row['linkfavicon']."' style='width:70%;'></p>
	
		<p Align='center'>Menu 1</p> 
		<p Align='center'><input type='text' name='menu1' placeholder='".$row['menu1']."' value='".$row['menu1']."' style='width:70%;'></p>

		<p Align='center'>Link Menu 1</p>
		<p Align='center'><input type='text' name='linkmenu1' placeholder='".$row['linkmenu1']."' value='".$linkmenu1."' style='width:70%;'></p>
	
		<p Align='center'>Menu 2</p> 
		<p Align='center'><input type='text' name='menu2' placeholder='".$row['menu2']."' value='".$menu2."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 2</p>
		<p Align='center'><input type='text' name='linkmenu2' placeholder='".$row['linkmenu2']."' value='".$linkmenu2."' style='width:70%;'></p>
	
		<p Align='center'>Menu 3</p>  
		<p Align='center'><input type='text' name='menu3' placeholder='".$row['menu3']."' value='".$menu3."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 3</p>
		<p Align='center'><input type='text' name='linkmenu3' placeholder='".$row['linkmenu3']."' value='".$linkmenu3."' style='width:70%;'></p>
	
		<p Align='center'>Menu 4</p> 
		<p Align='center'><input type='text' name='menu4' placeholder='".$row['menu4']."' value='".$menu4."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 4</p>
		<p Align='center'><input type='text' name='linkmenu4' placeholder='".$row['linkmenu4']."' value='".$linkmenu4."' style='width:70%;'></p>
	
		 </div>
		<p Align='center'><input class='button' type='submit' name='submit' value='Submit'></p>

";


include "assets/admin/inc/footer-admin.php";
}

elseif ($_SESSION['level'] == 'Viewer') {
	
	include "config/config.php";

// Ini Indexnya Ambil Data
include  "assets/admin/inc/header-admin.php";
include  "assets/admin/inc/nav-admin.php";


$query=mysql_query("SELECT * FROM inc");
$row = mysql_fetch_array($query);
echo "
<div class='edit-header'>
<form action='".$alamatweb."media.php?admin=proses-edit' method='post'>
		<p class='header'>Judul</p>
		<p align='center'><input disabled type='text' name='judul' placeholder='".$row['judul']."' value='".$row['judul']."' style='width:70%;'></p>

		<p Align='center'>Link Website</p>
		<p Align='center'><input disabled type='text' name='linkjudul' placeholder='".$row['linkjudul']."' value='".$row['linkjudul']."' style='width:70%;'></p>
	
		<p Align='center'>Favicon Website</p> 
		<p Align='center'><input disabled type='text' name='linkfavicon' placeholder='".$row['linkfavicon']."' value='".$row['linkfavicon']."' style='width:70%;'></p>
	
		<p Align='center'>Menu 1</p> 
		<p Align='center'><input disabled type='text' name='menu1' placeholder='".$row['menu1']."' value='".$row['menu1']."' style='width:70%;'></p>

		<p Align='center'>Link Menu 1</p>
		<p Align='center'><input disabled type='text' name='linkmenu1' placeholder='".$row['linkmenu1']."' value='".$linkmenu1."' style='width:70%;'></p>
	
		<p Align='center'>Menu 2</p> 
		<p Align='center'><input disabled type='text' name='menu2' placeholder='".$row['menu2']."' value='".$menu2."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 2</p>
		<p Align='center'><input disabled type='text' name='linkmenu2' placeholder='".$row['linkmenu2']."' value='".$linkmenu2."' style='width:70%;'></p>
	
		<p Align='center'>Menu 3</p>  
		<p Align='center'><input disabled type='text' name='menu3' placeholder='".$row['menu3']."' value='".$menu3."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 3</p>
		<p Align='center'><input disabled type='text' name='linkmenu3' placeholder='".$row['linkmenu3']."' value='".$linkmenu3."' style='width:70%;'></p>
	
		<p Align='center'>Menu 4</p> 
		<p Align='center'><input disabled type='text' name='menu4' placeholder='".$row['menu4']."' value='".$menu4."' style='width:70%;'></p>
	
		<p Align='center'>Link Menu 4</p>
		<p Align='center'><input disabled type='text' name='linkmenu4' placeholder='".$row['linkmenu4']."' value='".$linkmenu4."' style='width:70%;'></p>
	
		 </div>
		<p Align='center'><input disabled class='button' type='submit' name='submit' value='Submit'></p>

";


include "assets/admin/inc/footer-admin.php";
}
?>
