<?php
    require_once 'dbcon.php';
    $id=$_GET['massage_id'];
    $note_update="UPDATE viewers set read_status=2 where id=$id";
    mysqli_query($dbconnect,$note_update);
    header('location:viwers_massage.php');


 ?>
