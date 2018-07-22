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

    <title>Add Jobs</title>

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
						<h1>Add Jobs/Internships</h1>
					</div>
				</div>
			</div>
		</div>
        

<form action="check_addjobs.php" method="post" enctype="multipart/form-data">
<center><table width="50%">
<tr><td>Notice Title: </td><td><input type="text" name="title" placeholder="Ex: Google AI Internship" class="form-control" autofocus required></td></tr>
<tr><td>Brief Notice: </td><td><input type="text" name="brief" placeholder="Ex: Google is offering internship for E-3 CSE students with stipend 50000/-" class="form-control" autofocus required></td></tr>
<tr><td>Apply Link: </td><td><input type="text" name="link" placeholder="Ex: http://www.google.co.in" class="form-control" autofocus required></td></tr>
<tr><td>Select Branch: </td><td><select name="branch" required>
<?php
$q=mysqli_query($con,"SELECT * FROM branches");
while($r=mysqli_fetch_array($q))
{
$name=$r['branch_name'];
echo "<option value='".$name."'>".$name."</option>";
}
?>
</select></td></tr>
<tr><td>Select Company: </td><td><select name="company" required>
<?php
$q=mysqli_query($con,"SELECT * FROM companies");
while($r=mysqli_fetch_array($q))
{
$name=$r['company_name'];
echo "<option value='".$name."'>".$name."</option>";
}
?>
</select></td></tr>
<tr><td>Select Category: </td><td><select name="related" required>
<option value="internship">internship</option>
<option value="job">job</option>
</select></td></tr>
<tr><td><br></td><td><br></td></tr>
<tr><td></td><td><br><input type="submit" name="submit" class="btn btn-danger" value="Submit"></td></tr>
</table>
</center>
</form>
<hr>
<center><h1>All Jobs/Internships</h1>
<table style="width:80%;">
<tr style="border:1px solid lightgray;text-align:left;background-color:#aec62c;padding:10px;">
<th>ID</th>
<th>Notice</th>
<th>Views</th>
<th>Related</th>
</tr>
<?php
    $q=mysqli_query($con,"SELECT * FROM notifications order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $title=$row['notice'];
    $views=$row['views'];
    $related=$row['related_to'];

    echo "<tr style='padding:5px;border:1px solid black'><td>".$id."</td><td><a href='#' class='cl' onclick='load_page(\"brief_notice.php?id=".$id."\")' style='text-decoration:none'>".$title."</a></td><td>".$views."</td><td>".$related."</td></tr>";
    }
    ?>

    </table></center>
    <div id='sh' style="font-size:20px;padding:10px;position:fixed;top:0%;left:20%;width:60%;z-index:9999;border:2px solid blue;height:400px;overflow:auto;background-color:white;display:none">
    <div id='shh'>
    </div>
    </div>
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
<script>
function load_page(pageloc,pageid){ 
    $("html, body").animate({ scrollTop: 0 }, 1000);
    $('#sh').fadeIn('fast');

       $('#shh').html("<center><br><br><br><img src='img/bx_loader.gif' style='width:50px;height:50px;'><br>Loading...</center>").load(pageloc);
}
</script>
    </body>
</html>