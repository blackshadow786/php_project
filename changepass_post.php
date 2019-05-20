<?php
require_once 'dbcon.php';
  //getting data with encription
  $id=$_POST['id'];
  $oldpass=md5($_POST['newpass']);
  $password=md5($_POST['password']);
  $repass=md5($_POST['re_pass']);
  //password matching from database
          if($password==$repass){
          $check_pass="SELECT * FROM `users` WHERE id=$id";
          $result= mysqli_query($dbconnect, $check_pass);
        //making array of data
          $result_check=mysqli_fetch_assoc($result);
          //check matching
          if($result_check['password']==$oldpass){
          //check password and re-entering password
          $changepass="UPDATE users SET password='$password',re_pass='$repass' WHERE id=$id";
          mysqli_query($dbconnect, $changepass);
          //display successfully MessageFormatter
          $_SESSION['status']='yes';
          //rdirecting to dashboard
        header('location:editprofile.php');
    }

      else {
        echo "Your Current Password is incorrect";
        header('location:editprofile.php');
      }

  }
  else {

  header('location:editprofile.php');
  }

 ?>
