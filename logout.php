<?php
session_start();
error_reporting(0);
require_once("connect.php");
if (isset($_SESSION['username']))
{
$stuid=$_SESSION['username'];
session_unset("username");
session_destroy();
header("location:index.php");
}
else{
	header('Location: index.php');
}
?>
