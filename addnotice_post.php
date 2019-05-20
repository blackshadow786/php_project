<?php
  require_once 'dbcon.php';

  $notice_date=$_POST['notice_date'];
  $notice_title=$_POST['notice_title'];
  $notice_details=$_POST['notice_details'];
   $insert_notice="INSERT INTO `notices`( `notice_date`, `notice_title`, `notice_details`) VALUES ('$notice_date','$notice_title','$notice_details')";

    mysqli_query($dbconnect,$insert_notice);

    $_SESSION['add_success']="Notice Added Successfully!";
   header('location:addnotice.php');
 ?>
