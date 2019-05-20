<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from sliders";
  $result=mysqli_query($dbconnect,$get_data);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="addslider.php">Add Slider</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add slider</li>
  </ol>
</nav>
<div class="container">

  <div class="row">
    <div class="col-8">
      <div class="card-header bg-success mt-3">
         Slider list
      </div>
      <div class="card-body">

        <table class="table table-bordered">
          <tr>
            <th> Slider Name</th>
            <th>Slider Image</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php
            foreach ($result as $slider) {
              ?>
              <tr>
                <td><?=$slider['slider_title']?></td>
                <td><img src="uploads/sliders/<?=$slider['slider_image']?>" alt="" width="100">
                  </td>
                <td><?php
                    if($slider['status']==1){
                      echo "Active";
                    }
                    else {
                      echo "Deactive";
                    }
                ?>
              </td>
                <td>
                  <?php
                      if($slider['status']==1){

                        ?>
                        <a href="slider_deactive.php?slider_id=<?=$slider['id']?>" class="btn btn-sm btn-warning" name="button">Deactive</a>
                        <?php
                      }
                      else {
                        ?>
                        <a href="slider_active.php?slider_id=<?=$slider['id']?>" class="btn btn-sm btn-success" name="button">Active</a>
                        <?php
                      }
                  ?>
                  <a href="slider_delete.php?slider_id=<?=$slider['id']?>& slider_name=<?=$slider['slider_image']?>" class="btn btn-sm btn-danger" name="button">Delete</a>
                  <a href="slider_edit.php?slider_id=<?=$slider['id']?>& slider_name=<?=$slider['slider_image']?>& slider_title=<?=$slider['slider_title']?>" class="btn btn-sm btn-info" name="button">Edit</a>
                </td>

              </tr>

              <?php
            }
           ?>

        </table>
      </div>
    </div>
    <div class="col-4">
      <div class="card mt-3 ">
        <div class="card-header bg-success">
          Add Slide
        </div>
        <div class="card-body">
          <form action="addslider_post.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <label> Slide Title</label>
              <input type="text" name="slider_title"class="form-control" >
              <label >Slider Image</label>
              <input type="file" name="slider_image" class="form-control" >
            </div>
            <button type="submit" class=" btn btn-warning">Add Slider</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

  <?php require_once 'includes/footer.php' ?>
