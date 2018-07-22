<?php
session_start();
error_reporting(0);
require 'connect.php';
if(isset($_SESSION['username']))
{
?>
<center><h1>Jobs</h1></center>
<table style="width:100%;">
<tr style="border:1px solid lightgray;text-align:left;background-color:#aec62c;padding:10px;">
<th>ID</th>
<th>Notice</th>
<th>Views</th>
<th>Register Link</th>
</tr>
<?php
    $company=$_GET['company'];
    $q=mysqli_query($con,"SELECT * FROM notifications where related_to='job' and company='$company' order by id LIMIT 100");
    while($row=mysqli_fetch_array($q))
    {
    $id=$row['id'];
    $title=$row['notice'];
    $link=$row['register_link'];
    $views=$row['views'];

    echo "<tr style='padding:5px;border:1px solid black'><td>".$id."</td><td><a href='#' class='cl' onclick='load_page(\"brief_notice.php?id=".$id."\")' style='text-decoration:none'>".$title."</a></td><td>".$views."</td><td><a href='$link'>Apply</a></td></tr>";
    }
    ?>
    </table>
    <div id='sh' style="font-size:20px;box-shadow:100px 200px 200px 200px white;padding:10px;position:fixed;top:10%;left:30%;width:55%;border:2px solid blue;height:300px;overflow:auto;background-color:white;display:none">
    <div id='shh'>
    </div>
    </div>
    <?php
}
else{
    echo "Please Login";
}
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
function load_page(pageloc,pageid){ 
    $("html, body").animate({ scrollTop: 0 }, 1000);
    $('#sh').fadeIn('fast');
       $('#shh').html("<center><br><br><br><img src='img/bx_loader.gif' style='width:50px;height:50px;'><br>Loading...</center>").load(pageloc);
}
</script>