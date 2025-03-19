<?php
session_start();

$user_id = $_SESSION['user_id'] ?? null;
if ($user_id !== null) {
    $fname = $_SESSION['fname'] ?? '';
    $lname = $_SESSION['lname'] ?? '';

    // Use $fname and $lname as needed in your index.php page
}
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>index</title>
    <!-- Stylesheets -->
    
    <!-- <link href="css/stylec5d7.css?v=505020.0" rel="stylesheet">
    <link href="css/responsivec5d7.css?v=505020.0" rel="stylesheet">
    
    <link href="css/stylenew.css" rel="stylesheet"> -->
    <!-- <link href="css/mynewstyle.css" rel="stylesheet"> -->
    <!-- <link href="css/mystyle.css" rel="stylesheet"> -->
   
    <!-- <link href="css/color-switcher-design.css" rel="stylesheet"> -->
    <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="css/tooltip.css" rel="stylesheet"> -->
    



<!-- New -->
<link href="css/newcss.css" rel="stylesheet">








    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylec5d7.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
<link href="modal.html" rel="stylesheet">
    <!-- Include other CSS files as needed -->

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="path/to/owl.carousel.min.css">
    <link rel="stylesheet" href="path/to/owl.theme.default.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Include other meta tags as needed -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <!-- Owl Carousel JavaScript -->
    <script src="path/to/owl.carousel.min.js"></script>
    








    <style>
        /* Add your styles here */
        @media screen and (max-width: 768px) {
            .contact-form {
                padding-top: 20px;
            }
        }
    </style>

 
<!-- Global site tag (gtag.js) - Google Analytics  date29/04/2021 -->
<script async src= "https://www.googletagmanager.com/gtag/js?id=G-Z3ECHHRM4Y" >
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
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("toage").innerHTML = xmlhttp.responseText;
            }
        }
        //alert(str);
        xmlhttp.open("GET.php", "filltoage03d2.php?q=" + str, true);
        xmlhttp.send();
    }
    </script>
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Header span -->
        <!-- Main Header-->
        <!-- Main Header-->
        <header class="main-header">
    	<?php
        include "h.php";
        ?>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
    <!-- <div class="nav-logo">
        <a href="index.php">
            <img src="" alt="" title="">
        </a>
    </div> -->
    <div id="mobileUserBox">
        <?php
        // Start or resume the session
      

        // Check if the user is logged in
        if(isset($_SESSION['user_id'])) {
            $fname = $_SESSION['fname'];
            ?>
            <!-- If logged in, display user's first name and logout button -->
            <div class="user-info">
            <a href="login" class="theme-btn btn-style-one ml-4 mt-2"> <span>Hi <?php echo $fname; ?>!</span> </a>
                <a href="logout" class="theme-btn btn-style-one mt-2"><span class="btn-title">Logout</span></a>
            </div>
            <?php
        } else {
            ?>
            <!-- If not logged in, display login/signup buttons -->
            <a href="login" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>
            <a href="signup" class="theme-btn btn-style-one mt-2 ml-3"><span class="btn-title">SignUp</span></a>
            <?php
        }
        ?>
    </div>
    <ul class="navigation clearfix">
        <!-- Your navigation items go here -->
    </ul>
