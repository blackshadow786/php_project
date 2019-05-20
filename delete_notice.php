<?php
require_once 'dbcon.php';
  $del=$_GET['notice_id'];
  $delete="DELETE from notices where id=$del";
  mysqli_query($dbconnect,$delete);
  header('location:addnotice.php');

 ?>
