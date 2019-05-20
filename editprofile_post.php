<?php
require_once 'dbcon.php';
  session_start();
  $id=$_POST['id'];
  $name=$_POST['name'];


  $update="UPDATE users SET name='$name' WHERE id=$id ";
  mysqli_query($dbconnect,$update);
  $_SESSION['fullname']=$name;
  $_SESSION['status']='yes';
  header('location:editprofile.php');

 ?>
