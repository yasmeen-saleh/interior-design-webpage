<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>

    <link rel="stylesheet" href="style.css">
    
    <style>
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {
    box-sizing: border-box;
  }
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 12px 12px;
  height: 71px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color:  #181C86;
  color: white;
}

.header-right {
  float: right;
}
.header-left {
  float: left;
}
@media screen and (max-width: 800px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.form-container{
    height: 650px;
    width:1056px ;
   background: rgba(24, 28, 134, 0.60);
box-shadow: 0px 4px 4px 5px rgba(0, 0, 0, 0.25);
    padding:60px 12px;
    margin: 0;
    margin-top: 40px;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  }
  .right{
    float:right;
    display:block;
    padding-right: 120px;
    padding-bottom: 30px;
    margin:0px 10px;
    text-align: left;
   } 
   .left{
    float: left;
    display:block;
    margin: 0px 10px;
    padding-left: 120px;
    padding-bottom: 30px;
    text-align: left;
   }
 /* margin-top:0px; */
   /* .bottom{
   
    display:block;
   align-items:center;
   bottom: 0px;
   position: absolute;
  padding-left: 400px;
  padding-top: 100px;
   } */

   .signuperror{
  color:red;
  font-size:15px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  text-align: center;
  letter-spacing:0.5px;
  font-weight: bold;
}

body {
  background-image: url('pictures/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

label{
  font-family:Arial, Helvetica, sans-serif;
}

button{
  color: #D10004;
}
   
</style>

</head>


<body >
<div class="header" style="padding-left:60px;">
  <a href="#default" class="logo"><img src="pictures/vector 2.png" alt="My DESIGN" width="30px" height="45px" style="padding-bottom: 5px; padding-top:0px; padding-right:0px;"></a>
  <div class="header-left">
  <h2 style="text-align: left; color:black;font-size:15px; margin:0px; padding-top:12px; font-weight: 100;">MY DESIGN</h2>
<h2 style="text-align: left;  color:black;font-size:15px; margin:0px; padding:0px; font-weight: 100;">INTERIOR DESIGN</h2>
  

</div>  
<div class="header-right">
<a  href="index.php"><h2 style="text-align: right;  color:grey; font-size:30px;  font-weight: 200; margin-right:45px; margin-top: 5px;">X</h2></a>

    <!-- <a href="#about">About</a>
    <a href="#customers">Customers</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a> -->
    
  </div>
</div>

<div class="form-container">
<div class="center">
 <h1 class="welcome" style="letter-spacing: 3.5px; text-align:center; margin-top:0px; font-family:Arial, Helvetica, sans-serif;">WELCOME !</h1>
 <h1 class="welcome" style="font-size: 30px; text-align:center; margin-top:10px; font-family:Arial, Helvetica, sans-serif;">SIGN IN</h1>
<h5 class="welcome" style="letter-spacing: 0.5px; text-align:center;  font-size: 16px; margin-top:5px; font-family:Arial, Helvetica, sans-serif;">
A very warm welcome to you! It is lovely to have you among us!</h5>

<?php //outputs error to the user when he is signing up 
if(isset($_GET['error'])){

  if($_GET['error']=="emptyfileds"){ ///error for empty filed
    echo'<p class="signuperror">Please, fill all the fields!</p>';

  }elseif($_GET['error']=="invalidusernamemail"){ ///error if invalid password and username
    echo'<p class="signuperror">Please,enter a valid username and email!</p>';

  }elseif($_GET['error']=="invalidusername"){    ///error if invalid username
    echo'<p class="signuperror">Please, enter a valid username!<br> use [a-zA-Z0-9]*$"</p>';

  }elseif($_GET['error']=="passwordcheck"){ ///error if user entred different password in each field
    echo'<p class="signuperror">You have entered different passwords</p>';

  }elseif($_GET['error']=="usernametaken"){   ///error if passwored is shorter then 8 charcters
    echo'<p class="signuperror">This username already exist!</p>';

  }elseif($_GET['error']=="shortpassword"){   ///error if passwored is shorter then 8 charcters
    echo'<p class="signuperror">Please, enter a longer password! More the 8 charcters</p>';

  }
}
?>
</div>

 <form action="include/signin.inc.php" method="POST" autocomplete="on">
 <div class="left">
 <label class="welcome" for="firstname"style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;">First Name:</label>

 <input  type="text" placeholder="enter your first name..."  name="firstname" id="firstname">

<label class="welcome" for="lastname"style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif; ">
    Last Name:</label>
 
 <input  type="text" placeholder="enter your last name..."  name="lastname" id="lastname">


<label class="welcome" for="email"style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;">
    E-mail:</label>
 
 <input  type="text" placeholder="enter your email..."  name="email" id="email">



 </div>

 <div class="right">
 <label class="welcome" for="username"style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif; ">
    Username:</label>
  
 <input  type="text" placeholder="your username..."  name="username" id="username">





 <label class="welcome" for="password" style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;">Password:</label>

<input type="password" placeholder="enter your password..."  name="password" id="password">

<label class="welcome" for="password" style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;">Confirm Password:</label>

<input type="password" placeholder="rewrite your password..."  name="password-conf" id="password">
 </div>

<br>

<div class="bottom">
  
<!-- 
<input  type="checkbox" id="agree" name="agree" value="agree" style="width: 20px; height: 20px;" checked="checked">
<label for="agree"> I agree to all terms and conditions. </label> -->


<div style= "padding-left: 440px; padding-top: 105px;">
<button  type="submit" name="signin-submit" style="color:#FFF; letter-spacing:2px;">SIGN UP</button>

</div>

 <a href="login.php"><h4 style="text-align: center ; color:#FFF; padding-right:10px; font-family:Arial, Helvetica, sans-serif; ">Already a member?</h4></a>

</div>
 </form>
</div>
</body>
</html>