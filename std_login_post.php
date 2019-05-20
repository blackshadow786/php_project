<?php
//starting session;
session_start();
//database connection
require_once 'dbcon.php';
//getting data from input
  $email= $_POST['email'];
  $password= md5($_POST['password']);

  //selsect query for showing data of database
  $check="SELECT COUNT(*) AS student,name,id FROM students where email='$email' and password='$password'";
  //mysqli query
  $result= mysqli_query($dbconnect, $check);
  $result_check=mysqli_fetch_assoc($result);
  if($result_check['student']==1){
      $_SESSION['std_name']=$result_check['name'];
      $_SESSION['id']=$result_check['id'];
      $_SESSION['status']=$result_check['status'];
    header('location:index.php');
  }
  else{
    echo "Sorry!";
  }

 ?>
