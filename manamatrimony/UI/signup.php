<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>Signup</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/regcss1.css" rel="stylesheet">

  <!--Color Switcher Mockup-->
  <link href="css/color-switcher-design.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <script src="../code.jquery.com/jquery-2.1.0.min.js"></script>
  <script
    src="_so/js3ce3.html?//stackoverflow.com/questions/23729750/dont-allow-invalid-characters-to-be-pasted-on-textbox"
    id="so"></script>


  <script type="text/javascript">
    function checkdiv(str) {

      if (str == 'Unmarried') {
        $('#noofchild').hide();
        $('#childstatus').hide();

      }
      else {
        $('#noofchild').show();
        $('#childstatus').show();

      }
    }

  </script>
  <style>
    /* Add a right margin to each icon */
    .fas {
      margin-left: -12px;
      margin-right: 8px;
    }

    .sec-title .text {
      margin-top: 6px;
    }

    @media screen and (max-width: 768px) {
      .inner-column {
        margin-top: -42px;
      }
    }
  </style>


  <!-- not allowed to enter any spaces-->
  <script type="text/javascript">
    function nospaces(t) {
      if (t.value.match(/\s/g)) {
        alert('Sorry, you are not allowed to enter any spaces');
        t.value = t.value.replace(/\s/g, '');
      }
    }

  </script>
  <script>
    function fillday(str) {
      var xmlhttp;
      if (str == "") {
        document.getElementById("day").innerHTML = "";
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
          document.getElementById("day").innerHTML = xmlhttp.responseText;
        }
      }
      //alert(str);
      xmlhttp.open("GET.html", "fillday03d2.html?q=" + str, true);
      xmlhttp.send();
    }
  </script>
  <!-- end allowed to enter any spaces-->
  <!-- check password length-->
  <script type="text/javascript">
    function CheckLengthPassword(el) {
      document.getElementById("passeror").style.display = 'none';
      if (el.value.length != 0) {
        if (el.value.length < 5) {
          document.getElementById("passeror").style.display = 'block';
          document.getElementById("passeror").style.color = "#ff0000";
          document.getElementById('pass').value = "";
          document.getElementById('pass').focus();
          return false;
        }
      }
    }
    function ValidateAlpha(evt) {
      var keyCode = (evt.which) ? evt.which : evt.keyCode
      if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

        return false;
      return true;
    }
    function blockSpecialChar(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
    function check_exist123(str) {
      var xmlhttp;
      if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      }
      else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("emailerror").innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET.html", "check_email_exist03d2.html?q=" + str, true);
      xmlhttp.send();
    }
    function getage() {
      //alert("hello");
      var year = document.getElementById("year").value;
      // alert(year);
      var month = document.getElementById("month").value;
      //alert(month);
      var day = document.getElementById("day").value;
      // alert(day);
      if ((month == "02" && day == "30") || (month == "02" && day == "31") || (month == "04" && day == "31") || (month == "06" && day == "31") || (month == "11" && day == "31") || (month == "09" && day == "31")) {
        // alert("heeeeeeee");
        //alert("step2");
        document.getElementById("doberror").style.display = 'block';
        //alert("hello");
        var year = document.getElementById("year").value = '';
        var month = document.getElementById("month").value = '';
        var day = document.getElementById("day").value = '';
        var day = document.getElementById("day").focus();
        return false
      }
      if (year != "" && month != "" && day != "") {
        document.getElementById("doberror").style.display = 'none';
        document.getElementById("doberror1").style.display = 'none';
        document.getElementById("doberror2").style.display = 'none';
        var today = new Date();
        var birthDate = new Date();

        birthDate.setYear(year);
        birthDate.setMonth(month);
        birthDate.setDate(day);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        var d = today.getDate() - birthDate.getDate();
        if (m < 0) {
          age--;
          //alert(m);
          m = 12 + m;
        }
        if (d < 0) {
          d = 30 + d;
        }
        var page = "";
        var pmonth = "";
        var pday = "";
        if (age > 1) {
          page = age + " Years ";
        }
        else {
          page = age + " Year ";
        }
        if (m > 1) {
          pmonth = m + " Mounths ";
        }
        else {
          pmonth = m + " Mounth ";
        }
        if (d > 1) {
          pday = d + " Days ";
        }
        else {
          pday = d + " Day ";
        }
        document.getElementById('age').value = page + pmonth + pday;

        document.getElementById('age1').value = age;
        //alert(age);

        if (document.getElementById('age1').value < 21 && matri.gender[0].checked) {
          alert("Your age must be over 21 to register");
          //document.getElementById("doberror1").style.display = 'block';
          var year = document.getElementById("year").value = '';
          var month = document.getElementById("month").value = '';
          var day = document.getElementById("day").value = '';
          return false
        }
        else if (document.getElementById('age1').value < 18 && matri.gender[1].checked) {
          alert("Your age must be over 18 to register");

          //document.getElementById("doberror2").style.display = 'block';
          var year = document.getElementById("year").value = '';
          var month = document.getElementById("month").value = '';
          var day = document.getElementById("day").value = '';
          return false
        }
        // other validation
        return true;
      }
    }
  </script>
  <script>
    function preventBack() {
      window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function () {
      null
    };
  </script>
  </script>


  <!-- end check password length-->

</head>

<body>


  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Header Menu -->
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
          <p class="text-white text-center"><span class="blinks"><i class="fas fa-rupee-sign"> </i> Script </span> +91
          </p>
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
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
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
                  <li><a href="smart_search.php">Search </a></li>
                  <li><a href="contactus.php">Contact </a></li>
                  <li><a href="" target="_blank">Blog</a></li>
                  <!-- <li><a href="wedding-directory/index" target=_blank>Wedding Services</a></li> -->


                </ul>

              </div>
            </nav>
            <!-- Main Menu End-->

            <!-- Outer box -->
            <div class="outer-box">
              <!--Search Box-->
              <div class="search-box-btn"><span class="flaticon-search"></span></div>

              <!-- Button Box -->
              <div class="btn-box">
                <a href="login.html" class="theme-btn btn btn-style-one"><span class="btn-title">Login</span></a>
              </div>
              <div class="btn-box">
                <a href="signup.html" class="theme-btn btn btn-style-one"><span class="btn-title">SignUp</span></a>
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
          <!-- <a href="signup.html" class="theme-btn btn-style-one mt-2 ml-3"><span class="btn-title">SignUp</span></a> -->
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
                <input type="search" class="form-control" placeholder="Enter Matrimony ID" value="" name="matriid"
                  required>
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
    <!-- End Header Menu -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
      <div class="auto-container">
        <h1 class="d-none d-lg-block d-xl-block d-md-block">Signup</h1>
        <ul class="bread-crumb clearfix">
          <li><a href="index.html">Home</a></li>
          <li>Signup</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->

    <!-- Signup Form -->
    <section class="newsletter-section">
      <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
      </div>
      <div class="auto-container">

        <div class="upper-box">
          <div class="sec-title text-center">

            <div class="text">
              <h2 class="title">Matches Within Your community,</h2>Verified Profile | Safe and Secured | Entire Profile
              Description.
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col-lg-12 alert alert-info " id="doberror" style="display:none">Select valid Birth Date</div>
          <div class="col-lg-12 alert alert-info" id="doberror1" style="display:none"></div>
          <div class="col-lg-12 alert alert-info " id="doberror2" style="display:none"></div>
          <div class="col-lg-2 col-md-4 col-sm-4">
          </div>
          <div class="form-column col-lg-8 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="contact-form ">

                <form method="post" action="#" id="contact-form" onsubmit="return getage()" name="matri">

                  <div class="row clearfix">


                    <div class="col-md-2">
                      <input type="radio" style="vertical-align: text-bottom" id="man" name="gender" value="Male"
                        tabindex="1" checked> <label class="labelcss" value="" for="man"> I'm Man</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" style="vertical-align: text-bottom" id="woman" name="gender" value="Female"
                        tabindex="2"><label class="labelcss" value="" for="woman"> I'm Woman</label>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mt-3" id="emailerror">
                      <input type="email" autofocus name="email" value="" placeholder="Your E-mail"
                        onBlur="check_exist123(this.value);" value="" required tabindex="3" maxlength="45"
                        onkeyup="nospaces(this)">
                      <div class="mt-2 ">
                        <font color="#FF0000"></font>
                      </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <input type="password" name="pass" placeholder="Set New Password" maxlength="35"
                        onblur="CheckLengthPassword(this)" id="pass" tabindex="4" value="" required>

                      <font color="#FF0000"></font>
                      <div class="mt-2 " id="passeror" style="display:none">Password is too weak</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                      <input type="text" name="fname" placeholder="Candidate Name" tabindex="5"
                        onKeyPress="return ValidateAlpha(event); return blockSpecialChar(event);" maxlength="35"
                        onkeyup="nospaces(this)" value="" required>
                      <div class="">
                        <font color="#FF0000"></font>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group ">
                      <input type="text" name="lname" placeholder="Surname" tabindex="6"
                        onKeyPress="return ValidateAlpha(event); return blockSpecialChar(event);" maxlength="35"
                        onkeyup="nospaces(this)" value="" required>
                      <div class="">
                        <font color="#FF0000"></font>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 form-group ">
                      <select class="custom-select-box" name="dobMonth" tabindex="7" required id="month">
                        <option value="">Birth Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 form-group ">
                      <select name="dob" class="custom-select-box" tabindex="8" required id="day">
                        <option value="">Birth Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
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
                      </select>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 form-group ">
                      <select name="dobYear" class="custom-select-box" tabindex="9" required id="year">
                        <option value="">Birth Year</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                      </select>
                      <input type="hidden" name="age" id="age" size="25" readonly>
                      <input type="hidden" size="4" id="age1" name="age1">
                      <div class="">
                        <font color="#FF0000"></font>
                      </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="btn-box">
                        <div class="text"><input type="checkbox" checked tabindex="10"
                            style="vertical-align: text-bottom"> I have read and agree to the <a
                            href="terms-conditions.html" target=_blank><u>terms, conditions</u></a> and <a
                            href="privacy-policy.html" target=_blank><u> privacy policy.</u> </a></div>
                      </div>
                      <a><button class="theme-btn btn btn-style-one mt-4 mb-4" type="submit" name="submit"
                          style="width:100%"> <span tabindex="11" class="btn-title">Submit Now </span></button></a>
                    </div>


                  </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
  </div>
  </div>
  </section>
  <!--End Signup Form -->




  <!-- Main Footer -->
  <!-- Main Footer -->
  <footer class="main-footer style-two">
    <div class="auto-container">
      <!-- Footer Content -->
      <div class="footer-content" style="padding: 25px 0 10px;">
        <div class="footer-logo ftr-dsk-lg"><a href="#"><img src="images/logo.png" alt="Site Logo"></a></div>
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
        <div class="copyright-text"> &copy; Copyright 2024 All Rights Reserved. BY: <a href="" target="_blank"></a>
        </div>
        <ul class="social-icon-one">

          <li><a href=""><span class="fab fa-facebook-f"></span></a></li>
          <li><a href="https://twitter.com/readymatrimonia"><span class="fab fa-twitter"></span></a></li>
          <li><a href="https://www.youtube.com/channel/UCuhVI8vk-Q4LmmtDB6OSlhQ"><span
                class="fab fa-youtube"></span></a></li>
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

  <!--Search Popup-->

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
  <script src="css2/jquery.min.js"></script>
  <script src="css2/bootstrap.bundle.min.js"></script>
  <script src="css2/bootstrap-select.min.js"></script>

  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>

  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/script.js"></script>

  <!--<script>
$('select').selectpicker();
</script>-->

  <!-- Color Setting -->
  <script src="js/color-settings.js"></script>
  <!--Google Map APi Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
  <script src="js/map-script.js"></script>
  <!--End Google Map APi-->
  <div id="status">
  </div>
  <!-- Load the JS SDK asynchronously -->
  <script async defer crossorigin="anonymous" src="../connect.facebook.net/en_US/sdk.js"></script>
  <script>
    $(document).ready(function () {
      $('.btn').on('click', function () {
        var $this = $(this);
        var loadingText = '<i class="fa fa-spinner fa-spin fas"></i><span class="btn-title">Loading</span> ';
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