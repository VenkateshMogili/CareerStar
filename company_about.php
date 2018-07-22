<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company About</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
    <body>
        	<div><center><h1>About</h1></center>
            <?php
            session_start();
            error_reporting(0);
            require 'connect.php';
            if(isset($_SESSION['username']))
            {
            $company=$_GET['company'];
            $q=mysqli_query($con,"SELECT * FROM companies where company_name='$company'");
            while($row=mysqli_fetch_array($q))
            {
            $about=$row['about'];
            $logo=$row['company_logo'];
            }
            echo '<img src="img/'.$logo.'" style="width:200px;height:200px;border-radius:100px;"><br>';
            echo "<p style='text-indent:100px;font-size:20px;box-shadow:1px 2px 3px lightgray;padding:10px;'>".$about."</p>";
            ?>
            </div>
            <?php
            }
            else{
            echo "<script>alert('Please Login');window.open('index.php','_self');</script>";
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