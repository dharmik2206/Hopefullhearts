<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      text-align: center;
      height: 200vh;
      background-color: #ffffff;
      background-size: cover;
    }
  </style>
  <link href=".\assets\css\themify-icons.css" rel="stylesheet">
  <link href=".\assets\css\font-awesome.min.css" rel="stylesheet">
  <link href=".\assets\css\flaticon.css" rel="stylesheet">
  <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
  <link href=".\assets\css\animate.css" rel="stylesheet">
  <link href=".\assets\css\owl.carousel.css" rel="stylesheet">
  <link href=".\assets\css\owl.theme.css" rel="stylesheet">
  <link href=".\assets\css\slick.css" rel="stylesheet">
  <link href=".\assets\css\slick-theme.css" rel="stylesheet">
  <link href=".\assets\css\swiper.min.css" rel="stylesheet">
  <link href=".\assets\css\owl.transitions.css" rel="stylesheet">
  <link href=".\assets\css\jquery.fancybox.css" rel="stylesheet">
  <link href=".\assets\css\odometer-theme-default.css" rel="stylesheet">
  <link href=".\assets\css\nice-select.css" rel="stylesheet">
  <link href=".\assets\css\signup.css" rel="stylesheet">
  <link href=".\assets\css\style.css" rel="stylesheet">
  <link href=".\assets\css\light.css" rel="stylesheet">
</head>

<body>
  <?php include("header.php"); ?>


  <?php include("footer.php"); ?>


</body>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>
<script src="assets/js/gsap.min.js"></script>
<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

</html>

