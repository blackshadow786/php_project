<?php
require_once 'dbcon.php';
  $notice_id=$_POST['notice_id'];
  $notice_date=$_POST['notice_date'];
  $notice_title=$_POST['notice_title'];
  $notice_details=$_POST['notice_details'];
  $note_update="UPDATE notices set notice_date='$notice_date',notice_title='$notice_title',notice_details='$notice_details' where id=$notice_id";
  mysqli_query($dbconnect,$note_update);
  header('location:addnotice.php');

?>
