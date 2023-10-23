<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include('database.php');
$sid = $_REQUEST['id'];

$qry = "select * from insta_post where `post_id` = '$sid'";
$res = mysqli_query($con,$qry);
$row = mysqli_fetch_array($res);

?>

<!-- "FORM FOR UPDATING INFO" -->

<div class="container mt-3">
  <h2>EDIT YOUR POST</h2>
  <form action="updatepost.php" method="post" enctype="multipart/form-data">
    
    <div class="mb-3">
      <label>ID:</label>
      <input type="text" class="form-control" value="<?php echo $row['post_id']; ?>" name='postid'>
    </div>

    <div class="mb-3">
      <label>Post Title</label>
      <input type="text" class="form-control" value="<?php echo $row['title']; ?>" name='posttit'>
    </div>
    <div class="mb-3">
      <label>Post Descrition</label>
      <textarea name="postdesc" class="form-control" rows="5"><?php echo $row['description'];?></textarea>
      <!-- <input type="text" class="form-control" rows='5' value="" name='postdesc'> -->
    </div>

    <div class="mb-3">
      <label>Image</label>
      <input type="text" class="form-control" value="<?php echo $row['image']; ?>" disabled><br>
      <input type="file" class="form-control" value="" name='postpic'>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>

  </form>
</div>  
</body>
</html>