<?php
  require_once 'includes/header.php';
 ?>
 <nav aria-label="breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
     <li class="breadcrumb-item"><a href="slider_edit.php">Edit slider</a></li>
     <li class="breadcrumb-item active" aria-current="page">Edit slider</li>
   </ol>
 </nav>
 <div class="container">
   <div class="row">
     <div class="col-4 offset-4">
       <div class="card mt-3 ">
         <div class="card-header bg-success">
           Edit Slide
         </div>
         <div class="card-body">
           <form action="slider_edit_post.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="old_img_id" value="<?=$_GET['slider_id']?>">
             <input type="hidden" name="old_img_name" value="<?=$_GET['slider_name']?>">
               <div class="form-group">
               <label> Slide Title</label>
               <input type="text" name="old_title"class="form-control"value="<?=$_GET['slider_title']?>" >
               <label >Slider Image</label>
               <input type="file" name="new_img" class="form-control" >
             </div>
             <button type="submit" class=" btn btn-warning">Edit Slider</button>
           </form>
         </div>
       </div>
     </div>
     </div>
   </div>
 </div>




 <?php
   require_once 'includes/footer.php';
  ?>
