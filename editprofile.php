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
if(isset($_SESSION['username']))
{
$stuid=strip_tags($_SESSION['username']);
$det=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students WHERE stuid='$stuid'"));
$sql=mysqli_query($con,"SELECT * FROM students where stuid='$stuid' ");
while($row=mysqli_fetch_array($sql))
{
	$name=htmlspecialchars(stripcslashes(strip_tags($row['s_name'])));
	$gender=$row['s_gender'];
	$question=htmlentities(htmlspecialchars(htmlspecialchars_decode($row['question'])));
}
?>
<section class="main" style="color:white;">
				<div class="col-md-2">
				</div><form action="editprofiles.php" enctype="multipart/form-data" method="post" class="role">
				<center><div class="col-md-8 sign-up text-center" id="editpro" style="background:teal;font-family:lucida sans;box-shadow:1px 2px 3px lightgray;">
					<div>
					<h4 style="color:white;">* <?php echo strip_tags($_SESSION['username']);?> *  Edit Profile</h4>
					<center><div id="status"></div></center>
					<div class="cus_info_wrap">
						<label class="labelTop" style="float:left">
						Name
						<span class="require">*</span>
						</label>
						<?php
						echo '<input type="text" disabled class="form-control" style="width:50%;float:right;" placeholder="Student Name" class="vpb_textAreaBoxInputs" value="'.$name.'">';
						?>
					</div>
					<br><br>
					<div class="clearfix"></div>
				    <div class="cus_info_wrap">
						<label class="labelTop" style="float:left">
						Gender
						<span class="require">*</span>
						</label>
					<select id="gender" style="width:50%;float:right" class="form-control" disabled>
					<option value=<?php echo $gender;?>><?php echo $gender;?></option>
					<option value="M">Male</option>
					<option value="F">Female</option>
					</select>
					</div>
					<br><br>
					<div class="clearfix"></div>
				   
					
					<div class="cus_info_wrap">
						<label class="labelTop" style="float:left">
						Security Question*
						</label>
						<select id="squestion" name="question" style="width:50%;float:right" class="form-control" required>
							<option value="<?php echo $question;?>"><?php echo $question;?></option>
							<option value="">Select security question</option>
							<option value="What is your tenth Hallticket number?">What is your tenth Hallticket number?</option>
							<option value="Who is your first teacher?">Who is your first teacher?</button>
							<option value="What is your pet name?">What is your pet name?</button>
							<option value="Who is your best friend?">Who is your best friend?</button>
							<option value="What primary school did you attend?">What primary school did you attend?</button>
						</select>
						</div><br><br>
						<div class="cus_info_wrap">
						<label class="labelTop" style="float:left">
						Security Answer*
						</label>
						<input type="text" id="sanswer" style="width:50%;float:right;" name="answer" class="form-control" required placeholder="Security answer" class="vpb_textAreaBoxInputs" value=<?php echo $det['answer'];?>>
						</div><br><br>
					
					
					<div class="botton1"><br><br><br>
					<input  type="submit" value="Update" id="editing_status" class="btn btn-success">
				</div><br><br>
				</div><br>
				</div>
				</form>

		</section>
	 <?php
 }
 else{
 echo "<script>alert('Please Login');window.location='index.php'</script>";
 }
 ?>
		<script src="scripts.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>	
