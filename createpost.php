
<?php
session_start();
include('database.php');
if(isset($_FILES['post_img'])){

  $file_name= $_FILES['post_img']['name'];
  $file_size= $_FILES['post_img']['size'];
  $file_tmp= $_FILES['post_img']['tmp_name'];
  $file_type= $_FILES['post_img']['type'];

  move_uploaded_file($file_tmp,'uploaded-images/'.$file_name);
}

$title=$_POST['post_title'];
$description=$_POST['post_desc'];
$user= $_SESSION['name'];
$username= $_SESSION['username'];

$qry= "insert into insta_post values(null,'$title','$description','$user','$username','$file_name')";

$res=mysqli_query($con,$qry);

if($res==TRUE){
  $_SESSION['posttitle'] = $row['title'];
  $_SESSION['postdescription'] = $row['description'];
  $_SESSION['postimage'] = $row['image'];
    header('location:fetch.php');
}
else{
    echo"post creation unsuccessfull !<br> please retry";
}
mysqli_close($con);


?>
