<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                <img src="img/cslogo.png" style="width:50px;height:50px;border-radius:100px;margin-top:-15px;margin-right:3px;">
                <b style="font-size:30px;color:#aec62c">CareerStar</b></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php
session_start();
error_reporting(0);
require 'connect.php';
                    if(isset($_SESSION['username']))
                    {
                    $uname=$_SESSION['username'];
?>
					<li><a href="index.php">Home</a></li>
                    <li><a href="branches.php">Jobs & Internships</a></li>
                    <li><a href="notifications.php">Notifications</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="link"><i class="fa fa-send my"></i> <?php echo $uname;?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
            <?php
            if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM students where stuid='$uname' and category='admin'")))
            {
            ?>

                    <li><a href="admin.php">Admin Panel</a></li>
                    <?php
            }
            ?>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
            </ul>
        </li>
                    </ul>
                    <?php
                    }
                    else{
                    ?>
                    
                    <li class="active"><form method="post" action="check_login.php"><input type="text" placeholder="Username:" name="username" style="padding:5px;border:0px;margin:2px" required></li>
                    <li class="active"><input type="password" placeholder="Password:" name="password" style="padding:5px;border:0px;margin:2px" required></li>
                    <li><input type="submit" value="Login" class="btn btn-danger" name="login" style="padding:6px;"></li>
                    </form>

                    <li><a href="#" id="register" class="btn btn-danger" style="padding:6px;color:white;margin-left:5px;">Register</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>