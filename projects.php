<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projects</title>

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
					<div class="col-md-6">
						<h1>Projects</h1>
					</div>
				</div>
			</div>
		</div>
        

<form action="check_project.php" method="post">
<center><table width="50%">
<tr><td>Project Subject: </td><td><input type="text" name="subject" placeholder="Ex: Automatic Exam Validation" class="form-control" minlength="10" maxlength="50" autofocus required></td></tr>
<tr><td><br></td><td><br></td></tr>
<tr><td>Project Details: </td><td><textarea style="height:200px" name="brief" placeholder="Ex: By using java and new frames how to do automatic exam validation application etc.,......." minlegnth="5" maxlength="500" class="form-control" required></textarea></td><tr>
<tr><td></td><td><br><input type="submit" name="submit" class="btn btn-danger" value="Submit"></td></tr>
</table>
</center>
</form>
<hr>
<center><h1>Projects</h1>
<table style="width:80%;">
<tr style="border:1px solid lightgray;text-align:left;background-color:#aec62c;padding:10px;">
<th>ID</th>
<th>Project Subject</th>
<th>Views</th>
<th>Submits</th>
<th>Sender</th>
</tr>
<?php
    $q=mysqli_query($con,"SELECT * FROM projects order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $subject=$row['subject'];
    $brief=$row['brief'];
    $submits=$row['submits'];
    $views=$row['views'];
    $sender=$row['sender'];

    echo "<tr style='padding:5px;border:1px solid black'><td>".$id."</td><td><a href='#' class='cl' onclick='load_page(\"brief_project.php?id=".$id."\")' style='text-decoration:none'>".$subject."</a></td><td>".$views."</td><td><a href='project_submits.php?link=".$id."'>".$submits."</a></td><td>".$sender."</td></tr>";
    }
    ?>
    </table></center>
    <div id='sh' style="font-size:20px;padding:10px;position:fixed;top:0%;z-index:9999;left:20%;width:60%;border:2px solid blue;height:400px;overflow:auto;background-color:white;display:none">
    <div id='shh'>
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
    $('#sh').fadeIn('fast').animate({
            'top': ($(window).height()/4) - 20
            }, {duration: 'slow', queue: false}, function() {
            // Animation complete.
        });

	$('body>*:not(#sh)').css("filter","blur(3px)");
       $('#shh').html("<center><br><br><br><img src='img/bx_loader.gif' style='width:50px;height:50px;'><br>Loading...</center>").load(pageloc);
}
</script>
    </body>
</html>