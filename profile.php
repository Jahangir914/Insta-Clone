<?php
session_start();
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style/profilestyle.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
    include("database.php");
    $qry = "Select * from `insta-users`";
    $res = mysqli_query($con , $qry);
    mysqli_close($con);  
?>
<header>
   <div class="container">
      <div class="profile">
         <div class="profile-image">
            <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=cars" alt="">
         </div>
         <div class="profile-user-settings">
            <h1 class="profile-user-name"><?php echo $_SESSION['name'];?></h1>
            <a class='myposts' href="showpost.php">My Posts</a>
            <a href="logout.php"><button class="btn profile-edit-btn">Logout</button></a>
            
            <!-- <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button> -->
         </div>
         <div class="profile-stats">
            <ul>
               <li><span class="profile-stat-count">164</span> posts</li>
               <li><span class="profile-stat-count">188</span> followers</li>
               <li><span class="profile-stat-count">206</span> following</li>
            </ul>
         </div>
         <div class="profile-bio">
            <p><span class="profile-real-name">Jane Doe</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit </p>
         </div>
      </div>
      <!-- End of profile section -->
   </div>
   <!-- End of container -->
</header>

<main>
    <h1 class="heading">Create Post</h1>
    
<div class="container">
    <div class="createpost">
  <!-- Trigger the modal with a button -->  
    <button type="button" class="btn" data-toggle="modal" data-target="#myModal"><img src="img/add.png" alt="xx"></button>
    </div>
  
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Post</h4>
        </div>
        <div class="modal-body">
        <form action="createpost.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            
            <!-- title -->
            <label for="">Title</label>
            <input type="text" class='form-control' name='post_title' autocomplete required><br>
            
            <!-- description -->
            <label for="">Description</label>
            <textarea name="post_desc" class="form-control" rows="5"></textarea><br>

            <!-- post-image -->
            <label for="">Post Image</label>
            <input type="file" name='post_img'><br>
            </div>
            <button class='btn-primary'  value='submit'>Post</button>
        </form>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
   <!-- <div class="container">
      <div class="gallery">
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1502630859934-b3b41d18206c?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 38</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1498471731312-b6d2b8280c61?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1515023115689-589c33041d3c?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 94</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 3</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 52</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 4</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1515814472071-4d632dbc5d4a?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 66</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1511407397940-d57f68e81203?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 45</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1518481612222-68bbe828ecd1?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 34</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1505058707965-09a4469a87e4?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 41</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
               </ul>
            </div>
         </div>
         <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1423012373122-fff0a5d28cc9?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-type">
               <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>
            </div>
            <div class="gallery-item-info">
               <ul>
                  <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 30</li>
                  <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
               </ul>
            </div>
         </div>
      </div>
       End of gallery -->
      <!-- <div class="loader"></div>
   </div> --> 
   <!-- End of container -->

</main>
</body>
</html>