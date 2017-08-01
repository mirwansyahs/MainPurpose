<?php session_start();
session_destroy();
include "".$alamatweb."config/config.php";
header("location:page.php?home=masuk");

?>
