<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donor & Pickupman Registration</title>
        <style>
            /* Styles for form container */
            .form-container {
                position: relative;
                overflow: hidden;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            /* Styles for slide controls */
            .slide-controls {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .slide-controls button {
                padding: 10px 20px;
                cursor: pointer;
                color: #fff;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .slide-controls button:hover {
                background-color: #0056b3;
            }

            /* Styles for form inner */
            .form-inner {
                display: flex;
                flex-direction: column;
            }

            /* Styles for individual forms */
            .form-inner form {
                display: none;
            }

            .form-inner form.active {
                display: block;
            }

            /* Styles for fields and buttons */
            .field {
                margin-bottom: 15px;
            }

            .field input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .btn-layer {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #007bff;
                border-radius: 5px;
                transition: opacity 0.3s ease;
            }

            .field.btn input[type="submit"] {
                position: relative;
                z-index: 1;
                background-color: transparent;
                color: #007bff;
                cursor: pointer;
            }

            .field.btn:hover .btn-layer {
                opacity: 0;
            }

            /* Styles for donor and pickupman sections */
            .donor-pickupman-sections {
                margin-top: 20px;
            }

            #donorForm, #pickupmanForm {
                display: none;
            }

            #donorForm.active, #pickupmanForm.active {
                display: block;
            }
        </style>
    </head>
    <body>

        <!-- Form container -->
        <div class="form-container">
            <!-- Slide controls -->
            <div class="slide-controls">
                <button id="donorButton">Donor</button>
                <button id="pickupmanButton">Pickupman</button>
            </div>
            <!-- Form inner -->
            <div class="form-inner">
                <!-- Donor form -->
                <form action="#" id="donorForm" class="active">
                    <div class="field">
                        <input type="text" placeholder="User Name" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Contact" required>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="date" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Street" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Area" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="City" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Pincode" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <input type="submit" value="Signup as Donor">
                    </div>
                </form>
                <!-- Pickupman form -->
                <form action="#" id="pickupmanForm">
                    <div class="field">
                        <input type="text" placeholder="User Name" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <input type="submit" value="Signup as Pickupman">
                    </div>
                </form>
            </div>
        </div>

        <!-- JavaScript for form toggling -->
        <script>
            const donorForm = document.getElementById("donorForm");
            const pickupmanForm = document.getElementById("pickupmanForm");
            const donorButton = document.getElementById("donorButton");
            const pickupmanButton = document.getElementById("pickupmanButton");

            donorButton.addEventListener("click", function () {
                donorForm.classList.add("active");
                pickupmanForm.classList.remove("active");
            });

            pickupmanButton.addEventListener("click", function () {
                pickupmanForm.classList.add("active");
                donorForm.classList.remove("active");
            });
        </script>

    </body>
</html>
