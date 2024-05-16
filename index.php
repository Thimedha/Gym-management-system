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
 <link rel="stylesheet" href="CSS/Footer_index.css">
 <link rel="stylesheet" href="CSS/style.css">
 <link rel="stylesheet" href="CSS/Navigation.css">
 <link rel="stylesheet" href="CSS/PopUp_button.css">
<link rel="stylesheet" href="CSS/PopUp_button.css">
<link rel="stylesheet" href="CSS/index_banner.css">
<link rel="stylesheet" href="CSS/Index.css">
<link rel="stylesheet" href="CSS/Popup_Video.css">

<link rel="stylesheet" href="chatbot/styleBot.css" />
<link rel="stylesheet" href="chatbot/bot.css" />
<link rel="stylesheet" href="BMI/bmi.css"/>

    <title>Home</title>

</head>
<body>
  


  <!--==Scroll-Progress-bar==============================-->
  <div id="progress">
    <span id="progress-value"></span>
</div>

<!--==Navigation=============-->
<nav class="navigation"> 

    <!--logo------------------->
    <a href="index.php" class="logo" style="background-color: transparent;">
        BODYTONE<span>CENTER</span></a>     
      <li ><a href="abouth_us.php">About Us</a></li>
      <li><a href="Service.php">Service</a></li>
      <li><a href="Gallery.php">Gallery</a></li>
      <li> <a href="contactfrom.php">Contact Us</a></li>
     
      <li><a href="register_form.php ">Register</a></li>
      <li><a href="login_form.php">Login</a></li>
     
  
    
</nav> 

 <!-- Chatbot==================================================================== -->
 <div>
    <img class="open-button" onclick="openForm()" src="chatbot/2.png"></img>

<div class="form-popup" id="myForm">
<div>
</div>

  <form class="form-contain">

    <div id="contain" class="contain"></div>
      <img  class="close-button" onclick="closeForm()" src="chatbot/close.gif" ></img>
    
      <h1 style="color: white; margin-left: 30%; margin-top: 3%;"><b>Chat Bot</b></h1><br>
        <div id="chat" class="chat">
            <div id="messages" class="messages" style="width: 100%;"></div>
            <div>
            
              <input style="width: 100%;font-size: 16px;color: white;" id="input" type="text" placeholder="Say something..." autocomplete="off" autofocus="true" />
            </div>
            
        </div>
    </div>
        <input id="input" type="text" autocomplete="off" autofocus="true" hidden />
  </form>
</div>
</div>

<!-- End ==================================================================== -->

<!--nav-end-->
 <!-- End Navigation Bar==================================================================== -->
 <!--chatbot----------------------------------------------------------------------->
   
     
 
<!--\-end-->
 <!-- End r==================================================================== -->
 <section class="gym-banner">

  <!--==img===================-->
  <div class="m-banner-img">
      <img src="Img/banner.jpg" alt="">

  </div>
  
 </section>  
 <header class="section__container header__container" >
  <div class="header__content" >
    <span class="bg__blur"></span>
    <span class="bg__blur header__blur"></span>
    <h4>BEST FITNESS IN THE TOWN</h4>
    <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
    <p>
      Unleash your potential and embark on a journey towards a stronger,
      fitter, and more confident you. Sign up for 'Make Your Body Shape' now
      and witness the incredible transformation your body is capable of!
    </p>
    <!--===============BMI Calculator==================-->
    <div class="con-box">
            <h2 style="color:white">BMI Calculator</h2><br>

            <p>Height (cm)</p>
            <input type="number" id="height" style="background-color:white">

            <p>Weight (kg)</p>
            <input type="number" id="weight" style="background-color:white">

            <button id="btn">Calculate</button>

            <div id="result" style="color:red"></div>
        </div>

<!--Video/fiull-Movie**************************-->
<div id="play" class="play">
    <!--close-btn--->
    <a href="javascript:void" class="close-video">
        <i class="fa fa-times"></i>
    </a>
    <!--Movie------->
    <div class="play-video">
        <video id="m-video" controls>
            <source src="Video/BodyTone - Maharagama - Facebook.mp4" type="">
        </video>
    </div>
</div>



</div>
  </div>
  <div class="header__image">
    <img src="Img/Index/header.png" alt="header" />
  </div>
  
   <!--play-btn********************************-------->
   <div class="play-btn-container" style="margin-left: 100%;margin-top: -40%;">
    <div class="play-btn">
        <a href="javascript:void">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>
</header>
<section class="section__container explore__container">
  <div class="explore__header">
    <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
  </div>
  <div class="explore__grid">
    <div class="explore__card">
      <span><i class="ri-boxing-fill"></i></span>
      <h4>Strength</h4>
      <p>
        Embrace the essence of strength as we delve into its various
        dimensions physical, mental, and emotional.
      </p>
      <a href="register_form.php">Join Now <i class="ri-arrow-right-line"></i></a>
    </div>
    <div class="explore__card">
      <span><i class="ri-heart-pulse-fill"></i></span>
      <h4>Physical Fitness</h4>
      <p>
        It encompasses a range of activities that improve health, strength,
        flexibility, and overall well-being.
      </p>
      <a href="register_form.php">Join Now <i class="ri-arrow-right-line"></i></a>
    </div>
    <div class="explore__card">
      <span><i class="ri-run-line"></i></span>
      <h4>Fat Lose</h4>
      <p>
        Through a combination of workout routines and expert guidance, we'll
        empower you to reach your goals.
      </p>
      <a href="register_form.php">Join Now <i class="ri-arrow-right-line"></i></a>
    </div>
    <div class="explore__card">
      <span><i class="ri-shopping-basket-fill"></i></span>
      <h4>Weight Gain</h4>
      <p>
        Designed for individuals, our program offers an effective approach
        to gaining weight in a sustainable manner.
      </p>
      <a href="register_form.php">Join Now <i class="ri-arrow-right-line"></i></a>
    </div>
  </div>
