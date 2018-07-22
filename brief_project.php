<?php
require 'connect.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username']))
{
?>
<?php
    $gid=$_GET['id'];
    $q=mysqli_query($con,"SELECT * FROM projects where id='$gid'");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $subject=$row['subject'];
    $brief=$row['brief'];
    $time=$row['send_time'];
    $views=$row['views'];
    $views=$views+1;
    echo '
    ';
    echo "<div style='box-shadow:1px 2px 3px lightgray;padding:20px;'><p style='color:white;padding:10px;font-size:20px;font-family:lucida sans;background-color:blue;'>$subject <button class='cls' style='float:right;margin-top:-10px;margin-right:-5px;z-index:9;border-radius:100px;border:0px;width:30px;height:30px;cursor:pointer;background-color:red;color:white;'>X</button></p><br><p style='text-indent:50px;color:#aec62c;font-size:20px;font-family:lucida sans'>$brief</p><p style='float:right;font-size:15px;color:blue'>$time</p><br><a href='project_submits.php?link=".$id."' class='btn btn-danger'>Submit Your Answer</a></div>";
    }
    mysqli_query($con,"UPDATE projects SET views='$views' where id='$id'");
    ?>
    <?php
}
else{
    echo "Please Login";
}
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
    $(".cls").click(function(){
    $('#sh').fadeOut('slow').animate({
            'top': ($(window).height()/2) - 20
            }, {duration: 'slow', queue: false}, function() {
            // Animation complete.
        });
    $('body>*:not(#sh)').css("filter","blur(0px)");
    });
});
</script>