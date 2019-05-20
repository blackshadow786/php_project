<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from gallaries";
  $result=mysqli_query($dbconnect,$get_data);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="gallary.php">Add Gallary</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Gallary</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
    <div class="col-8">
      <div class="card-header bg-success mt-3">
         Gallary Image list
      </div>
      <div class="card-body">

        <table class="table table-bordered">
          <tr>
            <th> Image Name</th>
            <th>Gallary Image</th>


          </tr>
          <?php
            foreach ($result as $img) {
              ?>
              <tr>
                <td><?=$img['tag']?></td>
                <td><img src="uploads/gallaries/<?=$img['gallary_img']?>" alt="" width="100">
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
          Add Gallary
        </div>
        <div class="card-body">
          <form action="addgallaries_post.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <label> Gallary Tag</label>
              <select class="form-control" name="tag">
                <option value="">Select One</option>
                <option value="campus">Campus</option>
                <option value="classroom">Classroom</option>
                <option value="events">Events</option>
              </select>
              <label >Slider Image</label>
              <input type="file" name="gallary_img" class="form-control" >
            </div>
            <button type="submit" class=" btn btn-warning"> Add Gallary</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>

  <?php require_once 'includes/footer.php' ?>
