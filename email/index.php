<?php 

// Sending Text Emails

$to = "jacealex151@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: email@example.com";

if(mail($to, $subject, $message, $headers)) {
    echo "<h1>Email Sent</h1>";
}else { 
    echo "<h1>Email Not Sent</h1>";
}

// https://infinityfree.net 

// Sending HTML emails 
$to = "jacealex151@gmail.com";
$subject = "Test HTML Email";
$message = "<h1>This is a test email.</h1>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: email@example.com" . "\r\n";
$headers .= "Reply-To: email@example.com" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo "<h1>Email Sent</h1>";
}else {
    echo "<h1>Email Not Sent</h1>";
}

// 
