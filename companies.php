<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Companies</title>

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
    $branch=$_GET['branch'];
    if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM branches where branch_name='$branch'")))
    {
    ?><!--/header-->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><a href='branches.php' style='color:green'>Branches</a>/<?php echo $branch;?></h1>
					</div>
				</div>
			</div>
		</div>
        	<?php

    if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM companies where branch='$branch'"))>=1)
    {
    ?>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Team Member -->
					<?php
    $q=mysqli_query($con,"SELECT * FROM companies where branch='$branch' order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $name=$row['company_name'];
    $logo=$row['company_logo'];
    echo '<a href="company.php?company='.$name.'&&branch='.$branch.'"><div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <!-- Team Member Photo -->
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

<?php
}
else{
    echo "<center><h1 style='color:red'>No Companies Found</h1></center>";
}
}
else{
    echo "<script>window.open('404.php','_self');</script>";
}
?>

	    

        <!-- Javascripts -->
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>