<!-- <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      color: #000000;
      font-family: Arial, sans-serif;
      text-align: center;
      height: 200vh;
      background-image: url('https://via.placeholder.com/1500');
      background-size: cover;
    }

    .container {
      /* background: rgba(255, 255, 255, 0.9); */

      /* border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
      max-width: 2500px;
      width: 100%;
    }

    h1 {
      font-size: 2.5rem;
      margin: 0;
      color: #000000;
    }

    p {
      font-size: 1.2rem;
      color: black;
    }

    .countdown {
      font-size: 2rem;
      margin: 0px 0;
      font-weight: bold;
      color: #e74c3c;
    }

    .contact-info a {
      color: #3498db;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }
  </style>
  <link href=".\assets\css\themify-icons.css" rel="stylesheet">
  <link href=".\assets\css\font-awesome.min.css" rel="stylesheet">
  <link href=".\assets\css\flaticon.css" rel="stylesheet">
  <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
  <link href=".\assets\css\animate.css" rel="stylesheet">
  <link href=".\assets\css\owl.carousel.css" rel="stylesheet">
  <link href=".\assets\css\owl.theme.css" rel="stylesheet">
  <link href=".\assets\css\slick.css" rel="stylesheet">
  <link href=".\assets\css\slick-theme.css" rel="stylesheet">
  <link href=".\assets\css\swiper.min.css" rel="stylesheet">
  <link href=".\assets\css\owl.transitions.css" rel="stylesheet">
  <link href=".\assets\css\jquery.fancybox.css" rel="stylesheet">
  <link href=".\assets\css\odometer-theme-default.css" rel="stylesheet">
  <link href=".\assets\css\nice-select.css" rel="stylesheet">
  <link href=".\assets\css\signup.css" rel="stylesheet">
  <link href=".\assets\css\style.css" rel="stylesheet">
  <link href=".\assets\css\light.css" rel="stylesheet">
</head>

<body>
Body Wrapper -->
<!-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed"> -->
<!-- Sidebar Start -->
<!-- <aside class="left-sidebar"> -->
<!-- Sidebar scroll-->
<!-- <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src=".\assets\Dashboard\src\assets\images\logos\web.png" width="80" alt=""
              style="margin-left: 50px; margin-top: 10px; height:100px; " />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div> -->
<!-- Sidebar navigation-->
<!-- <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Functionalty</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="manage_donation_type.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-square-poll-vertical"></i>
                </span>
                <span class="hide-menu">Manage donation type </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-list"></i>
                </span>
                <span class="hide-menu">View donor list </span>
              </a>

            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-tag"></i>
                </span>
                <span class="hide-menu">View organization </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-regular fa-newspaper"></i>
                </span>
                <span class="hide-menu">Manage news and events </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-brands fa-get-pocket"></i>
                </span>
                <span class="hide-menu">Receive donation </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-bars"></i>
                </span>
                <span class="hide-menu">View reports </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </span>
                <span class="hide-menu">Logout </span>
              </a>
            </li>
          </ul>
        </nav> -->
<!-- </div> -->
<!-- End Sidebar scroll-->
<!-- </aside> -->
<!-- End Sidebar navigation -->
<!-- </div> -->

<!--  Sidebar End -->
<!-- Main wrapper
<div class="body-wrapper"> -->
<!--  Header Start -->
<!-- <header class="app-header">

  </header> -->
<!--  Header End -->
<!-- <div class="container-fluid" style="margin-left: 360px"> -->
<!--  Row 1 -->
<!-- <div class="row">
      <div class="col-lg-18">
        <div class="row">
          <div class="col-lg-12">
            <!-- Yearly Donation -->
<!-- <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Yearly Donation</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">5000+ Books</h4>
                    <h4 class="fw-semibold mb-3">3000+ Clothes</h4>
                    <div class="d-flex align-items-center mb-3">

                    </div>
                    <div class="d-flex align-items-center">

                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12"> -->
<!-- Monthly Earnings -->
<!-- <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold">Monthly Donation </h5>
                    <h4 class="fw-semibold mb-3">1000+ Books</h4>
                    <h4 class="fw-semibold mb-3">2000+ Clothes</h4>
                    <div class="d-flex align-items-center pb-1">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">

                    </div>
                  </div>
                </div>
              </div>
              <div id="earning"></div>
            </div> -->
<!-- </div>
        </div>
      </div>
    </div> -->
<!-- <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="mb-4">
              <h5 class="card-title fw-semibold">Recent pickup</h5>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Donate received from dhrumil busa of 40 books and 45
                  clothes</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded <a
                    href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Donate received from hastika sojitra of 50 books and
                  50 clothes</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded <a
                    href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Donation Done</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Donation</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Donor name</h6>
                    </th>

                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">books</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">clothes</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Dhrumil Busa</h6>
                      <span class="fw-normal">Donor</span>
                    </td>

                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold mb-0 fs-4">40</h6>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">45</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">2</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Hastika Sojitra</h6>
                      <span class="fw-normal">Donor</span>
                    </td>

                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold mb-0 fs-4">50</h6>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">50</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">3</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Shrutirupa movaliya</h6>
                      <span class="fw-normal">Donor</span>
                    </td>

                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold mb-0 fs-4">60</h6>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">45</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">4</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Aniket kachhadiya</h6>
                      <span class="fw-normal">Donor</span>
                    </td>

                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold mb-0 fs-4">45</h6>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">60</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>
<script src="assets/js/gsap.min.js"></script>
<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>



<!-- This is cooming soon page -->
<!-- <div class="container">
        <h1 style="color: #000000;">We're Coming Soon!</h1>
        <p>Our website is currently under construction. We’re working hard to bring you a new and improved experience.
          Stay
          tuned!</p>
        <div class="countdown" id="countdown"> -->
<!-- Countdown will be injected here by JavaScript -->
<!-- </div>
        <div class="contact-info">
          <p>For inquiries, please contact us at <a href="mailto:hopefullhearts@gmail.com">Hopefullhearts@gmail.com</a>
          </p>
        </div>
        <div>
          <a style="color:#000000;" href="index.php">Logout</a>
        </div>
      </div> -->
<!-- <script>
        function calculateTimeRemaining(endDate) {
          const now = new Date();
          const timeRemaining = endDate - now;
          const days = Math.floor(timeRemaining / (5000 * 60 * 60 * 24));
          const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
          return { days, hours, minutes, seconds };
        }

        function updateCountdown() {
          const endDate = new Date('2024-12-31T23:59:59'); // Set your end date here
          const { days, hours, minutes, seconds } = calculateTimeRemaining(endDate);
          document.getElementById('countdown').innerHTML =
            `${days} Days ${hours} Hours ${minutes} Minutes ${seconds} Seconds`;
        }

        setInterval(updateCountdown, 1000); // Update countdown every second
        updateCountdown(); // Initial call
      </script> -->
</body>

</html>