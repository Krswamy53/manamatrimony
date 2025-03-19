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

    // Step 1: Connect to MySQL database
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
        .container{
            margin-left: 280px;
            width: 80%;
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
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" tabindex="0"><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Profiles</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>filter Profiles</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Profiles</span></a></li>
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

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
                <a class="nav-link active" data-toggle="tab" href="#basic-details">Member Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#upload-photos">Upload Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#partner-preference">Partner Preference</a>
            </li>
        </ul>
        <div class="tab-content mt-4">
            <!-- Basic Details Tab -->
            <div id="basic-details" class="tab-pane fade show active">
            <form action="" method="post">
   
    <div class="form-group col-md-4">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
        <!-- Personal Information -->
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>">
    </div>
    <div class="form-group col-md-4"> 
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <!-- Additional Fields -->
        <label for="profileCreatedBy">Profile Created By:</label>
        <input type="text" id="profileCreatedBy" name="profileCreatedBy" value="<?php echo $row['profileCreatedBy']; ?>"><br><br>
    </div>
        <!-- Add more fields here -->
    </div>
        <!-- Contact Information -->
        <div class="form-group col-md-4">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>
        </div>

        <!-- Additional Information -->
        <div class="form-group col-md-4">
        <label for="maritalStatus">Marital Status:</label>
        <select id="maritalStatus" name="maritalStatus">
            <option value="Single" <?php if($row['maritalStatus'] == 'Single') echo 'selected'; ?>>Single</option>
            <option value="Married" <?php if($row['maritalStatus'] == 'Married') echo 'selected'; ?>>Married</option>
            <!-- Add more options if needed -->
        </select><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="mother">Mother's Name:</label>
        <input type="text" id="mother" name="mother" value="<?php echo $row['mother']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" value="<?php echo $row['religion']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="caste">Caste:</label>
        <input type="text" id="caste" name="caste" value="<?php echo $row['caste']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="subcaste">Subcaste:</label>
        <input type="text" id="subcaste" name="subcaste" value="<?php echo $row['subcaste']; ?>"><br><br>
        </div>
        <!-- Include other fields similarly -->

        <!-- Employment and Education Information -->
        <div class="form-group col-md-4">
        <label for="highestEducation">Highest Education:</label>
        <input type="text" id="highestEducation" name="highestEducation" value="<?php echo $row['highestEducation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="additionalDegree">Additional Degree:</label>
        <input type="text" id="additionalDegree" name="additionalDegree" value="<?php echo $row['additionalDegree']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="employedIn">Employed In:</label>
        <input type="text" id="employedIn" name="employedIn" value="<?php echo $row['employedIn']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation" name="occupation" value="<?php echo $row['occupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="annualIncome">Annual Income:</label>
        <input type="text" id="annualIncome" name="annualIncome" value="<?php echo $row['annualIncome']; ?>"><br><br>
        </div>
        <!-- Family Information -->
        <div class="form-group col-md-4">
        <label for="familyType">Family Type:</label>
        <input type="text" id="familyType" name="familyType" value="<?php echo $row['familyType']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="familyValue">Family Value:</label>
        <input type="text" id="familyValue" name="familyValue" value="<?php echo $row['familyValue']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="familyStatus">Family Status:</label>
        <input type="text" id="familyStatus" name="familyStatus" value="<?php echo $row['familyStatus']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="fatherOccupation">Father's Occupation:</label>
        <input type="text" id="fatherOccupation" name="fatherOccupation" value="<?php echo $row['fatherOccupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="motherOccupation">Mother's Occupation:</label>
        <input type="text" id="motherOccupation" name="motherOccupation" value="<?php echo $row['motherOccupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numBrothers">Number of Brothers:</label>
        <input type="text" id="numBrothers" name="numBrothers" value="<?php echo $row['numBrothers']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numMarriedBrothers">Number of Married Brothers:</label>
        <input type="text" id="numMarriedBrothers" name="numMarriedBrothers" value="<?php echo $row['numMarriedBrothers']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numSisters">Number of Sisters:</label>
        <input type="text" id="numSisters" name="numSisters" value="<?php echo $row['numSisters']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numMarriedSisters">Number of Married Sisters:</label>
        <input type="text" id="numMarriedSisters" name="numMarriedSisters" value="<?php echo $row['numMarriedSisters']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <!-- Location Information -->
        <label for="inputCountry">Country:</label>
        <input type="text" id="inputCountry" name="inputCountry" value="<?php echo $row['inputCountry']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State:</label>
        <input type="text" id="inputState" name="inputState" value="<?php echo $row['inputState']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="inputCity">City:</label>
        <input type="text" id="inputCity" name="inputCity" value="<?php echo $row['inputCity']; ?>"><br><br>
        </div>
        <!-- Lifestyle Information -->
        <div class="form-group col-md-4">
        <label for="diet">Diet:</label>
        <input type="text" id="diet" name="diet" value="<?php echo $row['diet']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="smokingHabits">Smoking Habits:</label>
        <input type="text" id="smokingHabits" name="smokingHabits" value="<?php echo $row['smokingHabits']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="drinkingHabits">Drinking Habits:</label>
        <input type="text" id="drinkingHabits" name="drinkingHabits" value="<?php echo $row['drinkingHabits']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="bodyType">Body Type:</label>
        <input type="text" id="bodyType" name="bodyType" value="<?php echo $row['bodyType']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="complexion">Complexion:</label>
        <input type="text" id="complexion" name="complexion" value="<?php echo $row['complexion']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="physicalStatus">Physical Status:</label>
        <input type="text" id="physicalStatus" name="physicalStatus" value="<?php echo $row['physicalStatus']; ?>"><br><br>
        </div>
        <!-- Astrological Information -->
        <div class="form-group col-md-4">
        <label for="doshType">Dosh Type:</label>
        <input type="text" id="doshType" name="doshType" value="<?php echo $row['doshType']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="star">Star:</label>
        <input type="text" id="star" name="star" value="<?php echo $row['star']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="raasi">Raasi:</label>
        <input type="text" id="raasi" name="raasi" value="<?php echo $row['raasi']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="birthTime">Birth Time:</label>
        <input type="text" id="birthTime" name="birthTime" value="<?php echo $row['birthTime']; ?>"><br><br>
        <div class="form-group col-md-4">
        <label for="birthPlace">Birth Place:</label>
        <input type="text" id="birthPlace" name="birthPlace" value="<?php echo $row['birthPlace']; ?>"><br><br>
        </div>
        <!-- Additional Information -->
        <div class="form-group col-md-4">
        <label for="additionalInfo">Additional Info:</label>
        <textarea id="additionalInfo" name="additionalInfo"><?php echo $row['additionalInfo']; ?></textarea><br><br>
        </div></div></div>
        <input type="submit" value="Update">
    
    </form>
            </div>
            <!-- Upload Photos Tab -->
            <div id="upload-photos" class="tab-pane fade">
    <div class="container mt-3">
        <!-- Form for uploading photos -->
        <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateImages()">
            <div class="row">
                <div class="col-md-4">
                    <!-- Column 1 -->
                    <!-- Repeat this block for each photo input -->
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview1"></div>
                        <label class="photo-label">Photo 1:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview1')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview2"></div>
                        <label class="photo-label">Photo 2:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview2')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview3"></div>
                        <label class="photo-label">Photo 3:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview3')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview4"></div>
                        <label class="photo-label">Photo 4:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview4')">
                    </div>
                    <!-- Repeat this block for each photo input -->
                </div>
                <div class="col-md-4 second-row">
                    <!-- Column 2 -->
                    <!-- Repeat this block for each photo input -->
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview5"></div>
                        <label class="photo-label">Photo 5:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview5')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview6"></div>
                        <label class="photo-label">Photo 6:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview6')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview7"></div>
                        <label class="photo-label">Photo 7:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview7')">
                    </div>
                    <div class="photo-input">
                        <div class="photo-placeholder" id="preview8"></div>
                        <label class="photo-label">Photo 8:</label>
                        <input type="file" class="form-control-file" name="photos[]" onchange="previewImage(this, 'preview8')">
                    </div>
                    <!-- Repeat this block for each photo input -->
                </div>
            </div>
            <button type="submit" id="saveButton" class="btn btn-primary">Save</button>
            <button type="button" id="nextPageButton" class="btn btn-primary" disabled>Next Page</button>
        </form>

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

                <br>
                <form action="prefences.php" method="post" onsubmit="return validateForms()">

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="ageFrom">Age From</label>
                            <select class="form-control" id="ageFrom" name="ageFrom">
                            <option value="" disabled selected>Select Your Age</option>
                                <option value="18">18 years</option>
                                <option value="19">19 years</option>
                                <!-- Add more options for ages -->
                                <option value="35">35 years</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ageTo">Age To</label>
                            <select class="form-control" id="ageTo" name="ageTo">
                            <option value="" disabled selected>Select Your Age To</option>
                                <option value="25">25 years</option>
                                <!-- Add more options for ages -->
                                <option value="55">55 years</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="heights">Height</label>
                            <select class="form-control" id="heights" name="heights">
                            <option value="" disabled selected>Select Your Height</option>
                                <option value="4ft">4ft</option>
                                <option value="5ft">5ft</option>
                                <option value="6ft">6ft</option>
                                <option value="7ft">7ft</option>
                                <option value="8ft">8ft</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">

                            <label for="heightRange">To</label>
                            <select class="form-control" id="heightRange" name="heightRange">
                            <option value="" disabled selected>Select Your Height to</option>
                                <option value="5ft">5ft</option>
                                <option value="6ft">6ft</option>
                                <option value="7ft">7ft</option>
                                <option value="8ft">8ft</option>
                                <option value="9ft">9ft</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lookingFor">Looking For</label>
                            <select class="form-control" id="lookingFor" name="lookingFor">
                            <option value="" disabled selected>Select Your Looking For</option>
 
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="physicalStatuss">Physical Status</label>
                            <select class="form-control" id="physicalStatuss" name="physicalStatuss">
                            <option value="" disabled selected>Select Your Looking For</option>

                                <option value="slim">Slim</option>
                                <option value="fit">Fit</option>
                                <option value="chubby">Chubby</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="eatingHabits">Eating Habits</label>
                            <select class="form-control" id="eatingHabits" name="eatingHabits">
                            <option value="" disabled selected>Select Your eatingHabits</option>

                                <option value="veg">Vegetarian</option>
                                <option value="non-veg">Non-Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="smokingHabitss">Smoking Habits</label>
                            <select class="form-control" id="smokingHabitss" name="smokingHabitss">
                            <option value="" disabled selected>Select Your Smoking Habits</option>

                                <option value="daily">Daily</option>
                                <option value="occasional">Occasional</option>
                                <option value="teetotaler">Teetotaler</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="drinkingHabitss">Drinking Habits</label>
                            <select class="form-control" id="drinkingHabitss" name="drinkingHabitss">
                            <option value="" disabled selected>Select Your Drinking Habits</option>

                                <option value="daily">Daily</option>
                                <option value="occasional">Occasional</option>
                                <option value="teetotaler">Teetotaler</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Religion Preference </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="religions">Religion</label>
                            <select class="form-control" id="religions" name="religions">
                            <option value="" disabled selected>Select Your Religion</option>

                                <option value="hindu">Hindu</option>
                                <option value="muslim">Muslim</option>
                                <option value="christian">Christian</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="castes">Caste</label>
                            <select class="form-control" id="castes" name="castes">
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
                            <input type="text" class="form-control" id="motherTongue" name="motherTongue" placeholder="Enter Mother Tongue">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="doshTypes">Dosh Type</label>
                            <input type="text" class="form-control" id="doshTypes" name="doshTypes" placeholder="Enter Dosh Type">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="stars">Star</label>
                            <select class="form-control" id="stars" name="stars">
                            <option value="" disabled selected>Select Your Star</option>

                                <option value="1">1 Star</option>
                                <option value="2">2 Star</option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Location Preference </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="countryLivingIn">Country Living In</label>
                            <select class="form-control" id="countryLivingIn" name="countryLivingIn">
                            <option value="" disabled selected>Select Your countryLivingIn</option>

                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="australia">Australia</option>
                                <option value="japan">Japan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stateLivingIn">State Living In</label>
                            <select class="form-control" id="stateLivingIn" name="stateLivingIn">
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
                            <label for="cityLivingIn">City Living In</label>
                            <select class="form-control" id="cityLivingIn" name="cityLivingIn">
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
                            <div class="section-title">Education & occupation Preference </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="education">Education</label>
                            <input type="text" class="form-control" id="education" name="education" placeholder="Enter Education">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="occupations">Occupation</label>
                            <input type="text" class="form-control" id="occupations" name="occupations" placeholder="Enter Occupation">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="annualIncomes">Annual Income</label>
                            <select class="form-control" id="annualIncomes" name="annualIncomes">
                            <option value="" disabled selected>Select Your Annual Income</option>

                                <option value="doesnt_matter">Doesn't Matter</option>
                                <option value="2LPA">2 LPA</option>
                                <option value="3LPA">3 LPA</option>
                                <option value="4LPA">4 LPA</option>
                                <option value="5LPA">5 LPA</option>
                                <option value="6LPA">6 LPA</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    
                    </div>

                    <input type="submit" value="Submit">
                </form>

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
    <script>
        
        function validateForm() {
            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var dob = document.getElementById('dob').value;
            var gender = document.getElementById('gender').value;
            var profileCreatedBy = document.getElementById('profileCreatedBy').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var maritalStatus = document.getElementById('maritalStatus').value;
            var mother = document.getElementById('mother').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var lettersOnlyRegex = /^[A-Za-z]+$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var mobileRegex = /^[6-9]\d{9}$/;
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d{3})[a-zA-Z0-9@#\$%\^\&*\)\(+=._-]{8,}$/;
            var religion = document.getElementById("religion").value;
            var caste = document.getElementById("caste").value;
            var subcaste = document.getElementById("subcaste").value;
            var highestEducation = document.getElementById("highestEducation").value;
            var additionalDegree = document.getElementById("additionalDegree").value;
            var employedIn = document.getElementById("employedIn").value;
            var occupation = document.getElementById("occupation").value;
            var annualIncome = document.getElementById("annualIncome").value;
            var familyType = document.getElementById("familyType").value;
            var familyValue = document.getElementById("familyValue").value;
            var familyStatus = document.getElementById("familyStatus").value;
            var fatherOccupation = document.getElementById("fatherOccupation").value.trim();
            var motherOccupation = document.getElementById("motherOccupation").value.trim();
            var numBrothers = document.getElementById("numBrothers").value;
            var numMarriedBrothers = document.getElementById("numMarriedBrothers").value;
            var numSisters = document.getElementById("numSisters").value;
            var country = document.getElementById('inputCountry').value;
    var state = document.getElementById('inputState').value;
    var city = document.getElementById('inputCity').value;

            var diet = document.getElementById("diet").value;
            var smokingHabits = document.getElementById("smokingHabits").value;
            var drinkingHabits = document.getElementById("drinkingHabits").value;
            var height = document.getElementById("height").value;
            var weight = document.getElementById("weight").value;
            var bodyType = document.getElementById("bodyType").value;
            var complexion = document.getElementById("complexion").value;
            var physicalStatus = document.getElementById("physicalStatus").value;
            var doshType = document.getElementById("doshType").value;
            var star = document.getElementById("star").value;
            var raasi = document.getElementById("raasi").value;
            var birthTime = document.getElementById("birthTime").value;
            var birthPlace = document.getElementById("birthPlace").value;
            var additionalInfo = document.getElementById("additionalInfo").value;
            if (!firstName.match(lettersOnlyRegex) || firstName.length < 3) {
                alert('First Name should contain only letters and have a minimum length of 3 characters');
                return false;
            }
            if (!lastName.match(lettersOnlyRegex) || lastName.length < 3) {
                alert('Last Name should contain only letters and have a minimum length of 3 characters');
                return false;
            }

            var today = new Date();
            var birthDate = new Date(dob);
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                alert('You must be at least 18 years old');
                return false;
            }

            if (dob.trim() === '') {
                alert('Please enter your Date of Birth');
                return false;
            }

            if (gender.trim() === '') {
                alert('Please select your Gender');
                return false;
            }

            if (profileCreatedBy.trim() === '') {
                alert('Please select Profile Created By');
                return false;
            }

            if (email.trim() === '') {
                alert('Please enter your Email ID');
                return false;
            }

            if (!email.match(emailRegex)) {
                alert('Please enter a valid email address ending with .com');
                return false;
            }

            if (mobile.trim() === '') {
                alert('Please enter your Mobile Number');
                return false;
            }

            if (!mobile.match(mobileRegex)) {
                alert('Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9');
                return false;
            }

            if (maritalStatus.trim() === '') {
                alert('Please select your Marital Status');
                return false;
            }

            if (mother.trim() === '') {
                alert('Please enter your Mother Tongue ');
                return false;
            }

            if (password.trim() === '') {
                alert('Please enter your Password');
                return false;
            }

            if (!password.match(passwordRegex)) {
                alert('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and three numeric digits');
                return false;
            }

            if (password !== confirmPassword) {
                alert('Password and Confirm Password do not match');
                return false;
            }
            if (religion === "") {
                alert("Please select a religion.");
                return false;
            }
            if (caste === "") {
                alert("Please select a caste.");
                return false;
            }
            if (subcaste === "") {
                alert("Please select a subcaste.");
                return false;
            }
            if (highestEducation === "") {
                alert("Please select highest education.");
                return false;
            }
            if (additionalDegree === "") {
                alert("Please select additional degree.");
                return false;
            }
            if (employedIn === "") {
                alert("Please select employed in.");
                return false;
            }
            if (occupation === "") {
                alert("Please select occupation.");
                return false;
            }
            if (annualIncome === "") {
                alert("Please select annual income.");
                return false;
            }
            if (familyType === "") {
                alert("Please select family type.");
                return false;
            }
            if (familyValue === "") {
                alert("Please select family value.");
                return false;
            }
            if (familyStatus === "") {
                alert("Please select family status.");
                return false;
            }
            if (fatherOccupation === "") {
                alert("Please enter father's occupation.");
                return false;
            }
            if (motherOccupation === "") {
                alert("Please enter mother's occupation.");
                return false;
            }
            if (numBrothers === "") {
                alert("Please select number of brothers.");
                return false;
            }
            if (numMarriedBrothers === "") {
                alert("Please select number of married brothers.");
                return false;
            }
            if (numSisters === "") {
                alert("Please select number of sisters.");
                return false;
            }
            if (numMarriedSisters === "") {
                alert("Please select number of married sisters.");
                return false;
            }
            if (state=== "") {
                alert("Please select your state of living.");
                return false;
            }
            if (city=== "") {
                alert("Please select your city of living.");
                return false;
            }
            if(country=== ""){
                alert("Please select your country of living.");
                return false;
            }
            if (diet === "") {
                alert("Please select your diet.");
                return false;
            }
            if (smokingHabits === "") {
                alert("Please select your smoking habits.");
                return false;
            }
            if (drinkingHabits === "") {
                alert("Please select your drinking habits.");
                return false;
            }
            if (height === "") {
                alert("Please select your height.");
                return false;
            }
            if (weight === "") {
                alert("Please select your weight.");
                return false;
            }
            if (bodyType === "") {
                alert("Please select your body type.");
                return false;
            }
            if (complexion === "") {
                alert("Please select your complexion.");
                return false;
            }
            if (physicalStatus === "") {
                alert("Please select your physical status.");
                return false;
            }
            if (doshType.trim() === '') {
                alert("Please enter the Dosh Type.");
                return false;
            }
            if (star === "") {
                alert("Please select your Star.");
                return false;
            }
            if (raasi === "") {
                alert("Please select your Raasi/Moonsign.");
                return false;
            }
            if (birthTime.trim() === '') {
                alert("Please enter your Birth Time.");
                return false;
            }
            if (birthPlace.trim() === '') {
                alert("Please enter your Birth Place.");
                return false;
            }
            if (additionalInfo.trim() === '') {
                alert("Please enter Additional Information.");
                return false;
            }


            return true;
        }
        function validateForms() {
    var ageFrom = document.getElementById("ageFrom").value;
    var ageTo = document.getElementById("ageTo").value;
    var heights = document.getElementById("heights").value;
    var heightRange = document.getElementById("heightRange").value;
    var lookingFor = document.getElementById("lookingFor").value;
    var physicalStatuss = document.getElementById("physicalStatuss").value;
    var eatingHabits = document.getElementById("eatingHabits").value;
    var smokingHabitss = document.getElementById("smokingHabitss").value;
    var drinkingHabitss = document.getElementById("drinkingHabitss").value;
    var religion = document.getElementById("religions").value;
    var caste = document.getElementById("castes").value;
    var motherTongue = document.getElementById("motherTongue").value;
    var doshType = document.getElementById("doshTypes").value;
    var star = document.getElementById("stars").value;
    var countryLivingIn = document.getElementById("countryLivingIn").value;
    var stateLivingIn = document.getElementById("stateLivingIn").value;
    var cityLivingIn = document.getElementById("cityLivingIn").value;
    var education = document.getElementById("education").value;
    var occupation = document.getElementById("occupations").value;
    var annualIncome = document.getElementById("annualIncomes").value;

    // Age validation
    if (ageFrom === "" || ageTo === "") {
        alert("Please select age range.");
        return false;
    }

    // Height validation
    if (heights === "" || heightRange === "") {
        alert("Please select height range.");
        return false;
    }
    if (heights >= heightRange) {
        alert("Height must be less than Height To");
        return false;
    }

    // Other field validations
    // Add your validations for other fields here...

    // Example validation for lookingFor field
    if (lookingFor === "") {
        alert("Please select looking for option.");
        return false;
    }

    // Example validation for physicalStatus field
    if (physicalStatuss === "") {
        alert("Please select physical status.");
        return false;
    }
    if(eatingHabits===""){
      alert("Please select eatingHabits.");
        return false;
    }
    if(smokingHabitss===""){
      alert("Please select smokingHabits.");
        return false;
    }
    if(drinkingHabitss===""){
      alert("Please select drinkingHabits.");
        return false;
    }
    
    if(religion===""){
      alert("Please select religion.");
        return false;
    }
    if(caste===""){
      alert("Please select caste.");
        return false;
    }
    
    if(motherTongue===""){
      alert("Please select motherTongue.");
        return false;
    }
    if(doshType===""){
      alert("Please select doshtype.");
        return false;
    }
    if(star===""){
      alert("Please select star.");
        return false;
    }
    
    if(countryLivingIn===""){
      alert("Please select countryLivingIn.");
        return false;
    }
    
    if(stateLivingIn===""){
      alert("Please select stateLivingIn.");
        return false;
    }
    
    if(cityLivingIn===""){
      alert("Please select cityLivingIn.");
        return false;
    }
    
    if(education===""){
      alert("Please select education.");
        return false;
    }
    
    if(occupation===""){
      alert("Please select occupation.");
        return false;
    }
      
    if(annualIncome===""){
      alert("Please select annualIncome.");
        return false;
    }
    

    



    // Continue adding validations for other fields...

    // If all validations pass, return true
    return true;
}

    </script>
    <!-- <script>
    function validateForms() {
        var ageFrom = document.getElementById("ageFrom").value;
    var ageTo = document.getElementById("ageTo").value;
    var height = document.getElementById("height").value;
   

    if (ageFrom === "" || ageTo === "") {
        alert("Please select age range.");
        return false;
    }

  
   

    // Looking For validation
    var lookingFor = document.getElementById("lookingFor").value;
    if (lookingFor === "") {
        alert("Please select what you are looking for.");
        return false;
    }

    // Physical Status validation
    var physicalStatus = document.getElementById("physicalStatus").value;
    if (physicalStatus === "") {
        alert("Please select physical status.");
        return false;
    }

    // Eating Habits validation
    var eatingHabits = document.getElementById("eatingHabits").value;
    if (eatingHabits === "") {
        alert("Please select eating habits.");
        return false;
    }

    // Smoking Habits validation
    var smokingHabits = document.getElementById("smokingHabits").value;
    if (smokingHabits === "") {
        alert("Please select smoking habits.");
        return false;
    }

    // Drinking Habits validation
    var drinkingHabits = document.getElementById("drinkingHabits").value;
    if (drinkingHabits === "") {
        alert("Please select drinking habits.");
        return false;
    }

    // Religion and Caste validation
    var religion = document.getElementById("religion").value;
    var caste = document.getElementById("caste").value;
    if (religion === "" || caste === "") {
        alert("Please select religion and caste.");
        return false;
    }

    // Mother Tongue validation
    var motherTongue = document.getElementById("motherTongue").value;
    if (motherTongue === "") {
        alert("Please enter mother tongue.");
        return false;
    }

    // Dosh Type validation
    var doshType = document.getElementById("doshType").value;
    if (doshType === "") {
        alert("Please enter dosh type.");
        return false;
    }

    // Star validation
    var star = document.getElementById("star").value;
    if (star === "") {
        alert("Please select star rating.");
        return false;
    }

    // Country, State, and City validation
    var countryLivingIn = document.getElementById("countryLivingIn").value;
    var stateLivingIn = document.getElementById("stateLivingIn").value;
    var cityLivingIn = document.getElementById("cityLivingIn").value;
    if (countryLivingIn === "" || stateLivingIn === "" || cityLivingIn === "") {
        alert("Please select country, state, and city.");
        return false;
    }

    // Education validation
    var education = document.getElementById("education").value;
    if (education === "") {
        alert("Please enter education.");
        return false;
    }

    // Occupation validation
    var occupation = document.getElementById("occupation").value;
    if (occupation === "") {
        alert("Please enter occupation.");
        return false;
    }

    // Annual Income validation
    var annualIncome = document.getElementById("annualIncome").value;
    if (annualIncome === "") {
        alert("Please select annual income.");
        return false;
    }

    return true;
}


