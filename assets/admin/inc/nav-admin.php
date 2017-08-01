<?php

if ($_SESSION['level'] == 'Admin' ) {
?>
	<div id='nav'>
		<div class='people'>
			<img src='<?php echo $alamatweb; ?>img/people.png'>
		</div>
		<div class='menu'>
			<ul>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin'>Dashboard</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=view-user'>User</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=view-profile'>Profile</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=edit-header'>Header</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=article'>Artikel</a></li>
				<li><a href='<?php echo $alamatweb; ?>page.php?home=keluar'>Logout</a></li>
			</ul>
		</div>
	</div>

	<div id='daftar-isi'>
<?php
}
elseif ($_SESSION['level'] == 'Viewer' ) {
?>
	<div id='nav'>
		<div class='people'>
			<img src='<?php echo $alamatweb; ?>img/people.png'>
		</div>
		<div class='menu'>
			<ul>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin'>Dashboard</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=view-profile'>Profile</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=edit-header'>Header</a></li>
				<li><a href='<?php echo $alamatweb; ?>media.php?admin=article'>Artikel</a></li>
				<li><a href='<?php echo $alamatweb; ?>page.php?home=keluar'>Logout</a></li>
			</ul>
		</div>
	</div>

	<div id='daftar-isi'>
<?php
}
?>
