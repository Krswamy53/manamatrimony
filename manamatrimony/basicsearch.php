<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Basic Search</title>
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
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
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
    <style>
        .contact-form .form-group select {
            text-align: left !important;
        }

        .active {
            color: #f14b59;
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
   

        .contact-form .form-group select {
            text-align: left !important;
        }
    </style>


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
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class=" dropdown"><a href="index.php">Home</a></li>

                                    <li class="dropdown"><a href="about-us.php">About</a>

                                        <ul>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                            <li><a href="faqs.php">FAQ's</a> </li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                            <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                                            <li><a href="disclaimer.php">Disclaimer</a></li>
                                            <li><a href="safematrimony.php">Safe Matrimony</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="membership.php">Membership </a></li>
                                    <li class="dropdown"><a href="successstory.php">Success Stories </a></li>
                                    <!--<li class="dropdown"><a href="success_story">Happy Story</a></li>-->

                                    <li class="current dropdown active"><a href="">Search</a>

                                        <ul>

                                            <li><a href="quicksearch.php">Quick Search</a></li>
                                            <li><a href="basicsearch.php">Basic Search</a> </li>
                                            <li><a href="advancesearch.php">Advance Search</a></li>
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
                            <!-- <div class="search-box-btn"><span class="flaticon-search"></span></div> -->

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
        <!--End Main Header -->

        <!--Page Title-->

        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1>Search Profile</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
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





                        <form class="form-horizontal" action="search.php" method="POST" name="form1">
                            <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                    <select class="custom-select-box ages selcs" data-max-options="1"
                                        data-live-search="true" title="Select Gender" name="gender" id="gender" required
                                        tabindex="1">
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    </select>
                                </div>



                                <div class="col-lg-3 col-md-3 col-sm-3  form-group">
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
                                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
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

                                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                    <select class="custom-select-box ages selcs" data-max-options="1"
                                        data-live-search="true" title="Select Gender" name="height" id="height" required
                                        tabindex="1">
                                        <option value="height" selected>Height</option>
                                        <option value="4ft">4 feet</option>
                                        <option value="4.2ft">4.2 feet</option>
                                        <option value="4.4ft">4.4 feet</option>
                                        <option value="4.6ft">4.6 feet</option>
                                        <option value="4.8ft">4.8 feet</option>
                                        <option value="4.10ft">4.10 feet</option>
                                        <option value="5ft">5 feet</option>
                                        <option value="5.2ft">5.2 feet</option>
                                        <option value="5.4ft">5.4 feet</option>
                                        <option value="5.6ft">5.6 feet</option>
                                        <option value="5.8ft">5.8 feet</option>
                                        <option value="5.9ft">5.9 feet</option>
                                        <option value="5.10ft">5.10 feet</option>
                                        <option value="6ft">6 feet</option>
                                        <option value="6.2ft">6.2 feet</option>
                                        <option value="6.4ft">6.4 feet</option>
                                        <option value="6.6ft">6.6 feet</option>
                                        <option value="6.8ft">6.8 feet</option>
                                        <option value="6.10ft">6.10 feet</option>
                                        <option value="7.0ft">7 feet</option>
                                        <option value="7.1ft">7.1 feet</option>
                                        <option value="7.2ft">7.2 feet</option>
                                        <option value="7.3ft">7.3 feet</option>
                                    </select>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                    <select class="custom-select-box ages selcs" data-max-options="1"
                                        data-live-search="true" title="Select Gender" name="status" id="status" required
                                        tabindex="1">
                                        <option value="unmarried" selected>unmarried</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Any">Any</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
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

                                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
                                        <option value="Any">Caste</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                                    <select class="custom-select-box ages selcs" data-max-options="1"
                                        data-live-search="true" title="Select Gender" name="education" id="education" required
                                        tabindex="1">
                                        <option value="Any" selected>Any Education</option>
                                        <option value="12th">12th</option>
                                        <option value="Degree">Degree</option>
                                        <option value="B.Com (Commerce)">B.Com (Commerce)</option>
                                        <option value="B.Sc (Science)">B.Sc (Science)</option>
                                        <option value="B.Arch (Architecture)	">B.Arch (Architecture) </option>
                                        <option value="B.Ed (Education)	">B.Ed (Education) </option>
                                        <option value="B.El.Ed (Elementary Education)	">B.El.Ed (Elementary Education)
                                        </option>
                                        <option value="B.Lib.Sc (Library Sciences)	">B.Lib.Sc (Library Sciences)
                                        </option>
                                        <option value="B.P.Ed. (Physical Education)">B.P.Ed. (Physical Education)
                                        </option>
                                        <option value="B.Plan (Planning)	">B.Plan (Planning) </option>
                                        <option value="	Bachelor of Fashion Technology		"> Bachelor of Fashion
                                            Technology </option>
                                        <option value="	BBA/BBM/BBS	"> BBA/BBM/BBS </option>
                                        <option value="BCA (Computer Application)		">BCA (Computer Application)
                                        </option>
                                        <option value="BE B.Tech (Engineering)">BE B.Tech (Engineering)</option>
                                        <option value="BFA (Fine Arts)">BFA (Fine Arts)</option>
                                        <option value="BHM (Hotel Management)	">BHM (Hotel Management) </option>
                                        <option value="BL/LLB/BGL (Law)">BL/LLB/BGL (Law)</option>
                                        <option value="BSW (Social Work)">BSW (Social Work)</option>
                                        <option value="	B.Pharm (Pharmacy)		"> B.Pharm (Pharmacy) </option>
                                        <option value="	B.V.Sc. (Veterinary Science)"> B.V.Sc. (Veterinary Science)
                                        </option>
                                        <option value="BDS (Dental Surgery)	">BDS (Dental Surgery) </option>
                                        <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                        <option value="CA (Chartered Accountant)	">CA (Chartered Accountant) </option>
                                        <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial
                                            Analyst)</option>
                                        <option value="CS (Company Secretary)">CS (Company Secretary)</option>
                                        <option value="ICWA">ICWA</option>
                                        <option value="Integrated PG">Integrated PG</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Fashion/ Design	">Fashion/ Design </option>
                                        <option value="Languages	">Languages </option>
                                        <option value="Pilot Licenses	">Pilot Licenses </option>
                                        <option value="M.Arch. (Architecture)	">M.Arch. (Architecture) </option>
                                        <option value="M.Ed. (Education)">M.Ed. (Education)</option>
                                        <option value="M.Lib.Sc. (Library Sciences)">M.Lib.Sc. (Library Sciences)
                                        </option>
                                        <option value="M.Plan. (Planning)">M.Plan. (Planning)</option>
                                        <option value="Master of Fashion Technology">Master of Fashion Technology
                                        </option>
                                        <option value="Master of Health Administration	">Master of Health Administration
                                        </option>
                                        <option value="Master of Hospital Administration">Master of Hospital
                                            Administration</option>
                                        <option value="MBA/PGDM">MBA/PGDM</option>
                                        <option value="MCA PGDCA part time	">MCA PGDCA part time </option>
                                        <option value="MCA/PGDCA">MCA/PGDCA</option>
                                        <option value="ME/M.Tech/MS (Engg/Sciences)">ME/M.Tech/MS (Engg/Sciences)
                                        </option>
                                        <option value="MFA (Fine Arts)	">MFA (Fine Arts) </option>
                                        <option value="ML/LLM (Law)	">ML/LLM (Law) </option>
                                        <option value="MSW (Social Work)	">MSW (Social Work) </option>
                                        <option value="PG Diploma">PG Diploma</option>
                                        <option value="M.Com. (Commerce)">M.Com. (Commerce)</option>
                                        <option value="M.Sc. (Science)">M.Sc. (Science)</option>
                                        <option value="MA (Arts)">MA (Arts)</option>
                                        <option value="M.Pharm. (Pharmacy)	">M.Pharm. (Pharmacy) </option>
                                        <option value="M.V.Sc. (Veterinary Science)">M.V.Sc. (Veterinary Science)
                                        </option>
                                        <option value="MBBS">MBBS</option>
                                        <option value="MD/ MS (Medicine)">MD/ MS (Medicine)</option>
                                        <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental Surgery)
                                        </option>
                                        <option value="BPT (Physiotherapy">BPT (Physiotherapy</option>
                                        <option value="MPT (Physiotherapy)">MPT (Physiotherapy)</option>
                                        <option value="M.Phil. (Philosophy)">M.Phil. (Philosophy)</option>
                                        <option value="Ph.D. (Doctorate)	">Ph.D. (Doctorate) </option>
                                        <option value="Other Doctorate">Other Doctorate</option>
                                        <option value="Other Diploma">Other Diploma</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="10th">10th</option>
                                        <option value="Below 10th">Below 10th</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <select class="custom-select-box ages selcs" title="country" id="country"
                                        name="country" required tabindex="3" size="1">
                                        <option value="" selected>Country Living In</option>



                                        <option value="India">India</option>
                                        <option value="others">others</option>

                                    </select>

                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <select class="custom-select-box ages selcs" title="state" id="state" name="state"
                                        required tabindex="3" size="1">

                                        <option value="">Select a state...</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>

                                    </select>
                                </div>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <select class="custom-select-box ages selcs" name="city" id="city" required
                                        tabindex="3" size="1">
                                        <option value="" selected>City Live In</option>


                                        <option value="Agra">Agra</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Allahabad">Allahabad</option>
                                        <option value="Amritsar">Amritsar</option>
                                        <option value="Aurangabad">Aurangabad</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Bhopal">Bhopal</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chennai">Chennai</option>
                                        <option value="Coimbatore">Coimbatore</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Faridabad">Faridabad</option>
                                        <option value="Ghaziabad">Ghaziabad</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gurgaon">Gurgaon</option>
                                        <option value="Guwahati">Guwahati</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Indore">Indore</option>
                                        <option value="Jaipur">Jaipur</option>
                                        <option value="Jalandhar">Jalandhar</option>
                                        <option value="Jammu">Jammu</option>
                                        <option value="Jamnagar">Jamnagar</option>
                                        <option value="Jamshedpur">Jamshedpur</option>
                                        <option value="Jodhpur">Jodhpur</option>
                                        <option value="Kanpur">Kanpur</option>
                                        <option value="Kochi">Kochi</option>
                                        <option value="Kolkata">Kolkata</option>
                                        <option value="Lucknow">Lucknow</option>
                                        <option value="Ludhiana">Ludhiana</option>
                                        <option value="Madurai">Madurai</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Nagpur">Nagpur</option>
                                        <option value="Nashik">Nashik</option>
                                        <option value="Navi Mumbai">Navi Mumbai</option>
                                        <option value="Noida">Noida</option>
                                        <option value="Patna">Patna</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Raipur">Raipur</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Ranchi">Ranchi</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Vadodara">Vadodara</option>
                                        <option value="Varanasi">Varanasi</option>
                                        <option value="Visakhapatnam">Visakhapatnam</option>

                                    </select>
                                </div>

                            </div>

                            <div class="styled-input agile-styled-input-top form-group col-md-12">
                                <input type="hidden">
                                <span></span>
                                <button class="theme-btn btn-style-two" type="submit" name="Search" onClick=""><span
                                        class="btn-title"> Let's Begin</span></button>
                            </div>
        </div>


         


        <script>
                                function fillcaste(religion) {
                                    var casteSelect = document.getElementById("caste");
                                    casteSelect.innerHTML = ""; // Clear existing options

                                    var casteOptions = {}; // Define caste options based on religion

                                    // Populate caste options based on selected religion
                                    switch (religion) {
                                        case "Christian":
                                            casteOptions = {
                                               
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
                                               
                                                "Digambara": "Digambara",
                                                "Svetambara": "Svetambara",
                                                "Other": "Other"
                                            };
                                            break;
                                        case "Sikh":
                                            casteOptions = {
                                               
                                                "Ahluwalias": "Ahluwalias",
                                                "Kambos": "Kambos",
                                                "Ramgarhias": "Ramgarhias",
                                                "Rai Sikh": "Rai Sikh",
                                                "Other": "Other"
                                            };
                                            break;

                                        default:
                                            casteOptions = {
                                              
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
                           














                            <div class="modal fade" id="dialog_send_message" tabindex="-1" role="dialog"
                                aria-hidden="true">
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
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <!--Error Section-->
                            <br>


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
                                        <div class="feature-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp"
                                            align="center">
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

                                            <div class="feature-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp"
                                                align="center">
                                                <div class="inner-box" align="left">
                                                    <div class="icon-box"><span class="icon flaticon-lecture"></span>
                                                    </div>
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
                        <div class="scroll-to-top scroll-to-target" data-target="html"><span
                                class="fa fa-angle-double-up"></span></div>
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
                            $(document).ready(function () {
                                $('.btn').on('click', function () {
                                    var $this = $(this);
                                    var loadingText = '<i class="fa fa-spinner fa-spin faio"></i><span class="btn-title">Loading</span> ';
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
                        </div>
                       
                         <?php include "footer.php"; ?>
</body>

</html>