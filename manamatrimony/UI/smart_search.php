<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Regular Search</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style729a.css?v=515121.0" rel="stylesheet">
    <link href="css/smartsearch.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />





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
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("toage").innerHTML = xmlhttp.responseText;
            }
        }
        //alert(str);
        xmlhttp.open("GET.html", "filltoage03d2.html?q=" + str, true);
        xmlhttp.send();
    }
    </script>
    <style>
    .contact-form .form-group select {
        text-align: left !important;
    }

    .theme-btnn {
        background-color: #00f8ff;
         !important
    }



    .result-container {
        max-width: 600px;
        margin: 0 auto;



        text-align: center;

    }

    .result-item {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        padding: 10px;
        /* display:flex; */
        text-align: left;
        width: 200px;

    }

    p {
        color: skyblue;

    }

    .result-item p {
        margin: 5px 0;

    }

    .result-item.grid-view .result-religion,
    .result-item.grid-view .result-caste {
        display: none;
    }


    @media screen and (max-width: 768px) {
        .selcs {
            max-width: 83%;
            margin-left: 22px;
        }

        .page-title {

            display: none;
        }

        .errsec {
            margin-top: 30px;
        }

        .contact-form {
            padding-top: 35px;
        }



        .date-of-birth {
            position: absolute;
            top: 0;
            left: 0;
            padding-top: inherit;
            padding-right: inherit;
            padding-bottom: inherit;
            padding-left: inherit;
            height: 100%;
            width: 90%;
            text-align: left;
            background: #F8F9FA;
            border: solid gray 1px;
            border-radius: 5px;
            margin-left: 16px;
        }

    }

    @media screen and (max-width: 568px) {
        .selcs {
            max-width: 83%;
            margin-left: 22px;
        }

        .page-title {

            display: none;
        }

        .errsec {
            margin-top: 30px;
        }


    }

    .bootstrap-select>.dropdown-toggle {
        position: relative;
        width: 100%;
        z-index: 1;
        text-align: right;
        white-space: nowrap;
        height: 3rem;
        line-height: 34px;
        border-color: #a1a7a1;
    }

    .contact-form .form-group select {
        position: relative;
        width: 100%;
        max-width: 100%;
        z-index: 1;
        text-align: right;
        margin: 0;
        white-space: nowrap;
        height: 3rem;
        line-height: 34px;
        border-color: #a1a7a1;
    }

    dropdown bootstrap-select show-tick {
        width: 100%;
    }

    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
        width: 100% !important;
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

                                    <li class="current dropdown"><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="about-us.html">About</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="terms-conditions.html">Terms & Condation</a></li>
                                            <li><a href="faqs.html">FAQ's</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="returns-and-cancellation.html">Refund Policy</a></li>
                                            <li><a href="disclaimer.html">Disclaimer</a></li>
                                            <li><a href="safematrimony.html">Safe Matrimony</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="my_offer.html">Membership</a></li>
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
                                    <a href="contactus.html">Contact</a></li>

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
                            <!-- <div class="btn-box">
                                <a href="signup.html" class="theme-btn btn btn-style-one"><span
                                        class="btn-title">SignUp</span></a>
                            </div> -->
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
        <!--End Main Header -->

        <!--Page Title-->

        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1>Search Profile</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Search Profile</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!--Error Section-->
        <section class="error-section2 errsec">
            <div class="anim-icons full-width">
                <span class="icon icon-circle-blue wow fadeIn"></span>
                <span class="icon icon-line-1 wow zoomIn"></span>
                <span class="icon icon-circle-1 wow zoomIn"></span>
            </div>

            <div class="auto-container">
                <div class="contact-form">

                    <div class="text" style="margin-bottom: 6px;">Find Your Special Someone Here </div>
                    <div class=" w3ls-title1 mb-4">
                        <span class="price" style="font-size:20px;">
                            <font color="#1d95d2">Advance Search, Id Search, Save Search Will Enable After Login</font>
                        </span><br>
                    </div>
                    <div class="col-lg-12 mt-3">



                        <form class="form-horizontal" action="smart_search.php" method="POST">
                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                    <select class="selectpicker" data-max-options="1" data-live-search="true"
                                        title="Select Gender" name="gender" id="gender" required tabindex="1">
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    </select>
                                </div>




                                <div class="col-lg-4 col-md-4 col-sm-4  form-group">
                                    <select class="custom-select-box ages selcs" id="minAge" name="minAge"
                                        onChange="fillage(this.value)" required tabindex="2">
                                        <option value="" selected> From Age</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                    <select class="custom-select-box ages selcs" title="To Age" id="maxAge"
                                        name="maxAge" required tabindex="3" size="1">
                                        <option value="" selected> To Age</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                    <select class="cast" title="Select Religion" name="religion" id="religion"
                                        onChange="fillcaste(this.value)" tabindex="5">
                                        <option value="Christian">Christian</option>
                                        <option value="Hindu">Hindu</option>
                                        <!-- <option value="Inter-Religion">Inter-Religion</option> -->
                                        <option value="Jain">Jain</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Sikh">Sikh</option>
                                    </select>
                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                    <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
                                        <option value="Any">Caste</option>
                                    </select>
                                    </select>
                                </div>




                                <!-- <div class="col-lg-4 col-md-4 col-sm-12 form-group">
							  <input  class="date-of-birth" type="date" name="dob" id="dob">	
						  </div> -->


                                <!-- <div class="row">
	  <div class="col-lg-4 col-md-4 col-sm-12 form-group caste">
		  <select class="cast" title="Select Religion" name="religion" id="religion" onChange="fillcaste(this.value)" tabindex="5">
			  <option value="Christian">Christian</option>
			  <option value="Hindu">Hindu</option> -->
                                <!-- <option value="Inter-Religion">Inter-Religion</option> -->
                                <!-- <option value="Jain">Jain</option>
			  <option value="Muslim">Muslim</option>
			  <option value="Sikh">Sikh</option>
		  </select>
	  </div>
	  <div class="col-lg-4 col-md-4 col-sm-4 form-group caste">
		  <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
			  <option value="Any">Caste</option>
		  </select>
	  </div>
  </div></select>
							</div -->
                            </div>
                    </div>

                    <div class="styled-input agile-styled-input-top form-group col-md-12">
                        <input type="hidden">
                        <span></span>
                        <button class="theme-btn btn-style-two" type="submit" name="Search" onClick="getsearch1()"><span
                                class="btn-title"> Let's Begin</span></button>
                    </div>

                    </form>



                    <div>

                        <button class="theme-btn theme-btnn btn-style-two" type="button"
                            onclick="toggleView('grid')"><span class="btn-title">Grid View</span></button>
                        <button class="theme-btn theme-btnn btn-style-two" type="button"
                            onclick="toggleView('list')"><span class="btn-title">List View</span></button>
                    </div>

                    <?php
