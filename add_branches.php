<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Branches</title>

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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<?php 
    include 'menu.php';
    session_start();
error_reporting(0);
require_once 'connect.php';
$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['username']))
{
$stuid=$_SESSION['username'];
if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students where category='admin' and stuid='$stuid'")))
{
    ?><!--/header-->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Add Branches</h1>
					</div>
				</div>
			</div>
		</div>
        

<form action="check_addbranches.php" method="post" enctype="multipart/form-data">
<center><table width="50%">
<tr><td>Branch Name: </td><td><input type="text" name="branch" placeholder="Ex: CSE,ECE,Civil" class="form-control" autofocus required></td></tr>
<tr><td><br></td><td><br></td></tr>
<tr><td>Choose Branch Logo: </td><td><input type="file" name="upload" required></td><tr>
<tr><td></td><td><br><input type="submit" name="submit" class="btn btn-danger" value="Submit"></td></tr>
</table>
</center>
</form>
<hr>
<center><h1>All Branches</h1></center>
<?php
    $q=mysqli_query($con,"SELECT * FROM branches order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $name=$row['branch_name'];
    $logo=$row['branch_logo'];
    echo '<a href="#"><div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <!-- Team Member Photo -->
                            <div class="team-member-image"><img src="img/'.$logo.'" alt="Name Surname" style="height:205px;"></div>
                            <div class="team-member-info">
                                <ul>
                                    <!-- Team Member Info & Social Links -->
                                    <li class="team-member-name">
                                        '.$name.'
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>';
    }
    ?>
 <?php
 }
 else{
 echo "<h1>You are not admin</h1>";
 }
 }
 else{
 echo "<h1>Please Login</h1>";
 }
 ?>
        <!-- Javascripts -->
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>