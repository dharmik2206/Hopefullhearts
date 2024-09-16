<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donation Forms</title>
        <!-- Add Bootstrap CSS link -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .modal-content {
                background-color: rgba(255, 255, 255, 0.9);
            }
        </style>
    </head>
    <body>
        <div class="container" style="padding-top: 100px">
            <div class="row">
                <div class="col-md-6">
                    <div class="tp-case-details-wrap">
                        <div class="tp-case-details-text">
                            <div id="Description">
                                <div class="tp-case-details-img">
                                    <img src="assets/images/event-details.jpg" alt="">
                                </div>
                                <div class="tp-case-content">
                                    <div class="tp-case-text-top">
                                        <h2>Ensure Book Donation for every poor Children’s!</h2>
                                        <!-- Other content goes here -->
                                        <div class="progress-section">
                                            <div class="process">
                                                <div class="progress">
                                                    <div class="progress-bar">
                                                        <div class="progress-value"><span>65.5</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><span>Raised:</span> 6505</li>
                                            <li><span>Goal:</span> 10000</li>
                                            <li><span>Donar:</span> 380</li>
                                        </ul>
                                        <div class="case-b-text">
                                            <p>Our mission is committed to ensuring that every individual in need gains access to the 
                                                empowering effect of clothing. These situations are straightforward and easily identifiable.
                                                During periods of freedom, when our choices are unencumbered and there are no obstacles to 
                                                supporting our cause, we must seize every opportunity to provide donated Books.</p>
                                        </div>
                                        <div class="submit-area sub-btn" style="padding-left: 150px">
                                            <button style="border: none;" class="theme-btn submit-btn" onclick="showBookDonationForm()">Donate Books</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tp-case-details-wrap">
                        <div class="tp-case-details-text">
                            <div id="Description">
                                <div class="tp-case-details-img">
                                    <img src="assets/images/event-details.jpg" alt="">
                                </div>
                                <div class="tp-case-content">
                                    <div class="tp-case-text-top">
                                        <h2>Ensure Clothes Donation for every poor Children's!</h2>
                                        <!-- Other content goes here -->
                                        <div class="progress-section">
                                            <div class="process">
                                                <div class="progress">
                                                    <div class="progress-bar">
                                                        <div class="progress-value"><span>56.5</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><span>Raised:</span> 5600</li>
                                            <li><span>Goal:</span> 8000</li>
                                            <li><span>Donar:</span> 290</li>
                                        </ul>
                                        <div class="case-b-text">
                                            <p>Our mission is committed to ensuring that every individual in need gains access to the 
                                                empowering effect of clothing. These situations are straightforward and easily identifiable.
                                                During periods of freedom, when our choices are unencumbered and there are no obstacles to
                                                supporting our cause, we must seize every opportunity to provide donated clothing.</p>
                                        </div>
                                        <div class="submit-area sub-btn" style="padding-left: 150px;">
                                            <button style="border: none;" class="theme-btn submit-btn" onclick="showClothDonationForm()">Donate Clothes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cloth Donation Modal -->
        <div class="modal" id="clothDonationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cloth Donation Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>
                            <!-- Add other cloth donation form fields here -->
                            <form>
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact No:</label>
                                    <input type="tel" class="form-control" id="contact" placeholder="Enter your contact number" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Clothes Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" placeholder="Enter quantity of clothes" required>
                                </div>
                                <div class="form-group">
                                    <label for="size">Clothes Size:</label>
                                    <select class="form-control" id="size">
                                        <option value="1-8 years">1-8 years</option>
                                        <option value="8-12 years">8-12 years</option>
                                        <option value="12-20 years">12-20 years</option>
                                        <option value="20 above">20 above</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Book Donation Modal -->
        <div class="modal" id="bookDonationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Book Donation Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>
                            <!-- Add other book donation form fields here -->
                            <form id="donationForm">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required style="width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact No:</label>
                                    <input type="tel" class="form-control" id="contact" placeholder="Enter your contact number" required style="width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required style="width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Book Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" placeholder="Enter quantity of books" required style="width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="type">Book Type:</label>
                                    <select class="form-control" id="type" style="width: 100%;">
                                        <option value="Fair Book">Fair Book</option>
                                        <option value="Knowledge Book">Knowledge Book</option>
                                        <option value="Religious Book">Religious Book</option>
                                        <option value="Historical Book">Historical Book</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Bootstrap JS scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
                                                function showClothDonationForm() {
                                                    $('#clothDonationModal').modal('show');
                                                }

                                                function showBookDonationForm() {
                                                    $('#bookDonationModal').modal('show');
                                                }
        </script>
    </body>
</html>
