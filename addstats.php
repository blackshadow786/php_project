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
    <li class="breadcrumb-item"><a href="addstats.php">Add Stat</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add stat</li>
  </ol>
</nav>
<div class="container">

  <div class="row">
    <div class="col-8">
      <div class="card-header bg-success mt-3">
         Stats list
      </div>
      <div class="card-body">

        <table class="table table-bordered">
          <tr>
            <th> Stat Name</th>
            <th>Awesome Icon</th>
            <th>Stat Amount</th>
            <th>Action</th>
          </tr>
          <?php
            $notices="SELECT * from stats";
            $stats=mysqli_query($dbconnect,$notices);
                foreach ($stats as $stat):
            ?>
            <tr>
              <td><?=$stat['statname']?></td>
              <td>
                <span class="fa <?=$stat['awesome_name']?>"></span>
              </td>
              <td><?=$stat['amount']?></td>
              <td>
                <?php
              endforeach;
                 ?>
            </tr>



        </table>
      </div>
    </div>
    <div class="col-4">
      <div class="card mt-3 ">
        <div class="card-header bg-success">
          Add Slide
        </div>
        <div class="card-body">
          <form action="addstast_post.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <label>Awesome Icon Name</label>
              <input type="text" name="awesome_name"class="form-control" >
              <a href="https://fontawesome.com/v4.7.0/icons/" target="">Please Click here for Fon awesome icon</a>
              <label >Stat Name</label>
              <input type="text" name="statname" class="form-control" >

            <label >Stat Amount</label>
            <input type="number" name="amount" class="form-control" >
          </div>
            <button type="submit" class=" btn btn-warning">Add Stat</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

  <?php require_once 'includes/footer.php' ?>
