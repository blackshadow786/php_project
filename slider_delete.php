<?php
require_once 'dbcon.php';
$id=$_GET['slider_id'];

$name=$_GET['slider_name'];

if ($name=='defaultimage.jpeg') {
  $delete="DELETE from sliders where id =$id";
  mysqli_query($dbconnect,$delete);

}else {
  $delete="DELETE from sliders where id =$id";
  mysqli_query($dbconnect,$delete);
  unlink('uploads/sliders/'.$name);

}
  header('location:addslider.php');

 ?>
