<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

*{
    margin: 10px;
    padding: 0;
    box-sizing: border-box;
}

*:focus{
    outline: none;
}

body{
    width: 100%;
    background: #f8f8f8;
    position: relative;
    font-family: 'roboto', sans-serif;
    margin-top: 30px;
}

.user-profile{
    width: 22px;
    border-radius: 50%;
    background-image: url('./img/profile-pic4.png');
    background-size: cover;
    
}
.post{
    width: 100%;
    height: auto;
    background: #fff;
    border: 1px solid #dfdfdf;
    margin-top: 30px;
}

.info{
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px; 
}

.info .username{
    width: auto;
    font-weight: bold;
    color: #000;
    font-size: 16px;
    margin-left: 10px;
}

.info .options{
    height: 10px;
    cursor: pointer;
}

.info .user{
    display: flex;
    align-items: center;
}

.info .profile-pic{
    height: 40px;
    width: 40px;
    padding: 0;
    background: none;
}

.info .profile-pic img{
    border: none;
}

.post-image{
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.post-content{
    width: 100%;
    padding: 20px;
}

.likes{
    font-weight: bold;
}

.description{
    margin: 10px 0;
    font-size: 14px;
    line-height: 20px;
}

.description span{
    font-weight: bold;
    margin-right: 10px;
}

.post-time{
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
}

.comment-wrapper{
    width: 100%;
    height: 50px;
    border-radius: 1px solid #dfdfdf;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.comment-wrapper .icon{
    height: 30px;
}

.comment-box{
    width: 80%;
    height: 100%;
    border: none;
    outline: none;
    font-size: 14px;
}

.comment-btn,
.action-btn{
    width: 70px;
    height: 100%;
    background: none;
    border: none;
    outline: none;
    text-transform: capitalize;
    font-size: 16px;
    color: rgb(0, 162, 255);
    opacity: 0.5;
}

.reaction-wrapper{
    width: 100%;
    height: 50px;
    display: flex;
    margin-top: -20px;
    align-items: center;
}

.reaction-wrapper .icon{
    height: 25px;
    margin: 0;
    margin-right: 20px;
}

.reaction-wrapper .icon.save{
    margin-left: auto;
}
.main{
    width: 100%;
    padding: 50px 0;
    display: flex;
    justify-content: center;
    margin-top: -20px;
}

.wrapper{
    width: 70%;
    max-width: 1000px;
    display: grid;
    grid-template-columns: 60% 40%;
    grid-gap: 30px;
}

.profile-pic img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #fff;
}

.username{
    width: 100%;
    overflow: hidden;
    text-align: center;
    font-size: 12px;
    margin-top:5px;
    color: rgba(0, 0, 0, 0.5)
}
.sub-text{
            color: rgba(0, 0, 0, 0.5);
            font-size:12px;
            font-weight: 500;
            margin-top: 5px;

        }
        

@media (max-width: 1100px){
    .right-col, .search-box{
        display: none;
    }
    .nav-wrapper,
    .wrapper{
        width: 90%;
    }
    .wrapper{
        display: block;
    }
}
.logout{
    border:5px;
    border-radius: 20px;
    padding:8px;
    font-size:20px;
    text-decoration:none;
    margin-left:620px;
    background:purple;
    color:white;
    
}
.logout:hover{
    color:black;
    background:orange;
    transition:0.5s;
}


</style>

</head>
<body>
<?php 
    include("database.php");
    $postuser=$_SESSION['name'];
    $qry = "SELECT * FROM insta_post WHERE user_name='$postuser'";
    $res = mysqli_query($con , $qry);
    mysqli_close($con);
?>
<h1 style=' font-weight:bold; font-size:50px; text-align:center; font-family:Brush Script MT, Brush Script Std, cursive;'>Posts By <?php echo $_SESSION['name'];?></h1>
<br>
<a class='logout' href="profile.php">Back to profile</a>
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
                        <h1 class="username"><?php echo $_SESSION['name']; ?> <p class="sub-text"><?php echo"@".$_SESSION['username'];?></p> </h1>
                        
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
                    <!-- <img src="img/smile.PNG" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment"> -->
                    <a class='btn btn-success' href="editpost.php?id=<?php echo $row['post_id']; ?>">Edit</a>
                    <a class='btn btn-danger' href="deletepost.php?id=<?php echo $row['post_id']; ?>" >Delete</a>

                </div>
                </div>
            <?php
            }
            ?>        
            </div>
        </div>
    
    
</section>