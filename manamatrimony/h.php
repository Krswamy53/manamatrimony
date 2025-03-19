<?php
$userLoggedIn = false;
if (isset($_SESSION['user_id'])) {
  $userLoggedIn = true;
}
?>

<div class="buy-script">
  <a href="" target="_blank">
    <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone" aria-hidden="true"></i></span> +91
      8019192373 </p>
  </a>
</div>
<div class="main-box">

  <div class="auto-container clearfix ">

    <div class="logo-box">

      <div class="logo"><a href="index"><img src="images/logo1.png" alt="" title=""></a>
      </div>

    </div>

    <!--Nav Box-->
    <div class="nav-outer clearfix">

      <!--Mobile Navigation Toggler-->
      <!-- <div class="mobileapp_Icon">
                    <a href="https://play.google.com/store/apps/details?id=com.infinity.matrimonysoftware"target="_blank"><img src="images/app-ic.png"></a>
                    </div> -->
      <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span>

      </div>
      <!-- Main Menu -->
      <nav class="main-menu navbar-expand-md navbar-light">
        <div class="navbar-header">
          <!-- Toggle Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon flaticon-menu-button"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
          <?php
          // Get the current page filename
          $current_page = basename($_SERVER['PHP_SELF']);
          ?>

          <ul class="navigation clearfix" class="nav" style="text-decoration:none">
            <li class=" <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index">Home</a></li>
            <li
              class="dropdown <?php echo ($current_page == 'about-us.php' || $current_page == 'terms-conditions.php' || $current_page == 'faqs.php' || $current_page == 'privacy-policy.php' || $current_page == 'returns-and-cancellation.php' || $current_page == 'disclaimer.php') ? 'active' : ''; ?>">
              <a>About</a>
              <ul>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="terms-conditions.php">Terms & Condation</a></li>
                <li><a href="faqs.php">FAQ's</a> </li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                <li><a href="disclaimer.php">Disclaimer</a></li>
                <li><a href="safematrimony.php">Safe Matrimony</a></li>

              </ul>
            </li>

            <li class=" <?php echo ($current_page == 'plans.php') ? 'active' : ''; ?>"><a href="palns">Membership
              </a></li>

            <!-- <li class="dropdown"><a href="success_story">Happy Story</a></li> -->
            <li
              class="dropdown <?php echo ($current_page == 'quicksearch2.php' || $current_page == 'advancesearch.php' || $current_page == '' || $current_page == 'location.php' || $current_page == 'occupation.php') ? 'active' : ''; ?>">
              <a>Search </a>
              <ul>
                <li><a href="quicksearch2.php">Quick Search</a></li>
                <li><a href="basicsearch2.php">Basic Search</a> </li>
                <li><a href="advancesearch.php">Advanced Search</a></li>

                <li><a href="location.php"> Location Search </a></li>
                <li><a href="occupation.php">Occupation Search</a></li>
              </ul>
            </li>

            <!-- Hide Blog and Contact Us links if user logged in -->
            <?php if (!$userLoggedIn): ?>
              <li class="<?php echo ($current_page == 'contactus.php') ? 'active' : ''; ?>"><a href="contactus">Contact
                  Us</a></li>
            <?php endif; ?>
            <li class="<?php echo ($current_page == '') ? 'active' : ''; ?>"><a href="contactus"></a></li>
          </ul>
        </div>
      </nav>


      <!-- Main Menu End-->

      <!-- Outer box -->
      <div class="outer-box">


        <?php
        // Start or resume the session
        

        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
          $fname = $_SESSION['fname'];
          $lname = $_SESSION['lname'];
          ?>
          <!-- <div class="btn-box" id="loginBtnBox">
            <a href="logout.php" class="theme-btn btn btn-style-one">Logout</a>
          </div> -->


          <?php
        } else {
          ?>
          <?php if (!$userLoggedIn && ($current_page != 'loginform.php' && $current_page != '')): ?>
            <div class="btn-box">
              <a href="loginform.php" class="theme-btn btn btn-style-one"><span class="btn-title"><span
                    class="c">Login</span></span></a>
            </div>

            <div class="btn-box" id="signupBtnBox">
            </div>
          <?php endif; ?>
          <?php
        }
        ?>




      </div>

    </div>
  </div>
</div>
<style>
  .theme-btn {
    margin-left: 10px;
    /* Add space between buttons */
  }

  .c {
    margin-left: -40px;
    ;
  }

  .navigation .active>a {
    background-color: transparent;
    /* White background color */
    border: 2px solid #ff69b4;
    /* Pink border */
    border-radius: 10%;
    /* Rounded corners */
    width: 110px;
    padding: 10px 10px;
    /* Adjust padding as needed */
    display: inline-block;
    /* Add any other styles you want to apply to the active link */

  }
</style>

<style>
  .navigation li a:hover {
    text-decoration: none !important;
    /* Remove underline on hover */
  }
</style>