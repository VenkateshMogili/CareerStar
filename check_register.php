<body style='background-color:whitesmoke;'>
<?php
require_once 'connect.php';
$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_POST['submit']))
{
//input fields
$stuid=mysql_real_escape_string(strtoupper($_POST['stuid']));
$fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$username=$fname." ".$lname;
$gender=mysql_real_escape_string($_POST['gender']);
$email=mysql_real_escape_string($_POST['email']);
$date=mysql_real_escape_string($_POST['date']);
$password=mysql_real_escape_string($_POST['password']);
$password2=mysql_real_escape_string($_POST['password2']);
$question=mysql_real_escape_string($_POST['question']);
$answer=mysql_real_escape_string($_POST['answer']);

if($password!=$password2)
{
	echo "<script>alert('Passwords are not matching...');</script>";
}
else
{
$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students WHERE stuid='$stuid'"));
	if($sel_user!=true)
	{
		$ins=mysqli_query($con,"INSERT INTO students (stuid,password,s_name,s_gender,s_email,s_dob,ip,question,answer) VALUES ('$stuid','$password','$username','$gender','$email','$date','$ip','$question','$answer')");
		if($ins==true)
		{
		echo "<h3>Please Waiting...Registration is on process....</h3>";
		echo "<script>alert('You have registered successfully....');window.open('index.php','_self')</script>";
		}
		else{
			echo "<script>alert('You have entered invalid details...');window.location='index.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('You have already registered');window.open('index.php','_self')</script>";
	}
}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('index.php','_self');</script>";
}
?>
