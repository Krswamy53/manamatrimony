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
    <title>Happy Story</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylec5d7.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/stylenew.css" rel="stylesheet">
    <link href="modal.html" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--<link href="css/pagination.css" rel="stylesheet">-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="matrimonysoftware" />
    <meta name="description" content="matrimonysoftware" />


    <style>
        .pagination-links {
            margin-top: 20px;
            text-align: center;
        }

        .pagination-links a {
            display: inline-block;
            padding: 8px 16px;
            margin: 0 4px;
            border: 1px solid #ddd;
            color: #555;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination-links a.active {
            background-color: #f20487;
            color: #fff;
            border-color: #f20487;
        }

        .pagination-links a:hover {
            background-color: #f20487;
        }
    </style>
    <style>
       .nav-tabs .nav-link {
            color: #ffffff;
            background-color: #EB2869;
        }
        .nav-tabs .nav-link.active {
            background-color: #ffffff;
            color: #f2720c;
            border-color: #f2720c #f2720c #ffffff;
        }

        .submit-button {
            background-color: #EB2869;
            color: white;
            margin-left: 80px;
        }

        #uploadPhoto {
            color: #EB2869;

        }
    </style>

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

        <style>
            .custom-color {
                color: #EB2869;
            }

            .rowh {
                margin-right: 29px;
            }

            form {
                margin-left: 200px;
                width: 90%;
            }

            .active {
                color: #f14b59;
            }

            @media screen and (max-width: 1200px) {
                form {
                    margin-left: 20px;
                    width: 90%;
                }
            }

            .comment-text {
                max-width: 100%;
                /* Limit the maximum width of the comment text */
                overflow-wrap: break-word;
                /* Allow long words to be broken and wrap onto the next line */
            }
            
        </style>
        <style>
            .success-stories-list {
                list-style: none;
                padding: 0;
            }

            .success-story-item {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                padding: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f9f9f9;
                flex-wrap: wrap;
                text-align: justify;
            }

            .image-container {
                width: 150px;
                margin-bottom: 15px;
            }

            .img-fluid {
                max-width: 100%;
                height: auto;
                border-radius: 5px;
            }

            .content-container {
                flex: 1;
                margin-left: 20px;
            }

            .marriage-date {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .couple-names {
                margin-bottom: 5px;
                color: #EB2869;
            }

            .success-story {
                margin-bottom: 0;
            }

            .custom-color {
                color: #5a5a5a;
            }

            .submit-button {
                background-color:#EB2869;
                color: white;
                margin-left: 150px;
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
                } catch (err) { }
            }
            setInterval("AccessClipboardData()", 300);
        </script>

        <link href="css/stylenew.css" rel="stylesheet">
        <!-- Main Header-->

        <header class="main-header header-style-two">
            <div class="buy-script">

                <a href="" target="_blank">
                    <p class="text-white text-center"><span class="blinks"><i class="fa fa-phone"
                                aria-hidden="true"></i></span>
                        +91 8019192373 </p>
                </a>

            </div>
            <div class="main-box">

                <div class="auto-container clearfix ">

                    <div class="logo-box">

                        <div class="logo"><a href="index.php"><img src="images/logo1.png" alt="" title=""></a>
                        </div>

                    </div>

                    <!--Nav Box-->
                    <di v class="nav-outer clearfix">

                        <!--Mobile Navigation Toggler-->
                        <div class="mobileapp_Icon">
                            <a href="https://play.google.com/store/apps/details?id=com.infinity.matrimonysoftware"
                                target="_blank"><img src="images/app-ic.png"></a>
                        </div>
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span>

                        </div>
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

                                    <li class=" dropdown "><a href="index.php">Home</a></li>

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
                                    <li class="current dropdown active"><a href="successstory.php">Success Stories </a>
                                    </li>


                                    <li class="dropdown"><a href="">Search</a>

                                        <ul>

                                            <li><a href="quicksearch.php">Quick Search</a></li>
                                            <li><a href="basicsearch.php">Basic Search</a> </li>
                                            <li><a href="advancesearch.php">Advanced Search</a></li>

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


                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="loginform.php" class="theme-btn btn btn-style-one">
                                    <span class="btn-title" style="text-aign:center;margin-left:10px;">Login</span></a>
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
            <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            <a href="loginform.php" class="theme-btn btn-style-one ml-4 mt-2"><span class="btn-title">Login</span></a>

        </nav>
    </div><!-- End Mobile Menu -->
    </header>


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <h1 class="d-none d-lg-block d-xl-block d-md-block">Happy Story</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Happy Story</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Pricing Section -->



    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="success-stories-tab" data-toggle="tab" href="#success-stories" role="tab"
                    aria-controls="success-stories" aria-selected="true">Success Stories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="post-success-story-tab" data-toggle="tab" href="#post-success-story" role="tab"
                    aria-controls="post-success-story" aria-selected="false">Post your success story</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="success-stories" role="tabpanel"
                aria-labelledby="success-stories-tab">
                <div class="auto-container">
                    <div class="sec-title text-center">
                    </div>
                    <div class="container mt-5">
                        <?php
                        // Include database connection parameters
                        include 'db.php';

                        $recordsPerPage = 3;

                        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                            $currentPage = $_GET['page'];
                        } else {
                            $currentPage = 1;
                        }

                        $offset = ($currentPage - 1) * $recordsPerPage;

                        $sql = "SELECT * FROM success_stories LIMIT $offset, $recordsPerPage";
                        $result = $conn->query($sql);

                        if ($result === false) {
                            die("Error executing query: " . $conn->error);
                        }

                        if ($result->num_rows > 0) {
                            echo '<ul class="success-stories-list">';
                            while ($row = $result->fetch_assoc()) {
                                echo '<li class="success-story-item row">';
                                echo '<div class="col-md-4 col-12 image-container ">';
                                echo '<img src="' . htmlspecialchars($row["photoPath"]) . '" alt="Success Story Image" class="img-fluid">';
                                echo '</div>';
                                echo '<div class="col-md-8 col-12 content-container">';
                                echo '<p class="marriage-date">' . htmlspecialchars($row["marriageDate"]) . '</p>';
                                echo '<h4 class="couple-names">' . htmlspecialchars($row["brideName"]) . ' & ' . htmlspecialchars($row["groomName"]) . '</h4>';
                                echo '<p class="success-story text">' . htmlspecialchars($row["success_story"]) . '</p>';
                                echo '</div>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        } else {
                            echo "<p>No results found</p>";
                        }
                        ?>


                    </div>
                </div>

                <div class="pagination-links">
                    <?php
                    // Count total number of records
                    $sql = "SELECT COUNT(*) AS total FROM success_stories";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $totalRecords = $row['total'];

                    // Calculate total pages
                    $totalPages = ceil($totalRecords / $recordsPerPage);

                    // Display Previous Button
                    if ($currentPage > 1) {
                        $prevPage = $currentPage - 1;
                        echo '<a href="?page=' . $prevPage . '" class="pagination-button">Previous</a>';
                    }

                    // Display Numbered Pages
                    for ($i = max(1, $currentPage - 2); $i <= min($totalPages, $currentPage + 2); $i++) {
                        if ($i == $currentPage) {
                            echo '<a href="?page=' . $i . '" class="pagination-button active">' . $i . '</a>';
                        } else {
                            echo '<a href="?page=' . $i . '" class="pagination-button">' . $i . '</a>';
                        }
                    }

                    // Display Next Button
                    if ($currentPage < $totalPages) {
                        $nextPage = $currentPage + 1;
                        echo '<a href="?page=' . $nextPage . '" class="pagination-button">Next</a>';
                    }
                    ?>
                </div>

            </div>
            <div class="tab-pane fade" id="post-success-story" role="tabpanel" aria-labelledby="post-success-story-tab">
                <div class="container mt-5">
                <h2 class="text-center custom-color" style="color: #EB2869;">Post Success Story</h2>                    
                <p class="text-center text-muted">Post your success story here</p>
                    <form action="submit_story.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="brideId" class="col-sm-3 col-form-label">Bride Id *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="brideId" name="brideID"
                                    placeholder="Enter Bride Id" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brideName" class="col-sm-3 col-form-label">Bride Name *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="brideName" name="brideName"
                                    placeholder="Enter Bride Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="groomId" class="col-sm-3 col-form-label">Groom Id *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="groomId" name="groomId"
                                    placeholder="Enter Groom Id" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="groomName" class="col-sm-3 col-form-label">Groom Name *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="groomName" name="groomName"
                                    placeholder="Enter Groom Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="engagementDate" class="col-sm-3 col-form-label">Engagement Date *</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div class="col">
                                        <select class="form-control" id="engagementDay" name="engagementDay" required>
                                            <?php
                                            // Loop to generate options for all days of the month
                                            for ($day = 1; $day <= 31; $day++) {
                                                // Format the day with leading zero if it's a single digit
                                                $formatted_day = sprintf("%02d", $day);
                                                // Output each option
                                                echo '<option>' . $formatted_day . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="engagementMonth" name="engagementMonth"
                                            required>
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">Apr</option>
                                            <option value="05">May</option>
                                            <option value="06">Jun</option>
                                            <option value="07">Jul</option>
                                            <option value="08">Aug</option>
                                            <option value="09">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="engagementYear" name="engagementYear" required>
                                            <?php
                                            // Loop to generate options for the next 10 years (adjust as needed)
                                            $current_year = date("Y");
                                            for ($year = $current_year; $year <= $current_year + 10; $year++) {
                                                // Output each option
                                                echo '<option>' . $year . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marriageDate" class="col-sm-3 col-form-label">Marriage Date *</label>
                            <div class="col-sm-9">
                                <div class="form-row">
                                    <div class="col">
                                        <select class="form-control" id="marriageDay" name="marriageDay" required>
                                            <?php

                                            for ($day = 1; $day <= 31; $day++) {

                                                $formatted_day = sprintf("%02d", $day);

                                                echo '<option>' . $formatted_day . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="marriageMonth" name="marriageMonth" required>
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">Apr</option>
                                            <option value="05">May</option>
                                            <option value="06">Jun</option>
                                            <option value="07">Jul</option>
                                            <option value="08">Aug</option>
                                            <option value="09">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="marriageYear" name="marriageYear" required>
                                            <?php
                                            // Loop to generate options for the next 10 years (adjust as needed)
                                            $current_year = date("Y");
                                            for ($year = $current_year; $year <= $current_year + 10; $year++) {
                                                // Output each option
                                                echo '<option>' . $year . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uploadPhoto" class="col-sm-3 col-form-label">Upload Photo *</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="uploadPhoto" name="uploadPhoto"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="successStory" class="col-sm-3 col-form-label">Success Story *</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="successStory" name="successStory" rows="3"
                                    placeholder="Write your success story here" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn submit-button">SUBMIT</button>
                            </div>
                        </div>
                    </form>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </div>
    <br>
    <br>

    <!-- Main Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
    <!-- End Footer -->

    </div>
    <!--End News Section -->

    <!--End Pricing Section -->

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
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
    <script src="js/map-script.js"></script>

    <div class="modal fade" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
            <script>
                $(document).ready(function () {
                    $('#myModal2').on('show.bs.modal', function (e) {
                        var rowid = $(e.relatedTarget).data('id');
                        $.ajax({
                            type: 'post',
                            url: 'modalup_readmore.php', //Here you will fetch records 
                            data: 'rowid=' + rowid, //Pass $id
                            success: function (data) {
                                $('.modal-content').html(data); //Show fetched data from database
                            }
                        });
                    });
                });
            </script>
            <script>
                document.getElementById('success-story-form').onsubmit = function () {
                    // Name validation
                    var name = document.getElementsByName('name')[0].value.trim();
                    if (name === '') {
                        alert('Please enter your name.');
                        return false;
                    } else if (!isValidName(name)) {
                        alert('Please enter a valid name with only alphabets.');
                        return false;
                    }

                    // Partner's Name validation
                    var partnerName = document.getElementsByName('partner_name')[0].value.trim();
                    if (partnerName === '') {
                        alert("Please enter your partner's name.");
                        return false;
                    } else if (!isValidName(partnerName)) {
                        alert("Please enter a valid partner's name with only alphabets.");
                        return false;
                    }

                    // Email validation
                    var email = document.getElementsByName('email')[0].value.trim();
                    if (email === '') {
                        alert('Please enter your email.');
                        return false;
                    } else if (!validateEmail(email)) {
                        alert('Please enter a valid email address.');
                        return false;
                    }

                    // Partner's Email validation
                    var partnerEmail = document.getElementsByName('partner_email')[0].value.trim();
                    if (partnerEmail === '') {
                        alert("Please enter your partner's email.");
                        return false;
                    } else if (!validateEmail(partnerEmail)) {
                        alert("Please enter a valid partner's email address.");
                        return false;
                    }

                    // First Met Date validation
                    var firstMetDate = document.getElementsByName('first_met_date')[0].value.trim();
                    if (firstMetDate === '' || firstMetDate === 'When did you first meet?') {
                        alert('Please enter when you first met.');
                        return false;
                    }

                    // Wedding Date validation
                    var weddingDate = document.getElementsByName('wedding_date')[0].value.trim();
                    if (weddingDate === '' || weddingDate === 'Wedding Date?') {
                        alert('Please enter your wedding date.');
                        return false;
                    }

                    // Comment validation
                    var comment = document.getElementsByName('comment')[0].value.trim();
                    if (comment === '') {
                        alert('Please enter your story.');
                        return false;
                    } else if (comment.length > 250) {
                        alert('Your story should not exceed 250 characters.');
                        return false;
                    }

                    // Image validation
                    var image = document.getElementsByName('image')[0].value.trim();
                    if (image === '') {
                        alert('Please upload an image.');
                        return false;
                    }

                    return true;
                };

                // Function to validate if a string contains only alphabets
                function isValidName(name) {
                    var regex = /^[a-zA-Z\s]+$/;
                    return regex.test(name);
                }

                // Function to validate email address
                function validateEmail(email) {
                    var emailRegex = /^[a-zA-Z0-9._-]+@gmail\.com$/i;
                    return emailRegex.test(email);
                }
            </script>

</body>

</html>