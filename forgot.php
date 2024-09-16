<?php
session_start();
include("loginnot_check.php");
require("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/PHPMailer.php';
require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/Exception.php';
require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/SMTP.php';

$otp_validity_duration = 60;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['generate_otp'])) {
        $email = $_POST['email'];
        if (checkEmailExists($email)) {
            sendOtp($email);
        } else {
            echo '<script>alert("Email address not found.");</script>';
        }
    } elseif (isset($_POST['verify_otp'])) {
        verifyOtp();
    } elseif (isset($_POST['update_password'])) {
        updatePassword();
    }
}

function checkEmailExists($email)
{
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) FROM donormaster WHERE donorEmail = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    return $count > 0;
}

function sendOtp($recipient_email)
{
    try {
        $otp = mt_rand(100000, 999999);
        $otp_generation_time = time();

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dharmikdonda2206@gmail.com';
        $mail->Password = 'mrbg hyyu lnvc uaqm'; // Consider using an app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('hopefulherts@gmail.com', 'Hopeful Hearts');
        $mail->addAddress($recipient_email);

        $mail->isHTML(true);
        $mail->Subject = 'OTP for Password Reset';
        $templatePath = 'email.html';
        $template = file_get_contents($templatePath);
        $template = str_replace('{{OTP}}', $otp, $template);
        $mail->Body = $template;
        $mail->AltBody = 'Your OTP for password reset is: ' . $otp;

        $mail->send();

        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $recipient_email;
        $_SESSION['otp_generation_time'] = $otp_generation_time;
        echo "<script>alert('OTP has been sent to your email.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: " . $mail->ErrorInfo . "');</script>";
    }
}

function verifyOtp()
{
    $user_otp = $_POST['otp'];
    $session_otp = $_SESSION['otp'] ?? '';
    $otp_generation_time = $_SESSION['otp_generation_time'] ?? time();

    if (time() > $otp_generation_time + 60) { // Check if OTP expired
        echo '<script>alert("OTP has expired. Please generate a new OTP.");</script>';
        unset($_SESSION['otp']);
        return;
    }

    if ($user_otp == $session_otp) {
        echo '<script>alert("OTP verification successful!");</script>';
        $_SESSION['otp_verified'] = true;
        storeFormData();
    } else {
        echo '<script>alert("OTP verification failed. Please try again.");</script>';
    }
}

function updatePassword()
{
    global $conn;
    $formData = $_SESSION['form_data'] ?? [];
    $email = $formData['email'] ?? '';
    $newPassword = $formData['password'] ?? '';
    $confirmPassword = $formData['confirmPassword'] ?? '';

    if ($newPassword !== $confirmPassword) {
        echo '<script>alert("New passwords do not match.");</script>';
        return;
    }

    $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    if (checkEmailExists($email)) {
        $stmt = $conn->prepare("UPDATE donormaster SET donorPassword = ? WHERE donorEmail = ?");
        $stmt->bind_param('ss', $newHashedPassword, $email);

        if ($stmt->execute()) {
            echo '<script>alert("Password updated successfully.");</script>';
            header('Location: login.php');
            exit;
        } else {
            echo '<script>alert("Error: ' . $stmt->error . '");</script>';
        }
        $stmt->close();
    } else {
        echo '<script>alert("Email address not found.");</script>';
    }
}

function storeFormData()
{
    $_SESSION['form_data'] = $_POST;
}
?>


<?php
// session_start();
// require("connection.php");
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/PHPMailer.php';
// require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/Exception.php';
// require 'C:/xampp/htdocs/HopefullHeartsTheam/PHPMailer/SMTP.php';

