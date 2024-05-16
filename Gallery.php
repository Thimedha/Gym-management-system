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

  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/Footer_about.css">
  <link rel="stylesheet" href="CSS/Navigation.css">
  <link rel="stylesheet" href="CSS/gallery.css">




  <title>Body Tone Center</title>
</head>


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
    BODYTONE<span>CENTER</span></a>     
  <li ><a href="abouth_us.php " >About Us</a></li>
  <li><a href="Service.php" >Service</a></li>
  <li><a href="Gallery.php" style="color: limegreen;">Gallery</a></li>
  <li> <a href="contactfrom.php">Contact Us</a></li>

  <li><a href="register_form.php ">Register</a></li>
  <li><a href="login_form.php">Login</a></li>


</nav> 
<!-- Images used to open the lightbox -->
<br><br>
<h1 style="color: white;margin-left: 50%;">Gallery</h1>
<br><br>
<div class="row">
  <div class="column" >
    <img src="Img/5.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" >
  </div>
  <div class="column">
    <img src="Img/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow" >
  </div>
  <div class="column">
    <img src="Img/4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  
  <div class="column">
    <img src="Img/6.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/7.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/8.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/9.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/10.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/11.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/12.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="Img/13.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow">
  </div>
 
 
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 13</div>
      <img src="Img/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 13</div>
      <img src="Img/2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 13</div>
      <img src="Img/3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 13</div>
      <img src="Img/4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 13</div>
      <img src="Img/6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 13</div>
      <img src="Img/7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 13</div>
      <img src="Img/8.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 13</div>
      <img src="Img/9.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 / 13</div>
      <img src="Img/10.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">10 / 13</div>
      <img src="Img/11.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">11 / 13</div>
      <img src="Img/12.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">12 / 13</div>
      <img src="Img/13.jpg" style="width:100%">
    </div>
  

  

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)" >&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>


   

    

  </div>
</div>





</body>
<script src="js/gallery.js"></script>

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