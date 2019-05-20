<?php
//starting session;
session_start();
//checking isset name or email is exist
if(!isset($_SESSION['fullname'])){
  header('location:login.php');
}

 ?>
