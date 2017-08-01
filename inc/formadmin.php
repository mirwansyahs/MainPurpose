<?php
	include "config/config.php";
	include "ambildata.php";
echo "
<!DOCTYPE html>
<form action='proses-update.php' method='post'>
<table>
	<tr>
		<td>Judul Website</td> 
		<td>:</td> 
		<td><input type='text' name='judul' placeholder='".$row['judul']."' value='".$row['judul']."'></td>
	</tr>
	<tr>
		<td>Link Website</td> 
		<td>:</td> 
		<td><input type='text' name='linkjudul' placeholder='".$row['linkjudul']."' value='".$row['linkjudul']."'></td>
	</tr>
	<tr>
		<td>Favicon Website</td> 
		<td>:</td> 
		<td><input type='text' name='linkfavicon' placeholder='".$row['linkfavicon']."' value='".$row['linkfavicon']."'></td>
	</tr>
	<tr>
		<td>Menu 1</td> 
		<td>:</td> 
		<td><input type='text' name='menu1' placeholder='".$row['menu1']."' value='".$row['menu1']."'></td>
	</tr>
	<tr>
		<td>Link Menu 1</td> 
		<td>:</td> 
		<td><input type='text' name='linkmenu1' placeholder='".$row['linkmenu1']."' value='".$linkmenu1."'></td>
	</tr>
	<tr>
		<td>Menu 2</td> 
		<td>:</td> 
		<td><input type='text' name='menu2' placeholder='".$row['menu2']."' value='".$menu2."'></td>
	</tr>
	<tr>
		<td>Link Menu 2</td> 
		<td>:</td> 
		<td><input type='text' name='linkmenu2' placeholder='".$row['linkmenu2']."' value='".$linkmenu2."'></td>
	</tr>
	<tr>
		<td>Menu 3</td> 
		<td>:</td> 
		<td><input type='text' name='menu3' placeholder='".$row['menu3']."' value='".$menu3."'></td>
	</tr>
	<tr>
		<td>Link Menu 3</td> 
		<td>:</td> 
		<td><input type='text' name='linkmenu3' placeholder='".$row['linkmenu3']."' value='".$linkmenu3."'></td>
	</tr>
	<tr>
		<td>Menu 4</td> 
		<td>:</td> 
		<td><input type='text' name='menu4' placeholder='".$row['menu4']."' value='".$menu4."'></td>
	</tr>
	<tr>
		<td>Link Menu 4</td> 
		<td>:</td> 
		<td><input type='text' name='linkmenu4' placeholder='".$row['linkmenu4']."' value='".$linkmenu4."'></td>
	</tr>
	<tr>
		<td></td> 
		<td></td> 
		<td><input type='submit' name='submit' value='submit'></td>
	</tr>
		";

?>

