<?php
session_start();
require ("connection.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/PHPMailer.php';
require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/Exception.php';
require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/SMTP.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$otp_validity_duration = 60;
$otp_verified = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['generate_otp'])) {
        storeFormData();
        checkEmailAndSendOtp($conn);
    } elseif (isset($_POST['verify_otp'])) {
        storeFormData();
        verifyotp();
        if(isset($_POST['verify_otp'])) {
            if (isset($_SESSION['otp_verified']) && $_SESSION['otp_verified']) {
                registerUser($conn);
                session_unset();
                session_destroy();
                header('Location: login.php');
                exit();
            } else {
                echo '<script>alert("OTP verification required.");</script>';
                checkEmailAndSendOtp($conn);
            }
        }
    } 
}

function storeFormData()
{
    $_SESSION['form_data'] = $_POST;
}

function checkEmailAndSendOtp($conn)
{
    $recipient_email = $_POST['username'];
    $contact = $_POST['contact'];

    // Validate contact number
    if (!preg_match('/^(?!([0-9])\1{9})[0-9]{10}$/', $contact)) {
        echo '<script>alert("Invalid contact number.");</script>';
        return;
    }

    // Check if the email is already registered
    $query = $conn->prepare("SELECT pickupMenUserName FROM pickupmenmaster WHERE pickupMenUserName = ?");
    $query->bind_param('s', $recipient_email);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        // Return JSON response indicating the email is already registered
        echo "<script>alert('User Name is already registered. Please use a different email address.')</script>";
    } else {
        sendotp();
    }
}


