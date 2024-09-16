<?php
session_start();
    include("loginnot_check.php");

// // Set the username based on session or cookie
// $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Hopefull Hearts</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    /* CSS styles for sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        left: -250px;
        /* Initially hidden */
        width: 250px;
        height: 100%;
        background-color: #202120;
        transition: left 0.3s ease;
    }

    .sidebar.show {
        left: 0;
        /* Show sidebar */
    }

    .sidebar-menu {
        list-style-type: none;
        padding: 0;
        margin: 0;
        /* Remove default margin */
    }

    .sidebar-menu li {
        padding: 10px;
        width: 100%;
        /* Take up full width */
        border-bottom: 1px solid #333;
        /* Add bottom border */
    }

    .sidebar-menu li:last-child {
        border-bottom: none;
        /* Remove border for last item */
    }

    .sidebar-menu li a {
        display: block;
        color: #fff;
        text-decoration: none;
    }

    .close-sidebar-btn {
        position: absolute;
        top: 20px;
        right: 10px;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 20px;
        color: #fff;
    }
</style>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <?php include ("header.php"); ?>

        <!-- end of header -->
        <!-- start of hero -->
        <section class="hero hero-style-1">
            <div class="hero-slider">
                <div class="slide">
                    <div class="container">
                        <img src="assets/images/slider/slide-02.jpg" alt class="slider-bg">
                        <div class="row">
                            <div class="col col-md-6 slide-caption">
                                <div class="slide-title">
                                    <h2>Let’s Support </h2>
                                    <h2><span>For Clothes </span></h2>
                                </div>
                                <div class="slide-subtitle">
                                    <p>One man's old clothes is another man's new clothes; donate your old clothes.</p>
                                </div>
                                <div class="btns">
                                    <a href="causes.php" class="theme-btn">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <img src="assets/images/slider/slide-03.jpg" alt class="slider-bg">
                        <div class="row">
                            <div class="col col-md-6 slide-caption">
                                <div class="slide-title">
                                    <h2>Let’s Support</h2>
                                    <h2><span>for Education</span></h2>
                                </div>
                                <div class="slide-subtitle">
                                    <p> We bring thousands of books to people worldwide for free. Please browse our
                                        inventory of gently-used titles or request a book from our library.</p>
                                </div>
                                <div class="btns">
                                    <a href="causes.phps" class="theme-btn">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <img src="assets/images/slider/slide-4.jpg" alt class="slider-bg">
                        <div class="row">
                            <div class="col col-md-6 slide-caption">
                                <div class="slide-title">
                                    <h2><span>Spread Love</span></h2>
                                </div>
                                <div class="slide-subtitle">
                                    <p>Not all of us can do great things</p>
                                    <p>But we can do small things with great love.</p>
                                </div>
                                <div class="btns">
                                    <a href="donate.php" class="theme-btn">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->
        <!--features start -->
        <div class="features-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="icofont-shirt"></i> IcoFont icon for Clothes
                            </div>
                            <div class="features-content">
                                <p>Donate For</p>
                                <h3>Clothes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="icofont-money"></i> IcoFont icon for Money
                            </div>
                            <div class="features-content">
                                <p>Donate For</p>
                                <h3>Money</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="features-item-2">
                            <div class="features-icon">
                                <i class="icofont-book"></i> IcoFont icon for Books
                            </div>
                            <div class="features-content">
                                <p>Donate For</p>
                                <h3>Books</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--features-features end -->
        <!-- about-area start-->
        <div class="about-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="about-img">
                            <img src="assets/images/Volunteers.jpg" alt="">
                            <div class="video-btn">
                                <ul>
                                    <li><a href="https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1" class="video-btn"
                                            data-type="iframe">
                                            <i class="fi flaticon-play-button"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="about-content">
                            <div class="section-title">
                                <h2>About Us</h2>
                            </div>
                            Hopefull Hearts inspires employees and organizations to support each other and causes they
                            care about.
                            We help nonprofits fundraise unrestricted, sustainable dollars through the workplace, and we
                            help employers
                            achieve their giving, engagement, and social impact goals. We do this to bring more
                            resources to the nonprofits
                            that are changing our world.


                            <div class="btns">
                                <div><a class="theme-btn" href="about.php">More About Us..</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end-->
        <!-- start tp-site-footer -->
        <?php include ("footer1.php"); ?>
        <!-- end tp-site-footer -->
    </div>
    <!-- end of page-wrapper -->
    <!-- theme-change-btn -->
    <div class="theme-change-btn">
        <button id="change-theme-btn">
            <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
            <span class="cng-btn-2">Dark <i class="ti-palette"></i></span>
        </button>
    </div>

    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <!-- All JavaScript files
        ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>

    <script>
        // JavaScript to toggle sidebar
        document.addEventListener("DOMContentLoaded", function () {
            var sidebarToggle = document.getElementById("sidebarToggle");
            var sidebarClose = document.getElementById("sidebarClose");
            var sidebar = document.getElementById("sidebar");

            sidebarToggle.addEventListener("click", function () {
                sidebar.classList.add("show");
            });

            sidebarClose.addEventListener("click", function () {
                sidebar.classList.remove("show");
            });
        });
    </script>

</body>


<!-- Mirrored from themepresss.com/tf/html/sadakat-live/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 13:43:25 GMT -->

</html>