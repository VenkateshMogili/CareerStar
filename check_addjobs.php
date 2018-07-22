<body style='background-color:whitesmoke;'>
<?php
session_start();
error_reporting(0);
require_once 'connect.php';
$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_POST['submit']) && isset($_SESSION['username']))
{
//input fields
$stuid=$_SESSION['username'];
$title=mysql_real_escape_string($_POST['title']);
$brief=mysql_real_escape_string($_POST['brief']);
$link=mysql_real_escape_string($_POST['link']);
$branch=mysql_real_escape_string($_POST['branch']);
$company=mysql_real_escape_string($_POST['company']);
$related=mysql_real_escape_string($_POST['related']);

	$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM notifications WHERE branch='$branch' and company='$company' and related_to='$related' and register_link='$link' and notice='$title'"));
	if($sel_user!=true)
	{
		$ins=mysqli_query($con,"INSERT INTO notifications (notice,brief_notice,branch,company,related_to,register_link) VALUES ('$title','$brief','$branch','$company','$related','$link')");
		if($ins==true)
		{
		echo "<h3>Please Waiting...Job/Internship is uploading....</h3>";
		echo "<script>alert('$title has been added successfully....');window.open('add_jobs.php','_self')</script>";
		}
		else{
			echo "<script>alert('Please Enter valid details');window.location='add_jobs.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('You have already added this branch previously....');window.open('add_jobs.php','_self')</script>";
	}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('admin.php','_self');</script>";
}

?>
