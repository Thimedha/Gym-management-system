<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $contact = mysqli_real_escape_string($conn, $_POST['contact']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(name, contact, age, gender, email, password, user_type) VALUES('$name','$contact','$age','$gender','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register form</title>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/Footer_LoginReg.css">
  <link rel="stylesheet" href="CSS/Reg_FormBox.css">
  <link rel="stylesheet" href="CSS/PopUp_button.css">
  <link rel="stylesheet" href="CSS/Navigation.css">

  <link rel="stylesheet" href="CSS/style_about.css">

    
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

    
</head>
<body>
 <!--==Scroll-Progress-bar==============================-->
<div id="progress">
    <span id="progress-value"></span>
</div>
<br>
<!--==Navigation=============-->
<nav class="navigation"> 

<a href="index.php" class="logo" style="background-color: transparent;">
    BODYTONE<span>CENTER</span></a>     
  <li ><a href="abouth_us.php " >About Us</a></li>
  <li><a href="Service.php" >Service</a></li>
  <li><a href="Gallery.php" >Gallery</a></li>
  <li> <a href="contactfrom.php" >Contact Us</a></li>

  <li><a href="register_form.php "style="color: limegreen;">Register</a></li>
  <li><a href="login_form.php">Login</a></li>

  
    
</nav> 
<!--nav-end-->

 <!-- End Navigation Bar==================================================================== -->
 <div class="form-container">

  <form action="" method="post"><br><br>
     <h3 style=" font-size: 25px;">register now</h3>
     <?php
     if(isset($error)){
        foreach($error as $error){
           echo '<span class="error-msg">'.$error.'</span>';
        };
     };
     ?><br>
     <input type="text" name="name" required placeholder="enter your name" style="height:30px;width:90%; font-size: 14px;">
     <input type="contact" name="contact" required placeholder="enter your contact number" style="height:30px;width:90%; font-size: 14px;">
     <input type="age" name="age" required placeholder="enter your age" style="height:30px;width:90%; font-size: 14px;">
     <select name="gender"style="height:45px;width:98%; font-size: 14px;">
        
        <option value="male">male</option>
 
        <option value="female">female</option>
        
     </select>
     <input type="email" name="email" required placeholder="enter your email" style="height:30px;width:90%; font-size: 14px;">
     <input type="password" name="password" required placeholder="enter your password" style="height:30px;width:90%; font-size: 14px;">
     <input type="password" name="cpassword" required placeholder="confirm your password" style="height:30px;width:90%; font-size: 14px;">
     <select name="user_type" hidden>
        <option value="member">member</option>
      
     </select>
     <input type="submit" name="submit" value="register" class="form-btn" style="    font-weight: bolder;">
     <p style=" color: white;;font-size: 16px; margin-left: -30%;">Already have an account? <a href="login_form.php">login now</a></p>
  </form>

</div>


;

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