<?php
include('database.php');
$sid = $_REQUEST['id'];
$qry = "delete from insta_post where `post_id` = '$sid'";

$result = mysqli_query($con,$qry);

if($result == true){
    header('location:showpost.php');
}
else{
    echo "<script>alert('Your data is not deleted')</script>";
}

?>