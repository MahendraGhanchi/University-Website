<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'mahendraghanchi2000@gmail.com';
$email_subject = 'New form Submission';
$email_body =  "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";
                
$to = 'mahendraghanchi2000@gmail.com'
$header = "From: $email_from \r\n";
$header .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("Location: project-1(Contact).html");
?>