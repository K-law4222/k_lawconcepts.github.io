<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "officialklawphotography@gmail.com";
$email_subject = "New Form Submission";
$EMAIL_BODY = "User Name: $name.\n".
  "User Email: $visitor_email.\n".
  "User Message: $message.\n";

$to ="officialklawphotography@gmail.com";
$headers = "From: $email_from\r\n;
mail($to, $email_subject,$email_body,$headers);
header("Location:")

?>
