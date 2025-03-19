<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylec5d7.css?v=505020.0" rel="stylesheet">
    <link href="css/responsivec5d7.css?v=505020.0" rel="stylesheet">
    <link href="css/newcss.css" rel="stylesheet">
    <link href="css/stylenew.css" rel="stylesheet">
    <link href="css/mynewstyle.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="css/tooltip.css" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="php matrimony, matrimony template, matrimony software, ready matrimony script" />
    <meta name="description" content="readymade PHP matrimony web and android application with Beautiful Templates" />
    <!-- Global site tag (gtag.js) - Google Analytics date29/04/2021 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3ECHHRM4Y\\\\\\\\\\\\\\\%22"></script>
    <style>
        .search-button {
            padding: 0px 0px;
            border: none;
            border-radius: 4px;
            background-color: #ff7f00;
            color: white;
            width: 75px;
            height: 40px;
            margin-top: 20px;
            text-align: left;
        }

        .search-button:hover {
            background-color: #e57000;
        }

        .dropselect {
            padding: 0px 0px;
            height: 43px;
            width: 104%;
            margin-left: -20px;
        }

        .dropselect1 {
            padding: 9px 9px;
            height: 43px;
            width: 80%;
        }

        .banner-section {
            margin-left: -550px;
            height: 900px;
        }

        .container {
            max-width: 420px;
            margin: 0 auto;
            height: 536px;
            border: solid 2px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .5);
            padding: 5px 16px;
            border-radius: 10px;
            margin-right: 45px;
            margin-top: -363px;
            background-color: purple;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: -10px;
            height: 50px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            /* Adjusts space between the two form groups */
        }

        .form-group {
            flex: 1;
            /* Each form group takes up equal width */
            margin-right: 10px;
            /* Adjust spacing between form groups */
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            /* Adjusts space between the two form groups */
        }

        .form-group {
            flex: 1;
            /* Each form group takes up equal width */
            margin-right: 10px;
            /* Adjust spacing between form groups */
        }

        label {
            display: flex;
            height: 20px;
            color: orange;
            text-align: center;

        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: -20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: 30px;
        }

        .dob-fields {
            display: flex;
        }

        .form-group2 {
            display: inline-block;
            vertical-align: middle;
        }

        .form-group2 input[type="checkbox"] {
            margin-right: 5px;
            /* Adjust the spacing between the checkbox and label */
        }

        .form-group2 {
            display: flex;
            align-items: center;
        }

        .form-group2 input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-group2 label {
            margin: 0;
            /* Remove default margin to ensure proper alignment */
        }

        .dob-fields input {
            flex: 1;
            margin-right: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        .ch {
            color: black;
        }

        .bt {
            margin-top: 10px;
            margin-left: 110px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .auto-container {

            max-width: 1200px;
            padding: 0px 15px;
            margin: 0 auto;
        }

        .verification-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* This ensures the box is centered vertically */
        }

        .verification-box {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .5);
            text-align: center;
            margin-left: 595px;
            margin-bottom: -130px;

        }






        .box {
            float: right;
        }

        .header {
            text-align: center;
        }

        .mobile-icon {
            /* Add styles for your mobile icon */
        }

        #verification-pin {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
        }

        #verify-btn,
        #resend-otp {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: green;
            color: white;
            cursor: pointer;
            margin-top: 5px;
        }

        #resend-otp {
            background-color: orange;
        }

        #edit-mobile,
        #skip-verification {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: blue;
            text-decoration: none;
        }

        .btn-style-two:hover {
            background-color: white;
        }

        .intro_Profile {
            margin-top: -80 px;
        }


        @media screen and(max-width: 768px) {
            .contact-form {
                padding-top: 20 px;
            }
        }

        /* Add a right margin to each icon */
        .fas {
            margin-left: -12 px;
            margin-right: 8 px;
        }

        .btn-style-letsbegin {
            background-color: #ffffff;
            color: #444444;

        }
    </style>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z3ECHHRM4Y');
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Matrimony Software",
            "url": "https://www.",
            "name": "PHP Matrimony software.",
            "contactPoint": {
                "@type": "INDIA",
                "telephone": "+91 ",
                "contactType": "Customer service"
            }
        }
    </script>
    <script>
        function fillage(str) {
            var xmlhttp;
            if (str == "") {
                document.getElementById("toage").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("toage").innerHTML = xmlhttp.responseText;
                }
            }
            //alert(str);
            xmlhttp.open("GET.html", "filltoage03d2.html?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>

    <script>
        // script.js
        document.getElementById('verify-btn').addEventListener('click', function () {
            var pin = document.getElementById('verification-pin').value;
            if (pin === '') {
                alert('Please enter the PIN.');
            } else {
                // Add verification logic here
                alert('PIN entered: ' + pin);
            }
        });

        document.getElementById('resend-otp').addEventListener('click', function () {
            // Add logic to resend OTP
            alert('OTP has been resent.');
        });
    </script>

    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header span -->
        <!-- Main Header-->
        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="buy-script">

                <a href="" target="_blank">
                    <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone"
                                aria-hidden="true"></i></span>
                        +91 8019192373 </p>
                </a>

            </div>
            <div class="main-box">

                <div class="auto-container clearfix ">

                    <div class="logo-box">

                        <div class="logo"><a href="index.php"><img src="images/logo1.png" alt="" title=""></a>
                        </div>

                    </div>

                    <!--Nav Box-->
                    <di v class="nav-outer clearfix">

                        <!--Mobile Navigation Toggler-->
                        <div class="mobileapp_Icon">
                            <a href="https://play.google.com/store/apps/details?id=com.infinity.matrimonysoftware"
                                target="_blank"><img src="images/app-ic.png"></a>
                        </div>
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span>

                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">

                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class=" current dropdown active "><a href="index.php">Home</a></li>

                                    <li class="dropdown"><a href="about-us.php">About</a>

                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                            <li><a href="faqs.php">FAQ's</a> </li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                            <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                                            <li><a href="disclaimer.php">Disclaimer</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="membership.php">Membership </a></li>
                                    <li class=" dropdown "><a href="successstory.php">Success Stories </a></li>


                                    <li class="dropdown"><a href="">Search</a>

                                        <ul>

                                            <li><a href="quicksearch.php">Quick Search</a></li>
                                            <li><a href="basicsearch.php">Basic Search</a> </li>
                                            <li><a href="advancesearch.php">Advanced Search</a></li>

                                            <li><a href="location.php"> Location Search </a></li>
                                            <li><a href="occupation.php">Occupation Search</a></li>
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
                                <a href="RegistrationForm.php" class="theme-btn btn btn-style-one">
                                    <span class="btn-title" style="text-aign:center;margin-left:10px;">Login</span></a>
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
            <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>

        </nav>
    </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

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
    <!-- Banner Section -->

    <div class="mainBannerSection">

        <section class="banner-section">


            <div class="">
                <div>

                    <!-- Slide Item -->
                    <!-- <div class="slide-item" style="background-image: url(images/main-slider/1.jpg); height:900px;"> -->

                    <div class="auto-container">

                        <div class="content-box mt-5">


                            <ul class="info-list">
                                <li><span class="icon fas fa-edit"></span> Sign Up</li>
                                <li><span class="icon fas fa-user-plus"></span> Connect</li>
                                <li><span class="icon fas fa-comments"></span> Interact</li>
                            </ul>

                        </div>

                    </div>



                    <!-- Slide Item -->

                    <!-- <div class="box"> -->
                    <div class="verification-container">
                        <div class="verification-box">
                            <div class="header">
                                <i class="fas fa-mobile-alt" style="font-size:30px;color:orange"></i>
                                <h2 style="color:orange;">Mobile Number Verification</h2>
                            </div>
                            <p class="text"">Verify your mobile number now to activate your profile. It is mandatory to verify your
                                mobile number otherwise your profile will not be displayed to other members.</p>
                            <p class=" text">Verify mobile number through SMS. An SMS with verification PIN has been
                                sent to <span style="color:orange;"><br>+91
                                    <?php echo $_SESSION['mobile_number']; ?></span>
                            </p>
                            <a href="index.php" id="edit-mobile" style="color:orange;">Edit Mobile No</a>
                            <input type="text" id="verification-pin" placeholder="Enter PIN">
                            <button id="verify-btn">Verify</button>
                            <button id="resend-otp">Send OTP Again</button>
                            <a href="RegistrationForm.php" id="skip-verification">Skip mobile verification</a>
                        </div>
                    </div>

                    <!-- </div> -->
                    <script src="script.js"></script>








                </div>
            </div>

    </div>

    </section>

    <!-- mobile slider start here -->



    <!-- Coming Soon -->

    <!-- End Coming Soon -->
    <!--LoginPage Section-->

    <!--EndLoginPage Section-->
    <!-- About Section -->

    <!--End Features Section -->

    <link href="search-profiles-style/mystyle.css" rel="stylesheet">


    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".skew:nth-child(1)").mouseover(function () {
                $(".skew").not(".skew:nth-child(1)").addClass("left-animation");
            });
            $(".skew:nth-child(1)").mouseleave(function () {
                $(".skew").not(".skew:lt(1)").removeClass("left-animation");
                $(".skew").not(".skew:lt(1)").addClass("return");
            });
            $(".skew:nth-child(2)").mouseover(function () {
                $(".skew").not(".skew:lt(2)").addClass("left-animation");
            });
            $(".skew:nth-child(2)").mouseleave(function () {
                $(".skew").not(".skew:lt(2)").removeClass("left-animation");
                $(".skew").not(".skew:lt(2)").addClass("return");
            });
            $(".skew:nth-child(3)").mouseover(function () {
                $(".skew").not(".skew:lt(3)").addClass("left-animation");
            });
            $(".skew:nth-child(3)").mouseleave(function () {
                $(".skew").not(".skew:lt(3)").removeClass("left-animation");
                $(".skew").not(".skew:lt(3)").addClass("return");
            });
            $(".skew:nth-child(4)").mouseover(function () {
                $(".skew").not(".skew:lt(4)").addClass("left-animation");
            });
            $(".skew:nth-child(4)").mouseleave(function () {
                $(".skew").not(".skew:lt(4)").removeClass("left-animation");
                $(".skew").not(".skew:lt(4)").addClass("return");
            });
            $(".skew:nth-child(5)").mouseover(function () {
                $(".skew").not(".skew:lt(5)").addClass("left-animation");
            });
            $(".skew:nth-child(5)").mouseleave(function () {
                $(".skew").not(".skew:lt(5)").removeClass("left-animation");
                $(".skew").not(".skew:lt(5)").addClass("return");
            });
            $(".skew:nth-child(6)").mouseover(function () {
                $(".skew").not(".skew:lt(6)").addClass("left-animation");
            });
            $(".skew:nth-child(6)").mouseleave(function () {
                $(".skew").not(".skew:lt(6)").removeClass("left-animation");
                $(".skew").not(".skew:lt(6)").addClass("return");
            });
            $(".skew:nth-child(7)").mouseover(function () {
                $(".skew").not(".skew:lt(7)").addClass("left-animation");
            });
            $(".skew:nth-child(7)").mouseleave(function () {
                $(".skew").not(".skew:lt(7)").removeClass("left-animation");
                $(".skew").not(".skew:lt(7)").addClass("return");
            });
            $(".skew:nth-child(8)").mouseover(function () {
                $(".skew").not(".skew:lt(8)").addClass("left-animation");
            });
            $(".skew:nth-child(8)").mouseleave(function () {
                $(".skew").not(".skew:lt(8)").removeClass("left-animation");
                $(".skew").not(".skew:lt(8)").addClass("return");
            });

            $(".secondskew:nth-child(1)").mouseover(function () {
                $(".secondskew").not(".secondskew:nth-child(1)").addClass("left-animation");
            });
            $(".secondskew:nth-child(1)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(1)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(1)").addClass("return");
            });
            $(".secondskew:nth-child(2)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(2)").addClass("left-animation");
            });
            $(".secondskew:nth-child(2)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(2)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(2)").addClass("return");
            });
            $(".secondskew:nth-child(3)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(3)").addClass("left-animation");
            });
            $(".secondskew:nth-child(3)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(3)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(3)").addClass("return");
            });
            $(".secondskew:nth-child(4)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(4)").addClass("left-animation");
            });
            $(".secondskew:nth-child(4)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(4)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(4)").addClass("return");
            });
            $(".secondskew:nth-child(5)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(5)").addClass("left-animation");
            });
            $(".secondskew:nth-child(5)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(5)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(5)").addClass("return");
            });
            $(".secondskew:nth-child(6)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(6)").addClass("left-animation");
            });
            $(".secondskew:nth-child(6)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(6)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(6)").addClass("return");
            });
            $(".secondskew:nth-child(7)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(7)").addClass("left-animation");
            });
            $(".secondskew:nth-child(7)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(7)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(7)").addClass("return");
            });
            $(".secondskew:nth-child(8)").mouseover(function () {
                $(".secondskew").not(".secondskew:lt(8)").addClass("left-animation");
            });
            $(".secondskew:nth-child(8)").mouseleave(function () {
                $(".secondskew").not(".secondskew:lt(8)").removeClass("left-animation");
                $(".secondskew").not(".secondskew:lt(8)").addClass("return");
            });


            /*profile image */
            var conHeight = $(".skew-image").height();
            var imgHeight = $(".skew-image img").height();
            var gap = (imgHeight - conHeight) / 2;
            $(".skew-image img").css("margin-top", -gap);
            /*End profile image */
        });
    </script> <!-- App Section -->

    <!--End App Section -->



    <!-- Pricing Section -->
    <!--End Pricing Section -->

    <!-- Why Choose Us -->
    <!-- End Why Choose Us -->
    <!--Clients Section-->
    <!--End Clients Section-->

    <!-- Register Section -->

    <!--End Register Section -->
    <!-- News Section -->

    <!--End News Section -->


    <!-- Main Footer -->

    <?php include 'footer.php'; ?>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->
    <!-- End Color Switcher -->

    <!--Search Popup-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/wow.js"></script>
    <!-- <script src="js/script.js"></script>
 -->
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn').on('click', function () {
                var $this = $(this);
                var loadingText =
                    '<i class="fa fa-spinner fa-spin fas"></i><span class="btn-title">Loading</span> ';
                if ($(this).html() !== loadingText) {
                    $this.data('original-text', $(this).html());
                    $this.html(loadingText);
                }
                setTimeout(function () {
                    $this.html($this.data('original-text'));
                }, 500);
            });
        })
    </script>
    <script type="text/javascript">
        document.addEventListener("keyup", function (e) {
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
            } catch (err) { }
        }
        setInterval("AccessClipboardData()", 300);
    </script>

    <!--loginPage Script-->


    <!--<script src="js/jquery.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
    <script>
        $(document).ready(function () {
            $('.btn').on('click', function () {
                var $this = $(this);
                var loadingText =
                    '<i class="fa fa-spinner fa-spin fas"></i><span class="btn-title">Loading</span> ';
                if ($(this).html() !== loadingText) {
                    $this.data('original-text', $(this).html());
                    $this.html(loadingText);
                }
                setTimeout(function () {
                    $this.html($this.data('original-text'));
                }, 500);
            });
        })
    </script>


    <script>
        function updateAgeRange() {
            var genderSelect = document.getElementById('gender');
            var fromAgeSelect = document.getElementById('fromage');
            var toAgeSelect = document.getElementById('toage');

            var selectedGender = genderSelect.value;

            // Clear existing options
            fromAgeSelect.innerHTML = '';
            toAgeSelect.innerHTML = '';

            // Populate age ranges based on gender
            if (selectedGender === 'Male') {
                for (var age = 23; age <= 50; age++) {
                    var option = document.createElement('option');
                    option.text = age;
                    option.value = age;
                    fromAgeSelect.add(option);
                    toAgeSelect.add(option.cloneNode(true));
                }
            } else if (selectedGender === 'Female') {
                for (var age = 18; age <= 45; age++) {
                    var option = document.createElement('option');
                    option.text = age;
                    option.value = age;
                    fromAgeSelect.add(option);
                    toAgeSelect.add(option.cloneNode(true));
                }
            }
        }
    </script>
    <script>
        function updateCasteDropdown() {
            var religionSelect = document.getElementById("religion");
            var casteSelect = document.getElementById("caste");

            var selectedReligion = religionSelect.value;
            // Clear existing options
            casteSelect.innerHTML = "<option value='' selected>Select</option>";

            // Populate caste dropdown based on selected religion
            if (selectedReligion === "Christian") {
                populateCasteForChristian(casteSelect);
            } else if (selectedReligion === "Hindu") {
                populateCasteForHindu(casteSelect);
            } else if (selectedReligion === "Inter-Religion") {
                populateCasteForInterReligion(casteSelect);
            } // Add conditions for other religions as needed
        }

        function populateCasteForChristian(casteSelect) {
            // Populate caste dropdown for Christian religion
            var christianCastes = ["Caste1", "Caste2", "Caste3"];
            populateCasteOptions(casteSelect, christianCastes);
        }

        function populateCasteForHindu(casteSelect) {
            // Populate caste dropdown for Hindu religion
            var hinduCastes = ["reddy", "Caste5", "Caste6"];
            populateCasteOptions(casteSelect, hinduCastes);
        }

        function populateCasteForInterReligion(casteSelect) {
            // Populate caste dropdown for Inter-Religion
            var interReligionCastes = ["Caste7", "Caste8", "Caste9"];
            populateCasteOptions(casteSelect, interReligionCastes);
        }

        // Add more functions to populate caste options for other religions if needed

        function populateCasteOptions(selectElement, casteArray) {
            // Helper function to populate caste options
            casteArray.forEach(function (caste) {
                var option = document.createElement("option");
                option.value = caste;
                option.text = caste;
                selectElement.add(option);
            });
        }
    </script>





</body>


</html>