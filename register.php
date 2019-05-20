<?php
  require_once 'chksession.php';
  require_once 'includes/header.php';
  if(isset($_SESSION['role'])){
      if($_SESSION['role']==1){

      }
      else {
          header('location:index.php');
      }
  }
  else {
    header('location:index.php');
  }
 ?>
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>

           <li class="breadcrumb-item active" aria-current="page">Add new user</li>
         </ol>
      </nav>
      <div class="container" >
        <div class="row">
          <div class="col-6 offset-3">
            <div class="card-header bg-success">
              Registration Form
            </div>
            <div class="card-body">
              <form action="pro_register.php" method="post">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Your Name</label>
                      <input type="text" name="name" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Email</label>
                    <input type="email" name="email"class="form-control" >
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Password</label>
                  <input type="password"name="password" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Re-enter Password</label>
                  <input type="password"name="re_password" class="form-control"  placeholder="Re-enter Password">
                </div>
                <div class="form-group">
                  <select class="form-control" name="role">
                    <option value="">-Select One-</option>
                    <option value="1">Admin</option>
                    <option value="2">Student</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Register Me</button>
                <a href="login.php">Login here</a>
          </form>
            </div>

            </div>

          </div>
      </div>
    </div>
    <?php
      require_once 'includes/footer.php';
     ?>
