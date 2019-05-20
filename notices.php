<?php
  require_once 'dbcon.php';
  $select_query="SELECT * from notices order by id desc";
  $check_query=mysqli_query($dbconnect,$select_query);
  ?>
