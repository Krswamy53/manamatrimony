<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>Member Login</title>
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

  <script>
    /*
      function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response);                   // The current login status of the person.
        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
          testAPI();  
        } else {                                 // Not logged into your webpage or we are unable to tell.
          /*document.getElementById('status').innerHTML = 'Please log ' +
            'into this webpage.';
        }
      }
    
    
      function checkLoginState() {               // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {   // See the onlogin handler
          statusChangeCallback(response);
        });
      }
    
    
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '974400316633433',
          cookie     : true,                     // Enable cookies to allow the server to access the session.
          xfbml      : true,                     // Parse social plugins on this webpage.
          version    : 'v10.0'           // Use this Graph API version for this call.
        });
    
    
        FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
          statusChangeCallback(response);        // Returns the login status.
        });
    
      };
      
      function fblogin()
      {
        FB.login(function(response)
        {
          if(response.authResponse)
          {
          $id=response.id;
           data:'id='+response.id+'&email='+response.email+'&name='+response.name;
            window.top.location = 'abc.php?data=+data';
          }
        });
      }
      //FOR CHECK
      function fbafterlogin()
      {
        FB.getLoginStatus(function(response) 
        {   // Called after the JS SDK has been initialized.
          if (response.status === 'connected') 
          {
            FB.api('/me','GET',{"fields":"id,name,email,birthday,first_name,last_name"}, function(response) 
            {
              console.log(response);
              jQuery.ajax
              ({
                  url:'fblogin_submit.php',
                  type:'post',
                  data:'id='+response.id+'&email='+response.email+'&name='+response.name,
    
    
              });
            
            });
            statusChangeCallback(response);        // Returns the login status.
          }
        });
        
      }
      
      //MAIN
      function testAPI() {                   // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
    
        FB.api('/me','GET',
      {"fields":"id,name,email,birthday,first_name,last_name"}, function(response) 
      {
          console.log(response);
         
          jQuery.ajax
              ({
                  url:'fblogin_submit.php',
                  type:'post',
                  data:'id='+response.id+'&fname='+response.first_name+'&lname='+response.last_name+'&email='+response.email+'&name='+response.name,
                  
    
              });
    
      });
        
    
      }
      */

  </script>



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
  <!-- not allowed to enter any spaces-->
  <script type="text/javascript">
    function nospaces(t) {
      if (t.value.match(/\s/g)) {
        alert('Sorry, you are not allowed to enter any spaces');
        t.value = t.value.replace(/\s/g, '');
      }
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

  </script>
  <!-- end check password length-->
  <style>
    .butnsub {
      position: absolute;
      right: 0px;
      top: 0px;
      height: 60px;
      width: 60px;
      text-align: center;
      line-height: 30px;
      font-size: 18px;
      line-height: 60px;
      background-color: #ffffff;
      color: #222222;
      cursor: pointer;
    }

    .subscribe-form .sec-title {
      margin-bottom: 19px;
    }

    @media screen and (max-width: 768px) {
      .sec-title {
        margin-bottom: 18px;
      }

      .contact-form {
        padding-top: 0px;
      }

      .policy {
        padding-left: 30px;
      }
    }
  </style>
  <style>
    .buttonload {
      background-color: #04AA6D;
      / Green background /
      border: none;
      / Remove borders /
      color: white;
      / White text /
      padding: 12px 24px;
      / Some padding /
      font-size: 16px;
      / Set a font-size /
    }

    / Add a right margin to each icon /
    .fas {
      margin-left: -12px;
      margin-right: 8px;
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
          <a href="login.html" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>
          <a href="signup.html" class="theme-btn btn-style-one mt-2 ml-3"><span class="btn-title">SignUp</span></a>
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

    <!--End Page Title-->

    <!-- Signup Form -->


    <section class="newsletter-section">
      <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
      </div>
      <div class="auto-container">
        <!--Subscribe Form-->
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-4">
          </div>
          <div class="form-column col-lg-8 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="contact-form">
                <div class="sec-title text-center mt-4">
                  <!--<div class="icon-box"><span class="fa fa-envelope"></span></div>-->
                  <br>
                  <h2>Login</h2>
                  <div class="text">Existing Member? Login</div>
                </div>
                <form method="post" action="" class="form" id="contact-form">
                  <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" id="emailerror">
                      <input type="text" autofocus name="txtusername" placeholder="Email ID / Username / Mobile No."
                        tabindex="1" required value="">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <input type="password" name="txtpassword" placeholder="Enter Password" maxlength="35" id="pass"
                        tabindex="2" required value="">

                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 mb-2">
                     
                     


                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 mt-2">
                      <li class="switch-agileits float-left"></li>
                      <label class="labelcss" style="vertical-align: middle">
                        <input type="checkbox" style="vertical-align: middle" name="remember_me" value="1" tabindex="4">
                        <span class="slider-switch round "></span>
                        Keep me signed in
                      </label>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 mt-2 ">
                      <a href="forgot_password.html" class="ml-4" tabindex="5">Trouble login in?</a>
                    </div>




                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3 ">
                      <div class="btn-box">
                        <button class="theme-btn btn btn-style-one " tabindex="6" type="submit" name="submit"
                          style="width:100%"><span class="btn-title">Login</span></button>

                      </div>


                    </div>
                   

                  </div>
                </form>

              </div>
            </div>
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



  <script src="../code.jquery.com/jquery.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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