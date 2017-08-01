<?php
include "config/config.php";
include "inc/header.php";
$query=mysql_query("SELECT * FROM berita");
$query_1=mysql_query("SELECT * FROM inc");
?>

<div id="up-wrapper">
	<div class="navigasi">
		
		<p class='new-judul'><a href='/'><span class='new-khusus' style='color:#FF0000'>M</span>AIN<br/>
	&nbsp;&nbsp;&nbsp;<span class='new-khusus' style='color:#00FFFF'>P</span>URPOSE</a></p>
		<div id="1">
			<a href="#"><img src="<?php echo $alamatweb; ?>img/iron.png"/></a>
		</div>
	</div>
</div>

<div id="menu-lagi">
	<div class="coba">
		<ol>
			<li><a href="/" style="background:#FFF;color:#000;text-shadow:0px 10px 10px;">Home</a></li>
			<li><a href="#">Sub Menu</a></li>
			<li><a href="#">Sub Menu</a></li>
			<li><a href="#">Sub Menu</a></li>
			<li><a href="#">Sub Menu</a></li>
		</ol>
	</div>

</div>

<div id="back-wrapper">

<div class="isi-kiri">
	<p align="left">
	</p><br/>
	<h2 style="text-align:center;border-bottom:2px solid #000;border-top:2px solid #000;"> .:: Artikel ::. </h2><br/>
	<table border='0' >
		
<?php 
	while ($row = mysql_fetch_array($query)) {
print "

	<tr>
		<td style='width:100%;'><h3><u><a href='".$alamatweb."page.php?home=view-article&id=".$row['idberita']."'>".$row['judul']."</a></u></h3></td>
	</tr>
	<tr>
		<td style='width:100%;'><p>".substr($row['isiberita'],0,80)."</p></td>
	</tr>
	";
}
?>
	
	</table>
</div>

<?php 
include "inc/sidebar.php";
?>

</div>
<?php
include "inc/footer.php";
?>
