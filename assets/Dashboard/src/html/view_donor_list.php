<?php
session_start();
include 'db.php';
$sqlDonor = "SELECT * FROM donormaster";

// Execute the query for DonorMaster table
$resultDonor = mysqli_query($conn, $sqlDonor);

// SQL query to fetch data from PickupMenMaster table
$sqlPickupMen = "SELECT * FROM pickupmenmaster";

// Execute the query for PickupMenMaster table
$resultPickupMen = mysqli_query($conn, $sqlPickupMen);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>manage donation type</title>
    <link rel="website Icon" type="png" href="../assets/images/logos/web.png">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<style>
    /* Style for tables */
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container-fluid {
            margin-left: 200px;
            padding: 20px;
        }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      border: 1px solid #dddddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Additional styles for the table class */
    .table {
      margin-bottom: 1rem;
      background-color: transparent;
      width: 100%;
      max-width: 100%;
      margin-top: 10px;
      border-collapse: collapse;
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
      border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }

    .table-bordered {
      border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody+tbody {
      border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
      background-color: #b8daff;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody+tbody {
      border-color: #7abaff;
    }

    /* Add more styles as needed */
  </style>
<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/web.png" width="80" alt=""
                            style="margin-left: 50px; margin-top: 10px; height:100px; " />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="admin_dashboard.php" aria-expanded="false">
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
                            <a class="sidebar-link" href="view_donor_list.php" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-list"></i>
                                </span>
                                <span class="hide-menu">View user list </span>
                            </a>

                        </li>
                       <li class="sidebar-item">
                                <a class="sidebar-link" href="#" aria-expanded="false" onclick="showInnerDivs(event)">
                                    <span>
                                         <i class="fa-solid fa-tag"></i>
                                    </span>
                                    <span class="hide-menu">Manage Profile </span>
                                </a>
                                <div class="inner-div" style="display: none; margin:10px;">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body" style="padding: 5px;">
                                                    <a href="view.php" class="card-link">
                                                        <h5 class="card-title">View Profile</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body" style="padding: 5px;">
                                                    <a href="update.php" class="card-link">
                                                        <h5 class="card-title">Update Profile</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="manage_news_event.php" aria-expanded="false">
                                <span>
                                    <i class="fa-regular fa-newspaper"></i>
                                </span>
                                <span class="hide-menu">Manage news and events </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="receive_donation.php" aria-expanded="false">
                                <span>
                                    <i class="fa-brands fa-get-pocket"></i>
                                </span>
                                <span class="hide-menu">Receive donation </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="view_reports.php" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                                <span class="hide-menu">View reports </span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                                <a class="sidebar-link" href="/external_final/index.php" aria-expanded="false">
                                    <span>
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    </span>
                                    <span class="hide-menu">Logout </span>
                                </a>

                            </li>


            </div>
            <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="container-fluid" style="margin-left: 300px; ">
        <div class="row">
            
            <div class="col-lg-10 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                            <h2>Donors</h2>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Contact</th>
                                        <th>Date of Birth</th>
                                        <th>Email</th>
                                        <th>Street</th>
                                        <th>Area</th>
                                        <th>City</th>
                                        <th>Pincode</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Fetch data from DonorMaster table
                                    while ($row = mysqli_fetch_assoc($resultDonor)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['donorId'] . "</td>";
                                        echo "<td>" . $row['donorUserName'] . "</td>";
                                        echo "<td>" . $row['donorContact'] . "</td>";
                                        echo "<td>" . $row['donorDob'] . "</td>";
                                        echo "<td>" . $row['donorEmail'] . "</td>";
                                        echo "<td>" . $row['donorStreet'] . "</td>";
                                        echo "<td>" . $row['donorArea'] . "</td>";
                                        echo "<td>" . $row['donorCity'] . "</td>";
                                        echo "<td>" . $row['donorPincode'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-left: 300px; ">
        <div class="row">
            
            <div class="col-lg-10 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                            <h2>Pickup Men</h2>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Contact</th>
                                        <th>Date of Birth</th>
                                        <th>Email</th>
                                        <th>Street</th>
                                        <th>Area</th>
                                        <th>City</th>
                                        <th>Pincode</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Fetch data from PickupMenMaster table
                                    while ($row = mysqli_fetch_assoc($resultPickupMen)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['pickupMenId'] . "</td>";
                                        echo "<td>" . $row['pickupMenUserName'] . "</td>";
                                        echo "<td>" . $row['pickupMenContact'] . "</td>";
                                        echo "<td>" . $row['pickupMenDob'] . "</td>";
                                        echo "<td>" . $row['pickupMenEmail'] . "</td>";
                                        echo "<td>" . $row['pickupMenStreet'] . "</td>";
                                        echo "<td>" . $row['pickupMenArea'] . "</td>";
                                        echo "<td>" . $row['pickupMenCity'] . "</td>";
                                        echo "<td>" . $row['pickupMenPincode'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <script>function showInnerDivs(event) {
                                    event.preventDefault(); // Prevent default behavior of link click

                                    var innerDiv = document.querySelector('.inner-div');
                                    if (innerDiv.style.display === "none") {
                                        innerDiv.style.display = "block";
                                    } else {
                                        innerDiv.style.display = "none";
                                    }
                                }
                            </script>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>