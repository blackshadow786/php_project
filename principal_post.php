<?php
  require_once 'dbcon.php';
  $img_upload=$_FILES['princ_img'];

  $img_upload_name=$img_upload['name'];

  $explode_name=explode(".",$img_upload_name);
  $img_upload_name_ext=end($explode_name);
  $valid_ext=array('jpg','jpeg','png');
  if(in_array($img_upload_name_ext,$valid_ext)){
        if($img_upload['size']<=500000){

            $princ_name=$_POST['princ_name'];
            $notice_details=$_POST['notice_details'];
            $inst_name=$_POST['inst_name'];

            $ins_query="INSERT into principals (princ_name,notice_details,inst_name) Values('$princ_name','$notice_details','$inst_name')";
            mysqli_query($dbconnect,$ins_query);
            $inserted_id=  mysqli_insert_id($dbconnect);
            $new_slide_name=$inserted_id.".".$img_upload_name_ext;
            $uploads_loc="uploads/principal/".$new_slide_name;
            move_uploaded_file($img_upload['tmp_name'],$uploads_loc);
            $update_query="UPDATE principals set  princ_img='$new_slide_name' where id=$inserted_id";
            mysqli_query($dbconnect,$update_query);

            header('location:principal.php');
          }
        else {
          echo "Too large File";
              }
  }
  else {
    echo "Nai";
  }
