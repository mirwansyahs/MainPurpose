<?php

include "config.php";

?>
<form action='' method='POST'>
<pre>
ALamat Website : <input type='text' name='alamatweb'>
<input type='submit' name='submit' value='Submit !'>
</pre>
</form>

<?php

$alamatweb = $_POST['alamatweb'];

$query = mysql_query("UPDATE inc SET namawebsite = '$alamatweb'");
if ($query) {
	print "oke";
}else{
	print "gagal";
}
?>
