<?php session_start();
include "".$alamatweb."config/config.php";
if (empty($_SESSION['username'])){
$query = mysql_query("SELECT * FROM inc");
$row = mysql_fetch_array($query);
echo "
<!DOCTYPE html>
<head>
<link rel='shortcut icon' href='".$row['linkfavicon']."'/>
<title>PURPOSE</title>
<style rel='stylesheet' type='text/css'>
body {
	padding:0;
	margin:0;
	font-size:14px;
}
#login {
	padding:10px;
	box-shadow:20px 20px 5px;
	border:1px solid #C0C0C0;
	border-radius:3px;
	border-bottom-left-radius:20%;
	border-top-right-radius:20%;
	width:23%;
	height:450px;
	float:none;
	margin-left:500px;
	margin-top:60px;	
}
#login .y {
	text-align:center;
}
#login .icon img {
	width:35%;
	float:none;
	margin-left:0px;
	margin-top:15px;
	box-shadow:0px 0px 10px 0px;
	border-radius:50%;
}
#login .y input {
	width:80%;
	padding:8px;
	font-size:14px;
	border:1px solid #C0C0C0;
	border-radius:7px;
}
.masuk{
	box-shadow:0 0 5px;
	float:none;
	width:30%;
	height:40px;
	margin-top:20px;
	margin-left:110px;
	font-size:1rem;
	
	border-radius:2rem;
	background:#32CD32;
	transition:all .60s linear;
	scroll-behavior: smooth;
	
	
}
.masuk:hover{
	box-shadow:0 0 5px;
	float:none;
	width:30%;
	height:40px;
	margin-top:20px;
	margin-left:110px;
	
	border-radius:2rem;
	background:#90EE90;
	transition:all .60s linear;
	scroll-behavior: smooth;
}
.daftar{
	float:none;
	margin-left:25px;
	margin-top:40px;
	font-family:arial;
	transition:all .60s linear;
	scroll-behavior: smooth;
}
.daftar a{
	color:#1E90FF;
	text-decoration:none;
	padding:5px;
	margin:1px;
	transition:all .60s linear;
	scroll-behavior: smooth;
}
.daftar a:hover{
	border-bottom:1px solid #1E90FF;
	transition:all .60s linear;
	scroll-behavior: smooth;
}
</style>
</head>
<body>


<div id='login'>
	<div class='y'>
		<div class='icon'>
			<img src='".$alamatweb."img/people.png'/>
		</div>
	<h2>Masuk!!!</h2>
		<form action='proses.php' method='POST'>
		<p><input type='text' placeholder='Username' name='username'></p>
		<p><input type='password' placeholder='Password' name='password'></p>
			
				
	</div>
	
		<input type='submit' name='login' value='Masuk' class='masuk'>
		</form>
		<p class='daftar'>Lupa Kata Sandi ? <a href='".$alamatweb."page.php?contact'>Hubungi Admin</a></p>

</div>";
}
elseif ($_SESSION['level'] == 'Admin' ) {
	header ("location:media.php?admin");
}elseif ($_SESSION['level'] == 'User' ) {
	header ("location:page.php?home"  );
}
?>
