<?php
include('header.php');
session_start();
?>
<?php
include('stories.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style/fetchstyle.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>

<body>

<?php 
    include("database.php");
    // $postuser=$_SESSION['name'];
    $qry = "SELECT * FROM insta_post";
    $res = mysqli_query($con , $qry);
    mysqli_close($con);
?>
    

<div class="right-col">
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="./img/profile-pic4.png">
                </div>
                <div>
                    <a href="profile.php" style="text-decoration:none;"><p class="username"><?php echo $_SESSION['name'];?></p></a>
                    <p class="sub-text"><?php echo"@".$_SESSION['username']; ?></p>
                </div>
                <button class="action-btn">switch</button>
            </div>
            <p class="suggestion-text">Suggestions for you</p>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 9.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 10.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 11.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 12.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 13.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
        </div>

<!-- post -->
<section class="main">
    <div class="wrapper">
        <div class="left-col">
        <?php
        while($row = mysqli_fetch_array($res))
        {
        ?>
            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/cover 1.png" alt=""></div>
                        <h1 class="username"><?php echo $row['user_name']; ?><p class="sub-text"><?php echo"@".$row['user_username'];?></p> </h1>
                        
                    </div>
                    <img src="img/option.PNG" class="options" alt="">
                </div>
                
                <img src="uploaded-images/<?php echo $row['image']; ?>" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="img/like.PNG" class="icon" alt="">
                        <img src="img/comment.PNG" class="icon" alt="">
                        <img src="img/send.PNG" class="icon" alt="">
                        <img src="img/save.PNG" class="save icon" alt="">
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span><?php echo $row['title']; ?></span><?php echo $row['description']; ?></p>
                    <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment">
                    <button class="comment-btn">post</button>
                </div>
                </div>
            <?php
            }
            ?>        
            </div>
        </div>
    
    
</section>

<!-- <section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/cover 1.png" alt=""></div>
                        <h1 class="username">Michael jackson<p class="sub-text"> @michaeljackson </p> </h1>
                        
                    </div>
                    <img src="img/option.PNG" class="options" alt="">
                </div>
                
                <img src="img/cover 1.png" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="img/like.PNG" class="icon" alt="">
                        <img src="img/comment.PNG" class="icon" alt="">
                        <img src="img/send.PNG" class="icon" alt="">
                        <img src="img/save.PNG" class="save icon" alt="">
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>New Song release</span>Hello Iam Michael jackson <br> This is my new song</p>
                    <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment">
                    <button class="comment-btn">post</button>
                </div>
                </div>        
            </div>
        </div>
    
    
</section> -->


</body>
</html>