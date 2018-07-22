<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Branches</title>

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
    ?><!--/header-->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Branches</h1>
					</div>
				</div>
			</div>
		</div>
        	

        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Branch -->
					<?php
    $q=mysqli_query($con,"SELECT * FROM branches order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $name=$row['branch_name'];
    $logo=$row['branch_logo'];
    echo '<a href="companies.php?branch='.$name.'"><div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <!-- Branch Logo-->
                            <div class="team-member-image"><img src="img/'.$logo.'" alt="Name Surname" style="height:205px;"></div>
                            <div class="team-member-info">
                                <ul>
                                    <!-- Team Member Info & Social Links -->
                                    <li class="team-member-name">
                                        '.$name.'
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>';
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

    </body>
</html>