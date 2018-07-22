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
						<h1>My Profile</h1>
					</div>
				</div>
			</div>
		</div>
		<?php

if(isset($_SESSION['username'])){
	$id=$_SESSION['username'];
	$sql=mysqli_query($con,"SELECT * FROM students where stuid='$id' ");
	while ($row=mysqli_fetch_array($sql))
	{
	$stuid=$row['stuid'];
	$name=$row['s_name'];
	$gender=$row['s_gender'];
	$email=$row['s_email'];
	$dateof_reg=$row['date_registered'];
	$profile=$row['profile'];
	}
?>
<center>	<div style="width:50%;background-color:teal;color:white;font-family:lucida sans;padding:10px;border-radius:20px;height:auto">
		<?php
echo "<center>";
if ($profile==""){
	echo "<a href='profile.php?stuid=".$stuid."' title='click here to change your profile picture'><img src='images/profile.png' style='border-radius:100%;width:150px;height:150px;'></a><br><br>";
}else{
	echo "<a href='profile.php?stuid=".$stuid."' title='click here to change your profile picture'><img src=".$profile." style='border-radius:100%;width:150px;height:150px;'></a><br><br>";
	}
	echo "<b style='font-size:30px;color:white;text-shadow:1px 2px 3px #3399cc'>".$stuid."</b></center>
	<center>";
	echo "<b style='float:left'>Name: </b><b style='float:right'>".$name."</b><br><br>";
	echo "<b style='float:left'>Gender: </b><b style='float:right'>".$gender."</b><br><br>";
	echo "<b style='float:left'>E-Mail: </b><b style='float:right'>".$email."</b><br><br>";
	echo "<b style='float:left'>Date of registration: </b><b style='float:right'>".$dateof_reg."</b><br><br>";
	?>
	</div></center>
	<?php
}
else{
	echo "<script>alert('Please login to see your profile');window.location='login.php';</script>";
}
?>
<style>
table{width:50%;box-shadow:1px 2px 3px black;background-color:#3399ff;opacity:0.8;}
table:hover{opacity:1;transition:0.4s;}
#t1{background-color:#FF6000;opacity:0.9;width:50%;box-shadow:1px 2px 3px black;}
#t1:hover{opacity:1;transition:0.4s;}
th{background-color:#FF6000;padding:10px;color:white;}
td{padding:10px;width:30%;font-family:arial;text-shadow:0px 0px 3px black;color:white;}
</style>

        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>	
