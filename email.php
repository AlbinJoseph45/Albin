<?php
  if (isset($_POST['submit'])) {
    $to = "albin4599@gmail.com";
    $subject = $_POST['fname'] ."send a message on your website";
    $message = $_POST['fname'] . $_POST['lname'] . "from" $_POST['city'] ." (" . $_POST['email'] . ") sent the following message: " . $_POST['message'];
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
  }
?>