</script> -->

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
        function populateCaste() {
            var religion = document.getElementById("religion").value;
            var casteDropdown = document.getElementById("caste");

            // Clear existing options
            casteDropdown.innerHTML = "<option value='' disabled selected>Select Caste</option>";

            // Populate caste options based on religion
            if (religion === "hindu") {
                var casteOptions = ["OC", "BC", "SC"];
            } else if (religion === "muslim") {
                var casteOptions = ["OC", "BC"];
            } else if (religion === "christian") {
                var casteOptions = ["OC", "BC"];
            }

            // Add caste options to dropdown
            for (var i = 0; i < casteOptions.length; i++) {
                var option = document.createElement("option");
                option.text = casteOptions[i];
                option.value = casteOptions[i];
                casteDropdown.appendChild(option);
            }
        }

        function populateSubcaste() {
            var caste = document.getElementById("caste").value;
            var subcasteDropdown = document.getElementById("subcaste");

            // Clear existing options
            subcasteDropdown.innerHTML = "<option value='' disabled selected>Select Subcaste</option>";

            // Populate subcaste options based on caste
            if (caste === "OC") {
                var subcasteOptions = ["Subcaste1_OC", "Subcaste2_OC", "Subcaste3_OC"];
            } else if (caste === "BC") {
                var subcasteOptions = ["Subcaste1_BC", "Subcaste2_BC", "Subcaste3_BC"];
            } else if (caste === "SC") {
                var subcasteOptions = ["Subcaste1_SC", "Subcaste2_SC", "Subcaste3_SC"];
            }

            // Add subcaste options to dropdown
            for (var i = 0; i < subcasteOptions.length; i++) {
                var option = document.createElement("option");
                option.text = subcasteOptions[i];
                option.value = subcasteOptions[i];
                subcasteDropdown.appendChild(option);
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
                indiaStates.forEach(function (state) {
                    var option = document.createElement('option');
                    option.textContent = state;
                    option.value = state;
                    stateSelect.appendChild(option);
                });
            } else if (countrySelect.value === 'USA') {
                usaStates.forEach(function (state) {
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
                apCities.forEach(function (city) {
                    var option = document.createElement('option');
                    option.textContent = city;
                    option.value = city;
                    citySelect.appendChild(option);
                });
            } else if (selectedState === 'Arunachal Pradesh') {
                var arPrCities = ['Itanagar', 'Naharlagun', 'Pasighat', 'Namsai', 'Tezu', 'Ziro', 'Bomdila', 'Tawang', 'Khonsa'];
                arPrCities.forEach(function (city) {
                    var option = document.createElement('option');
                    option.textContent = city;
                    option.value = city;
                    citySelect.appendChild(option);
                });
            }
            // Add more states and their cities as needed
        }
    </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        
    function validateImages() {
        var images = document.querySelectorAll('input[type="file"]');
        var selectedImages = Array.from(images).filter(input => input.files.length > 0);
        if (selectedImages.length === 0) {
            alert("Please select at least one image.");
            return false;
        }
        return true;
    }

    
</script>





</body>
</html>