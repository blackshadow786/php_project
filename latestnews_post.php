<?php
  require_once 'dbcon.php';
if ($_FILES['news_image'] ['name']) {
          $img_upload=$_FILES['news_image'];
          $img_upload_name=$img_upload['name'];

          $explode_name=explode(".",$img_upload_name);
          $img_upload_name_ext=end($explode_name);
          $valid_ext=array('jpg','jpeg','png');
          if(in_array($img_upload_name_ext,$valid_ext)){
                if($img_upload['size'] <=2000000){

                    $added_by=$_POST['added_by'];
                    $img_title=$_POST['news_title'];
                    $news_date=$_POST['news_date'];
                    $news_details=$_POST['news_details'];
                    $ins_query="INSERT into latestnews (added_by,news_title,news_date, news_details) Values('$added_by','$img_title','$news_date','$news_details')";
                    mysqli_query($dbconnect,$ins_query);
                    $inserted_id=  mysqli_insert_id($dbconnect);
                    $new_slide_name=$inserted_id.".".$img_upload_name_ext;
                    $uploads_loc="uploads/latestnews/".$new_slide_name;
                    move_uploaded_file($img_upload['tmp_name'],$uploads_loc);
                    $update_query="UPDATE latestnews set news_image='$new_slide_name' where id=$inserted_id";
                    mysqli_query($dbconnect,$update_query);
                    header('location:latestnews.php');
                  }
                else {
                  echo "Too large File";
                      }
          }
          else {
            echo "Nai";
          }
}else {
  $img_title=$_POST['slider_title'];
  $ins_query="INSERT into sliders (slider_title) Values('$img_title')";
  mysqli_query($dbconnect,$ins_query);
  header('location:latestnews.php');
}






 ?>
