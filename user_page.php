<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User form</title>
 
    
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">   
<link 
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,500;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/search?q=facebook&o=r">
    <!--==Import-poppins-font================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <!--==Import Monoton-font================-->
     <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Playfair+Display:ital,wght@0,700;0,800;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
  <!-- custom css file link  -->
   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/style.css"> 
   <link rel="stylesheet" href="CSS/Footer_User.css">

   <link rel="stylesheet" href="CSS/Navigation.css">


</head>
<body>
    <!--==Scroll-Progress-bar==============================-->
  <div id="progress">
    <span id="progress-value"></span>
</div>

<!--==Navigation=============-->
<nav class="navigation"> 

    <!--menu-btn------------->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
    </label>

    <!--logo------------------->
    <a href="index.php" class="logo">
        BODYTONE<span>CENTER</span>
    </a>

    <!--menu------------------->
    <ul class="menu">
        <li><a href="# ">Home</a></li> 
        <li><a href="# ">Genre</a></li>
        <li><a href="# ">TV Shows</a></li>
        <li><a href="Movies.html">Movies</a></li>
        <li><a href="Contact Us.html">Contact</a></li>

    </ul>

   
  
</nav>
<div class="container">

   <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <a href="logout.php" class="btn">logout</a>
   </div>
</div>
    

    
<!--nav-end-->
 <!-- End Navigation Bar==================================================================== -->

     <!-- Start Slide ICON====================================================================== -->
     <div class="sidebar">
        <i  href="#" class="left-menu-icon fa-solid fa-magnifying-glass" title="Search"></i>
        <i class="left-menu-icon fa-solid fa-house-chimney" title="Home"></i>
        <i class="left-menu-icon fa-solid fa-users" title="User"></i>
        <i class="left-menu-icon fa-solid fa-bookmark" title="Search"></i>
        <i class="left-menu-icon fa-solid fa-tv"></i>
        <i class="left-menu-icon fa-solid fa-hourglass-start"></i>
        <i class="left-menu-icon fa-solid fa-cart-shopping"></i>
     </div> 
     <!-- End Slide ICON======================================================================= -->


     
<!--==footer========================-->
<div class="fixed-bottom">
  <footer class="footer-distributed">
        <div class="footer-left">
          <h3><img src="Img/logo.png"  alt=""></h3>       
        </div>
        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>134/B High Level Rd,</span> Maharagama 10280, Maharagama</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p>+94 77 985 1183</p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">info@bodytonecenter.com</a></p>
          </div>
        </div>
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About the Center</span>
            typically, exercise is one of the best way to keep a person healthy. hence, no matter how busy you.
          </p>
          <li ><h4  style="color: red" >Opening Hours</h4></li>
          <h5 style="color: white">Monday - Friday (5.00 AM - 9.00 PM)</h5>
          <h5 style="color: white">Saturday - Sunday (6.00 AM - 10.00 PM)</h5></li>
          <div class="footer-icons">
            <a href="#"><i class="fa-brands fa-facebook" style="color: #0559eb;"></i></a>
            <a href="#"><i class="fa-brands fa-instagram" style="color: #d51038;"></i></i></a>
        
          </div>
        </div>
      </footer>
    </div>
  <!--== End footer========================-->

     <script src="app.js"></script>

</body>
</html>     