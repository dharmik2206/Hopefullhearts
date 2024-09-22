<?php
// Include database connection file
include('connection.php');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $donorfirstname = $_POST['donorfirstname'];
    $donorlastname = $_POST['donorlastname'];
    $donoremail = $_POST['donoremail'];
    $donationamount = (int)$_POST['donationamount'];
    $donoraddress = $_POST['donoraddress'];
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $cardholdername = $_POST['cardholdername'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    
    if (!empty($razorpay_payment_id)) {
        $sql = "INSERT INTO moneydonationdetails (donorfirstname, donorlastname, donoremail, donationamount, donoraddress, message, cardholdername, payment_id)
                VALUES ('$donorfirstname', '$donorlastname', '$donoremail', $donationamount, '$donoraddress', '$message', '$cardholdername', '$razorpay_payment_id')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Donation successfully recorded.');</script>";
            header("location: donate.php");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Payment not successful.');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
