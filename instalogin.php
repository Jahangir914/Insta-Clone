<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}



*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background-color: #fafafa;
  
  
}

main{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.page{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-bottom: 30px;
}

/* header style */
.page .header{
  text-align: center;
}

.page .header .logo, 
.page .header p, 
.page .header button{
  margin-bottom: 15px;
}

.page .header > p{
  font-weight: bold;
  color: #8e8e8e;
  font-size: 18px;
}

.page .header > button{
  width: inherit;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  background-color: #0095f6;
  color: #ffffff;
}

.page .header div{
  display: flex;
  flex-direction: row;
  align-items: center;
  color: #8e8e8e;
}

.page .header div p{
  padding: 0 20px;  
}

.page .header div hr{
  width: 200px;
  
}

/* container style*/
.page .container{
  display: flex;
  flex-direction: column;
}

.page .container form, input{
  width: inherit;
}

.page .container form input{
  border: 1px solid #dbdbdb;
  background-color: #fafafa;
  padding: 10px 5px;
  margin: 5px 0;
}

.page .container form input:last-of-type{
  margin-bottom: 10px;  
}

.page .container form button{
  width: inherit;
  margin-bottom: 20px;
  padding: 7px 20px;
  border-radius: 5px;
  border: none;
  background-color: #0095f6;
  color: #ffffff;
}

.page .container ul{
  list-style: none;
  text-align: center;
  margin-bottom: 10px;
}

.page .container ul li{
  display: inline;
  color: #8e9096;
}

.page .container ul li a{
  text-decoration: none;
  font-weight: bold;
  color: #8e9096;
}

/* option style */
.option p > a{
    text-decoration: none;
    color: #00a0f7;
}

/* otherapps style */
.otherapps{
  text-align: center;
}

.otherapps p{
  margin-bottom: 15px;
}

.otherapps > button{
  cursor: pointer;
  border: none;
  border-radius: 5px;
  background-color: black;
  color: white;
  padding: 10px;
  font-size: 18px;
}

/* footer style */
.footer{
  bottom: 0;
  height: 2.5rem;
  margin-top: 50px;
}

.footer ul{
  text-align: center;
}
.footer ul li{
  display: inline;
  margin-right: 5px;
}
.footer ul li a{
  text-decoration: none;
  font-size: 12px; 
  color: #00376b;
}

.footer p{
  margin: 10px 0;
  text-align: center;
  color: #8e9096;
  font-size: 14px;
}



/* Mobile Styles */

@media only screen and (max-width: 400px) {
    body {
        font-family: Freight Sans
    }
  
  .page{
    width: 250px;
    background-color: #fafafa;
  }
  
  .page .header{
    width: inherit;
    margin-top: 10px;
  }
  
  .page .container{
    width: inherit;
  }
  
  .option{
    margin: 80px 0;
  }
  
  .page .container input{
    padding: 10px 5px;
    margin: 5px 0;
  }
  
  .page .footer{
    width: inherith
  }
}

@media only screen and (min-width: 401px){
    body {
        font-family: Neue Helvetica
    }
  .page{
    border: 1px solid #dbdbdb;
    width: 350px;
    background-color: white;
    margin: 40px 40px 10px 40px;
  }
  
  .page .header{
    width: 270px;
    margin-top: 15px;
  }
  
  .page .container{
    width: 270px;
  }
  
  .option{
    border: 1px solid #dbdbdb;
    background-color: white;
    width: 350px;
    height: 70px;
    margin-top: 20px 0;
    display: flex; 
    align-items: center;
    justify-content: center;
    
  }
  
  .otherapps{
    margin: 20px 0;
  }
  
  .otherapps button{
    margin-right: 5px;
  }
  
  .otherapps button:after-of-type{
    margin-right: none;
  }
  
  .page .footer{
    width: 100%;
  }
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
<main>
  <div class="page">
      <div class="header">
        <h1 class="logo" style='font-family:Brush Script MT, Brush Script Std, cursive; font-size:65px; font-weight:lighter;'>Instagram</h1>
      </div>
      <div class="container">
        <form action="signin.php" method="POST">
          <input type="email" placeholder="Email"  name='Email' required>
          <input type="password" placeholder="Password"  name='Password' required>
          <button>Log in</button>
        </form>
        
        <ul>
          <li><a href="" style='font-size:13px;'>Forgot password?</a></li>
       </ul>
      </div>
  </div>
  <div class="option">
     <p>Don't have an account? <a href="instaregister.php">Sign up</a></p>
  </div>
  <div class="otherapps">
    <p>Get the app.</p>
    <button type="button"><i class="fab fa-apple"></i> App Store</button>
    <button type="button"><i class="fab fa-google-play"></i> Google Play</button>
  </div>
  <div class="footer">
    <ul>
      <li><a href="">ABOUT</a></li>
      <li><a href="">HELP</a></li>
      <li><a href="">PRESS</a></li>
      <li><a href="">API</a></li>
      <li><a href="">JOBS</a></li>
      <li><a href="">PRIVACY</a></li>
      <li><a href="">TEMS</a></li>
      <li><a href="">LOCATIONS</a></li>
      <li><a href="">TOP ACCOUNTS</a></li>
      <li><a href="">HASHTAGS</a></li>
      <li><a href="">LANGUAGE</a></li>
    </ul>
    <p>© 2023 INSTAGRAM</p>
  </div>
</main>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>
