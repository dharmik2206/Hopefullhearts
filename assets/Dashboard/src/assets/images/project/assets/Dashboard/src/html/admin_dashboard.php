<?php
session_start();
include 'db.php';
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
</head>

<body>
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
              <a class="sidebar-link" href="admin_dashboard.php">
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
                          <h5 class="card-title">TPS Report</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body" style="padding: 5px;">
                        <a href="mis.php" class="card-link">
                          <h5 class="card-title">MIS Reports</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/project/index.php"aria-expanded="false">
                <span>
                 <li class="sidebar-item">
                            <a class="sidebar-link" href="/project/index.php" aria-expanded="false">
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
  <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">

    </header>
    <!--  Header End -->
    <div class="container-fluid" style="margin-left: 300px;">
      <!--  Row 1 -->
      <div class="row">
        <div class="col-lg-18">
          <div class="row">
            <div class="col-lg-12">
              <!-- Yearly Donation -->
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">Total Donation</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">
                        <?php

                        $sql = "SELECT SUM(bookdonationquantity) AS total_books FROM bookdonationdetails";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo $row["total_books"] . "+ BOOKS";
                          }
                        } else {
                          echo "0 results";
                        }
                        ?>
                      </h4>
                      <h4 class="fw-semibold mb-3">
                        <?php

                        $sql = "SELECT SUM(clothedonationquantity) AS total_clothes FROM clothedonationdetails";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo $row["total_clothes"] . "+ CLOTHES";
                          }
                        } else {
                          echo "0 results";
                        }
                        ?>
                      </h4>

                    </div>
                  </div>

                </div>

              </div>
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">Total Users</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">
                        <?php
                        $sql1 = "SELECT COUNT(*) AS donor_count FROM donormaster";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_assoc();
                        $donor_count = $row1['donor_count'];
                        echo $donor_count . "  DONORS";
                        ?>
                      </h4>
                      <h4 class="fw-semibold mb-3">
                        <?php

                        $sql2 = "SELECT COUNT(*) AS pickupmen_count FROM pickupmenmaster";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();
                        $pickupmen_count = $row2['pickupmen_count'];
                        echo $pickupmen_count . " PICKUP-MEN";

                        ?>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div>
        <div class="row">
          <div class="col-lg-19">
            <div class="row">
              <div class="col-lg-12">
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <div class="row align-items-center">
                      <!-- Display ClotheDonationDetails -->
                      <h2>Clothe Donation Details</h2>
                      <table>
                        <tr>
                          <th>Clothe Donation ID</th>
                          <th>Quantity</th>
                          <th>Size</th>
                          <th>Address</th>
                          <th>Date</th>
                          <th>Name</th>
                        </tr>
                        <?php
                        // Fetch data from ClotheDonationDetails table
                        $sql_clothe = "SELECT * FROM ClotheDonationDetails";
                        $result_clothe = $conn->query($sql_clothe);
                        if ($result_clothe->num_rows > 0) {
                          while ($row_clothe = $result_clothe->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row_clothe["clothedonationid"] . "</td>";
                            echo "<td>" . $row_clothe["clothedonationquantity"] . "</td>";
                            echo "<td>" . $row_clothe["clothedonationsize"] . "</td>";
                            echo "<td>" . $row_clothe["clothedonationaddress"] . "</td>";
                            echo "<td>" . $row_clothe["clothedonationdate"] . "</td>";
                            echo "<td>" . $row_clothe["name"] . "</td>";
                            echo "</tr>";
                          }
                        } else {
                          echo "<tr><td colspan='6'>No records found</td></tr>";
                        }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Display BookDonationDetails -->
        <div class="card overflow-hidden">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <h2>Book Donation Details</h2>
              <table>
                <tr>
                  <th>Book Donation ID</th>
                  <th>Quantity</th>
                  <th>Type</th>
                  <th>Address</th>
                  <th>Date</th>
                  <th>Name</th>
                </tr>
                <?php
                // Fetch data from BookDonationDetails table
                $sql_book = "SELECT * FROM BookDonationDetails";
                $result_book = $conn->query($sql_book);
                if ($result_book->num_rows > 0) {
                  while ($row_book = $result_book->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row_book["bookdonationid"] . "</td>";
                    echo "<td>" . $row_book["bookdonationquantity"] . "</td>";
                    echo "<td>" . $row_book["bookdonationtype"] . "</td>";
                    echo "<td>" . $row_book["bookdonationaddress"] . "</td>";
                    echo "<td>" . $row_book["bookdonationdate"] . "</td>";
                    echo "<td>" . $row_book["name"] . "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
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