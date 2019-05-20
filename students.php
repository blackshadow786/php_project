
  <?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  require_once 'dbcon.php';
  $get_data="SELECT * from students order by id desc";
  $result=mysqli_query($dbconnect,$get_data);

  ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="students.php">Students</a></li>
      <li class="breadcrumb-item active" aria-current="page">Students</li>
    </ol>
  </nav>
 <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="card-header bg-info mt-3">
          Students list
       </div>
       <div class="card-body">
         <table class="table table-bordered">
             <tr>
               <th>Student Name</th>
               <th>Student email</th>
               <th> Status</th>
             </tr>
         <?php
           foreach ($result as $std) {
           ?>
             <tr class="<?=($std['status']==1)? "" : "bg-secondary" ?>">
                 <td><?=$std['name']?> </td>
                 <td><?=$std['email']?> </td>
                   <td><?php
                 if ($std['status']==2){
                   ?>

                   <a href="std_active.php?massage_id=<?=$std['id']?>" class="btn btn-sm btn-info" name="button">Active</a>
                     <?php
                   }else {?>
                     <a href="std_deactive.php?massage_id=<?=$std['id']?>" class="btn btn-sm btn-danger" name="button">Deactive</a>
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


<?php require_once 'includes/footer.php';?>