</nav>

        </div><!-- End Mobile Menu -->
    </header>
   
       
        </div>
        <!--End Main Header -->
        <!-- Banner Section -->
        <div class="mainBannerSection">
            <section class="banner-section d-none d-lg-block d-xl-block d-md-block">
                <div class="banner-carousel owl-carousel owl-theme ">
                    <!-- Slide Item -->
                    <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                        <div class="auto-container">
                            <div class="content-box mt-5">

                                <h2> Someone Special is <br>Waiting For You</h2>
                                <ul class="info-list">

                                <li><span class="icon fas fa-edit"></span><a href="your_profile" style="font-weight: 500px;color:white">My Profile</a></li>
                                    <li><span class="icon fas fa-user-plus"></span><a href="contactus" style="font-weight: 500px;color:white">Contact Us</a></li>
                                    <li><span class="icon fas fa-comments"></span><a href="successstory" style="font-weight: 500px;color:white"> Stories</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item" style="background-image: url(images/main-slider/2.jpg);">
                        <div class="auto-container">
                            <div class="content-box mt-5">

                                <h2> Find Your Prefect <br>Match Here!!!</h2>
                                <ul class="info-list">
                                <li><span class="icon fas fa-edit"></span><a href="your_profile" style="font-weight: 500px;color:white">My Profile</a></li>
                                    <li><span class="icon fas fa-user-plus"></span><a href="contactus" style="font-weight: 500px;color:white">Contact Us</a></li>
                                    <li><span class="icon fas fa-comments"></span><a href="successstory" style="font-weight: 500px;color:white"> Stories</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- mobile slider start here -->
            <section class="banner-section d-block d-lg-none d-xl-none d-md-none mobile_Hidden">
                <div class="banner-carousel owl-carousel owl-theme banner-carousel-two">
                    <!-- Slide Item -->
                    <div class="slide-item" style="background-image: url(images/main-slider/m-1.jpg);">
                        <div class="auto-container">
                            <div class="content-box mt-5">

                                <h2> Someone Special is <br>Waiting For You</h2>
                                <ul class="info-list">
                                <li><span class="icon fas fa-edit"></span><a href="your_profile.php" style="font-weight: 500px;color:white">My Profile</a></li>
                                    <li><span class="icon fas fa-user-plus"></span><a href="contactus.php" style="font-weight: 500px;color:white">Contact Us</a></li>
                                    <li><span class="icon fas fa-comments"></span><a href="successstory.php" style="font-weight: 500px;color:white"> Stories</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item" style="background-image: url(images/main-slider/m-2.jpg);">
                        <div class="auto-container">
                            <div class="content-box mt-5">

                                <h2> Find Your Prefect <br>Match Here!!!</h2>
                                <ul class="info-list">
                                <li><span class="icon fas fa-edit"></span><a href="your_profile" style="font-weight: 500px;color:white">My Profile</a></li>
                                    <li><span class="icon fas fa-user-plus"></span><a href="contactus" style="font-weight: 500px;color:white">Contact Us</a></li>
                                    <li><span class="icon fas fa-comments"></span><a href="successstory" style="font-weight: 500px;color:white"> Stories</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- mobile slider end here -->

        <!--End Banner Section -->
        <!--End Banner Section -->
        <!-- Coming Soon -->
        <section class="coming-soon-section">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="time-counter">
                        <div class="col-md-12">
                            <div class="row">
                                <form action="searchresult.php" class="form-inline" method="post">
                                    <div class="col-lg-2 col-md-2 col-sm-2 form-group">
                                        <label class="label" for="lookingfor"><span class="search">I'm looking for
                                                a</span></label>
                                        <select class="dropselect" name="gender" selected tabindex="1">
                                        <option value="Male">Male</option>
                <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 form-group">
    <label class="label" for="lookingfor"><span class="search">From Age</span></label>
    <select class="dropselect" id="fromage" onchange="updateToAgeOptions(this.value)" name="txtSAge" tabindex="2" required>
        <option value="" selected disabled>Select</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <!-- Add more options if needed -->
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
        <option value="65">65</option> <!-- Make sure the last age option is included -->
    </select>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 form-group">
    <label class="label" for="lookingfor"><span class="search">To Age</span></label>
    <select class="dropselect" id="toage" name="txtEAge" tabindex="3" required>
        <option value="" selected disabled>Select</option>
        <!-- Options will be dynamically added here based on the selection in "From Age" dropdown -->
    </select>
</div>

<script>
    function updateToAgeOptions(selectedFromAge) {
        var toAgeDropdown = document.getElementById("toage");
        toAgeDropdown.innerHTML = ""; // Clear existing options
        
        var startAge = parseInt(selectedFromAge);
        var endAge = 65; // Maximum age
        
        for (var i = startAge; i <= endAge; i++) {
            var option = document.createElement("option");
            option.text = i;
            option.value = i;
            toAgeDropdown.add(option);
        }
    }
