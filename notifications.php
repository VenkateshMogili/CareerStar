<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notifications</title>

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
    ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Notifications</h1>
					</div>
				</div>
			</div>
		</div>
        	

        <div class="section">
	    	<div class="container">
				<div class="row">
					<?php
session_start();
error_reporting(0);
require 'connect.php';
if(isset($_SESSION['username']))
{
?>
<table style="width:100%;">
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

    <div id='sh' style="font-size:20px;padding:10px;position:fixed;top:0%;left:20%;width:60%;z-index:9999;border:2px solid blue;height:400px;overflow:auto;background-color:white;display:none">
    <div id='shh'>
    </div>
    </div>
    </table>
    <?php
}
else{
    echo "Please Login";
}
?>
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
function load_page(pageloc,pageid){ 
    $("html, body").animate({ scrollTop: 0 }, 1000);
    $('#sh').fadeIn('fast');

       $('#shh').html("<center><br><br><br><img src='img/bx_loader.gif' style='width:50px;height:50px;'><br>Loading...</center>").load(pageloc);
}
</script>
    </body>
</html>