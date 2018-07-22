<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Submits</title>

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
    $related=$_GET['link'];
    ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1><a href="projects.php" style="color:white"><</a>Project Submits</h1>
					</div>
				</div>
			</div>
		</div>
        

<form action="check_project2.php" method="post" enctype="multipart/form-data">
<center><div style="background-color:lightgray;padding:10px;width:80%;border-radius:10px;">
<table style="width:50%;">
<tr><td>Choose Your Project File: </td><td><input type="file" name="upload" class="form-control" required>
<?php echo "<input type='hidden' name='related' value='".$related."'>";?>
</td></tr>
<tr><td><br></td><td><br></td></tr>
<tr><td></td><td><br><input type="submit" name="submit" class="btn btn-danger" value="Submit"></td></tr>
</table>
</div>
</center>
</form>
<hr>
<center><h1>Project Submissions</h1>
<table style="width:80%;">
<tr style="border:1px solid lightgray;text-align:left;background-color:#aec62c;padding:10px;">
<th>ID</th>
<th>Project Subject</th>
<th>File</th>
<th>Submitted By</th>
</tr>
<?php
    $q=mysqli_query($con,"SELECT * FROM submissions where related='$related' order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $subject=$row['subject'];
    $file=$row['file'];
    $sender=$row['sender'];

    echo "<tr style='padding:5px;border:1px solid black'><td>".$id."</td><td><a href='#' class='cl' onclick='load_page(\"brief_project.php?id=".$related."\")' style='text-decoration:none'>".$subject."</a></td><td><a href='uploads/$file'>".$file."</a></td><td>".$sender."</td></tr>";
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