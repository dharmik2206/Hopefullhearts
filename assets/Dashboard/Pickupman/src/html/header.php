<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="website Icon" type="png" href="../assets/images/logos/web.png">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<style>
    body {
        overflow-x: hidden;
    }

    .container-fluid {
        background-color: #ffffff;
        /* Example background color */
        padding: 20px;
        border-radius: 8px;
        /* Rounded corners */
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    td,
    th {
        padding: 12px;
        border: 1px solid #ddd;
    }
</style>

<body>
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
</body>

</html>