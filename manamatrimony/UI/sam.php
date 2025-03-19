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

        .forgot-password {

            /* Does not shrink */
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
            document.addEventListener(function (e) {
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

        <link href="css/stylenew.css" rel="stylesheet">
        <!-- Main Header-->

        <header class="main-header header-style-two">
            <div class="buy-script">
                <a href="" target="_blank">
                    <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone"
                                aria-hidden="true"></i></span> +91 8019192373 </p>
                </a>
            </div>
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
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

                                            <li><a href="quicksearch2.php">Quick Search</a></li>
                                            <li><a href="basicsearch2.php">Basic Search</a> </li>
                                            <li><a href="advancesearch.php">Advanced Search</a></li>
                                            <li><a href="">Key Word Search</a></li>
                                            <li><a href="location.php"> Location Search </a></li>
                                            <li><a href="occupation.php">Occupation Search</a></li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="Contact.php">Contact</a></li>

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
                                <a href="login.html" class="theme-btn btn btn-style-one"><span
                                        class="btn-title">Login</span></a>
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
            <li class="dropdown" style="margin-left:22px;margin-top:8px;font-size:16px;font-weight:600"><a
                    href="success_story.html" style="color:#343a40">Happy Story</a></li>
            <hr>
            <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>
            <!-- <a href="signup.html" class="theme-btn btn-style-one mt-2 ml-3"><span
                            class="btn-title">SignUp</span></a> -->
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


    <div class="our-journey-section margin-top-90">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="title short-bio">Short Biography</h4>
            <div class="history-slider">
              <!--<img src="assets/img/shape-09.png" class="history-shape" alt="">-->
              <div class="history-slider-one">
                <div class="thumb">
                    <div class="journey-bg" style="background-image: url(assets/img/2022.webp);">
                      <div class="content">
                          <h4 class="title">CHIEF MINISTER OF MAHARASHTRA <span>(June 2022)</span></h4>
                          <p>Currently serving as the Chief Minister of Maharashtra<br>
                            Took oath on 30th June 2022 along with Devendra Fadnavis as the Deputy Chief Minister</p>
                      </div>
                    </div>
                </div>
                <div class="thumb">
                  <div class="journey-bg" style="background-image: url(assets/img/2004-2022.webp);">
                    <div class="content">
                      <h4 class="title">CABINET MINISTER <span>(2004 - 2022)</span></h4>
                      <p>2019 to 2022<br>
                        Cabinet Minister of Public Health and Family Welfare<br>
                        Appointed Minister of Urban Development and Public Works (Public Undertakings)<br>
                        Appointed Minister of Home Affairs (Acting)(28 November 2019 - 30 December 2019)
                        </p>
                        <p>2004-2019<br>
                        Elected to Maharashtra Legislative Assembly 4 consecutive times</p>
                    </div>
                  </div>
                </div>
                <div class="thumb">
                  <div class="journey-bg" style="background-image: url(assets/img/2004_2022.webp);">
                    <div class="content">
                      <h4 class="title">ELECTED TO THE THANE MUNICIPAL CORPORATION <span>(1997 - 2004)</span></h4>
                      <p>2002<br>
                        Elected to Thane Municipal Corporation for the second time</p>
                        <p>2001<br>
                        Elected to the post of the Leader of the House in Thane Municipal Corporation</p>
                        <p>1997<br>
                        Elected to Thane Municipal Corporation as a corporator for the first time</p>
                    </div>
                  </div>
                </div>
                <div class="thumb">
                  <div class="journey-bg" style="background-image: url(assets/img/1964.webp);">
                    <div class="content">
                      <h4 class="title">BORN 9 FEBRUARY 1964 <span>(1964 - 1996)</span></h4>
                      <p>1980s<br>
                        Introduced to public service by then Thane Shiv Sena President Dharmaveer Anand Dighe</p>
                        <p>1964<br>
                        Born 9 February in Jawali Taluka in Satara, Maharashtra</p>
                    </div>
                  </div>
                </div>
              </div>
              <!--<div class="slick-slider-controls">-->
              <!--    <div class="slick-nav"></div>-->
              <!--</div>-->
              <div class="history-slider-two history-number">
                <div class="history-year">
                  <h3>2022</h3>
                  <img src="assets/icon/lines.svg" alt="" loading="lazy" width="61px" height="16px">
                </div>
                <div class="history-year">
                  <h3>2004</h3>
                  <img src="assets/icon/lines.svg" alt="" loading="lazy" width="61px" height="16px">
                </div>
                <div class="history-year">
                  <h3>1997</h3>
                  <img src="assets/icon/lines.svg" alt="" loading="lazy" width="61px" height="16px">
                </div>
                <div class="history-year">
                  <h3>1964</h3>
                  <img src="assets/icon/lines.svg" alt="" loading="lazy" width="61px" height="16px">
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
  </div>


    <!-- loginform -->
    <div class="login-container">
        <h2>LOGIN</h2>
        <p align=center>And Search Your Life Partner</p>
        <label for="userId">User Id / Email Id</label>
        <input type="text" id="userId" placeholder="Enter your user id" required>

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required>

        <div class="check">
            <div class="checkbox">
                <input type="checkbox" id="keepLoggedIn" value="keepLoggedIn">
                <label for="keepLoggedIn" class="label">Keep me Logged in</label>
            </div>

            <br>
            <div class="forgot-password">
                <p class="fp"><a href="password_recovery_page.html">Forget password?</a></p>
            </div>
        </div>




        <button class="login-btn" onclick="validateForm()">Login Now</button>
        <p align=center>OR</p>
        <button class="otp-btn">Login With OTP</button>
        <p align=center>Not Received email verification link?</p>
        <button class="resend-btn">Resend Email Verification</button>
    </div>
    <?php include 'footer.php'; ?>


    <script>
        function validateForm() {
            var userId = document.getElementById('userId').value;
            var password = document.getElementById('password').value;
            if (userId == '') {
                alert('Please enter your user id');
                return false;
            }
            var sharu4 = /^(?=.*[A-Z])(?=.*[@$!%*?&]).{8,}$/;
            if (password == "" || password == null) {
                alert("please enter the password");
                return false;
            } else if (!sharu4.test(password)) {
                alert("Password must be at least 8 characters long and contain at least one uppercase letter,special character");
                return false;
            }
            alert('Registration sucessfully!');
            return true;
        }
    </script>

</body>

</html>