</script>
                                    <!-- <div class="col-lg-2 col-md-2 col-sm-3 form-group">
    <label class="label" for="lookingfor"><span class="search">Religion</span></label>
    <select class="dropselect" name="religion" id="religion" onchange="fetchCaste()" tabindex="4" required>
        <option value="" selected disabled>Select Religion</option>
        <option value="Hindu">Hindu</option>
        <option value="Christianity">Christianity</option>
        <option value="Islam">Islam</option>
    </select>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 form-group" id="casteField">
    <label class="label" for="lookingfor"><span class="search">Caste</span></label>
    <select class="dropselect" name="caste" required id="caste" tabindex="4" required>
        <option value="" selected disabled>Select Caste</option>
    </select>
</div> -->

<!-- <script>
function fetchCaste() {
    var selectedReligion = document.getElementById('religion').value;
    var casteField = document.getElementById('casteField');
    var casteDropdown = document.getElementById('caste');

    // Clear previous options
    casteDropdown.innerHTML= '<label class="label" for="lookingfor"><span class="search">Caste</span></label>';

    casteDropdown.innerHTML = '<option value="" selected disabled>Caste</option>';

    if (selectedReligion && selectedReligion !== "Any") {
        // Show caste dropdown
        casteField.style.display = 'block';

        // Populate caste dropdown with options based on selected religion
        if (selectedReligion === 'Hindu') {
            casteDropdown.innerHTML += `
                <option value="Brahmin">Brahmin</option>
                <option value="Kshatriya">Kshatriya</option>
                <option value="Vaishya">Vaishya</option>
            `;
        } else if (selectedReligion === 'Christianity') {
            casteDropdown.innerHTML += `
                <option value="Catholic">Catholic</option>
                <option value="Protestant">Protestant</option>
                <option value="Orthodox">Orthodox</option>
            `;
        } else if (selectedReligion === 'Islam') {
            casteDropdown.innerHTML += `
                <option value="Sunni">Sunni</option>
                <option value="Shia">Shia</option>
                <option value="Sufi">Sufi</option>
            `;
        }
    } else {
        // Hide caste dropdown if no religion selected or "Any" selected
        casteField.style.display = 'none';
    }
}
</script> -->

                                    <div class="col-lg-2 col-md-2 col-sm-3 form-group">
    <label class="label" for="lookingfor"><span class="search">Religion</span></label>
    <select class="dropselect" name="religion" id="religion" onchange="fetchCaste()" tabindex="4" required>
        <option value="" selected disabled>Select Religion</option>
        <?php
        include('db.php');

        // Fetch religion values from the quick_search table
        $sql = "SELECT DISTINCT religion FROM user_table";
        $result = $conn->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $religion = $row["religion"];
                echo "<option value=\"$religion\">$religion</option>";
            }
        } else {
            echo "<option value=\"\">No religion found</option>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </select>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 form-group" id="casteField">
    <label class="label" for="lookingfor"><span class="search">Caste</span></label>
    <select class="dropselect" name="caste" id="caste" tabindex="4" required>
        <option value="" selected disabled>Select Caste</option>
    </select>
</div>

<script>
    function fetchCaste() {
        var selectedReligion = document.getElementById('religion').value;
        var casteDropdown = document.getElementById('caste');
        var casteField = document.getElementById('casteField');

        if (selectedReligion) {
            // Show caste dropdown
            casteField.style.display = 'block';

            // Clear previous options
            casteDropdown.innerHTML = '<option value="" selected disabled>Loading...</option>';

            // Make AJAX request to fetch caste options
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_caste_options.php?religion=' + selectedReligion, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Populate caste dropdown with fetched options
                    casteDropdown.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        } else {
            // Hide caste dropdown if no religion selected
            casteField.style.display = 'none';
        }
    }
</script>

                                        <span></span> 
                                    <div class="btn-box col-md-2 mt-3 ">
                                        <button type="submit" name="submit" value="Search Now"
                                            class="theme-btn btn btn-style-two btn-style-letsbegin">
                                            <span class="btn-title">Search Now </span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- End Coming Soon -->
<br/>
        <!-- About Section -->
        <section class="about-section">
            <div class="anim-icons full-width">
                <!-- <span class="icon icon-circle-blue wow fadeIn"></span> -->
                <span class="icon icon-dots wow fadeInleft"></span>
                <span class="icon icon-circle-1 wow zoomIn"></span>
            </div>
            <div class="auto-container">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">WELCOME TO</span>
                                <h2 class="animate-charcter">Shubhalekha Marriage Bureau</h2>
                                <div class="text" style="text-align:justify"> Best matrimony service provider in India. We find the perfect
                                    life partner for you. <br><span style="color:#Eb2869;font-weight:bold">Join us now</span> and find your life partner from our thousand’s of
                                    verified profiles.
                                </div>
                            </div>
                            <ul class="list-style-one">
                                <li>Multiple & easy way to contact</li>
                                <li>Automatic Matching System</li>
                                <li>Easy & flexible navigations</li>
                            </ul>
                            <div class="btn-box"><a href="about-us.php" class="theme-btn btn btn-style-three"><span
                                        class="btn-title">About Us</span></a></div>
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12 d-none d-sm-block">
                        <div class="image-box">
                            <figure class="image wow fadeIn">
                                <img class="d-none d-lg-block d-xl-block d-md-block"
                                    src="images/resource/about-img-1.jpg" alt="" style="max-width: 100%;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->
        <!-- Features Section Two -->
        <section class="features-section" style="margin-top:-100px">
            <div class="auto-container">
                
                <div class="row">
                    <!-- Title Block -->
                    <div class="title-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp" style="text-align:center">
                        <div class="inner-box">
                            <div class="sec-title">
                            <span class="title">Services</span>
                                <h2 >Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                            <h4><a href="happystory">Success Story</a></h4>
                            <div class="text" >Hundred’s of successful member found their soulmates with us.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-search"></span></div>
                            <h4><a href="advance_search">Search Options</a></h4>
                           <div class="text">Multiple search options to find a partner who truly understands you.
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box"><span class="icon flaticon-success"></span></div>
                            <h4><a href="occupation_search">Matching Profiles</a></h4>
                        <div class="text">With our auto match profile you can see members suits you best and get
                                married.
                            </div>
                        </div>
                    </div>
                    <!-- Feature Block -->
                    <!-- Feature Block 
//         <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
//           <div class="inner-box">
//             <div class="icon-box"><span class="icon flaticon-success"></span></div>
// //             <?php

// // if(isset($_SESSION['user'])) {
// //     // User is logged in, display the notification alerts with a link to the membership page
// //     echo '<h4><a href="">Notification Alerts</a></h4>';
// // } else {
// //     // User is not logged in, display the notification alerts with a link to the login page
// //     echo '<h4><a href="login.php">Notification Alerts</a></h4>';
// // }
// // ?>
//      <div class="text">The activities such as changing the display picture, birthday notification, photo requests.
//             </div>
//           </div>
//         </div>

                </div>
            </div>
        </section>
        <!--End Features Section -->

        <?php include 'profiles_display.php'; ?>
        
<br>


        <?php include 'sucess_story.php'; ?>
  

        <?php include 'f.php'; ?>

    </div>
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
    $(document).ready(function() {
        $('.btn').on('click', function() {
            var $this = $(this);
            var loadingText =
                '<i class="fa fa-spinner fa-spin fas"></i><span class="btn-title">Loading</span> ';
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
    <script type="text/javascript">
    document.addEventListener("keyup", function(e) {
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
    $(document).ready(function() {
        $('.btn').on('click', function() {
            var $this = $(this);
            var loadingText =
                '<i class="fa fa-spinner fa-spin fas"></i><span class="btn-title">Loading</span> ';
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
    <!--End of loginPage Script-->
    <style>
    @media only screen and (min-width: 768px){
	.main-menu .navigation > li > ul,
	.main-menu .navigation > li > .mega-menu,
	.main-menu .navigation > li > ul > li > ul{
		display:block !important;
		visibility:hidden;
		opacity:0;
	}
}

@media only screen and (max-width: 1023px){
	

	.coming-soon-section .outer-box{
		margin: 0 -15px;
		padding: 30px;
	}	
	
}
    </style>
</body>


</html>