
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

$userLoggedIn = false;
$planName = "No plan available for you"; // Default message
$paymentStatus = "";
$firstName = ""; // Store user name

if (isset($_SESSION['id'])) {
    $userLoggedIn = true;
    $userId = $_SESSION['id'];

    // Database connection
    include "db.php";

    // Fetch user details for logged-in user
    $sql = "SELECT firstName, payment, planname FROM user_profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['firstName'];
        $paymentStatus = $row['payment'];

        // Show plan name only if payment is "paid"
        if ($paymentStatus === "paid") {
            $planName = $row['planname'];
        }
    }

    $stmt->close();
    $conn->close();
}
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
        <style>
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            font-size: 20px;
            font-weight: bold;
        }
        .badge {
            font-size: 14px;
        }
    </style>

<?php
// Start the session to access session variables

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Get logged-in user ID
$userId = $_SESSION['id'];

$userLoggedIn = false;
$planName = "No plan available for you"; // Default message
$firstName = ""; // Store user name

if ($userId) {
    $userLoggedIn = true;

    // Database connection
    include "db.php";

    // Fetch user details for logged-in user
    $sql = "SELECT firstName, payment, planname FROM user_profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['firstName'];

        // If payment is "paid", set the plan name; otherwise, keep the default message
        $planName = ($row['payment'] === "Paid") ? $row['planname'] : $planName;
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="container mt-4">
    <?php if ($userLoggedIn) { ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center shadow">
                    <div class="card-header bg-primary text-white fw-bold">
                        Welcome, <?= htmlspecialchars($firstName); ?> 🎉
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Your Plan Details</h5>
                        <p class="card-text" style="color:white;">
                            <span class="badge <?= ($planName !== "No plan available for you") ? 'bg-success' : 'bg-danger'; ?>">
                                <?= htmlspecialchars($planName); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning text-center mt-4">
            <strong>Please log in to view your plan details.</strong>
        </div>
    <?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        
<br><br>
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