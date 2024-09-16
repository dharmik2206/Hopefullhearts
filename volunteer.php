<?php
session_start();
    include("loginnot_check.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepresss.com/tf/html/sadakat-live/volunteer.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 12:32:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Sadakat - Charity Nonprofit HTML 5 Template</title>
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

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
        <?php include("header.php"); ?>
        <!-- end of header -->
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Become a Volunteer</h2>
                            <ul>
                                <li><a href="index-2.php">Home</a></li>
                                <li><span>Volunteer</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- volunteer-area-start -->
        <div class="volunteer-area ">
            <div class="volunteer-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title section-title2 text-center">
                                <div class="thumb-text">
                                    <span>Volunteer</span>
                                </div>
                                <h2>Become a Volunteer</h2>
                                <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="volunteer-item">
                                <div class="volunteer-img-wrap">
                                    <div class="volunter-img">
                                        <img src="assets/images/volunteer.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="volunteer-contact">
                                <div class="volunteer-contact-form">
                                    <form method="post" class="contact-validation-active" id="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Upload Your CV</label>
                                                <input id="file" type="file" class="form-control" name="file">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                                            </div>
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                                <div id="loader">
                                                    <i class="ti-reload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- volunteer-area-end -->
        <!-- start team-section -->
        <section class="team-section v2 section-padding ">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3">
                        <div class="section-title text-center">
                            <span>Meet Our Team</span>
                            <h2>Our Expert Volunteer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/team/team-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.php">Devin Robertson</a></h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/team/team-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.php">Rickey Goodman</a></h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/team/team-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.php">Jean Washington</a></h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->
        <!-- news-letter-section start-->
        <section class="news-letter-section">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe our Newsletter</h3>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <div class="newsletter-form">
                                    <form>
                                        <div>
                                            <input type="text" placeholder="Enter Your Email" class="form-control">
                                            <button class="bigCursor" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- news-letter-section end-->
        <div class="tp-ne-footer">
            <!-- start tp-site-footer -->
            <?php include("footer1.php"); ?>
            <!-- end tp-site-footer -->
        </div>
    </div>
    <!-- end of page-wrapper -->
    <!-- theme-change-btn -->
    <div class="theme-change-btn">
         <button id="change-theme-btn">
            <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
            <span class="cng-btn-2">Dark  <i class="ti-palette"></i></span>
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
</body>


<!-- Mirrored from themepresss.com/tf/html/sadakat-live/volunteer.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 12:32:32 GMT -->
</html>