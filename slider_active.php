<?php
  require_once 'dbcon.php';
  $id=$_GET['slider_id'];
  $update="UPDATE sliders set status =1 where id =$id";
  mysqli_query($dbconnect,$update);
  header('location:addslider.php');
 ?>
