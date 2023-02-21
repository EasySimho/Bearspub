<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $message = $_POST['message'];

  $to = "s.benanchietti.yt@gmail.com";
  $subject = "New Reservation Request";
  $body = "Name: $name\nEmail: $email\nPhone: $phone Date: $date\nTime: $time\nMessage: $message";

  if(mail($to, $subject, $body)) {
  $success = "Thank you for your reservation request! We will get back to you soon.";
  } else {
  $error = "There was an error sending your message. Please try again.";
  }
  }
  
  ?>
