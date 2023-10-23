<?php
include('database.php');
// for image
if(isset($_FILES['postpic'])){

    $updfile_name= $_FILES['postpic']['name'];
    $file_size= $_FILES['postpic']['size'];
    $file_tmp= $_FILES['postpic']['tmp_name'];
    $file_type= $_FILES['postpic']['type'];
  
    move_uploaded_file($file_tmp,'uploaded-images/'.$file_name);
  }

$sid  = $_POST['postid'];
$title  = $_POST['posttit'];
$description = $_POST['postdesc'];
// $phone = $_POST['empphone'];

$qry = "Update insta_post set title ='$title', description ='$description', image='$updfile_name' where `post_id`='$sid'"; 
$res = mysqli_query($con,$qry);
if($res== true)
{
    header('location:showpost.php');
}
else{
    echo "<script>alert('your data is not updated')</script>";
}

?>
