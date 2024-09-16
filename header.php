<?php
    include("loginnot_check.php");
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

    <header id="header" class="tp-site-header tp-header-style-3">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-7 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-call"></i> +91 63558-77834</li>
                                    <li><i class="fi flaticon-envelope"></i> hopefulherts@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-5 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a class="theme-btn" href="donate.php">Donate Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <img src="assets/finallogo.png" style="max-width: 320px; max-height: 110px" alt="logo">
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="index1.php">Home</a>
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
                        <button class="search-toggle-btn" style="padding-bottom: 10px;" id="sidebarToggle">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar">
                    <div class="header-search-form-wrapper">
                        <button class="close-sidebar-btn" id="sidebarClose">
                            <i class="ti-close"></i>
                        </button>
                        <ul class="sidebar-menu" style="padding-top: 50px">
                            <li><a href="index1.php"><span class="material-symbols-outlined">home</span>&nbsp;&nbsp;
                                    Home</a></li>
                            <li><a href="donate.php"><span
                                        class="material-symbols-outlined">volunteer_activism</span>&nbsp;&nbsp;
                                    Donate</a></li>
                            <li><a href="event.php"><span class="material-symbols-outlined">event</span>&nbsp;&nbsp;
                                    View Event</a></li>
                            <li><a href="mange_profile.php"><span class="material-symbols-outlined">manage_accounts</span>&nbsp;&nbsp;
                                    Manage Profile</a></li>
                            <li><a href="#"><span class="material-symbols-outlined">award_star</span>&nbsp;&nbsp; Get
                                    Certificate </a></li>
                            <li><a href="#"><span class="material-symbols-outlined">rate_review</span>&nbsp;&nbsp;
                                    Feedback</a></li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="logout.php" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    </span>
                                    <span class="hide-menu"><a href="logout.php"> Logout </a></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- theme-change-btn -->
    <div class="theme-change-btn">
        <button id="change-theme-btn">
            <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
            <span class="cng-btn-2">Dark <i class="ti-palette"></i></span>
        </button>
    </div>
</body>
<script>
    // JavaScript to toggle sidebar
    document.addEventListener("DOMContentLoaded", function() {
        var sidebarToggle = document.getElementById("sidebarToggle");
        var sidebarClose = document.getElementById("sidebarClose");
        var sidebar = document.getElementById("sidebar");

        sidebarToggle.addEventListener("click", function() {
            sidebar.classList.add("show");
        });

        sidebarClose.addEventListener("click", function() {
            sidebar.classList.remove("show");
        });
    });
</script>

</html>