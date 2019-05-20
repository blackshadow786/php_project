<?php
require_once 'dbcon.php';
  $inst_name=$_POST['inst_name'];
  $email=$_POST['email'];
  $phn_number=$_POST['phn_number'];
  $fb_link=$_POST['fb_link'];
  $twt_link=$_POST['twt_link'];
  $address=$_POST['address'];
  $google_link=$_POST['google_link'];
  $map_link=$_POST['map_link'];
  $note_update="UPDATE settings set inst_name='$inst_name',phn_number='$phn_number', fb_link='$fb_link',twt_link='$twt_link',address='$address',google_link='$google_link',map_link='$map_link',email='$email' where id=1";
  mysqli_query($dbconnect,$note_update);
  header('location:settings.php');

?>
