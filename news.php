<?php
  require_once 'notices.php';



 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pabna Polytechnic Institute</title>
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
                        <a href="index.php">
                            <img src="frontend-assets/images/logo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="so about-so col-md-7 col-sm-5 col-12 text-right">
                        <ul>
                            <li><a href="login.php"><i class="fa fa-sign-in si"></i>sign in</a></li>
                            <li><a href="register.php"><i class="fa fa-user-plus si"></i>register</a></li>
                            <li>
                                <form class="form-inline my-2 mmd-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                                    <button class="btn btn-outline-success my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
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
                                <a class="nav-link" href="about.html">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    academic
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="teacher.html">Teacher &amp; stuff</a>
                                    <a class="dropdown-item" href="student.html">student info</a>
                                    <a class="dropdown-item" href="lab.html">lab and workshop</a>
                                    <a class="dropdown-item" href="events.html">events</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admission.html">admission info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="result.html">examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="result.html">result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->
        <!-- marque starts -->
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span>latest news</span>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <marquee><?php

                        $id=base64_decode($_GET['news_id']);
                        $get_data="SELECT * from latestnews where id=$id ";
                        $result=mysqli_query($dbconnect,$get_data);
                        $data=mysqli_fetch_assoc($result);
                        foreach ($check_query as $nayan) {
                                      echo $nayan['notice_title']."  | ";
                                    }
                                        ?> </marquee>
                    </div>
                </div>
            </div>
        </section>
        <!--    marque ends -->
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
              <img src="uploads/latestnews/<?=$data['news_image']?>" alt="">
            </div>
        </section>
        <!-- banner ends -->

    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-8 col-sm-12 col-12 pr-md-0">
                    <div class="contact">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                              <h2><?=$data['news_title']?></h2>
                              <h3><i class="fa fa-user"></i> <?=base64_decode($_GET['added_by'])?></h3>
                                <h5><?=$data['news_date']?> </h5>
                              <p><?=$data['news_details']?></p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- content part ends -->

    <!-- foot starts -->
    <section id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <img src="images/logo-small.png" alt="" class="img-fluid">
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
                            <ul><?php require_once 'about_settings.php'; ?>
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
