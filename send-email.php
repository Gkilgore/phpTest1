<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";

  mail($to, $subject, $message, $headers);
}

?>