<?php
session_start();
include 'db.php';
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
    .container-fluid {
        margin-left: 300px;
    }

    .card {
        margin-top: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    select {
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-right: 10px;
    }

    button {
        padding: 8px 16px;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
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
                                <span class="hide-menu">View donor list </span>
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="view_organization.php" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-tag"></i>
                                </span>
                                <span class="hide-menu">View organization </span>
                            </a>
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
                        <!-- <li class="sidebar-item">
                            
                            
                            <a class="sidebar-link" href="#" aria-expanded="false" onclick="showInnerDivs(event)">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                                <span class="hide-menu">View reports </span>
                            </a>
                            <div class="inner-div">
                                <div>TPS Report</div>
                                <div>MIS Reports</div>
                            </div>
                        </li> -->

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#" aria-expanded="false" onclick="showInnerDivs(event)">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                                <span class="hide-menu">View reports </span>
                            </a>
                            <div class="inner-div" style="display: none; margin:10px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body" style="padding: 5px;">
                                                <a href="tps.php" class="card-link">
                                                    <h5 class="card-title">Daily Report</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body" style="padding: 5px;">
                                                <a href="mis.php" class="card-link">
                                                    <h5 class="card-title">Monthly Reports</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <div class="container-fluid" style="margin-left: 300px;">
        <div class="row">
            <div class="col-lg-10 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h2>Donation</h2>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="donation_type">Select Donation Type:</label>
                            <select name="donation_type" id="donation_type">
                                <option value="book">Book Donation</option>
                                <option value="cloth">Cloth Donation</option>
                                <option value="money">Money Donation</option>
                            </select>
                            <br><br>
                            <label for="date">Select Date:</label>
                            <select name="date" id="date">
                                <?php
                                // Fetch distinct dates from the database for all donation types
                                $distinctDates = array();
                                $sql1 = "SELECT DISTINCT donation_date FROM (SELECT bookdonationdate AS donation_date FROM BookDonationDetails UNION SELECT clothdonationdate AS donation_date FROM ClothDonationDetails UNION SELECT moneydonationdate AS donation_date FROM MoneyDonationDetails) AS all_donations";
                                $result = mysqli_query($conn, $sql1);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $distinctDates[] = $row['donation_date'];
                                }

                                // Display each distinct date as an option in the dropdown list
                                foreach ($distinctDates as $date) {
                                    echo "<option value='$date'>$date</option>";
                                }
                                ?>
                            </select>
                            <br><br>
                            <button type="submit" name="show">Show</button>
                        </form>
                        <?php
                        // Check if the "Show" button is clicked
                        if (isset($_GET['show']) && isset($_GET['date']) && isset($_GET['donation_type'])) {
                            // Fetch the selected date and donation type
                            $selectedDate = $_GET['date'];
                            $selectedType = $_GET['donation_type'];
                            if ($selectedType == 'book') {
                                $sql = "SELECT bd.donorId, bd.bookdonationid, bdd.bookdonationtype, bdd.bookdonationquantity FROM bookdonor bd JOIN BookDonationDetails bdd ON bd.bookdonationid = bdd.bookdonationid WHERE bdd.bookdonationdate = '$selectedDate'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<h2>Date: $selectedDate</h2>";
                                    echo "<table border='1'>";
                                    $totalQuantity = 0;
                                    echo "<tr><th>Book Donation ID</th><th>Book Donation Type</th><th>Donor ID</th><th>Book Donation Quantity</th></tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['bookdonationid'] . "</td>";
                                        echo "<td>" . $row['bookdonationtype'] . "</td>";
                                        echo "<td>" . $row['donorId'] . "</td>";
                                        echo "<td>" . $row['bookdonationquantity'] . "</td>";


                                        echo "</tr>";
                                        $totalQuantity += $row['bookdonationquantity'];
                                    }
                                    echo "<tr><th colspan='3'>Total Book Donation </th><th>$totalQuantity</th></tr>";

                                    echo "</table>";
                                } else {
                                    echo "<h2>Data  Not Found</h2>";
                                }
                            }
                            if ($selectedType == 'cloth') {
                                $sql = "SELECT cd.donorId, cd.clothdonationid, cdd.clothdonationsize, cdd.clothdonationquantity FROM clothdonor cd JOIN  clothdonationdetails cdd ON cd.clothdonationid = cdd.clothdonationid WHERE cdd.clothdonationdate = '$selectedDate'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<h2>Date: $selectedDate</h2>";
                                    echo "<table border='1'>";
                                    $totalQuantity = 0;
                                    echo "<tr><th>Cloth Donation ID</th><th>Cloth Donation size</th><th>Donor ID</th><th>Cloth Donation Quantity</th></tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['clothdonationid'] . "</td>";
                                        echo "<td>" . $row['clothdonationsize'] . "</td>";
                                        echo "<td>" . $row['donorId'] . "</td>";
                                        echo "<td>" . $row['clothdonationquantity'] . "</td>";


                                        echo "</tr>";
                                        $totalQuantity += $row['clothdonationquantity'];
                                    }
                                    echo "<tr><th colspan='3'>Total Cloth Donation </th><th>$totalQuantity</th></tr>";

                                    echo "</table>";
                                } else {
                                    echo "<h2>Data  Not Found</h2>";
                                }
                            }
                            if ($selectedType == 'money') {
                                $sql = "SELECT md.donorId, md.moneydonationid, mdd.donationamount, mdd.cardholdername FROM moneydonor md JOIN MoneyDonationDetails mdd ON md.moneydonationid = mdd.moneydonationid WHERE mdd.moneydonationdate = '$selectedDate'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<h2>Date: $selectedDate</h2>";
                                    echo "<table border='1'>";
                                    $totalAmount = 0;
                                    echo "<tr><th>Money Donation ID</th><th>Donor ID</th><th>Money Donation payment</th><th>Donation Amount</th></tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['moneydonationid'] . "</td>";

                                        echo "<td>" . $row['donorId'] . "</td>";
                                        echo "<td>" . $row['cardholdername'] . "</td>";
                                        echo "<td>" . $row['donationamount'] . "</td>";


                                        echo "</tr>";
                                        $totalAmount += $row['donationamount'];
                                    }
                                    echo "<tr><th colspan='3'>Total Money Donation </th><th>$totalAmount</th></tr>";

                                    echo "</table>";
                                } else {
                                    echo "<h2>Data  Not Found</h2>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>