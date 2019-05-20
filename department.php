<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from departments";
  $result=mysqli_query($dbconnect,$get_data);

?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="department.php">Add Department</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Department</li>
        </ol>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card-header bg-success mt-3">
               Department  list
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <tr>
                      <th> Department Name</th>
                      <th>Awesome Icon</th>
                      <th>Point One</th>
                      <th>Point Two</th>
                      <th>Point Three</th>

                  </tr>
                  <?php
                    $notices="SELECT * from stats";
                    $stats=mysqli_query($dbconnect,$notices);
                        foreach ($result as $dept):
                    ?>
                    <tr>
                        <td><?=$dept['department_name']?></td>
                        <td>
                            <span class="fa <?=$dept['awesome_name']?>"></span>
                        </td>
                        <td><?=$dept['point_one']?></td>
                        <td><?=$dept['point_two']?></td>
                        <td><?=$dept['point_three']?></td>
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
                    Add Department
                  </div>
                <div class="card-body">
                  <form action="addsdeaprtment_post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Awesome Icon Name</label>
                            <input type="text" name="awesome_name"class="form-control" >
                            <a href="https://fontawesome.com/v4.7.0/icons/" target="__blank">Please Click here for Fon awesome icon</a>
                            <label >Department Name</label>
                            <input type="text" name="department_name" class="form-control" >
                            <label >Point One</label>
                            <input type="text" name="point_one" class="form-control" >
                            <label >Point Two</label>
                            <input type="text" name="point_two" class="form-control" >
                            <label >Point Three</label>
                            <input type="text" name="point_three" class="form-control" >
                        </div>
                        <button type="submit" class=" btn btn-warning">Add Department</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
</div>
</div>
  <?php require_once 'includes/footer.php' ?>
