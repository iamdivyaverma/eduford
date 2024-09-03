<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form ='info@divya.com';
$email_subject ='New form submission';
$email_body ="user name: $name.\n".
             "user email: $visitor_email.\n". 
             "subject: $subject.\n". 
             "message: $message.\n";

    
 $to = 'gudduver888@gmail.com';

 $headers ="form: $email_form \r\n";

 $headers .="reply to: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 headers("location: contact.html");
             
?>