function sendotp()
{
    try {
        $recipient_email = $_POST['email'];
        $otp = mt_rand(100000, 999999);
        $otp_generation_time = time();

        $mail = new PHPMailer(true);

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dharmikdonda2206@gmail.com'; //enter email address
        $mail->Password = 'mrbg hyyu lnvc uaqm'; // Enter email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('hopefulherts@gmail.com', 'Hopeful hearts');
        $mail->addAddress($recipient_email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'OTP for registration';
        $templatePath = 'email.html'; // Ensure this path is correct
        $template = file_get_contents($templatePath);
        $template = str_replace('{{OTP}}', $otp, $template);
        $mail->Body = $template;
        $mail->AltBody = 'Dear User, Your One-Time Password (OTP) for email verification is: ' . $otp . '. Please use this OTP to verify your email address. If you did not request this OTP, please ignore this email.';

        // Send email
        $mail->send();

        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $recipient_email;
        $_SESSION['otp_generation_time'] = $otp_generation_time;
        echo "<script>alert('OTP has been sent to your email.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent.');</script>";
        echo "<script>alert('Mailer Error: ' . $mail->ErrorInfo);</script>";
    }
}

function verifyotp()
{
    $user_otp = $_POST['otp'];
    $session_otp = $_SESSION['otp'] ?? '';

    if ($user_otp == $session_otp) {
        echo '<script>alert("OTP verification successful!");</script>';
        $_SESSION['otp_verified'] = true;
        // Save updated form data
        storeFormData();
    } else {
        echo '<script>alert("OTP verification failed. Please try again.");</script>';
    }
}

function registerUser($conn)
{
    $formData = $_SESSION['form_data'] ?? [];
    $username = $formData['username'];
    $contact = $formData['contact'];
    $email = $formData['email'];
    $dob = $formData['dob'];
    $street = $formData['street'];
    $area = $formData['area'];
    $city = $formData['city'];
    $pincode = $formData['pincode'];
    $password = $formData['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->prepare("SELECT pickupMenUserName FROM pickupmenmaster WHERE pickupMenUserName = ?");
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        echo '<script>alert("User Name is already registered. Please use a different UserName.");</script>';
        session_unset();
        session_destroy();
    } else {
        $stmt = $conn->prepare("INSERT INTO PickupMenMaster (pickupMenUserName, pickupMenContact, pickupMenEmail, pickupMenDob, pickupMenStreet, pickupMenArea, pickupMenCity, pickupMenPincode, pickupMenPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssssss', $username, $contact, $email, $dob, $street, $area, $city, $pincode, $hashedPassword);
        if ($stmt->execute()) {
            echo '<script>alert("Pickupman registered successfully.");</script>';
            header("Location: .\assets\Pickupman\src\html\pickupmen_dashboard.php");
        } else {
            echo '<script>alert("Error: ' . $stmt->error . '");</script>';
        }
    }
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

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
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
                    <form class="tp-accountWrapper" id="signupForm" action="" method="post">
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
                                <h2>Pickupman Signup</h2>
                                <p>Sign into your pages account</p>
                            </div>


                            <div id="donorForm">
                                <div class="row" style="height:1550px">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label for="username">Pichupmen Name</label>
                                        <input type="text" id="username" name="username" pattern="[A-Za-z0-9]{5,15}"
                                            placeholder="Your User here.."
                                            value="<?php echo $_SESSION['form_data']['username'] ?? ''; ?>"><br />
                                        <label for="contact">Contact</label>
                                        <input type="text" id="contact" name="contact" placeholder="Your Contact here.."
                                            value="<?php echo $_SESSION['form_data']['contact'] ?? ''; ?>"><br />
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Your email here.."
                                            value="hopefulherts@gmail.com" readonly><br />

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" id="dob" name="dob"
                                            value="<?php echo $_SESSION['form_data']['dob'] ?? ''; ?>"><br />
                                        <label>Street</label>
                                        <input type="text" id="street" name="street" placeholder="Your Street here.."
                                            value="<?php echo $_SESSION['form_data']['street'] ?? ''; ?>"><br />
                                        <label>Area</label>
                                        <input type="text" id="area" name="area" placeholder="Your area here.."
                                            value="<?php echo $_SESSION['form_data']['area'] ?? ''; ?>"><br />
                                        <label>City</label>
                                        <input type="text" id="city" name="city" placeholder="Your city here.."
                                            value="<?php echo $_SESSION['form_data']['city'] ?? ''; ?>"><br />
                                        <label>Pincode</label>
                                        <input type="text" id="pincode" name="pincode" placeholder="Your pincode here.."
                                            value="<?php echo $_SESSION['form_data']['pincode'] ?? ''; ?>">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="pwd2" type="password" placeholder="Your password here.."
                                                name="password"
                                                value="<?php echo $_SESSION['form_data']['password'] ?? ''; ?>">
                                        </div>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal3" type="button"><i
                                                    class="glyphicon glyphicon-eye-open"></i></button>
                                        </span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="pwd3" type="password" placeholder="Confirm password.."
                                                name="confirmPassword"
                                                value="<?php echo $_SESSION['form_data']['confirmPassword'] ?? ''; ?>">
                                        </div>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal2" type="button"><i
                                                    class="glyphicon glyphicon-eye-open"></i></button>
                                        </span>
                                    </div>

                                    <div class="button" colspan="2">
                                        <input type="submit" name="generate_otp" value="Generate OTP"
                                            class="tp-accountBtn">
                                    </div>
                                    <?php if (isset($_SESSION['otp'])): ?>
                                        <div id="otp-section">
                                            <div class="input-box">
                                                <label for="otp" class="details">Enter OTP:</label>
                                                <input type="text" name="otp" id="otp" maxlength="6" minlength="6"
                                                    placeholder="Enter otp..">
                                            </div>
                                            <div class="button">
                                                <input type="submit" name="verify_otp" value="Verify OTP & Register"
                                                    class="tp-accountBtn">
                                            </div>
                                            <!-- <div class="input-box">
                                                <label class="details">OTP Expiry Time:</label>
                                                <div id="timer">00:00</div> <!-- Display timer here -->
                                            <!-- </div> -->
                                        </div>
                                    <?php endif; ?>
                                    <h4 class="or"><span>OR</span></h4>
                                    <p class="subText">Already Account? <a href="login.php">Click Here</a></p>
                                </div>
                            </div>
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
        }

        function validateEmail(email) {
            // Regular expression for basic email validation
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
    <!-- <script>
        var timerInterval; // Global variable for timer interval ID

        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            timerInterval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        // Check if OTP is verified before starting the timer
        window.onload = function () {
            <?php //if (!$otp_verified && isset($_SESSION['otp_expiry_time'])): ?>
                var fiveMinutes = <?php //echo $_SESSION['otp_expiry_time'] - time(); ?>;
                var display = document.querySelector('#timer');
                startTimer(fiveMinutes, display);
            <?php //endif; ?>
        };
    </script> -->
</body>

</html>