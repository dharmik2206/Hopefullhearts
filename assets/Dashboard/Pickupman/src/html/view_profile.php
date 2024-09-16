<?php
session_start();
include 'db.php';

// Check if pickupMenId is set in session
if (!isset($_SESSION['pickupMenId']) || empty($_SESSION['pickupMenId'])) {
    echo '<script>alert("Invalid session. Please log in again."); window.location.href="pickupmen_dashboard.php";</script>';
    exit();
}

$pickupMenId = intval($_SESSION['pickupMenId']); // Get pickupMenId from session and ensure it's an integer

// Fetch pickupman's profile data from the database
$sql_pickupman = "SELECT * FROM PickupMenMaster WHERE pickupMenId = ?";
$stmt = $conn->prepare($sql_pickupman);
$stmt->bind_param("i", $pickupMenId);
$stmt->execute();
$result_pickupman = $stmt->get_result();

if ($result_pickupman->num_rows > 0) {
    $row_pickupman = $result_pickupman->fetch_assoc();
} else {
    echo "Pickupman profile not found";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage profile</title>
    <link rel="website Icon" type="png" href="../assets/images/logos/web.png">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<style>
    body {
        overflow-y: hidden;
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

    form {
        width: 80%;
    }

    .small-box {
        max-width: 300px;
        margin: 20 auto;
    }
</style>

<body>
    <div class="container-wrapper">
        <div class="page-wrapper" id="main-wrapper">
            <?php include 'header.php'; ?>

            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; margin-left: 100px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <h2 class="text-center"><u>Pickup-Man Profile</u></h2>
                                    <div class="profile-box small-box">
                                        <br><br>
                                        <p><strong>ID:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenId"] ?? ''); ?>
                                        </p>
                                        <p><strong>Username:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenUserName"] ?? ''); ?>
                                        </p>
                                        <p><strong>Email:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenEmail"] ?? ''); ?>
                                        </p>
                                        <p><strong>Street:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenStreet"] ?? ''); ?>
                                        </p>
                                        <p><strong>Area:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenArea"] ?? ''); ?>
                                        </p>
                                        <p><strong>City:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenCity"] ?? ''); ?>
                                        </p>
                                        <p><strong>Pincode:</strong>
                                            <?php echo htmlspecialchars($row_pickupman["pickupMenPincode"] ?? ''); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showInnerDivs(event) {
            event.preventDefault();
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