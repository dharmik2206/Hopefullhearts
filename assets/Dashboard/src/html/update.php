
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
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h2 {
        text-align: center;
        margin-top: 20px;
    }

    form {
        width: 50%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
    }

    table tr td {
        padding: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .container-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* This ensures the container covers the entire viewport height */
    }

    /* Adjust the width of the form if needed */
    form {
        width: 80%; /* Adjust as necessary */
    }
</style>

<body>
    <!--  Body Wrapper -->
    <div class="container-wrapper">
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
         <div class="container-fluid" style="margin-left: 200px; ">
    <?php


// Define variables and initialize them
$orgId = $orgUserName = $orgEmail = $orgStreet = $orgArea = $orgCity = $orgPincode = '';

$sql = "SELECT * FROM OrganizerMaster WHERE orgId = 1"; // Change 'your_table_name' to your actual table name and 'id = 1' to your condition
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
    $orgId = $row["orgId"];
    $orgUserName = $row["orgUserName"];
    $orgEmail = $row["orgEmail"];
    $orgStreet = $row["orgStreet"];
    $orgArea = $row["orgArea"];
    $orgCity = $row["orgCity"];
    $orgPincode = $row["orgPincode"];
    // No need to fetch password for security reasons
} else {
    echo "0 results";
}

// Handle form submission for updating data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated form data
    $orgId = $_POST["orgId"];
    $orgUserName = $_POST["orgUserName"];
    $orgEmail = $_POST["orgEmail"];
    $orgStreet = $_POST["orgStreet"];
    $orgArea = $_POST["orgArea"];
    $orgCity = $_POST["orgCity"];
    $orgPincode = $_POST["orgPincode"];

    // Update query
    $sql_update = "UPDATE OrganizerMaster SET 
            orgUserName = '$orgUserName', 
            orgEmail = '$orgEmail', 
            orgStreet = '$orgStreet', 
            orgArea = '$orgArea', 
            orgCity = '$orgCity', 
            orgPincode = '$orgPincode' 
            WHERE orgId = '$orgId'"; // assuming orgId is the primary key

    if (mysqli_query($conn, $sql_update)) {
        echo '<script>alert("Data updated successfully");</script>';
    } else {
        echo '<script>alert("Error updating data: ' . mysqli_error($conn) . '");</script>';
    }
}

// Close your database connection here
?>


<div class="container-fluid" style="margin-left: 50px;">
    <h2>Edit Profile</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
            <tr>
                <td>Organization ID:</td>
                <td><input type="text" name="orgId" value="<?php echo $orgId; ?>"></td>
            </tr>
            <tr>
                <td>Organization Username:</td>
                <td><input type="text" name="orgUserName" value="<?php echo $orgUserName; ?>"></td>
            </tr>
            <tr>
                <td>Organization Email:</td>
                <td><input type="email" name="orgEmail" value="<?php echo $orgEmail; ?>"></td>
            </tr>
            <tr>
                <td>Organization Street:</td>
                <td><input type="text" name="orgStreet" value="<?php echo $orgStreet; ?>"></td>
            </tr>
            <tr>
                <td>Organization Area:</td>
                <td><input type="text" name="orgArea" value="<?php echo $orgArea; ?>"></td>
            </tr>
            <tr>
                <td>Organization City:</td>
                <td><input type="text" name="orgCity" value="<?php echo $orgCity; ?>"></td>
            </tr>
            <tr>
                <td>Organization Pincode:</td>
                <td><input type="text" name="orgPincode" value="<?php echo $orgPincode; ?>"></td>
            </tr>
            <tr>
                <td>Organization Password:</td>
                <td><input type="password" name="orgPassword" value=""></td>
                <!-- Leave password field empty for security reasons -->
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
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
    <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <div class="container-fluid" style="margin-left: 200px; ">
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