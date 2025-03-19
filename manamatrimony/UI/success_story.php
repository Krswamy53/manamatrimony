<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Happy Story</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="modal.html" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--<link href="css/pagination.css" rel="stylesheet">-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="matrimonysoftware" />
    <meta name="description" content="matrimonysoftware" />


    <style>
    .contacts {
        margin-left: 90%;
    }
    
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

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
                    <p class="text-white text-center"><span class="blinks"><i class="fas fa-rupee-sign"> </i> Script
                        </span> +91 </p>
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

                                    <li class="current dropdown"><a href="index.php">Home</a></li>

                                    <li class="dropdown"><a href="about-us.php">About</a>

                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="terms-conditions.php">Terms & Condation</a></li>
                                            <li><a href="faqs.php">FAQ's</a></li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                            <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                                            <li><a href="disclaimer.php">Disclaimer</a></li>
                                            <li><a href="safematrimony.php">Safe Matrimony</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="my_offer.php">Membership </a></li>
                                    <!--<li class="dropdown"><a href="success_story">Happy Story</a></li>-->
                                    <li class="dropdown"><a href="search.php">Search</a>

                                        <ul>

                                            <li><a href="quicksearch2.php">Quick Search</a></li>
                                            <li><a href="basicsearch2.php">Basic Search</a> </li>
                                            <li><a href="advancesearch.php">Advanced Search</a></li>
                                            <li><a href="">Key Word Search</a></li>
                                            <li><a href="location.php"> Location Search </a></li>
                                            <li><a href="occupation.php">Occupation Search</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contactus.php">Contact </a></li>

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
                                <a href="loginform.php" class="theme-btn btn btn-style-one"><span
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

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <li class="dropdown" style="margin-left:22px;margin-top:8px;font-size:16px;font-weight:600"><a
                            href="success_story.html" style="color:#343a40">Happy Story</a></li>
                    <hr>
                    <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span
                            class="btn-title">Login</span></a>
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

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1 class="d-none d-lg-block d-xl-block d-md-block">Happy Story</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Happy Story</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Pricing Section -->



        <section class="">


            <div class="auto-container">
                <div class="sec-title text-center">


                </div>
                <div class="row">



                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocess9aa3.jpg?image=success/2021_04_29_10_16_40happy4.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            20 March 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Raveena & Sushant</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="65"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocess3c8b.jpg?image=success/2021_04_29_10_17_29happy5.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            01 January 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Kanyakumari & Rajkishor</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="66"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocessf035.jpg?image=success/2021_04_29_10_11_11happy3.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            14 February 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Simran & Aamir</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="64"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocess89ac.jpg?image=success/2021_04_29_10_02_39happy1.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            26 May 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Pooja & Rahul</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="62"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocess8617.jpg?image=success/2021_04_29_10_06_19happy2.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            01 July 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Monika & Vijay</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="63"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="#">
                                        <img src="photoprocess6b67.jpg?image=success/2021_04_29_10_18_24happy6.jpg&amp;square=500"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>
                                        <a href="#" class="">
                                            17 February 2021 </a>
                                    </li>
                                    <a href="#" class="text-dark">

                                    </a>



                                </ul>
                                <h4><a href="#">Radhika & Akshay</a></h4>
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-style-three" data-toggle="modal"
                                        data-target="#myModal2" data-id="67"> <span class="btn-title">Read
                                            More</span></button>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>

            </div>
        </section>



    </div>

    <!-- Main Footer -->
    <!-- Main Footer -->
   <?php include "footer.php"; ?>
    <!-- End Footer -->
    <!-- End Footer -->

    </div>
    <!--End News Section -->

    <!--End Pricing Section -->

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

    <div class="modal fade" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
            <script>
            $(document).ready(function() {
                $('#myModal2').on('show.bs.modal', function(e) {
                    var rowid = $(e.relatedTarget).data('id');
                    $.ajax({
                        type: 'post',
                        url: 'modalup_readmore.php', //Here you will fetch records 
                        data: 'rowid=' + rowid, //Pass $id
                        success: function(data) {
                            $('.modal-content').html(
                            data); //Show fetched data from database
                        }
                    });
                });
            });
            </script>
</body>

</html>