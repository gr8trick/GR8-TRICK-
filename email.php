<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $article = $_POST['article'];
   $to = "rajkumarbgs851211@gmail.com";
   $subject = "Article Submission";
   $message = "Name: ".$name."\n"."Email: ".$email."\n"."Article: ".$article;
   $headers = "From: ".$email;
   mail($to, $subject, $message, $headers);
   echo "The article has been sent successfully";
?>
