<body style='background-color:whitesmoke;'>
<?php
require_once 'connect.php';
if(isset($_POST['submit2']))
{
//input fields
$stuid=mysql_real_escape_string(strtoupper($_POST['stuid2']));
$email=mysql_real_escape_string($_POST['email2']);
$question=mysql_real_escape_string($_POST['question2']);
$answer=mysql_real_escape_string($_POST['answer2']);
$password=mysql_real_escape_string($_POST['passwordn']);
$password2=mysql_real_escape_string($_POST['passwordn2']);
if($password!=$password2)
{
	echo "<script>alert('Passwords are not matching...');</script>";
}
else
{
$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students WHERE stuid='$stuid' and s_email='$email' and question='$question' and answer='$answer'"));
	if($sel_user!=false)
	{
		$upd=mysqli_query($con,"UPDATE students SET password='$password' where stuid='$stuid' and s_email='$email' and question='$question' and answer='$answer'");
		if($upd==true)
		{
		echo "<h3>Please Waiting...Your Account is recovering....</h3>";
		echo "<script>alert('Your account has been recovered successfully....');window.open('index.php','_self')</script>";
		}
		else{
			echo "<script>alert('You have entered invalid details...');window.location='index.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid Details');window.open('index.php','_self')</script>";
	}
}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('index.php','_self');</script>";
}
?>
