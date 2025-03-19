<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Get logged-in user ID
$id = $_SESSION['id'];

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
<div>

        <?php include 'nav.php'; ?>
        <br><br><br><br>
    </div>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header span -->

        <!-- Header Span -->
       

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

       
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            
        </div>
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
                // Database connection
                include 'db.php'; // Ensure this file contains database credentials

                $query = "SELECT planname, planduration, allowcontacts, planamount FROM membership_plans";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="pricing-block col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                        <form method="post" action="" name="my_plan">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon-outer"><span class="icon flaticon-paper-plane"></span></div>
                                </div>
                                <div class="price-box">
                                    <div class="title"><?php echo htmlspecialchars($row["planname"]); ?></div>
                                    <h4 class="price">
                                        INR: <?php echo htmlspecialchars($row["planamount"]); ?> <i class="fa fa-inr"></i><br>
                                        Days <?php echo htmlspecialchars($row["planduration"]); ?>
                                    </h4>
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
                                    <span class="price" style="font-size:15px;">
                                        Allowed Contacts/Address: <?php echo htmlspecialchars($row["allowcontacts"]); ?>
                                    </span>
                                </p>
                                <div class="btn-box">
    <input type="hidden" name="txtplan" class="planname" value="<?php echo htmlspecialchars($row["planname"]); ?>">
    <a class="theme-btn btn btn-style-one payNowBtn">
        <span class="btn-title">Pay Now</span>
    </a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".payNowBtn").click(function() {
        var planname = $(this).closest(".inner-box").find(".planname").val(); // Get the selected plan name

        $.ajax({
            url: "update_payment.php",
            type: "POST",
            data: { action: "update_payment", planname: planname },
            success: function(response) {
                alert(response); // Show success or error message
            }
        });
    });
});
</script>

                                <input name="txtplan" type="hidden" value="<?php echo htmlspecialchars($row["planname"]); ?>">
                                <input name="txtplanname" type="hidden" value="<?php echo htmlspecialchars($row["planname"]); ?>">
                                <input name="txtoid" type="hidden" value="MP">
                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="pm" value="op4" class="formtext" onclick="getPayForm(this.value)" checked>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
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