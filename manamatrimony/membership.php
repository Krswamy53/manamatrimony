<?php
include 'db.php';
$sql = "SELECT planname, planduration, allowcontacts, planamount FROM membership_plans";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title> Membership </title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="matrimonysoftware" />
    <meta name="description" content="matrimonysoftware" />



    <style>
        .contacts {
            margin-left: 40px;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            height: 42px;
            background-color: white;
        }

        .pricing-section {
            position: relative;
            padding: 50px 0 30px;
            overflow: hidden;
        }

        /* Add a right margin to each icon */
        /*.fas {
  margin-left: -12px;
  margin-right: 8px;
}*/
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

            .contacts {
                margin-left: 40px;
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                height: 42px;
                background-color: white;
            }
            .active {
            color: #f14b59;
        }
            .pricing-section {
                position: relative;
                padding: 50px 0 30px;
                overflow: hidden;
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
                } catch (err) {
                }
            }
            setInterval("AccessClipboardData()", 300);


        </script>

        <link href="css/stylenew.css" rel="stylesheet">

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

                    <div class="nav-outer clearfix">
                        <div class="mobileapp_Icon1">
                            <a href="#" target="_blank"><img src="images/app-ic.png"></a>
                        </div>
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">

                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class=" dropdown"><a href="index.php">Home</a></li>

                                    <li class=" dropdown"><a href="about-us.php">About</a>

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

                                    <li class="current dropdown active"><a href="membership.php">Membership </a></li>
                                    <li class="dropdown"><a href="successstory.php">Success Stories </a></li>
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



                                </ul>

                            </div>
                        </nav>

                        <div class="outer-box">

                            <div class="btn-box">
                                <a href="loginform.php" class="theme-btn btn btn-style-one"><span
                                        class="btn-title">Login</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>

                    <ul class="navigation clearfix"></ul>
                    
                    <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span
                            class="btn-title">Login</span></a>

                </nav>
            </div>
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

        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1 class="d-none d-lg-block d-xl-block d-md-block">Membership Plan</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Membership Plan</li>
                </ul>
            </div>
        </section>


        <section class="pricing-section">
            <div class="anim-icons">
                <span class="icon icon-circle-green wow fadeIn"></span>
                <span class="icon icon-circle-blue wow fadeIn"></span>
                <span class="icon icon-circle-pink wow fadeIn"></span>
            </div>


            <div class="auto-container">

                <div class="outer-box">
                    <div class="row">


                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <div class="pricing-block col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                                    <form method="post" action="" name="my_plan">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                                <div class="icon-outer"><span class="icon flaticon-paper-plane"></span></div>
                                            </div>
                                            <div class="price-box">
                                                <div class="title">' . $row["planname"] . '</div>
                                                <h4 class="price">INR: ' . $row["planamount"] . ' <i class="fa fa-inr"></i><br>Days ' . $row["planduration"] . '</h4>
                                            </div>
                                            <ul class="features">
                                                <li class="true">Profile Display</li>
                                                <li class="true">Chating Option</li>
                                                <li class="true">Express Interest</li>
                                                <li class="true">Unlimited Profile Search</li>
                                                <li class="true">Verified Phone Numbers</li>
                                                <li class="true">Profile Up-gradation</li>
                                            </ul>
                                            <p class="contacts">
                                                <span class="price" style="font-size:15px;">Allowed Contacts/Address:' . $row["allowcontacts"] . '</span>
                                            </p>
                                            <div class="btn-box">
                                                <input name="choose" type="hidden" value="1">
                                                <button type="submit" class="theme-btn"><a class="theme-btn btn btn-style-one"><span class="btn-title">Pay Now</span></a></button>
                                            </div>
                                            <input name="txtplan" type="hidden" id="txtplan" value="' . $row["planname"] . '">
                                            <input name="txtplanname" type="hidden" id="txtplanname" value="' . $row["planname"] . '">
                                            <input name="txtoid" type="hidden" id="txtoid" value="MP">
                                            <input type="hidden" name="id" value="1">
                                            <input type="hidden" name="pm" value="op4" class="formtext" onClick="getPayForm(this.value)" checked>
                                        </div>
                                    </form>
                                </div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>


                    </div>
                </div>

            </div>
    </div>





    </section>

    <br>
    <?php

    include 'footer.php';
    ?>


    </div>

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

    <script src="js/color-settings.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
    <script src="js/map-script.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn').on('click', function () {
                var $this = $(this);
                var loadingText = '<i class="fa fa-spinner fa-spin fas "></i><span class="btn-title">Loading</span> ';
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

</body>


</html>