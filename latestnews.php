<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from latestnews order by id desc";
  $result=mysqli_query($dbconnect,$get_data);


?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="latestnews.php">Add News</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add News</li>
  </ol>
</nav>
<div class="container">

  <div class="row">
    <div class="col-8">
      <div class="card-header bg-success mt-3">
         News list
      </div>
      <div class="card-body">

        <table class="table table-bordered">
          <tr>
            <th> News Date</th>
            <th>News Image</th>
            <th>Date</th>
            <th>Details</th>
            <th>Action</th>
          </tr>
          <?php
              foreach ($result as $news):
            ?>
          <tr>


            <td><?=$news['news_date']?></td>
            <td><?=$news['news_title']?></td>
            <td>
                <img src="uploads/latestnews/<?=$news['news_image']?>" alt="" width="100">
            </td>
            <td><?=substr($news['news_details'], 0, 20)."....."?></td>


              </tr>
              <?php
              endforeach;
              ?>

        </table>
      </div>
    </div>
    <div class="col-4">
      <div class="card mt-3 ">
        <div class="card-header bg-success">
          Add News
        </div>
        <div class="card-body">
          <form action="latestnews_post.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="added_by"class="form-control"value="<?=$_SESSION['id']?>" >
              <label> News Title</label>
              <input type="text" name="news_title"class="form-control" >
              <label >News Date</label>
              <input type="date" name="news_date" class="form-control" >
              <label >News Details</label>
              <input type="text" name="news_details" class="form-control" >
              <label >News Image</label>
              <input type="file" name="news_image" class="form-control" >
            </div>
            <button type="submit" class=" btn btn-warning">Add News</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

  <?php require_once 'includes/footer.php' ?>
