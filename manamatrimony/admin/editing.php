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

include "db.php";

// Step 2: Retrieve user details based on ID
if (isset($_GET['id'])) {
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
        echo '<script>alert("Record updated successfully");</script>';
    } else {
        echo '<script>alert("Error updating record: ' . $conn->error . '");</script>';
    }
}
// Step 4: Handle form submission for partner preference
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
    // Retrieve other form fields similarly

    // Construct SQL UPDATE query for partner preference
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
            par_stars='$par_stars' 
            WHERE user_id='$id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Partner preference updated successfully");</script>';
    } else {
        echo '<script>alert("Error updating partner preference: ' . $conn->error . '");</script>';
    }
}


// Step 5: Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonial - Admin Template</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS (if any) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: beige;
        }

        .bod {
            margin-left: 19px;
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
            padding: 10px;
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

        .nav-item {
            margin-right: 192px;
            /* Adjust the margin value as needed */

        }

        .main {
            margin-left: 270px;
            width: 80%;

        }

        .custom-scroll {
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 1px;/ Set the width of the scrollbar /
        }

        #saveButton {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            /* border-radius: 8px; */
            /* margin-left: 450px; */
        }

        #saveButton:hover {
            background-color: #45a049;
            /* Darker Green */
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .sub {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            /* border-radius: 10px; */
            /* margin-left: 450px; */
        }

        .sub:hover {
            background-color: #45a049;
            /* Darker green */
        }

        .sub1 {
            background-color: #45a049;
            /* Blue */
            border: none;
            color: white;
            padding: 5px 35px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            /* border-radius: 5px; */
            /* margin-left: 400px; */
        }

        .sub1:hover {
            background-color: #0056b3;
            /* Darker blue */
        }


        @media only screen and (max-width: 768px) {
            .main {

                margin-left: 0px;
                width: 75%;
            }

            .nav-tabs {
                width: 500px;
            }

            .ones {
                margin-left: -10px;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Trigger a click event on the "Upload Photos" tab link
            document.getElementById("upload-photos-tab").click();
        });
    </script>
</head>

