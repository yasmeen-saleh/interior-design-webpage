<?php 
session_start(); ///starting the session for the user so he won't be logged out everytime he changes pages

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
    <style>
      body { 
  margin: 0;
  
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

/* .header .active {
  background-color:  #181C86;
  color: white;
} */

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


 
  body, html {
    height: 100%;
}

#Home{
    background-image:url('pictures/background.jpg');
    background-position:100px;
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative
    }

    .hero-container{
      width: 661px;
height: 360px;
flex-shrink: 0;
    padding:60px 12px;
    margin: 0;
    margin-top: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background: rgba(24, 28, 134, 0.60);
  box-shadow: 0px 4px 4px 5px rgba(0, 0, 0, 0.25);

  }

  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
    
  
}

h2{
    text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50);
    font-family:Arial, Helvetica, sans-serif;
    font-size: 40px;
font-style: normal;
font-weight: 300;
line-height: normal;
letter-spacing: 3px;
   }

   p{
    display: flex;
width: 524px;
height: 242px;
flex-direction: column;
flex-shrink: 0;
color: #000;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
font-weight: 100;
line-height: normal;
letter-spacing: 0.5px;
   }

   .pic {
  padding: 20px; 
  width: 280px;
height: 220px;
flex-shrink: 0;
border-radius: 50px;
align-items: center;

}

.shape {
  border-radius: 80px 80px 0px 0px;
  padding: 20px; 
  width: 300px;
height: 450px;

}

.right{
    float:right;
    display:block;
    padding-right: 10px;
    padding-bottom: 20px;
    margin:0px 10px;
    text-align: left;
   } 
   .left{
    float: left;
    display:block;
    margin: 0px 10px;
    padding-left: 20px;
    padding-bottom: 30px;
    text-align: left;
   }


   button{
    width: 120px; 
    height: 34px;
    text-align: center;
     color: white; 
     font-size: 10px;
      font-family: Mulish; 
      font-weight: 400; 
       letter-spacing: 1.5;
      border-radius: 8px;
      border-color: white;
background: #181C86;
box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25);
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* .active, .btn:hover {
  background-color:#181C86;
  color: white;
} */

nav a{
  /* font-size: 25px;
  color: #000;
  text-decoration: none;
  font-weight: 600;
  margin-left: 35px; */
  transition: 1s;
}
nav a:hover,
nav a.active{
color:#181C86;
}

/* header{
  position: fixed;
} */


</style>


</head>

<body>

  <section id="Home">
<div id="Home"class="home">
<div class="hero-container">
<div class="center" ><img src="pictures/whiteLoge.png" width="250px"  height="160px"></div>
<h2 style="text-align: center; color:white;font-size:30px; margin:0px; padding:0px">MY DESIGN</h2>
<h2 style="text-align: center;  color:white;font-size:30px; margin:0px; padding:0px">INTERIOR DESIGN</h2>
</div>
<!-- <header> -->
<div class="header" id="myHeader">

  <a href="#default" class="logo">
    <img src="pictures/vector 2.png" alt="My DESIGN" width="30px" height="45px" style="padding-bottom: 5px; padding-top:0px; padding-right:0px;"></a>
  <div class="header-left">
    <nav>
    <a  class="active " href="#Home">Home</a>
    <a  href="#about" >About</a>
    <a  href="#customers">Customers</a>
    <a  href="#services">Services</a>
    <a  href="#contact">Contact</a>
    </nav>
  </div>

  <div class="header-right">

    <?php
  if(isset($_SESSION['userUid'])){ // if the session is still on the user will see logout button
  echo'<form action="include/logout.inc.php" method="POST">
  <button type="submit" name="logout-submit">Log OUT</button></form>';
  }else{  //// if the session is ended the user will see log in and sign up buttons
    echo'<a href="login.php"><button type="text" style="font-family:Arial, Helvetica, sans-serif;">Log in</button></a>'.
    '<a href="signin.php"><button type="text" style="font-family:Arial, Helvetica, sans-serif;">Sign up</button></a> ';
  }

 
  ?>
   
</div>
<!-- </header> -->
</div>
 </div>
  </section>


 


<!-- <script>
// Add  class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("");
  current[0].className = current[0].className.replace(" ", "");
  this.className += " ";
  });
}
</script> -->

<section id="about">
<div id="about" class="about" style="display:grid;  grid-template-columns: auto auto; padding-top:100px; font-family:Arial, Helvetica, sans-serif;  ">


<div class="left">
  <h2>About Us</h2>
  <p>Jorem ipsum dolor sit amet, consectetur<br>adipiscing elit. 
  vulputate libero<br>et velit interdum, ac aliquet odio mattis.
  <br>
  <br>
Class aptent taciti sociosqu ad litora<br>torquent per conubia nostra,
 per inceptos<br> himenaeos. Class aptent taciti sociosqu ad<br>litora torquent per conubia nostra, 
per<br>inceptos himenaeos.</p>
</div>


<div class="right">
<img src="pictures/all2.png" width="545" height="350">
</div>


</div>

</section>



<section id="services">

<div id="services" class="services">
  <h2 style="text-align: center; padding-top:100px; font-family:Arial, Helvetica, sans-serif;" >SERVICES</h2>
<!-- 
<div style="background: #181C86;" class="shape">
<img src="pictures/design.png" class="pic">
<br>
<h2 style="color: white;"> DESIGN</h2>
</div>
<div style="background: #186586;" class="shape"><img  src="pictures/exec.png"class="pic"></div>
<div style="background: #188686;" class="shape"><img src="pictures/serv.png" class="pic"></div> -->

<img src="pictures/services1.png" width="1030px" height="400px"  style="margin:100px 130px; box-sizing: border-box">
</div>
</section>


<section id="customers">
<div class="customers" id="customers">
<h2 style="text-align: center; padding-top:100px; font-family:Arial, Helvetica, sans-serif;">CUSTOMERS</h2>

<img src="pictures/customers.png" width="1320px" height="400px"  style="margin:100px 10px; box-sizing: border-box">

</div>
</section>

<section id="contact">
<div class="contact" id="contact" style="background-color: #181C86; width:1350px; height:750px; margin:0px" >
<h2  style="text-align: center; padding-top:100px; color:white; font-family:Arial, Helvetica, sans-serif;">CONTACT US</h2>
<img src="pictures/contact.png"  width="1320px" height="366px" style="margin:100px 10px; box-sizing: border-box">
</div>
</section>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<!-- <script>
let sections = document.querySelectorAll('section'); //TODO must add
let navLinks = document.querySelectorAll('header nav a'); //todo must change or make sure 

window.onscroll = () => {
  sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

    if( top >= offset && top < offset + height ) {
      navLinks.forEach(links => {
        links.classList.remove('active');
        document.querySelector('header nav a [href*=' + id + ']').classList.add('active');

      });

    };

  });

};

</script> -->
</body>
</html>