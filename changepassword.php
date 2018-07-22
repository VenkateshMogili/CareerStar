<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FJI</title>
    <link rel="icon" href="img/bars.png">

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
						<h1>Change Password</h1>
					</div>
				</div>
			</div>
		</div>
    <?php
session_start();
error_reporting(0);
require_once 'connect.php';
if(isset($_SESSION['username']))
{
	?>
<center><form action="changepassworda.php" method="post">
	<input type="password" placeholder="Old Password" name="old" class="form-control" style="width:200px;" minlength="5" autofocus required><br>
	<input type="password" placeholder="New Password" name="new" class="form-control" style="width:200px" minlength="5" required><br>
	<input type="submit" class="btn btn-success" value="Change Password">
</form>
</center>
<?php
}
else{
	echo "<script>alert('Please Login');window.location='login.php';</script>";
}
?>
        <!-- Javascripts -->
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>