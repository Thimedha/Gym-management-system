<?php
session_start();

// Check if thank you message session variable is set
if (isset($_SESSION['thank_you_message'])) {
    // Display thank you message using JavaScript
    echo '<script>alert("' . $_SESSION['thank_you_message'] . '");</script>';
    
    // Unset the session variable to avoid displaying the message again on page refresh
    unset($_SESSION['thank_you_message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
<!-- +++ Link Icon===+++ -->
 <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
 <!-- CSS  ============================================ -->
 <link rel="stylesheet" href="CSS/Footer_LoginReg.css">
 <link rel="stylesheet" href="CSS/style.css">
 <link rel="stylesheet" href="CSS/Navigation.css">
 <link rel="stylesheet" href="CSS/contact_Info.css">
<link rel="stylesheet" href="CSS/index_banner.css">
<link rel="stylesheet" href="CSS/Index.css">
<link rel="stylesheet" href="CSS/style_contact.css">

<link rel="stylesheet" href="chatbot/styleBot.css" />
<link rel="stylesheet" href="chatbot/bot.css" />

    <title>Home</title>

</head>
<body>
<!--==Scroll-Progress-bar==============================-->
<div id="progress">
    <span id="progress-value"></span>
</div>

<!--==Navigation=============-->
<nav class="navigation"> 

<a href="index.php" class="logo" style="background-color: transparent;">
    BODYTONE<span>CENTER</span></a>     
  <li ><a href="abouth_us.php " >About Us</a></li>
  <li><a href="Service.php" >Service</a></li>
  <li><a href="Gallery.php" >Gallery</a></li>
  <li> <a href="contactfrom.php" style="color: limegreen;">Contact Us</a></li>

  <li><a href="register_form.php ">Register</a></li>
  <li><a href="login_form.php">Login</a></li>

  
    
</nav> 
<!--nav-end-->
 <!-- End Navigation Bar==================================================================== -->
<div class="row">
  <div class="column">
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.36315046017!2d79.9236956757547!3d6.846996619317943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2517ada2a0d17%3A0x3c8e5da626f813ed!2sBodyTone%20Fitness%20Center%20-%20Maharagama!5e0!3m2!1sen!2slk!4v1714830279378!5m2!1sen!2slk" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
  </div>
  <div class="column">
    <div class="contact-form">
        <h1>contact Us</h1>
    </div>
    <div class="contact-us">
    <form action="contact_info.php" method="post">
        <input type="text" name="name" class="form-control" placeholder="Enter Name" required> <br>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required> <br>
        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required> <br>
        
        <!-- Use textarea for multiline message input -->
        <textarea name="message" class="form-control" placeholder="Enter Message" required></textarea> <br>
        
        <input type="submit" class="form-control submit" value="Submit">
    </form>
</div>

  </div>
</div>   
</body>
<br>
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
</html>