<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend-assets/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="backend-assets/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="backend-assets/assets/libs/css/style.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 5px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class=" bg-info text-center"><h1>Student Registration Form</h1></div>
            <div class="card-body">
              <form action="std_reg_post.php" method="post">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Your Name</label>
                      <input type="text" name="name" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Email</label>
                    <input type="email" name="email"class="form-control"  >
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Password</label>
                  <input type="password"name="password" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Re-enter Password</label>
                  <input type="password"name="re_password" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                <a href="std_login.php">Login here</a>
            </div>

            </div>
        </div>


    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="backend-assets/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="backend-assets/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
