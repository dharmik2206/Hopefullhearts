<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "hopefull_hearts";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $note = $_POST["note"];

        // Prepare SQL statement
        $sql = "INSERT INTO contacts (name, email, phone, address, note) 
                VALUES ('$name', '$email', '$phone', '$address', '$note')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
             echo "<script>alert('Your Request Has Been Submited!');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else {
        // Handle case when form is not submitted
        echo "Form not submitted!";
    }

    // Close database connection
    $conn->close();

?>


<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from themepresss.com/tf/html/sadakat-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 13:48:05 GMT -->
    <head>
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
            <header id="header" class="tp-site-header tp-header-style-3">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-sm-7 col-12">
                                <div class="contact-intro">
                                    <ul>
                                        <li><i class="fi flaticon-call"></i> +91 98795-10194</li>
                                        <li><i class="fi flaticon-envelope"></i> hopefullhearts8@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-md-6 col-sm-5 col-12">
                                <div class="contact-info">
                                    <ul>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Sign Up</a></li>
<!--                                        <li><a class="theme-btn" href="donate.php">Donate Now</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end topbar -->
                <nav class="navigation navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="assets/finallogo.png" style="max-width: 320px; max-height: 110px" alt="logo">
                        </div>
                        <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                            <button class="close-navbar"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav">
                                <li class="menu-item-has-children">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="event.php">Event</a>
                                </li>
<!--                                <li class="menu-item-has-children">
                                    <a href="causes.php">Causes</a>
                                </li>-->
                                <li class="menu-item-has-children">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div><!-- end of nav-collapse -->
                        <div class="cart-search-contact">
                            <div class="header-search-form-wrapper">
                                <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                                <div class="header-search-form">
                                    <form>
                                        <div>
                                            <input type="text" class="form-control" placeholder="Search here...">
                                            <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </header>
            <!-- end of header -->
            <!-- .tp-breadcumb-area start -->
            <div class="tp-breadcumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tp-breadcumb-wrap">
                                <h2>Contact Us</h2>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><span>Contact</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .tp-breadcumb-area end -->
            <!-- start contact-pg-contact-section -->
            <section class="contact-pg-contact-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Our Contacts</h2>
                            </div>
                            <div class="contact-details">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                        <h5>Our Location</h5>
                                        <p>Surat City</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="ti-mobile"></i>
                                        </div>
                                        <h5>Phone</h5>
                                        <p>+91 98795-10194</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="ti-email"></i>
                                        </div>
                                        <h5>Email</h5>
                                        <p>hopefullhearts8@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="contact-form-area">
                                <div class="section-title-s3 section-title-s5">
                                    <h2>Quick Contact Form</h2>
                                </div>
                               <div class="contact-form">
    <form method="post" class="contact-validation-active"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
        </div>
        <div>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
        </div>
        <div>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
        </div>
        <div>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address*">
        </div>
        <div class="comment-area">
            <textarea name="note" id="note" placeholder="Case description*"></textarea>
        </div>
        <div class="submit-area">
            <button type="submit" class="theme-btn" name="contactsub">Submit Now</button>
            <div id="loader">
                <i class="ti-reload"></i>
            </div>
        </div>
        <div class="clearfix error-handling-messages">
            <div id="success">Thank you</div>
        </div>
    </form>
</div>
                            </div>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67288705584!2d72.65748108616178!3d21.159440567575498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1698296979034!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>                        
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end contact-pg-contact-section -->
            <!-- news-letter-section start-->
            <section class="news-letter-section s2">
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
                <footer class="tp-site-footer">
                    <div class="tp-upper-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col col-lg-3 col-md-3 col-sm-6">
                                    <div class="widget about-widget">
                                        <div class="logo widget-title">
                                            <img class="ft-logo-1" src="assets/finallogo.png" alt="blog">
                                        </div>
                                        <p>Every Charitable act is a stepping stone towards heaven. </p>
                                        <ul>
                                            <li>
                                                <div class="parallax-wrap">
                                                    <div class="parallax-element">
                                                        <a href="#">
                                                            <i class="ti-facebook"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="parallax-wrap">
                                                    <div class="parallax-element">
                                                        <a href="#">
                                                            <i class="ti-twitter-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="parallax-wrap">
                                                    <div class="parallax-element">
                                                        <a href="#">
                                                            <i class="ti-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="parallax-wrap">
                                                    <div class="parallax-element">
                                                        <a href="#">
                                                            <i class="ti-google"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col col-lg-2 col-md-3 col-sm-6">
                                    <div class="widget link-widget">
                                        <div class="widget-title">
                                            <h3>Useful Links</h3>
                                        </div>
                                        <ul>
                                            <li><a href="about.html">Home</a></li>
                                            <li><a href="causes.html">Event</a></li>
<!--                                            <li><a href="contact.html">Causes</a></li>-->
                                            <li><a href="event.html">About Us</a></li>
                                            <li><a href="event.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                                    <div class="widget market-widget tp-service-link-widget">
                                        <div class="widget-title">
                                            <h3>Contact </h3>
                                        </div>
                                        <div class="contact-ft">
                                            <ul>
                                                <li><i class="fi flaticon-pin"></i>Surat City</li>
                                                <li><i class="fi flaticon-call"></i>+91 98795-10194</li>
                                                <li><i class="fi flaticon-envelope"></i>hopefullhearts8@gmail.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-6">
                                    <div class="widget instagram">
                                        <div class="widget-title">
                                            <h3>Instagram</h3>
                                        </div>
                                        <ul class="d-flex">
                                            <li><a href="#"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                            <li><a href="#"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end container -->
                    </div>
                    <div class="tp-lower-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <p class="copyright">&copy; 2022 HopefullHearts. All rights reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
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


    <!-- Mirrored from themepresss.com/tf/html/sadakat-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 13:48:05 GMT -->
</html>