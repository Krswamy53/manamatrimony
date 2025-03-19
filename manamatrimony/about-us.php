<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
    <!-- about css -->
    <style>
        .image-column img {
            width: 550px;

        }

        .text {
            width: 550px;
        }
        .active {
            color: #f14b59;
        }
        .title-section {
            margin-bottom: 40px;

            margin-top: -65px;
        }

        .about-section {
            margin-bottom: -55px;
        }

        .active {
            color: #f14b59;
        }

        /* For mobile devices */
        @media only screen and (max-width: 767px) {
            .image-column img {
                width: 100%;
                height: auto;
                margin-top: 0px;
            }

            .text {
                width: 99%;
            }

            .title-section {
                margin-top: 10px;
            }

            /*  Adjust margins and padding for content columns */
            .content-column {
                padding: 3px;
                margin-bottom: 5px;
                margin-top: 5px;
            }

            .main-header {
                height: 60px;
            }

            .main-footer {
                padding: 20px;
            }
        }

        .about-section .content-column .sec-title {
            margin-top: -70px;
        }

        @media only screen and (max-width: 767px) {
            .sec-title {
                margin-bottom: 40px;
                margin-top: -10px !important;
            }
        }

        @media only screen and (min-width: 768px) {
            .image-column img {
                width: 100%;
                height: 100% !important;
                margin-top: 0px;
            }

            .text {
                width: 99%;
            }

            .title-section {
                margin-top: 10px;
            }

            /*  Adjust margins and padding for content columns */
            .content-column {
                padding: 3px;
                margin-bottom: 5px;
                margin-top: 5px;
            }

            .main-header {
                height: 60px;
            }

            .main-footer {
                padding: 20px;
            }
        }

        .about-section .content-column .sec-title {
            margin-top: -70px;
        }
    </style>
</head>

<body>

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

<header class="main-header header-style-two">
    <div class="buy-script">
        <a href="" target="_blank">
            <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone" aria-hidden="true"></i></span> +91 8019192373 </p>
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

                            <li class=" dropdown"><a href="index.php">Home</a></li>

                            <li class="current dropdown active"><a href="">About</a>

                                <ul>
                                    <li><a href="about-us.php" class="active">About Us</a></li>
                                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                    <li><a href="faqs.php">FAQ's</a> </li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                                    <li><a href="disclaimer.php">Disclaimer</a></li>
                                    <!-- <li><a href="safematrimony.php">Safe Matrimony</a></li> -->
                                </ul>
                            </li>

                            <li class="dropdown"><a href="membership.php">Membership </a></li>
                            <li class="dropdown"><a href="successstory.php">Success Stories </a></li>
                            <!--<li class="dropdown"><a href="success_story">Happy Story</a></li>-->

                            <li class="dropdown"><a href="">Search</a>

                                <ul>

                                    <li><a href="quicksearch.php">Quick Search</a></li>
                                    <li><a href="basicsearch.php">Basic Search</a> </li>
                                    <li><a href="advancesearch.php">Advanced Search</a></li>
                                    <!-- <li><a href="">Key Word Search</a></li> -->
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
                        <a href="loginForm.php" class="theme-btn btn btn-style-one"><span class="btn-title">Login</span></a>
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
            
            <!-- <hr> -->
            <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>

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

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1 class="d-none d-lg-block d-xl-block d-md-block">About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- About Section -->
        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="title-section text-center">
                    <span style="color: #E8169D; padding: 5px; font-weight: bold; font-size: 30px;">Welcome to
                        Mana Matrimony</span>

                </div>
                <div class="row">

                    <!-- First Content and Image -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">

                        <div class="inner-column">

                            <div class="text" style="text-align:justify">
                                <p class="text"><strong>Mana Matrimony</strong> is one
                                    of the
                                    professional and highly experienced Matrimonial Website Development in India.
                                    <strong>Mana Matrimony</strong> services are
                                    tailored to suit different religions, cultures and ethnicity. Many professionals
                                    live busy work life and find it hard to find time to meet like minded singles.
                                    <strong>Mana Matrimony.com</strong> was created to
                                    make the process relatively easy and convenient.
                                </p>
                                <p class="text">From the early stages it has been our goal to help you connect with
                                    someone of your
                                    choice. For a long lasting relationship of your dreams. Our process is a fusion of
                                    old matchmaking principles with integration of modern technology.</p>
                                <p class="text"><strong>Mana Matrimony</strong> ensures
                                    a safe and
                                    secure environment, with a commitment to 100% privacy guaranteed.</p>
                            </div>

                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <img src="img1.png" alt="Image 1" style="height:370px">
                    </div>
                    <!-- Second Content and Image -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <img src="img2.png" alt="Image 2" style="height:370px">
                    </div>

                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <!-- <span class="title">second content</span>-->
                            <div class="text" style="text-align:justify">
                                <p class="text">Our team of experts is dedicated to providing you with a seamless
                                    experience from
                                    start to finish. We understand the importance of finding the right life partner, and
                                    we are committed to helping you achieve that goal. Our <strong>Mana Matrimony</strong> is user-friendly and
                                    easy to navigate, making it simple for you to search for potential matches based on
                                    your preferences.</p>
                                <p class="text">At <strong>Mana Matrimony</strong>, we
                                    believe in
                                    transparency and honesty. We provide detailed profiles of all our members, including
                                    their photos, interests, and preferences. This allows you to make an informed
                                    decision when choosing a life partner.</p>
                                <p class="text">Join <strong>Mana Matrimony</strong>
                                    today and start
                                    your journey to finding the love of your life. Don't wait any longer – sign up now
                                    and take the first step towards a happy and fulfilling relationship.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Content and Image
            <div class="content-column col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                    <span class="title">third content</span>
                        <div class="text">
                            <p>Matrimonial is one of the professional and highly experienced Matrimonial Website Development Companies in India. As one of the leading matrimonial software development organizations in India, we have maintained a strong team of PHP Developers with us, who work in a synchronized manner to provide you the perfect Matrimony Software at a reasonable cost.</p>
                            <p>So if you are planning to start a matrimonial website with excellent features, then Matrimonial is a perfect platform for you. Matrimonial offers a great service in the design, development, programming, and marketing of your website. We are one of the professional and popular matrimony software development companies in India since 2011. With the help of our matrimonial script application, many potential brides and grooms can build their profiles on it and find a suitable partner.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                <img src="images\resource\about-img-1.jpg" alt="Image 3">
            </div>-->
            </div>
    </div>
    </section>
    <!--End About Section -->

    <!-- Fun Fact Section -->

    <!--End Fun Fact Section -->

    <!-- Features Section Two -->

    <!--End Features Section -->

    <!-- Call to action -->

    <!--End Call to action -->

    <!-- Event Info Section -->

    <!-- Image Column -->

    <!--End Event Info Section -->

    <!-- App Section -->


    <!-- Image Box -->

    <!--End App Section -->

    <!-- Newsletter Section -->

    <!--End Newsletter Section -->

    <!-- Main Footer -->

    <!-- Main Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->


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
    <!--End Google Map APi-->
</body>


</html>