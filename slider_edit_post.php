<?php
require_once 'dbcon.php';
$id=$_POST['old_img_id'];
$img_name=$_POST['old_img_name'];
$old_title=$_POST['old_title'];
$new_img=$_FILES['new_img'];
$new_img_name=$new_img['name'];

if ($img_name != 'defaultimage.jpeg') {
    unlink('uploads/sliders/'.$old_img_name);
  }
    $new_img_name=$new_img['name'];

    $explode_name=explode(".",$new_img_name);
    $img_update_ext=end($explode_name);
    $valid_ext=array('jpg','jpeg','png');
    if(in_array($img_update_ext,$valid_ext)){
          if($new_img['size'] <=2000000){

              $img_title=$_POST['old_title'];
              $ins_query="UPDATE  sliders set (slider_title) Values('$old_title')";
              mysqli_query($dbconnect,$ins_query);
              $new_slide_name=$id.".".$img_update_ext;
              $uploads_loc="uploads/sliders/".$new_slide_name;
              move_uploaded_file($new_img['tmp_name'],$uploads_loc);
              $update_query="UPDATE sliders set slider_image='$new_slide_name' where id=$id";
              mysqli_query($dbconnect,$update_query);
              header('location:addslider.php');
            }
          else {
            echo "Too large File";
                }
    }
  else {
    echo "Nai";
  }




  // header('location:addslider.php');
 ?>
