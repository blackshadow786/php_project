<?php
	require_once 'dbcon.php';?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="icon" href="frontend-assets/blog/img/favicon.png" type="image/png"> -->
  <title>Gallary -Of PPI</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="frontend-assets/blog/css/bootstrap.css">
	<link rel="stylesheet" href="frontend-assets/blog/vendors/linericon/style.css">
  <link rel="stylesheet" href="frontend-assets/blog/css/themify-icons.css">
  <link rel="stylesheet" href="frontend-assets/blog/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="frontend-assets/blog/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="frontend-assets/blog/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="frontend-assets/blog/css/magnific-popup.css">
	<link rel="stylesheet" href="frontend-assets/blog/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="frontend-assets/blog/css/style.css">
</head>
<body>
	<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Gallary</h2>
                  <div class="page_link">
                      <a href="index.php">Home</a>
                      <a href="blog.php">Gallary</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
	<!--================Blog Area =================-->
  <section class="blog_area section-margin">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
										<?php
										$query="SELECT * from gallaries order by id desc";
										$result=mysqli_query($dbconnect,$query);
										foreach ($result as $photo): ?>

                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="uploads/gallaries/<?=$photo['gallary_img']?>" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>
											<?php
											endforeach;
											?>
                        <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-left"></span>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-right"></span>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="primary_btn rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                      </aside>

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                          <div class="media post_item">
                              <img src="frontend-assets/blog/img/blog/popular-post/post1.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>From life was you fish...</h3>
                                  </a>
                                  <p>January 12, 2019</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend-assets/blog/img/blog/popular-post/post2.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>The Amazing Hubble</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend-assets/blog/img/blog/popular-post/post3.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Astronomy Or Astrology</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="frontend-assets/blog/img/blog/popular-post/post4.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Asteroids telescope</h3>
                                  </a>
                                  <p>01 Hours ago</p>
                              </div>
                          </div>
                      </aside>
                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside>


                      <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="frontend-assets/blog/img/instagram/widget-i6.png" alt="">
                                </a>
                            </li>
                        </ul>
                      </aside>



                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->


  <!--================Footer Area =================-->

  <!--================End Footer Area =================-->


  <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="frontend-assets/blog/js/jquery-3.2.1.min.js"></script>
	<script src="frontend-assets/blog/js/popper.js"></script>
	<script src="frontend-assets/blog/js/bootstrap.min.js"></script>
	<script src="frontend-assets/blog/js/stellar.js"></script>
	<script src="frontend-assets/blog/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="frontend-assets/blog/vendors/isotope/isotope-min.js"></script>
	<script src="frontend-assets/blog/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="frontend-assets/blog/js/jquery.ajaxchimp.min.js"></script>
	<script src="frontend-assets/blog/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="frontend-assets/blog/js/gmaps.min.js"></script>
	<script src="frontend-assets/blog/js/theme.js"></script>
</body>

</html>
