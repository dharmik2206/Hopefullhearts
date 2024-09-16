<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hopefull_hearts";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which donation form is submitted
    if (isset($_POST["book_submit"])) {
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $quantity = $_POST["quantity"];
        $type = $_POST["type"];

        // SQL query to insert book donation data into BookDonationDetails table
        $sql = "INSERT INTO BookDonationDetails (bookdonationquantity, bookdonationtype, bookdonationaddress, bookdonationdate, name)
                VALUES (?, ?, ?, CURDATE(), ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $quantity, $type, $address, $name);

        if ($stmt->execute()) {
            echo "<script>alert('Your Book Donation Details have been successfully noted!');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } elseif (isset($_POST["cloth_submit"])) {
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $quantity = $_POST["quantity"];
        $size = $_POST["size"];

        // SQL query to insert cloth donation data into ClotheDonationDetails table
        $sql = "INSERT INTO ClotheDonationDetails (clothedonationquantity, clothedonationsize, clothedonationaddress, clothedonationdate, name)
                VALUES (?, ?, ?, CURDATE(), ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $quantity, $size, $address, $name);

        if ($stmt->execute()) {
            echo "<script>alert('Your Cloth Donation Details have been successfully noted!');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from themepresss.com/tf/html/sadakat-live/causes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 13:45:56 GMT -->
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
                                        <li><a class="theme-btn" href="donate.php">Donate Now</a></li>
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
                                <li class="menu-item-has-children">
                                    <a href="causes.php">Causes</a>
                                </li>
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
                                <h2>Single Causes</h2>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><span>Causes</span></li>
                                    <li><span>Book & Clothes Donations</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .tp-breadcumb-area end -->

            <!-- tp-event-details-area start -->
            <div class="tp-case-details-area ">
                <div class="container" style="padding-top: 100px">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tp-case-details-wrap">
                                <div class="tp-case-details-text">
                                    <div id="Description">
                                        <div class="tp-case-details-img">
                                            <img src="assets/images/event-details.jpg" alt="">
                                        </div>
                                        <div class="tp-case-content">
                                            <div class="tp-case-text-top">
                                                <h2>Ensure Book Donation for every poor Children’s!</h2>
                                                <!-- Other content goes here -->
                                                <div class="progress-section">
                                                    <div class="process">
                                                        <div class="progress">
                                                            <div class="progress-bar">
                                                                <div class="progress-value"><span>65.5</span>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><span>Raised:</span> 6505</li>
                                                    <li><span>Goal:</span> 10000</li>
                                                    <li><span>Donar:</span> 380</li>
                                                </ul>
                                                <div class="case-b-text">
                                                    <p>Our mission is committed to ensuring that every individual in need gains access to the 
                                                        empowering effect of clothing. These situations are straightforward and easily identifiable.
                                                        During periods of freedom, when our choices are unencumbered and there are no obstacles to 
                                                        supporting our cause, we must seize every opportunity to provide donated Books.</p>
                                                </div>
                                                <div class="submit-area sub-btn" style="padding-left: 150px">
                                                    <button style="border: none;" class="theme-btn submit-btn" onclick="showBookDonationForm()">Donate Books</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tp-case-details-wrap">
                                <div class="tp-case-details-text">
                                    <div id="Description">
                                        <div class="tp-case-details-img">
                                            <img src="assets/images/event-details.jpg" alt="">
                                        </div>
                                        <div class="tp-case-content">
                                            <div class="tp-case-text-top">
                                                <h2>Ensure Clothes Donation for every poor Children's!</h2>
                                                <!-- Other content goes here -->
                                                <div class="progress-section">
                                                    <div class="process">
                                                        <div class="progress">
                                                            <div class="progress-bar">
                                                                <div class="progress-value"><span>56.5</span>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><span>Raised:</span> 5600</li>
                                                    <li><span>Goal:</span> 8000</li>
                                                    <li><span>Donar:</span> 290</li>
                                                </ul>
                                                <div class="case-b-text">
                                                    <p>Our mission is committed to ensuring that every individual in need gains access to the 
                                                        empowering effect of clothing. These situations are straightforward and easily identifiable.
                                                        During periods of freedom, when our choices are unencumbered and there are no obstacles to
                                                        supporting our cause, we must seize every opportunity to provide donated clothing.</p>
                                                </div>
                                                <div class="submit-area sub-btn" style="padding-left: 150px;">
                                                    <button style="border: none;" class="theme-btn submit-btn" onclick="showClothDonationForm()">Donate Clothes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="clothDonationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="padding-top: 10px; color:grey">Cloth Donation Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="cdonationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No:</label>
                        <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Clothes Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity of clothes" required>
                    </div>
                    <div class="form-group">
                        <label for="size">Clothes Size:</label>
                        <select class="form-control" id="size" name="size">
                            <option value="1-8 years">1-8 years</option>
                            <option value="8-12 years">8-12 years</option>
                            <option value="12-20 years">12-20 years</option>
                            <option value="20 above">20 above</option>
                        </select>
                    </div>
                    <button type="submit" name="cloth_submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Donation Form - Book Donation -->
<div class="modal" id="bookDonationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="padding-top: 10px; color:grey">Book Donation Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="bdonationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No:</label>
                        <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Book Quantity:</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity of books" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Book Type:</label>
                        <select class="form-control" id="type" name="type">
                            <option value="Fair Book">Fair Book</option>
                            <option value="Knowledge Book">Knowledge Book</option>
                            <option value="Religious Book">Religious Book</option>
                            <option value="Historical Book">Historical Book</option>
                        </select>
                    </div>
                    <button type="submit" name="book_submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
                <!-- tp-event-details-area end -->
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
                                                <li><a href="contact.html">Causes</a></li>
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

            <script>
            function showClothDonationForm() {
                $('#clothDonationModal').modal('show');
            }

            function showBookDonationForm() {
                $('#bookDonationModal').modal('show');
            }
        </script>
    </body>


    <!-- Mirrored from themepresss.com/tf/html/sadakat-live/causes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 13:46:18 GMT -->
</html>
