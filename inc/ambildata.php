<?php
include "config/config.php";
$query=mysql_query("SELECT * FROM inc");
		$row        = mysql_fetch_array($query);
		//Edit Judul + Link Judulnya + > Favicon <(Pake URLnya aja)
		$judul      = $row['judul'];
		$favicon    = $row['linkfavicon'];
		$linkjdl    = $row['linkjudul'];
		
		//Edit Menu + Linknya :D
		$menu1      = $row['menu1'];
		$linkmenu1  = $row['linkmenu1'];
		$menu2      = $row['menu2'];
		$linkmenu2  = $row['linkmenu2'];
		$menu3      = $row['menu3'];
		$linkmenu3  = $row['linkmenu3'];
		$menu4      = $row['menu4'];
		$linkmenu4  = $row['linkmenu4'];
?>
