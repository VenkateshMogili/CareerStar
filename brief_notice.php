<?php
session_start();
error_reporting(0);
require 'connect.php';
if(isset($_SESSION['username']))
{
?>
<?php
    $gid=$_GET['id'];
    $q=mysqli_query($con,"SELECT * FROM notifications where id='$gid'");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $title=$row['brief_notice'];
    $notice=$row['notice'];
    $time=$row['time'];
    $views=$row['views'];
    $link=$row['register_link'];
    $views=$views+1;
    echo '
    ';
    echo "<div style='box-shadow:1px 2px 3px lightgray;padding:20px;'><p style='color:white;padding:10px;font-size:20px;font-family:lucida sans;background-color:blue;'>$notice <button class='cls' style='float:right;margin-top:-10px;margin-right:-5px;z-index:9;border-radius:100px;border:0px;width:30px;height:30px;cursor:pointer;background-color:red;color:white;'>X</button></p><br><p style='text-indent:50px;color:#aec62c;font-size:20px;font-family:lucida sans'>$title</p><p style='float:right;font-size:15px;color:blue'>$time</p><br><a href='".$link."' target='_blank' class='btn btn-danger'>Apply</a></div>";
    }
    mysqli_query($con,"UPDATE notifications SET views='$views' where id='$id'");
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
    $('#sh').fadeOut('fast');
    });
});
</script>