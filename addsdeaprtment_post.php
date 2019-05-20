<?php
  require_once 'dbcon.php';

  $fontawesome_name=$_POST['awesome_name'];
  $department_name=$_POST['department_name'];
  $point_one=$_POST['point_one'];
  $point_two=$_POST['point_two'];
  $point_three=$_POST['point_three'];
   $insert_department="INSERT INTO departments( awesome_name,department_name,point_one,point_two,point_three) VALUES  ('$fontawesome_name','$department_name','$point_one','$point_two','$point_three')";

    mysqli_query($dbconnect,$insert_department);

    $_SESSION['add_success']="DEaprtment  !";
   header('location:department.php');
 ?>
