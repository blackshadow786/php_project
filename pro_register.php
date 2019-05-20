<?php
require_once 'dbcon.php';
//Variable declaration
  $pr_name=$_POST['name'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  //password encription
  $pass=md5($_POST['password']);
  $repass=md5($_POST['re_password']);
    //building select query
$check_email_query="SELECT COUNT(*) as email_check  FROM users where email='$email'";
  //mysqli_query building
$count_email=mysqli_query($dbconnect,$check_email_query);
//making associative array
$sum=mysqli_fetch_assoc($count_email);
//check out the condition
if($sum['email_check']==1){
  $wrng="Sorry! You can't use this email.";
  echo $wrng;
}
else{
  //mysql insert query
  $insert="INSERT INTO `users`( `name`, `email`, `password`, `re_pass`,`role`) VALUES ('$pr_name','$email','$pass','$repass',$role)";
  if($pass==$repass){
    mysqli_query($dbconnect,$insert);
     header('location:login.php');
  }
  else{
    echo "Password doesn't match!";
  }
}

 ?>
