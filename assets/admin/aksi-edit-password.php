<?php


include "config/config.php";

$iduser = (mysql_real_escape_string($_POST['nomertogel']));
$pwlama = $_POST['pwlama'];
$pwbaru = $_POST['pwbaru'];
$konfpw = $_POST['konfpw'];

$query = mysql_query("SELECT password FROM user WHERE id='$iduser'");

$row = mysql_fetch_array($query);

//Cek Apakah Password Lama sama dengan password di Database dengan MD5
if ($row['password'] == md5($pwlama) ) {
	
//Cek Apakah Password Baru sama dengan password Konfirmasi User
	if ($pwbaru == $konfpw) {
		
		$passbaru = md5($pwbaru);
		$ganti = mysql_query("UPDATE user SET password='$passbaru' WHERE id='$iduser'");
		
		//Cek apakah Password telah Terganti atau belum
		if ($ganti) {
			print "<script>alert('Password Sudah Diganti')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin'>";
		}else{
			print "<script>alert('Password Gagal Diganti Silahkan Check Kembali')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin'>";
		}
		
		
	}else{
		echo "<script>alert('Password Konfirmasi yang anda masukan Salah !')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=change-password'>";
	}
}else{
	echo "<script>alert('Anda Salah Memasukan Password Lama Anda !')</script>
				<meta http-equiv='refresh' content='0;url=".$alamatweb."media.php?admin=change-password'>";
}

	
?>
