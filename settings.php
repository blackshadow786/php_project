<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from settings";
  $result=mysqli_query($dbconnect,$get_data);
  $data=mysqli_fetch_assoc($result);

?>

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="settings.php">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
    </nav>
    <div class="row">

            <div class="col-6 offset-3">
              <div class="card mt-3 ">
                  <div class="card-header bg-success">
                  General Settings
                  </div>
                <div class="card-body">
                  <form action="settings_post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Institute Name</label>
                            <input type="text" name="inst_name"class="form-control" value="<?=$data['inst_name']?>" >
                            <label >Phone Number</label>
                            <input type="text" name="phn_number" class="form-control" value="<?=$data['phn_number']?>" >
                            <label >Email</label>
                            <input type="email" name="email" class="form-control" value="<?=$data['email']?>" >
                            <label >Facebook Link</label>
                            <input type="text" name="fb_link" class="form-control" value="<?=$data['fb_link']?>">
                            <label >Twitter Link</label>
                            <input type="text" name="twt_link" class="form-control" value="<?=$data['twt_link']?>">
                            <label >Address Link</label>
                            <input type="text" name="address" class="form-control" value="<?=$data['address']?>">
                            <label >Google Link</label>
                            <input type="text" name="google_link" class="form-control" value="<?=$data['google_link']?>">
                            <label >Map Link</label>
                            <textarea class="form-control" name="map_link" rows="3"><?=$data['map_link']?></textarea>
                        </div>
                        <button type="submit" class=" btn btn-warning">Update</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  <?php require_once 'includes/footer.php' ?>