// Establishing connection to the database
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'shadhi';

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $gender = $_POST['gender'];
    $minAge = $_POST['minAge'];
    $maxAge = $_POST['maxAge'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];

    // Construct the SQL query
    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' AND age BETWEEN '$minAge' AND '$maxAge' AND religion = '$religion' AND caste = '$caste'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // Display all details 
            echo "<div class='result-container'>";
            echo "<div class='result-item'>";
			echo "<div>";
            echo "<p class='result-id'> Id : " . $row['id'] . "</p>";
            echo "<p class='result-name'> Name :" . $row['Name'] . "</p>";
            echo "<p class='result-gender'> Gender : " . $row['gender'] . "</p>";
            echo "<p class='result-age'> Age :" . $row['age'] . "</p>";
			echo "</div>";

			echo "<div class='right'>";
            echo "<p class='result-religion'> Religion : " . $row['religion'] . "</p>";
            echo "<p class='result-caste'> Caste : " . $row['caste'] . "</p>";
			echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
}

// Close connection
mysqli_close($conn);
?>




        </section>

        </section>









        <div class="modal fade" id="dialog_send_message" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="dialog_content">
                    <div class="modal-header">
                        <h4 class="modal-title">Error</h4>
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    </div>
                    <div class="modal-body" align="center">
                        Already You Have Done 5 Save & Search. <br>
                        Please Delete Old and then try again
                    </div>
                    <div class="modal-footer" style="padding:1.5rem">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <!--Error Section-->

        <!-- Main Footer -->
        <!-- Main Footer -->
        <footer class="main-footer style-two">
            <div class="auto-container">
                <!-- Footer Content -->
                <div class="footer-content" style="padding: 25px 0 10px;">
                    <div class="footer-logo ftr-dsk-lg"><a href="#"><img src="images/logo.png" alt="Site Logo"></a>
                    </div>
                    <ul class="footer-nav ftr-dsk-mn">
                        <li><a href="index.html">Home</a></li>
                        <li>|</li>
                        <li><a href="signup.html">SignUp</a></li>
                        <li>|</li>

                        <li><a href="success_story.html">Happy Story</a></li>
                        <li>|</li>
                        <li><a href="wedding-directory/index.html" target=_blank>Wedding Services</a></li>
                        <li>|</li>
                        <!-- <li><a href="franchise/login" target=_blank>Franchise</a></li>-->
                        <li><a href="" target=_blank>Blog</a></li>
                        <li>|</li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                    <div class="copyright-text"> &copy; Copyright 2024 All Rights Reserved. BY: <a href=""
                            target="_blank"></a></div>
                    <ul class="social-icon-one">

                        <li><a href=""><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href=""><span class="fab fa-twitter"></span></a></li>
                        <li><a href=""><span class="fab fa-youtube"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

        </footer>
        <!-- End Footer -->
        <!-- End Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->
    <!-- End Color Switcher -->
    <script>
    function getsearch1() {
        document.form1.action = "smart_search_result?page=1";
    }

    function getsearch2() {
        document.form1.action = "step_smart";
    }
    </script>
    <!--Search Popup-->

    <div id="search-popup1" class="search-popup1">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="">
                    <div class="form-group">
                        <div class="feature-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp" align="center">
                            <div class="inner-box" align="left">
                                <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                                <!--<div class="icon-box"><span class="icon flaticon-lecture"></span></div>-->
                                <h4><a href="about.html">Horoscope Details</a></h4>
                                <div class="text">Moonsign: </div>
                                <div class="text">Star: </div>
                                <div class="text">Horoscope Match: </div>
                                <div class="text">Manglik: </div>
                                <div class="text">Shani: </div>
                                <div class="text">Gotra: </div>
                                <div class="text">Place of Birth: </div>
                                <div class="text">Place of Country: </div>
                                <div class="text">Time of Birth:
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div id="search-popup2" class="search-popup2">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="">
                        <div class="form-group">

                            <div class="feature-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp" align="center">
                                <div class="inner-box" align="left">
                                    <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                                    <h4><a href="about.html">Education Details</a></h4>
                                    <div class="text">Education: CFA (Chartered Financial Analyst)</div>
                                    <div class="text">Occupation: Animators & Web Designers</div>
                                    <div class="text">Eduction Details: abcdwerwer</div>
                                    <div class="text">Occupation Details: abc</div>
                                    <div class="text">Employed In: Business</div>
                                    <div class="text">Annual Income: 50000 Rs</div>
                                    <div class="text">Working Hours: Normal [9-5]</div>
                                    <div class="text">Working Location/City: Kutch</div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>

        </div>

        <style>
        .search-popup .search-form {
            position: relative;
            padding: 0px 15px 0px;
            max-width: 1024px;
            margin: 0 auto;
            margin-top: 150px;
        }
        </style>
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script>
        $('select').selectpicker();
        </script>
        <link rel="stylesheet" href="css2/bootstrap-select.css" />
        <script src="css2/jquery.min.js"></script>
        <script src="css2/bootstrap.bundle.min.js"></script>
        <script src="css2/bootstrap-select.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
        <!-- Color Setting -->
        <script src="js/color-settings.js"></script>
        <script>
        $(document).ready(function() {
            $('.btn').on('click', function() {
                var $this = $(this);
                var loadingText =
                    '<i class="fa fa-spinner fa-spin faio"></i><span class="btn-title">Loading</span> ';
                if ($(this).html() !== loadingText) {
                    $this.data('original-text', $(this).html());
                    $this.html(loadingText);
                }
                setTimeout(function() {
                    $this.html($this.data('original-text'));
                }, 500);
            });
        })
        </script>






        <script>
        function fillcaste(religion) {
            var casteSelect = document.getElementById("caste");
            casteSelect.innerHTML = ""; // Clear existing options

            var casteOptions = {}; // Define caste options based on religion

            // Populate caste options based on selected religion
            switch (religion) {
                case "Christian":
                    casteOptions = {
                        "Any": "Any",
                        "Catholicism": "Catholicism",
                        "Protestantism": "Protestantism",
                        "Orthodox Christianity": "Orthodox Christianity",
                        "Assyrins": "Assyrins",
                        "Luthern": "Luthern",
                        "Other": "Other"
                    };
                    break;
                case "Hindu":
                    casteOptions = {
                        "Any": "Any",
                        "Kapu": "Kapu",
                        "Reddy": "Reddy",
                        "Chowdary": "Chowdary",
                        "Kshatriya": "Kshatriya",
                        "Vaishya": "Vaishya",
                        "Gowda": "Gowda",
                        "Rajaka": "Rajaka",
                        "Brahmin": "Brahmin",

                        "Yadhava": "Yadhava",
                        "Other": "Other"
                    };
                    break;
                case "Muslim":
                    casteOptions = {
                        "Any": "Any",
                        "Mohammads": "Mohammads",
                        "Shaiks": "Shaiks",
                        "Phatans": "Phatans",
                        "Khans": "Khans",
                        "Dhudekula": "Dhudekula",
                        "Other": "Other"
                    };
                    break;
                case "Jain":
                    casteOptions = {
                        "Any": "Any",
                        "Digambara": "Digambara",
                        "Svetambara": "Svetambara",
                        "Other": "Other"
                    };
                    break;
                case "Sikh":
                    casteOptions = {
                        "Any": "Any",
                        "Ahluwalias": "Ahluwalias",
                        "Kambos": "Kambos",
                        "Ramgarhias": "Ramgarhias",
                        "Rai Sikh": "Rai Sikh",
                        "Other": "Other"
                    };
                    break;

                default:
                    casteOptions = {
                        "Any": "Any"
                    };
                    break;
            }

            // Add caste options to the dropdown
            for (var caste in casteOptions) {
                var option = document.createElement("option");
                option.value = casteOptions[caste];
                option.text = caste;
                casteSelect.add(option);
            }
        }
        </script>



        <script>
        // Function to toggle between list and grid view
        function toggleView(view) {
            var resultItems = document.querySelectorAll('.result-item');
            if (view === 'list') {
                // Show all fields
                resultItems.forEach(function(item) {
                    item.classList.remove('grid-view');
                });
            } else if (view === 'grid') {
                // Show only name, gender, and age
                resultItems.forEach(function(item) {
                    item.classList.add('grid-view');
                });
            }
        }

        // Set grid view as default view
        document.addEventListener('DOMContentLoaded', function() {
            toggleView('grid');
        });
        </script>








</body>

</html>