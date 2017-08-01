<?php 
include "".$alamatweb."config/config.php";
include "".$alamatweb."inc/header.php";

$idberita = (mysql_real_escape_string($_GET['id']));
$query = mysql_query("SELECT * FROM berita WHERE idberita='$idberita'") or die (mysql_error());
$row = mysql_fetch_array($query);
?>
<div id="back-wrapper">

<div class="isi-kiri">

<table border='0' >
	<tr>
		<td style='width:100%;'><h3><u><a href='<?php echo $alamatweb; ?>page.php?home=view-article&id=<?php echo $idberita; ?>'><?php print $row['judul']; ?></a></u></h3></td>
	</tr>
	<tr>
		<td style='width:100%;'><textarea readonly='readonly'><?php print $row['isiberita']; ?></textarea></td>
	</tr>
</table>
</div>

<?php
include "".$alamatweb."inc/sidebar.php";

print "</div>";

include "".$alamatweb."inc/footer.php";
?>
