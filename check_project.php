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
$subject=mysql_real_escape_string($_POST['subject']);
$brief=mysql_real_escape_string($_POST['brief']);

$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM projects WHERE stuid='$stuid' and subject='$subject'"));
	if($sel_user!=true)
	{
		$ins=mysqli_query($con,"INSERT INTO projects (sender,subject,brief,ip) VALUES ('$stuid','$subject','$brief','$ip')");
		if($ins==true)
		{
		echo "<h3>Please Waiting...Your Project is sending....</h3>";
		echo "<script>alert('Your Project has been sent successfully....');window.open('projects.php','_self')</script>";
		}
		else{
			echo "<script>alert('Please Enter valid details about your project');window.location='projects.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('You have already sent this project previously....');window.open('projects.php','_self')</script>";
	}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('projects.php','_self');</script>";
}
?>
