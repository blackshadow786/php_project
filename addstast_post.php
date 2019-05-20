<?php
  require_once 'dbcon.php';

  $fontawesome_name=$_POST['awesome_name'];
  $statname=$_POST['statname'];
  $amount=$_POST['amount'];
   $insert_stat="INSERT INTO `stats`( `awesome_name`,`statname`, `amount`) VALUES ('$fontawesome_name','$statname',$amount)";

    mysqli_query($dbconnect,$insert_stat);

    $_SESSION['add_success']="Notice Added Successfully!";
   header('location:addstats.php');
 ?>