// $otp_validity_duration = 60;

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['generate_otp'])) {
//         $email = $_POST['email'];
//         if (checkEmailExists($email)) {
//             sendOtp($email);
//         } else {
//             echo '<script>alert("Email address not found.");</script>';
//         }
//     } elseif (isset($_POST['verify_otp'])) {
//         verifyOtp();
//     } elseif (isset($_POST['update_password'])) {
//         updatePassword();
//     }
// }

// function checkEmailExists($email)
// {
//     global $conn;
//     $stmt = $conn->prepare("SELECT COUNT(*) FROM PickupMenMaster WHERE pickupMenEmail = ?");
//     $stmt = $conn->prepare("select count(*) from donormaster where donorEmail = ?");
//     $stmt->bind_param('s', $email);
//     $stmt->execute();
//     $stmt->bind_result($count);
//     $stmt->fetch();
//     $stmt->close();
//     return $count > 0;
// }

// function sendOtp($recipient_email)
// {
//     try {
//         $otp = mt_rand(100000, 999999);
//         $otp_generation_time = time();

//         $mail = new PHPMailer(true);

//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'dharmikdonda2206@gmail.com';
//         $mail->Password = 'mrbg hyyu lnvc uaqm';
//         $mail->SMTPSecure = 'tls';
//         $mail->Port = 587;

//         $mail->setFrom('hopefulherts@gmail.com', 'Hopeful hearts');
//         $mail->addAddress($recipient_email);

//         $mail->isHTML(true);
//         $mail->Subject = 'OTP for password reset';
//         $templatePath = 'email.html';
//         $template = file_get_contents($templatePath);
//         $template = str_replace('{{OTP}}', $otp, $template);
//         $mail->Body = $template;
//         $mail->AltBody = 'Your OTP for password reset is: ' . $otp;

//         $mail->send();

//         $_SESSION['otp'] = $otp;
//         $_SESSION['email'] = $recipient_email;
//         $_SESSION['otp_generation_time'] = $otp_generation_time;
//         echo "<script>alert('OTP has been sent to your email.');</script>";
//     } catch (Exception $e) {
//         echo "<script>alert('Message could not be sent. Mailer Error: " . $mail->ErrorInfo . "');</script>";
//     }
// }

// function verifyOtp()
// {
//     $user_otp = $_POST['otp'];
//     $session_otp = $_SESSION['otp'] ?? '';
//     $otp_generation_time = $_SESSION['otp_generation_time'] ?? time();

//     if (time() > $otp_generation_time + 60) { // Check if OTP expired
//         echo '<script>alert("OTP has expired. Please generate a new OTP.");</script>';
//         unset($_SESSION['otp']);
//         return;
//     }

//     if ($user_otp == $session_otp) {
//         echo '<script>alert("OTP verification successful!");</script>';
//         $_SESSION['otp_verified'] = true;
//         storeFormData();
//     } else {
//         echo '<script>alert("OTP verification failed. Please try again.");</script>';
//     }
// }

// function updatePassword()
// {
//     global $conn;
//     $formData = $_SESSION['form_data'] ?? [];
//     $email = $formData['email'] ?? '';
//     $newPassword = $formData['password'] ?? '';
//     $confirmPassword = $formData['confirmPassword'] ?? '';

//     if ($newPassword !== $confirmPassword) {
//         echo '<script>alert("New passwords do not match.");</script>';
//         return;
//     }

//     // Fetch the current hashed password from the database
//     $stmt = $conn->prepare("SELECT pickupMenPassword FROM PickupMenMaster WHERE pickupMenEmail = ?");
//     $stmt = $conn->prepare("select donorPassword from donormaster where donorEmail = ?");
//     $stmt->bind_param('s', $email);
//     $stmt->execute();
//     $stmt->bind_result($stmt);
//     $stmt->fetch();

//     if ($stmt > 0) {
//         $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
//         $stmt = $conn->prepare("UPDATE PickupMenMaster SET pickupMenPassword = ? WHERE pickupMenEmail = ?");
//         $stmt = $conn->prepare("update donormaster set donorPassword = ? where donorEmail = ?");
//         $stmt->bind_param('ss', $newHashedPassword, $email);

//         if ($stmt->execute()) {
//             echo '<script>alert("Password updated successfully.");</script>';
//             header('location : login.php');
//         } else {
//             echo '<script>alert("Error: ' . $stmt->error . '");</script>';
//         }
//         $stmt->close();
//     } else {
//         echo '<script>alert("Email address not found.");</script>';
//     }
// }

// function storeFormData()
// {
//     $_SESSION['form_data'] = $_POST;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>hopefullHearts - Charity Nonprofit HTML 5 Template</title>
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
                    <form class="tp-accountWrapper" method="POST" action="">
                        <div class="tp-accountInfo">
                            <div class="tp-accountInfoHeader">
                                <a href="#"><img src="assets/finallogo.png" alt=""></a>
                                <a class="tp-accountBtn" href="register.php">
                                    Create Account
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="tp-accountBtn" href="index.php">
                                    Back To Home
                                </a>
                            </div>
                        </div>
                        <div class="tp-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Reset Password</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="Your email here..">
                                </div>
                                <div class="button" colspan="2">
                                    <input type="submit" name="generate_otp" value="Generate OTP" class="tp-accountBtn">
                                </div>
                                <?php if (isset($_SESSION['otp'])): ?>
                                    <div id="otp-section">
                                        <div class="input-box">
                                            <label for="otp" class="details">Enter OTP:</label>
                                            <input type="text" name="otp" id="otp" maxlength="6" minlength="6"
                                                placeholder="Enter Otp..">
                                        </div>
                                        <div class="button">
                                            <input type="submit" name="verify_otp"
                                                value="Verify OTP" class="tp-accountBtn">
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['otp_verified']) && $_SESSION['otp_verified']): ?>
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
                                    <div class="button">
                                        <input type="submit" name="update_password" value="Update Password"
                                            class="tp-accountBtn">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <p class="subText">Don't have an account? <a href="register.php">Create free account</a></p>
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
            var email = document.getElementById("email").value.trim();
            var password = document.querySelector(".pwd2").value;
            var confirmPassword = document.querySelector(".pwd3").value;

            // Validation
            if (email === "" || !validateEmail(email)) {
                alert("Please enter a valid email address.");
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
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
</body>

</html>