<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];

  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";

  mail($to, $subject, $message, $headers);
}

?>
