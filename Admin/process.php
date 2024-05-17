<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $subject =$_POST["subject"];
    $message = $_POST["message"];
    $to = "itguide49@gmail.com";
    $headers ="Form $email";
    if(mail($to, $subject, $message, $headers)){
        echo "Email Send";
       
     
}else{
    echo "Email Send Fail";
    
        
}
}