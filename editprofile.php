<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';

?>

<div class="container">

  <div class="row">

    <div class="col-6 offset-3 mt-3">
      <?php
      if(isset($_SESSION['status'])){
          ?>
        <div class="alert alert-success">
          Your Name has changed successfully.
        </div>
  <?php
    unset($_SESSION['status']);
      }

       ?>
       <form class="mb-3" action="editprofile_post.php" method="post">
           <div class="form-group">
             <input type="hidden" name="id"class="form-control" value="<?=$_SESSION['id']?>">
           <label for="exampleInputEmail1">Enter your name</label>
           <input type="text" name="name"class="form-control" value="<?=$_SESSION['fullname']?>">

         </div>
         <button type="submit" class="btn btn-warning">Change</button>
       </form>
       <form class="mb-3" action="changepass_post.php" method="post">
           <div class="form-group">
               <input type="hidden" name="id"class="form-control" value="<?=$_SESSION['id']?>">
             <input type="password" name="newpass"class="form-control" placeholder="Enter old Password">
           <label for="exampleInputEmail1"> New password</label>
           <input type="password" name="password"class="form-control" placeholder="Enter New Password">
           <label for="exampleInputEmail1">Confirm password</label>
           <input type="password" name="re_pass"class="form-control" placeholder="Confirm New Password">
         </div>
         <button type="submit" class="btn btn-warning">Change</button>
       </form>




<?php require_once 'includes/footer.php' ?>
