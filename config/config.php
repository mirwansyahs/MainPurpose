<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$host="localhost";
$user="root";
$password="irwansyah123";
$database="GOBLOGER";

$alamatweb = "http://localhost/";

$koneksi= mysql_connect($host,$user,$password);
$pilih = mysql_select_db($database);

if ($koneksi) {
	//echo "Berhasil";
}else{
echo "Gagal";
}

/**
 *  $host     ="mysql.hostinger.com";
	$user     ="u198156314_irwan";
	$password ="irwan123456789";
	$database ="u198156314_irwan";
*/ 
?>
