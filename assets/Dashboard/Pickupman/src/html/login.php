<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Hopefull Hearts</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.eme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet"> <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Custom styles */
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
                    <form class="tp-accountWrapper" action="#" onsubmit="return validateForm()">
                        <div class="tp-accountInfo">
                            <div class="tp-accountInfoHeader">
                                <a href="#"><img src="assets/finallogo.png" alt=""></a>
                                <a class="tp-accountBtn" href="register.php">
                                    <span class="">Create Account</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="tp-accountBtn" href="index.php">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="tp-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Login</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="demo@gmail.com">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="pwd6" type="password" placeholder=""  value="123456" name="pass">
                                    </div>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal6" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                    </span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="check-box-wrap">
                                        <div class="input-box">
                                            <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                            <label for="fruit4">Remember Me</label>
                                        </div>
                                        <div class="forget-btn">
                                            <a href="forgot.php">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="tp-accountBtn">Login</button>
                                </div>
                            </div><br><br>
                            <h4 class="or"><span>OR</span></h4>
                            
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
    
    <script src="assets/js/jquery-plugin-collection.js"></script>
    
    <script src="assets/js/script.js"></script>
    <script>
        function validateForm() {
            var email = document.getElementById("email").value.trim();
            var password = document.querySelector(".pwd6").value;

            if (email === "" || !validateEmail(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (password === "" || password.length < 8) {
                alert("Please enter a password with at least 8 characters.");
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