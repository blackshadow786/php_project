<?php
  require_once 'dbcon.php';
if ($_FILES['gallary_img'] ['name']) {
          $img_upload=$_FILES['gallary_img'];
          $img_upload_name=$img_upload['name'];
          $explode_name=explode(".",$img_upload_name);
          $img_upload_name_ext=end($explode_name);
          $valid_ext=array('jpg','jpeg','png');
          if(in_array($img_upload_name_ext,$valid_ext)){
                if($img_upload['size'] <=2000000){
                    $tag=$_POST['tag'];
                    $ins_query="INSERT into gallaries (tag) Values('$tag')";
                    mysqli_query($dbconnect,$ins_query);
                    $inserted_id=  mysqli_insert_id($dbconnect);
                    $new_slide_name=$inserted_id.".".$img_upload_name_ext;
                    $uploads_loc="uploads/gallaries/".$new_slide_name;
                    move_uploaded_file($img_upload['tmp_name'],$uploads_loc);
                    $update_query="UPDATE gallaries set gallary_img='$new_slide_name' where id=$inserted_id";
                    mysqli_query($dbconnect,$update_query);
                    header('location:gallary.php');
                  }
                else {
                  echo "Too large File";
                      }
          }
          else {
              echo "Nai";
          }
}else {
      $img_title=$_POST['tag'];
      $ins_query="INSERT into gallaries (tag) Values('$img_title')";
      mysqli_query($dbconnect,$ins_query);
      header('location:gallary.php');
}

 ?>
