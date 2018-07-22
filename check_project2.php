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
$related=mysql_real_escape_string($_POST['related']);
//file uploading...
     $filename = mysql_real_escape_string($_FILES['upload']['name']);
     $venkateshfname = $_FILES['upload']['name'];
     $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $tmpname  = $_FILES['upload']['tmp_name'];
    $filesize = $_FILES['upload']['size'];
    $ftype = $_FILES['upload']['type'];
    $extension=strpbrk($_FILES['upload']['name'],".");
     $vpb_file_extensions = pathinfo($filename, PATHINFO_EXTENSION); // File Extension
    $vpb_allowed_file_extensions = array("zip","txt","mpeg","m4a");
    $ip=$_SERVER['REMOTE_ADDR'];
    $venkateshfname=mysql_real_escape_string($filename);
    $date=date('Y-m-d');
    $time=time();
    $file=$withoutExt."--".$date."-".$time."".$filename;
    $fp = fopen($tmpname, 'r');
    fclose($fp);
    $uploadDir = 'uploads/';
        
          if (!in_array($vpb_file_extensions, $vpb_allowed_file_extensions)) 
    {
        //Display file type error error
        echo "<script>alert('only .zip or .avi or .mpeg files are allowed');window.location='index.php';</script>";
    }
    else 
    {
            $filePath = $uploadDir . $file;
$result = move_uploaded_file($tmpname, $filePath);
if (!$result) {
echo "<script>alert('Error uploading file..File is too large');window.location='index.php';</script>";
exit;
}
else{
	$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM submissions WHERE sender='$stuid' and related='$related'"));
	if($sel_user!=true)
	{
$q1=mysqli_query($con,"SELECT * FROM projects where id='$related'");
while($row=mysqli_fetch_array($q1))
{
	$subject=$row['subject'];
	$submits=$row['submits'];
	$submits=$submits+1;
}
		$ins=mysqli_query($con,"INSERT INTO submissions (subject,related,file,sender,ip) VALUES ('$subject','$related','$file','$stuid','$ip')");
		if($ins==true)
		{
		mysqli_query($con,"UPDATE projects SET submits='$submits' where id='$related'");
		echo "<h3>Please Waiting...Your Project is uploading....</h3>";
		echo "<script>alert('Your Project has been uploaded successfully....');window.open('projects.php','_self')</script>";
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
	}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('projects.php','_self');</script>";
}

?>
