<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend-assets/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="backend-assets/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="backend-assets/assets/libs/css/style.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="backend-assets/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>My project</title>
</head>
<?php
//login check for menu
if(isset($_SESSION['fullname'])){
  ?>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="dashboard.php">PPI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <!-- <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="viwers_massage.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li> -->

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!--<img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle">--><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?=$_SESSION['fullname']?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="editprofile.php"><i class="fas fa-user mr-2"></i>Profile</a>
                                <a class="dropdown-item" href="settings.php"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-light">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">

                            <li class="nav-item active">
                               <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                           </li>

                           <li class="nav-item">
                               <a class="nav-link" href="index.php" target="_blank">View Page</a>
                           </li>


                           <li class="nav-item">
                               <a class="nav-link" href="viwers_massage.php">Viwers Message</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="principal.php"> Principal's Details</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="addnotice.php">Add Notice</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="addslider.php">Add Slider</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="addstats.php">Add Stats</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="gallary.php">Add Gallary</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="department.php">Add Department</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="latestnews.php">Add News</a>
                           </li>
                           <?php
                               $role=$_SESSION['role'];
                               if($role==1):
                             ?>
                             <li class="nav-item">
                                 <a class="nav-link" href="register.php">Add New User</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="students.php">Students Section</a>
                             </li>
                            <?php
                              endif;
                            ?>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Add Option </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <!-- Page will be added here -->

                                    </ul>
                                </div>
                            </li>



                        </ul>
                    </div>
                  <?php
                }
                  ?>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
