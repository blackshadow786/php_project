<?php
  session_start();
  require_once 'notices.php';
  require_once 'about_settings.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$data['inst_name']?></title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="frontend-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend-assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend-assets/css/slick.css">
    <link rel="stylesheet" href="frontend-assets/css/style.css">
    <link rel="stylesheet" href="frontend-assets/css/responsive.css">
</head>

<body>
    <div id="home">
        <!--  head part starts  -->

        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 col-12 logo">
                        <a href="#">
                            <img src="frontend-assets/images/logo.png" alt="" class="img-fluid">
                        <?=$data['inst_name']?>
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-5 col-12 text-right">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul class="contact">
                                    <li><a href="tel:<?=$data['phn_number']?>"><i class="fa fa-phone"></i><?=$data['phn_number']?></a></li>
                                    <li><a href="mailto:<?=$data['email']?>"><i class="fa fa-envelope"></i><?=$data['email']?></a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <li><a href="<?=$data['fb_link']?>"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?=$data['twt_link']?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?=$data['google_link']?>"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </li>
                                    <?php
                                      if(isset($_SESSION['std_name'])){
                                        ?>
                                          <li><a href="std_logout.php"><i class="fa fa-sign-out si"></i>Logout</a></li>
                                          <li><a href="std_profile.php"><i class="fa fa-user si"></i>Profile</a></li>

                                        <?php
                                      }
                                      else {
                                        ?>
                                        <li><a href="std_login.php"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                        <li><a href="std_registration.php"><i class="fa fa-user-plus si"></i>register</a></li>
                                    <?php
                                      }
                                     ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--  head part ends  -->
        <!-- menu part start -->
        <section id="menu">
            <div class="container text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    academic
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Teacher &amp; stuff</a>
                                    <a class="dropdown-item" href="#">student info</a>
                                    <a class="dropdown-item" href="#">lab and workshop</a>
                                    <a class="dropdown-item" href="#">events</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">admission info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">contact us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 mmd-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                            <button class="btn btn-outline-success my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->
        <!--    marque starts -->
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span>latest news</span>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <marquee><?php foreach ($check_query as $nayan) {
                                      echo $nayan['notice_title']."  | ";

                                    }
                                        ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </section>
        <!--    marque ends -->

    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="welcome col-sm-12">
                          <?php
                          $id=$_SESSION['id'];
                            $std_query="SELECT * FROM students where id=$id";
                            $res=mysqli_query($dbconnect,$std_query);
                            $data=mysqli_fetch_assoc($res);
                            ?>
                            <h2><?=$data['name']?></h2>
                            <p><?=$data['email']?></p>
                            <p>Welcome to Pabna Polytechnic Institute,Pabna. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                        </div>
                        <!-- welcome ends -->
                    </div>


                </div>
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                          <div class="col-md-12 col-6 col-sm-4">
                            <div class="s-area">
                                <h3>student area</h3>

                                <ul>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>admission</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>examination</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>results</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>class routine</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>syllabus</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic calander</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic programs</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>activity</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>scholarship</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>rover scout</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- counter part ends -->


    <!-- foot starts -->
    <?php

    $query_set="SELECT * from settings";
    $get_dat=mysqli_query($dbconnect,$query_set);
    $data=mysqli_fetch_assoc($get_dat);
     ?>
    <section id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <img src="frontend-assets/images/logo.png" alt="" class="img-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the best.</p>


                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>
                <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                    <h5>quick links</h5>
                    <ul>
                        <li><a href="#">admission</a></li>
                        <li><a href="#">results</a></li>
                        <li><a href="#">academics</a></li>
                        <li><a href="#">faculty</a></li>
                        <li><a href="#">news &amp; events</a></li>
                    </ul>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                    <h5>contact us</h5>
                    <div class="row soc">
                        <div class="col-md-2 col-sm-2 col-1">

                            <ul>
                                <li><i class="fa fa-phone"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                                <li><i class="fa fa-location-arrow"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8 col-8">
                            <ul>
                                <li><a href="tel:<?=$data['phn_number']?>"><?=$data['phn_number']?></a></li>
                                <li><a href="mailto:<?=$data['email']?>"><?=$data['email']?></a></li>
                                <li><a href="#"><?=$data['address']?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-1 col-sm-5 col-5">
                    <h5>find us</h5>
                    <iframe src="<?=$data['map_link']?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer id="copy">
        <div class="container text-center">
            <p>Copyright &copy; 2018 <?=$data['inst_name']?>.Designed &amp; Developed by Creative IT Institute</p>
        </div>
    </footer>
    <!-- foot ends -->
    <!-- top to -->
    <div>
        <i class="fa fa-angle-up" id="return-to-top"></i>
    </div>


    <script src="frontend-assets/js/jquery-1.12.4.min.js"></script>
    <script src="frontend-assets/js/bootstrap.min.js"></script>
    <script src="frontend-assets/js/mixitup.min.js"></script>
    <script src="frontend-assets/js/slick.min.js"></script>
    <script src="frontend-assets/js/custom.js"></script>
</body>

</html>
