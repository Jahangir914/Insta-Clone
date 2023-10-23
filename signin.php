<?php
session_start();
include('database.php');

$email = $_POST['Email'];
$pass  = $_POST['Password'];

$qry = "select * from `insta-users` where `user_email`='$email' and `user_password`='$pass'";

$result = mysqli_query($con,$qry);
$row = mysqli_fetch_array($result);
if($result == TRUE)
    {
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['username'] = $row['user_username'];
        header('location:fetch.php');
    }
    
    else{
        echo "<script>alert('You are not logged into your account')</script>";
    }
    

mysqli_close($con);

?>