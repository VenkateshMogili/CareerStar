<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About, Jobs and Internships</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
    <body>
    <?php 
    include 'menu.php';
    $company=$_GET['company'];
    $branch=$_GET['branch'];
    ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><a href='branches' style='color:green'>Branches</a>/<?php echo "<a href='companies.php?branch=".$branch."' style='color:green'>".$branch."</a>/".$company;?></h1>
					</div>
				</div>
			</div>
		</div>
        	

        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-md-2">
				<li><?php echo '<a href="#" onclick="load_page2(\'company_about.php?company='.$company.'\')">About</a>';?></li>
				<li><?php echo '<a href="#" onclick="load_page2(\'company_jobs.php?company='.$company.'\')">Jobs</a>';?></li>
				<li><?php echo '<a href="#" onclick="load_page2(\'company_internships.php?company='.$company.'\')">Internships</a>';?></li>
				</div>
				<div class="col-md-10">
				<div id="sh1" style="height:500px;overflow:auto;border:1px solid lightgray"></div>
				</div>
				</div>
			</div>
		</div>



	   

        <!-- Javascripts -->
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>

		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		
<script>
function load_page2(pageloc,pageid){ 
    $("html, body").animate({ scrollTop: 0 }, 1000);
       $('#sh1').html("<center><br><br><br><img src='img/bx_loader.gif' style='width:50px;height:50px;'><br>Loading...</center>").load(pageloc);
}
</script>
    </body>
</html>