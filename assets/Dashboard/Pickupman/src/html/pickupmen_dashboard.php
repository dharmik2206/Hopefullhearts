<?php
session_start();
require('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: /project/index.php");
    exit();
} 
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="website Icon" type="png" href="../assets/images/logos/web.png">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        /* Style for tables */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden; /* Hide horizontal overflow */
        }

        .container-fluid {
            margin-left: 300px; /* Adjusted margin */
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
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

        .table th, .table td {
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

        .table-sm th, .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th, .table-borderless td, .table-borderless thead th, .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary, .table-primary>th, .table-primary>td {
            background-color: #b8daff;
        }

        .table-primary th, .table-primary td, .table-primary thead th, .table-primary tbody+tbody {
            border-color: #7abaff;
        }

        /* Adjust container to avoid overflow */
        .body-wrapper {
            margin-left: 0;
        }

        .page-wrapper {
            display: flex;
        }

        .left-sidebar {
            width: 300px; /* Adjust width as needed */
            position: fixed;
        }

        .container-fluid {
            margin-left: 300px;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.php" class="text-nowrap logo-img">
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
                            <a class="sidebar-link" href="pickupmen_dashboard.php" aria-expanded="false">
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
                            <a class="sidebar-link" href="manage_profile.php" aria-expanded="false"
                                onclick="showInnerDivs(event)">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                                <span class="hide-menu">Manage Profile </span>
                            </a>
                            <div class="inner-div" style="display: none; margin:10px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body" style="padding: 5px;">
                                                <a href="view_profile.php" class="card-link">
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
                            <a class="sidebar-link" href="view_donation.php" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-tag"></i>
                                </span>
                                <span class="hide-menu">View Donation </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="distance_mapping.php" aria-expanded="false">
                                <span>
                                    <i class="fa-brands fa-get-pocket"></i>
                                </span>
                                <span class="hide-menu">Distance mapping </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/project/logout.php" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </span>
                                <span class="hide-menu">Logout </span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Content -->
        <div class="container-fluid">
            <center>
                <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
                <p>Your Pic ID: <?php echo htmlspecialchars($_SESSION['pickupMenId']); ?></p>
            </center>
            
            <div class="body-wrapper">
                <div class="row">
                    <div class="col-lg-9" style="position: sticky;">
                        <!-- Chart Container -->
                        <canvas id="donationChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            
            <?php
            // Fetch latest book donations from database
            $sql_book = "SELECT SUM(bookdonationquantity) AS totalBooks FROM BookDonationDetails";
            $result_book = $conn->query($sql_book);
            $totalBooksDonated = 0;
            if ($result_book->num_rows > 0) {
                $row_book = $result_book->fetch_assoc();
                $totalBooksDonated = $row_book['totalBooks'];
            }

            // Fetch latest cloth donations from database
            $sql_cloth = "SELECT SUM(clothedonationquantity) AS totalClothes FROM ClotheDonationDetails";
            $result_cloth = $conn->query($sql_cloth);
            $totalClothesDonated = 0;
            if ($result_cloth->num_rows > 0) {
                $row_cloth = $result_cloth->fetch_assoc();
                $totalClothesDonated = $row_cloth['totalClothes'];
            }

            $conn->close();
            ?>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Donation data from PHP
                let totalBooksDonated = <?php echo $totalBooksDonated; ?>;
                let totalClothesDonated = <?php echo $totalClothesDonated; ?>;

                // Chart.js configuration
                let ctx = document.getElementById('donationChart').getContext('2d');
                let donationChart = new Chart(ctx, {
                    type: 'doughnut', // Use doughnut chart for round shape
                    data: {
                        labels: ['Books Donated', 'Clothes Donated'],
                        datasets: [{
                            data: [totalBooksDonated, totalClothesDonated],
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.5)', // Blue color for books
                                'rgba(255, 99, 132, 0.5)', // Red color for clothes
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 99, 132, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        cutout: '80%', // Adjust cutout percentage for the doughnut shape
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom'
                            }
                        }
                    }
                });
            </script>

            <script>
                function showInnerDivs(event) {
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
        </div>
    </div>
</body>

</html>
