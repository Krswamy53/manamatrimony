
<?php
// Database connection parameters
include 'db.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and execute SQL query to insert data
    $sql = "INSERT INTO submissions (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Form submitted successfully!'); window.location.href='contactus.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href='contactus.php';</script>";
    }

}

// Close the database connection
$conn->close();
?>

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
<title></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylec5d7.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/stylenew.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="keywords" content="CMS application, matrimony clone, matrimonial software, premium matrimony" />
<meta name="description" content="PHP matrimony website development" />


<script type="text/javascript">
 function nospaces(t)
{
if(t.value.match(/\s/g)){
alert('Sorry, you are not allowed to enter any spaces');
t.value=t.value.replace(/\s/g,'');
}}
</script>
 <script>
function ValidateAlpha(evt)
{
var keyCode = (evt.which) ? evt.which : evt.keyCode
if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

return false;
return true;
}
function blockSpecialChar(e){ 
var k;
document.all ? k = e.keyCode : k = e.which;
return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
 function check_exist1(str)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("mobileerror").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET.html","check_mobile_exist03d2.html?q="+str,true);
xmlhttp.send();
}

</script>
<script>
 document.addEventListener("keyup", function (e) {
	 alert("print screen disabled!");
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) 
				alert("print screen disabled!");
                stopPrntScr();
            }
        });
		
function stopPrntScr() {

            var inpFld = document.createElement("input");
			 alert("print screen disabled!");
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
<style>
.subscribe-form .form-inner {
    position: relative;
    max-width: 89%;
    width: 100%;
    margin: 0 auto;
}
.ta{
    height: 134px;
    width: 110%;
}
.map-section {
    position: relative;
    display: block;
    padding-bottom: 34px;
    margin-top: -150px;
}
/* Add a right margin to each icon */
.fas {
  margin-left: -12px;
  margin-right: 8px;
}

@media screen and (max-width: 768px) {
    .map-section {
        margin-top: -150px;
    }
    .contact-page-section
    {
    padding: 15px 0 20px;
    }
    .contact-page-section .contact-column {
    position: relative;
    margin-bottom: -5px;
    }
    }

@media screen and (max-width: 568px) {
    .map-section {
        margin-top: -150px;
    }
    .contact-page-section
    {
    padding: 15px 0 20px;
    }
    .contact-page-section .contact-column {
    position: relative;
    margin-bottom: -5px;
    }
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
.rowh{
margin-right:29px;
}

</style>
<script>

 document.addEventListener( function (e) {
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
    	<?php
        include "header.php";
        ?>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
           
                <div class="nav-logo"><a href="index"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div id="mobileUserBox">
            <!-- If not logged in, display login/signup buttons -->
            <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>
            <!-- <a href="signup" class="theme-btn btn-style-one mt-2 ml-3"><span class="btn-title">SignUp</span></a> -->
        </div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				
                   <!-- Display user's name or login/signup buttons -->
        
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var mobileUserBox = document.getElementById('mobileUserBox');

        // Assume you have a variable indicating whether the user is logged in
        var isLoggedIn = <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
        
        if (isLoggedIn) {
            // User is logged in, show the user's name
            var username = "<?php echo isset($_SESSION['user']) ? $_SESSION['user'] : ''; ?>";
            mobileUserBox.innerHTML = '<span class="theme-btn btn-style-one btn-title">Welcome, ' + username + '!</span>' +
                                      '<a href="logout" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Logout</span></a>';        } else {
            // User is not logged in, show login/signup buttons
            mobileUserBox.innerHTML = '<a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>' +
                                    //   '<a href="signup" class="theme-btn btn-style-one mt-2 ml-3"><span class="btn-title">SignUp</span></a>';
        }
    });
</script>
	<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" placeholder="Enter Matrimony ID" value="" 
						name="matriid"  required >
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
            <h1 class="d-none d-lg-block d-xl-block d-md-block">Contact Us</h1>
            <ul class="bread-crumb clearfix">
                                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
                                
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="newsletter-section contact-page-section">
        <div class="auto-container">
            <div class="row clearfix mt-3">
            
<div class="contact-column col-lg-3 col-md-12 col-sm-12 order-2 coninfo" >
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Feel Free To</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-phone-volume"></span> 
                                <p><strong>Call Us</strong>
                               </p>
                               <p>+91-8019192373.</p>		
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span> 
                                <p><strong>Mail Us</strong></p>
                                <p>matrimony@gmail.com.</p>
                            </li>

                            <li>
                                <span class="icon fa fa-clock"></span> 
                                <p><strong>Office Time</strong></p>
                                <p>Time:9 A.M. To 5 P.M.</p>
                            </li>
                        </ul>

                       <!-- <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>-->
                    </div>
                </div>                <!-- Form Column -->
                <div class="form-column col-lg-9 col-md-12 col-sm-12">
				
                <div class="envelope-image"></div>
				
                    <!-- <div class="form-inner">
					   <div class="contact-form ">
                            <div class="sec-title">
                                <h2>Address</h2>  
                              							<p class="mt-3"> ffffffffffffffffff</p>								
								</div> -->
							
								

                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Get In Touch With Us</h2>
                            </div>
                            <form method="post" action="" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" maxlength="40" name="name" placeholder="Name" onKeyPress="return ValidateAlpha(event); return blockSpecialChar(event);" tabindex="1" required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <input type="text" maxlength="10" name="phone" placeholder="Phone" tabindex="2" onBlur="check_exist1(this.value);" onkeypress="return isValidPhoneNumber(event)" required>
</div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email"  name="email" maxlength="35" placeholder="Email"  onkeyup="nospaces(this)" tabindex="3" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" maxlength="70" placeholder="Subject" tabindex="4" onKeyPress="return ValidateAlpha(event); return blockSpecialChar(event);" required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
									
                                        <textarea  name="message"   maxlength="250" placeholder="Message" onKeyPress="return ValidateAlpha(event); return blockSpecialChar(event);" tabindex="5"></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                          
                                    <button class="theme-btn btn btn-style-one" type="submit" name="submit" style="width:100%"><span class="btn-title" tabindex="11">Submit Now</span></button>
                      </div><canvas id="c"></canvas>
                                </div>
                            </form>
                        </div>
					  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
    <script>
    function isValidPhoneNumber(event) {
        // Get the pressed key
        var keyPressed = event.key;

        // Check if the pressed key is a number and the first digit is 6, 7, 8, or 9
        if (/[0-9]/.test(keyPressed) && /^[6-9]/.test(event.target.value + keyPressed)) {
            return true; // Allow input
        } else {
            return false; // Block input
        }
    }
</script>

    <!-- Map Section -->
    <!-- <section class="map-section">
        <div class="auto-container mb-4">
		 <p><iframe frameborder="0" height="450" src="" style="border:0;" tabindex="0" width="100%"></iframe></p>
   
			
		
        </div>
    </section> -->
    <!-- End Map Section -->

    <!-- Main Footer -->
   <?php
    include 'footer.php';
    ?>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->


<script>
	 function copyToClipboard() {

  var aux = document.createElement("input");
  aux.setAttribute("value", "print screen disabled!");      
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen disabled!");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
});
</script>

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
$(document).ready(function() {
  $('.btn').on('click', function() {
    var $this = $(this);
    var loadingText = '<i class="fa fa-spinner fa-spin fas "></i><span class="btn-title">Loading</span> ';
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
</body>


</html>