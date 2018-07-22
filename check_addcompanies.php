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
$company=mysql_real_escape_string($_POST['company']);
$branch=mysql_real_escape_string($_POST['branch']);
//file uploading...
     $filename = mysql_real_escape_string($_FILES['upload']['name']);
     $venkateshfname = $_FILES['upload']['name'];
     $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $tmpname  = $_FILES['upload']['tmp_name'];
    $filesize = $_FILES['upload']['size'];
    $ftype = $_FILES['upload']['type'];
    $extension=strpbrk($_FILES['upload']['name'],".");
     $vpb_file_extensions = pathinfo($filename, PATHINFO_EXTENSION); // File Extension
    $vpb_allowed_file_extensions = array("jpg","jpeg","png","gif");
    $venkateshfname=mysql_real_escape_string($filename);
    $date=date('Y-m-d');
    $time=time();
    $file=$withoutExt."--".$date."-".$time."".$filename.".png";
    $fp = fopen($tmpname, 'r');
    fclose($fp);
    $uploadDir = 'img/';
        
          if (!in_array($vpb_file_extensions, $vpb_allowed_file_extensions)) 
    {
        //Display file type error error
        echo "<script>alert('only .png or .jpg or .jpeg files are allowed');window.location='admin.php';</script>";
    }
    else 
    {
            $filePath = $uploadDir . $file;
$result = move_uploaded_file($tmpname, $filePath);
if (!$result) {
echo "<script>alert('Error uploading file..File is too large');window.location='admin.php';</script>";
exit;
}
else{
	$sel_user=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM companies WHERE company_name='$company' and branch='$branch'"));
	if($sel_user!=true)
	{
		$ins=mysqli_query($con,"INSERT INTO companies (company_name,company_logo,branch) VALUES ('$company','$file','$branch')");
		if($ins==true)
		{
		echo "<h3>Please Waiting...Company is uploading....</h3>";
		echo "<script>alert('New Company has been added successfully....');window.open('add_companies.php','_self')</script>";
		}
		else{
			echo "<script>alert('Please Enter valid details');window.location='add_companie.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('You have already added this branch previously....');window.open('add_companies.php','_self')</script>";
	}
}
	}
}
else{
	echo "<h3 style='font-family:georgia;color:red;'>Enter something<img src='images/loading2.gif'></h3>";
	echo "<script>alert('Invalid Credentials');window.open('admin.php','_self');</script>";
}

?>
