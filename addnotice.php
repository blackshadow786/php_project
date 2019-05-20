<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="addnotice.php">Add Notice</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Notice</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
    <div class="col-8">
      <div class="card-header bg-success mt-3">
        Notice list
      </div>
      <div class="card-body">
        <?php
        $notices="SELECT * from notices";
        $all_notices=mysqli_query($dbconnect,$notices);

        ?>
        <table class="table table-bordered">
          <tr>
            <th>Notice Date</th>
            <th>Notice Title</th>
            <th>Details</th>
            <th>Action</th>
          </tr>
          <tr>
            <?php
            foreach ($all_notices as $notice) {
              ?>
              <td><?=$notice['notice_date']?></td>
              <td><?=$notice['notice_title']?></td>
              <td><?=substr($notice['notice_details'],0, 20)?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="edit_notice.php?notice_id=<?=$notice['id']?>">  <button type="button" class="btn btn-info">Edit</button></a>
                  <a href="delete_notice.php?notice_id=<?=$notice['id']?>">  <button type="button" class="btn btn-danger">Delete</button></a>

                </div>

              </td>


            </tr>
            <?php
          }
          ?>
        </table>
      </div>
    </div>
    <div class="col-4 mt-3">
      <?php
      if(isset($_SESSION['add_success'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?=$_SESSION['add_success']?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
        unset($_SESSION['add_success']);
      }
      ?>
      <div class="card">
        <div class="card-header bg-success">
          Add Notice
        </div>
        <div class="card-body">
          <form action="addnotice_post.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1"> Date</label>
              <input type="date" name="notice_date"class="form-control" >
              <label for="exampleInputEmail1">Notice title</label>
              <input type="text" name="notice_title"class="form-control" placeholder="Your notice title here">
              <label for="exampleInputEmail1">Notice details</label>
              <textarea class="form-control" name="notice_details" rows="3" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Add Notice</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require_once 'includes/footer.php' ?>
