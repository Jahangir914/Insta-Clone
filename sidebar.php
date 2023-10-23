<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .right-col{
    padding: 20px;
}

.profile-card{
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.profile-card .profile-pic{
    flex: 0 0 auto;
    padding: 0;
    background: none;
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.profile-card:first-child .profile-pic{
    width: 70px;
    height: 70px;
}

.profile-card .profile-pic img{
    border: none;
}

.profile-card .username{
    font-weight: 500;
    font-size: 14px;
    color: #000;
}

.sub-text{
    color: rgba(0, 0, 0, 0.5);
    font-size:12px;
    font-weight: 500;
    margin-top: 5px;
}

.action-btn{
    opacity: 1;
    font-weight: 700;
    font-size: 12px;
}

.suggestion-text{
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    font-weight: 700;
    margin: 20px 0;
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

@media (max-width: 500px){
    .nav-items .icon{
        margin: 0 5px;
    }
    .post-image{
        height: 300px;
    }
}
</style>
</head>
<body>
    
        <div class="right-col">
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/profile-pic.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">kunaal kumar</p>
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
</body>
</html>