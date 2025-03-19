<?php
include('db.php');

if (isset($_GET['expiry']) && is_numeric($_GET['expiry'])) {
    $expiryTimestamp = $_GET['expiry'];
    if (time() > $expiryTimestamp) {
        echo '<script>alert("The reset link has expired. Please request a new one."); window.location.href="loginform.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("Invalid request."); window.location.href="loginform.php";</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $otp = $_POST['otp'];

    // Validate passwords
    if ($password !== $confirm_password) {
        echo '<script>alert("Passwords do not match."); window.location.href="loginform.php";</script>';
        exit();
    }

    if (strlen($password) < 8) {
        echo '<script>alert("Password must be at least 8 characters long."); window.location.href="loginform.php";</script>';
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update password if OTP matches
    $stmt = $conn->prepare("UPDATE user_profiles SET password = ? WHERE email = ? AND otp = ?");
    if ($stmt) {
        $stmt->bind_param('sss', $hashedPassword, $email, $otp);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo '<script>alert("Password changed successfully."); window.location.href="loginform.php";</script>';
        } else {
            echo '<script>alert("OTP does not match or password could not be changed. Please try again."); window.location.href="loginform.php";</script>';
        }

        $stmt->close();
    } else {
        echo '<script>alert("Database error. Please try again."); window.location.href="loginform.php";</script>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>loginform</title><!-- Stylesheets -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    <meta name="description"content=""/><style>.about-section .content-column .sec-title {
        margin-top: -70px;
    }

    @media only screen and (max-width: 767px) {
        .sec-title {
            margin-bottom: 40px;
            margin-top: -10px !important;
        }

        .text {
            margin-left: 40px;

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

    .form-group .icon {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #777;
        font-size: 18px;
    }

    .login-container input {
        width: 90%;
        padding: 8px;
        margin: 10px 0px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: black;
    }

    .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .form-group input {
        width: 100%;
        padding: 10px 40px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        outline: none;

        width: 100%;

        color: blue;

        transition: all 0.3s ease-in-out;
    }

    .form-group input:focus {
        border-color: #EB2869;
        /* Highlight color on focus */
        background-color: #fff;
        /* White background on focus */
        box-shadow: 0 0 5px rgba(235, 40, 105, 0.5);
    }

    .form-group input:hover {
        background-color: #fff;
        /* White background on hover */
        border-color: orange;
        /* Border color change on hover */
    }

    .form-group label {
        position: absolute;
        top: 50%;
        left: 40px;
        transform: translateY(-50%);
        transition: all 0.3s ease-in-out;
        font-size: 16px;
        color: #777;
        background: white;
        padding: 0 5px;
        pointer-events: none;
    }

    .form-group input:focus+label,
    .form-group input:not(:placeholder-shown)+label {
        top: 0;
        font-size: 16px;
        color: #EB2869;
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

    /* Tablets (601px - 1024px) */
    @media screen and (min-width: 601px) and (max-width: 1024px) {
        .login-container {
            max-width: 400px;
            padding: 25px;
        }

        .login-btn,
        .otp-btn {
            padding: 14px;
            font-size: 18px;
        }
    }

    /* Large Screens (Above 1024px) */
    @media screen and (min-width: 1025px) {
        .login-container {
            max-width: 450px;
        }

        .login-btn,
        .otp-btn {
            padding: 14px;
            font-size: 18px;
        }
    }

    /* Small Screens (Up to 600px) */
    @media screen and (max-width: 600px) {
        .login-container {
            width: 95%;
            padding: 15px;
        }

        .form-group input {
            padding: 12px;
            font-size: 14px;
        }

        .login-btn,
        .otp-btn {
            font-size: 14px;
            padding: 10px;
        }

        .fp {
            font-size: 12px;
        }
    }
    </style>
    <style>
    @keyframes slideBackground {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
    }

    .animated-text {
        font-size: 20px;
        font-weight: bold;
        display: inline-block;
        background: linear-gradient(90deg, red, blue, green, orange, red);
        background-size: 500%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: slideBackground 4s infinite linear;
        margin-left: 5px;

    }

    .text {
        margin-left: 140px;

    }
    </style>
</head>

<body>
    <!-- header -->
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
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


        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" placeholder="Enter Matrimony ID" value=""
                                    name="matriid" required>
                                <input type="submit" value="Search Profile!" name="submit_id" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>

                    <br>


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
        <form id="registrationForm" name="reg" method="post" onsubmit="return validateForm()"> 
    <div class="login-container">
        <h2 style="color:#EB2869;">Update Password</h2>

        <div class="form-group">
            <i class="fa fa-user icon"></i>
            <input type="email" id="email" name="email" placeholder=" " required>
            <label for="email">Enter Your Email</label>
        </div>

        <div class="form-group">
            <i class="fa fa-key icon"></i>
            <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>
            <label for="otp">Enter OTP</label>
        </div>

        <div class="form-group">
            <i class="fa fa-lock icon"></i>
            <input type="password" id="password" name="password" placeholder=" " required>
            <label for="password">Password</label>
        </div>

        <div class="form-group">
            <i class="fa fa-lock icon"></i>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder=" " required>
            <label for="confirmpassword">Confirm Password</label>
        </div>

        <button class="login-btn" name="submit" type="submit">Update Password</button><br><br>
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

            if (email.trim() === '') {
                alert('Please enter your Email ID or Phone Number');
                return false;
            }



            // Validate password

            if (password == "" || password == null) {
                alert("Please enter the password");
                return false;
            }

            // Form will submit if all validations pass
            return true;
        }
        </script>

        <?php include 'footer.php'; ?>



</body>

</html>