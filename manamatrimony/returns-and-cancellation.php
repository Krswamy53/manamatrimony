<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Refund Policy</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsiveef2f.css?v=202020.1" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <meta name="keywords" content="matrimonysoftware" />
    <meta name="description" content="matrimonysoftware" />



    <style type="text/css">
        .page-title {

            padding: 0px 0px;
            margin-bottom: -30px;

        }

        p {

            text-align: justify;
        }

        @media screen and (max-width: 768px) {
            .inner-column {
                margin-top: -30px;
            }

            .about-section {
                padding: 80px 0 20px;
            }
        }

        @media screen and (max-width: 568px) {
            .inner-column {
                margin-top: -30px;
            }
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

        <style>
            .rowh {
                margin-right: 29px;
            }
            .active {
            color: #f14b59;
        }
            .inner-column {
                padding-right: 0 !important;
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
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class=" dropdown"><a href="index.php">Home</a></li>

                                    <li class="current dropdown active"><a href="about-us.php">About</a>

                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
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
                                            <li><a href="advancesearch.php">Advance Search</a></li>
                                            <!-- <li><a href="">Key Word Search</a></li> -->
                                            <li><a href="location.php"> Location Search </a></li>
                                            <li><a href="occupation.php">Occupation Search</a></li>

                                        </ul>
                                    <li><a href="contactus.php">Contact</a></li>

                                    </li>
                                    <!-- <li><a href="wedding-directory/index" target=_blank>Wedding Services</a></li> -->


                                </ul>

                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!--Search Box-->
                            <!-- <div class="search-box-btn"><span class="flaticon-search"></span></div> -->

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
					
					<a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span
							class="btn-title">Login</span></a>
				
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

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1 class="d-none d-lg-block d-xl-block d-md-block">Returns And Cancellation</h1>
                <ul class="bread-crumb clearfix">
                    <li>Returns And Cancellation</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Pricing Section -->
        <!-- About Section -->
        <section class="about-section">

            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">Returns And Cancellation</span>
                                <div class="text">
                                    <!-- <h1>Return and Refund Policy</h1>
                                    <p>Last updated: April 08, 2024</p> -->
                                    <p class="text">Thank you for shopping at Mana Matrimony.</p>
                                    <p class="text">If, for any reason, You are not completely satisfied with a purchase
                                        We invite You to review our policy on refunds and returns. This Return and
                                        Refund Policy has been created with the help of the Return and Refund Policy
                                        Generator</a>.</p>
                                    <p class="text">The following terms are applicable for any products that You
                                        purchased with Us.</p>
                                    <h2>Interpretation and Definitions</h2>
                                    <h3>Interpretation</h3>
                                    <p class="text">The words of which the initial letter is capitalized have meanings
                                        defined under the following conditions. The following definitions shall have the
                                        same meaning regardless of whether they appear in singular or in plural.</p>
                                    <h3>Definitions</h3>
                                    <p class="text">For the purposes of this Return and Refund Policy:</p>
                                    <ul>
                                        <li>
                                            <p class="text"><strong>Company</strong> (referred to as either &quot;the
                                                Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this
                                                Agreement) refers to subhalekha.</p>
                                        </li>
                                        <li>
                                            <p class="text"><strong>Goods</strong> refer to the items offered for sale
                                                on the Service.</p>
                                        </li>
                                        <li>
                                            <p class="text"><strong>Orders</strong> mean a request by You to purchase
                                                Goods from Us.</p>
                                        </li>
                                        <li>
                                            <p class="text"><strong>Service</strong> refers to the Website.</p>
                                        </li>
                                        <li>
                                            <p class="text"><strong>Website</strong> refers to subhalekha, accessible
                                                from <a href="https://Mana Matrimony.in/"
                                                    rel="external nofollow noopener"
                                                    target="_blank">Mana Matrimony.in</a></p>
                                        </li>
                                        <li>
                                            <p class="text"><strong>You</strong> means the individual accessing or using
                                                the Service, or the company, or other legal entity on behalf of which
                                                such individual is accessing or using the Service, as applicable.</p>
                                        </li>
                                    </ul>
                                   
                                    <h3>Contact Us</h3>
                                    <p class="text">If you have any questions about our Returns and Refunds Policy,
                                        please contact us:</p>
                                    <ul>
                                        <li>
                                            <p>Mana Matrimony.in</p>
                                        </li>
                                        <li>
                                            <p>By visiting this page on our website: <a
                                                    href="https://Mana Matrimony.in/"
                                                    rel="external nofollow noopener"
                                                    target="_blank">Mana Matrimony.in</a></p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>



        <!-- Main Footer -->

        <!-- Main Footer -->
        <?php include 'footer.php'; ?>
        <!-- End Footer -->

        <!-- End Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Demo</h6>
        </div>
        <ul class="box-version option-box">
            <li>Full width</li>
            <li class="box">Boxed</li>
        </ul>
        <ul class="rtl-version option-box">
            <li>LTR Version</li>
            <li class="rtl">RTL Version</li>
        </ul>
        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>
        <a href="#" class="purchase-btn">Purchase now</a>
    </div><!-- End Color Switcher -->

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