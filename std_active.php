<?php
    require_once 'dbcon.php';
    $id=$_GET['massage_id'];
    $note_update="UPDATE students set status=1 where id=$id";
    mysqli_query($dbconnect,$note_update);
    header('location:students.php');


 ?>
