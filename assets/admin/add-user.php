<?php session_start();

if ($_SESSION['level'] == 'Admin'){
	
	include "config/config.php";

	include "assets/admin/inc/header-admin.php";
	include "assets/admin/inc/nav-admin.php";
	
?>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-add-user' method='POST'>
	<pre>
<font size='5' style='font-weight:bold;'> .:: Add User ::. </font>


<font size='4' style='font-weight:;'>Nama Panjang    :  <input type='text' name='nama' style='border:none;border-bottom:1px solid #BFBFBF;background:transparent;width:30%;padding:2px;'></font>
<font size='4' style='font-weight:;'>Username        :  <input type='text' name='username' style='border:none;border-bottom:1px solid #BFBFBF;background:transparent;width:30%;padding:2px;'></font>
<font size='4' style='font-weight:;'>Password        :  <input type='password' name='password' style='border:none;border-bottom:1px solid #BFBFBF;background:transparent;width:30%;padding:2px;'></font>
<font size='4' style='font-weight:;'>Level           :  <input type='radio' name='level' value='Admin'> Admin | <input type='radio' name='level' value='Viewer'> User</font>

						<input type='submit' name='submit' value='Tambah !'>
	</pre>
	</form>
<?php
	
	include "assets/admin/inc/footer-admin.php";
}
?>
