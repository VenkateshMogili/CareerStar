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

    <div id="reg" style="background-color:white;height:500px;display:none;position:fixed;top:20%;left:25%;box-shadow:1px 2px 30px black;border-radius:5px;z-index:9;width:50%;padding:10px;">
    <button id="close" style="float:right;border-radius:100px;width:25px;height:25px;text-align:center;color:white;background-color:red;border:0px;margin-top:-25px;margin-right:-20px;z-index:99;">X</button>
    
    <form action="check_register.php" method="post">
    <center><h1>Registration</h1></center>
    <table>
    <tr><td>
    UserID: </td><td><input type="text" placeholder="UserID" name="stuid" class="form-control" minlength="7" maxlength="7" autofocus required></td></tr>
    <tr><td>First Name: </td><td><input type="text" name="fname" placeholder="First Name" minlength="3" class="form-control" required></td></tr>
    <tr><td>Last Name: </td><td><input type="text" name="lname" placeholder="Last Name" minlength="3" class="form-control" required></td></tr>
    <tr><td>Gender: </td><td><input type="radio" name="gender" value="M">Male <input type="radio" name="gender" value="F">Female</td></tr>
    <tr><td>E-Mail: </td><td><input type="email" name="email" placeholder="E-Mail" class="form-control" required></td></tr>
    <tr><td>Date Of Birth: </td><td><input type="date" name="date" placeholder="YY-MM-DD" class="form-control" required></td></tr>
    <tr><td>Password: </td><td><input type="password" name="password" placeholder="Password" minlength="5" maxlength="15" class="form-control" required></td></tr>
    <tr><td>Confirm Password: </td><td><input type="password" name="password2" placeholder="Confirm Password" minlength="5" maxlength="15" class="form-control" required></td></tr>
    <tr><td>Security Question: </td><td><select name="question" class="form-control" required><option value="What is your pet name?">What is your pet name?</option>
    <option value="What is your hall ticket number?">What is your hall ticket number?</option>
    </select></td></tr>
    <tr><td>Answer: </td><td><input type="text" name="answer" minlength="5" maxlength="15" placeholder="Security Answer" class="form-control" required></td></tr>
    <tr><td><br></td><td><br></td></tr>
    <tr><td></td><td><input type="submit" value="Register" name="submit" class="btn btn-danger"></td></tr>
    <tr><td></td><td><a href="#" id="forgot1">Forgot Password</a></td></tr>
    </table>
    </form>
    </div>

    <div id="forgot" style="background-color:white;height:500px;display:none;position:fixed;top:20%;left:25%;box-shadow:1px 2px 30px black;border-radius:5px;z-index:9;width:50%;padding:10px;">
    <button id="close2" style="float:right;border-radius:100px;width:25px;height:25px;text-align:center;color:white;background-color:red;border:0px;margin-top:-25px;margin-right:-20px;z-index:99;">X</button>
    <form action="check_forgot.php" method="post">
    <center><h1>Forgot Password</h1></center>
    <table>
    <tr><td>
    UserID: </td><td><input type="" placeholder="UserID" name="stuid2" class="form-control" autofocus required></td></tr>
    <tr><td>E-Mail: </td><td><input type="email" name="email2" placeholder="E-Mail" class="form-control" required></td></tr>
    <tr><td>Security Question: </td><td><select name="question2" class="form-control" required><option value="What is your pet name?">What is your pet name?</option>
    <option value="What is your hall ticket number?">What is your hall ticket number?</option>
    </select></td></tr>
    <tr><td>Answer: </td><td><input type="text" name="answer2" placeholder="Security Answer" class="form-control" required></td></tr>
    <tr><td>New Password: </td><td><input type="password" name="passwordn" placeholder="Password" class="form-control" required></td></tr>
    <tr><td>Confirm New Password: </td><td><input type="password" name="passwordn2" placeholder="Confirm Password" class="form-control" required></td></tr>
    <tr><td><br></td><td><br></td></tr>
    <tr><td></td><td><input type="submit" value="Recover" name="submit2" class="btn btn-danger"></td></tr>
    <tr><td></td><td><a href="#" id="reg2">Register</a></td></tr>
    </table>
    </form>
    </div>
	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to Career Star!!!</h2>
                                    <p class="animation animated-item-2">Jobs and Internships are available here... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Google</h2>
                                    <p class="animation animated-item-2">Google Jobs and Internships</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Facebook</h2>
                                    <p class="animation animated-item-2">Facebook Jobs and Internships</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		
<hr>

		<!-- Branches -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Branches</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/cselogo.png" alt="img04">
						<figcaption>
							<h3>CSE</h3>
							<span>Jobs, Internships</span>
							<a href="companies.php?branch=CSE">Take a look</a>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/ecelogo.png" alt="img01" style="height:205px">
						<figcaption>
							<h3>ECE</h3>
							<span>Jobs, Internships</span>
							<a href="companies.php?branch=ECE">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/civillogo.png" alt="img02" style="height:205px">
						<figcaption>
							<h3>Civil</h3>
							<span>Jobs, Internships</span>
							<a href="companies.php?branch=Civil">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/mechlogo.png" alt="img05" style="height:205px;">
						<figcaption>
							<h3>Mechanical</h3>
							<span>Jobs, Internships</span>
							<a href="companies.php?branch=MECH">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/mmelogo.png" alt="img03" style="height:205px;">
						<figcaption>
							<h3>MME</h3>
							<span>Jobs, Internships</span>
							<a href="companies.php?branch=MME">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/chelogo.png" alt="img06" style="height:205px">
						<figcaption>
							<h3>Chemical</h3>
							<span>Jobs,Internships</span>
							<a href="companies.php?branch=Chemical">Take a look</a>
						</figcaption>
					</figure>
				</div>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Branches -->
			
<hr>

		
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> SF-10<br/>
	        				<b>Phone:</b> *******<br/>
	        				<b>Email:</b> <a href="mailto:gmail@gmail.com">gmail address@gmail.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Project Guide</h3>
						<p>Mr. Y Suresh</p>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Webteam</h3>
		    				<p>S.Vamsi Krishna</p>
		    				<p>P.Ajay Kumar</p>
		    				<p>M.Venkatesh</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017 <a href="#">Designed and Developed By <a href="#">Webteam</a>.</div>
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
$(document).ready(function(){
	$("#register").click(function(){
	$("#reg").slideToggle("fast");
	$("#reg").slideDown("slow");
	
	$('body>*:not(#reg,#forgot)').css("filter","blur(3px)");
	
	});

	$("#close,#close2").click(function(){
	$("#reg,#forgot").slideUp("slow");
	
	$('body>*:not(#reg,#forgot)').css("filter","blur(0px)");
	
	});
	$("#forgot1").click(function(){
	$("#reg").slideUp("fast");
	$("#forgot").slideDown("slow");
	});

	$("#reg2").click(function(){
	$("#forgot").slideUp("fast");
	$("#reg").slideDown("slow");
	});
});
</script>
    </body>
</html>