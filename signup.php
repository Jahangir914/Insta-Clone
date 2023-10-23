<?php
include('database.php');
$email=$_POST['email'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];


$qry="insert into `insta-users` values(null,'$email','$name','$username','$password')";

$res=mysqli_query($con,$qry);

if($res==TRUE){
    header('location:instalogin.php');
}
else{
    echo"Account Not created <br> please retry";
}
mysqli_close($con);
?>
