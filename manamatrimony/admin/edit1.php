<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

include "db.php";

// Step 2: Retrieve user details based on ID
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Fetch user details from the database
    $sql = "SELECT * FROM user_profiles WHERE id = $user_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

// Step 3: Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $profileCreatedBy = $_POST["profileCreatedBy"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $maritalStatus = $_POST["maritalStatus"];
    $mother = $_POST["mother"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $religion = $_POST["religion"];
    $caste = $_POST["caste"];
    $subcaste = $_POST["subcaste"];
    $willingToMarryOtherCaste = isset($_POST["willingToMarryOtherCaste"]) ? $_POST["willingToMarryOtherCaste"] : "off";
    $highestEducation = isset($_POST["highestEducation"]) ? $_POST["highestEducation"] : "";
    $additionalDegree = isset($_POST["additionalDegree"]) ? $_POST["additionalDegree"] : "";
    $employedIn = isset($_POST["employedIn"]) ? $_POST["employedIn"] : "";
    $occupation = isset($_POST["occupation"]) ? $_POST["occupation"] : "";
    $annualIncome = isset($_POST["annualIncome"]) ? $_POST["annualIncome"] : "";
    $familyType = isset($_POST["familyType"]) ? $_POST["familyType"] : "";
    $familyValue = isset($_POST["familyValue"]) ? $_POST["familyValue"] : "";
    $familyStatus = isset($_POST["familyStatus"]) ? $_POST["familyStatus"] : "";
    $fatherOccupation = isset($_POST["fatherOccupation"]) ? $_POST["fatherOccupation"] : "";
    $motherOccupation = isset($_POST["motherOccupation"]) ? $_POST["motherOccupation"] : "";
    $numBrothers = isset($_POST["numBrothers"]) ? $_POST["numBrothers"] : "";
    $numMarriedBrothers = isset($_POST["numMarriedBrothers"]) ? $_POST["numMarriedBrothers"] : "";
    $numSisters = isset($_POST["numSisters"]) ? $_POST["numSisters"] : "";
    $numMarriedSisters = isset($_POST["numMarriedSisters"]) ? $_POST["numMarriedSisters"] : "";
    $inputCountry = isset($_POST["inputCountry"]) ? $_POST["inputCountry"] : "";
    $inputState = isset($_POST["inputState"]) ? $_POST["inputState"] : "";
    $inputCity = isset($_POST["inputCity"]) ? $_POST["inputCity"] : "";
    $diet = isset($_POST["diet"]) ? $_POST["diet"] : "";
    $smokingHabits = isset($_POST["smokingHabits"]) ? $_POST["smokingHabits"] : "";
    $drinkingHabits = isset($_POST["drinkingHabits"]) ? $_POST["drinkingHabits"] : "";
    $bodyType = isset($_POST["bodyType"]) ? $_POST["bodyType"] : "";
    $complexion = isset($_POST["complexion"]) ? $_POST["complexion"] : "";
    $physicalStatus = isset($_POST["physicalStatus"]) ? $_POST["physicalStatus"] : "";
    $doshType = isset($_POST["doshType"]) ? $_POST["doshType"] : "";
    $star = isset($_POST["star"]) ? $_POST["star"] : "";
    $raasi = isset($_POST["raasi"]) ? $_POST["raasi"] : "";
    $birthTime = isset($_POST["birthTime"]) ? $_POST["birthTime"] : "";
    $birthPlace = isset($_POST["birthPlace"]) ? $_POST["birthPlace"] : "";
    $additionalInfo = isset($_POST["additionalInfo"]) ? $_POST["additionalInfo"] : "";
    
    // Update query
    $sql = "UPDATE user_profiles SET 
            firstName='$firstName', 
            lastName='$lastName', 
            dob='$dob', 
            gender='$gender', 
            profileCreatedBy='$profileCreatedBy', 
            email='$email', 
            mobile='$mobile', 
            maritalStatus='$maritalStatus', 
            mother='$mother', 
            password='$password', 
            confirmPassword='$confirmPassword', 
            religion='$religion', 
            caste='$caste', 
            subcaste='$subcaste', 
            willingToMarryOtherCaste='$willingToMarryOtherCaste', 
            highestEducation='$highestEducation', 
            additionalDegree='$additionalDegree', 
            employedIn='$employedIn', 
            occupation='$occupation', 
            annualIncome='$annualIncome', 
            familyType='$familyType', 
            familyValue='$familyValue', 
            familyStatus='$familyStatus', 
            fatherOccupation='$fatherOccupation', 
            motherOccupation='$motherOccupation', 
            numBrothers='$numBrothers', 
            numMarriedBrothers='$numMarriedBrothers', 
            numSisters='$numSisters', 
            numMarriedSisters='$numMarriedSisters', 
            inputCountry='$inputCountry', 
            inputState='$inputState', 
            inputCity='$inputCity', 
            diet='$diet', 
            smokingHabits='$smokingHabits', 
            drinkingHabits='$drinkingHabits', 
            bodyType='$bodyType', 
            complexion='$complexion', 
            physicalStatus='$physicalStatus', 
            doshType='$doshType', 
            star='$star', 
            raasi='$raasi', 
            birthTime='$birthTime', 
            birthPlace='$birthPlace', 
            additionalInfo='$additionalInfo' 
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['partnerPreferenceForm'])) {
    // Retrieve form data
    $id = $_POST["id"];
    $age_from = $_POST["age_from"];
    $age_to = $_POST["age_to"];
    $height_from = $_POST["height_from"];
    $height_to = $_POST["height_to"];
    $looking_for = $_POST["looking_for"];
    $par_physical_status = $_POST["par_physical_status"];
    $par_eating_habits = $_POST["par_eating_habits"];
    $par_smoking_habits = $_POST["par_smoking_habits"];
    $par_drinking_habits = $_POST["par_drinking_habits"];
    $par_religion = $_POST["par_religion"];
    $par_caste = $_POST["par_caste"];
    $par_mother_tongue = $_POST["par_mother_tongue"];
    $par_doshTypes = $_POST["par_doshTypes"];
    $par_stars = $_POST["par_stars"];
    $par_country_living_in = $_POST["par_country_living_in"];
    $par_state_living_in = $_POST["par_state_living_in"];
    $par_city_living_in = $_POST["par_city_living_in"];
    $par_education = $_POST["par_education"];
    $par_occupation = $_POST["par_occupation"];
    $par_annualIncomes = $_POST["par_annualIncomes"];

    // Update query for partner preference
    $sql = "UPDATE user_partner_preferences SET 
            age_from='$age_from', 
            age_to='$age_to', 
            height_from='$height_from', 
            height_to='$height_to', 
            looking_for='$looking_for', 
            par_physical_status='$par_physical_status', 
            par_eating_habits='$par_eating_habits', 
            par_smoking_habits='$par_smoking_habits', 
            par_drinking_habits='$par_drinking_habits', 
            par_religion='$par_religion', 
            par_caste='$par_caste', 
            par_mother_tongue='$par_mother_tongue', 
            par_doshTypes='$par_doshTypes', 
            par_stars='$par_stars', 
            par_country_living_in='$par_country_living_in', 
            par_state_living_in='$par_state_living_in', 
            par_city_living_in='$par_city_living_in', 
            par_education='$par_education', 
            par_occupation='$par_occupation', 
            par_annualIncomes='$par_annualIncomes' 
            WHERE user_id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Partner preference updated successfully";
    } else {
        echo "Error updating partner preference: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServoBoard - HTML Admin Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
     body{
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
        .container{
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
        #upload-photos{
            margin-left: -250px;
        }
        .nav-item {
    margin-right: 192px; /* Adjust the margin value as needed */
  
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
                <h3>Subhalekha</h3>
               
            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                            <!-- <li class="sidebar-title"><span>Menu</span></li> -->
                           <li class="sidebar-item"><a href="index.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" tabindex="0"><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Profiles</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>filter Profiles</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Profiles</span></a></li>
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password  </span></a></li>
                          
                            <button class="logout-btn" onclick="location.href='login.php'">Logout</button>

                            <!-- <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-stack"></i> <span>Components</span></a>
                                <ul class="sub-menu">
                                    <li><a href="component_alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="component_badge.html" class="sub-menu-item">Badge</a></li>
                                    <li><a href="component_button.html" class="sub-menu-item">Button</a></li>
                                    <li><a href="component_card.html" class="sub-menu-item">Card</a></li>
                                    <li><a href="component_carousel.html" class="sub-menu-item">Carousel</a></li>
                                    <li><a href="component_list_group.html" class="sub-menu-item">List Group</a></li>
                                    <li><a href="component_modal.html" class="sub-menu-item">Modal</a></li>
                                    <li><a href="component_progress.html" class="sub-menu-item">Progress</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="extra_component.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Extra Components" tabindex="0"><i class="bi bi-collection-fill"></i> <span>Extra Components</span></a></li>
                            <li class="sidebar-title"><span>Forms & Tables</span></li>
                            <li class="sidebar-item"><a href="form_element.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Form Elements</span></a></li>
                            <li class="sidebar-item"><a href="form_layout.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Layout" tabindex="0"><i class="bi bi-file-earmark-medical-fill"></i> <span>Form Layout</span></a></li>
                            <li class="sidebar-item"><a href="editor.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Editor" tabindex="0"><i class="bi bi-pen-fill"></i> <span>Text Editor</span></a></li>
                            <li class="sidebar-item"><a href="table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Table" tabindex="0"><i class="bi bi-grid-1x2-fill"></i> <span>Table</span></a></li>
                            <li class="sidebar-item"><a href="data_table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Datatable" tabindex="0"><i class="bi bi-file-earmark-spreadsheet-fill"></i> <span>Datatable</span></a></li>
                            <li class="sidebar-title"><span>Extra UI</span></li>
                            <li class="sidebar-item"><a href="widget.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets" tabindex="0"><i class="bi bi-pentagon-fill"></i> <span>Widgets</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons" tabindex="0"><i class="bi bi-egg-fill"></i> <span>Icons</span></a>
                                <ul class="sub-menu">
                                    <li><a href="bootstrap_icon.html" class="sub-menu-item">Bootstrap Icons </a></li>
                                    <li><a href="font_awesome.html" class="sub-menu-item">Fontawesome</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="chart.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts" tabindex="0"><i class="bi bi-bar-chart-fill"></i> <span>Apexcharts</span></a></li>
                            <li class="sidebar-title"><span>Pages</span></li>
                            <li class="sidebar-item"><a href="email.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Email Application" tabindex="0"><i class="bi bi-envelope-fill"></i> <span>Email Application</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" tabindex="0"><i class="bi bi-person-badge-fill"></i> <span>Authentication</span></a>
                                <ul class="sub-menu">
                                    <li><a href="login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="register.html" class="sub-menu-item">Register</a></li>
                                    <li><a href="password.html" class="sub-menu-item">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Errors" tabindex="0"><i class="bi bi-x-octagon-fill"></i> <span>Errors</span></a>
                                <ul class="sub-menu">
                                    <li><a href="403.html" class="sub-menu-item">403</a></li>
                                    <li><a href="404.html" class="sub-menu-item">404</a></li>
                                    <li><a href="500.html" class="sub-menu-item">500</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->
        <div class="container mt-5">
        <!-- <h2 class="mb-4">Member Details</h2> -->
        <ul class="nav nav-tabs">
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
        <form action="" method="post">
            <div class="tab-content mt-4">
                <!-- Basic Details Tab -->
                <div id="basic-details" role="tab-panel" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Basic Details</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                    <div class="form-group col-md-4">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>">
            <div class="invalid-feedback">
                Please provide a valid first name (minimum 2 characters, alphabets only).
            </div>
        </div>
        <div class="form-group col-md-4">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" class="form-control" name="lastName" value="<?php echo $row['lastName']; ?>">
            <div class="invalid-feedback">
                Please provide a valid last name (minimum 2 characters, alphabets only).
            </div>
        </div>
        <div class="form-group col-md-4">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $row['dob']; ?>">
            <div class="invalid-feedback">
                Please provide a valid date of birth (minimum 18 years old).
            </div>
        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender:</label>
        <select id="gender" class="form-control" name="gender">
            <option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select>
                            <div class="invalid-feedback">
                            Please select your gender.
                        </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="profileCreatedBy">Profile Created By:</label>
        <input type="text" id="profileCreatedBy" class="form-control" name="profileCreatedBy" value="<?php echo $row['profileCreatedBy']; ?>">
                           
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                            <div class="invalid-feedback">
                            Please provide a valid email address.
                        </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                </div>
                                <input type="tel" class="form-control" id="mobile" name="mobile"  value="<?php echo $row['mobile']; ?>">
                               
                            </div>
                        </div>
                    </div>
                    <!-- New row -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6 style="color:red;">Note:-Disabled Demo</h6>
                        </div>
                        <div class="form-group col-md-6">
                            <h6 style="color:red;">Note:-Disabled Demo</h6>
                        </div>
                    </div>
                    <!-- New row -->
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="maritalStatus">Marital Status</label>
                            <select id="maritalStatus" name="maritalStatus" class="form-control">
            <option value="Single" <?php if($row['maritalStatus'] == 'Single') echo 'selected'; ?>>Single</option>
            <option value="Married" <?php if($row['maritalStatus'] == 'Married') echo 'selected'; ?>>Married</option>
            <!-- Add more options if needed -->
        </select>
                            <div class="invalid-feedback">
                                Please provide a Marital Status.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
    <label for="mother">Mother Tongue</label>
    <input type="text" id="mother" name="mother" class="form-control" value="<?php echo $row['mother']; ?>">
    <div class="invalid-feedback">
        Please select a Mother Tongue.
    </div>
</div>
                    </div>
                    <!-- New row -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password">
                        </div>
                    </div>
                    <!-- New row for Religion Information -->
                    <!-- <div class="container mt-5"> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Religion Information</div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <br>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="religion">Religion</label>
                            <input type="text" id="religion" class="form-control" name="religion" value="<?php echo $row['religion']; ?>">
                            <div class="invalid-feedback">
                                Please provide a Religion.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="caste">Caste</label>
                            <input type="text" id="caste" name="caste" class="form-control" value="<?php echo $row['caste']; ?>">
                            <div class="invalid-feedback">
                                Please provide a Caste.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="subcaste">Subcaste</label>
                            <input type="text" id="subcaste" class="form-control" name="subcaste" value="<?php echo $row['subcaste']; ?>">
                            <div class="invalid-feedback">
                                Please provide a Subcaste.
                            </div>
                        </div>
                        <div class="form-check">
                                <label class="form-check-label" for="willingToMarryOtherCaste">
                                    Willing to marry other caste?
                                </label>
                                <input class="form-check-input ml-2" type="checkbox" id="willingToMarryOtherCaste" name="willingToMarryOtherCaste" required>
                                <div class="invalid-feedback">
                                Please provide a  Willing to marry other caste.
                            </div>
                            </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Education&Occupation Details</div>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="highestEducation">Highest Education</label>
                            <input type="text" id="highestEducation" class="form-control" name="highestEducation" value="<?php echo $row['highestEducation']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Highest Education.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="additionalDegree">Additional Degree</label>
                            <input type="text" id="additionalDegree" class="form-control" name="additionalDegree" value="<?php echo $row['additionalDegree']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Additional Degree.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="employedIn">Employed In</label>
                            <input type="text" id="employedIn" name="employedIn" class="form-control" value="<?php echo $row['employedIn']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Employed.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Occupation.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="annualIncome">Annual Income</label>
                            <input type="text" id="annualIncome" name="annualIncome" class="form-control" value="<?php echo $row['annualIncome']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Annual Income.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="section-title">Family Details</div> -->
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="familyType">Family Type</label>
                            <input type="text" id="familyType" name="familyType" class="form-control" value="<?php echo $row['familyType']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Family Type.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="familyValue">Family Value</label>
                            <input type="text" id="familyValue" name="familyValue" class="form-control" value="<?php echo $row['familyValue']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Family Value.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="familyStatus">Family Status</label>
                            <input type="text" id="familyStatus" name="familyStatus" class="form-control" value="<?php echo $row['familyStatus']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Family Status.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fatherOccupation">Father's Occupation</label>
                            <input type="text" id="fatherOccupation" name="fatherOccupation" class="form-control" value="<?php echo $row['fatherOccupation']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Father's Occupation.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="motherOccupation">Mother's Occupation</label>
                            <input type="text" id="motherOccupation" name="motherOccupation" class="form-control" value="<?php echo $row['motherOccupation']; ?>">
                            <div class="invalid-feedback">
                                Please provide a  Mother's Occupation.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="numBrothers">Number of Brothers</label>
                            <input type="text" id="numBrothers" name="numBrothers" class="form-control" value="<?php echo $row['numBrothers']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Number of Brothers.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="numMarriedBrothers">Number of Married Brothers</label>
                            <input type="text" id="numMarriedBrothers" name="numMarriedBrothers" class="form-control" value="<?php echo $row['numMarriedBrothers']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Number of Married Brothers.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="numSisters">Number of Sisters</label>
                            <input type="text" id="numSisters" name="numSisters" class="form-control" value="<?php echo $row['numSisters']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Number of Sisters.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="numMarriedSisters">Number of Married Sisters</label>
                            <input type="text" id="numMarriedSisters" name="numMarriedSisters" class="form-control" value="<?php echo $row['numMarriedSisters']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Number of Married Sisters.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="section-title">Location Details</div> -->
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCountry">Country</label>
                            <input type="text" id="inputCountry" name="inputCountry" class="form-control" value="<?php echo $row['inputCountry']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Country.
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <input type="text" id="inputState" name="inputState" class="form-control" value="<?php echo $row['inputState']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  State.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" id="inputCity" name="inputCity" class="form-control" value="<?php echo $row['inputCity']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  City.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="section-title">Habits & Hobbies </div> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Habits & Hobbies </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="diet">Diet</label>
                            <input type="text" id="diet" name="diet" class="form-control" value="<?php echo $row['diet']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Diet.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="smokingHabitss">Smoking Habits</label>
                            <input type="text" id="smokingHabits" name="smokingHabits" class="form-control" value="<?php echo $row['smokingHabits']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Smoking Habits.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="drinkingHabitss">Drinking Habits</label>
                            <input type="text" id="drinkingHabits" name="drinkingHabits" class="form-control" value="<?php echo $row['drinkingHabits']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Drinking Habits.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Physical Attribute </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="height">Height</label>
                            <select class="form-control" id="height" name="height" required>
                                <option value="" disabled selected>Select Your Height</option>

                                <option value="1"   >Below 4ft 6in - 137cm</option>
                                                                                                                        <option value="2"   >4ft 6in - 137cm</option>
                                                                                                                        <option value="3"   >4ft 7in - 139cm</option>
                                                                                                                        <option value="4"   >4ft 8in - 142cm</option>
                                                                                                                        <option value="5"   >4ft 9in - 144cm</option>
                                                                                                                        <option value="6"   >4ft 10in - 147cm</option>
                                                                                                                        <option value="7"   >4ft 11in - 149cm</option>
                                                                                                                        <option value="8"   >5ft - 152cm</option>
                                                                                                                        <option value="9"   >5ft 1in - 154cm</option>
                                                                                                                        <option value="10"   >5ft 2in - 157cm</option>
                                                                                                                        <option value="11"   >5ft 3in - 160cm</option>
                                                                                                                        <option value="12"   >5ft 4in - 162cm</option>
                                                                                                                        <option value="13"   >5ft 5in - 165cm</option>
                                                                                                                        <option value="14"   >5ft 6in - 167cm</option>
                                                                                                                        <option value="15"   >5ft 7in - 170cm</option>
                                                                                                                        <option value="16"   >5ft 8in - 172cm</option>
                                                                                                                        <option value="17"   >5ft 9in - 175cm</option>
                                                                                                                        <option value="18"   >5ft 10in - 177cm</option>
                                                                                                                        <option value="19"   >5ft 11in - 180cm</option>
                                                                                                                        <option value="20"   >6ft - 182cm</option>
                                                                                                                        <option value="21"   >6ft 1in - 185cm</option>
                                                                                                                        <option value="22"   >6ft 2in - 187cm</option>
                                                                                                                        <option value="23"   >6ft 3in - 190cm</option>
                                                                                                                        <option value="24"   >6ft 4in - 193cm</option>
                                                                                                                        <option value="25"   >6ft 5in - 195cm</option>
                                                                                                                        <option value="26"   >6ft 6in - 198cm</option>
                                                                                                                        <option value="27"   >6ft 7in - 200cm</option>
                                                                                                                        <option value="28"   >6ft 8in - 203cm</option>
                                                                                                                        <option value="29"   >6ft 9in - 205cm</option>
                                                                                                                        <option value="30"   >6ft 10in - 208cm</option>
                                                                                                                        <option value="31"   >6ft 11in - 210cm</option>
                                                                                                                        <option value="32"   >7ft - 213cm</option>
                                                                                                                        <option value="33"   >Above 7ft - 213cm</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a  Height.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="weight">Weight (kg)</label>
                            <select class="form-control" id="weight" name="weight" required>
                                <option value="" disabled selected>Select Your Weight</option>

                                <option value='30'  >
                                                                    30 Kg
                                                                </option>
                                                                                                                             <option value='31'  >
                                                                    31 Kg
                                                                </option>
                                                                                                                             <option value='32'  >
                                                                    32 Kg
                                                                </option>
                                                                                                                             <option value='33'  >
                                                                    33 Kg
                                                                </option>
                                                                                                                             <option value='34'  >
                                                                    34 Kg
                                                                </option>
                                                                                                                             <option value='35'  >
                                                                    35 Kg
                                                                </option>
                                                                                                                             <option value='36'  >
                                                                    36 Kg
                                                                </option>
                                                                                                                             <option value='37'  >
                                                                    37 Kg
                                                                </option>
                                                                                                                             <option value='38'  >
                                                                    38 Kg
                                                                </option>
                                                                                                                             <option value='39'  >
                                                                    39 Kg
                                                                </option>
                                                                                                                             <option value='40'  >
                                                                    40 Kg
                                                                </option>
                                                                                                                             <option value='41'  >
                                                                    41 Kg
                                                                </option>
                                                                                                                             <option value='42'  >
                                                                    42 Kg
                                                                </option>
                                                                                                                             <option value='43'  >
                                                                    43 Kg
                                                                </option>
                                                                                                                             <option value='44'  >
                                                                    44 Kg
                                                                </option>
                                                                                                                             <option value='45'  >
                                                                    45 Kg
                                                                </option>
                                                                                                                             <option value='46'  >
                                                                    46 Kg
                                                                </option>
                                                                                                                             <option value='47'  >
                                                                    47 Kg
                                                                </option>
                                                                                                                             <option value='48'  >
                                                                    48 Kg
                                                                </option>
                                                                                                                             <option value='49'  >
                                                                    49 Kg
                                                                </option>
                                                                                                                             <option value='50'  >
                                                                    50 Kg
                                                                </option>
                                                                                                                             <option value='51'  >
                                                                    51 Kg
                                                                </option>
                                                                                                                             <option value='52'  >
                                                                    52 Kg
                                                                </option>
                                                                                                                             <option value='53'  >
                                                                    53 Kg
                                                                </option>
                                                                                                                             <option value='54'  >
                                                                    54 Kg
                                                                </option>
                                                                                                                             <option value='55'  >
                                                                    55 Kg
                                                                </option>
                                                                                                                             <option value='56'  >
                                                                    56 Kg
                                                                </option>
                                                                                                                             <option value='57'  >
                                                                    57 Kg
                                                                </option>
                                                                                                                             <option value='58'  >
                                                                    58 Kg
                                                                </option>
                                                                                                                             <option value='59'  >
                                                                    59 Kg
                                                                </option>
                                                                                                                             <option value='60'  >
                                                                    60 Kg
                                                                </option>
                                                                                                                             <option value='61'  >
                                                                    61 Kg
                                                                </option>
                                                                                                                             <option value='62'  >
                                                                    62 Kg
                                                                </option>
                                                                                                                             <option value='63'  >
                                                                    63 Kg
                                                                </option>
                                                                                                                             <option value='64'  >
                                                                    64 Kg
                                                                </option>
                                                                                                                             <option value='65'  >
                                                                    65 Kg
                                                                </option>
                                                                                                                             <option value='66'  >
                                                                    66 Kg
                                                                </option>
                                                                                                                             <option value='67'  >
                                                                    67 Kg
                                                                </option>
                                                                                                                             <option value='68'  >
                                                                    68 Kg
                                                                </option>
                                                                                                                             <option value='69'  >
                                                                    69 Kg
                                                                </option>
                                                                                                                             <option value='70'  >
                                                                    70 Kg
                                                                </option>
                                                                                                                             <option value='71'  >
                                                                    71 Kg
                                                                </option>
                                                                                                                             <option value='72'  >
                                                                    72 Kg
                                                                </option>
                                                                                                                             <option value='73'  >
                                                                    73 Kg
                                                                </option>
                                                                                                                             <option value='74'  >
                                                                    74 Kg
                                                                </option>
                                                                                                                             <option value='75'  >
                                                                    75 Kg
                                                                </option>
                                                                                                                             <option value='76'  >
                                                                    76 Kg
                                                                </option>
                                                                                                                             <option value='77'  >
                                                                    77 Kg
                                                                </option>
                                                                                                                             <option value='78'  >
                                                                    78 Kg
                                                                </option>
                                                                                                                             <option value='79'  >
                                                                    79 Kg
                                                                </option>
                                                                                                                             <option value='80'  >
                                                                    80 Kg
                                                                </option>
                                                                                                                             <option value='81'  >
                                                                    81 Kg
                                                                </option>
                                                                                                                             <option value='82'  >
                                                                    82 Kg
                                                                </option>
                                                                                                                             <option value='83'  >
                                                                    83 Kg
                                                                </option>
                                                                                                                             <option value='84'  >
                                                                    84 Kg
                                                                </option>
                                                                                                                             <option value='85'  >
                                                                    85 Kg
                                                                </option>
                                                                                                                             <option value='86'  >
                                                                    86 Kg
                                                                </option>
                                                                                                                             <option value='87'  >
                                                                    87 Kg
                                                                </option>
                                                                                                                             <option value='88'  >
                                                                    88 Kg
                                                                </option>
                                                                                                                             <option value='89'  >
                                                                    89 Kg
                                                                </option>
                                                                                                                             <option value='90'  >
                                                                    90 Kg
                                                                </option>
                                                                                                                             <option value='91'  >
                                                                    91 Kg
                                                                </option>
                                                                                                                             <option value='92'  >
                                                                    92 Kg
                                                                </option>
                                                                                                                             <option value='93'  >
                                                                    93 Kg
                                                                </option>
                                                                                                                             <option value='94'  >
                                                                    94 Kg
                                                                </option>
                                                                                                                             <option value='95'  >
                                                                    95 Kg
                                                                </option>
                                                                                                                             <option value='96'  >
                                                                    96 Kg
                                                                </option>
                                                                                                                             <option value='97'  >
                                                                    97 Kg
                                                                </option>
                                                                                                                             <option value='98'  >
                                                                    98 Kg
                                                                </option>
                                                                                                                             <option value='99'  >
                                                                    99 Kg
                                                                </option>
                                                                                                                             <option value='100'  >
                                                                    100 Kg
                                                                </option>
                                                                                                                             <option value='101'  >
                                                                    101 Kg
                                                                </option>
                                                                                                                             <option value='102'  >
                                                                    102 Kg
                                                                </option>
                                                                                                                             <option value='103'  >
                                                                    103 Kg
                                                                </option>
                                                                                                                             <option value='104'  >
                                                                    104 Kg
                                                                </option>
                                                                                                                             <option value='105'  >
                                                                    105 Kg
                                                                </option>
                                                                                                                             <option value='106'  >
                                                                    106 Kg
                                                                </option>
                                                                                                                             <option value='107'  >
                                                                    107 Kg
                                                                </option>
                                                                                                                             <option value='108'  >
                                                                    108 Kg
                                                                </option>
                                                                                                                             <option value='109'  >
                                                                    109 Kg
                                                                </option>
                                                                                                                             <option value='110'  >
                                                                    110 Kg
                                                                </option>
                                                                                                                             <option value='111'  >
                                                                    111 Kg
                                                                </option>
                                                                                                                             <option value='112'  >
                                                                    112 Kg
                                                                </option>
                                                                                                                             <option value='113'  >
                                                                    113 Kg
                                                                </option>
                                                                                                                             <option value='114'  >
                                                                    114 Kg
                                                                </option>
                                                                                                                             <option value='115'  >
                                                                    115 Kg
                                                                </option>
                                                                                                                             <option value='116'  >
                                                                    116 Kg
                                                                </option>
                                                                                                                             <option value='117'  >
                                                                    117 Kg
                                                                </option>
                                                                                                                             <option value='118'  >
                                                                    118 Kg
                                                                </option>
                                                                                                                             <option value='119'  >
                                                                    119 Kg
                                                                </option>
                                                                                                                             <option value='120'  >
                                                                    120 Kg
                                                                </option>
                                                                                                                             <option value='121'  >
                                                                    121 Kg
                                                                </option>
                                                                                                                             <option value='122'  >
                                                                    122 Kg
                                                                </option>
                                                                                                                             <option value='123'  >
                                                                    123 Kg
                                                                </option>
                                                                                                                             <option value='124'  >
                                                                    124 Kg
                                                                </option>
                                                                                                                             <option value='125'  >
                                                                    125 Kg
                                                                </option>
                                                                                                                             <option value='126'  >
                                                                    126 Kg
                                                                </option>
                                                                                                                             <option value='127'  >
                                                                    127 Kg
                                                                </option>
                                                                                                                             <option value='128'  >
                                                                    128 Kg
                                                                </option>
                                                                                                                             <option value='129'  >
                                                                    129 Kg
                                                                </option>
                                                                                                                             <option value='130'  >
                                                                    130 Kg
                                                                </option>
                                                                                                                             <option value='131'  >
                                                                    131 Kg
                                                                </option>
                                                                                                                             <option value='132'  >
                                                                    132 Kg
                                                                </option>
                                                                                                                             <option value='133'  >
                                                                    133 Kg
                                                                </option>
                                                                                                                             <option value='134'  >
                                                                    134 Kg
                                                                </option>
                                                                                                                             <option value='135'  >
                                                                    135 Kg
                                                                </option>
                                                                                                                             <option value='136'  >
                                                                    136 Kg
                                                                </option>
                                                                                                                             <option value='137'  >
                                                                    137 Kg
                                                                </option>
                                                                                                                             <option value='138'  >
                                                                    138 Kg
                                                                </option>
                                                                                                                             <option value='139'  >
                                                                    139 Kg
                                                                </option>
                                                                                                                             <option value='140'  >
                                                                    140 Kg
                                                                </option>
                                                                                                                             <option value='141'  >
                                                                    141 Kg
                                                                </option>
                                                                                                                             <option value='142'  >
                                                                    142 Kg
                                                                </option>
                                                                                                                             <option value='143'  >
                                                                    143 Kg
                                                                </option>
                                                                                                                             <option value='144'  >
                                                                    144 Kg
                                                                </option>
                                                                                                                             <option value='145'  >
                                                                    145 Kg
                                                                </option>
                                                                                                                             <option value='146'  >
                                                                    146 Kg
                                                                </option>
                                                                                                                             <option value='147'  >
                                                                    147 Kg
                                                                </option>
                                                                                                                             <option value='148'  >
                                                                    148 Kg
                                                                </option>
                                                                                                                             <option value='149'  >
                                                                    149 Kg
                                                                </option>
                                                                                                                             <option value='150'  >
                                                                    150 Kg
                                                                </option>
                                                                                                                             <option value='151'  >
                                                                    151 Kg
                                                                </option>
                                                                                                                             <option value='152'  >
                                                                    152 Kg
                                                                </option>
                                                                                                                             <option value='153'  >
                                                                    153 Kg
                                                                </option>
                                                                                                                             <option value='154'  >
                                                                    154 Kg
                                                                </option>
                                                                                                                             <option value='155'  >
                                                                    155 Kg
                                                                </option>
                                                                                                                             <option value='156'  >
                                                                    156 Kg
                                                                </option>
                                                                                                                             <option value='157'  >
                                                                    157 Kg
                                                                </option>
                                                                                                                             <option value='158'  >
                                                                    158 Kg
                                                                </option>
                                                                                                                             <option value='159'  >
                                                                    159 Kg
                                                                </option>
                                                                                                                             <option value='160'  >
                                                                    160 Kg
                                                                </option>
                                                                                                                             <option value='161'  >
                                                                    161 Kg
                                                                </option>
                                                                                                                             <option value='162'  >
                                                                    162 Kg
                                                                </option>
                                                                                                                             <option value='163'  >
                                                                    163 Kg
                                                                </option>
                                                                                                                             <option value='164'  >
                                                                    164 Kg
                                                                </option>
                                                                                                                             <option value='165'  >
                                                                    165 Kg
                                                                </option>
                                                                                                                             <option value='166'  >
                                                                    166 Kg
                                                                </option>
                                                                                                                             <option value='167'  >
                                                                    167 Kg
                                                                </option>
                                                                                                                             <option value='168'  >
                                                                    168 Kg
                                                                </option>
                                                                                                                             <option value='169'  >
                                                                    169 Kg
                                                                </option>
                                                                                                                             <option value='170'  >
                                                                    170 Kg
                                                                </option>
                                                                                                                             <option value='171'  >
                                                                    171 Kg
                                                                </option>
                                                                                                                             <option value='172'  >
                                                                    172 Kg
                                                                </option>
                                                                                                                             <option value='173'  >
                                                                    173 Kg
                                                                </option>
                                                                                                                             <option value='174'  >
                                                                    174 Kg
                                                                </option>
                                                                                                                             <option value='175'  >
                                                                    175 Kg
                                                                </option>
                                                                                                                             <option value='176'  >
                                                                    176 Kg
                                                                </option>
                                                                                                                             <option value='177'  >
                                                                    177 Kg
                                                                </option>
                                                                                                                             <option value='178'  >
                                                                    178 Kg
                                                                </option>
                                                                                                                             <option value='179'  >
                                                                    179 Kg
                                                                </option>
                                                                                                                             <option value='180'  >
                                                                    180 Kg
                                                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a  Weight.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bodyType">Body Type</label>
                            <input type="text" id="bodyType" name="bodyType" class="form-control" value="<?php echo $row['bodyType']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Body Type.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="complexion">Complexion</label>
                            <input type="text" id="complexion" name="complexion" class="form-control" value="<?php echo $row['complexion']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Complexion.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="physicalStatus">Physical Status</label>
                            <input type="text" id="physicalStatus" class="form-control" name="physicalStatus" value="<?php echo $row['physicalStatus']; ?>">

                            <div class="invalid-feedback">
                                Please provide a  Physical Status.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Horoscope Details </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                    <div class="form-group col-md-6">
    <label for="doshType">Dosh Type</label>
    <input type="text" id="doshType" name="doshType" class="form-control" value="<?php echo $row['doshType']; ?>">

</div>

                        <div class="form-group col-md-6">
                            <label for="star">Star</label>
                            <input type="text" id="star" name="star" class="form-control" value="<?php echo $row['star']; ?>">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="raasi">Raasi/Moonsign</label>
                            <input type="text" id="raasi" name="raasi" class="form-control" value="<?php echo $row['raasi']; ?>">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="birthTime">Birth Time</label>
                            <input type="text" id="birthTime" name="birthTime" class="form-control" value="<?php echo $row['birthTime']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="birthPlace">Birth Place</label>
                            <input type="text" id="birthPlace" name="birthPlace" class="form-control" value="<?php echo $row['birthPlace']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">About me </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                    <div class="form-group col-md-12">
                            <label for="additionalInfo">Additional Information</label>
                            <textarea id="additionalInfo" class="form-control" name="additionalInfo"><?php echo $row['additionalInfo']; ?></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary next-tab" data-toggle="tab" href="#upload-photos">Next</button>
                    <!-- <button type="submit" id="saveButton" name="educationOccupationSubmit">Save</button> -->
                    <!-- <a href="#upload-photos"> <button type="button" id="nextButton1" class="btn btn-primary">Next</button></a> -->

                </div>
                <!-- Upload Photos Tab -->
                <div id="upload-photos" class="tab-pane fade">
                    <div class="container mt-3">
                        <!-- Form for uploading photos -->
                        <!-- <form action="submit.php" method="post" enctype="multipart/form-data" onsubmit="return validateImages()"> -->
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Column 1 -->
                                <!-- Repeat this block for each photo input -->
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview1"></div>
                                    <label class="photo-label">Photo 1:</label>
                                    <input type="file" class="form-control-file" name="photo1" onchange="previewImage(this, 'preview1')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview2"></div>
                                    <label class="photo-label">Photo 2:</label>
                                    <input type="file" class="form-control-file" name="photo2" onchange="previewImage(this, 'preview2')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview3"></div>
                                    <label class="photo-label">Photo 3:</label>
                                    <input type="file" class="form-control-file" name="photo3" onchange="previewImage(this, 'preview3')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview4"></div>
                                    <label class="photo-label">Photo 4:</label>
                                    <input type="file" class="form-control-file" name="photo4" onchange="previewImage(this, 'preview4')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <!-- Repeat this block for each photo input -->
                            </div>
                            <div class="col-md-4 second-row">
                                <!-- Column 2 -->
                                <!-- Repeat this block for each photo input -->
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview5"></div>
                                    <label class="photo-label">Photo 5:</label>
                                    <input type="file" class="form-control-file" name="photo5" onchange="previewImage(this, 'preview5')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview6"></div>
                                    <label class="photo-label">Photo 6:</label>
                                    <input type="file" class="form-control-file" name="photo6" onchange="previewImage(this, 'preview6')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview7"></div>
                                    <label class="photo-label">Photo 7:</label>
                                    <input type="file" class="form-control-file" name="photo7" onchange="previewImage(this, 'preview7')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <div class="photo-input">
                                    <div class="photo-placeholder" id="preview8"></div>
                                    <label class="photo-label">Photo 8:</label>
                                    <input type="file" class="form-control-file" name="photo8" onchange="previewImage(this, 'preview8')">
                                    <div class="invalid-feedback">
                        Please select a photo.
                    </div>
                                </div>
                                <!-- Repeat this block for each photo input -->
                            </div>
                        </div>
                        <!-- <button type="submit" name="upload_photos_submit" class="btn btn-primary">Save</button> -->
                        <button class="btn btn-primary next-tab" data-toggle="tab" href="#partner-preference">Next</button>


                        <!-- Section to display uploaded photos -->
                        <div class="row mt-3">
                            <?php
                            // PHP code to fetch and display uploaded photos
                            // Replace this with your database query to fetch uploaded photos
                            $uploadedPhotos = []; // Example array of uploaded photo URLs
                            foreach ($uploadedPhotos as $photo) {
                                echo '<div class="col-md-3">';
                                echo '<div class="photo-placeholder" style="background-image: url(' . $photo['url'] . ');"></div>';
                                echo '</div>';
                            }
                            ?>
                            <?php if ($validation_passed) : ?>
                                <script>
                                    // Redirect to the Partner Preference tab
                                    window.location.href = "image.php#partner-preference-tab";
                                </script>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


                <!-- Partner Preference Tab -->
                <div id="partner-preference" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Basic Preference </div>
                        </div>
                    </div>
                    <!-- <form id="partnerPreferenceForm" action="submit.php" method="post" onsubmit="return validateForms()"> -->

                    <div class="form-row">
                <div class="form-group col-md-3">
                <label for="age_from">Age From</label>
                <select class="form-control" id="age_from" name="age_from" required>
                    <option value="" disabled>Select Your Age</option>
                    <option value="18" <?php if($row['age_from'] == '18') echo 'selected'; ?>>18 years</option>
                    <option value="19" <?php if($row['age_from'] == '19') echo 'selected'; ?>>19 years</option>
                  
                </select>
            </div>
                        <div class="form-group col-md-3">
                            <label for="age_to">Age To</label>
                            <select class="form-control" id="age_to" name="age_to" required>
                            <option value="" disabled>Select Your Age</option>
                    <option value="25" <?php if($row['age_to'] == '25') echo 'selected'; ?>>25 years</option>
                    <option value="26" <?php if($row['age_to'] == '26') echo 'selected'; ?>>26 years</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="height_from">Height</label>
                            <select class="form-control" id="height_from" name="height_from" required>
                                <option value="" disabled selected>Select Your Height</option>
                                <option value="4ft" <?php if($row['height_from'] == '4ft') echo 'selected'; ?>>4ft</option>
                    <option value="5ft" <?php if($row['height_from'] == '5ft') echo 'selected'; ?>>5ft</option>
                    <option value="6ft" <?php if($row['height_from'] == '6ft') echo 'selected'; ?>>6ft</option>
                    <option value="7ft" <?php if($row['height_from'] == '7ft') echo 'selected'; ?>>7ft</option>
                    <option value="8ft" <?php if($row['height_from'] == '8ft') echo 'selected'; ?>>8ft</option>
                            </select>
                            <div class="invalid-feedback">
        Please select a valid height range.
    </div>
                        </div>
                        <div class="form-group col-md-3">

                            <label for="height_to">To</label>
                            <select class="form-control" id="height_to" name="height_to" required>
                                <option value="" disabled selected>Select Your Height to</option>
                                <option value="4ft" <?php if($row['height_to'] == '4ft') echo 'selected'; ?>>4ft</option>
                    <option value="5ft" <?php if($row['height_to'] == '5ft') echo 'selected'; ?>>5ft</option>
                    <option value="6ft" <?php if($row['height_to'] == '6ft') echo 'selected'; ?>>6ft</option>
                    <option value="7ft" <?php if($row['height_to'] == '7ft') echo 'selected'; ?>>7ft</option>
                    <option value="8ft" <?php if($row['height_to'] == '8ft') echo 'selected'; ?>>8ft</option>
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
        <option value="" disabled>Select Your Looking For</option>
        <option value="Male" <?php if($row['looking_for'] == 'Male') echo 'selected'; ?>>Male</option>
        <option value="Female" <?php if($row['looking_for'] == 'Female') echo 'selected'; ?>>Female</option>
    </select>
</div>

                        <div class="form-group col-md-6">
                            <label for="par_physical_status">Physical Status</label>
                            <select class="form-control" id="par_physical_status" name="par_physical_status" required>
                                <option value="" disabled selected>Select Your Looking For</option>
                                <option value="slim" <?php if($row['par_physical_status'] == 'slim') echo 'selected'; ?>>Slim</option>
                                <option value="fit" <?php if($row['par_physical_status'] == 'fit') echo 'selected'; ?>>fit</option>
                                <option value="chubby" <?php if($row['par_physical_status'] == 'chubby') echo 'selected'; ?>>chubby</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_eating_habits">Eating Habits</label>
                            <select class="form-control" id="par_eating_habits" name="par_eating_habits" required>
                                <option value="" disabled selected>Select Your eatingHabits</option>
                                
                                <option value="veg" <?php if($row['par_eating_habits'] == 'veg') echo 'selected'; ?>>Vegetarian</option>
                                <option value="non-veg" <?php if($row['par_eating_habits'] == 'non-veg') echo 'selected'; ?>>Non-Vegetarian</option>
 
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_smoking_habits">Smoking Habits</label>
                            <select class="form-control" id="smoking_habits" name="par_smoking_habits" required>
                                <option value="" disabled selected>Select Your Smoking Habits</option>
                                
                                <option value="daily" <?php if($row['par_smoking_habits'] == 'daily') echo 'selected'; ?>>Daily</option>
                                <option value="occasional" <?php if($row['par_smoking_habits'] == 'occasional') echo 'selected'; ?>>Occasional</option>
                                <option value="teetotaler" <?php if($row['par_smoking_habits'] == 'teetotaler') echo 'selected'; ?>>Teetotaler</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_drinking_habits">Drinking Habits</label>
                            <select class="form-control" id="par_drinking_habits" name="par_drinking_habits" required>
                                <option value="" disabled selected>Select Your Drinking Habits</option>
                                <option value="daily" <?php if($row['par_drinking_habits'] == 'daily') echo 'selected'; ?>>Daily</option>
                                <option value="occasional" <?php if($row['par_drinking_habits'] == 'occasional') echo 'selected'; ?>>Occasional</option>
                                <option value="teetotaler" <?php if($row['par_drinking_habits'] == 'teetotaler') echo 'selected'; ?>>Teetotaler</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Religion Preference </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_religion">Religion</label>
                            <select class="form-control" id="par_religion" name="par_religion" required>
                                <option value="" disabled selected>Select Your Religion</option>

                               
                                <option value="hindu" <?php if($row['par_religion'] == 'hindu') echo 'selected'; ?>>hindu</option>
                                <option value="muslim" <?php if($row['par_religion'] == 'muslim') echo 'selected'; ?>>muslim</option>
                                <option value="christian" <?php if($row['par_religion'] == 'christian') echo 'selected'; ?>>christian</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_caste">Caste</label>
                            <select class="form-control" id="par_caste" name="par_caste" required>
                                <option value="" disabled selected>Select Your Caste</option>

                               
                                <option value="oc" <?php if($row['par_caste'] == 'oc') echo 'selected'; ?>>oc</option>
                                <option value="bc" <?php if($row['par_caste'] == 'bc') echo 'selected'; ?>>bc</option>
                                <option value="sc" <?php if($row['par_caste'] == 'sc') echo 'selected'; ?>>sc</option>
                                <option value="st" <?php if($row['par_caste'] == 'st') echo 'selected'; ?>>st</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="motherTongue">Mother Tongue</label>
                            <!-- <input type="text" class="form-control" id="par_mother_tongue" name="par_mother_tongue" placeholder="Enter Mother Tongue" required> -->
                            <input type="text" class="form-control" id="par_mother_tongue" name="par_mother_tongue" value="<?php echo $row['par_mother_tongue']; ?>">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_doshTypes">Dosh Type</label>
                            <!-- <input type="text" class="form-control" id="par_doshTypes" name="par_doshTypes" placeholder="Enter Dosh Type" required> -->
                            <input type="text" class="form-control" id="par_doshTypes" name="par_doshTypes" value="<?php echo $row['par_doshTypes']; ?>">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_stars">Star</label>
                            <select class="form-control" id="par_stars" name="par_stars" required>
                                <option value="" disabled selected>Select Your Star</option>
                               
                                <option value="1" <?php if($row['par_stars'] == '1') echo 'selected'; ?>>1 Star</option>
                                <option value="2" <?php if($row['par_stars'] == '2') echo 'selected'; ?>>2 Star</option>
                                <option value="3" <?php if($row['par_stars'] == '3') echo 'selected'; ?>>3 Star</option>
                                <option value="4" <?php if($row['par_stars'] == '4') echo 'selected'; ?>>4 Star</option>
                                <option value="5" <?php if($row['par_stars'] == '5') echo 'selected'; ?>>5 Star</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Location Preference </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_country_living_in">Country Living In</label>
                            <select class="form-control" id="par_country_living_in" name="par_country_living_in" required>
                                <option value="" disabled selected>Select Your countryLivingIn</option>
                               
                                <option value="india" <?php if($row['par_country_living_in'] == 'india') echo 'selected'; ?>>india</option>
                                <option value="usa" <?php if($row['par_country_living_in'] == 'usa') echo 'selected'; ?>>usa</option>
                                <option value="australia" <?php if($row['par_country_living_in'] == 'australia') echo 'selected'; ?>>australia</option>
                                <option value="Japan" <?php if($row['par_country_living_in'] == 'Japan') echo 'selected'; ?>>Japan</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_state_living_in">State Living In</label>
                            <select class="form-control" id="par_state_living_in" name="par_state_living_in" required>
                                <option value="" disabled selected>Select Your State LivingIn</option>
                                


                                <option value="AP" <?php if($row['par_state_living_in'] == 'AP') echo 'selected'; ?>>Andhra Pradesh (AP)</option>
                                <option value="TS" <?php if($row['par_state_living_in'] == 'TS') echo 'selected'; ?>>Telangana (TS)</option>
                                <option value="KA" <?php if($row['par_state_living_in'] == 'KA') echo 'selected'; ?>>Karnataka (KA)</option>
                                <option value="UP" <?php if($row['par_state_living_in'] == 'UP') echo 'selected'; ?>>Uttar Pradesh (UP)</option>
                                <option value="MP" <?php if($row['par_state_living_in'] == 'MP') echo 'selected'; ?>>Madhya Pradesh (MP)</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_city_living_in">City Living In</label>
                            <select class="form-control" id="par_city_living_in" name="par_city_living_in" required>
                                <option value="" disabled selected>Select Your city LivingIn</option>
                               
                                
                                <option value="guntur" <?php if($row['par_city_living_in'] == 'guntur') echo 'selected'; ?>>Guntur</option>
                                <option value="hyderabad" <?php if($row['par_city_living_in'] == 'hyderabad') echo 'selected'; ?>>Hyderabad</option>
                                <option value="vizag" <?php if($row['par_city_living_in'] == 'vizag') echo 'selected'; ?>>Visakhapatnam (Vizag)</option>
                                
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Education & occupation Preference </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_education">Education</label>
                            <input type="text" class="form-control" id="par_education" name="par_education" value="<?php echo $row['par_education']; ?>">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_occupation">Occupation</label>
                            <input type="text" class="form-control" id="par_occupation" name="par_occupation" value="<?php echo $row['par_occupation']; ?>">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_annualIncomes">Annual Income</label>
                            <select class="form-control" id="par_annualIncomes" name="par_annualIncomes" required>
                                <option value="" disabled selected>Select Your Annual Income</option>
                                <option value="doesnt_matter">Doesn't Matter</option>
                               

                                <option value="doesnt_matter" <?php if($row['par_city_living_in'] == 'doesnt_matter') echo 'selected'; ?>>Doesn't Matter</option>
                                <option value="2LPA" <?php if($row['par_annualIncomes'] == '2LPA') echo 'selected'; ?>>2LPA</option>
                                <option value="3LPA" <?php if($row['par_annualIncomes'] == '3LPA') echo 'selected'; ?>>3LPA</option>
                                <option value="4LPA" <?php if($row['par_annualIncomes'] == '4LPA') echo 'selected'; ?>>4LPA</option>
                                <option value="5LPA" <?php if($row['par_annualIncomes'] == '5LPA') echo 'selected'; ?>>5LPA</option>
                                <option value="6LPA" <?php if($row['par_annualIncomes'] == '6LPA') echo 'selected'; ?>>6LPA</option>
                                <option value="7LPA" <?php if($row['par_annualIncomes'] == '7LPA') echo 'selected'; ?>>7LPA</option>
                               
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Submit">                </div>

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
  

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

 

</body>
</html>