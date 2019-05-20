<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $notice_id=$_GET['notice_id'];
  $edit="SELECT * from notices where id=$notice_id";
  $dat=mysqli_query($dbconnect,$edit);
  $result=mysqli_fetch_assoc($dat);

?>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
  <li class="breadcrumb-item"><a href="addnotice.php">Add notice</a></li>
  <li class="breadcrumb-item active" aria-current="page"><?=$result['notice_title']?></li>
</ol>
</nav>
<div class="container">

  <div class="row">
      <div class="col-4 offset-4 mt-3">
      <div class="card-header">
        <div class="card-header bg-success">
          Edit Notice
        </div>
        <div class="card-body">
          <form action="edit_notice_post.php" method="post">
              <div class="form-group">
                <input type="hidden" name="notice_id"class="form-control" value="<?=$result['id']?>">
              <label for="exampleInputEmail1"> Date</label>
              <input type="date" name="notice_date"class="form-control" value="<?=$result['notice_date']?>" >
              <label for="exampleInputEmail1">Notice title</label>
              <input type="text" name="notice_title"class="form-control" value="<?=$result['notice_title']?>">
              <label for="exampleInputEmail1">Notice details</label>
              <textarea class="form-control" name="notice_details" rows="3" cols="80"><?=$result['notice_details']?></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
        </div>




<?php require_once 'includes/footer.php' ?>
