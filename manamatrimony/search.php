<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <title>Refine Search</title>
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
    body {
      font-family: sans-serif;
    }

    .hidden {
      display: none;
    }

    .btn1 {
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .btn1.enabled {
      background-color: #ec167f;
      border: none;
    }

    .contact-form .form-group select {
      text-align: left !important;
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

<style>
    body {
      font-family: sans-serif;
    }

    .image-section img {
      width: 250px;
      height: 200px;
      border-radius: 10px;


    }

    .hidden {
      display: none;
    }

    .gender {
      border: 1px solid;
      background-color: whitesmoke;
      margin-top: 10px;
      margin-bottom: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.45) inset;
      padding: 20px;
    }

    .main {
      display: flex;
       margin: 20px; 
      gap: 30px;
      background-color: white;
      / background: linear-gradient(to right, #FFB6C1 0%, #ffb6c1 100%); /
      padding: 20px;
      padding-bottom: 40px;
    }

    .left {

      width: auto;
    }

    .p {
      font-size: 20px;
      color: black;
    }

    label {
      font-size: 17px;
      color: #37393C;
    }

    .btnr,
    .btn1 {
     
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      width: 240px;
    }

    .btnr {
      border: 2px solid ;
      color: #ffffff;
      background-color: #EB2869;
      cursor: pointer;
    }

    .btn1 {
      border: 2px solid gray;
      color: #ffffff;
      background-color: gray;
      cursor: pointer;
    }

    .result-container {
      max-width: 600px;
      margin: 0 auto;
    }

    .result-item {
      / border: 1px solid #ccc; /
      border-radius: 5px;
      margin-bottom: 10px;
      padding: 10px;
      box-sizing: border-box;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .result-item p {
      margin: 5px 0;
      width: 48%;
     
    }

    .result-item strong {
      font-weight: bold;
    }

    .result-item:last-child {
      margin-bottom: 0;
    }

    .grid-container {
      border: solid;
    }

    /* @media screen and (max-width: 1200px) {

      .main {
        flex-direction: column;
      }
      .image-section img {
      width: 180px;
      height: 200px;
      border-radius: 10px;


    }
    #grid-container{
     flex-direction:column;
    }
   

      .left,
      .right {
        width: auto;
        padding: 0px;
        margin: 0px;
      }

      .gender,
      .button-container {
        width: auto;
      }
      .view-buttons {
        margin-left: 10px;
      }


    } */
    
  

  </style>

  </head>

  <body>
  <style>
      / mycontent /
      .grid-containerr {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;

      }

      #prevPage,
      #nextPage {
        display: block;

        float: left;
      }

      #paginationContainer {
        display: flex;
      }

      #prevPage,
      #nextPage {
        / Add any other necessary styles here /
        / For example, you can add padding, margin, or background color /
        margin: 0 5px;
        / Add some space between buttons /
      }



      .rowh {
        margin-right: 29px;
      }

      .grid-main {
        display: flex;
        flex-direction: row;
        padding: 20px;
        justify-content: space-between;
        background-color: #f4eff6;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

      }

      .grid-itemm {
        border: none;
        width: 1040px;
        display: flex;
        flex-direction: column;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        justify-content: space-between;
        margin: 10px;

      }


     
      .button-container {
        display: flex;
        padding: 20px;
        flex-direction: row;
        justify-content: space-between;
        background-color: lightgray;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;

      }

      .button-container2 {
        display: flex;
        padding: 20px;
        flex-direction: row;
        justify-content: space-between;
        background-color: lightgray;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        width: 940px;
      }

      .message {
        padding: 10px 20px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 5px;
        background-color: green;
        color: #fff;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease;

      }

      .blocklist {
        padding: 10px 20px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 5px;
        background-color: ;
        color: #fff;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease;

      }

      .shortlist {
        padding: 10px 20px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 5px;
        background-color: orangered;
        color: #fff;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease;

      }

      .button-container>div:hover {
        background-color: yellow;
      }


      th {
        text-align: left;
        padding: 10px;
        color: green;
        font-family: sans-serif;
        font-weight: bold;
        letter-spacing: 1px;
      }

      td {
        text-align: left;
        padding: 10px;
        font-family: sans-serif;
        color: blue;
        font-weight: bold;
        letter-spacing: 1px;
      }

      a {
        text-decoration: none;
      }

      .result-item {
        width: 1040px;
        border: none;
      }

      .grid-view {
        border: solid;
      }

      .grid-item {
        border: solid;
        float: left;
        margin: 10px;
        border-radius: 10px;
        padding: 20px;
        background-color: #F9F3ED;

        font-weight: bold;
      }

      .view-buttons {
        margin-left: 640px;
      }


      .view-buttons button {
        padding: 15px 25px;
        background-color: #EB2869;
        color: white;
        font-weight: bold;
        border-radius: 10px;
        font-size: 15px;
        border: none;
        margin: 20px;
      }


      /* .view-buttons button:hover {
        background-color: green;
      } */

      .site-footer {
        background: #f5f5f5;
        padding: 20px 0;
        font-family: Arial, sans-serif;
      }

      .pagination-container {
        margin-top: 20px;
        / Adjust as needed /
        text-align: center;
      }

      .pagination-btn {
        padding: 5px 10px;
        margin: 0 5px;
        background-color:pink;
        border: 1px solid #ccc;
        border-radius: 3px;
        cursor: pointer;
      }

      .pagination-btn:hover {
        background-color: #e0e0e0;
      }

      #prevPage:disabled,
      #nextPage:disabled {
        opacity: 0.5;
        cursor: not-allowed;
      }


      .social-icons {
        font-size: 20px;
      }

      .footer-container {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .footer-column {
        width: 22%;
        margin-bottom: 20px;
      }

      .footer-column h3,
      .footer-column h4 {
        color: green;
        margin-bottom: 10px;
        font-size: 20px;
      }

      .footer-column ul {
        list-style: none;
        padding: 0;
      }

      .footer-column ul li a {
        color: #666;
        text-decoration: none;
      }

      .footer-column ul li a:hover {
        color: #222;
      }

      .active {
        color:;
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
        .active {
  background-color: white;
}
#grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three columns with equal width */
    gap: 20px; /* Gap between grid items */
}

.grid-item {
    /* Styles for each grid item */
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 8px;
}
@media screen and (max-width: 1200px) {
  #grid-container{
    flex-direction:column;
  }
  .view-buttons{
    margin-left:10px;
    display:flex;
  }
  .main {
        flex-direction: column;
      }
      .image-section img {
      width: 180px;
      height: 200px;
      border-radius: 10px;


    }
    #grid-container{
     flex-direction:column;
    }
   

      .left,
      .right {
        width: auto;
        padding: 0px;
        margin: 0px;
      }

      .gender,
      .button-container {
        width: auto;
      }
      .grid-item{
      flex-direction:column;
    }

    .grid-itemm {
      width: calc(100% - 20px);
      padding: 10px;
    }

    .grid-main {
      flex-direction: column;
    }

    .basic-info-section,
    .additional-details-section {
      width: auto;
    }

    th,
    td {
      width: 50%;
    }

    .input {
      margin-bottom: 10px;

    }
    .result-item{
      flex-direction:column;
    }
    .view-buttons button {
       padding:10px;
      }
      #grid-container {
    display: grid;
    grid-template-columns: repeat(1, 1fr); /* Three columns with equal width */
    gap: 20px; /* Gap between grid items */
}

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
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                  
                    <li class="current dropdown active"><a href="">Search</a>

                      <ul>

                        <li><a href="quicksearch2.php">Quick Search</a></li>
                        <li><a href="basicsearch2.php">Basic Search</a> </li>
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
                <!-- <div class="search-box-btn"><span class="flaticon-search"></span></div> -->

                <!-- Button Box -->
                <div class="btn-box">
                  <a href="loginform.php" class="theme-btn btn btn-style-one"><span class="btn-title">Login</span></a>
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
      <!--End Main Header -->

      <!--Page Title-->

      <section class="page-title" style="background-image:url(images/background/5.jpg);">

        <div class="auto-container">
        <br>
          <h1>REFINE SEARCH</h1>
          <!-- <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Search Profile</li>
                </ul> -->
        </div>
      </section>
      <!--End Page Title-->

      <!--Error Section-->










      <div class="searchpanel">

        <form class="form-horizontal" action="" method="POST" name="form1">
          <div class="main">
            <div class="left">

              <button class="btnr" id="refineSearchBtn">Refine Search<?php
             
              ?></button>

              <!-- Gender -->
              <div id="genderSection" class="gender">
                <div class="top">
                  <p>Gender</p>
                </div>

                <label>
                  <input type="radio" name="gender" value="male" required>
                  Male
                </label><br>
                <label>
                  <input type="radio" name="gender" value="female" required>
                  Female
                </label><br>
              </div>

              <!-- Religion -->
              <div id="religionSection" class="gender">
                <p>Religion</p>
                <label>
                  <input type="radio" name="religion" value="christian" required>
                  Christian
                </label><br>
                <label>
                  <input type="radio" name="religion" value="hindu" required>
                  Hindu
                </label><br>
                <label>
                  <input type="radio" name="religion" value="muslim" required>
                  Muslim
                </label><br>
                <label>
                  <input type="radio" name="religion" value="jain" required>
                  Jain
                </label><br>

              </div>

              <!-- Subcastes for Christian -->
              <div id="christianSubcasteSection" class="gender">
                <p>Subcastes (Christian)</p>
                <label>
                  <input type="radio" name="caste" value="catholic" required>
                  Catholic
                </label><br>
                <label>
                  <input type="radio" name="caste" value="protestant" required>
                  Protestant
                </label><br>
                <label>
                  <input type="radio" name="caste" value="assryains" required>
                  Assryains
                </label><br>
                <label>
                  <input type="radio" name="caste" value="ordhotax" required>
                  Ordhotax
                </label><br>
              </div>

              <!-- Subcastes for Hindu -->
              <div id="hinduSubcasteSection" class="hidden gender">
                <p>Subcastes (Hindu)</p>
                <label>
                  <input type="radio" name="caste" value="kashathriya" required>
                  Kshathriya
                </label><br>
                <label>
                  <input type="radio" name="caste" value="kapu" required>
                  Kapu
                </label><br>
                <label>
                  <input type="radio" name="caste" value="chowdary" required>
                  Chowdary
                </label><br>
                <label>
                  <input type="radio" name="caste" value="vysha" required>
                  Vysha
                </label><br>
                <label>
                  <input type="radio" name="caste" value="brahmin" required>
                  Brahmin
                </label><br>
                <label>
                  <input type="radio" name="caste" value="gowda" required>
                  Gowda
                </label><br>
                <label>
                  <input type="radio" name="caste" value="rajaka" required>
                  Rajaka
                </label><br>
                <label>
                  <input type="radio" name="caste" value="reddy" required>
                  Reddy
                </label><br>

              </div>

              <!-- Subcastes for Muslim -->
              <div id="muslimSubcasteSection" class="hidden gender">
                <p>Subcastes (Muslim)</p>
                <label>
                  <input type="radio" name="caste" value="shaik" required>
                  Shaik
                </label><br>
                <label>
                  <input type="radio" name="caste" value="pathan" required>
                  Pathan
                </label><br>
                <label>
                  <input type="radio" name="caste" value="mohammad" required>
                  Mohammad
                </label><br>
                <label>
                  <input type="radio" name="caste" value="dhudhekula" required>
                  Dhudekula
                </label><br>
              </div>

              <div id="jainSubcasteSection" class="hidden gender">
                <p>Subcastes (Jain)</p>

                <label>
                  <input type="radio" name="caste" value="swethabara" required>
                  Swethabara
                </label><br>
                <label>
                  <input type="radio" name="caste" value="dhigambara" required>
                  Dhigambara
                </label><br>

              </div>
              <button class="btn1" id="submitButton">Submit</button>
            </div>
        </form>
           
        <!-- rightside -->

        
        
        
        <div>
       <div class="view-buttons">
       <button id="gridButton" onclick="switchView('grid')" class="active">
    <i class="fas fa-th"></i> Grid View
