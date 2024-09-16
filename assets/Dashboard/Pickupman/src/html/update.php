<?php
session_start();
include 'db.php';

// Check if pickupMenId is set and not empty
if (!isset($_SESSION['pickupMenId']) || empty($_SESSION['pickupMenId'])) {
    echo '<script>alert("Invalid ID"); window.location.href="pickupmen_dashboard.php";</script>';
    exit();
}

$pickupMenId = intval($_SESSION['pickupMenId']); // Convert to integer for safety

// Debugging output
// echo "PickupMenId: " . $pickupMenId;

$stmt = $conn->prepare("SELECT * FROM pickupmenmaster WHERE pickupMenId = ?");
$stmt->bind_param("i", $pickupMenId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if record was found
if (!$row) {
    echo '<script>alert("No record found"); window.location.href="pickupmen_dashboard.php";</script>';
    exit();
}

// Handle form submission for updating data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pickupMenUserName = trim($_POST["pickupMenUserName"]);
    $pickupMenemail = trim($_POST["pickupMenemail"]);
    $pickupMenstreet = trim($_POST["pickupMenstreet"]);
    $pickupMenarea = trim($_POST["pickupMenarea"]);
    $pickupMencity = trim($_POST["pickupMencity"]);
    $pickupMenpincode = trim($_POST["pickupMenpincode"]);
    $orgPassword = trim($_POST["pickupMenpassword"]);

    // Server-side validation
    if (empty($pickupMenUserName) || empty($pickupMenemail) || empty($pickupMenstreet) || empty($pickupMenarea) || empty($pickupMencity) || empty($pickupMenpincode)) {
        echo '<script>alert("Please fill out all required fields.");</script>';
    }

    if (!filter_var($pickupMenemail, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format.");</script>';
        exit();
    }

    if (!empty($orgPassword) && strlen($orgPassword) < 8) {
        echo '<script>alert("Password must be at least 8 characters long.");</script>';
        exit();
    }

    // Hash the password if it's provided
    if (!empty($orgPassword)) {
        $hashedPassword = password_hash($orgPassword, PASSWORD_DEFAULT);
    } else {
        $hashedPassword = $row['pickupMenPassword'];
    }

    // Prepare and execute UPDATE query
    $stmt_update = $conn->prepare("UPDATE pickupmenmaster SET pickupMenUserName = ?, pickupMenemail = ?, pickupMenstreet = ?, pickupMenarea = ?, pickupMencity = ?, pickupMenpincode = ?, pickupMenPassword = ? WHERE pickupMenId = ?");
    $stmt_update->bind_param("sssssssi", $pickupMenUserName, $pickupMenemail, $pickupMenstreet, $pickupMenarea, $pickupMencity, $pickupMenpincode, $hashedPassword, $pickupMenId);

    if ($stmt_update->execute()) {
        echo '<script>alert("Data updated successfully.");window.location.href="pickupmen_dashboard.php";</script>';
    } else {
        echo '<script>alert("Error updating data: ' . $stmt_update->error . '");</script>';
    }
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

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

    tr:nth-child(even) {
        background-color: #f9f9f9;
        /* Zebra stripes */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .input-group {
        position: relative;
    }

    .input-group .form-control {
        padding-right: 3rem;
        /* Adjust padding to accommodate the icon */
    }

    .input-group .btn {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        border-radius: 0 0.375rem 0.375rem 0;
    }

    input[type="submit"] {
        background-color: #007bff;
        /* Example button color */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
        /* Darker button color on hover */
    }
</style>

<body>
    <center>
        <!--  Body Wrapper -->
        <div class="container-wrapper">
            <!-- Sidebar and content as in your original HTML -->
            <div class="container-fluid" style="margin-left: 50px;">
                <h2>Edit Profile</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?pickupMenId=' . $pickupMenId; ?>"
                    method="POST" onsubmit="return validateForm()">
                    <table>
                        <tr>
                            <td>Pickupmen ID:</td>
                            <td><input type="text" name="pickupMenId"
                                    value="<?php echo htmlspecialchars($row['pickupMenId']); ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Username:</td>
                            <td><input type="text" name="pickupMenUserName"
                                    value="<?php echo htmlspecialchars($row['pickupMenUserName']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Email:</td>
                            <td><input type="email" name="pickupMenemail"
                                    value="<?php echo htmlspecialchars($row['pickupMenEmail']); ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Street:</td>
                            <td><input type="text" name="pickupMenstreet"
                                    value="<?php echo htmlspecialchars($row['pickupMenStreet']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Area:</td>
                            <td><input type="text" name="pickupMenarea"
                                    value="<?php echo htmlspecialchars($row['pickupMenArea']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Pickupmen City:</td>
                            <td><input type="text" name="pickupMencity"
                                    value="<?php echo htmlspecialchars($row['pickupMenCity']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Pincode:</td>
                            <td><input type="text" name="pickupMenpincode"
                                    value="<?php echo htmlspecialchars($row['pickupMenPincode']); ?>"></td>
                        </tr>
                        <tr>
                            <td>Pickupmen Password:</td>
                            <td>
                                <div class="input-group">
                                    <input id="pickupMenpassword" class="form-control pwd6" type="password"
                                        name="pickupMenpassword" value="" placeholder="Enter New Password">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary reveal6" type="button"
                                            onclick="togglePassword()">
                                            <i class="fa fa-eye" id="eyeIcon"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2"><input type="submit" value="Update"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </center>
</body>
<script>
    function validateForm() {
        var username = document.querySelector("input[name='pickupMenUserName']").value;
        var street = document.querySelector("input[name='pickupMenstreet']").value;
        var area = document.querySelector("input[name='pickupMenarea']").value;
        var city = document.querySelector("input[name='pickupMencity']").value;
        var pincode = document.querySelector("input[name='pickupMenpincode']").value;
        var password = document.querySelector("input[name='pickupMenpassword']").value;

        // Check if all required fields are filled
        if (username === "" || street === "" || area === "" || city === "" || pincode === "") {
            alert("Please fill out all required fields.");
            return false;
        }

        // Validate email format
        var email = document.querySelector("input[name='pickupMenemail']").value;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Invalid email format.");
            return false;
        }

        // Validate password length
        if (password !== "" && password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
        }

        return true;
    }

    function togglePassword() {
        var passwordField = document.getElementById('pickupMenpassword');
        var eyeIcon = document.getElementById('eyeIcon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-plugin-collection.js"></script>
<script src="assets/js/script.js"></script>

</html>