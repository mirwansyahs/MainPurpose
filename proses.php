<?php session_start();
include "".$alamatweb."config/config.php";

$username = $_POST['username'];
$username = htmlspecialchars($username);
$password = $_POST['password'];
$password = htmlspecialchars($password);
$password = md5($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$query=mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
$data=mysql_num_rows($query);
if ($data)  
	{
		$row = mysql_fetch_array($query);
		
		$_SESSION['id']       = $row['id'];
		$_SESSION['name']     = $row['name'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['level']    = $row['level'];
	
	if ($_SESSION['level'] == "Admin"){
	
		header ("location:media.php?admin");
	}elseif ($_SESSION['level'] == "Viewer"){	
	
		header ("location:media.php?admin");
	}else{
	echo "anda bukan admin / user";
	}
}

?>
