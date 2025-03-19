<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}
?>
<?php


$validation_passed = false; // Initialize the variable

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload_photos_submit'])) {
    // Validate form data
    $errors = array();

    // Validate each file upload
    foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['photos']['name'][$key];
        $file_size = $_FILES['photos']['size'][$key];
        $file_tmp = $_FILES['photos']['tmp_name'][$key];
        $file_type = $_FILES['photos']['type'][$key];

        // Check file size
        if ($file_size > 2097152) { // 2MB in bytes
            $errors[] = "File '{$file_name}' size must be less than 2MB";
        }

        // Allow certain file formats
        $allowed_extensions = array('jpg', 'jpeg', 'png');
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            $errors[] = "File '{$file_name}' must be of type JPG, JPEG, or PNG";
        }
    }

    // If there are no errors, set the validation_passed variable to true
    if (empty($errors)) {
        $validation_passed = true;
        echo "<script>alert('files uploaded');</script>";

        // header("Location:#partner-preference-tab"); // Id of next tab need to be changed.

        // If validation passes, you can save the files, if needed
    } else {
        echo "<script>alert('files not uploaded');</script>";
    }
}

// Function to display errors
function displayErrors($errors)
{
    foreach ($errors as $error) {
        echo "<p>{$error}</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Matrimonial - Admin Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XYZ=" crossorigin="anonymous" />
    <style>
        body {
            background-color: beige;
        }

        .logout-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 50px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: 20px;

        }

        .photo-placeholder {
            background-image: url('placeholder-image-url');
            /* Replace with your actual placeholder image URL */
            width: 100px;
            /* Adjust as needed */
            height: 100px;
            /* Adjust as needed */
            background-size: cover;
            border: 1px solid #ddd;
            display: inline-block;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .tab-content {
            background-color: #ffffff;
            border: 1px solid #28a745;
            padding: 20px;
        }

        .nav-tabs .nav-link.active {
            background-color: #f8f9fa;
            border-top: 2px solid #28a745;

        }

        .custom-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            transition-duration: 0.4s;
        }

        .section-title {
            background-color: #f2f2f2;
            padding: 10px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border: 1px solid #ccc;
            border-bottom: none;
            color: green;
        }

        /* .row {
            margin-left: -30px;
            width: 106%;
        } */
        .form-check {
            margin-top: 35px;

        }

        .education-icon {
            color: green;

            /* additional styling */
        }

        .education-icon i {
            margin-right: 8px;
            /* adjust spacing as needed */
            /* additional styling */

        }

        .photo-label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .photo-input {
            margin-bottom: 20px;
        }

        .submit-btn {
            background-color: green;
            color: white;
        }

        .second-row {
            margin-left: 250px;
        }

        .container {
            margin-left: 280px;
            width: 80%;
        }

        .photo-input {
            margin-bottom: 20px;
        }

        .photo-placeholder {
            width: 150px;
            height: 150px;
            background-color: #ccc;
            border-radius: 50%;
        }

        .photo-label {
            margin-top: 10px;
        }

        #upload-photos {
            margin-left: -250px;
        }

        .nav-item {
            margin-right: 192px;
            /* Adjust the margin value as needed */

        }

        .custom-scroll {
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 1px;/ Set the width of the scrollbar /
        }

        .button-container {
            border: 1px solid #ccc;
            padding: 12px;
            background-color: white;
            display: flex;
            justify-content: flex-start;
        }

        .button-container .btn {
            margin-right: 10px;
            /* Spacing between buttons */
            padding: 10px;
            width: 180px;
        }

        .custom-tabs {
            display: flex;
            justify-content: space-between;
        }

        .custom-tabs .nav-item {
            margin-right: 220px;
            /* Adjust as needed */
        }

        .custom-tabs .nav-item:last-child {
            margin-right: 0;
        }

        .custom-tabs .nav-link {
            padding: 8px 35px;
            /* Adjust as needed */
        }

        /* Ensure proper sizing */
        .custom-tabs * {
            box-sizing: border-box;
        }

        .logout-btn {
            position: fixed;
            bottom: 10px;
            left: 10px;
            z-index: 999;
            /* Ensure it's above other content */
        }

        @media only screen and (max-width: 768px) {
            .container {

                margin-left: 0px;
                width: auto;
            }

            .nav-tabs {
                width: 500px;
            }

            .one {
                margin-left: 250px;
            }
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <button class="sidebar-collapse-mini d-xl-none d-block"><i class="bi bi-list"></i></button>
        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini">
            <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <a href="index.php"><img src="uploads/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>


            </div>


            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                        <ul>
                            <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>


                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>

                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>

                            <!-- <li class="sidebar-item has-sub"> -->
                            <!-- <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a> -->
                            <!-- <ul class="sub-menu">
                            <li><a href="Active.php" class="sub-menu-item">Active Members</a></li>
                            <li><a href="inactive.php" class="sub-menu-item">Inactive Members</a></li>
                            <li><a href="paid.php" class="sub-menu-item">Paid Members</a></li>
                            <li><a href="unpaid.php" class="sub-menu-item">Unpaid Members</a></li>
                            <li><a href="allprofiles.php" class="sub-menu-item">All Profiles</a></li>
                            </ul> -->
                            <!-- </li>                            -->
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <!-- <li class="sidebar-item"><a href="feacture.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members </span></a></li> -->

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <!-- <li class="sidebar-item"><a href="express.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Expreess Interest </span></a></li> -->
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password </span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password </span></a></li>

                            <button class="logout-btn" onclick="location.href='login.php'" style="position: sticky; bottom: 10px;">Logout</button>



                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->

        <div class="container mt-5">

            <div class="button-container">

                <a href="allprofiles.php" class="btn btn-success"><i class="bi bi-people"></i> All Member</a>
                <a href="addmembers.php" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Member</a>
            </div>
            <br>
            <!-- <h2 class="mb-4">Member Details</h2> -->
            <ul class="nav nav-tabs custom-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="basic-details-tab" role="tab" aria-controls="basic-details" aria-selected="true" data-toggle="tab" href="#basic-details">Member Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="upload-photos-tab" data-toggle="tab" role="tab" aria-controls="upload-photos" aria-selected="false" href="#upload-photos">Upload Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="partner-preference-tab" data-toggle="tab" role="tab" aria-controls="partner-preference" aria-selected="false" href="#partner-preference">Partner Preference</a>
                </li>
            </ul>



            <form id="memberDetailsForm" method="post" action="submit.php" onsubmit="return validateMemberDetailsForm()" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="tab-content mt-4">
                    <!-- Basic Details Tab -->
                    <div id="basic-details" role="tab-panel" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-file-alt"></i> Basic Details</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" pattern="[A-Za-z]{2,}" required>
                                <div class="invalid-feedback">
                                    Please provide a valid first name (minimum 2 characters, alphabets only).
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" pattern="[A-Za-z]{2,}" required>
                                <div class="invalid-feedback">
                                    Please provide a valid last name (minimum 2 characters, alphabets only).
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                                <div class="invalid-feedback">
                                    Please provide a valid date of birth (minimum 18 years old).
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your gender.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="profileCreatedBy">Profile Created By</label>
                                <select class="form-control" id="profileCreatedBy" name="profileCreatedBy" required>
                                    <option value="" disabled selected>Select options</option>
                                    <option value="self">Self</option>
                                    <option value="parents">Parents</option>
                                    <option value="guardian">Guardian</option>
                                    <option value="friends">Friends</option>
                                    <option value="sibling">Sibling</option>
                                    <option value="relatives">Relatives</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select who created the profile.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email Id</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                            <!-- input-group-text  input-group-prepend-->
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile No</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+91</span>
                                    </div>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid mobile number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="maritalStatus">Marital Status</label>
                                <select class="form-control" id="maritalStatus" name="maritalStatus" required>
                                    <option value="" disabled selected>Select Marital Status</option>
                                    <option value=" Never Married"> Never Married</option>
                                    <option value="Widower"> Widower</option>
                                    <option value="widow">Widow</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="Awaiting Divorce">
                                        Awaiting Divorce
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Marital Status.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother">Mother Tongue</label>
                                <select class="form-control" id="mother" name="mother" required>
                                    <option value="" disabled selected>Select Mother Tongue</option>
                                    <!-- List of common mother tongue values -->
                                    <option value="Telugu">Telugu</option>
                                    <option value="English">English</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Afrikaans">Afrikaans</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Amharic">Amharic</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a Mother Tongue.
                                </div>
                            </div>

                        </div>
                        <!-- New row -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                <div class="invalid-feedback">
                                    Please provide a valid password with at least 8 characters, 1 uppercase letter, 1 lowercase letter, and 2 numeric digits.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                                <div class="invalid-feedback">
                                    Passwords do not match.
                                </div>
                            </div>
                        </div>
                        <!-- New row for Religion Information -->
                        <!-- <div class="container mt-5"> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"> <i class="fas fa-book"></i> Religion Information</div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="religion">Religion</label>
                                <select class="form-control" id="religion" name="religion" onchange="populateCaste()" required>
                                    <option value="" disabled selected>Select Religion</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="christian">Christian</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Religion.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="caste">Caste</label>
                                <select class="form-control" id="caste" name="caste" onchange="populateSubcaste()" required>
                                    <option value="" disabled selected>Select Caste</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Caste.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="subcaste">Subcaste</label>
                                <select class="form-control" id="subcaste" name="subcaste" required>
                                    <option value="" disabled selected>Select Subcaste</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Subcaste.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label" for="willingToMarryOtherCaste">
                                        Willing to marry other caste?
                                    </label>
                                    <input class="form-check-input ml-2" type="checkbox" id="willingToMarryOtherCaste" name="willingToMarryOtherCaste">
                                    <div class="invalid-feedback">
                                        Please provide a Willing to marry other caste.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"> <i class="fas fa-graduation-cap"></i> Education&Occupation Details</div>
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="highestEducation">Highest Education</label>
                                <select class="form-control" id="highestEducation" name="highestEducation" required>
                                    <option value="" disabled selected>Select Highest Education</option>
                                    <option value="B Plan">B Plan</option>
                                    <option value="Degree">Degree</option>
                                    <option value="Software">Software</option>
                                    <option value="B Arch">B Arch</option>
                                    <option value="BE">BE</option>
                                    <option value="B Tech">B Tech</option>
                                    <option value="BSc Computer Science">BSc Computer Science</option>
                                    <option value="BSc IT">BSc IT</option>
                                    <option value="B Phil">B Phil</option>
                                    <option value="B Com">B Com</option>
                                    <option value="BA">BA</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BLIS">BLIS</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BMM (MASS MEDIA)">BMM (MASS MEDIA)</option>
                                    <option value="BEd">BEd</option>
                                    <option value="MEd">MEd</option>
                                    <option value="BHM">BHM</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                    <option value="ME">ME</option>
                                    <option value="M Arch">M Arch</option>
                                    <option value="MCA">MCA</option>
                                    <option value="PGDCA">PGDCA</option>
                                    <option value="M Tech">M Tech</option>
                                    <option value="MSc Computer Science">MSc Computer Science</option>
                                    <option value="MSc IT">MSc IT</option>
                                    <option value="M Phil">M Phil</option>
                                    <option value="M Com">M Com</option>
                                    <option value="M Sc">M Sc</option>
                                    <option value="MA">MA</option>
                                    <option value="MLIS">MLIS</option>
                                    <option value="MSW">MSW</option>
                                    <option value="MHM">MHM</option>
                                    <option value="MBA">MBA</option>
                                    <option value="PGDM">PGDM</option>
                                    <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                                    <option value="MCh - Master Of Chirurgiae">MCh - Master Of Chirurgiae</option>
                                    <option value="DM - Doctorate Of Medicine">DM - Doctorate Of Medicine</option>
                                    <option value="BDS">BDS</option>
                                    <option value="MDS">MDS</option>
                                    <option value="BHMS">BHMS</option>
                                    <option value="MHMS">MHMS</option>
                                    <option value="BAMS">BAMS</option>
                                    <option value="MAMS">MAMS</option>
                                    <option value="Bachelor Of Veterinary Science">Bachelor Of Veterinary Science</option>
                                    <option value="Master Of Veterinary Science">Master Of Veterinary Science</option>
                                    <option value="Degree In Medicine">Degree In Medicine</option>
                                    <option value="Master In Medicine">Master In Medicine</option>
                                    <option value="BPT">BPT</option>
                                    <option value="MPT">MPT</option>
                                    <option value="B.Pharm">B.Pharm</option>
                                    <option value="M.Pharm">M.Pharm</option>
                                    <option value="BSc Nursing">BSc Nursing</option>
                                    <option value="MSc Nursing">MSc Nursing</option>
                                    <option value="Diploma In Nursing">Diploma In Nursing</option>
                                    <option value="Medical Laboratory Technology">Medical Laboratory Technology</option>
                                    <option value="BGL">BGL</option>
                                    <option value="Bachelor Of Law">Bachelor Of Law</option>
                                    <option value="LLB">LLB</option>
                                    <option value="Master Of Law">Master Of Law</option>
                                    <option value="LLM">LLM</option>
                                    <option value="CA Inter">CA Inter</option>
                                    <option value="CA Final">CA Final</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="Company Secretary (CS)">Company Secretary (CS)</option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                    <option value="Ph D">Ph D</option>
                                    <option value="IAS">IAS</option>
                                    <option value="IPS">IPS</option>
                                    <option value="IRS">IRS</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Polytechnic">Polytechnic</option>
                                    <option value="High School">High School</option>
                                    <option value="Less Than High School">Less Than High School</option>
                                    <option value="Other Education">Other Education</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please provide a Highest Education.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="additionalDegree">Additional Degree</label>
                                <select class="form-control" id="additionalDegree" name="additionalDegree" required>
                                    <option value="" disabled selected>Select Additional Degree</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B Plan">B Plan</option>
                                    <option value="B Arch">B Arch</option>
                                    <option value="BE">BE</option>
                                    <option value="B Tech">B Tech</option>
                                    <option value="BSc Computer Science">BSc Computer Science</option>
                                    <option value="BSc IT">BSc IT</option>
                                    <option value="B Phil">B Phil</option>
                                    <option value="B Com">B Com</option>
                                    <option value="BA">BA</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BLIS">BLIS</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BMM (MASS MEDIA)">BMM (MASS MEDIA)</option>
                                    <option value="BEd">BEd</option>
                                    <option value="MEd">MEd</option>
                                    <option value="BHM">BHM</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                    <option value="ME">ME</option>
                                    <option value="M Arch">M Arch</option>
                                    <option value="MCA">MCA</option>
                                    <option value="PGDCA">PGDCA</option>
                                    <option value="M Tech">M Tech</option>
                                    <option value="MSc Computer Science">MSc Computer Science</option>
                                    <option value="MSc IT">MSc IT</option>
                                    <option value="M Phil">M Phil</option>
                                    <option value="M Com">M Com</option>
                                    <option value="M Sc">M Sc</option>
                                    <option value="MA">MA</option>
                                    <option value="MLIS">MLIS</option>
                                    <option value="MSW">MSW</option>
                                    <option value="MHM">MHM</option>
                                    <option value="MBA">MBA</option>
                                    <option value="PGDM">PGDM</option>
                                    <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                                    <option value="MCh - Master Of Chirurgiae">MCh - Master Of Chirurgiae</option>
                                    <option value="DM - Doctorate Of Medicine">DM - Doctorate Of Medicine</option>
                                    <option value="BDS">BDS</option>
                                    <option value="MDS">MDS</option>
                                    <option value="BHMS">BHMS</option>
                                    <option value="MHMS">MHMS</option>
                                    <option value="BAMS">BAMS</option>
                                    <option value="MAMS">MAMS</option>
                                    <option value="Bachelor Of Veterinary Science">Bachelor Of Veterinary Science</option>
                                    <option value="Master Of Veterinary Science">Master Of Veterinary Science</option>
                                    <option value="Degree In Medicine">Degree In Medicine</option>
                                    <option value="Master In Medicine">Master In Medicine</option>
                                    <option value="BPT">BPT</option>
                                    <option value="MPT">MPT</option>
                                    <option value="B.Pharm">B.Pharm</option>
                                    <option value="M.Pharm">M.Pharm</option>
                                    <option value="BSc Nursing">BSc Nursing</option>
                                    <option value="MSc Nursing">MSc Nursing</option>
                                    <option value="Diploma In Nursing">Diploma In Nursing</option>
                                    <option value="Medical Laboratory Technology">Medical Laboratory Technology</option>
                                    <option value="BGL">BGL</option>
                                    <option value="Bachelor Of Law">Bachelor Of Law</option>
                                    <option value="LLB">LLB</option>
                                    <option value="Master Of Law">Master Of Law</option>
                                    <option value="LLM">LLM</option>
                                    <option value="CA Inter">CA Inter</option>
                                    <option value="CA Final">CA Final</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="Company Secretary (CS)">Company Secretary (CS)</option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                    <option value="Ph D">Ph D</option>
                                    <option value="IAS">IAS</option>
                                    <option value="IPS">IPS</option>
                                    <option value="IRS">IRS</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Polytechnic">Polytechnic</option>
                                    <option value="High School">High School</option>
                                    <option value="Less Than High School">Less Than High School</option>
                                    <option value="Degree">Degree</option>
                                    <option value="Software">Software</option>
                                    <option value="Other Education">Other Education</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please provide a Additional Degree.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="employedIn">Employed In</label>
                                <select class="form-control" id="employedIn" name="employedIn" required>
                                    <option value="" disabled selected>Select Your Office</option>
                                    <option value="Government">Government</option>
                                    <option value="Private">Private</option>
                                    <option value="Business">Business</option>
                                    <option value="Defence">Defence</option>
                                    <option value="Self Employed">Self Employed</option>
                                    <option value="Not Working">Not Working</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Employed.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="occupation">Occupation</label>
                                <select class="form-control" id="occupation" name="occupation" required>
                                    <option value="" disabled selected>Select Your Occupation</option>
                                    <option value="Civil Engineer">Civil Engineer</option>
                                    <option value="Clerical Official">Clerical Official</option>
                                    <option value="Commercial Pilot">Commercial Pilot</option>
                                    <option value="Company Secretary">Company Secretary</option>
                                    <option value="Computer Professional">Computer Professional</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Contractor">Contractor</option>
                                    <option value="Cost Accountant">Cost Accountant</option>
                                    <option value="Creative Person">Creative Person</option>
                                    <option value="Customer Support Professional">Customer Support Professional</option>
                                    <option value="Defense Employee">Defense Employee</option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Economist">Economist</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>
                                    <option value="Engineer (Project)">Engineer (Project)</option>
                                    <option value="Entertainment Professional">Entertainment Professional</option>
                                    <option value="Event Manager">Event Manager</option>
                                    <option value="Executive">Executive</option>
                                    <option value="Factory worker">Factory worker</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Fashion Designer">Fashion Designer</option>
                                    <option value="Finance Professional">Finance Professional</option>
                                    <option value="Flight Attendant">Flight Attendant</option>
                                    <option value="Government Employee">Government Employee</option>
                                    <option value="Health Care Professional">Health Care Professional</option>
                                    <option value="Home Maker">Home Maker</option>
                                    <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
                                    <option value="Human Resources Professional">Human Resources Professional</option>
                                    <option value="Interior Designer">Interior Designer</option>
                                    <option value="Investment Professional">Investment Professional</option>
                                    <option value="IT / Telecom Professional">IT / Telecom Professional</option>
                                    <option value="Journalist">Journalist</option>
                                    <option value="Lawyer">Lawyer</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Legal Professional">Legal Professional</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Marketing Professional">Marketing Professional</option>
                                    <option value="Media Professional">Media Professional</option>
                                    <option value="Medical Professional">Medical Professional</option>
                                    <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                    <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                                    <option value="Not Working">Not Working</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Occupational Therapist">Occupational Therapist</option>
                                    <option value="Optician">Optician</option>
                                    <option value="Others">Others</option>
                                    <option value="Pharmacist">Pharmacist</option>
                                    <option value="Physician Assistant">Physician Assistant</option>
                                    <option value="Physicist">Physicist</option>
                                    <option value="Physiotherapist">Physiotherapist</option>
                                    <option value="Pilot">Pilot</option>
                                    <option value="Politician">Politician</option>
                                    <option value="Production professional">Production professional</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Psychologist">Psychologist</option>
                                    <option value="Public Relations Professional">Public Relations Professional</option>
                                    <option value="Real Estate Professional">Real Estate Professional</option>
                                    <option value="Research Scholar">Research Scholar</option>
                                    <option value="Retail Professional">Retail Professional</option>
                                    <option value="Retired Person">Retired Person</option>
                                    <option value="Sales Professional">Sales Professional</option>
                                    <option value="Scientist">Scientist</option>
                                    <option value="Self-employed Person">Self-employed Person</option>
                                    <option value="Social Worker">Social Worker</option>
                                    <option value="Software Consultant">Software Consultant</option>
                                    <option value="Sportsman">Sportsman</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Technician">Technician</option>
                                    <option value="Training Professional">Training Professional</option>
                                    <option value="Transportation Professional">Transportation Professional</option>
                                    <option value="Veterinary Doctor">Veterinary Doctor</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Writer">Writer</option>
                                    <option value="Zoologist">Zoologist</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Occupation.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="annualIncome">Annual Income</label>
                                <select class="form-control" id="annualIncome" name="annualIncome" required>
                                    <option value="" disabled selected>Select Your Annual Income</option>
                                    <option value="50,000">50,000</option>
                                    <option value="1,00,000">1,00,000</option>
                                    <option value="2,00,000">2,00,000</option>
                                    <option value="3,00,000">3,00,000</option>
                                    <option value="4,00,000">4,00,000</option>
                                    <option value="5,00,000">5,00,000</option>
                                    <option value="6,00,000">6,00,000</option>
                                    <option value="7,00,000">7,00,000</option>
                                    <option value="8,00,000">8,00,000</option>
                                    <option value="9,00,000">9,00,000</option>
                                    <option value="10,00,000">10,00,000</option>
                                    <option value="11,00,000">11,00,000</option>
                                    <option value="12,00,000">12,00,000</option>
                                    <option value="13,00,000">13,00,000</option>
                                    <option value="14,00,000">14,00,000</option>
                                    <option value="15,00,000">15,00,000</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Annual Income.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-users"></i> Family Details</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="familyType">Family Type</label>
                                <select class="form-control" id="familyType" name="familyType" required>
                                    <option value="" disabled selected>Select Your Family Type</option>
                                    <option value="Joint">
                                        Joint
                                    </option>
                                    <option value="Nuclear">
                                        Nuclear
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Family Type.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="familyValue">Family Value</label>
                                <select class="form-control" id="familyValue" name="familyValue" required>
                                    <option value="" disabled selected>Select Your Family Value</option>

                                    <option value="Orthodox">
                                        Orthodox
                                    </option>
                                    <option value="Traditional">
                                        Traditional
                                    </option>
                                    <option value="Moderate">
                                        Moderate
                                    </option>
                                    <option value="Liberal">
                                        Liberal
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Family Value.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="familyStatus">Family Status</label>
                                <select class="form-control" id="familyStatus" name="familyStatus" required>
                                    <option value="" disabled selected>Select Your Family Status</option>
                                    <option value="Middle class">
                                        Middle class
                                    </option>
                                    <option value="Upper middle class">
                                        Upper middle class
                                    </option>
                                    <option value="Rich">
                                        Rich
                                    </option>
                                    <option value="Affluent">
                                        Affluent
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Family Status.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fatherOccupation">Father's Occupation</label>
                                <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation" placeholder="Enter father's occupation" required>
                                <div class="invalid-feedback">
                                    Please provide a Father's Occupation.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="motherOccupation">Mother's Occupation</label>
                                <input type="text" class="form-control" id="motherOccupation" name="motherOccupation" placeholder="Enter mother's occupation" required>
                                <div class="invalid-feedback">
                                    Please provide a Mother's Occupation.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="numBrothers">Number of Brothers</label>
                                <select class="form-control" id="numBrothers" name="numBrothers" required>
                                    <option value="" disabled selected>Select Your Number of Brothers</option>
                                    <option value="No Brother">No Brother</option>
                                    <option value="1 Brother">1 Brother</option>
                                    <option value="2 Brothers">2 Brothers</option>
                                    <option value="3 Brothers">3 Brothers</option>
                                    <option value="4 Brothers">4 Brothers</option>
                                    <option value="4 + Brothers">4 + Brothers</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Number of Brothers.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="numMarriedBrothers">Number of Married Brothers</label>
                                <select class="form-control" id="numMarriedBrothers" name="numMarriedBrothers" required>
                                    <option value="" disabled selected>Select Your Number of Married Brothers</option>
                                    <option value="No married brother">No married brother</option>
                                    <option value="1 married brother">1 married brother</option>
                                    <option value="2 married brothers">2 married brothers</option>
                                    <option value="3 married brothers">3 married brothers</option>
                                    <option value="4 married brothers">4 married brothers</option>
                                    <option value="4+ married brothers">4+ married brothers</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Number of Married Brothers.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="numSisters">Number of Sisters</label>
                                <select class="form-control" id="numSisters" name="numSisters" required>
                                    <option value="" disabled selected>Select Your Number of Sisters</option>
                                    <option value="No Sister">No Sister</option>
                                    <option value="1 Sister">1 Sister</option>
                                    <option value="2 Sisters">2 Sisters</option>
                                    <option value="3 Sisters">3 Sisters</option>
                                    <option value="4 Sisters">4 Sisters</option>
                                    <option value="4 + Sisters">4 + Sisters</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Number of Sisters.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="numMarriedSisters">Number of Married Sisters</label>
                                <select class="form-control" id="numMarriedSisters" name="numMarriedSisters" required>
                                    <option value="" disabled selected>Select Your Number of Married Sisters</option>
                                    <option value="No married sister">No married Sister</option>
                                    <option value="1 married sister">1 married sister</option>
                                    <option value="2 married sisters">2 married sisters</option>
                                    <option value="3 married sisters">3 married sisters</option>
                                    <option value="4 married sisters">4 married sisters</option>
                                    <option value="4+ married sisters">4+ married sisters</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Number of Married Sisters.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-map-marker-alt"></i> Location Details</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCountry">Country</label>
                                <select class="form-control" id="inputCountry" name="inputCountry" onchange="populateStates()" required>
                                    <option value="" disabled selected>Select Your Country</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Country.
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">State</label>
                                <select class="form-control" id="inputState" name="inputState" onchange="populateCities()" required>
                                    <option value="" disabled selected>Select Your Country</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a State.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <select class="form-control" id="inputCity" name="inputCity" required>
                                    <option value="" disabled selected>Select Your Country</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a City.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"> <i class="fas fa-heartbeat"></i> Health Information </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="diet">Diet</label>
                                <select class="form-control" id="diet" name="diet" required>
                                    <option value="" disabled selected>Select Your Diet</option>

                                    <option value="Vegetarian">
                                        Vegetarian
                                    </option>
                                    <option value="Non Vegetarian">
                                        Non Vegetarian
                                    </option>
                                    <option value="Eggetarian">
                                        Eggetarian
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Diet.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="smokingHabits">Smoking Habits</label>
                                <select class="form-control" id="smokingHabits" name="smokingHabits" required>
                                    <option value="" disabled selected>Select Your Smoking Habits</option>
                                    <option value="daily">Daily</option>
                                    <option value="occasional">Occasional</option>
                                    <option value="no">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Smoking Habits.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="drinkingHabitss">Drinking Habits</label>
                                <select class="form-control" id="drinkingHabits" name="drinkingHabits" required>
                                    <option value="" disabled selected>Select Your Drinking Habits</option>

                                    <option value="daily">Daily</option>
                                    <option value="occasional">Occasional</option>
                                    <option value="no">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Drinking Habits.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-running"></i> Physical Attribute </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="height">Height</label>
                                <select class="form-control" id="height" name="height" required>
                                    <option value="" disabled selected>Select Your Height</option>
                                    <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                                    <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                                    <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                                    <option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
                                    <option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
                                    <option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
                                    <option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
                                    <option value="5ft - 152cm">5ft - 152cm</option>
                                    <option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
                                    <option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
                                    <option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
                                    <option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
                                    <option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
                                    <option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
                                    <option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
                                    <option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
                                    <option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
                                    <option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
                                    <option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
                                    <option value="6ft - 182cm">6ft - 182cm</option>
                                    <option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
                                    <option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
                                    <option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
                                    <option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
                                    <option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
                                    <option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
                                    <option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
                                    <option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
                                    <option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
                                    <option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
                                    <option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
                                    <option value="7ft - 213cm">7ft - 213cm</option>
                                    <option value="Above 7ft - 213cm">Above 7ft - 213cm</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please provide a Height.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="weight">Weight (kg)</label>
                                <select class="form-control" id="weight" name="weight" required>
                                    <option value="" disabled selected>Select Your Weight</option>

                                    <option value='30'>
                                        30 Kg
                                    </option>
                                    <option value='31'>
                                        31 Kg
                                    </option>
                                    <option value='32'>
                                        32 Kg
                                    </option>
                                    <option value='33'>
                                        33 Kg
                                    </option>
                                    <option value='34'>
                                        34 Kg
                                    </option>
                                    <option value='35'>
                                        35 Kg
                                    </option>
                                    <option value='36'>
                                        36 Kg
                                    </option>
                                    <option value='37'>
                                        37 Kg
                                    </option>
                                    <option value='38'>
                                        38 Kg
                                    </option>
                                    <option value='39'>
                                        39 Kg
                                    </option>
                                    <option value='40'>
                                        40 Kg
                                    </option>
                                    <option value='41'>
                                        41 Kg
                                    </option>
                                    <option value='42'>
                                        42 Kg
                                    </option>
                                    <option value='43'>
                                        43 Kg
                                    </option>
                                    <option value='44'>
                                        44 Kg
                                    </option>
                                    <option value='45'>
                                        45 Kg
                                    </option>
                                    <option value='46'>
                                        46 Kg
                                    </option>
                                    <option value='47'>
                                        47 Kg
                                    </option>
                                    <option value='48'>
                                        48 Kg
                                    </option>
                                    <option value='49'>
                                        49 Kg
                                    </option>
                                    <option value='50'>
                                        50 Kg
                                    </option>
                                    <option value='51'>
                                        51 Kg
                                    </option>
                                    <option value='52'>
                                        52 Kg
                                    </option>
                                    <option value='53'>
                                        53 Kg
                                    </option>
                                    <option value='54'>
                                        54 Kg
                                    </option>
                                    <option value='55'>
                                        55 Kg
                                    </option>
                                    <option value='56'>
                                        56 Kg
                                    </option>
                                    <option value='57'>
                                        57 Kg
                                    </option>
                                    <option value='58'>
                                        58 Kg
                                    </option>
                                    <option value='59'>
                                        59 Kg
                                    </option>
                                    <option value='60'>
                                        60 Kg
                                    </option>
                                    <option value='61'>
                                        61 Kg
                                    </option>
                                    <option value='62'>
                                        62 Kg
                                    </option>
                                    <option value='63'>
                                        63 Kg
                                    </option>
                                    <option value='64'>
                                        64 Kg
                                    </option>
                                    <option value='65'>
                                        65 Kg
                                    </option>
                                    <option value='66'>
                                        66 Kg
                                    </option>
                                    <option value='67'>
                                        67 Kg
                                    </option>
                                    <option value='68'>
                                        68 Kg
                                    </option>
                                    <option value='69'>
                                        69 Kg
                                    </option>
                                    <option value='70'>
                                        70 Kg
                                    </option>
                                    <option value='71'>
                                        71 Kg
                                    </option>
                                    <option value='72'>
                                        72 Kg
                                    </option>
                                    <option value='73'>
                                        73 Kg
                                    </option>
                                    <option value='74'>
                                        74 Kg
                                    </option>
                                    <option value='75'>
                                        75 Kg
                                    </option>
                                    <option value='76'>
                                        76 Kg
                                    </option>
                                    <option value='77'>
                                        77 Kg
                                    </option>
                                    <option value='78'>
                                        78 Kg
                                    </option>
                                    <option value='79'>
                                        79 Kg
                                    </option>
                                    <option value='80'>
                                        80 Kg
                                    </option>
                                    <option value='81'>
                                        81 Kg
                                    </option>
                                    <option value='82'>
                                        82 Kg
                                    </option>
                                    <option value='83'>
                                        83 Kg
                                    </option>
                                    <option value='84'>
                                        84 Kg
                                    </option>
                                    <option value='85'>
                                        85 Kg
                                    </option>
                                    <option value='86'>
                                        86 Kg
                                    </option>
                                    <option value='87'>
                                        87 Kg
                                    </option>
                                    <option value='88'>
                                        88 Kg
                                    </option>
                                    <option value='89'>
                                        89 Kg
                                    </option>
                                    <option value='90'>
                                        90 Kg
                                    </option>
                                    <option value='91'>
                                        91 Kg
                                    </option>
                                    <option value='92'>
                                        92 Kg
                                    </option>
                                    <option value='93'>
                                        93 Kg
                                    </option>
                                    <option value='94'>
                                        94 Kg
                                    </option>
                                    <option value='95'>
                                        95 Kg
                                    </option>
                                    <option value='96'>
                                        96 Kg
                                    </option>
                                    <option value='97'>
                                        97 Kg
                                    </option>
                                    <option value='98'>
                                        98 Kg
                                    </option>
                                    <option value='99'>
                                        99 Kg
                                    </option>
                                    <option value='100'>
                                        100 Kg
                                    </option>
                                    <option value='101'>
                                        101 Kg
                                    </option>
                                    <option value='102'>
                                        102 Kg
                                    </option>
                                    <option value='103'>
                                        103 Kg
                                    </option>
                                    <option value='104'>
                                        104 Kg
                                    </option>
                                    <option value='105'>
                                        105 Kg
                                    </option>
                                    <option value='106'>
                                        106 Kg
                                    </option>
                                    <option value='107'>
                                        107 Kg
                                    </option>
                                    <option value='108'>
                                        108 Kg
                                    </option>
                                    <option value='109'>
                                        109 Kg
                                    </option>
                                    <option value='110'>
                                        110 Kg
                                    </option>
                                    <option value='111'>
                                        111 Kg
                                    </option>
                                    <option value='112'>
                                        112 Kg
                                    </option>
                                    <option value='113'>
                                        113 Kg
                                    </option>
                                    <option value='114'>
                                        114 Kg
                                    </option>
                                    <option value='115'>
                                        115 Kg
                                    </option>
                                    <option value='116'>
                                        116 Kg
                                    </option>
                                    <option value='117'>
                                        117 Kg
                                    </option>
                                    <option value='118'>
                                        118 Kg
                                    </option>
                                    <option value='119'>
                                        119 Kg
                                    </option>
                                    <option value='120'>
                                        120 Kg
                                    </option>
                                    <option value='121'>
                                        121 Kg
                                    </option>
                                    <option value='122'>
                                        122 Kg
                                    </option>
                                    <option value='123'>
                                        123 Kg
                                    </option>
                                    <option value='124'>
                                        124 Kg
                                    </option>
                                    <option value='125'>
                                        125 Kg
                                    </option>
                                    <option value='126'>
                                        126 Kg
                                    </option>
                                    <option value='127'>
                                        127 Kg
                                    </option>
                                    <option value='128'>
                                        128 Kg
                                    </option>
                                    <option value='129'>
                                        129 Kg
                                    </option>
                                    <option value='130'>
                                        130 Kg
                                    </option>
                                    <option value='131'>
                                        131 Kg
                                    </option>
                                    <option value='132'>
                                        132 Kg
                                    </option>
                                    <option value='133'>
                                        133 Kg
                                    </option>
                                    <option value='134'>
                                        134 Kg
                                    </option>
                                    <option value='135'>
                                        135 Kg
                                    </option>
                                    <option value='136'>
                                        136 Kg
                                    </option>
                                    <option value='137'>
                                        137 Kg
                                    </option>
                                    <option value='138'>
                                        138 Kg
                                    </option>
                                    <option value='139'>
                                        139 Kg
                                    </option>
                                    <option value='140'>
                                        140 Kg
                                    </option>
                                    <option value='141'>
                                        141 Kg
                                    </option>
                                    <option value='142'>
                                        142 Kg
                                    </option>
                                    <option value='143'>
                                        143 Kg
                                    </option>
                                    <option value='144'>
                                        144 Kg
                                    </option>
                                    <option value='145'>
                                        145 Kg
                                    </option>
                                    <option value='146'>
                                        146 Kg
                                    </option>
                                    <option value='147'>
                                        147 Kg
                                    </option>
                                    <option value='148'>
                                        148 Kg
                                    </option>
                                    <option value='149'>
                                        149 Kg
                                    </option>
                                    <option value='150'>
                                        150 Kg
                                    </option>
                                    <option value='151'>
                                        151 Kg
                                    </option>
                                    <option value='152'>
                                        152 Kg
                                    </option>
                                    <option value='153'>
                                        153 Kg
                                    </option>
                                    <option value='154'>
                                        154 Kg
                                    </option>
                                    <option value='155'>
                                        155 Kg
                                    </option>
                                    <option value='156'>
                                        156 Kg
                                    </option>
                                    <option value='157'>
                                        157 Kg
                                    </option>
                                    <option value='158'>
                                        158 Kg
                                    </option>
                                    <option value='159'>
                                        159 Kg
                                    </option>
                                    <option value='160'>
                                        160 Kg
                                    </option>
                                    <option value='161'>
                                        161 Kg
                                    </option>
                                    <option value='162'>
                                        162 Kg
                                    </option>
                                    <option value='163'>
                                        163 Kg
                                    </option>
                                    <option value='164'>
                                        164 Kg
                                    </option>
                                    <option value='165'>
                                        165 Kg
                                    </option>
                                    <option value='166'>
                                        166 Kg
                                    </option>
                                    <option value='167'>
                                        167 Kg
                                    </option>
                                    <option value='168'>
                                        168 Kg
                                    </option>
                                    <option value='169'>
                                        169 Kg
                                    </option>
                                    <option value='170'>
                                        170 Kg
                                    </option>
                                    <option value='171'>
                                        171 Kg
                                    </option>
                                    <option value='172'>
                                        172 Kg
                                    </option>
                                    <option value='173'>
                                        173 Kg
                                    </option>
                                    <option value='174'>
                                        174 Kg
                                    </option>
                                    <option value='175'>
                                        175 Kg
                                    </option>
                                    <option value='176'>
                                        176 Kg
                                    </option>
                                    <option value='177'>
                                        177 Kg
                                    </option>
                                    <option value='178'>
                                        178 Kg
                                    </option>
                                    <option value='179'>
                                        179 Kg
                                    </option>
                                    <option value='180'>
                                        180 Kg
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Weight.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bodyType">Body Type</label>
                                <select class="form-control" id="bodyType" name="bodyType" required>
                                    <option value="" disabled selected>Select Your Body Type</option>

                                    <option value="Slim">
                                        Slim
                                    </option>
                                    <option value="Average">
                                        Average
                                    </option>
                                    <option value="Athletic">
                                        Athletic
                                    </option>
                                    <option value="Heavy">
                                        Heavy
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Body Type.
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="complexion">Complexion</label>
                                <select class="form-control" id="complexion" name="complexion" required>
                                    <option value="" disabled selected>Select Your Complexion</option>

                                    <option value="Very Fair">
                                        Very Fair
                                    </option>
                                    <option value="Fair">
                                        Fair
                                    </option>
                                    <option value="Wheatish">
                                        Wheatish
                                    </option>
                                    <option value="Wheatish Brown">
                                        Wheatish Brown
                                    </option>
                                    <option value="Dark">
                                        Dark
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Complexion.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="physicalStatus">Physical Status</label>
                                <select class="form-control" id="physicalStatus" name="physicalStatus" required>
                                    <option value="" disabled selected>Select Your Physical Status</option>


                                    <option value="Normal">Normal</option>
                                    <option value="Physically challenged">Physically challenged</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Physical Status.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-star"></i> Horoscope Details </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="doshType">Dosh Type</label>
                                <select class="form-control" id="doshType" name="doshType" required>
                                    <option value="" disabled selected>Choose Dosh Type</option>
                                    <option value="Kaal Sarp Dosh">Kaal Sarp Dosh</option>
                                    <option value="Pitru Dosh">Pitru Dosh</option>
                                    <option value="Nadi Dosh">Nadi Dosh</option>
                                    <option value="Guru Chandal Dosh">Guru Chandal Dosh</option>
                                    <option value="Grahan Dosh">Grahan Dosh</option>
                                    <option value="Gandamool Dosh">Gandamool Dosh</option>
                                    <option value="Shani Dosh">Shani Dosh</option>
                                    <option value="Shrapit Dosh">Shrapit Dosh</option>
                                    <option value="Chandra Dosh">Chandra Dosh</option>
                                    <option value="Kemadruma dosh">Kemadruma dosh</option>
                                </select>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="star">Star</label>
                                <select class="form-control" id="star" name="star" required>
                                    <option value="" disabled selected>Select Your Star</option>
                                    <option value="Ashwini">Ashwini</option>
                                    <option value="Bharani">Bharani</option>
                                    <option value="Krittika">Krittika</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="Mrigashira">Mrigashira</option>
                                    <option value="Ardra">Ardra</option>
                                    <option value="Punarvasu">Punarvasu</option>
                                    <option value="Pushyaa">Pushyaa</option>
                                    <option value="Ashlesha">Ashlesha</option>
                                    <option value="Magha">Magha</option>
                                    <option value="Purva Phalguni">Purva Phalguni</option>
                                    <option value="Uttara Phalguni">Uttara Phalguni</option>
                                    <option value="Hasta">Hasta</option>
                                    <option value="Chitra">Chitra</option>
                                    <option value="Swati">Swati</option>
                                    <option value="Anuradha">Anuradha</option>
                                    <option value="Jyeshtha">Jyeshtha</option>
                                    <option value="Mula">Mula</option>
                                    <option value="Purva Ashadha">Purva Ashadha</option>
                                    <option value="Uttara Ashadha">Uttara Ashadha</option>
                                    <option value="Abhijit">Abhijit</option>
                                    <option value="Shravana">Shravana</option>
                                    <option value="Dhanishta">Dhanishta</option>
                                    <option value="Shatabhisha">Shatabhisha</option>
                                    <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                                    <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                                    <option value="Revati">Revati</option>
                                    <option value="Vishakha">Vishakha</option>
                                </select>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="raasi">Raasi/Moonsign</label>
                                <select class="form-control" id="raasi" name="raasi" required>
                                    <option value="" disabled selected>Select Your Raasi/Moonsign</option>
                                    <option value="Aries">Aries</option>
                                    <option value="Taurus">Taurus</option>
                                    <option value="Gemini">Gemini</option>
                                    <option value="Cancer">Cancer</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Virgo">Virgo</option>
                                    <option value="Libra">Libra</option>
                                    <option value="Scorpio">Scorpio</option>
                                    <option value="Saggitarius">Saggitarius</option>
                                    <option value="Capricorn">Capricorn</option>
                                    <option value="Aquarius">Aquarius</option>
                                    <option value="Pisces">Pisces</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="birthTime">Birth Time</label>
                                <input type="time" class="form-control" id="birthTime" name="birthTime" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="birthPlace">Birth Place</label>
                                <input type="text" class="form-control" id="birthPlace" name="birthPlace" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-info-circle"></i> About me </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="additionalInfo">Additional Information</label>
                                <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="5" required></textarea>
                            </div>
                        </div>

                        <button class="btn btn-primary" onclick="onNextClick('upload-photos-tab')">Next</button>
                        <!-- <button type="submit" id="saveButton" name="educationOccupationSubmit">Save</button> -->
                        <!-- <a href="#upload-photos"> <button type="button" id="nextButton1" class="btn btn-primary">Next</button></a> -->

                    </div>
                    <!-- Upload Photos Tab -->
                    <div id="upload-photos" class="tab-pane fade">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Column 1 -->
                                    <div class="photo-input one">
                                        <div class="photo-placeholder" id="preview1"></div>
                                        <label class="photo-label">Photo 1:</label>
                                        <input type="file" class="form-control-file" name="photo1" onchange="previewImage(this, 'preview1')" required>
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input ">
                                        <div class="photo-placeholder" id="preview2"></div>
                                        <label class="photo-label">Photo 2:</label>
                                        <input type="file" class="form-control-file" name="photo2" onchange="previewImage(this, 'preview2')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input ">
                                        <div class="photo-placeholder" id="preview3"></div>
                                        <label class="photo-label">Photo 3:</label>
                                        <input type="file" class="form-control-file" name="photo3" onchange="previewImage(this, 'preview3')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input ">
                                        <div class="photo-placeholder" id="preview4"></div>
                                        <label class="photo-label">Photo 4:</label>
                                        <input type="file" class="form-control-file" name="photo4" onchange="previewImage(this, 'preview4')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                </div>
                                <div class="col-md-4 second-row">
                                    <!-- Column 2 -->
                                    <div class="photo-input">
                                        <div class="photo-placeholder" id="preview5"></div>
                                        <label class="photo-label">Photo 5:</label>
                                        <input type="file" class="form-control-file" name="photo5" onchange="previewImage(this, 'preview5')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input">
                                        <div class="photo-placeholder" id="preview6"></div>
                                        <label class="photo-label">Photo 6:</label>
                                        <input type="file" class="form-control-file" name="photo6" onchange="previewImage(this, 'preview6')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input">
                                        <div class="photo-placeholder" id="preview7"></div>
                                        <label class="photo-label">Photo 7:</label>
                                        <input type="file" class="form-control-file" name="photo7" onchange="previewImage(this, 'preview7')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                    <div class="photo-input">
                                        <div class="photo-placeholder" id="preview8"></div>
                                        <label class="photo-label">Photo 8:</label>
                                        <input type="file" class="form-control-file" name="photo8" onchange="previewImage(this, 'preview8')">
                                        <div class="invalid-feedback">Please select a photo.</div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary next-tab one" id="nextButton" onclick="validateAndRedirect()">Next</button>
                        </div>
                    </div>

                    <script>
                        function previewImage(input, previewId) {
                            const preview = document.getElementById(previewId);
                            const file = input.files[0];
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                preview.style.backgroundImage = 'url(' + e.target.result + ')';
                            };

                            if (file) {
                                reader.readAsDataURL(file);
                            }
                        }

                        function validateAndRedirect() {
                            let firstImageValid = false;
                            const firstImage = document.querySelector('input[name="photo1"]');

                            // Check if the first image is selected
                            if (firstImage.files.length > 0) {
                                firstImageValid = true;
                                firstImage.classList.remove('is-invalid');
                            } else {
                                firstImage.classList.add('is-invalid');
                            }

                            // If the first image is selected, redirect to the next step
                            if (firstImageValid) {
                                $('#partner-preference-tab').tab('show');
                            } else {
                                // If the first image is not selected, show validation error
                                firstImage.classList.add('is-invalid');
                            }
                        }
                    </script>




                    <!-- Partner Preference Tab -->
                    <div id="partner-preference" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-file-alt"></i> Basic Preference </div>
                            </div>
                        </div>
                        <!-- <form id="partnerPreferenceForm" action="submit.php" method="post" onsubmit="return validateForms()"> -->

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="age_from">Age From</label>
                                <select class="form-control" id="age_from" name="age_from" required>
                                    <option value="" disabled selected>Select Your Age</option>
                                    <option value="18">18 Year</option>
                                    <option value="19">19 Year</option>
                                    <option value="20">20 Year</option>
                                    <option value="21">21 Year</option>
                                    <option value="22">22 Year</option>
                                    <option value="23">23 Year</option>
                                    <option value="24">24 Year</option>
                                    <option value="25">25 Year</option>
                                    <option value="26">26 Year</option>
                                    <option value="27">27 Year</option>
                                    <option value="28">28 Year</option>
                                    <option value="29">29 Year</option>
                                    <option value="30">30 Year</option>
                                    <option value="31">31 Year</option>
                                    <option value="32">32 Year</option>
                                    <option value="33">33 Year</option>
                                    <option value="34">34 Year</option>
                                    <option value="35">35 Year</option>
                                    <option value="36">36 Year</option>
                                    <option value="37">37 Year</option>
                                    <option value="38">38 Year</option>
                                    <option value="39">39 Year</option>
                                    <option value="40">40 Year</option>
                                    <option value="41">41 Year</option>
                                    <option value="42">42 Year</option>
                                    <option value="43">43 Year</option>
                                    <option value="44">44 Year</option>
                                    <option value="45">45 Year</option>
                                    <option value="46">46 Year</option>
                                    <option value="47">47 Year</option>
                                    <option value="48">48 Year</option>
                                    <option value="49">49 Year</option>
                                    <option value="50">50 Year</option>
                                    <option value="51">51 Year</option>
                                    <option value="52">52 Year</option>
                                    <option value="53">53 Year</option>
                                    <option value="54">54 Year</option>
                                    <option value="55">55 Year</option>
                                    <option value="56">56 Year</option>
                                    <option value="57">57 Year</option>
                                    <option value="58">58 Year</option>
                                    <option value="59">59 Year</option>
                                    <option value="60">60 Year</option>
                                    <option value="60+">60+ Year</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select a valid age range.
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="age_to">Age To</label>
                                <select class="form-control" id="age_to" name="age_to" required>
                                    <option value="" disabled selected>Select Your Age To</option>
                                    <option value="18" disabled>18 Year</option>
                                    <option value="19" disabled>19 Year</option>
                                    <option value="20" disabled>20 Year</option>
                                    <option value="21" disabled>21 Year</option>
                                    <option value="22" disabled>22 Year</option>
                                    <option value="23" disabled>23 Year</option>
                                    <option value="24" disabled>24 Year</option>
                                    <option value="25" disabled>25 Year</option>
                                    <option value="26" disabled>26 Year</option>
                                    <option value="27" disabled>27 Year</option>
                                    <option value="28" disabled>28 Year</option>
                                    <option value="29" disabled>29 Year</option>
                                    <option value="30" disabled selected>30 Year</option>
                                    <option value="31" disabled>31 Year</option>
                                    <option value="32" disabled>32 Year</option>
                                    <option value="33" disabled>33 Year</option>
                                    <option value="34" disabled>34 Year</option>
                                    <option value="35" disabled>35 Year</option>
                                    <option value="36">36 Year</option>
                                    <option value="37">37 Year</option>
                                    <option value="38">38 Year</option>
                                    <option value="39">39 Year</option>
                                    <option value="40">40 Year</option>
                                    <option value="41">41 Year</option>
                                    <option value="42">42 Year</option>
                                    <option value="43">43 Year</option>
                                    <option value="44">44 Year</option>
                                    <option value="45">45 Year</option>
                                    <option value="46">46 Year</option>
                                    <option value="47">47 Year</option>
                                    <option value="48">48 Year</option>
                                    <option value="49">49 Year</option>
                                    <option value="50">50 Year</option>
                                    <option value="51">51 Year</option>
                                    <option value="52">52 Year</option>
                                    <option value="53">53 Year</option>
                                    <option value="54">54 Year</option>
                                    <option value="55">55 Year</option>
                                    <option value="56">56 Year</option>
                                    <option value="57">57 Year</option>
                                    <option value="58">58 Year</option>
                                    <option value="59">59 Year</option>
                                    <option value="60">60 Year</option>
                                    <option value="60+">60+ Year</option>
                                </select>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="height_from">Height</label>
                                <select class="form-control" id="height_from" name="height_from" required>
                                    <option value="" disabled selected>Select Your Height</option>
                                    <option value="4ft">4ft</option>
                                    <option value="5ft">5ft</option>
                                    <option value="6ft">6ft</option>
                                    <option value="7ft">7ft</option>
                                    <option value="8ft">8ft</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid height range.
                                </div>
                            </div>
                            <div class="form-group col-md-3">

                                <label for="height_to">To</label>
                                <select class="form-control" id="height_to" name="height_to" required>
                                    <option value="" disabled selected>Select Your Height to</option>
                                    <option value="5ft">5ft</option>
                                    <option value="6ft">6ft</option>
                                    <option value="7ft">7ft</option>
                                    <option value="8ft">8ft</option>
                                    <option value="9ft">9ft</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid height range.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="looking_for">Looking For</label>
                                <select class="form-control" id="looking_for" name="looking_for" required>
                                    <option value="" disabled selected>Select Your Looking For</option>
                                    <option value="Does Not Matter">Does Not Matter
                                    </option>
                                    <option value="Never Married">Never Married
                                    </option>
                                    <option value="Widower">Widower
                                    </option>
                                    <option value="Widow">Widow
                                    </option>
                                    <option value="Divorced">Divorced
                                    </option>
                                    <option value="Awaiting Divorce">Awaiting Divorce
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="par_physical_status">Physical Status</label>
                                <select class="form-control" id="par_physical_status" name="par_physical_status" required>
                                    <option value="" disabled selected>Select Your Looking For</option>
                                    <option value="Normal">
                                        Normal
                                    </option>
                                    <option value="Physically challenged">
                                        Physically challenged
                                    </option>
                                    <option value="Does Not Matter">
                                        Does Not Matter
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_eating_habits">Eating Habits</label>
                                <select class="form-control" id="par_eating_habits" name="par_eating_habits" required>
                                    <option value="" disabled selected>Select Your eatingHabits</option>
                                    <option value="Does Not Matter">Does Not Matter</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Non Vegetarian">Non Vegetarian</option>
                                    <option value="Eggetarian">Eggetarian</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="par_smoking_habits">Smoking Habits</label>
                                <select class="form-control" id="smoking_habits" name="par_smoking_habits" required>
                                    <option value="" disabled selected>Select Your Smoking Habits</option>
                                    <option value="Does Not Matter">
                                        Does Not Matter
                                    </option>
                                    <option value="No">
                                        No
                                    </option>
                                    <option value="Smokes Occasionally">
                                        Smokes Occasionally
                                    </option>
                                    <option value="Smokes Regularly">
                                        Smokes Regularly
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_drinking_habits">Drinking Habits</label>
                                <select class="form-control" id="par_drinking_habits" name="par_drinking_habits" required>
                                    <option value="" disabled selected>Select Your Drinking Habits</option>
                                    <option value="Does Not Matter">Does Not Matter</option>
                                    <option value="No">Never Drinks</option>
                                    <option value="Drinks Socially">Drinks Socially</option>
                                    <option value="Drinks Regularly">Drinks Regularly</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"> <i class="fas fa-star"></i> Religion Preference </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_religion">Religion</label>
                                <select class="form-control" id="par_religion" name="par_religion" required>
                                    <option value="" disabled selected>Select Your Religion</option>

                                    <option value="hindu">Hindu</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="christian">Christian</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="par_caste">Caste</label>
                                <select class="form-control" id="par_caste" name="par_caste" required>
                                    <option value="" disabled selected>Select Your Caste</option>

                                    <option value="oc">OC</option>
                                    <option value="bc">BC</option>
                                    <option value="sc">SC</option>
                                    <option value="st">ST</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="motherTongue">Mother Tongue</label>
                                <input type="text" class="form-control" id="par_mother_tongue" name="par_mother_tongue" placeholder="Enter Mother Tongue" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="par_doshTypes">Dosh Type</label>
                                <select class="form-control" id="par_doshTypes" name="par_doshTypes" required>
                                    <option value="" disabled selected>Select Dosh Type</option>
                                    <option value="Default Dosh">Default Dosh</option>
                                    <option value="Kaal Sarp Dosh">Kaal Sarp Dosh</option>
                                    <option value="Pitru Dosh">Pitru Dosh</option>
                                    <option value="Nadi Dosh">Nadi Dosh</option>
                                    <option value="Guru Chandal Dosh">Guru Chandal Dosh</option>
                                    <option value="Grahan Dosh">Grahan Dosh</option>
                                    <option value="Gandamool Dosh">Gandamool Dosh</option>
                                    <option value="Shani Dosh">Shani Dosh</option>
                                    <option value="Shrapit Dosh">Shrapit Dosh</option>
                                    <option value="Chandra Dosh">Chandra Dosh</option>
                                    <option value="Kemadruma dosh">Kemadruma dosh</option>
                                </select>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_stars">Star</label>
                                <select class="form-control" id="par_stars" name="par_stars" required>
                                    <option value="" disabled selected>Select Your Star</option>
                                    <option value="Bharani">Bharani</option>
                                    <option value="Krittika">Krittika</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="Mrigashira">Mrigashira</option>
                                    <option value="Ardra">Ardra</option>
                                    <option value="Punarvasu">Punarvasu</option>
                                    <option value="Pushyaa">Pushyaa</option>
                                    <option value="Ashlesha">Ashlesha</option>
                                    <option value="Magha">Magha</option>
                                    <option value="Purva Phalguni">Purva Phalguni</option>
                                    <option value="Uttara Phalguni">Uttara Phalguni</option>
                                    <option value="Hasta">Hasta</option>
                                    <option value="Chitra">Chitra</option>
                                    <option value="Swati">Swati</option>
                                    <option value="Anuradha">Anuradha</option>
                                    <option value="Jyeshtha">Jyeshtha</option>
                                    <option value="Mula">Mula</option>
                                    <option value="Purva Ashadha">Purva Ashadha</option>
                                    <option value="Uttara Ashadha">Uttara Ashadha</option>
                                    <option value="Abhijit">Abhijit</option>
                                    <option value="Shravana">Shravana</option>
                                    <option value="Dhanishta">Dhanishta</option>
                                    <option value="Shatabhisha">Shatabhisha</option>
                                    <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                                    <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                                    <option value="Revati">Revati</option>
                                    <option value="Vishakha">Vishakha</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"> <i class="fas fa-globe"></i> Location Preference </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_country_living_in">Country Living In</label>
                                <select class="form-control" id="par_country_living_in" name="par_country_living_in" required>
                                    <option value="" disabled selected>Select Your countryLivingIn</option>
                                    <option value="india">India</option>
                                    <option value="usa">USA</option>
                                    <option value="australia">Australia</option>
                                    <option value="japan">Japan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="par_state_living_in">State Living In</label>
                                <select class="form-control" id="par_state_living_in" name="par_state_living_in" required>
                                    <option value="" disabled selected>Select Your State LivingIn</option>
                                    <option value="AP">Andhra Pradesh (AP)</option>
                                    <option value="TS">Telangana (TS)</option>
                                    <option value="KA">Karnataka (KA)</option>
                                    <option value="UP">Uttar Pradesh (UP)</option>
                                    <option value="MP">Madhya Pradesh (MP)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_city_living_in">City Living In</label>
                                <select class="form-control" id="par_city_living_in" name="par_city_living_in" required>
                                    <option value="" disabled selected>Select Your city LivingIn</option>
                                    <option value="guntur">Guntur</option>
                                    <option value="hyderabad">Hyderabad</option>
                                    <option value="vizag">Visakhapatnam (Vizag)</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title"><i class="fas fa-briefcase"></i> Education & occupation Preference </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_education">Education</label>
                                <select class="form-control" id="par_education" name="par_education" required>
                                    <option value="" disabled selected>Select Education</option>
                                    <option value="Does Not Matter">Does Not Matter</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Software">Software</option>
                                    <option value="Degree">Degree</option>
                                    <option value="B Plan">B Plan</option>
                                    <option value="B Arch">B Arch</option>
                                    <option value="BE">BE</option>
                                    <option value="B Tech">B Tech</option>
                                    <option value="BSc Computer Science">BSc Computer Science</option>
                                    <option value="BSc IT">BSc IT</option>
                                    <option value="B Phil">B Phil</option>
                                    <option value="B Com">B Com</option>
                                    <option value="BA">BA</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BLIS">BLIS</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BMM (MASS MEDIA)">BMM (MASS MEDIA)</option>
                                    <option value="BEd">BEd</option>
                                    <option value="MEd">MEd</option>
                                    <option value="BHM">BHM</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                    <option value="ME">ME</option>
                                    <option value="M Arch">M Arch</option>
                                    <option value="MCA">MCA</option>
                                    <option value="PGDCA">PGDCA</option>
                                    <option value="M Tech">M Tech</option>
                                    <option value="MSc Computer Science">MSc Computer Science</option>
                                    <option value="MSc IT">MSc IT</option>
                                    <option value="M Phil">M Phil</option>
                                    <option value="M Com">M Com</option>
                                    <option value="M Sc">M Sc</option>
                                    <option value="MA">MA</option>
                                    <option value="MLIS">MLIS</option>
                                    <option value="MSW">MSW</option>
                                    <option value="MHM">MHM</option>
                                    <option value="MBA">MBA</option>
                                    <option value="PGDM">PGDM</option>
                                    <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                                    <option value="MCh - Master Of Chirurgiae">MCh - Master Of Chirurgiae</option>
                                    <option value="DM - Doctorate Of Medicine">DM - Doctorate Of Medicine</option>
                                    <option value="BDS">BDS</option>
                                    <option value="MDS">MDS</option>
                                    <option value="BHMS">BHMS</option>
                                    <option value="MHMS">MHMS</option>
                                    <option value="BAMS">BAMS</option>
                                    <option value="MAMS">MAMS</option>
                                    <option value="Bachelor Of Veterinary Science">Bachelor Of Veterinary Science</option>
                                    <option value="Master Of Veterinary Science">Master Of Veterinary Science</option>
                                    <option value="Degree In Medicine">Degree In Medicine</option>
                                    <option value="Master In Medicine">Master In Medicine</option>
                                    <option value="BPT">BPT</option>
                                    <option value="MPT">MPT</option>
                                    <option value="B.Pharm">B.Pharm</option>
                                    <option value="M.Pharm">M.Pharm</option>
                                    <option value="BSc Nursing">BSc Nursing</option>
                                    <option value="MSc Nursing">MSc Nursing</option>
                                    <option value="Diploma In Nursing">Diploma In Nursing</option>
                                    <option value="Medical Laboratory Technology">Medical Laboratory Technology</option>
                                    <option value="BGL">BGL</option>
                                    <option value="Bachelor Of Law">Bachelor Of Law</option>
                                    <option value="LLB">LLB</option>
                                    <option value="Master Of Law">Master Of Law</option>
                                    <option value="LLM">LLM</option>
                                    <option value="CA Inter">CA Inter</option>
                                    <option value="CA Final">CA Final</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="Company Secretary (CS)">Company Secretary (CS)</option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                    <option value="Ph D">Ph D</option>
                                    <option value="IAS">IAS</option>
                                    <option value="IPS">IPS</option>
                                    <option value="IRS">IRS</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Polytechnic">Polytechnic</option>
                                    <option value="High School">High School</option>
                                    <option value="Less Than High School">Less Than High School</option>
                                    <option value="Other Education">Other Education</option>
                                </select>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="par_occupation">Occupation</label>
                                <select class="form-control" id="par_occupation" name="par_occupation" required>
                                    <option value="" disabled selected>Select Occupation</option>
                                    <option value="Does Not Matter">Does Not Matter</option>
                                    <option value="Civil Engineer">Civil Engineer</option>
                                    <option value="Clerical Official">Clerical Official</option>
                                    <option value="Commercial Pilot">Commercial Pilot</option>
                                    <option value="Company Secretary">Company Secretary</option>
                                    <option value="Computer Professional">Computer Professional</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Contractor">Contractor</option>
                                    <option value="Cost Accountant">Cost Accountant</option>
                                    <option value="Creative Person">Creative Person</option>
                                    <option value="Customer Support Professional">Customer Support Professional</option>
                                    <option value="Defense Employee">Defense Employee</option>
                                    <option value="Dentist">Dentist</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Economist">Economist</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Engineer (Mechanical)">Engineer (Mechanical)</option>
                                    <option value="Engineer (Project)">Engineer (Project)</option>
                                    <option value="Entertainment Professional">Entertainment Professional</option>
                                    <option value="Event Manager">Event Manager</option>
                                    <option value="Executive">Executive</option>
                                    <option value="Factory worker">Factory worker</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Fashion Designer">Fashion Designer</option>
                                    <option value="Finance Professional">Finance Professional</option>
                                    <option value="Flight Attendant">Flight Attendant</option>
                                    <option value="Government Employee">Government Employee</option>
                                    <option value="Health Care Professional">Health Care Professional</option>
                                    <option value="Home Maker">Home Maker</option>
                                    <option value="Hotel & Restaurant Professional">Hotel & Restaurant Professional</option>
                                    <option value="Human Resources Professional">Human Resources Professional</option>
                                    <option value="Interior Designer">Interior Designer</option>
                                    <option value="Investment Professional">Investment Professional</option>
                                    <option value="IT / Telecom Professional">IT / Telecom Professional</option>
                                    <option value="Journalist">Journalist</option>
                                    <option value="Lawyer">Lawyer</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Legal Professional">Legal Professional</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Marketing Professional">Marketing Professional</option>
                                    <option value="Media Professional">Media Professional</option>
                                    <option value="Medical Professional">Medical Professional</option>
                                    <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                    <option value="Merchant Naval Officer">Merchant Naval Officer</option>
                                    <option value="Not Working">Not Working</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Occupational Therapist">Occupational Therapist</option>
                                    <option value="Optician">Optician</option>
                                    <option value="Others">Others</option>
                                    <option value="Pharmacist">Pharmacist</option>
                                    <option value="Physician Assistant">Physician Assistant</option>
                                    <option value="Physicist">Physicist</option>
                                    <option value="Physiotherapist">Physiotherapist</option>
                                    <option value="Pilot">Pilot</option>
                                    <option value="Politician">Politician</option>
                                    <option value="Production professional">Production professional</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Psychologist">Psychologist</option>
                                    <option value="Public Relations Professional">Public Relations Professional</option>
                                    <option value="Real Estate Professional">Real Estate Professional</option>
                                    <option value="Research Scholar">Research Scholar</option>
                                    <option value="Retail Professional">Retail Professional</option>
                                    <option value="Retired Person">Retired Person</option>
                                    <option value="Sales Professional">Sales Professional</option>
                                    <option value="Scientist">Scientist</option>
                                    <option value="Self-employed Person">Self-employed Person</option>
                                    <option value="Social Worker">Social Worker</option>
                                    <option value="Software Consultant">Software Consultant</option>
                                    <option value="Sportsman">Sportsman</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Technician">Technician</option>
                                    <option value="Training Professional">Training Professional</option>
                                    <option value="Transportation Professional">Transportation Professional</option>
                                    <option value="Veterinary Doctor">Veterinary Doctor</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Writer">Writer</option>
                                    <option value="Zoologist">Zoologist</option>
                                </select>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="par_annualIncomes">Annual Income</label>
                                <select class="form-control" id="par_annualIncomes" name="par_annualIncomes" required>
                                    <option value="" disabled selected>Select Your Annual Income</option>
                                    <option value="Does Not Matter">Does Not Matter</option>
                                    <option value="50,000">50,000</option>
                                    <option value="1,00,000">1,00,000</option>
                                    <option value="2,00,000">2,00,000</option>
                                    <option value="3,00,000">3,00,000</option>
                                    <option value="4,00,000">4,00,000</option>
                                    <option value="5,00,000">5,00,000</option>
                                    <option value="6,00,000">6,00,000</option>
                                    <option value="7,00,000">7,00,000</option>
                                    <option value="8,00,000">8,00,000</option>
                                    <option value="9,00,000">9,00,000</option>
                                    <option value="10,00,000">10,00,000</option>
                                    <option value="11,00,000">11,00,000</option>
                                    <option value="12,00,000">12,00,000</option>
                                    <option value="13,00,000">13,00,000</option>
                                    <option value="14,00,000">14,00,000</option>
                                    <option value="15,00,000">15,00,000</option>
                                </select>

                            </div>
                        </div>

                        <input type="submit" class="custom-button" name="educationOccupationSubmit" value="Submit">
                    </div>

                </div>
            </form>
        </div>

        <!-- Include Bootstrap JS (optional) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script>
            function previewImage(input, placeholderId) {
                const preview = document.querySelector(`#${placeholderId}`);
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.style.backgroundImage = `url('${e.target.result}')`;
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.style.backgroundImage = 'none';
                }
            }
        </script>

        <script>
            function validateMemberDetailsForm() {
                var form = document.getElementById("memberDetailsForm");
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    form.classList.add('was-validated');
                    return false;
                }
                form.classList.add('was-validated');
                return true;
            }
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script>
            const casteData = {
                hindu: ["Brahmin", "Kshatriya", "Vaishya", "Reddy", "Kayastha", "Rajput", "Bania", "Agarwal", "Gupta"],
                muslim_sunni: ["Sunni 1", "Sunni 2"],
                muslim_shia: ["Shia 1", "Shia 2"],
                muslim_others: ["Muslim Other 1", "Muslim Other 2"],
                christian: ["Catholic", "Protestant"],
                sikh: ["Sikh Caste 1", "Sikh Caste 2"],
                jain: ["Jain Caste 1", "Jain Caste 2"],
                jain_digambar: ["Digambar Caste 1", "Digambar Caste 2"],
                buddhist: ["Buddhist Caste 1", "Buddhist Caste 2"],
                jewish: ["Jewish Caste 1", "Jewish Caste 2"]
            };

            const subcasteData = {
                Brahmin: ["Gaur", "Saraswat", "Maithil", "Deshastha"],
                Kshatriya: ["Rajput", "Maratha"],
                Vaishya: ["Agarwal", "Gupta"],
                Reddy: ["kapu Reddy", "others"],
                Kayastha: ["Srivastava", "Nigam"],
                Rajput: ["Sisodia", "Rathore"],
                Bania: ["Agarwal", "Maheshwari"],
                Agarwal: ["Goel", "Mittal"],
                Gupta: ["Kesarwani", "Subcaste 2"],
                "Sunni 1": ["Subcaste 1", "Subcaste 2"],
                "Sunni 2": ["Subcaste 1", "Subcaste 2"],
                "Shia 1": ["Subcaste 1", "Subcaste 2"],
                "Shia 2": ["Subcaste 1", "Subcaste 2"],
                "Muslim Other 1": ["Subcaste 1", "Subcaste 2"],
                "Muslim Other 2": ["Subcaste 1", "Subcaste 2"],
                Catholic: ["Subcaste 1", "Subcaste 2"],
                Protestant: ["Subcaste 1", "Subcaste 2"],
                "Sikh Caste 1": ["Subcaste 1", "Subcaste 2"],
                "Sikh Caste 2": ["Subcaste 1", "Subcaste 2"],
                "Jain Caste 1": ["Subcaste 1", "Subcaste 2"],
                "Jain Caste 2": ["Subcaste 1", "Subcaste 2"],
                "Digambar Caste 1": ["Subcaste 1", "Subcaste 2"],
                "Digambar Caste 2": ["Subcaste 1", "Subcaste 2"],
                "Buddhist Caste 1": ["Subcaste 1", "Subcaste 2"],
                "Buddhist Caste 2": ["Subcaste 1", "Subcaste 2"],
                "Jewish Caste 1": ["Subcaste 1", "Subcaste 2"],
                "Jewish Caste 2": ["Subcaste 1", "Subcaste 2"]
            };

            function populateCaste() {
                const religionSelect = document.getElementById('religion');
                const casteSelect = document.getElementById('caste');
                const subcasteSelect = document.getElementById('subcaste');

                const selectedReligion = religionSelect.value;

                // Clear previous options
                casteSelect.innerHTML = '<option value="" disabled selected>Select Caste</option>';
                subcasteSelect.innerHTML = '<option value="" disabled selected>Select Subcaste</option>';

                if (selectedReligion && casteData[selectedReligion]) {
                    casteData[selectedReligion].forEach(caste => {
                        const option = document.createElement('option');
                        option.value = caste;
                        option.text = caste;
                        casteSelect.appendChild(option);
                    });
                }
            }

            function populateSubcaste() {
                const casteSelect = document.getElementById('caste');
                const subcasteSelect = document.getElementById('subcaste');

                const selectedCaste = casteSelect.value;

                // Clear previous options
                subcasteSelect.innerHTML = '<option value="" disabled selected>Select Subcaste</option>';

                if (selectedCaste && subcasteData[selectedCaste]) {
                    subcasteData[selectedCaste].forEach(subcaste => {
                        const option = document.createElement('option');
                        option.value = subcaste;
                        option.text = subcaste;
                        subcasteSelect.appendChild(option);
                    });
                }
            }
        </script>
        <script>
            function populateStates() {
                var countrySelect = document.getElementById('inputCountry');
                var stateSelect = document.getElementById('inputState');
                var indiaStates = ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttarakhand', 'Uttar Pradesh', 'West Bengal'];
                var usaStates = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

                stateSelect.innerHTML = '<option value="">Select State</option>';

                if (countrySelect.value === 'India') {
                    indiaStates.forEach(function(state) {
                        var option = document.createElement('option');
                        option.textContent = state;
                        option.value = state;
                        stateSelect.appendChild(option);
                    });
                } else if (countrySelect.value === 'USA') {
                    usaStates.forEach(function(state) {
                        var option = document.createElement('option');
                        option.textContent = state;
                        option.value = state;
                        stateSelect.appendChild(option);
                    });
                }
            }

            function populateCities() {
                var stateSelect = document.getElementById('inputState');
                var citySelect = document.getElementById('inputCity');
                var selectedState = stateSelect.value;
                citySelect.innerHTML = '<option value="">Select City</option>';

                if (selectedState === 'Andhra Pradesh') {
                    var apCities = ['Visakhapatnam', 'Vijayawada', 'Guntur', 'Nellore', 'Kurnool', 'Rajahmundry', 'Tirupati', 'Kadapa', 'Kakinada'];
                    apCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Arunachal Pradesh') {
                    var arPrCities = ['Itanagar', 'Naharlagun', 'Pasighat', 'Namsai', 'Tezu', 'Ziro', 'Bomdila', 'Tawang', 'Khonsa'];
                    arPrCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Assam') {
                    var assamCities = ['Guwahati', 'Dibrugarh', 'Silchar', 'Jorhat', 'Tezpur', 'Tinsukia', 'Nagaon', 'Bongaigaon', 'Sivasagar', 'Barpeta'];
                    assamCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Bihar') {
                    var biharCities = ['Patna', 'Gaya', 'Bhagalpur', 'Muzaffarpur', 'Purnia', 'Darbhanga', 'Ara', 'Begusarai', 'Katihar', 'Chapra'];
                    biharCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Chhattisgarh') {
                    var chhattisgarhCities = ['Raipur', 'Bhilai', 'Bilaspur', 'Korba', 'Durg', 'Raigarh', 'Jagdalpur'];
                    chhattisgarhCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Goa') {
                    var goaCities = ['Panaji', 'Margao', 'Vasco da Gama', 'Mapusa', 'Ponda'];
                    goaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Gujarat') {
                    var gujaratCities = ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Bhavnagar', 'Jamnagar', 'Junagadh', 'Gandhinagar', 'Anand'];
                    gujaratCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Haryana') {
                    var haryanaCities = ['Chandigarh', 'Faridabad', 'Gurugram', 'Panipat', 'Ambala', 'Yamunanagar', 'Rohtak', 'Hisar', 'Karnal'];
                    haryanaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Himachal Pradesh') {
                    var hpCities = ['Shimla', 'Manali', 'Dharamshala', 'Solan', 'Mandi', 'Kullu', 'Bilaspur', 'Hamirpur', 'Kangra'];
                    hpCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Jharkhand') {
                    var jharkhandCities = ['Ranchi', 'Jamshedpur', 'Dhanbad', 'Bokaro', 'Deoghar', 'Hazaribagh', 'Giridih', 'Ramgarh'];
                    jharkhandCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Karnataka') {
                    var karnatakaCities = ['Bengaluru', 'Mysuru', 'Hubballi-Dharwad', 'Mangaluru', 'Belagavi', 'Davangere', 'Ballari', 'Shivamogga', 'Tumakuru'];
                    karnatakaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Kerala') {
                    var keralaCities = ['Thiruvananthapuram', 'Kochi', 'Kozhikode', 'Kollam', 'Thrissur', 'Palakkad', 'Alappuzha', 'Malappuram', 'Kottayam'];
                    keralaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Madhya Pradesh') {
                    var mpCities = ['Bhopal', 'Indore', 'Gwalior', 'Jabalpur', 'Ujjain', 'Sagar', 'Ratlam', 'Satna', 'Rewa'];
                    mpCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Maharashtra') {
                    var mhCities = ['Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Aurangabad', 'Solapur', 'Amravati', 'Kolhapur', 'Akola'];
                    mhCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Manipur') {
                    var manipurCities = ['Imphal', 'Thoubal', 'Bishnupur', 'Churachandpur', 'Kakching', 'Senapati', 'Ukhrul', 'Moreh'];
                    manipurCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Meghalaya') {
                    var meghalayaCities = ['Shillong', 'Tura', 'Nongpoh', 'Jowai', 'Baghmara', 'Nongstoin', 'Williamnagar'];
                    meghalayaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Mizoram') {
                    var mizoramCities = ['Aizawl', 'Lunglei', 'Champhai', 'Serchhip', 'Kolasib', 'Lawngtlai', 'Saiha'];
                    mizoramCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Nagaland') {
                    var nagalandCities = ['Kohima', 'Dimapur', 'Mokokchung', 'Tuensang', 'Wokha', 'Zunheboto', 'Mon', 'Phek'];
                    nagalandCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Odisha') {
                    var odishaCities = ['Bhubaneswar', 'Cuttack', 'Rourkela', 'Berhampur', 'Sambalpur', 'Puri', 'Balasore', 'Baripada', 'Bhadrak'];
                    odishaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Punjab') {
                    var punjabCities = ['Amritsar', 'Ludhiana', 'Jalandhar', 'Patiala', 'Bathinda', 'Hoshiarpur', 'Mohali', 'Pathankot', 'Moga'];
                    punjabCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Rajasthan') {
                    var rajasthanCities = ['Jaipur', 'Jodhpur', 'Udaipur', 'Kota', 'Bikaner', 'Ajmer', 'Alwar', 'Bhilwara', 'Sikar'];
                    rajasthanCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Sikkim') {
                    var sikkimCities = ['Gangtok', 'Namchi', 'Gyalshing', 'Mangan', 'Singtam', 'Rangpo', 'Jorethang'];
                    sikkimCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Tamil Nadu') {
                    var tnCities = ['Chennai', 'Coimbatore', 'Madurai', 'Tiruchirappalli', 'Salem', 'Tirunelveli', 'Erode', 'Vellore', 'Thoothukudi'];
                    tnCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Telangana') {
                    var telanganaCities = ['Hyderabad', 'Warangal', 'Nizamabad', 'Khammam', 'Karimnagar', 'Ramagundam', 'Mahbubnagar', 'Nalgonda', 'Adilabad'];
                    telanganaCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Tripura') {
                    var tripuraCities = ['Agartala', 'Udaipur', 'Kailasahar', 'Dharmanagar', 'Khowai', 'Belonia', 'Ambassa'];
                    tripuraCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Uttarakhand') {
                    var uttarakhandCities = ['Dehradun', 'Haridwar', 'Roorkee', 'Haldwani', 'Rudrapur', 'Kashipur', 'Rishikesh', 'Nainital', 'Pithoragarh'];
                    uttarakhandCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'Uttar Pradesh') {
                    var upCities = ['Lucknow', 'Kanpur', 'Ghaziabad', 'Agra', 'Varanasi', 'Meerut', 'Prayagraj', 'Bareilly', 'Aligarh'];
                    upCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else if (selectedState === 'West Bengal') {
                    var wbCities = ['Kolkata', 'Howrah', 'Durgapur', 'Asansol', 'Siliguri', 'Bardhaman', 'Malda', 'Baharampur', 'Kharagpur'];
                    wbCities.forEach(function(city) {
                        var option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                }


            }
        </script>

        <script>
            // JavaScript to trigger Bootstrap form validation
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>

        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/apexcharts.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/chart-init.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Function to validate if at least one photo is selected
            function validatePhotos() {
                var photoInputs = document.querySelectorAll('.photo-input input[type="file"]');
                var atLeastOnePhotoSelected = false;
                for (var i = 0; i < photoInputs.length; i++) {
                    if (photoInputs[i].files.length > 0) {
                        atLeastOnePhotoSelected = true;
                        break;
                    }
                }
                if (!atLeastOnePhotoSelected) {

                    alert("Please select at least one photo.");
                    return false;
                }
                return true;
            }
        </script>




        <script>
            function savePhotos() {
                // Submit the form for uploading photos
                document.getElementById("uploadPhotosForm").submit();
            }

            function validateImages() {
                // Add image validation logic here if needed
                return true; // Return true for now
            }

            function previewImage(input, placeholderId) {
                // Image preview logic
                var preview = document.getElementById(placeholderId);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        preview.style.backgroundImage = "url(" + e.target.result + ")";
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <script>
            // Custom validation for date of birth
            var dobInput = document.getElementById('dob');
            dobInput.addEventListener('input', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = today.getFullYear() - dob.getFullYear();
                if (age < 18) {
                    this.setCustomValidity("You must be at least 18 years old.");
                } else {
                    this.setCustomValidity('');
                }
            });

            // Custom validation for age range
            var ageFromInput = document.getElementById('age_from');
            var ageToInput = document.getElementById('age_to');

            ageFromInput.addEventListener('change', validateAgeRange);
            ageToInput.addEventListener('change', validateAgeRange);

            function validateAgeRange() {
                var ageFrom = parseInt(ageFromInput.value);
                var ageTo = parseInt(ageToInput.value);

                if (ageFrom >= ageTo) {
                    ageFromInput.setCustomValidity("Age From must be less than Age To.");
                    ageToInput.setCustomValidity("Age To must be greater than Age From.");
                } else {
                    ageFromInput.setCustomValidity("");
                    ageToInput.setCustomValidity("");
                }
            }

            // Custom validation for height range
            var heightFromInput = document.getElementById('height_from');
            var heightToInput = document.getElementById('height_to');

            heightFromInput.addEventListener('change', validateHeightRange);
            heightToInput.addEventListener('change', validateHeightRange);

            function validateHeightRange() {
                var heightFrom = parseInt(heightFromInput.value);
                var heightTo = parseInt(heightToInput.value);

                if (heightFrom >= heightTo) {
                    heightFromInput.setCustomValidity("Height From must be less than Height To.");
                    heightToInput.setCustomValidity("Height To must be greater than Height From.");
                } else {
                    heightFromInput.setCustomValidity("");
                    heightToInput.setCustomValidity("");
                }
            }

            // Custom validation for password matching and format
            var passwordInput = document.getElementById('password');
            var confirmPasswordInput = document.getElementById('confirmPassword');

            passwordInput.addEventListener('input', validatePasswordMatchAndFormat);
            confirmPasswordInput.addEventListener('input', validatePasswordMatchAndFormat);

            function validatePasswordMatchAndFormat() {
                var password = passwordInput.value;
                var confirmPassword = confirmPasswordInput.value;

                // Check if passwords match
                if (password !== confirmPassword) {
                    confirmPasswordInput.setCustomValidity("Passwords don't match");
                } else {
                    confirmPasswordInput.setCustomValidity('');
                }

                // Check password format using regular expression
                var passwordFormatRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                if (!passwordFormatRegex.test(password)) {
                    passwordInput.setCustomValidity("Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one numeric digit, and one special character.");
                } else {
                    passwordInput.setCustomValidity('');
                }
            }

            // Bootstrap validation
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>



        <script>
            function previewImage(input, previewId) {
                var preview = document.getElementById(previewId);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        preview.style.backgroundImage = "url('" + e.target.result + "')";
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.style.backgroundImage = "none";
                }
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#passwordChangeForm').submit(function(event) {
                    var mobileNumber = $('#mobile').val();

                    // Check if the mobile number already exists in the database
                    $.ajax({
                        type: 'POST',
                        url: 'check_mobile.php', // Specify the URL of your server-side script to check mobile number
                        data: {
                            mobile: mobileNumber
                        },
                        success: function(response) {
                            if (response === 'exists') {
                                $('#mobile').addClass('is-invalid');
                                $('#mobile').siblings('.invalid-feedback').text('Mobile number already exists.');
                            } else {
                                $('#mobile').removeClass('is-invalid');
                                $('#mobile').addClass('is-valid');
                                $('#passwordChangeForm').unbind('submit').submit(); // If mobile number doesn't exist, allow form submission
                            }
                        }
                    });

                    // Prevent form submission
                    event.preventDefault();
                });
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function onNextClick(nextTabId) {
                // Perform validation based on the current tab content
                var currentTabContent = $('.tab-pane.active');
                var isValid = validate(currentTabContent);

                // If validation passes, switch to the next tab
                if (isValid) {
                    $('#' + nextTabId).tab('show');
                }
            }

            function validate(tabContent) {
                // Example validation logic for the current tab content
                var inputs = tabContent.find('input, textarea');
                var isValid = true;

                inputs.each(function() {
                    if (!$(this)[0].checkValidity()) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                return isValid;
            }
        </script>


</body>

</html>