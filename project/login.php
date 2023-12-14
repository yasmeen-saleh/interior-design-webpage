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
.header-left {
  float: left;
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
    height: 480px;
    width:1056px ;
    background: rgba(24, 28, 134, 0.60);
box-shadow: 0px 4px 4px 5px rgba(0, 0, 0, 0.25);
    padding:5px 12px;
    margin: 0;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  }
   .right{
    float:right;
    display:block;
    padding: 30px 25px;
    margin: 20px 10px;
    text-align: left;
   } 
   .left{
    float: left;
    display:block;
    padding:12px 20px;
    margin: 20px 0;
   }  

   .signuperror{
  color: #f34040;
  font-size:15px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  letter-spacing:0.5px;
}
 
body {
  background-image: url('pictures/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
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
<a  href="index.php"><h2 style="text-align: right;  color:grey; font-size:30px; margin:0px; font-weight: 200; padding-right:45px; padding-top: 5px;">X</h2></a>

    <!-- <a href="#about">About</a>
    <a href="#customers">Customers</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a> -->
    
  </div>
</div>

<!-- <div class="header">
  <a href="#default" class="logo"><img src="pictures/vector 2.png" alt="My DESIGN" width="30px" height="45px" style="padding-bottom: 5px; padding-top:0px; padding-right:0px;"></a>
  <div class="header-right">
    <a   href="index.php">Home</a>
    <a href="#about">About</a>
    <a href="#about">Customers</a>
    <a href="#about">Services</a>
    <a href="#contact">Contact</a>
    
  </div>
</div> -->
<div class="form-container">
<div class="left">
 <h1 class="welcome" style="letter-spacing: 3.5px; font-family:Arial, Helvetica, sans-serif;">WELCOME !</h1>
<p class="welcome"  style="font-size: 25px; color:#FFF; letter-spacing:2px; font-family:Arial, Helvetica, sans-serif; ">We are really happy to welcome you<br> back here.
 Hope we will<br> have a great time.</p>
</div>
<div class="right">
 <form action="include/login.inc.php" method="POST" autocomplete="on">

    <h1 class="welcome" style="font-size: 30px; font-family:Arial, Helvetica, sans-serif; text-align: center ; ">LOG IN</h1>

    <?php //outputs error to the user when he is signing up 
if(isset($_GET['error'])){

  if($_GET['error']=="emptyfileds"){ ///error for empty filed
    echo'<p class="signuperror">Please, fill all the fields!</p>';

  }elseif($_GET['error']=="wrongpassword"){ ///error if invalid password and username
    echo'<p class="signuperror">Wrong password!</p>';

  }elseif($_GET['error']=="wrongpass"){    ///error if invalid username
    echo'<p class="signuperror">Wrong password!</p>';}}

    ?>

    <label class="welcome" for="username"style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif;">
    Username/E-mail:</label>
 <input  type="text" placeholder="enter your username or E-mail..."  name="username" id="username">
<br>
<br>
 <label class="welcome" for="password" style="font-size: 16px; letter-spacing:1px; font-family:Arial, Helvetica, sans-serif; ">Password:</label>

<input type="password" placeholder="enter your password..."  name="password" id="password">
<br>
<br>
<button type="submit" name="login-submit" style="color:#FFF; letter-spacing:2px; margin-left: 67px; font-family:Arial, Helvetica, sans-serif;">LOG IN</button>

 </form>

 <a href="signin.php"><h4 style="text-align: center ; color:#FFF; font-family:Arial, Helvetica, sans-serif; ">Not a member yet?</h4></a>
</div>
</div>
</body>
</html>