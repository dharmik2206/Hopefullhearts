<?php
session_start();
include("loginnot_check.php");

include("connection.php");

// book data insert code
if (isset($_POST['submiteBook'])) {
    // Get the form data
    $bookdonationquantity = $_POST['bookdonationquantity'];
    $bookdonationtype = $_POST['bookdonationtype'];
    $bookdonationaddress = $_POST['bookdonationaddress'];
    $bookdonationdate = $_POST['bookdonationdate'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    // Insert data into the database
    $sql = "INSERT INTO bookdonationdetails (bookdonationquantity, bookdonationtype, bookdonationaddress, bookdonationdate, name, contact) 
    VALUES ($bookdonationquantity, '$bookdonationtype', '$bookdonationaddress', '$bookdonationdate', '$name', '$contact')";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Donation details successfully inserted.')</script>";
        header("location: causes.php");
        exit();
    } else {
        $_SESSION['message'] = 'Error: ' . mysqli_error($conn);
    }
}


// clothes data insret code
if (isset($_POST['submitClotes'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $clothesdonationquantity = $_POST['clothesdonationquantity'];
    $clothesdonationaddress = $_POST['clothesdonationaddress'];
    $clothesdonationdate = $_POST['clothesdonationdate'];
    $clothesdonationsizes = $_POST['clothesdonationsize']; // Array of sizes

    // Loop through the array of sizes and insert each into the database
    for ($i = 0; $i < count($clothesdonationsizes); $i++) {
        $size = $clothesdonationsizes[$i]; // Get the current size

        $sql = "INSERT INTO clothedonationdetails (clothedonationquantity, clothedonationsize, clothedonationaddress, clothedonationdate, name, contact)
                VALUES ($clothesdonationquantity, '$size', '$clothesdonationaddress', '$clothesdonationdate', '$name', '$contact')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Clothes donation details successfully inserted.')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    header("Location: causes.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Hopefullhearts - Charity Nonprofit HTML 5 Template</title>
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
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<style>
    /*--------------------------------------------------------------
#   dontae.php
--------------------------------------------------------------*/
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Container for the radio button options */
    .donation-options {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    /* Style for each radio button option */
    .donation-options div {
        margin-bottom: 15px;
    }

    /* Hide the default radio button */
    .donation-options input[type="radio"] {
        display: none;
    }

    /* Style for the custom radio button */
    .donation-options label {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        font-size: 16px;
        line-height: 24px;
        display: inline-block;
    }

    /* Custom radio button */
    .donation-options label::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #f67d4a;
        background-color: white;
        transition: background-color 0.3s ease;
    }

    /* Radio button checked state */
    .donation-options input[type="radio"]:checked+label::before {
        background-color: #f67d4a;
        border-color: #f67d4a;
    }

    /* Radio button checked state inner circle */
    .donation-options input[type="radio"]:checked+label::after {
        content: "";
        position: absolute;
        left: 8px;
        top: 6px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: white;
    }

    /* Modal styling */
    #formBook {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.7);
    }

    /* Modal content */

    .modal-dialog {
        max-width: 800px;
    }

    @media (min-width: 992px) {
        .modal-lg {
            max-width: 900px;
        }
    }

    .modal-content {
        background-color: #fff;
        margin: 2% auto;
        padding: 10px;
        border: 1px solid #888;
        width: 60%;
        max-height: 100vh;
        overflow-y: auto;
        border-radius: 10px;
    }

    /* Styling for form elements */
    .modal-body form {
        display: flex;
        flex-direction: column;
        gap: 1px;
        /* Normal gap between form elements */
    }


    label {
        font-size: 16px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #f67d4a;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #e56a38;
    }

    /* Disable background scroll when modal is open */
    body.modal-open {
        overflow: hidden;
    }

    /* Responsive design */
    @media screen and (max-width: 768px) {
        .modal-content {
            width: 90%;
            max-height: 90vh;
        }
    }




    /* Close button styling */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
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
        <!-- start tp-site-header -->
        <?php include("header.php"); ?>
        <!-- end tp-site-header -->
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Donate Now</h2>
                            <ul>
                                <li><a href="index1.php">Home</a></li>
                                <li><span>Donate</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- tp-event-area start -->
        <div class="tp-donation-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-title text-center">
                            <div class="thumb-text">
                                <span>Donate</span>
                            </div>
                            <h2>Make a Donation</h2>
                        </div>
                        <div id="Donations" class="tab-pane">

                            <!-- donate radio button -->
                            <div class="donation-options" style="text-align: center; margin-top: 50px;">
                                <div>
                                    <input type="radio" id="bookOption" name="donationType" value="book"
                                        onclick="openModal('formBookModal')">
                                    <label for="bookOption">Donate a Book</label>
                                </div>
                                <div>
                                    <input type="radio" id="moneyOption" name="donationType" value="money"
                                        onclick="openModal('moneyDonationModal')">
                                    <label for="moneyOption">Donate Money</label>
                                </div>
                                <div>
                                    <input type="radio" id="clothesOption" name="donationType" value="clothes"
                                        onclick="openModal('clothesDonationModal')">
                                    <label for="clothesOption">Donate Clothes</label>
                                </div>
                            </div>
                            <!-- donate radio button end -->


                            <!-- Book Donation Modal -->
                            <div id="formBookModal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="formBookLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="moneyDonationModalLabel">Donate Book</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <label for="name">Your Name:</label>
                                                <input type="text" id="name" name="name" required><br><br>

                                                <label for="contact">Contact Number:</label>
                                                <input type="tel" id="contact" name="contact" required><br><br>

                                                <label for="bookdonationquantity">Quantity:</label>
                                                <input type="number" id="bookdonationquantity"
                                                    name="bookdonationquantity" required>
                                                <span id="book-error-message" style="color: red; display: none;">Quantity should be at least 20.</span>

                                                <br><br>
                                                <label for="bookdonationtype">Type of Donation(Book Type e.x
                                                    college-book):</label>
                                                <input type="text" id="bookdonationtype" name="bookdonationtype"
                                                    required><br><br>

                                                <label for="bookdonationaddress">Address:</label>
                                                <textarea id="bookdonationaddress" name="bookdonationaddress" rows="4"
                                                    required></textarea><br><br>

                                                <label for="bookdonationdate">Date of Donation:</label>
                                                <input type="date" id="bookdonationdate" name="bookdonationdate"
                                                    required><br><br>


                                                <input type="submit" value="Submit Donation" id="submiteBook"
                                                    name="submiteBook">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end book donation modal -->


                            <!-- Money Donation Modal -->
                            <div class="modal fade" id="moneyDonationModal" tabindex="-1" role="dialog"
                                aria-labelledby="moneyDonationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="moneyDonationModalLabel">Donate Money</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="donation-form" method="POST" action="process_donation.php">
                                                <label for="donorfirstname">First Name:</label>
                                                <input type="text" id="donorfirstname" name="donorfirstname" required><br><br>

                                                <label for="donorlastname">Last Name:</label>
                                                <input type="text" id="donorlastname" name="donorlastname" required><br><br>

                                                <label for="donoremail">Email:</label>
                                                <input type="email" id="donoremail" name="donoremail" required><br><br>

                                                <label for="donationamount">Enter Amount:</label>
                                                <input type="number" id="donationamount" name="donationamount" step="0.01" required><br><br>
                                                <span id="error-message" style="color: red; display: none;">Amount must be at least 100 INR</span>

                                                <label for="donoraddress">Address:</label>
                                                <textarea id="donoraddress" name="donoraddress" rows="4" required></textarea><br><br>

                                                <label for="message">Message (optional):</label>
                                                <textarea id="message" name="message" rows="4"></textarea><br><br>

                                                <label for="cardholdername">Cardholder Name:</label>
                                                <input type="text" id="cardholdername" name="cardholdername" required><br><br>

                                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                                <button type="button" id="pay-button">Submit Donation</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end money donation modal -->
                            

                            <!-- Modal for Clothes Donation -->
                            <div class="modal fade" id="clothesDonationModal" tabindex="-1" role="dialog" aria-labelledby="clothesDonationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="clothesDonationModalLabel">Donate Clothes</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <label for="name">Your Name:</label>
                                                <input type="text" id="name" name="name" required><br><br>

                                                <label for="contact">Contact Number:</label>
                                                <input type="tel" id="contact" name="contact" required><br><br>

                                                <label for="clothesdonationquantity">Quantity:</label>
                                                <input type="number" id="clothesdonationquantity" name="clothesdonationquantity" required min="1" max="10"><br>
                                                <span id="clothes-error-message" style="color: red; display: none;"></span><br><br>

                                                <div id="sizeInputs"></div> <!-- Where dynamic size inputs will be added -->

                                                <label for="clothesdonationaddress">Address:</label>
                                                <textarea id="clothesdonationaddress" name="clothesdonationaddress" rows="4" required></textarea><br><br>

                                                <label for="clothesdonationdate">Date of Donation:</label>
                                                <input type="date" id="clothesdonationdate" name="clothesdonationdate" required><br><br>

                                                <input type="submit" value="Submit Donation" name="submitClotes">
                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end clotes donatiom modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- tp-event-area end -->
        <!-- news-letter-section start-->
        <section class="tp-news-letter-section">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe to our Newsletter</h3>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <div class="newsletter-form">
                                    <form action="https://api.web3forms.com/submit" method="POST">
                                        <div>
                                            <input type="hidden" name="access_key"
                                                value="f481b791-e34e-4c6f-bc8f-b0c460b47dc2">

                                            <input type="email" name="email" placeholder="Enter Your Email"
                                                class="form-control" required>

                                            <!-- Honeypot Spam Protection -->
                                            <input type="checkbox" name="botcheck" class="hidden"
                                                style="display: none;">

                                            <button class="bigCursor" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- news-letter-section end-->

        <!-- start tp-site-footer -->
        <div class="tp-ne-footer">
            <!-- start tp-site-footer -->
            <?php include("footer1.php"); ?>
            <!-- end tp-site-footer -->
        </div>
    </div>
    <!-- end of page-wrapper -->
    <!-- theme-change-btn -->
    <div class="theme-change-btn">
        <button id="change-theme-btn">
            <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
            <span class="cng-btn-2">Dark <i class="ti-palette"></i></span>
        </button>
    </div>

    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <!-- All JavaScript files
    ================================================== -->


    <!-- JavaScript to Open Modals -->
    <script>
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                $(modal).modal('show'); // Use Bootstrap's modal method to open the modal
            }
        }

        // Get the close button and attach click event
        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function () {
            closeModal();
        }

        // Close modal when clicking outside of the modal content
        window.onclick = function (event) {
            var modal = document.getElementById("formBook");
            if (event.target == modal) {
                closeModal();
            }
        }

        // Using Bootstrap's modal trigger instead of custom logic for simplicity
        $(document).ready(function () {
            // Automatically close modal when clicking outside of the content
            $('.modal').on('click', function (event) {
                if ($(event.target).hasClass('modal')) {
                    $(this).modal('hide');
                }
            });
        });
    </script>
    <!-- end open modal -->

    <!-- start book script --> 
    <script>
        // Validate book donation quantity
        document.getElementById('bookdonationquantity').addEventListener('input', function () {
            var quantityInput = document.getElementById('bookdonationquantity');
            var quantity = parseInt(quantityInput.value);
            var bookErrorMessage = document.getElementById('book-error-message');

            // Check if quantity is valid and at least 20
            if (isNaN(quantity) || quantity < 20) {
                bookErrorMessage.style.display = 'inline';
            } else {
                bookErrorMessage.style.display = 'none';
            }
        });
    </script>
    <!-- end book script -->

    
    <!-- payment script -->
    <script>
        document.getElementById('donationamount').addEventListener('input', function () {
            var amountInput = document.getElementById('donationamount');
            var amount = parseFloat(amountInput.value);
            var errorMessage = document.getElementById('error-message');

            // Check if amount is valid and at least 100
            if (isNaN(amount) || amount < 100) {
                errorMessage.style.display = 'inline';
            } else {
                errorMessage.style.display = 'none';
            }
        });

        document.getElementById('pay-button').onclick = function () {
            var amountInput = document.getElementById('donationamount');
            var amount = parseFloat(amountInput.value);
            var errorMessage = document.getElementById('error-message');

            // Ensure the donation amount is valid before proceeding
            if (isNaN(amount) || amount < 100) {
                errorMessage.style.display = 'inline';
                return;
            }

            var options = {
                key: 'rzp_test_tH5DYIuDK9fSF4', // Replace with your Razorpay API key
                amount: amount * 100, // amount in paise
                currency: 'INR',
                name: 'Hopeful Hearts',
                description: 'Donation',
                handler: function (response) {
                    // Payment successful, set the payment ID and submit the form
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('donation-form').submit();
                },
                prefill: {
                    name: document.getElementById('donorfirstname').value + ' ' + document.getElementById('donorlastname').value,
                    email: document.getElementById('donoremail').value,
                    contact: '9999999999' // Add actual contact field if you have it
                },
                notes: {
                    address: document.getElementById('donoraddress').value
                },
                theme: {
                    color: '#f67d4a'
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        };
    </script>
    <!-- end payment script -->


    <!-- start colthes donate script -->
    <script>
        document.getElementById('clothesdonationquantity').addEventListener('input', function () {
            var quantityInput = document.getElementById('clothesdonationquantity');
            var quantity = parseInt(quantityInput.value);
            var clothesErrorMessage = document.getElementById('clothes-error-message');
            
            // Validate quantity between 5 and 10
            if (isNaN(quantity) || quantity < 5 || quantity > 10) {
                clothesErrorMessage.style.display = 'inline';
                if (quantity > 10) {
                    clothesErrorMessage.textContent = 'You cannot donate more than 10 clothes at a time.';
                } else {
                    clothesErrorMessage.textContent = 'You must donate at least 5 piece of clothing.';
                }
                document.getElementById('sizeInputs').innerHTML = ''; // Clear size inputs if invalid
            } else {
                clothesErrorMessage.style.display = 'none';
                generateSizeInputs(quantity);
            }
        });

        function generateSizeInputs(quantity) {
            var sizeInputsDiv = document.getElementById('sizeInputs');
            sizeInputsDiv.innerHTML = ''; // Clear previous inputs

            for (var i = 1; i <= quantity; i++) {
                var label = document.createElement('label');
                label.innerHTML = 'Enter girl and Boys Size for Clothes ' + i + ':';

                var input = document.createElement('input');
                input.type = 'text';
                input.name = 'clothesdonationsize[]'; // Array to hold multiple sizes
                input.required = true;

                sizeInputsDiv.appendChild(label);
                sizeInputsDiv.appendChild(input);
                sizeInputsDiv.appendChild(document.createElement('br'));
                sizeInputsDiv.appendChild(document.createElement('br'));
            }
        }

    </script>
    <!-- end colthes donate script -->
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>