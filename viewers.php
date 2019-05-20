<?php
  require_once 'dbcon.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $insert="INSERT INTO `viewers`( `name`, `email`, `subject`, `message`) VALUES('$name','$email','$subject','$message')";
  mysqli_query($dbconnect,$insert);
  $_SESSION['success']="Thank you for your Feedback";
  header('location:contactus.php');

 ?>
