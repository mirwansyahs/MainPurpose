<?php 
include "config/config.php";
$query = mysql_query("SELECT * FROM inc");
$row = mysql_fetch_array($query);

include "inc/header.php";
echo"
<div id='form'>
			<h3 align='center'>LUPA KATASANDI</h3>
			<p> Silahkan Hubungi Admin untuk Meminta Password <b>MAIN PURPOSE</b> Melalui Contact Berikut :</p><br/>

		<table border='1'>
			<tr>
				<th colspan='3'><b>Contact Admin</b></th>
			</tr>
			<tr>
				<td align='left'>Facebook</td>
				<td>:</td>
				<td align='left'><a href='https://www.facebook.com/teguh99910'>Mohammad Irwansyah S</a></td>
			</tr>
			<tr>
				<td align='left'>Email</td>
				<td>:</td>
				<td align='left'><a href='mailto:mirwansyah1933@gmail.com'>Mirwansyah1933@gmail.com</a></td>
			</tr>
		</table>
			<br/>
			<p align='center'>Copyright &copy; 2017 - <a href='".$alamatweb."page.php?home'>Main Purpose</a> <br/>
		Powered By <a href='https://www.facebook.com/teguh99910'>Mohammad Irwansyah S</a></p>
";
?>