</section>

<section class="section__container class__container">
  <div class="class__image">
    <span class="bg__blur"></span>
    <img src="Img/Index/class-1.jpg" alt="class" class="class__img-1" />
    <img src="Img/Index/class-2.jpg" alt="class" class="class__img-2" />
  </div>
  <div class="class__content">
    <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
    <p>
      Led by our team of expert and motivational instructors, "The Class You
      Will Get Here" is a high-energy, results-driven session that combines
      a perfect blend of cardio, strength training, and functional
      exercises. Each class is carefully curated to keep you engaged and
      challenged, ensuring you never hit a plateau in your fitness
      endeavors.
    </p>
    <!-- <button class="btn">Appointment</button> -->
  </div>
</section>

<section class="section__container join__container">
  <h2 class="section__header">WHY JOIN US ?</h2>
  <p class="section__subheader">
    Our diverse membership base creates a friendly and supportive
    atmosphere, where you can make friends and stay motivated.
  </p>
  <div class="join__image">
    <img src="Img/Index/join.jpg" alt="Join" />
    <div class="join__grid">
      <div class="join__card">
        <span><i class="ri-user-star-fill"></i></span>
        <div class="join__card__content">
          <h4>Personal Trainer</h4>
          <p>Unlock your potential with our expert Personal Trainers.</p>
        </div>
      </div>
      <div class="join__card">
        <span><i class="ri-vidicon-fill"></i></span>
        <div class="join__card__content">
          <h4>Practice Sessions</h4>
          <p>Elevate your fitness with practice sessions.</p>
        </div>
      </div>
      <div class="join__card">
        <span><i class="ri-building-line"></i></span>
        <div class="join__card__content">
          <h4>Good Management</h4>
          <p>Supportive management, for your fitness success.</p>
        </div>
      </div>
    </div>
  </div>
</section><br><br>

<section class="section__container price__container">
  <h2 class="section__header">OUR PRICING PLAN</h2>
  <p class="section__subheader">
    Our pricing plan comes with various membership tiers, each tailored to
    cater to different preferences and fitness aspirations.
  </p>
  <div class="price__grid">
    <div class="price__card">
      <div class="price__card__content">
        <h4>Basic Plan </h4>
        <h3>RS: 30,000</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Smart workout plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          At home workouts
        </p>
      </div>
      <a class='btn price__btn' href='register_form.php' ><b style="margin-left:45% ;">Join Now</b></a>
    </div>
    <div class="price__card">
      <div class="price__card__content">
        <h4>Monthly Plan</h4>
        <h3>Rs: 3,000</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          PRO Gyms
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Smart workout plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          At home workouts
        </p>
      </div>
      <a class='btn price__btn' href='register_form.php' ><b style="margin-left:45% ;">Join Now</b></a>
    </div>
    <div class="price__card">
      <div class="price__card__content">
        <h4>Anual Plan</h4>
        <h3>Rs: 45,000</h3>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          ELITE Gyms & Classes
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          PRO Gyms
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Smart workout plan
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          At home workouts
        </p>
        <p>
          <i class="ri-checkbox-circle-line"></i>
          Personal Training
        </p>
      </div>
      
      <a class='btn price__btn' href='register_form.php' ><b style="margin-left:45% ;">Join Now</b></a>
    </div>
  </div>
</section>


<!--==jQuery========================-->
<

<script src="js/jQuery.js"></script>
     <script>
     /*--menu-btn-fixed-when-scroll===========*/
   $(window).scroll(function(){
        if($(document).scrollTop() > 20){
            $('.navigation').addClass('fix-icon')
        }
        else{
            $('.navigation').removeClass('fix-icon')
        }
   });  
   
    /*==popup-open================================*/
    $(document).on('click','.play-btn a',function(){
        $('.play').addClass('active-popup'); 
   });
   /*==popup-closse================================*/
   $(document).on('click','.close-video',function(){
        $('.play').removeClass('active-popup'); 
   });
/*==auto-play-when-popup-open=====================*/
   $('.play-btn a').click(function(){
        $('#m-video')[0].play();
   });
/*==Close-video-when-poppup-close============*/
    $('.close-video').click(function(){
        $('#m-video')[0].pause();
   });


   function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
     </script>

<script type="text/javascript" src="chatbot/index.js" ></script>
<script type="text/javascript" src="constants.js" ></script>
<script type="text/javascript" src="chatbot/speech.js" ></script>
<script src="BMI/bmi.js"></script>
</body>


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