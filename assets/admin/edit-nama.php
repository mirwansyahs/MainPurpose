<?php session_start();

if ($_SESSION['level'] == 'Admin') {

include "config/config.php";

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";

$iduser = (mysql_real_escape_string($_SESSION['id']));

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'");
	$r_nama = mysql_fetch_array($q_nama);
	
?>

<legend>Ganti Nama</legend>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-edit-nama' method='POST'>
<input type='hidden' name='nomertogel' value='<?php print $_SESSION['id']; ?>'>
<pre><font size='4'>
Nama Sekarang            : <input type='text' name='namalama' value='<?php print $r_nama['name']; ?>' readonly='readonly' style='border:none;border-bottom:1px solid #BFBFBF;font-size:17px;padding:5px;text-align:left;width:30%;'>
Nama Baru                : <input type='text' name='namabaru' placeholder='Nama Baru . . .' style='border:none;border-bottom:1px solid #BFBFBF;height:18px;font-size:15px;padding:5px;text-align:left;width:30%;'>
Konfirmasi Password Anda : <input type='password' name='konfpass' placeholder='*********' style='border:none;border-bottom:1px solid #BFBFBF;padding:5px;text-align:center;width:30%;' required='required'>
   
 <input type='submit' name='submit' value='Edit !'>
</font>
</pre>
</form>
<?php

include "assets/admin/inc/footer-admin.php";
}

elseif ($_SESSION['level'] == 'Viewer') {
	
	include "config/config.php";

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";

$iduser = $_SESSION['id'];

	$q_nama = mysql_query("SELECT * FROM user WHERE id='$iduser'");
	$r_nama = mysql_fetch_array($q_nama);
	
?>

<legend>Ganti Nama</legend>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-edit-nama' method='POST'>
<input type='hidden' name='nomertogel' value='<?php print $_SESSION['id']; ?>'>
<pre><font size='4'>
Nama Sekarang            : <input disabled type='text' name='namalama' value='<?php print $r_nama['name']; ?>' readonly='readonly' style='border:none;border-bottom:1px solid #BFBFBF;font-size:17px;padding:5px;text-align:left;width:30%;'>
Nama Baru                : <input disabled type='text' name='namabaru' placeholder='Nama Baru . . .' style='border:none;border-bottom:1px solid #BFBFBF;height:18px;font-size:15px;padding:5px;text-align:left;width:30%;'>
Konfirmasi Password Anda : <input disabled type='password' name='konfpass' placeholder='*********' style='border:none;border-bottom:1px solid #BFBFBF;padding:5px;text-align:center;width:30%;' required='required'>
   
 <input disabled type='submit' name='submit' value='Edit !'>
</font>
</pre>
</form>
<?php

include "assets/admin/inc/footer-admin.php";
}
	
?>
