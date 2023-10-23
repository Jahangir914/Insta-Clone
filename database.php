<?php
$dbuser='root';
$dbhost='localhost';
$con = mysqli_connect($dbhost,$dbuser);
if($con==TRUE){
    echo"";
}
else{
    echo"<script>alert('Database not connected')</script>";
}
$db=mysqli_select_db($con,'insta_clone');
if($db==TRUE){
    echo"";
}
else{
    echo"<script>alert('Database not selected')</script>";
}

?>