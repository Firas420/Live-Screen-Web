<?php 


 session_start(); 
if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }

?>



<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from themebeyond.com/html/Live Screen/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 00:52:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Live Screen - Online Movies & TV Shows Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two">
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-none d-md-block">
                            <div class="header-top-subs">
                                <p>Live Screen One Month Free <span>Subscription !</span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-link">
                                <ul class="quick-link">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQS</a></li>
                                </ul>
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.php">

                                            <img src="img/logo/logo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="index.php">Home</a>
                                               
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Movie</a>
                                                <ul class="submenu">
                                                    <li><a href="movie.html">Movie</a></li>
                                                    <li><a href="movie-details.html">Movie Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="tv-show.html">tv show</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="profile.php">Profile</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="d-none d-xl-block">
                                                <div class="footer-search">
                                                    <form action="#">
                                                        <input type="text" placeholder="Find Favorite Movie">
                                                        <button><i class="fas fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="header-lang">
                                               <p><?php echo $_SESSION['nom'] ." ". $_SESSION['prenom'] ?> </p>
                                            </li>
                                            <li class="header-btn"><a href="../logout.php" class="btn">Logout</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="slider-area slider-bg" data-background="img/banner/s_slider_bg.jpg">
                <div class="slider-active">
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                        <img src="img/banner/slider_img01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Live Screen</h6>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Unlimited <span>Movie</span>, TV Shows, & More.</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    <a href="#">Romance,</a>
                                                    <a href="#">Drama</a>
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                                    <span><i class="far fa-clock"></i> 128 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                        <img src="img/banner/slider_img02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Live Screen</h6>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Unlimited <span>Movie</span>, TV Shows, & More.</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    <a href="#">Romance,</a>
                                                    <a href="#">Drama</a>
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                                    <span><i class="far fa-clock"></i> 120 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                        <img src="img/banner/slider_img03.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Live Screen</h6>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Unlimited <span>Movie</span>, TV Shows, & More.</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    <a href="#">Romance,</a>
                                                    <a href="#">Drama</a>
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                                    <span><i class="far fa-clock"></i> 120 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

            <!-- up-coming-movie-area -->
            <section class="ucm-area ucm-bg2" data-background="img/bg/ucm_bg02.jpg">
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title title-style-three text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">New Release Movies</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster07.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster08.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster09.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster01.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster02.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster03.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster04.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster05.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="img/poster/s_ucm_poster06.jpg" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- up-coming-movie-area-end -->

            <!-- gallery-area -->
            <div class="gallery-area position-relative">
                <div class="gallery-bg"></div>
                <div class="container-fluid p-0 fix">
                    <div class="row gallery-active">
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="gallery-item">
                                <img src="img/images/gallery_04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav"></div>
            </div>
            <!-- gallery-area-end -->

            <!-- services-area -->
            <section class="services-area services-bg-two" data-background="img/bg/services_bg02.jpg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="services-img-wrap">
                                <img src="img/images/services_img02.jpg" alt="">
                                <a href="img/images/services_img02.jpg" class="download-btn" download>Download <img src="fonts/download.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-content-wrap">
                                <div class="section-title mb-40">
                                    <span class="sub-title">ONLINE STREAMING</span>
                                    <h2 class="title">Download Your Shows Watch Offline.</h2>
                                </div>
                                <div class="services-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-television"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Enjoy on Your TV.</h5>
                                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-video-camera"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Watch Everywhere.</h5>
                                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- top-rated-movie -->
            <section class="top-rated-movie tr-movie-bg2" data-background="img/bg/tr_movies_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <span class="sub-title">top rated movies</span>
                                <h2 class="title">Top Online Shows Watch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row movie-item-row">
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster01.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster02.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster03.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster04.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Speed 2</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster05.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Legend Emo</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster06.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Envato Bottle 88</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster07.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message Bottle II</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster08.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Message B.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster09.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Tiger World Q.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">Bluray</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="img/poster/s_ucm_poster10.jpg" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Avenger World IV</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tr-movie-btn text-center mt-25">
                        <a href="#" class="btn">BROWSE ALL MOVIES</a>
                    </div>
                </div>
            </section>
            <!-- top-rated-movie-end -->

            <!-- pricing-area -->
            <section class="pricing-area pricing-bg" data-background="img/bg/pricing_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <span class="sub-title">our pricing plans</span>
                                <h2 class="title">Our Pricing Strategy</h2>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-box-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="pricing-box-item mb-30">
                                    <div class="pricing-top">
                                        <h6>premium</h6>
                                        <div class="price">
                                            <h3>$7.99</h3>
                                            <span>Monthly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li class="quality"><i class="fas fa-check"></i> Video quality <span>Good</span></li>
                                            <li><i class="fas fa-check"></i> Resolution <span>480p</span></li>
                                            <li><i class="fas fa-check"></i> Screens you can watch <span>1</span></li>
                                            <li><i class="fas fa-check"></i> Cancel anytime</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="pricing-box-item active mb-30">
                                    <div class="pricing-top">
                                        <h6>standard</h6>
                                        <div class="price">
                                            <h3>$9.99</h3>
                                            <span>Monthly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li class="quality"><i class="fas fa-check"></i> Video quality <span>Better</span></li>
                                            <li><i class="fas fa-check"></i> Resolution <span>1080p</span></li>
                                            <li><i class="fas fa-check"></i> Screens you can watch <span>2</span></li>
                                            <li><i class="fas fa-check"></i> Cancel anytime</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="pricing-box-item mb-30">
                                    <div class="pricing-top">
                                        <h6>premium</h6>
                                        <div class="price">
                                            <h3>$11.99</h3>
                                            <span>Monthly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li class="quality"><i class="fas fa-check"></i> Video quality <span>Best</span></li>
                                            <li><i class="fas fa-check"></i> Resolution <span>4K+HDR</span></li>
                                            <li><i class="fas fa-check"></i> Screens you can watch <span>4</span></li>
                                            <li><i class="fas fa-check"></i> Cancel anytime</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pricing-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">

                                    <a href="index.php"><p>Live Screen</p></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="index.html">Movie</a></li>
                                            <li><a href="index.html">tv show</a></li>
                                            <li><a href="index.html">pages</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021. All Rights Reserved By <a href="index.html">Live Screen</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/Live Screen/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 00:53:04 GMT -->
</html>
