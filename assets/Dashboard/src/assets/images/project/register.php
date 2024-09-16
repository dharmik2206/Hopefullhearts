<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hopefull_hearts";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $dob = $_POST['dob'];
    $street = $_POST['street'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];

    // Check if the email already exists in either table
    $check_email_query = "SELECT * FROM DonorMaster WHERE donorEmail = ?";
    if ($role == "pickup") {
        $check_email_query = "SELECT * FROM PickupMenMaster WHERE pickupMenemail = ?";
    }

    $stmt_check = $conn->prepare($check_email_query);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already registered. Please use a different email.');</script>";
    } else {
        // Determine which table to insert data into based on role
        $table_name = ($role == "donor") ? "DonorMaster" : "PickupMenMaster";

        // Insert the data into the respective table
        $sql = "";
        if ($role == "donor") {
            $sql = "INSERT INTO $table_name (donorUserName, donorContact, donorEmail, donorDob, donorStreet, donorArea, donorCity, donorPincode, donorpassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        } elseif ($role == "pickup") {
            $sql = "INSERT INTO $table_name (pickupMenUserName, pickupMencontactNo,pickupMenemail, pickupMendob, pickupMenstreet, pickupMenarea, pickupMencity, pickupMenpincode, pickupMenpassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        }

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $username, $contact, $email, $dob, $street, $area, $city, $pincode, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Signup successful!');</script>";
            header("Location: login.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }

    $stmt_check->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Hopefull Hearts</title>
    <!-- CSS links -->
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .custom-select {
            position: relative;
            width: 100%;
        }

        .custom-select select {
            display: inline-block;
            width: 100%;
            padding: 8px 12px;
            font-size: 16px;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background-color: #292929;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        .custom-select::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            pointer-events: none;
        }
    </style>
</head>
<body>
    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->
    <div class="tp-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="tp-accountWrapper" id="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="tp-accountInfo">
                            <div class="tp-accountInfoHeader">
                                <a href="#"><img src="assets/finallogo.png" alt=""></a>
                                <a class="tp-accountBtn" href="login.php">
                                    <span class="">Log in</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="image">
                                <!-- <img src="assets/images/login.svg" alt=""> -->
                            </div>
                            <div class="back-home">
                                <a class="tp-accountBtn" href="index.php">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="tp-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Signup</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row" style="height:1120px">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="username">User Name</label>
                                    <input type="text" id="username" name="username" placeholder="Your User here.."><br />
                                    <label for="contact">Contact</label>
                                    <input type="text" id="contact" name="contact" placeholder="Your Contact here.."><br />
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your email here.."><br />
                                    <label for="role">Select a Role</label><br />
                                    <div class="custom-select" style="padding-bottom: 20px; color: white">
                                        <select id="role" name="role">
                                            <option selected>Select Your Role...</option>
                                            <option value="donor">Donor</option>
                                            <option value="pickup">Pick-up Man</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" name="dob" ><br />
                                    <label>Street</label>
                                    <input type="text" id="street" name="street" placeholder="Your Street here.."><br />
                                    <label>Area</label>
                                    <input type="text" id="area" name="area" placeholder="Your area here.."><br />
                                    <label>City</label>
                                    <input type="text" id="city" name="city" placeholder="Your city here.."><br />
                                    <label>Pincode</label>
                                    <input type="text" id="pincode" name="pincode" placeholder="Your pincode here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="pwd2" type="password" placeholder="Your password here.." name="password">
                                    </div>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal3" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                    </span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="pwd3" type="password" placeholder="Confirm password.." name="confirmPassword">
                                    </div>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal2" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                    </span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    
                                    <input type ="submit" onclick="return validateForm()" class="tp-accountBtn" value="Signup">
                                </div>
                            </div><br><br><br><br>
                            <h4 class="or"><span>OR</span></h4>
                            
                            <p class="subText">Already Account? <a href="login.php">Click Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- theme-change-btn -->
    <div class="theme-change-btn">
        <button id="change-theme-btn">Light</button>
    </div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value.trim();
            var contact = document.getElementById("contact").value.trim();
            var email = document.getElementById("email").value.trim();
            var role = document.getElementById("role").value;
            var dob = document.getElementById("dob").value;
            var street = document.getElementById("street").value.trim();
            var area = document.getElementById("area").value.trim();
            var city = document.getElementById("city").value.trim();
            var pincode = document.getElementById("pincode").value.trim();
            var password = document.querySelector(".pwd2").value;
            var confirmPassword = document.querySelector(".pwd3").value;

            // Validation
            if (username === "") {
                alert("Please enter your username.");
                return false;
            }
            if (contact === "" || isNaN(contact) || contact.length !== 10) {
                alert("Please enter a valid 10-digit contact number.");
                return false;
            }
            if (email === "" || !validateEmail(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            if (role === "Select Your Role...") {
                alert("Please select your role.");
                return false;
            }
            if (dob === "") {
                alert("Please enter your date of birth.");
                return false;
            }
            if (street === "") {
                alert("Please enter your street.");
                return false;
            }
            if (area === "") {
                alert("Please enter your area.");
                return false;
            }
            if (city === "") {
                alert("Please enter your city.");
                return false;
            }
            if (pincode === "") {
                alert("Please enter your pincode.");
                return false;
            }
            if (password === "" || password.length < 8) {
                alert("Please enter a password with at least 8 characters.");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            // Regular expression for basic email validation
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>
</html>