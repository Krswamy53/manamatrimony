<?php
session_start();

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'shadhi';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM  user_profiles WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $_SESSION['id'] = $id;
            $_SESSION['firstName'] = $row['firstName']; // Store the name in the session
            echo ("<script language='JavaScript'>
                alert('Successfully login');
                location.href='userp.php';
                </script>");
        } else {

            echo ("<script language='JavaScript'>
                alert('invalid email or password');
                location.href='loginform.php';
                </script>");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title><!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsiveef2f.css?v=202020.1" rel="stylesheet">
    <link href="css/mynewstyle.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="Marriage beuro application, matrimony template, Matrimony site Live Demo" />
    <meta name="description" content="" />
    <style>
        .about-section .content-column .sec-title {
            margin-top: -70px;
        }

        @media only screen and (max-width: 767px) {
            .sec-title {
                margin-bottom: 40px;
                margin-top: -10px !important;
            }
        }
    </style>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            /* overflow-y: hidden; */

        }


        .check {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Align items vertically */
        }

        .checkbox {
            display: flex;
            align-items: center;
            /* Align items vertically */
        }

        .checkbox input[type="checkbox"] {
            margin-right: 10px;
            /* Adjust the spacing between the checkbox and the label */
        }

        .label {
            white-space: nowrap;
            /* Prevent the label content from wrapping to the next line */
        }


        /* .label {
            font-size: 40px;
        } */






        .login-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: orange;
        }

        .login-container input {
            width: 90%;
            padding: 8px;
            margin: 10px 0px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .login-container button {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-btn {
            background-color: orange;
        }

        .otp-btn {
            background-color: green;
        }

        .resend-btn {
            background-color: #458c58;
        }

        .login-container label {
            display: block;
        }



        .fp {
            color: orange;
            text-align: right;
            font-size: inherit;
        }

        /* Add styles for the footer */
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            background-color: #f8f8f8;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <!-- header -->
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <style>
            .rowh {
                margin-right: 29px;
            }
        </style>
        <script>
            document.addEventListener(function(e) {
                var keyCode = e.keyCode ? e.keyCode : e.which;
                if (keyCode == 44) {
                    stopPrntScr();
                }
            });

            function stopPrntScr() {

                var inpFld = document.createElement("input");
                inpFld.setAttribute("value", ".");
                inpFld.setAttribute("width", "0");
                inpFld.style.height = "0px";
                inpFld.style.width = "0px";
                inpFld.style.border = "0px";
                document.body.appendChild(inpFld);
                inpFld.select();
                document.execCommand("copy");
                inpFld.remove(inpFld);
            }

            function AccessClipboardData() {
                try {
                    window.clipboardData.setData('text', "Access   Restricted");
                } catch (err) {}
            }
            setInterval("AccessClipboardData()", 300);
        </script>

        <link href="css/stylenew.css" rel="stylesheet">
        <!-- Main Header-->

        <header class="main-header header-style-two">
            <div class="buy-script">
                <a href="" target="_blank">
                    <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        +91 8019192373 </p>
                </a>
            </div>
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <div class="mobileapp_Icon1">
                            <a href="#" target="_blank"><img src="images/app-ic.png"></a>
                        </div>
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">

                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class="current dropdown"><a href="index.php">Home</a></li>

                                    <li class="dropdown"><a href="about-us.php">About</a>

                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="terms-conditions.php">Terms & Condation</a></li>
                                            <li><a href="faqs.php">FAQ's</a> </li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                            <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                                            <li><a href="disclaimer.php">Disclaimer</a></li>
                                            <li><a href="safematrimony.php">Safe Matrimony</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="my_offer.php">Membership </a></li>
                                    <!--<li class="dropdown"><a href="success_story">Happy Story</a></li>-->
                                    <li class="dropdown"><a href="">Search</a>
                                        <ul>
                                            <li><a href="">Quick Serach</a></li>
                                            <li><a href="basicsearch.php">Basic</a> </li>
                                            <li><a href="advancedsearch.php">Advanced</a></li>
                                            <li><a href="returns-and-cancellation.php">Key Word</a></li>
                                            <li><a href="location.php">Location</a></li>
                                            <li><a href="occupation.php">Occapation</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="contactus.php">Contact</a></li>
                                    <!-- <li><a href="wedding-directory/index" target=_blank>Wedding Services</a></li> -->
                                </ul>

                            </div>
                        </nav>

                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!--Search Box-->


                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="loginfrom.php" class="theme-btn btn btn-style-one"><span class="btn-title">Login</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>

                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                    <li class="dropdown" style="margin-left:22px;margin-top:8px;font-size:16px;font-weight:600"><a href="success_story.php" style="color:#343a40">Happy Story</a></li>
                    <hr>
                    <a href="loginfrom.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>

                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" placeholder="Enter Matrimony ID" value="" name="matriid" required>
                                <input type="submit" value="Search Profile!" name="submit_id" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>

                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">


                        <li><a href="religion_searchfca2.html?religion=Christian">Christian</a></li>


                        <li><a href="religion_searchd660.html?religion=Hindu">Hindu</a></li>


                        <li><a href="religion_search8d18.html?religion=Inter-Religion">Inter-Religion</a></li>


                        <li><a href="religion_search76cb.html?religion=Jain">Jain</a></li>


                        <li><a href="religion_searchffd1.html?religion=Muslim">Muslim</a></li>


                        <li><a href="religion_search0009.html?religion=Sikh">Sikh</a></li>

                    </ul>

                </div>

            </div>
        </div>
        <!--End Main Header -->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
        <!-- Color Setting -->
        <script src="js/color-settings.js"></script>
        <!--Google Map APi Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
        <script src="js/map-script.js"></script>





        <!-- loginform -->
        <form id="registrationForm" name="reg" method="post" onsubmit="return validateForm()" action="">
            <div class="login-container">
                <h2>LOGIN</h2>
                <p align=center>And Search Your Life Partner</p>
                <label for="userId">User Id / Email Id</label>
                <input type="text" id="email" name="email" placeholder="Enter your user id">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">

                <div class="check">
                    <div class="checkbox">
                        <input type="checkbox" id="keepLoggedIn" value="keepLoggedIn">
                        <label for="keepLoggedIn" class="label">Keep me Logged in</label>
                    </div>

                    <br>
                    <div class="forgot-password">
                        <p class="fp"><a href="password_recovery_page.html">Forgot your password?</a></p>
                    </div>
                </div>

                <button class="login-btn" name="submit" type="submit">Login Now</button>
                <p align=center>OR</p>
                <button class="otp-btn">Login With OTP</button>
                <p align=center>Not Received email verification link?</p>
                <button class="resend-btn">Resend Email Verification</button>
            </div>
        </form>

        <script>
            function validateForm() {
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var keepLoggedIn = document.getElementById('keepLoggedIn').checked;

                // Check if the "Keep me Logged in" checkbox is checked
                if (keepLoggedIn) {
                    return true; // Allow form submission without email and password
                }

                // Validate email
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email.trim() === '') {
                    alert('Please enter your Email ID');
                    return false;
                }

                if (!email.match(emailRegex)) {
                    alert('Please enter a valid email address ending with .com');
                    return false;
                }

                // Validate password
                var sharu4 = /^(?=.*[A-Z])(?=.*[@$!%*?&]).{8,}$/;
                if (password == "" || password == null) {
                    alert("Please enter the password");
                    return false;
                } else if (!sharu4.test(password)) {
                    alert("Password must be at least 8 characters long and contain at least one uppercase letter, special character");
                    return false;
                }

                // Form will submit if all validations pass
                return true;
            }
        </script>

        <?php include 'footer.php'; ?>



</body>

</html>