</button>
<button id="listButton" onclick="switchView('list')">
    <i class="fas fa-list"></i> List View
</button>

</div>



            <div class='pagination-container'>
    <button id='prevPage' class='pagination-btn'>&laquo; Previous</button>
    <button id='nextPage' class='pagination-btn'>Next &raquo;</button>
</div>


            


           



<br><br><br>
       


          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['results'])) {

              foreach ($_POST['results'] as $result) {

                echo '<div class="result-item">' . $result . '</div>'; // Output each result item
          
              }

            }
            //   else {
            //     echo "No results found.";
            //   }
          } else {
            echo "No data submitted.";
          }
          ?>



          <?php
          // Turn off notices
          error_reporting(E_ALL & ~E_NOTICE);
          ini_set('display_errors', 0);
          ?>





<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $minAge = $_POST['minAge'];
    $maxAge = $_POST['maxAge'];
    $inputCountry = $_POST['country'];
    $inputState = $_POST['state'];
    $inputCity = $_POST['city'];
    $par_occupation = $_POST['occupation'];
    $highestEducation = $_POST['education'];
    $par_annualIncomes = $_POST['income'];
    $maritalStatus = $_POST['maritalStatus'];

    // Construct SQL query
    $sql = "SELECT * FROM user_profiles WHERE gender = '$gender' ";

    // Append conditions based on provided filters
    if (!empty($minAge) && !empty($maxAge)) {
        $sql .= "AND age_from BETWEEN $minAge AND $maxAge ";
    }
    if (!empty($religion)) {
        $sql .= "AND religion = '$religion' ";
    }
    if (!empty($caste)) {
        $sql .= "AND caste = '$caste' ";
    }
    if (!empty($inputCountry)) {
        $sql .= "AND inputCountry = '$inputCountry' ";
    }
    if (!empty($inputState)) {
        $sql .= "AND inputState = '$inputState' ";
    }
    if (!empty($inputCity)) {
        $sql .= "AND inputCity = '$inputCity' ";
    }
    if (!empty($par_occupation)) {
        $sql .= "AND par_occupation = '$par_occupation' ";
    }
    if (!empty($highestEducation)) {
        $sql .= "AND highestEducation = '$highestEducation' ";
    }
    if (!empty($par_annualIncomes)) {
        $sql .= "AND par_annualIncomes = '$par_annualIncomes' ";
    }
    if (!empty($maritalStatus)) {
        $sql .= "AND maritalStatus = '$maritalStatus' ";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
           

            // Echo grid container and list container
            echo "<div id='results-container'>";
            echo "<div id='grid-container'>";
            // Loop through and display grid items
            while ($row = mysqli_fetch_assoc($result)) {
                $imageURL = htmlspecialchars($row["photo1_url"]);
                echo "<div class='grid-item'>";
                echo '<div class="image-section">';
                echo '<img src="' . $imageURL . '" alt="User Image"/>';
                echo "</div>";
                echo '<div class="basic-info-section1">';
                echo '<table>';
                echo '<tr><th>Name</th><td>' . htmlspecialchars($row["firstName"]) . '</td></tr>';
                echo '<tr><th>Gender</th><td>' . htmlspecialchars($row["gender"]) . '</td></tr>';
                echo '<tr><th>Age</th><td>' . htmlspecialchars($row["age_from"]) . '</td></tr>';
                echo '</table>';
                echo '</div>';

                echo "</div>";
            }
            echo "</div>";

            mysqli_data_seek($result, 0);

            echo "<div id='list-container' style='display:none;'>";
            // Loop through and display list items
            while ($row = mysqli_fetch_assoc($result)) {
                $imageURL = htmlspecialchars($row["photo1_url"]);
                echo "<div class='list-item grid-itemm'>";
                echo "<div class='grid-main'>";
                echo '<div class="image-section">';
                echo '<img src="' . $imageURL . '" alt="User Image"/>';
                echo "</div>";
                echo '<div class="additional-details-section">';
                echo '<table>';
                echo "<tr><th>Name</th><td>" . htmlspecialchars($row["firstName"]) . "</td></tr>";
                echo "<tr><th>Gender</th><td>" . htmlspecialchars($row["gender"]) . "</td></tr>";
                echo "<tr><th>Religion</th><td>" . htmlspecialchars($row["religion"]) . "</td></tr>";
                echo "<tr><th>Caste</th><td>" . htmlspecialchars($row["caste"]) . "</td></tr>";
                echo "<tr><th>Age</th><td>" . htmlspecialchars($row["age_from"]) . "</td></tr>";
                echo "<tr><th>Education</th><td>" . htmlspecialchars($row["highestEducation"]) . "</td></tr>";
                echo '</table>';
                echo '</div>';
                echo '<div class="additional-details-section">';
                echo '<table>';
                echo "<tr><th>Height</th><td>" . htmlspecialchars($row["height"]) . "</td></tr>";
                echo "<tr><th>Country</th><td>" . htmlspecialchars($row["inputCountry"]) . "</td></tr>";
                echo "<tr><th>State</th><td>" . htmlspecialchars($row["inputState"]) . "</td></tr>";
                echo "<tr><th>City</th><td>" . htmlspecialchars($row["inputCity"]) . "</td></tr>";
                echo "<tr><th>Income</th><td>" . htmlspecialchars($row["par_annualIncomes"]) . "</td></tr>";
                echo "<tr><th>Occupation</th><td>" . htmlspecialchars($row["par_occupation"]) . "</td></tr>";
                echo '</table>';
                echo '</div>';
                echo '</div>';
                echo '<div class="button-container">';
                echo '<a href="loginform.php" class="message" onclick="openPopup(\'loginform.php\')"><i class="fas fa-envelope"></i> Send Message</a>';
                echo '<a href="loginform.php" class="shortlist" onclick="addToShortlist(' . htmlspecialchars($row["id"]) . ')"><i class="fas fa-star"></i> Add to Shortlist</a>';
                // echo '<a href="#" class="blocklist" onclick="addToBlocklist(' . htmlspecialchars($row["id"]) . ', \'' . htmlspecialchars($row["firstName"]) . '\')"><i class="fas fa-ban"></i> Add to Blocklist</a>';
                echo '</div>';
                echo "</div>";
            }
            echo "</div>";

            echo "</div>";

            echo "<script>";
            echo "document.querySelector('input[name=\"gender\"][value=\"$gender\"]').checked = true;";
            echo "document.querySelector('input[name=\"religion\"][value=\"$religion\"]').checked = true;";
            echo "document.querySelector('input[name=\"caste\"][value=\"$caste\"]').checked = true;";
            echo "</script>";
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize view and pagination
        let currentPage = 1;
        const currentView = 'grid'; // Set grid view as default

        // Function to switch between grid and list views
        function switchView(view) {
            // Remove 'active' class from all buttons
            document.getElementById('gridButton').classList.remove('active');
            document.getElementById('listButton').classList.remove('active');

            // Add 'active' class to the clicked button
            document.getElementById(view + 'Button').classList.add('active');

            // Set background color of active button to green
            document.getElementById('gridButton').style.backgroundColor = (view === 'grid') ? 'orangered' : '';
            document.getElementById('listButton').style.backgroundColor = (view === 'list') ? 'orangered' : '';

            // Perform actions based on view (e.g., switch content)
            if (view === 'grid') {
                // Switch to grid view
                document.getElementById('grid-container').style.display = 'grid';
                document.getElementById('list-container').style.display = 'none';
            } else if (view === 'list') {
                // Switch to list view
                document.getElementById('grid-container').style.display = 'none';
                document.getElementById('list-container').style.display = 'block';
            }

            // Update the current view
            currentPage = 1;
            updateView();
        }

        // Event listeners for view buttons
        document.getElementById('gridButton').addEventListener('click', () => switchView('grid'));
        document.getElementById('listButton').addEventListener('click', () => switchView('list'));

        // Function to update the view based on pagination
        function updateView() {
            const itemsPerPage = 3;  // Number of items per page for both views
            const gridItems = document.querySelectorAll('#grid-container .grid-item');
            const listItems = document.querySelectorAll('#list-container .list-item');
            const totalItems = (currentView === 'grid') ? gridItems.length : listItems.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            // Hide or show items based on pagination
            gridItems.forEach((item, index) => {
                item.style.display = (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) ? 'block' : 'none';
            });

            listItems.forEach((item, index) => {
                item.style.display = (index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage) ? 'block' : 'none';
            });

            // Always display pagination buttons
            document.getElementById('prevPage').style.display = 'inline-block';
            document.getElementById('nextPage').style.display = 'inline-block';
        }

        // Event listeners for pagination buttons
        document.getElementById('prevPage').addEventListener('click', () => {
            currentPage--;
            updateView();
        });
        document.getElementById('nextPage').addEventListener('click', () => {
            currentPage++;
            updateView();
        });

        // Initialize the view with grid as default
        switchView(currentView);
    });
