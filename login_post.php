<?php
//starting session;
session_start();
//database connection
require_once 'dbcon.php';
//getting data from input
  $email= $_POST['email'];
  $password= md5($_POST['password']);

  //selsect query for showing data of database
  $check="SELECT COUNT(*) AS nayan,name,id,role FROM users where email='$email' and password='$password'";
  //mysqli query
  $result= mysqli_query($dbconnect, $check);
  $result_check=mysqli_fetch_assoc($result);
  if($result_check['nayan']==1){
      $_SESSION['fullname']=$result_check['name'];
      $_SESSION['id']=$result_check['id'];
      $_SESSION['password']=$result_check['pass'];
        $_SESSION['role']=$result_check['role'];
    header('location:dashboard.php');
  }
  else{
    echo "Sorry!";
  }

 ?>
