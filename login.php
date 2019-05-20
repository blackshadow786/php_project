      <!doctype html>
      <html lang="en">

      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>Login</title>
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
              padding-top: 40px;
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
                  <div class="card-header bg-info text-center"><h1>Login Here..</h1></div>
                  <div class="card-body">
                    <form action="login_post.php" method="post">
                        <div class="form-group">
                          <label >Enter Your Email </label>
                          <input type="email" name="email" class="form-control mb-2"  placeholder="Enter Your Email">
                          <label  >Enter Your Password</label>
                          <input type="password"name="password" class="form-control center"  placeholder=" Enter Your Password">
                        </div>

                      <button  type="submit" class="btn btn-info center">Login Me</button>

                    </form>
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