</script>


          <?php

          session_start();

          // Database connection
          include 'db.php';

          // Handling form submission
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
            if ($_POST["action"] === "addToShortlist") {

              $userId = $_SESSION['id'];
              $recipientId = $_POST['recipient_id'];


              $insertQuery = "INSERT INTO shortlist (user_id, recipient_id) VALUES ('$userId', '$recipientId')";

              if (mysqli_query($conn, $insertQuery)) {

                echo "success";
              } else {

                echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
              }
              exit; // Prevent further execution
            }
          }
          ?>

<script>
    document.addEventListener('change', function () {
      const genderSelected = document.querySelector('input[name="gender"]:checked');
      const religionSelected = document.querySelector('input[name="religion"]:checked');
      const casteSelected = document.querySelector('input[name="caste"]:checked');

      if (genderSelected && religionSelected && casteSelected) {
        document.getElementById('submitButton').classList.add('enabled');
      }
    });

    document.querySelectorAll('input[name="religion"]').forEach(function (input) {
      input.addEventListener('change', function () {
        document.querySelectorAll('.gender').forEach(function (section) {
          section.classList.add('hidden');
        });
        document.getElementById('religionSection').classList.remove('hidden');
        document.getElementById('genderSection').classList.remove('hidden');

        if (input.value === 'christian') {
          document.getElementById('christianSubcasteSection').classList.remove('hidden');
        } else if (input.value === 'hindu') {
          document.getElementById('hinduSubcasteSection').classList.remove('hidden');
        } else if (input.value === 'muslim') {
          document.getElementById('muslimSubcasteSection').classList.remove('hidden');
        } else if (input.value === 'jain') {
          document.getElementById('jainSubcasteSection').classList.remove('hidden');
        }
      });
    });
  </script>
          <script>
            // Function to add user to shortlist via AJAX
            function addToShortlist(recipientId) {
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                  // Check if the response contains "success" message
                  if (this.responseText.trim() === "success") {
                    // Show success message in a popup
                    alert("Successfully added to your shortlist!");
                  } else {
                    // Show error message in a popup
                    alert("Successfully added adding to shortlist!");
                  }
                }
              };
              xhttp.open("POST", "", true);
              xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp.send("action=addToShortlist&recipient_id=" + recipientId);
            }
          </script>




          <script>
            function openPopup(pageUrl) {
              // Open the page in a new window
              window.open(pageUrl, '_blank', 'width=600,height=400,scrollbars=yes,resizable=yes');
            }
          </script>


          <script>
            // Function to show login popup
            function showLoginPopup() {
              var loginPopup = document.getElementById("loginPopup");
              loginPopup.style.display = "block";
            }

            // Function to close login popup
            function closeLoginPopup() {
              var loginPopup = document.getElementById("loginPopup");
              loginPopup.style.display = "none";
            }
          </script>

        </div>


        <script>

          document.querySelectorAll('input[name="religion"]').forEach(function (radio) {
            radio.checked = false;
          });
          document.querySelectorAll('input[name="caste"]').forEach(function (radio) {
            radio.checked = false;
          });
          // Show submit button by default
          document.getElementById("submitButton").style.display = "block";

          // Event listener for radio buttons under 'religion'
          document.getElementsByName("religion").forEach(function (radio) {
            radio.addEventListener("change", function () {
              if (this.value === "christian") {
                document.getElementById("christianSubcasteSection").classList.remove("hidden");
                document.getElementById("hinduSubcasteSection").classList.add("hidden");
                document.getElementById("muslimSubcasteSection").classList.add("hidden");
                document.getElementById("jainSubcasteSection").classList.add("hidden");
              } else if (this.value === "hindu") {
                document.getElementById("hinduSubcasteSection").classList.remove("hidden");
                document.getElementById("christianSubcasteSection").classList.add("hidden");
                document.getElementById("muslimSubcasteSection").classList.add("hidden");
                document.getElementById("jainSubcasteSection").classList.add("hidden");
              } else if (this.value === "muslim") {
                document.getElementById("muslimSubcasteSection").classList.remove("hidden");
                document.getElementById("christianSubcasteSection").classList.add("hidden");
                document.getElementById("hinduSubcasteSection").classList.add("hidden");
                document.getElementById("jainSubcasteSection").classList.add("hidden");
              } else if (this.value === "jain") {
                document.getElementById("jainSubcasteSection").classList.remove("hidden");
                document.getElementById("christianSubcasteSection").classList.add("hidden");
                document.getElementById("hinduSubcasteSection").classList.add("hidden");
                document.getElementById("muslimSubcasteSection").classList.add("hidden");
              } else {
                document.getElementById("christianSubcasteSection").classList.add("hidden");
                document.getElementById("hinduSubcasteSection").classList.add("hidden");
                document.getElementById("muslimSubcasteSection").classList.add("hidden");
                document.getElementById("jainSubcasteSection").classList.add("hidden");
              }
            });
          });

          // Show submit button when subcaste is selected
          document.querySelectorAll('input[type="radio"]').forEach(function (radio) {
            radio.addEventListener("change", function () {
              document.getElementById("submitButton").style.display = "block";
            });
          });
        </script>
       







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
        </section>





        <!-- End Footer -->
        <!-- End Footer -->

      </div>
        </div>
      <br><br>
      <?php include "footer.php"; ?>
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












  </body>

</html>