<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "Website Contact Form Submission";
$to = "awwalmudashir2.0@gmail.com";

foreach($_POST as $k => $v){
    $message .= "$k : $v \n";
}

$headers = "From: $email\r\n";
mail($to,$subject,$message,$headers); 
header("location: message.php");
?>



<!-- 
   The mail() function isn't working properly.
   All My tears have been used up. on another love
 -->


