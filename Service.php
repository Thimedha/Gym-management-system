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
  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/Footer_about.css">
  <link rel="stylesheet" href="CSS/Navigation.css">

  <link rel="stylesheet" href="CSS/style_about.css">
  <link rel="stylesheet" href="CSS/about_info.css">
  <link rel="stylesheet" href="CSS/about_US_img.css">
  <link rel="stylesheet" href="CSS/Index.css">
  <title>Body Tone Center</title>
</head>
<style>
  .container1 {
  position: relative;
  max-width: 500px; /* Maximum width */
  margin: 0 auto; /* Center it */
  margin-left: 1%;
}

.container1 .content1 {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}
</style>
<body>
  <!--==Scroll-Progress-bar==============================-->
  <div id="progress">
    <span id="progress-value"></span>
  </div>
<br>
  <!--==Navigation=============-->
  <nav class="navigation"> 

<!--logo------------------->
<a href="index.php" class="logo" style="background-color: transparent;">
    BODYTONE<span >CENTER</span></a>     
  <li ><a href="abouth_us.php ">About Us</a></li>
  <li><a href="Service.php" style="color: limegreen;">Service</a></li>
  <li><a href="Gallery.php">Gallery</a></li>
  <li> <a href="contactfrom.php">Contact Us</a></li>
 
  <li><a href="register_form.php ">Register</a></li>
  <li><a href="login_form.php">Login</a></li>


</nav> 
<section class="section__container price__container">
  <h2 class="section__header">OUR SERVICES</h2>
  
  <div class="price__grid">
    <div class="price__card">
      <div class="price__card__content">
   
        <h3>Cardio</h3>
        <img src="Img/services/cardio.png" alt="Notebook" style="width:50%; margin-left: 50%;">
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Smart workout plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Full body workout plan
        </p>
      </div>
    </div>
    <div class="price__card">
      <div class="price__card__content">
      
        <h3>Body Building</h3>
        <img src="Img/services/Bodybuilding.png" alt="Notebook" style="width:50%; margin-left: 25%;">

        <p><br>
          <i class="ri-checkbox-circle-line"></i>
          Profesional GYM plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Equipment Guidence
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Protin and Supliment 
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Full Guidence
        </p>
      </div>
    </div>
    <div class="price__card">
      <div class="price__card__content">
    
        <h3>Personal Traning</h3>
        <img src="Img/services/personal traning.png" alt="Notebook" style="width:50%; margin-left: 50%;">

        <p>
          <i class="ri-checkbox-circle-line"></i>
         Personal Guidence
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Workout plan and Body cut plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Meal plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Advance workout plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Time plan
        </p>
      </div>
     
    </div>
    
  </div>
</section>
<!--==Images========================-->
  
</body>
<br><br><br>
<!--==footer========================-->
<div class="fixed-bottom">
  <footer class="footer-distributed">
    <div class="footer-left">
      <h3><img src="Img/logo.png" alt=""></h3>
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
      <li>
        <h4 style="color: red">Opening Hours</h4>
      </li>
      <h5 style="color: white">Monday - Friday (5.00 AM - 9.00 PM)</h5>
      <h5 style="color: white">Saturday - Sunday (6.00 AM - 10.00 PM)</h5>
      </li>
      <div class="footer-icons">
        <a href="#"><i class="fa-brands fa-facebook" style="color: #0559eb;"></i></a>
        <a href="#"><i class="fa-brands fa-instagram" style="color: #d51038;"></i></i></a>

      </div>
    </div>
  </footer>
</div>
<!--== End footer========================-->

</html>