<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
?>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
    <li class="breadcrumb-item active" aria-current="page">Principal</li>
  </ol>
</nav>
      <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <div class="card mt-4">
            <div class="card-header bg-success">
            Principal
            </div>
            <div class="card-body">
              <form action="principal_post.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                  <label>  Principal Name</label>
                  <input type="text" name="princ_name"class="form-control" >
                  <label for="exampleInputEmail1">Principal's Speech </label>
                  <textarea class="form-control" name="notice_details" rows="3" cols="80"></textarea>
                  <label> Institute Name</label>
                  <input type="text" name="inst_name"class="form-control" >
                  <label >Principal's Image</label>
                  <input type="file" name="princ_img" class="form-control" >
                <button type="submit" class=" btn btn-warning"> Save</button>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>

  <?php require_once 'includes/footer.php'; ?>
