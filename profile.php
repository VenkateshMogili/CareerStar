<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CareerStar _Find Jobs and Internships</title>
    <link rel="icon" href="img/cslogo.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
    <!-- Custom Fonts & Icons -->
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
<?php
include 'menu.php';
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Profile</h1>
					</div>
				</div>
			</div>
		</div>
<?php
session_start();
error_reporting(0);
require "connect.php";
$user=$_GET['stuid'];
if(isset($_SESSION['username']))
{
	$stuid=$_SESSION['username'];
	if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students where stuid='$user'")))
	{
?>
				<form enctype="multipart/form-data" method="post" action="profiles.php" class="role">
					 <center>Choose your image*<input type="file" name="File" id="File" class="form-control" style="width:50%;" required minlength="1"></center>
				
					<center><br><br><input type="submit" value="Update Profile Picture" name="submit"  class="btn btn-success"></center>
					</form>
	 <?php
	 }
	 else{
	 echo "<script>alert('Error');window.open('404.php','_self');</script>";
	 }
 }
 else{
 echo "<h1>Please login</h1>";
 }
 ?>

<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>	