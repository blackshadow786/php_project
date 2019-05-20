
  <?php
  require_once 'chksession.php';
  require_once 'dbcon.php';
  require_once 'includes/header.php';

  ?>

            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="latestnews.php">Dashboard</a></li>
  </ol>
</nav>

              <div class="card mt-3">
                <div class="card-header bg-success">
                  Your Dashboard
                </div>
                <div class="card-body">
                   <h4>Welcome <?php echo $_SESSION['fullname'];?></h4>
                   
                             <table class="table-bordered">
          
              
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    
                                </tr>
                                   <?php
                                      $user_query="SELECT * FROM users order by id desc";
                                    $all_users= mysqli_query($dbconnect,$user_query);
                                   foreach ($all_users as $user) {

                                    ?>
                                <tr>
                                    <td><?=$user['name']?></td>
                                    <td><?=$user['email']?></td>
                                    <td>
                                  <?php
                                     
                                     if($user['role']==1){
                                       echo "Super Admin";
                                     }else {
                                       echo "Admin";
                                     }
                                     ?>
                                    </td>
                                    
              
                                         </tr>
                   <?php              
              };
                ?>
                               
                            </table>
                   
                
                    
                   <p>You're
                     <?php
                     $role=$_SESSION['role'];
                     if($role==1){
                       echo "Super Admin";
                     }else {
                       echo "Admin";
                     }
                     ?>
                 </p>

                </div>
             </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->



<?php require_once 'includes/footer.php';?>
