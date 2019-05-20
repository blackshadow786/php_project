<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from viewers";
  $result=mysqli_query($dbconnect,$get_data);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="viwers_massage.php">Visitor Message</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visitor Message</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card-header bg-info mt-3">
         Message list
      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <tr>
              <th>Visitor Name</th>
              <th>Visitor email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Read Status</th>
            </tr>
        <?php
          foreach ($result as $message) {
          ?>
            <tr class="<?=($message['read_status']==1)? "bg-secondary" : "" ?>">
                <td><?=$message['name']?> </td>
                <td><?=$message['email']?> </td>
                <td><?=$message['subject']?> </td>
                <td><?=$message['message']?> </td>
                <td><?php
                if ($message['read_status']==1){
                  ?>

                  <a href="messagechk.php?massage_id=<?=$message['id']?>" class="btn btn-sm btn-info" name="button">Read</a>
                    <?php
                    }
                      ?>

                </td>
            </tr>
          <?php
          }
         ?>
       </table>
      </div>
    </div>

    </div>
  </div>
</div>

  <?php require_once 'includes/footer.php' ?>
