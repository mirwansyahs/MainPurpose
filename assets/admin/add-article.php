<?php session_start();

if ($_SESSION['level'] == 'Admin' ){

include "config/config.php";

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";

?>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-add-article' method='POST'>
	<table border='0' width='100%'>
		<tr>
			<td align='center' style='border-bottom:1px solid #BFBFBF;'><h2>New Article</h2></td>
		</tr>
	</table>
		<textarea name='judulberita' placeholder='Judul Berita . . .' style='padding:10px;width:97.5%;resize:none;height:20px;font-weight:bold;font-size:15px;margin-top:20px;' ></textarea>
		<input type='text' name='tglberita' placeholder='Tanggal Berita . . .' value='<?php print date("D - d - M - Y"); ?>' style='border:none;padding:5px;width:98.3%;resize:none;height:20px;font-size:10px;margin-top:5px;' readonly='readonly'>
		<textarea name='isiberita' placeholder='Isi Berita . . .' style='padding:10px;width:97%;resize:none;height:500px;font-size:12px;margin-top:5px;' ></textarea>
		<input type='submit' name='submit' value='Tambah !' style='margin-top:10px;'>
	</table>
</form>
<?php

include "assets/admin/inc/footer-admin.php";
} 

elseif ($_SESSION['level'] == 'Viewer') {
	
	include "config/config.php";

include "assets/admin/inc/header-admin.php";
include "assets/admin/inc/nav-admin.php";

?>
<form action='<?php echo $alamatweb; ?>media.php?admin=proses-add-article' method='POST'>
	<table border='0' width='100%'>
		<tr>
			<td align='center' style='border-bottom:1px solid #BFBFBF;'><h2>New Article</h2></td>
		</tr>
	</table>
		<textarea disabled name='judulberita' placeholder='Judul Berita . . .' style='padding:10px;width:97.5%;resize:none;height:20px;font-weight:bold;font-size:15px;margin-top:20px;' ></textarea>
		<input disabled type='text' name='tglberita' placeholder='Tanggal Berita . . .' value='<?php print date("D - d - M - Y"); ?>' style='border:none;padding:5px;width:98.3%;resize:none;height:20px;font-size:10px;margin-top:5px;' readonly='readonly'>
		<textarea disabled name='isiberita' placeholder='Isi Berita . . .' style='padding:10px;width:97%;resize:none;height:500px;font-size:12px;margin-top:5px;' ></textarea>
		<input disabled type='submit' name='submit' value='Tambah !' style='margin-top:10px;'>
	</table>
</form>
<?php

include "assets/admin/inc/footer-admin.php";

}
?>