<body style="background-color:beige;">
    <div class="bod">

        <div class="fixed-sidebar sidebar-mini">
            <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <a href="index.php"><img src="assets/images/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>


            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                        <ul>
                            <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>


                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>

                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>

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
        <div class="main">
            <div class="container mt-5">
                <!-- <h2 class="mb-4">Member Details</h2> -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="basic-details-tab" data-toggle="tab" href="#basic-details">Member Details</a>
                    </li>
                    &nbsp; &nbsp; &nbsp;
                    <li class="nav-item">
                        <a class="nav-link" id="upload-photos-tab" data-toggle="tab" href="#upload-photos">Upload Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="partner-preference-tab" data-toggle="tab" href="#partner-preference">Partner Preference</a>
                    </li>
                </ul>
                <div class="tab-content mt-4">
                    <!-- Basic Details Tab -->
                    <div id="basic-details" class="tab-pane fade show active">
                        <form action="" method="post">
                            <div class="form-group col-md-4">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            </div>
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
                                        <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                                        <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                                        <option value="Other" <?php if ($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select your gender.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="profileCreatedBy">Profile Created By:</label>
                                    <select id="profileCreatedBy" class="form-control" name="profileCreatedBy">
                                        <option value="Self" <?php if ($row['profileCreatedBy'] == 'Self') echo 'selected'; ?>>Self</option>
                                        <option value="Parents" <?php if ($row['profileCreatedBy'] == 'Parents') echo 'selected'; ?>>Parents</option>
                                        <option value="Guardian" <?php if ($row['profileCreatedBy'] == 'Guardian') echo 'selected'; ?>>Guardian</option>
                                        <option value="Friends" <?php if ($row['profileCreatedBy'] == 'Friends') echo 'selected'; ?>>Friends</option>
                                        <option value="Sibling" <?php if ($row['profileCreatedBy'] == 'Sibling') echo 'selected'; ?>>Sibling</option>
                                        <option value="Relatives" <?php if ($row['profileCreatedBy'] == 'Relatives') echo 'selected'; ?>>Relatives</option>
                                    </select>
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
                                        <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>">

                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="maritalStatus">Marital Status</label>
                                    <select id="maritalStatus" name="maritalStatus" class="form-control">
                                        <option value="Never Married" <?php if ($row['maritalStatus'] == 'Never Married') echo 'selected'; ?>>Never Married</option>
                                        <option value="Widower" <?php if ($row['maritalStatus'] == 'Widower') echo 'selected'; ?>>Widower</option>
                                        <option value="Widow" <?php if ($row['maritalStatus'] == 'Widow') echo 'selected'; ?>>Widow</option>
                                        <option value="Divorced" <?php if ($row['maritalStatus'] == 'Divorced') echo 'selected'; ?>>Divorced</option>
                                        <option value="Awaiting Divorce" <?php if ($row['maritalStatus'] == 'Awaiting Divorce') echo 'selected'; ?>>Awaiting Divorce</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Marital Status.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mother">Mother Tongue</label>
                                    <select id="mother" name="mother" class="form-control">
                                        <option value="Telugu" <?php if ($row['mother'] == 'Telugu') echo 'selected'; ?>>Telugu</option>
                                        <option value="English" <?php if ($row['mother'] == 'English') echo 'selected'; ?>>English</option>
                                        <option value="Spanish" <?php if ($row['mother'] == 'Spanish') echo 'selected'; ?>>Spanish</option>
                                        <option value="Chinese" <?php if ($row['mother'] == 'Chinese') echo 'selected'; ?>>Chinese</option>
                                        <option value="Afrikaans" <?php if ($row['mother'] == 'Afrikaans') echo 'selected'; ?>>Afrikaans</option>
                                        <option value="Albanian" <?php if ($row['mother'] == 'Albanian') echo 'selected'; ?>>Albanian</option>
                                        <option value="Amharic" <?php if ($row['mother'] == 'Amharic') echo 'selected'; ?>>Amharic</option>
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
                                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Enter your password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="<?php echo $row['confirmPassword']; ?>" placeholder="Confirm your password" required>
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
                                    <select id="religion" class="form-control" name="religion">
                                        <option value="" disabled selected>Select Religion</option>
                                        <option value="hindu" <?php if ($row['religion'] == 'hindu') echo 'selected'; ?>>Hindu</option>
                                        <option value="muslim" <?php if ($row['religion'] == 'muslim') echo 'selected'; ?>>Muslim</option>
                                        <option value="christian" <?php if ($row['religion'] == 'christian') echo 'selected'; ?>>Christian</option>
                                        <!-- Add more options if needed -->
                                    </select>
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
                                        Please provide a Willing to marry other caste.
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
                                    <select id="highestEducation" class="form-control" name="highestEducation">
                                        <option value="" disabled selected>Select Highest Education</option>
                                        <option value="B Plan" <?php if ($row['highestEducation'] == 'B Plan') echo 'selected'; ?>>B Plan</option>
                                        <option value="B Arch" <?php if ($row['highestEducation'] == 'B Arch') echo 'selected'; ?>>B Arch</option>
                                        <option value="BE" <?php if ($row['highestEducation'] == 'BE') echo 'selected'; ?>>BE</option>
                                        <option value="B Tech" <?php if ($row['highestEducation'] == 'B Tech') echo 'selected'; ?>>B Tech</option>
                                        <option value="BSc Computer Science" <?php if ($row['highestEducation'] == 'BSc Computer Science') echo 'selected'; ?>>BSc Computer Science</option>
                                        <option value="BSc IT" <?php if ($row['highestEducation'] == 'BSc IT') echo 'selected'; ?>>BSc IT</option>
                                        <option value="B Phil" <?php if ($row['highestEducation'] == 'B Phil') echo 'selected'; ?>>B Phil</option>
                                        <option value="B Com" <?php if ($row['highestEducation'] == 'B Com') echo 'selected'; ?>>B Com</option>
                                        <option value="BA" <?php if ($row['highestEducation'] == 'BA') echo 'selected'; ?>>BA</option>
                                        <option value="BFA" <?php if ($row['highestEducation'] == 'BFA') echo 'selected'; ?>>BFA</option>
                                        <option value="BLIS" <?php if ($row['highestEducation'] == 'BLIS') echo 'selected'; ?>>BLIS</option>
                                        <option value="BSW" <?php if ($row['highestEducation'] == 'BSW') echo 'selected'; ?>>BSW</option>
                                        <option value="BMM (MASS MEDIA)" <?php if ($row['highestEducation'] == 'BMM (MASS MEDIA)') echo 'selected'; ?>>BMM (MASS MEDIA)</option>
                                        <option value="BEd" <?php if ($row['highestEducation'] == 'BEd') echo 'selected'; ?>>BEd</option>
                                        <option value="MEd" <?php if ($row['highestEducation'] == 'MEd') echo 'selected'; ?>>MEd</option>
                                        <!-- Add more options here -->
                                        <option value="Other Education" <?php if ($row['highestEducation'] == 'Other Education') echo 'selected'; ?>>Other Education</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please select the Highest Education.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="additionalDegree">Additional Degree</label>
                                    <select id="additionalDegree" class="form-control" name="additionalDegree">
                                        <option value="" disabled selected>Select Additional Degree</option>
                                        <option value="B Plan" <?php if ($row['additionalDegree'] == 'B Plan') echo 'selected'; ?>>B Plan</option>
                                        <option value="B Arch" <?php if ($row['additionalDegree'] == 'B Arch') echo 'selected'; ?>>B Arch</option>
                                        <option value="BE" <?php if ($row['additionalDegree'] == 'BE') echo 'selected'; ?>>BE</option>
                                        <option value="B Tech" <?php if ($row['additionalDegree'] == 'B Tech') echo 'selected'; ?>>B Tech</option>
                                        <option value="BSc Computer Science" <?php if ($row['additionalDegree'] == 'BSc Computer Science') echo 'selected'; ?>>BSc Computer Science</option>
                                        <option value="BSc IT" <?php if ($row['additionalDegree'] == 'BSc IT') echo 'selected'; ?>>BSc IT</option>
                                        <option value="B Phil" <?php if ($row['additionalDegree'] == 'B Phil') echo 'selected'; ?>>B Phil</option>
                                        <option value="B Com" <?php if ($row['additionalDegree'] == 'B Com') echo 'selected'; ?>>B Com</option>
                                        <option value="BA" <?php if ($row['additionalDegree'] == 'BA') echo 'selected'; ?>>BA</option>
                                        <option value="BFA" <?php if ($row['additionalDegree'] == 'BFA') echo 'selected'; ?>>BFA</option>
                                        <option value="BLIS" <?php if ($row['additionalDegree'] == 'BLIS') echo 'selected'; ?>>BLIS</option>
                                        <option value="BSW" <?php if ($row['additionalDegree'] == 'BSW') echo 'selected'; ?>>BSW</option>
                                        <option value="BMM (MASS MEDIA)" <?php if ($row['additionalDegree'] == 'BMM (MASS MEDIA)') echo 'selected'; ?>>BMM (MASS MEDIA)</option>
                                        <option value="BEd" <?php if ($row['additionalDegree'] == 'BEd') echo 'selected'; ?>>BEd</option>
                                        <option value="MEd" <?php if ($row['additionalDegree'] == 'MEd') echo 'selected'; ?>>MEd</option>
                                        <!-- Add more options here -->
                                        <option value="Other Education" <?php if ($row['additionalDegree'] == 'Other Education') echo 'selected'; ?>>Other Education</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please select the Highest Education.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="employedIn">Employed In</label>
                                    <select class="form-control" id="employedIn" name="employedIn" required>
                                        <option value="" disabled selected>Select Your Office</option>
                                        <option value="Government" <?php if ($row['employedIn'] == 'Government') echo 'selected'; ?>>Government</option>
                                        <option value="Private" <?php if ($row['employedIn'] == 'Private') echo 'selected'; ?>>Private</option>
                                        <option value="Business" <?php if ($row['employedIn'] == 'Business') echo 'selected'; ?>>Business</option>
                                        <option value="Defence" <?php if ($row['employedIn'] == 'Defence') echo 'selected'; ?>>Defence</option>
                                        <option value="Self Employed" <?php if ($row['employedIn'] == 'Self Employed') echo 'selected'; ?>>Self Employed</option>
                                        <option value="Not Working" <?php if ($row['employedIn'] == 'Not Working') echo 'selected'; ?>>Not Working</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select your employment status.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="occupation">Occupation</label>
                                    <select class="form-control" id="occupation" name="occupation" required>
                                        <option value="" disabled>Select Your Occupation</option>
                                        <option value="Civil Engineer" <?php if ($row['occupation'] == 'Civil Engineer') echo 'selected'; ?>>Civil Engineer</option>
                                        <option value="Clerical Official" <?php if ($row['occupation'] == 'Clerical Official') echo 'selected'; ?>>Clerical Official</option>
                                        <option value="Commercial Pilot" <?php if ($row['occupation'] == 'Commercial Pilot') echo 'selected'; ?>>Commercial Pilot</option>
                                        <option value="Company Secretary" <?php if ($row['occupation'] == 'Company Secretary') echo 'selected'; ?>>Company Secretary</option>
                                        <option value="Computer Professional" <?php if ($row['occupation'] == 'Computer Professional') echo 'selected'; ?>>Computer Professional</option>
                                        <option value="Consultant" <?php if ($row['occupation'] == 'Consultant') echo 'selected'; ?>>Consultant</option>
                                        <option value="Contractor" <?php if ($row['occupation'] == 'Contractor') echo 'selected'; ?>>Contractor</option>
                                        <option value="Cost Accountant" <?php if ($row['occupation'] == 'Cost Accountant') echo 'selected'; ?>>Cost Accountant</option>
                                        <option value="Creative Person" <?php if ($row['occupation'] == 'Creative Person') echo 'selected'; ?>>Creative Person</option>
                                        <option value="Customer Support Professional" <?php if ($row['occupation'] == 'Customer Support Professional') echo 'selected'; ?>>Customer Support Professional</option>
                                        <option value="Defense Employee" <?php if ($row['occupation'] == 'Defense Employee') echo 'selected'; ?>>Defense Employee</option>
                                        <option value="Dentist" <?php if ($row['occupation'] == 'Dentist') echo 'selected'; ?>>Dentist</option>
                                        <option value="Designer" <?php if ($row['occupation'] == 'Designer') echo 'selected'; ?>>Designer</option>
                                        <option value="Doctor" <?php if ($row['occupation'] == 'Doctor') echo 'selected'; ?>>Doctor</option>
                                        <option value="Economist" <?php if ($row['occupation'] == 'Economist') echo 'selected'; ?>>Economist</option>
                                        <option value="Engineer" <?php if ($row['occupation'] == 'Engineer') echo 'selected'; ?>>Engineer</option>
                                        <option value="Engineer (Mechanical)" <?php if ($row['occupation'] == 'Engineer (Mechanical)') echo 'selected'; ?>>Engineer (Mechanical)</option>
                                        <option value="Engineer (Project)" <?php if ($row['occupation'] == 'Engineer (Project)') echo 'selected'; ?>>Engineer (Project)</option>
                                        <option value="Entertainment Professional" <?php if ($row['occupation'] == 'Entertainment Professional') echo 'selected'; ?>>Entertainment Professional</option>
                                        <option value="Event Manager" <?php if ($row['occupation'] == 'Event Manager') echo 'selected'; ?>>Event Manager</option>
                                        <option value="Executive" <?php if ($row['occupation'] == 'Executive') echo 'selected'; ?>>Executive</option>
                                        <option value="Factory worker" <?php if ($row['occupation'] == 'Factory worker') echo 'selected'; ?>>Factory worker</option>
                                        <option value="Farmer" <?php if ($row['occupation'] == 'Farmer') echo 'selected'; ?>>Farmer</option>
                                        <option value="Fashion Designer" <?php if ($row['occupation'] == 'Fashion Designer') echo 'selected'; ?>>Fashion Designer</option>
                                        <option value="Finance Professional" <?php if ($row['occupation'] == 'Finance Professional') echo 'selected'; ?>>Finance Professional</option>
                                        <option value="Flight Attendant" <?php if ($row['occupation'] == 'Flight Attendant') echo 'selected'; ?>>Flight Attendant</option>
                                        <option value="Government Employee" <?php if ($row['occupation'] == 'Government Employee') echo 'selected'; ?>>Government Employee</option>
                                        <option value="Health Care Professional" <?php if ($row['occupation'] == 'Health Care Professional') echo 'selected'; ?>>Health Care Professional</option>
                                        <option value="Home Maker" <?php if ($row['occupation'] == 'Home Maker') echo 'selected'; ?>>Home Maker</option>
                                        <option value="Hotel & Restaurant Professional" <?php if ($row['occupation'] == 'Hotel & Restaurant Professional') echo 'selected'; ?>>Hotel & Restaurant Professional</option>
                                        <option value="Human Resources Professional" <?php if ($row['occupation'] == 'Human Resources Professional') echo 'selected'; ?>>Human Resources Professional</option>
                                        <option value="Interior Designer" <?php if ($row['occupation'] == 'Interior Designer') echo 'selected'; ?>>Interior Designer</option>
                                        <option value="Investment Professional" <?php if ($row['occupation'] == 'Investment Professional') echo 'selected'; ?>>Investment Professional</option>
                                        <option value="IT / Telecom Professional" <?php if ($row['occupation'] == 'IT / Telecom Professional') echo 'selected'; ?>>IT / Telecom Professional</option>
                                        <option value="Journalist" <?php if ($row['occupation'] == 'Journalist') echo 'selected'; ?>>Journalist</option>
                                        <option value="Lawyer" <?php if ($row['occupation'] == 'Lawyer') echo 'selected'; ?>>Lawyer</option>
                                        <option value="Lecturer" <?php if ($row['occupation'] == 'Lecturer') echo 'selected'; ?>>Lecturer</option>
                                        <option value="Legal Professional" <?php if ($row['occupation'] == 'Legal Professional') echo 'selected'; ?>>Legal Professional</option>
                                        <option value="Manager" <?php if ($row['occupation'] == 'Manager') echo 'selected'; ?>>Manager</option>
                                        <option value="Marketing Professional" <?php if ($row['occupation'] == 'Marketing Professional') echo 'selected'; ?>>Marketing Professional</option>
                                        <option value="Media Professional" <?php if ($row['occupation'] == 'Media Professional') echo 'selected'; ?>>Media Professional</option>
                                        <option value="Medical Professional" <?php if ($row['occupation'] == 'Medical Professional') echo 'selected'; ?>>Medical Professional</option>
                                        <option value="Medical Transcriptionist" <?php if ($row['occupation'] == 'Medical Transcriptionist') echo 'selected'; ?>>Medical Transcriptionist</option>
                                        <option value="Merchant Naval Officer" <?php if ($row['occupation'] == 'Merchant Naval Officer') echo 'selected'; ?>>Merchant Naval Officer</option>
                                        <option value="Not Working" <?php if ($row['occupation'] == 'Not Working') echo 'selected'; ?>>Not Working</option>
                                        <option value="Nurse" <?php if ($row['occupation'] == 'Nurse') echo 'selected'; ?>>Nurse</option>
                                        <option value="Occupational Therapist" <?php if ($row['occupation'] == 'Occupational Therapist') echo 'selected'; ?>>Occupational Therapist</option>
                                        <option value="Optician" <?php if ($row['occupation'] == 'Optician') echo 'selected'; ?>>Optician</option>
                                        <option value="Others" <?php if ($row['occupation'] == 'Others') echo 'selected'; ?>>Others</option>
                                        <option value="Pharmacist" <?php if ($row['occupation'] == 'Pharmacist') echo 'selected'; ?>>Pharmacist</option>
                                        <option value="Physician Assistant" <?php if ($row['occupation'] == 'Physician Assistant') echo 'selected'; ?>>Physician Assistant</option>
                                        <option value="Physicist" <?php if ($row['occupation'] == 'Physicist') echo 'selected'; ?>>Physicist</option>
                                        <option value="Physiotherapist" <?php if ($row['occupation'] == 'Physiotherapist') echo 'selected'; ?>>Physiotherapist</option>
                                        <option value="Pilot" <?php if ($row['occupation'] == 'Pilot') echo 'selected'; ?>>Pilot</option>
                                        <option value="Politician" <?php if ($row['occupation'] == 'Politician') echo 'selected'; ?>>Politician</option>
                                        <option value="Production professional" <?php if ($row['occupation'] == 'Production professional') echo 'selected'; ?>>Production professional</option>
                                        <option value="Professor" <?php if ($row['occupation'] == 'Professor') echo 'selected'; ?>>Professor</option>
                                        <option value="Psychologist" <?php if ($row['occupation'] == 'Psychologist') echo 'selected'; ?>>Psychologist</option>
                                        <option value="Public Relations Professional" <?php if ($row['occupation'] == 'Public Relations Professional') echo 'selected'; ?>>Public Relations Professional</option>
                                        <option value="Real Estate Professional" <?php if ($row['occupation'] == 'Real Estate Professional') echo 'selected'; ?>>Real Estate Professional</option>
                                        <option value="Research Scholar" <?php if ($row['occupation'] == 'Research Scholar') echo 'selected'; ?>>Research Scholar</option>
                                        <option value="Retail Professional" <?php if ($row['occupation'] == 'Retail Professional') echo 'selected'; ?>>Retail Professional</option>
                                        <option value="Retired Person" <?php if ($row['occupation'] == 'Retired Person') echo 'selected'; ?>>Retired Person</option>
                                        <option value="Sales Professional" <?php if ($row['occupation'] == 'Sales Professional') echo 'selected'; ?>>Sales Professional</option>
                                        <option value="Scientist" <?php if ($row['occupation'] == 'Scientist') echo 'selected'; ?>>Scientist</option>
                                        <option value="Self-employed Person" <?php if ($row['occupation'] == 'Self-employed Person') echo 'selected'; ?>>Self-employed Person</option>
                                        <option value="Social Worker" <?php if ($row['occupation'] == 'Social Worker') echo 'selected'; ?>>Social Worker</option>
                                        <option value="Software Consultant" <?php if ($row['occupation'] == 'Software Consultant') echo 'selected'; ?>>Software Consultant</option>
                                        <option value="Sportsman" <?php if ($row['occupation'] == 'Sportsman') echo 'selected'; ?>>Sportsman</option>
                                        <option value="Student" <?php if ($row['occupation'] == 'Student') echo 'selected'; ?>>Student</option>
                                        <option value="Teacher" <?php if ($row['occupation'] == 'Teacher') echo 'selected'; ?>>Teacher</option>
                                        <option value="Technician" <?php if ($row['occupation'] == 'Technician') echo 'selected'; ?>>Technician</option>
                                        <option value="Training Professional" <?php if ($row['occupation'] == 'Training Professional') echo 'selected'; ?>>Training Professional</option>
                                        <option value="Transportation Professional" <?php if ($row['occupation'] == 'Transportation Professional') echo 'selected'; ?>>Transportation Professional</option>
                                        <option value="Veterinary Doctor" <?php if ($row['occupation'] == 'Veterinary Doctor') echo 'selected'; ?>>Veterinary Doctor</option>
                                        <option value="Volunteer" <?php if ($row['occupation'] == 'Volunteer') echo 'selected'; ?>>Volunteer</option>
                                        <option value="Writer" <?php if ($row['occupation'] == 'Writer') echo 'selected'; ?>>Writer</option>
                                        <option value="Zoologist" <?php if ($row['occupation'] == 'Zoologist') echo 'selected'; ?>>Zoologist</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select an Occupation.
                                    </div>
                                </div>


                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="annualIncome">Annual Income</label>
                                    <select class="form-control" id="annualIncome" name="annualIncome" required>
                                        <option value="" disabled selected>Select Your Annual Income</option>
                                        <option value="50,000" <?php if ($row['annualIncome'] == '50,000') echo 'selected'; ?>>50,000</option>
                                        <option value="1,00,000" <?php if ($row['annualIncome'] == '1,00,000') echo 'selected'; ?>>1,00,000</option>
                                        <option value="2,00,000" <?php if ($row['annualIncome'] == '2,00,000') echo 'selected'; ?>>2,00,000</option>
                                        <option value="3,00,000" <?php if ($row['annualIncome'] == '3,00,000') echo 'selected'; ?>>3,00,000</option>
                                        <option value="4,00,000" <?php if ($row['annualIncome'] == '4,00,000') echo 'selected'; ?>>4,00,000</option>
                                        <option value="5,00,000" <?php if ($row['annualIncome'] == '5,00,000') echo 'selected'; ?>>5,00,000</option>
                                        <option value="6,00,000" <?php if ($row['annualIncome'] == '6,00,000') echo 'selected'; ?>>6,00,000</option>
                                        <option value="7,00,000" <?php if ($row['annualIncome'] == '7,00,000') echo 'selected'; ?>>7,00,000</option>
                                        <option value="8,00,000" <?php if ($row['annualIncome'] == '8,00,000') echo 'selected'; ?>>8,00,000</option>
                                        <option value="9,00,000" <?php if ($row['annualIncome'] == '9,00,000') echo 'selected'; ?>>9,00,000</option>
                                        <option value="10,00,000" <?php if ($row['annualIncome'] == '10,00,000') echo 'selected'; ?>>10,00,000</option>
                                        <option value="11,00,000" <?php if ($row['annualIncome'] == '11,00,000') echo 'selected'; ?>>11,00,000</option>
                                        <option value="12,00,000" <?php if ($row['annualIncome'] == '12,00,000') echo 'selected'; ?>>12,00,000</option>
                                        <option value="13,00,000" <?php if ($row['annualIncome'] == '13,00,000') echo 'selected'; ?>>13,00,000</option>
                                        <option value="14,00,000" <?php if ($row['annualIncome'] == '14,00,000') echo 'selected'; ?>>14,00,000</option>
                                        <option value="15,00,000" <?php if ($row['annualIncome'] == '15,00,000') echo 'selected'; ?>>15,00,000</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide an Annual Income.
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">Family Details</div>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="familyType">Family Type</label>
                                    <select class="form-control" id="familyType" name="familyType" required>
                                        <option value="" disabled selected>Select Your Family Type</option>
                                        <option value="Joint" <?php if ($row['familyType'] == 'Joint') echo 'selected'; ?>>Joint</option>
                                        <option value="Nuclear" <?php if ($row['familyType'] == 'Nuclear') echo 'selected'; ?>>Nuclear</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Family Type.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="familyValue">Family Value</label>
                                    <select class="form-control" id="familyValue" name="familyValue" required>
                                        <option value="" disabled selected>Select Your Family Value</option>
                                        <option value="Orthodox" <?php if ($row['familyValue'] == 'Orthodox') echo 'selected'; ?>>Orthodox</option>
                                        <option value="Traditional" <?php if ($row['familyValue'] == 'Traditional') echo 'selected'; ?>>Traditional</option>
                                        <option value="Moderate" <?php if ($row['familyValue'] == 'Moderate') echo 'selected'; ?>>Moderate</option>
                                        <option value="Liberal" <?php if ($row['familyValue'] == 'Liberal') echo 'selected'; ?>>Liberal</option>
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
                                        <option value="" disabled>Select Your Family Status</option>
                                        <option value="Middle class" <?php if ($row['familyStatus'] == 'Middle class') echo 'selected'; ?>>Middle class</option>
                                        <option value="Upper middle class" <?php if ($row['familyStatus'] == 'Upper middle class') echo 'selected'; ?>>Upper middle class</option>
                                        <option value="Rich" <?php if ($row['familyStatus'] == 'Rich') echo 'selected'; ?>>Rich</option>
                                        <option value="Affluent" <?php if ($row['familyStatus'] == 'Affluent') echo 'selected'; ?>>Affluent</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Family Status.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="fatherOccupation">Father's Occupation</label>
                                    <input type="text" id="fatherOccupation" name="fatherOccupation" class="form-control" value="<?php echo $row['fatherOccupation']; ?>">
                                    <div class="invalid-feedback">
                                        Please provide a Father's Occupation.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="motherOccupation">Mother's Occupation</label>
                                    <input type="text" id="motherOccupation" name="motherOccupation" class="form-control" value="<?php echo $row['motherOccupation']; ?>">
                                    <div class="invalid-feedback">
                                        Please provide a Mother's Occupation.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="numBrothers">Number of Brothers</label>
                                    <select class="form-control" id="numBrothers" name="numBrothers" required>
                                        <option value="" disabled selected>Select Your Number of Brothers</option>
                                        <option value="No Brother" <?php if ($row['numBrothers'] == 'No Brother') echo 'selected'; ?>>No Brother</option>
                                        <option value="1 Brother" <?php if ($row['numBrothers'] == '1 Brother') echo 'selected'; ?>>1 Brother</option>
                                        <option value="2 Brothers" <?php if ($row['numBrothers'] == '2 Brothers') echo 'selected'; ?>>2 Brothers</option>
                                        <option value="3 Brothers" <?php if ($row['numBrothers'] == '3 Brothers') echo 'selected'; ?>>3 Brothers</option>
                                        <option value="4 Brothers" <?php if ($row['numBrothers'] == '4 Brothers') echo 'selected'; ?>>4 Brothers</option>
                                        <option value="4 + Brothers" <?php if ($row['numBrothers'] == '4 + Brothers') echo 'selected'; ?>>4 + Brothers</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Number of Brothers.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="numMarriedBrothers">Number of Married Brothers</label>
                                    <!-- <input type="text" id="numMarriedBrothers" name="numMarriedBrothers" class="form-control" value="<?php echo $row['numMarriedBrothers']; ?>"> -->
                                    <select class="form-control" id="numMarriedBrothers" name="numMarriedBrothers" required>
                                        <option value="" disabled selected>Select Your Number of Brothers</option>
                                        <option value="No Brother" <?php if ($row['numMarriedBrothers'] == 'No Brother') echo 'selected'; ?>>No Brother</option>
                                        <option value="1 Brother" <?php if ($row['numMarriedBrothers'] == '1 Brother') echo 'selected'; ?>>1 Brother</option>
                                        <option value="2 Brothers" <?php if ($row['numMarriedBrothers'] == '2 Brothers') echo 'selected'; ?>>2 Brothers</option>
                                        <option value="3 Brothers" <?php if ($row['numMarriedBrothers'] == '3 Brothers') echo 'selected'; ?>>3 Brothers</option>
                                        <option value="4 Brothers" <?php if ($row['numMarriedBrothers'] == '4 Brothers') echo 'selected'; ?>>4 Brothers</option>
                                        <option value="4 + Brothers" <?php if ($row['numMarriedBrothers'] == '4 + Brothers') echo 'selected'; ?>>4 + Brothers</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Number of Married Brothers.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="numSisters">Number of Sisters</label>
                                    <!-- <input type="text" id="numSisters" name="numSisters" class="form-control" value="<?php echo $row['numSisters']; ?>"> -->
                                    <select class="form-control" id="numSisters" name="numSisters" required>
                                        <option value="" disabled selected>Select Your Number of Brothers</option>
                                        <option value="No Sisters" <?php if ($row['numSisters'] == 'No Brother') echo 'selected'; ?>>No Sisters</option>
                                        <option value="1 Sister" <?php if ($row['numSisters'] == '1 Sisters') echo 'selected'; ?>>1 Sister</option>
                                        <option value="2 Sisters" <?php if ($row['numSisters'] == '2 Sisters') echo 'selected'; ?>>2 Sisters</option>
                                        <option value="3 Sisters" <?php if ($row['numSisters'] == '3 Sisters') echo 'selected'; ?>>3 Sisters</option>
                                        <option value="4 Sisters" <?php if ($row['numSisters'] == '4 Sisters') echo 'selected'; ?>>4 Sisters</option>
                                        <option value="4 + Sisters" <?php if ($row['numSisters'] == '4 + Sisters') echo 'selected'; ?>>4 + Sisters</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Number of Sisters.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="numMarriedSisters">Number of Married Sisters</label>
                                    <!-- <input type="text" id="numMarriedSisters" name="numMarriedSisters" class="form-control" value="<?php echo $row['numMarriedSisters']; ?>"> -->
                                    <select class="form-control" id="numMarriedSisters" name="numMarriedSisters" required>
                                        <option value="" disabled selected>Select Your Number of Brothers</option>
                                        <option value="No Sisters" <?php if ($row['numMarriedSisters'] == 'No Brother') echo 'selected'; ?>>No Sisters</option>
                                        <option value="1 Sister" <?php if ($row['numMarriedSisters'] == '1 Sisters') echo 'selected'; ?>>1 Sister</option>
                                        <option value="2 Sisters" <?php if ($row['numMarriedSisters'] == '2 Sisters') echo 'selected'; ?>>2 Sisters</option>
                                        <option value="3 Sisters" <?php if ($row['numMarriedSisters'] == '3 Sisters') echo 'selected'; ?>>3 Sisters</option>
                                        <option value="4 Sisters" <?php if ($row['numMarriedSisters'] == '4 Sisters') echo 'selected'; ?>>4 Sisters</option>
                                        <option value="4 + Sisters" <?php if ($row['numMarriedSisters'] == '4 + Sisters') echo 'selected'; ?>>4 + Sisters</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Number of Married Sisters.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">Location Details</div>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCountry">Country</label>
                                    <select id="inputCountry" name="inputCountry" class="form-control" onchange="populateStates()">
                                        <option value="" disabled>Select Your Country</option>
                                        <option value="India" <?php if ($row['inputCountry'] == 'India') echo 'selected'; ?>>India</option>
                                        <option value="USA" <?php if ($row['inputCountry'] == 'USA') echo 'selected'; ?>>USA</option>
                                        <!-- Add more options as needed -->
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Country.
                                    </div>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">State</label>
                                    <input type="text" id="inputState" name="inputState" onchange="populateCities()" class="form-control" value="<?php echo $row['inputState']; ?>">

                                    <div class="invalid-feedback">
                                        Please provide a State.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" id="inputCity" name="inputCity" class="form-control" value="<?php echo $row['inputCity']; ?>">

                                    <div class="invalid-feedback">
                                        Please provide a City.
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
                                    <select class="form-control" id="diet" name="diet" required>
                                        <option value="" disabled>Select Your Diet</option>
                                        <option value="Vegetarian" <?php if ($row['diet'] == 'Vegetarian') echo 'selected'; ?>>Vegetarian</option>
                                        <option value="Non Vegetarian" <?php if ($row['diet'] == 'Non Vegetarian') echo 'selected'; ?>>Non Vegetarian</option>
                                        <option value="Eggetarian" <?php if ($row['diet'] == 'Eggetarian') echo 'selected'; ?>>Eggetarian</option>
                                        <!-- Add more options below -->
                                        <option value="Vegan" <?php if ($row['diet'] == 'Vegan') echo 'selected'; ?>>Vegan</option>
                                        <option value="Pescatarian" <?php if ($row['diet'] == 'Pescatarian') echo 'selected'; ?>>Pescatarian</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Diet.
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="smokingHabitss">Smoking Habits</label>
                                    <select class="form-control" id="smokingHabitss" name="smokingHabitss" required>
                                        <option value="" disabled>Select Your Smoking Habits</option>
                                        <option value="daily" <?php if ($row['smokingHabits'] == 'daily') echo 'selected'; ?>>Daily</option>
                                        <option value="occasional" <?php if ($row['smokingHabits'] == 'occasional') echo 'selected'; ?>>Occasional</option>
                                        <option value="no" <?php if ($row['smokingHabits'] == 'no') echo 'selected'; ?>>No</option>
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
                                        <option value="daily" <?php if ($row['drinkingHabits'] == 'daily') echo 'selected'; ?>>Daily</option>
                                        <option value="occasional" <?php if ($row['drinkingHabits'] == 'occasional') echo 'selected'; ?>>Occasional</option>
                                        <option value="no" <?php if ($row['drinkingHabits'] == 'no') echo 'selected'; ?>>No</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide Drinking Habits.
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
                                        <option value="Below 4ft 6in - 137cm" <?php if ($row['height'] == 'Below 4ft 6in - 137cm') echo 'selected'; ?>>Below 4ft 6in - 137cm</option>
                                        <option value="4ft 6in - 137cm" <?php if ($row['height'] == '4ft 6in - 137cm') echo 'selected'; ?>>4ft 6in - 137cm</option>
                                        <option value="4ft 7in - 139cm" <?php if ($row['height'] == '4ft 7in - 139cm') echo 'selected'; ?>>4ft 7in - 139cm</option>
                                        <option value="4ft 8in - 142cm" <?php if ($row['height'] == '4ft 8in - 142cm') echo 'selected'; ?>>4ft 8in - 142cm</option>
                                        <option value="4ft 9in - 144cm" <?php if ($row['height'] == '4ft 9in - 144cm') echo 'selected'; ?>>4ft 9in - 144cm</option>
                                        <option value="4ft 10in - 147cm" <?php if ($row['height'] == '4ft 10in - 147cm') echo 'selected'; ?>>4ft 10in - 147cm</option>
                                        <option value="4ft 11in - 149cm" <?php if ($row['height'] == '4ft 11in - 149cm') echo 'selected'; ?>>4ft 11in - 149cm</option>
                                        <option value="5ft - 152cm" <?php if ($row['height'] == '5ft - 152cm') echo 'selected'; ?>>5ft - 152cm</option>
                                        <option value="5ft 1in - 154cm" <?php if ($row['height'] == '5ft 1in - 154cm') echo 'selected'; ?>>5ft 1in - 154cm</option>
                                        <option value="5ft 2in - 157cm" <?php if ($row['height'] == '5ft 2in - 157cm') echo 'selected'; ?>>5ft 2in - 157cm</option>
                                        <option value="5ft 3in - 160cm" <?php if ($row['height'] == '5ft 3in - 160cm') echo 'selected'; ?>>5ft 3in - 160cm</option>
                                        <option value="5ft 4in - 162cm" <?php if ($row['height'] == '5ft 4in - 162cm') echo 'selected'; ?>>5ft 4in - 162cm</option>
                                        <option value="5ft 5in - 165cm" <?php if ($row['height'] == '5ft 5in - 165cm') echo 'selected'; ?>>5ft 5in - 165cm</option>
                                        <option value="5ft 6in - 167cm" <?php if ($row['height'] == '5ft 6in - 167cm') echo 'selected'; ?>>5ft 6in - 167cm</option>
                                        <option value="5ft 7in - 170cm" <?php if ($row['height'] == '5ft 7in - 170cm') echo 'selected'; ?>>5ft 7in - 170cm</option>
                                        <option value="5ft 8in - 172cm" <?php if ($row['height'] == '5ft 8in - 172cm') echo 'selected'; ?>>5ft 8in - 172cm</option>
                                        <option value="5ft 9in - 175cm" <?php if ($row['height'] == '5ft 9in - 175cm') echo 'selected'; ?>>5ft 9in - 175cm</option>
                                        <option value="5ft 10in - 177cm" <?php if ($row['height'] == '5ft 10in - 177cm') echo 'selected'; ?>>5ft 10in - 177cm</option>
                                        <option value="5ft 11in - 180cm" <?php if ($row['height'] == '5ft 11in - 180cm') echo 'selected'; ?>>5ft 11in - 180cm</option>
                                        <option value="6ft - 182cm" <?php if ($row['height'] == '6ft - 182cm') echo 'selected'; ?>>6ft - 182cm</option>
                                        <option value="6ft 1in - 185cm" <?php if ($row['height'] == '6ft 1in - 185cm') echo 'selected'; ?>>6ft 1in - 185cm</option>
                                        <option value="6ft 2in - 187cm" <?php if ($row['height'] == '6ft 2in - 187cm') echo 'selected'; ?>>6ft 2in - 187cm</option>
                                        <option value="6ft 3in - 190cm" <?php if ($row['height'] == '6ft 3in - 190cm') echo 'selected'; ?>>6ft 3in - 190cm</option>
                                        <option value="6ft 4in - 193cm" <?php if ($row['height'] == '6ft 4in - 193cm') echo 'selected'; ?>>6ft 4in - 193cm</option>
                                        <option value="6ft 5in - 195cm" <?php if ($row['height'] == '6ft 5in - 195cm') echo 'selected'; ?>>6ft 5in - 195cm</option>
                                        <option value="6ft 6in - 198cm" <?php if ($row['height'] == '6ft 6in - 198cm') echo 'selected'; ?>>6ft 6in - 198cm</option>
                                        <option value="6ft 7in - 200cm" <?php if ($row['height'] == '6ft 7in - 200cm') echo 'selected'; ?>>6ft 7in - 200cm</option>
                                        <option value="6ft 8in - 203cm" <?php if ($row['height'] == '6ft 8in - 203cm') echo 'selected'; ?>>6ft 8in - 203cm</option>
                                        <option value="6ft 9in - 205cm" <?php if ($row['height'] == '6ft 9in - 205cm') echo 'selected'; ?>>6ft 9in - 205cm</option>
                                        <option value="6ft 10in - 208cm" <?php if ($row['height'] == '6ft 10in - 208cm') echo 'selected'; ?>>6ft 10in - 208cm</option>
                                        <option value="6ft 11in - 210cm" <?php if ($row['height'] == '6ft 11in - 210cm') echo 'selected'; ?>>6ft 11in - 210cm</option>
                                        <option value="7ft - 213cm" <?php if ($row['height'] == '7ft - 213cm') echo 'selected'; ?>>7ft - 213cm</option>
                                        <option value="Above 7ft - 213cm" <?php if ($row['height'] == 'Above 7ft - 213cm') echo 'selected'; ?>>Above 7ft - 213cm</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Height.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="weight">Weight (kg)</label>
                                    <select class="form-control" id="weight" name="weight" required>
                                        <option value="" disabled>Select Your Weight</option>
                                        <?php
                                        // Assuming $row['weight'] holds the value you want to match
                                        for ($i = 30; $i <= 180; $i++) {
                                            echo '<option value="' . $i . '"';
                                            if ($row['weight'] == $i) {
                                                echo ' selected';
                                            }
                                            echo '>' . $i . ' Kg</option>';
                                        }
                                        ?>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Weight.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bodyType">Body Type</label>
                                    <select id="bodyType" name="bodyType" class="form-control" required>
                                        <option value="" disabled>Select Body Type</option>
                                        <option value="Slim" <?php if ($row['bodyType'] == 'Slim') echo 'selected'; ?>>Slim</option>
                                        <option value="Average" <?php if ($row['bodyType'] == 'Average') echo 'selected'; ?>>Average</option>
                                        <option value="Athletic" <?php if ($row['bodyType'] == 'Athletic') echo 'selected'; ?>>Athletic</option>
                                        <option value="Heavy" <?php if ($row['bodyType'] == 'Heavy') echo 'selected'; ?>>Heavy</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a Body Type.
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="complexion">Complexion</label>
                                    <select class="form-control" id="complexion" name="complexion" required>
                                        <option value="" disabled>Select Your Complexion</option>
                                        <option value="Very Fair" <?php if ($row['complexion'] == 'Very Fair') echo 'selected'; ?>>Very Fair</option>
                                        <option value="Fair" <?php if ($row['complexion'] == 'Fair') echo 'selected'; ?>>Fair</option>
                                        <option value="Wheatish" <?php if ($row['complexion'] == 'Wheatish') echo 'selected'; ?>>Wheatish</option>
                                        <option value="Wheatish Brown" <?php if ($row['complexion'] == 'Wheatish Brown') echo 'selected'; ?>>Wheatish Brown</option>
                                        <option value="Dark" <?php if ($row['complexion'] == 'Dark') echo 'selected'; ?>>Dark</option>
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
                                        <option value="" disabled>Select Your Physical Status</option>
                                        <option value="Normal" <?php if ($row['physicalStatus'] == 'Normal') echo 'selected'; ?>>Normal</option>
                                        <option value="Physically challenged" <?php if ($row['physicalStatus'] == 'Physically challenged') echo 'selected'; ?>>Physically challenged</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please provide a Physical Status.
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
                                    <select class="form-control" id="doshType" name="doshType">
                                        <option value="" disabled selected>Choose Dosh Type</option>
                                        <option value="Kaal Sarp Dosh" <?php if ($row['doshType'] == 'Kaal Sarp Dosh') echo 'selected'; ?>>Kaal Sarp Dosh</option>
                                        <option value="Pitru Dosh" <?php if ($row['doshType'] == 'Pitru Dosh') echo 'selected'; ?>>Pitru Dosh</option>
                                        <option value="Nadi Dosh" <?php if ($row['doshType'] == 'Nadi Dosh') echo 'selected'; ?>>Nadi Dosh</option>
                                        <option value="Guru Chandal Dosh" <?php if ($row['doshType'] == 'Guru Chandal Dosh') echo 'selected'; ?>>Guru Chandal Dosh</option>
                                        <option value="Grahan Dosh" <?php if ($row['doshType'] == 'Grahan Dosh') echo 'selected'; ?>>Grahan Dosh</option>
                                        <option value="Gandamool Dosh" <?php if ($row['doshType'] == 'Gandamool Dosh') echo 'selected'; ?>>Gandamool Dosh</option>
                                        <option value="Shani Dosh" <?php if ($row['doshType'] == 'Shani Dosh') echo 'selected'; ?>>Shani Dosh</option>
                                        <option value="Shrapit Dosh" <?php if ($row['doshType'] == 'Shrapit Dosh') echo 'selected'; ?>>Shrapit Dosh</option>
                                        <option value="Chandra Dosh" <?php if ($row['doshType'] == 'Chandra Dosh') echo 'selected'; ?>>Chandra Dosh</option>
                                        <option value="Kemadruma dosh" <?php if ($row['doshType'] == 'Kemadruma dosh') echo 'selected'; ?>>Kemadruma dosh</option>
                                    </select>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="star">Star</label>
                                    <select class="form-control" id="star" name="star" required>
                                        <option value="" disabled selected>Select Your Star</option>
                                        <option value="Ashwini" <?php if ($row['star'] == 'Ashwini') echo 'selected'; ?>>Ashwini</option>
                                        <option value="Bharani" <?php if ($row['star'] == 'Bharani') echo 'selected'; ?>>Bharani</option>
                                        <option value="Krittika" <?php if ($row['star'] == 'Krittika') echo 'selected'; ?>>Krittika</option>
                                        <option value="Rohini" <?php if ($row['star'] == 'Rohini') echo 'selected'; ?>>Rohini</option>
                                        <option value="Mrigashira" <?php if ($row['star'] == 'Mrigashira') echo 'selected'; ?>>Mrigashira</option>
                                        <option value="Ardra" <?php if ($row['star'] == 'Ardra') echo 'selected'; ?>>Ardra</option>
                                        <option value="Punarvasu" <?php if ($row['star'] == 'Punarvasu') echo 'selected'; ?>>Punarvasu</option>
                                        <option value="Pushyaa" <?php if ($row['star'] == 'Pushyaa') echo 'selected'; ?>>Pushyaa</option>
                                        <option value="Ashlesha" <?php if ($row['star'] == 'Ashlesha') echo 'selected'; ?>>Ashlesha</option>
                                        <option value="Magha" <?php if ($row['star'] == 'Magha') echo 'selected'; ?>>Magha</option>
                                        <option value="Purva Phalguni" <?php if ($row['star'] == 'Purva Phalguni') echo 'selected'; ?>>Purva Phalguni</option>
                                        <option value="Uttara Phalguni" <?php if ($row['star'] == 'Uttara Phalguni') echo 'selected'; ?>>Uttara Phalguni</option>
                                        <option value="Hasta" <?php if ($row['star'] == 'Hasta') echo 'selected'; ?>>Hasta</option>
                                        <option value="Chitra" <?php if ($row['star'] == 'Chitra') echo 'selected'; ?>>Chitra</option>
                                        <option value="Swati" <?php if ($row['star'] == 'Swati') echo 'selected'; ?>>Swati</option>
                                        <option value="Anuradha" <?php if ($row['star'] == 'Anuradha') echo 'selected'; ?>>Anuradha</option>
                                        <option value="Jyeshtha" <?php if ($row['star'] == 'Jyeshtha') echo 'selected'; ?>>Jyeshtha</option>
                                        <option value="Mula" <?php if ($row['star'] == 'Mula') echo 'selected'; ?>>Mula</option>
                                        <option value="Purva Ashadha" <?php if ($row['star'] == 'Purva Ashadha') echo 'selected'; ?>>Purva Ashadha</option>
                                        <option value="Uttara Ashadha" <?php if ($row['star'] == 'Uttara Ashadha') echo 'selected'; ?>>Uttara Ashadha</option>
                                        <option value="Abhijit" <?php if ($row['star'] == 'Abhijit') echo 'selected'; ?>>Abhijit</option>
                                        <option value="Shravana" <?php if ($row['star'] == 'Shravana') echo 'selected'; ?>>Shravana</option>
                                        <option value="Dhanishta" <?php if ($row['star'] == 'Dhanishta') echo 'selected'; ?>>Dhanishta</option>
                                        <option value="Shatabhisha" <?php if ($row['star'] == 'Shatabhisha') echo 'selected'; ?>>Shatabhisha</option>
                                        <option value="Purva Bhadrapada" <?php if ($row['star'] == 'Purva Bhadrapada') echo 'selected'; ?>>Purva Bhadrapada</option>
                                        <option value="Uttara Bhadrapada" <?php if ($row['star'] == 'Uttara Bhadrapada') echo 'selected'; ?>>Uttara Bhadrapada</option>
                                        <option value="Revati" <?php if ($row['star'] == 'Revati') echo 'selected'; ?>>Revati</option>
                                        <option value="Vishakha" <?php if ($row['star'] == 'Vishakha') echo 'selected'; ?>>Vishakha</option>
                                    </select>


                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="raasi">Raasi/Moonsign</label>
                                    <select class="form-control" id="raasi" name="raasi" required>
                                        <option value="" disabled selected>Select Your Raasi/Moonsign</option>
                                        <option value="Aries" <?php if ($row['raasi'] == 'Aries') echo 'selected'; ?>>Aries</option>
                                        <option value="Taurus" <?php if ($row['raasi'] == 'Taurus') echo 'selected'; ?>>Taurus</option>
                                        <option value="Gemini" <?php if ($row['raasi'] == 'Gemini') echo 'selected'; ?>>Gemini</option>
                                        <option value="Cancer" <?php if ($row['raasi'] == 'Cancer') echo 'selected'; ?>>Cancer</option>
                                        <option value="Leo" <?php if ($row['raasi'] == 'Leo') echo 'selected'; ?>>Leo</option>
                                        <option value="Virgo" <?php if ($row['raasi'] == 'Virgo') echo 'selected'; ?>>Virgo</option>
                                        <option value="Libra" <?php if ($row['raasi'] == 'Libra') echo 'selected'; ?>>Libra</option>
                                        <option value="Scorpio" <?php if ($row['raasi'] == 'Scorpio') echo 'selected'; ?>>Scorpio</option>
                                        <option value="Sagittarius" <?php if ($row['raasi'] == 'Sagittarius') echo 'selected'; ?>>Sagittarius</option>
                                        <option value="Capricorn" <?php if ($row['raasi'] == 'Capricorn') echo 'selected'; ?>>Capricorn</option>
                                        <option value="Aquarius" <?php if ($row['raasi'] == 'Aquarius') echo 'selected'; ?>>Aquarius</option>
                                        <option value="Pisces" <?php if ($row['raasi'] == 'Pisces') echo 'selected'; ?>>Pisces</option>
                                    </select>



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
                            <button type="submit" id="saveButton" name="educationOccupationSubmit">Submit</button>

                        </form>
                    </div>
                    <!-- Upload Photos Tab -->
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Upload and Edit Photos</title>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    </head>

                    <body>
                        <div id="upload-photos" class="tab-pane fade">
                            <div class="container mt-3">
                                <!-- Form for uploading photos -->
                                <form action="edit_image.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Column 1 -->
                                            <!-- Repeat this block for each photo input -->
                                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                <div class="photo-input">
                                                    <div class="photo-placeholder" id="preview<?php echo $i; ?>"></div>
                                                    <label class="photo-label">Photo <?php echo $i; ?>:</label>
                                                    <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview<?php echo $i; ?>')">
                                                </div>
                                            <?php endfor; ?>
                                            <!-- Repeat this block for each photo input -->
                                        </div>
                                        <div class="col-md-4 second-row ones">
                                            <!-- Column 2 -->
                                            <!-- Repeat this block for each photo input -->
                                            <?php for ($i = 5; $i <= 8; $i++) : ?>
                                                <div class="photo-input">
                                                    <div class="photo-placeholder" id="preview<?php echo $i; ?>"></div>
                                                    <label class="photo-label">Photo <?php echo $i; ?>:</label>
                                                    <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview<?php echo $i; ?>')">
                                                </div>
                                            <?php endfor; ?>
                                            <!-- Repeat this block for each photo input -->
                                        </div>
                                    </div>
                                    <button type="submit" name="upload_photos_submit" class="sub1">Submit</button>
                                </form>
                            </div>
                        </div>

                        <script>
                            // JavaScript function to preview uploaded images
                            function previewImage(input, previewId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#' + previewId).css('background-image', 'url(' + e.target.result + ')');
                                        $('#' + previewId).hide();
                                        $('#' + previewId).fadeIn(650);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                            // JavaScript function to validate the form
                            function validateForm() {
                                var inputs = document.querySelectorAll('input[type="file"]');
                                var atLeastOneSelected = false;
                                inputs.forEach(function(input) {
                                    if (input.files.length > 0) {
                                        atLeastOneSelected = true;
                                    }
                                });
                                if (!atLeastOneSelected) {
                                    alert('Please select at least one image.');
                                    return false; // Prevent form submission
                                }
                                return true; // Allow form submission
                            }
                        </script>

                    </body>

                    </html>



                    <!-- Partner Preference Tab -->
                    <div id="partner-preference" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">Basic Preference </div>
                            </div>
                        </div>

                        <br>
                        <form action="d.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="age_from">Age From</label>
                                    <select class="form-control" id="age_from" name="age_from" required>
                                        <option value="" disabled selected>Select Your Age</option>
                                        <option value="18" <?php if ($row['age_from'] == '18') echo 'selected'; ?>>18 Year</option>
                                        <option value="19" <?php if ($row['age_from'] == '19') echo 'selected'; ?>>19 Year</option>
                                        <option value="20" <?php if ($row['age_from'] == '20') echo 'selected'; ?>>20 Year</option>
                                        <option value="21" <?php if ($row['age_from'] == '21') echo 'selected'; ?>>21 Year</option>
                                        <option value="22" <?php if ($row['age_from'] == '22') echo 'selected'; ?>>22 Year</option>
                                        <option value="23" <?php if ($row['age_from'] == '23') echo 'selected'; ?>>23 Year</option>
                                        <option value="24" <?php if ($row['age_from'] == '24') echo 'selected'; ?>>24 Year</option>
                                        <option value="25" <?php if ($row['age_from'] == '25') echo 'selected'; ?>>25 Year</option>
                                        <option value="26" <?php if ($row['age_from'] == '26') echo 'selected'; ?>>26 Year</option>
                                        <option value="27" <?php if ($row['age_from'] == '27') echo 'selected'; ?>>27 Year</option>
                                        <option value="28" <?php if ($row['age_from'] == '28') echo 'selected'; ?>>28 Year</option>
                                        <option value="29" <?php if ($row['age_from'] == '29') echo 'selected'; ?>>29 Year</option>
                                        <option value="30" <?php if ($row['age_from'] == '30') echo 'selected'; ?>>30 Year</option>
                                        <option value="31" <?php if ($row['age_from'] == '31') echo 'selected'; ?>>31 Year</option>
                                        <option value="32" <?php if ($row['age_from'] == '32') echo 'selected'; ?>>32 Year</option>
                                        <option value="33" <?php if ($row['age_from'] == '33') echo 'selected'; ?>>33 Year</option>
                                        <option value="34" <?php if ($row['age_from'] == '34') echo 'selected'; ?>>34 Year</option>
                                        <option value="35" <?php if ($row['age_from'] == '35') echo 'selected'; ?>>35 Year</option>
                                        <option value="36" <?php if ($row['age_from'] == '36') echo 'selected'; ?>>36 Year</option>
                                        <option value="37" <?php if ($row['age_from'] == '37') echo 'selected'; ?>>37 Year</option>
                                        <option value="38" <?php if ($row['age_from'] == '38') echo 'selected'; ?>>38 Year</option>
                                        <option value="39" <?php if ($row['age_from'] == '39') echo 'selected'; ?>>39 Year</option>
                                        <option value="40" <?php if ($row['age_from'] == '40') echo 'selected'; ?>>40 Year</option>
                                        <option value="41" <?php if ($row['age_from'] == '41') echo 'selected'; ?>>41 Year</option>
                                        <option value="42" <?php if ($row['age_from'] == '42') echo 'selected'; ?>>42 Year</option>
                                        <option value="43" <?php if ($row['age_from'] == '43') echo 'selected'; ?>>43 Year</option>
                                        <option value="44" <?php if ($row['age_from'] == '44') echo 'selected'; ?>>44 Year</option>
                                        <option value="45" <?php if ($row['age_from'] == '45') echo 'selected'; ?>>45 Year</option>
                                        <option value="46" <?php if ($row['age_from'] == '46') echo 'selected'; ?>>46 Year</option>
                                        <option value="47" <?php if ($row['age_from'] == '47') echo 'selected'; ?>>47 Year</option>
                                        <option value="48" <?php if ($row['age_from'] == '48') echo 'selected'; ?>>48 Year</option>
                                        <option value="49" <?php if ($row['age_from'] == '49') echo 'selected'; ?>>49 Year</option>
                                        <option value="50" <?php if ($row['age_from'] == '50') echo 'selected'; ?>>50 Year</option>
                                        <option value="51" <?php if ($row['age_from'] == '51') echo 'selected'; ?>>51 Year</option>
                                        <option value="52" <?php if ($row['age_from'] == '52') echo 'selected'; ?>>52 Year</option>
                                        <option value="53" <?php if ($row['age_from'] == '53') echo 'selected'; ?>>53 Year</option>
                                        <option value="54" <?php if ($row['age_from'] == '54') echo 'selected'; ?>>54 Year</option>
                                        <option value="55" <?php if ($row['age_from'] == '55') echo 'selected'; ?>>55 Year</option>
                                        <option value="56" <?php if ($row['age_from'] == '56') echo 'selected'; ?>>56 Year</option>
                                        <option value="57" <?php if ($row['age_from'] == '57') echo 'selected'; ?>>57 Year</option>
                                        <option value="58" <?php if ($row['age_from'] == '58') echo 'selected'; ?>>58 Year</option>
                                        <option value="59" <?php if ($row['age_from'] == '59') echo 'selected'; ?>>59 Year</option>
                                        <option value="60" <?php if ($row['age_from'] == '60') echo 'selected'; ?>>60 Year</option>
                                        <option value="61" <?php if ($row['age_from'] == '61') echo 'selected'; ?>>60+ Year</option>
                                    </select>


                                </div>
                                <div class="form-group col-md-3">
                                    <label for="age_to">Age To</label>
                                    <select class="form-control" id="age_to" name="age_to" required>
                                        <option value="" disabled>Select Your Age</option>
                                        <option value="25" <?php if ($row['age_to'] == '25') echo 'selected'; ?>>25 years</option>
                                        <option value="26" <?php if ($row['age_to'] == '26') echo 'selected'; ?>>26 years</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="height_from">Height</label>
                                    <select class="form-control" id="height_from" name="height_from" required>
                                        <option value="" disabled selected>Select Your Height</option>
                                        <option value="4ft" <?php if ($row['height_from'] == '4ft') echo 'selected'; ?>>4ft</option>
                                        <option value="5ft" <?php if ($row['height_from'] == '5ft') echo 'selected'; ?>>5ft</option>
                                        <option value="6ft" <?php if ($row['height_from'] == '6ft') echo 'selected'; ?>>6ft</option>
                                        <option value="7ft" <?php if ($row['height_from'] == '7ft') echo 'selected'; ?>>7ft</option>
                                        <option value="8ft" <?php if ($row['height_from'] == '8ft') echo 'selected'; ?>>8ft</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid height range.
                                    </div>
                                </div>
                                <div class="form-group col-md-3">

                                    <label for="height_to">To</label>
                                    <select class="form-control" id="height_to" name="height_to" required>
                                        <option value="" disabled selected>Select Your Height to</option>
                                        <option value="4ft" <?php if ($row['height_to'] == '4ft') echo 'selected'; ?>>4ft</option>
                                        <option value="5ft" <?php if ($row['height_to'] == '5ft') echo 'selected'; ?>>5ft</option>
                                        <option value="6ft" <?php if ($row['height_to'] == '6ft') echo 'selected'; ?>>6ft</option>
                                        <option value="7ft" <?php if ($row['height_to'] == '7ft') echo 'selected'; ?>>7ft</option>
                                        <option value="8ft" <?php if ($row['height_to'] == '8ft') echo 'selected'; ?>>8ft</option>
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
                                        <option value="Does Not Matter" <?php if ($row['looking_for'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="Never Married" <?php if ($row['looking_for'] == 'Never Married') echo 'selected'; ?>>Never Married</option>
                                        <option value="Widower" <?php if ($row['looking_for'] == 'Widower') echo 'selected'; ?>>Widower</option>
                                        <option value="Widow" <?php if ($row['looking_for'] == 'Widow') echo 'selected'; ?>>Widow</option>
                                        <option value="Divorced" <?php if ($row['looking_for'] == 'Divorced') echo 'selected'; ?>>Divorced</option>
                                        <option value="Awaiting Divorce" <?php if ($row['looking_for'] == 'Awaiting Divorce') echo 'selected'; ?>>Awaiting Divorce</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="par_physical_status">Physical Status</label>
                                    <select class="form-control" id="par_physical_status" name="par_physical_status" required>
                                        <option value="" disabled selected>Select Your Looking For</option>
                                        <option value="Does Not Matter" <?php if ($row['par_physical_status'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="Physically challenged" <?php if ($row['par_physical_status'] == 'Physically challenged') echo 'selected'; ?>>Physically challenged</option>
                                        <option value="Normal" <?php if ($row['par_physical_status'] == 'Normal') echo 'selected'; ?>>Normal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="par_eating_habits">Eating Habits</label>
                                    <select class="form-control" id="par_eating_habits" name="par_eating_habits" required>
                                        <option value="" disabled selected>Select Your eatingHabits</option>

                                        <option value="Does Not Matter" <?php if ($row['par_eating_habits'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="Vegetarian" <?php if ($row['par_eating_habits'] == 'Vegetarian') echo 'selected'; ?>>Vegetarian</option>
                                        <option value="Non Vegetarian" <?php if ($row['par_eating_habits'] == 'Non Vegetarian') echo 'selected'; ?>>Non Vegetarian</option>
                                        <option value="Eggetarian" <?php if ($row['par_eating_habits'] == 'Eggetarian') echo 'selected'; ?>>Eggetarian</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="par_smoking_habits">Smoking Habits</label>
                                    <select class="form-control" id="smoking_habits" name="par_smoking_habits" required>
                                        <option value="" disabled selected>Select Your Smoking Habits</option>

                                        <option value="Does Not Matter" <?php if ($row['par_smoking_habits'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="No" <?php if ($row['par_smoking_habits'] == 'No') echo 'selected'; ?>>No</option>
                                        <option value="Smokes Occasionally" <?php if ($row['par_smoking_habits'] == ' Smokes Occasionally') echo 'selected'; ?>> Smokes Occasionally</option>
                                        <option value="Smokes Regularly" <?php if ($row['par_smoking_habits'] == ' Smokes Regularly') echo 'selected'; ?>>Smokes Regularly</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="par_drinking_habits">Drinking Habits</label>
                                    <select class="form-control" id="par_drinking_habits" name="par_drinking_habits" required>
                                        <option value="" disabled selected>Select Your Drinking Habits</option>
                                        <option value="Does Not Matter" <?php if ($row['par_drinking_habits'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="No" <?php if ($row['par_drinking_habits'] == 'No') echo 'selected'; ?>>Never Drinks</option>
                                        <option value="Drinks Socially" <?php if ($row['par_drinking_habits'] == 'Drinks Socially') echo 'selected'; ?>>Drinks Socially</option>
                                        <option value="Drinks Regularly" <?php if ($row['par_drinking_habits'] == 'Drinks Regularly') echo 'selected'; ?>>Drinks Regularly</option>

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


                                        <option value="hindu" <?php if ($row['par_religion'] == 'hindu') echo 'selected'; ?>>hindu</option>
                                        <option value="muslim" <?php if ($row['par_religion'] == 'muslim') echo 'selected'; ?>>muslim</option>
                                        <option value="christian" <?php if ($row['par_religion'] == 'christian') echo 'selected'; ?>>christian</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="par_caste">Caste</label>
                                    <select class="form-control" id="par_caste" name="par_caste" required>
                                        <option value="" disabled selected>Select Your Caste</option>


                                        <option value="oc" <?php if ($row['par_caste'] == 'oc') echo 'selected'; ?>>oc</option>
                                        <option value="bc" <?php if ($row['par_caste'] == 'bc') echo 'selected'; ?>>bc</option>
                                        <option value="sc" <?php if ($row['par_caste'] == 'sc') echo 'selected'; ?>>sc</option>
                                        <option value="st" <?php if ($row['par_caste'] == 'st') echo 'selected'; ?>>st</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="motherTongue">Mother Tongue</label>
                                    <input type="text" class="form-control" id="par_mother_tongue" name="par_mother_tongue" value="<?php echo $row['par_mother_tongue']; ?>">


                                </div>
                                <div class="form-group col-md-6">
                                    <label for="par_doshTypes">Dosh Type</label>
                                    <!-- <input type="text" class="form-control" id="par_doshTypes" name="par_doshTypes" placeholder="Enter Dosh Type" required> -->
                                    <select class="form-control" id="par_doshTypes" name="par_doshTypes" required>
                                        <option value="" disabled selected>Select Dosh Type</option>
                                        <option value="Default Dosh" <?php if ($row['par_doshTypes'] == 'Default Dosh') echo 'selected'; ?>>Default Dosh</option>
                                        <option value="Kaal Sarp Dosh" <?php if ($row['par_doshTypes'] == 'Kaal Sarp Dosh') echo 'selected'; ?>>Kaal Sarp Dosh</option>
                                        <option value="Pitru Dosh" <?php if ($row['par_doshTypes'] == 'Pitru Dosh') echo 'selected'; ?>>Pitru Dosh</option>
                                        <option value="Nadi Dosh" <?php if ($row['par_doshTypes'] == 'Nadi Dosh') echo 'selected'; ?>>Nadi Dosh</option>
                                        <option value="Guru Chandal Dosh" <?php if ($row['par_doshTypes'] == 'Guru Chandal Dosh') echo 'selected'; ?>>Guru Chandal Dosh</option>
                                        <option value="Grahan Dosh" <?php if ($row['par_doshTypes'] == 'Grahan Dosh') echo 'selected'; ?>>Grahan Dosh</option>
                                        <option value="Gandamool Dosh" <?php if ($row['par_doshTypes'] == 'Gandamool Dosh') echo 'selected'; ?>>Gandamool Dosh</option>
                                        <option value="Shani Dosh" <?php if ($row['par_doshTypes'] == 'Shani Dosh') echo 'selected'; ?>>Shani Dosh</option>
                                        <option value="Shrapit Dosh" <?php if ($row['par_doshTypes'] == 'Shrapit Dosh') echo 'selected'; ?>>Shrapit Dosh</option>
                                        <option value="Chandra Dosh" <?php if ($row['par_doshTypes'] == 'Chandra Dosh') echo 'selected'; ?>>Chandra Dosh</option>
                                        <option value="Kemadruma dosh" <?php if ($row['par_doshTypes'] == 'Kemadruma dosh') echo 'selected'; ?>>Kemadruma dosh</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="par_stars">Star</label>
                                    <select class="form-control" id="par_stars" name="par_stars" required>
                                        <option value="" disabled selected>Select Your Star</option>
                                        <option value="Bharani" <?php if ($row['par_stars'] == 'Bharani') echo 'selected'; ?>>Bharani</option>
                                        <option value="Krittika" <?php if ($row['par_stars'] == 'Krittika') echo 'selected'; ?>>Krittika</option>
                                        <option value="Rohini" <?php if ($row['par_stars'] == 'Rohini') echo 'selected'; ?>>Rohini</option>
                                        <option value="Mrigashira" <?php if ($row['par_stars'] == 'Mrigashira') echo 'selected'; ?>>Mrigashira</option>
                                        <option value="Ardra" <?php if ($row['par_stars'] == 'Ardra') echo 'selected'; ?>>Ardra</option>
                                        <option value="Punarvasu" <?php if ($row['par_stars'] == 'Punarvasu') echo 'selected'; ?>>Punarvasu</option>
                                        <option value="Pushyaa" <?php if ($row['par_stars'] == 'Pushyaa') echo 'selected'; ?>>Pushyaa</option>
                                        <option value="Ashlesha" <?php if ($row['par_stars'] == 'Ashlesha') echo 'selected'; ?>>Ashlesha</option>
                                        <option value="Magha" <?php if ($row['par_stars'] == 'Magha') echo 'selected'; ?>>Magha</option>
                                        <option value="Purva Phalguni" <?php if ($row['par_stars'] == 'Purva Phalguni') echo 'selected'; ?>>Purva Phalguni</option>
                                        <option value="Uttara Phalguni" <?php if ($row['par_stars'] == 'Uttara Phalguni') echo 'selected'; ?>>Uttara Phalguni</option>
                                        <option value="Hasta" <?php if ($row['par_stars'] == 'Hasta') echo 'selected'; ?>>Hasta</option>
                                        <option value="Chitra" <?php if ($row['par_stars'] == 'Chitra') echo 'selected'; ?>>Chitra</option>
                                        <option value="Swati" <?php if ($row['par_stars'] == 'Swati') echo 'selected'; ?>>Swati</option>
                                        <option value="Anuradha" <?php if ($row['par_stars'] == 'Anuradha') echo 'selected'; ?>>Anuradha</option>
                                        <option value="Jyeshtha" <?php if ($row['par_stars'] == 'Jyeshtha') echo 'selected'; ?>>Jyeshtha</option>
                                        <option value="Mula" <?php if ($row['par_stars'] == 'Mula') echo 'selected'; ?>>Mula</option>
                                        <option value="Purva Ashadha" <?php if ($row['par_stars'] == 'Purva Ashadha') echo 'selected'; ?>>Purva Ashadha</option>
                                        <option value="Uttara Ashadha" <?php if ($row['par_stars'] == 'Uttara Ashadha') echo 'selected'; ?>>Uttara Ashadha</option>
                                        <option value="Abhijit" <?php if ($row['par_stars'] == 'Abhijit') echo 'selected'; ?>>Abhijit</option>
                                        <option value="Shravana" <?php if ($row['par_stars'] == 'Shravana') echo 'selected'; ?>>Shravana</option>
                                        <option value="Dhanishta" <?php if ($row['par_stars'] == 'Dhanishta') echo 'selected'; ?>>Dhanishta</option>
                                        <option value="Shatabhisha" <?php if ($row['par_stars'] == 'Shatabhisha') echo 'selected'; ?>>Shatabhisha</option>
                                        <option value="Purva Bhadrapada" <?php if ($row['par_stars'] == 'Purva Bhadrapada') echo 'selected'; ?>>Purva Bhadrapada</option>
                                        <option value="Uttara Bhadrapada" <?php if ($row['par_stars'] == 'Uttara Bhadrapada') echo 'selected'; ?>>Uttara Bhadrapada</option>
                                        <option value="Revati" <?php if ($row['par_stars'] == 'Revati') echo 'selected'; ?>>Revati</option>
                                        <option value="Vishakha" <?php if ($row['par_stars'] == 'Vishakha') echo 'selected'; ?>>Vishakha</option>
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

                                        <option value="india" <?php if ($row['par_country_living_in'] == 'india') echo 'selected'; ?>>india</option>
                                        <option value="usa" <?php if ($row['par_country_living_in'] == 'usa') echo 'selected'; ?>>usa</option>
                                        <option value="australia" <?php if ($row['par_country_living_in'] == 'australia') echo 'selected'; ?>>australia</option>
                                        <option value="Japan" <?php if ($row['par_country_living_in'] == 'Japan') echo 'selected'; ?>>Japan</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="par_state_living_in">State Living In</label>
                                    <select class="form-control" id="par_state_living_in" name="par_state_living_in" required>
                                        <option value="" disabled selected>Select Your State LivingIn</option>



                                        <option value="AP" <?php if ($row['par_state_living_in'] == 'AP') echo 'selected'; ?>>Andhra Pradesh (AP)</option>
                                        <option value="TS" <?php if ($row['par_state_living_in'] == 'TS') echo 'selected'; ?>>Telangana (TS)</option>
                                        <option value="KA" <?php if ($row['par_state_living_in'] == 'KA') echo 'selected'; ?>>Karnataka (KA)</option>
                                        <option value="UP" <?php if ($row['par_state_living_in'] == 'UP') echo 'selected'; ?>>Uttar Pradesh (UP)</option>
                                        <option value="MP" <?php if ($row['par_state_living_in'] == 'MP') echo 'selected'; ?>>Madhya Pradesh (MP)</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="par_city_living_in">City Living In</label>
                                    <select class="form-control" id="par_city_living_in" name="par_city_living_in" required>
                                        <option value="" disabled selected>Select Your city LivingIn</option>


                                        <option value="guntur" <?php if ($row['par_city_living_in'] == 'guntur') echo 'selected'; ?>>Guntur</option>
                                        <option value="hyderabad" <?php if ($row['par_city_living_in'] == 'hyderabad') echo 'selected'; ?>>Hyderabad</option>
                                        <option value="vizag" <?php if ($row['par_city_living_in'] == 'vizag') echo 'selected'; ?>>Visakhapatnam (Vizag)</option>


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
                                    <select class="form-control" id="par_education" name="par_education" required>
                                        <option value="" disabled selected>Select Education</option>
                                        <option value="Does Not Matter" <?php if ($row['par_education'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="BCA" <?php if ($row['par_education'] == 'BCA') echo 'selected'; ?>>BCA</option>
                                        <option value="B Plan" <?php if ($row['par_education'] == 'B Plan') echo 'selected'; ?>>B Plan</option>
                                        <option value="B Arch" <?php if ($row['par_education'] == 'B Arch') echo 'selected'; ?>>B Arch</option>
                                        <option value="BE" <?php if ($row['par_education'] == 'BE') echo 'selected'; ?>>BE</option>
                                        <option value="B Tech" <?php if ($row['par_education'] == 'B Tech') echo 'selected'; ?>>B Tech</option>
                                        <option value="BSc Computer Science" <?php if ($row['par_education'] == 'BSc Computer Science') echo 'selected'; ?>>BSc Computer Science</option>
                                        <option value="BSc IT" <?php if ($row['par_education'] == 'BSc IT') echo 'selected'; ?>>BSc IT</option>
                                        <option value="B Phil" <?php if ($row['par_education'] == 'B Phil') echo 'selected'; ?>>B Phil</option>
                                        <option value="B Com" <?php if ($row['par_education'] == 'B Com') echo 'selected'; ?>>B Com</option>
                                        <option value="BA" <?php if ($row['par_education'] == 'BA') echo 'selected'; ?>>BA</option>
                                        <option value="BFA" <?php if ($row['par_education'] == 'BFA') echo 'selected'; ?>>BFA</option>
                                        <option value="BLIS" <?php if ($row['par_education'] == 'BLIS') echo 'selected'; ?>>BLIS</option>
                                        <option value="BSW" <?php if ($row['par_education'] == 'BSW') echo 'selected'; ?>>BSW</option>
                                        <option value="BMM (MASS MEDIA)" <?php if ($row['par_education'] == 'BMM (MASS MEDIA)') echo 'selected'; ?>>BMM (MASS MEDIA)</option>
                                        <option value="BEd" <?php if ($row['par_education'] == 'BEd') echo 'selected'; ?>>BEd</option>
                                        <option value="MEd" <?php if ($row['par_education'] == 'MEd') echo 'selected'; ?>>MEd</option>
                                        <option value="BHM" <?php if ($row['par_education'] == 'BHM') echo 'selected'; ?>>BHM</option>
                                        <option value="BBA" <?php if ($row['par_education'] == 'BBA') echo 'selected'; ?>>BBA</option>
                                        <option value="BFM (Financial Management)" <?php if ($row['par_education'] == 'BFM (Financial Management)') echo 'selected'; ?>>BFM (Financial Management)</option>
                                        <option value="ME" <?php if ($row['par_education'] == 'ME') echo 'selected'; ?>>ME</option>
                                        <option value="M Arch" <?php if ($row['par_education'] == 'M Arch') echo 'selected'; ?>>M Arch</option>
                                        <option value="MCA" <?php if ($row['par_education'] == 'MCA') echo 'selected'; ?>>MCA</option>
                                        <option value="PGDCA" <?php if ($row['par_education'] == 'PGDCA') echo 'selected'; ?>>PGDCA</option>
                                        <option value="M Tech" <?php if ($row['par_education'] == 'M Tech') echo 'selected'; ?>>M Tech</option>
                                        <option value="MSc Computer Science" <?php if ($row['par_education'] == 'MSc Computer Science') echo 'selected'; ?>>MSc Computer Science</option>
                                        <option value="MSc IT" <?php if ($row['par_education'] == 'MSc IT') echo 'selected'; ?>>MSc IT</option>
                                        <option value="M Phil" <?php if ($row['par_education'] == 'M Phil') echo 'selected'; ?>>M Phil</option>
                                        <option value="M Com" <?php if ($row['par_education'] == 'M Com') echo 'selected'; ?>>M Com</option>
                                        <option value="M Sc" <?php if ($row['par_education'] == 'M Sc') echo 'selected'; ?>>M Sc</option>
                                        <option value="MA" <?php if ($row['par_education'] == 'MA') echo 'selected'; ?>>MA</option>
                                        <option value="MLIS" <?php if ($row['par_education'] == 'MLIS') echo 'selected'; ?>>MLIS</option>
                                        <option value="MSW" <?php if ($row['par_education'] == 'MSW') echo 'selected'; ?>>MSW</option>
                                        <option value="MHM" <?php if ($row['par_education'] == 'MHM') echo 'selected'; ?>>MHM</option>
                                        <option value="MBA" <?php if ($row['par_education'] == 'MBA') echo 'selected'; ?>>MBA</option>
                                        <option value="PGDM" <?php if ($row['par_education'] == 'PGDM') echo 'selected'; ?>>PGDM</option>
                                        <option value="MFM (Financial Management)" <?php if ($row['par_education'] == 'MFM (Financial Management)') echo 'selected'; ?>>MFM (Financial Management)</option>
                                        <option value="MBBS" <?php if ($row['par_education'] == 'MBBS') echo 'selected'; ?>>MBBS</option>
                                        <option value="MD / MS (Medical)" <?php if ($row['par_education'] == 'MD / MS (Medical)') echo 'selected'; ?>>MD / MS (Medical)</option>
                                        <option value="MCh - Master Of Chirurgiae" <?php if ($row['par_education'] == 'MCh - Master Of Chirurgiae') echo 'selected'; ?>>MCh - Master Of Chirurgiae</option>
                                        <option value="DM - Doctorate Of Medicine" <?php if ($row['par_education'] == 'DM - Doctorate Of Medicine') echo 'selected'; ?>>DM - Doctorate Of Medicine</option>
                                        <option value="BDS" <?php if ($row['par_education'] == 'BDS') echo 'selected'; ?>>BDS</option>
                                        <option value="MDS" <?php if ($row['par_education'] == 'MDS') echo 'selected'; ?>>MDS</option>
                                        <option value="BHMS" <?php if ($row['par_education'] == 'BHMS') echo 'selected'; ?>>BHMS</option>
                                        <option value="MHMS" <?php if ($row['par_education'] == 'MHMS') echo 'selected'; ?>>MHMS</option>
                                        <option value="BAMS" <?php if ($row['par_education'] == 'BAMS') echo 'selected'; ?>>BAMS</option>
                                        <option value="MAMS" <?php if ($row['par_education'] == 'MAMS') echo 'selected'; ?>>MAMS</option>
                                        <option value="Bachelor Of Veterinary Science" <?php if ($row['par_education'] == 'Bachelor Of Veterinary Science') echo 'selected'; ?>>Bachelor Of Veterinary Science</option>
                                        <option value="Master Of Veterinary Science" <?php if ($row['par_education'] == 'Master Of Veterinary Science') echo 'selected'; ?>>Master Of Veterinary Science</option>
                                        <option value="Degree In Medicine" <?php if ($row['par_education'] == 'Degree In Medicine') echo 'selected'; ?>>Degree In Medicine</option>
                                        <option value="Master In Medicine" <?php if ($row['par_education'] == 'Master In Medicine') echo 'selected'; ?>>Master In Medicine</option>
                                        <option value="BPT" <?php if ($row['par_education'] == 'BPT') echo 'selected'; ?>>BPT</option>
                                        <option value="MPT" <?php if ($row['par_education'] == 'MPT') echo 'selected'; ?>>MPT</option>
                                        <option value="B.Pharm" <?php if ($row['par_education'] == 'B.Pharm') echo 'selected'; ?>>B.Pharm</option>
                                        <option value="M.Pharm" <?php if ($row['par_education'] == 'M.Pharm') echo 'selected'; ?>>M.Pharm</option>
                                        <option value="BSc Nursing" <?php if ($row['par_education'] == 'BSc Nursing') echo 'selected'; ?>>BSc Nursing</option>
                                        <option value="MSc Nursing" <?php if ($row['par_education'] == 'MSc Nursing') echo 'selected'; ?>>MSc Nursing</option>
                                    </select>


                                </div>
                                <div class="form-group col-md-6">
                                    <label for="par_occupation">Occupation</label>
                                    <select class="form-control" id="par_occupation" name="par_occupation" required>
                                        <option value="" disabled selected>Select Occupation</option>
                                        <option value="Does Not Matter" <?php if ($row['par_occupation'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="Civil Engineer" <?php if ($row['par_occupation'] == 'Civil Engineer') echo 'selected'; ?>>Civil Engineer</option>
                                        <option value="Clerical Official" <?php if ($row['par_occupation'] == 'Clerical Official') echo 'selected'; ?>>Clerical Official</option>
                                        <option value="Commercial Pilot" <?php if ($row['par_occupation'] == 'Commercial Pilot') echo 'selected'; ?>>Commercial Pilot</option>
                                        <option value="Company Secretary" <?php if ($row['par_occupation'] == 'Company Secretary') echo 'selected'; ?>>Company Secretary</option>
                                        <option value="Computer Professional" <?php if ($row['par_occupation'] == 'Computer Professional') echo 'selected'; ?>>Computer Professional</option>
                                        <option value="Consultant" <?php if ($row['par_occupation'] == 'Consultant') echo 'selected'; ?>>Consultant</option>
                                        <option value="Contractor" <?php if ($row['par_occupation'] == 'Contractor') echo 'selected'; ?>>Contractor</option>
                                        <option value="Cost Accountant" <?php if ($row['par_occupation'] == 'Cost Accountant') echo 'selected'; ?>>Cost Accountant</option>
                                        <option value="Creative Person" <?php if ($row['par_occupation'] == 'Creative Person') echo 'selected'; ?>>Creative Person</option>
                                        <option value="Customer Support Professional" <?php if ($row['par_occupation'] == 'Customer Support Professional') echo 'selected'; ?>>Customer Support Professional</option>
                                        <option value="Defense Employee" <?php if ($row['par_occupation'] == 'Defense Employee') echo 'selected'; ?>>Defense Employee</option>
                                        <option value="Dentist" <?php if ($row['par_occupation'] == 'Dentist') echo 'selected'; ?>>Dentist</option>
                                        <option value="Designer" <?php if ($row['par_occupation'] == 'Designer') echo 'selected'; ?>>Designer</option>
                                        <option value="Doctor" <?php if ($row['par_occupation'] == 'Doctor') echo 'selected'; ?>>Doctor</option>
                                        <option value="Economist" <?php if ($row['par_occupation'] == 'Economist') echo 'selected'; ?>>Economist</option>
                                        <option value="Engineer" <?php if ($row['par_occupation'] == 'Engineer') echo 'selected'; ?>>Engineer</option>
                                        <option value="Engineer (Mechanical)" <?php if ($row['par_occupation'] == 'Engineer (Mechanical)') echo 'selected'; ?>>Engineer (Mechanical)</option>
                                        <option value="Engineer (Project)" <?php if ($row['par_occupation'] == 'Engineer (Project)') echo 'selected'; ?>>Engineer (Project)</option>
                                        <option value="Entertainment Professional" <?php if ($row['par_occupation'] == 'Entertainment Professional') echo 'selected'; ?>>Entertainment Professional</option>
                                        <option value="Event Manager" <?php if ($row['par_occupation'] == 'Event Manager') echo 'selected'; ?>>Event Manager</option>
                                        <option value="Executive" <?php if ($row['par_occupation'] == 'Executive') echo 'selected'; ?>>Executive</option>
                                        <option value="Factory worker" <?php if ($row['par_occupation'] == 'Factory worker') echo 'selected'; ?>>Factory worker</option>
                                        <option value="Farmer" <?php if ($row['par_occupation'] == 'Farmer') echo 'selected'; ?>>Farmer</option>
                                        <option value="Fashion Designer" <?php if ($row['par_occupation'] == 'Fashion Designer') echo 'selected'; ?>>Fashion Designer</option>
                                        <option value="Finance Professional" <?php if ($row['par_occupation'] == 'Finance Professional') echo 'selected'; ?>>Finance Professional</option>
                                        <option value="Flight Attendant" <?php if ($row['par_occupation'] == 'Flight Attendant') echo 'selected'; ?>>Flight Attendant</option>
                                        <option value="Government Employee" <?php if ($row['par_occupation'] == 'Government Employee') echo 'selected'; ?>>Government Employee</option>
                                        <option value="Health Care Professional" <?php if ($row['par_occupation'] == 'Health Care Professional') echo 'selected'; ?>>Health Care Professional</option>
                                        <option value="Home Maker" <?php if ($row['par_occupation'] == 'Home Maker') echo 'selected'; ?>>Home Maker</option>
                                        <option value="Hotel & Restaurant Professional" <?php if ($row['par_occupation'] == 'Hotel & Restaurant Professional') echo 'selected'; ?>>Hotel & Restaurant Professional</option>
                                        <option value="Human Resources Professional" <?php if ($row['par_occupation'] == 'Human Resources Professional') echo 'selected'; ?>>Human Resources Professional</option>
                                        <option value="Interior Designer" <?php if ($row['par_occupation'] == 'Interior Designer') echo 'selected'; ?>>Interior Designer</option>
                                        <option value="Investment Professional" <?php if ($row['par_occupation'] == 'Investment Professional') echo 'selected'; ?>>Investment Professional</option>
                                        <option value="IT / Telecom Professional" <?php if ($row['par_occupation'] == 'IT / Telecom Professional') echo 'selected'; ?>>IT / Telecom Professional</option>
                                        <option value="Journalist" <?php if ($row['par_occupation'] == 'Journalist') echo 'selected'; ?>>Journalist</option>
                                        <option value="Lawyer" <?php if ($row['par_occupation'] == 'Lawyer') echo 'selected'; ?>>Lawyer</option>
                                        <option value="Lecturer" <?php if ($row['par_occupation'] == 'Lecturer') echo 'selected'; ?>>Lecturer</option>
                                        <option value="Legal Professional" <?php if ($row['par_occupation'] == 'Legal Professional') echo 'selected'; ?>>Legal Professional</option>
                                        <option value="Manager" <?php if ($row['par_occupation'] == 'Manager') echo 'selected'; ?>>Manager</option>
                                        <option value="Marketing Professional" <?php if ($row['par_occupation'] == 'Marketing Professional') echo 'selected'; ?>>Marketing Professional</option>
                                        <option value="Media Professional" <?php if ($row['par_occupation'] == 'Media Professional') echo 'selected'; ?>>Media Professional</option>
                                        <option value="Medical Professional" <?php if ($row['par_occupation'] == 'Medical Professional') echo 'selected'; ?>>Medical Professional</option>
                                        <option value="Medical Transcriptionist" <?php if ($row['par_occupation'] == 'Medical Transcriptionist') echo 'selected'; ?>>Medical Transcriptionist</option>
                                        <option value="Merchant Naval Officer" <?php if ($row['par_occupation'] == 'Merchant Naval Officer') echo 'selected'; ?>>Merchant Naval Officer</option>
                                        <option value="Not Working" <?php if ($row['par_occupation'] == 'Not Working') echo 'selected'; ?>>Not Working</option>
                                        <option value="Nurse" <?php if ($row['par_occupation'] == 'Nurse') echo 'selected'; ?>>Nurse</option>
                                        <option value="Occupational Therapist" <?php if ($row['par_occupation'] == 'Occupational Therapist') echo 'selected'; ?>>Occupational Therapist</option>
                                        <option value="Optician" <?php if ($row['par_occupation'] == 'Optician') echo 'selected'; ?>>Optician</option>
                                        <option value="Others" <?php if ($row['par_occupation'] == 'Others') echo 'selected'; ?>>Others</option>
                                        <option value="Pharmacist" <?php if ($row['par_occupation'] == 'Pharmacist') echo 'selected'; ?>>Pharmacist</option>
                                        <option value="Physician Assistant" <?php if ($row['par_occupation'] == 'Physician Assistant') echo 'selected'; ?>>Physician Assistant</option>
                                        <option value="Physicist" <?php if ($row['par_occupation'] == 'Physicist') echo 'selected'; ?>>Physicist</option>
                                        <option value="Physiotherapist" <?php if ($row['par_occupation'] == 'Physiotherapist') echo 'selected'; ?>>Physiotherapist</option>
                                        <option value="Pilot" <?php if ($row['par_occupation'] == 'Pilot') echo 'selected'; ?>>Pilot</option>
                                        <option value="Politician" <?php if ($row['par_occupation'] == 'Politician') echo 'selected'; ?>>Politician</option>
                                        <option value="Production professional" <?php if ($row['par_occupation'] == 'Production professional') echo 'selected'; ?>>Production professional</option>
                                        <option value="Professor" <?php if ($row['par_occupation'] == 'Professor') echo 'selected'; ?>>Professor</option>
                                    </select>


                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="par_annualIncomes">Annual Income</label>
                                    <select class="form-control" id="par_annualIncomes" name="par_annualIncomes" required>
                                        <option value="" disabled selected>Select Your Annual Income</option>
                                        <option value="Does Not Matter" <?php if ($row['par_annualIncomes'] == 'Does Not Matter') echo 'selected'; ?>>Does Not Matter</option>
                                        <option value="50,000" <?php if ($row['par_annualIncomes'] == '50,000') echo 'selected'; ?>>50,000</option>
                                        <option value="1,00,000" <?php if ($row['par_annualIncomes'] == '1,00,000') echo 'selected'; ?>>1,00,000</option>
                                        <option value="2,00,000" <?php if ($row['par_annualIncomes'] == '2,00,000') echo 'selected'; ?>>2,00,000</option>
                                        <option value="3,00,000" <?php if ($row['par_annualIncomes'] == '3,00,000') echo 'selected'; ?>>3,00,000</option>
                                        <option value="4,00,000" <?php if ($row['par_annualIncomes'] == '4,00,000') echo 'selected'; ?>>4,00,000</option>
                                        <option value="5,00,000" <?php if ($row['par_annualIncomes'] == '5,00,000') echo 'selected'; ?>>5,00,000</option>
                                        <option value="6,00,000" <?php if ($row['par_annualIncomes'] == '6,00,000') echo 'selected'; ?>>6,00,000</option>
                                        <option value="7,00,000" <?php if ($row['par_annualIncomes'] == '7,00,000') echo 'selected'; ?>>7,00,000</option>
                                        <option value="8,00,000" <?php if ($row['par_annualIncomes'] == '8,00,000') echo 'selected'; ?>>8,00,000</option>
                                        <option value="9,00,000" <?php if ($row['par_annualIncomes'] == '9,00,000') echo 'selected'; ?>>9,00,000</option>
                                        <option value="10,00,000" <?php if ($row['par_annualIncomes'] == '10,00,000') echo 'selected'; ?>>10,00,000</option>
                                        <option value="11,00,000" <?php if ($row['par_annualIncomes'] == '11,00,000') echo 'selected'; ?>>11,00,000</option>
                                        <option value="12,00,000" <?php if ($row['par_annualIncomes'] == '12,00,000') echo 'selected'; ?>>12,00,000</option>
                                        <option value="13,00,000" <?php if ($row['par_annualIncomes'] == '13,00,000') echo 'selected'; ?>>13,00,000</option>
                                        <option value="14,00,000" <?php if ($row['par_annualIncomes'] == '14,00,000') echo 'selected'; ?>>14,00,000</option>
                                        <option value="15,00,000" <?php if ($row['par_annualIncomes'] == '15,00,000') echo 'selected'; ?>>15,00,000</option>
                                    </select>

                                </div>
                            </div>
                            <input type="submit" class="sub" name="update_partner_preference" value="Submit">
                        </form>

                    </div>

                </div>
            </div>
        </div>
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
</body>

</html>