<?php
// Include database connection code or establish connection here
include 'db.php';

// SQL query to fetch data from DonorMaster table
$sqlDonor = "SELECT * FROM donormaster";

// Execute the query for DonorMaster table
$resultDonor = mysqli_query($conn, $sqlDonor);

// SQL query to fetch data from PickupMenMaster table
$sqlPickupMen = "SELECT * FROM pickupmenmaster";

// Execute the query for PickupMenMaster table
$resultPickupMen = mysqli_query($conn, $sqlPickupMen);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors and Pickup Men</title>
    <!-- Add any CSS styles or links here -->
</head>

<body>
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
                <th>Password</th>
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
                echo "<td>" . $row['donorpassword'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

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
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch data from PickupMenMaster table
            while ($row = mysqli_fetch_assoc($resultPickupMen)) {
                echo "<tr>";
                echo "<td>" . $row['pickupMenId'] . "</td>";
                echo "<td>" . $row['pickupMenUserName'] . "</td>";
                echo "<td>" . $row['pickupMencontactNo'] . "</td>";
                echo "<td>" . $row['pickupMendob'] . "</td>";
                echo "<td>" . $row['pickupMenemail'] . "</td>";
                echo "<td>" . $row['pickupMenstreet'] . "</td>";
                echo "<td>" . $row['pickupMenarea'] . "</td>";
                echo "<td>" . $row['pickupMencity'] . "</td>";
                echo "<td>" . $row['pickupMenpincode'] . "</td>";
                echo "<td>" . $row['pickupMenpassword'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Add any additional HTML or JavaScript code here -->
</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>
