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
                                            <li class=" menu-item-has-children"><a href="index.php">Home</a>
                                               
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
                                            <li class="active"><a href="profile.php">Profile</a></li>
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

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title"> Profile</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="contact-form-wrap">
                                <div class="widget-title mb-50">
                                    <h5 class="title">Edit profile</h5>
                                </div>
                                <div class="contact-form">
                                    <form action="modifieruserC.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                  <input value="<?php echo $_SESSION['id'] ?>" type="hidden" name="id">
                                                <input value="<?php echo $_SESSION['nom'] ?>" type="text" name="nom" placeholder="new Nom *">
                                            </div>
                                            <div class="col-md-6">
                                                <input value="<?php echo $_SESSION['prenom'] ?>" name="prenom" type="text" placeholder="new  Prenom *">
                                            </div>
                                        </div>

                                           <div class="row">
                                            <div class="col-md-6">
                                                <input value="<?php echo $_SESSION['mail'] ?>" name="mail" type="text" placeholder="new Email *">
                                            </div>
                                            <div class="col-md-6">
                                                <input value="<?php echo $_SESSION['username'] ?>"  name="username" type="text" placeholder="new  username *">
                                            </div>
                                        </div>
                                         <div class="row">
                                              <div class="col-md-9">
                                                <input type="password"  name="password" placeholder="new  Password *">
                                     </div>
                                        </div>
                                       
                                        <button type="submit" class="btn">Send </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- map -->
        
            <!-- map-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

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
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
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
                                <p>Copyright &copy; 2021. All Rights Reserved By <a href="index.html">Movflx</a></p>
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
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.6.0.min.js"></script>
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

<!-- Mirrored from themebeyond.com/html/movflx/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 00:53:14 GMT -->
</html>
