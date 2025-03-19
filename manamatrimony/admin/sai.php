<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['basic_details_submit'])) {
    // Retrieve form data and sanitize it
    $formData = array(
        'firstName' => isset($_POST['firstName']) ? $_POST['firstName'] : '',
        'lastName' => isset($_POST['lastName']) ? $_POST['lastName'] : '',
        'dob' => isset($_POST['dob']) ? $_POST['dob'] : '',
        'gender' => isset($_POST['gender']) ? $_POST['gender'] : '',
        'profileCreatedBy' => isset($_POST['profileCreatedBy']) ? $_POST['profileCreatedBy'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'mobile' => isset($_POST['mobile']) ? $_POST['mobile'] : '',
        'maritalStatus' => isset($_POST['maritalStatus']) ? $_POST['maritalStatus'] : '',
        'mother' => isset($_POST['mother']) ? $_POST['mother'] : '',
        'password' => isset($_POST['password']) ? $_POST['password'] : '',
        'confirmPassword' => isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '',
        // Add more form fields here
        'religion' => isset($_POST['religion']) ? $_POST['religion'] : '',
        'caste' => isset($_POST['caste']) ? $_POST['caste'] : '',
        'subcaste' => isset($_POST['subcaste']) ? $_POST['subcaste'] : '',
        'willingToMarryOtherCaste' => isset($_POST['willingToMarryOtherCaste']) ? $_POST['willingToMarryOtherCaste'] : '',
        // Add more form fields here
        'inputCountry' => isset($_POST['inputCountry']) ? $_POST['inputCountry'] : '',
        'inputState' => isset($_POST['inputState']) ? $_POST['inputState'] : '',
        'inputCity' => isset($_POST['inputCity']) ? $_POST['inputCity'] : '',
        'diet' => isset($_POST['diet']) ? $_POST['diet'] : '',
        'smokingHabits' => isset($_POST['smokingHabitss']) ? $_POST['smokingHabitss'] : '',
        'drinkingHabits' => isset($_POST['drinkingHabitss']) ? $_POST['drinkingHabitss'] : '',
        'height' => isset($_POST['height']) ? $_POST['height'] : '',
        'weight' => isset($_POST['weight']) ? $_POST['weight'] : '',
        'bodyType' => isset($_POST['bodyType']) ? $_POST['bodyType'] : '',
        'complexion' => isset($_POST['complexion']) ? $_POST['complexion'] : '',
        'physicalStatus' => isset($_POST['physicalStatus']) ? $_POST['physicalStatus'] : '',
        'doshType' => isset($_POST['doshType']) ? $_POST['doshType'] : '',
        'star' => isset($_POST['star']) ? $_POST['star'] : '',
        'raasi' => isset($_POST['raasi']) ? $_POST['raasi'] : '',
        'birthTime' => isset($_POST['birthTime']) ? $_POST['birthTime'] : '',
        'birthPlace' => isset($_POST['birthPlace']) ? $_POST['birthPlace'] : '',
        'additionalInfo' => isset($_POST['additionalInfo']) ? $_POST['additionalInfo'] : ''
    );

    // Save the form data to session
    $_SESSION['formData'] = $formData;

    // Redirect to the next page
    header("Location:#upload-photos");
    exit(); // Terminate the current script
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload_photos_submit'])) {
    // Establish a connection to the database
    include "db.php";

    // Loop through the six photos
    for ($i = 1; $i <= 6; $i++) {
        // Check if the photo was uploaded
        if (isset($_FILES['photo'.$i])) {
            $photo_name = $_FILES['photo'.$i]['name'];
            $photo_tmp_name = $_FILES['photo'.$i]['tmp_name'];
            
            // Check if photo is uploaded successfully
            if ($photo_tmp_name != "") {
                $target_dir = "uploads/"; // Directory where you want to store the uploaded photos
                $target_file = $target_dir . basename($photo_name);
                
                // Move uploaded photo to the designated directory
                if (move_uploaded_file($photo_tmp_name, $target_file)) {
                    // Insert photo URL into the database
                    $sql = "INSERT INTO user_profiles (photo{$i}_url) VALUES ('$target_file')";
                    if ($conn->query($sql) === TRUE) {
                        echo "Photo uploaded successfully.";
                    } else {
                        echo "Error inserting data into the database: " . $conn->error;
                    }
                } else {
                    echo "Error moving uploaded photo.";
                }
            }
        }
    }

    // Close the database connection
    $conn->close();
}
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS (if any) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Add your custom styles here */
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
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Trigger a click event on the "Upload Photos" tab link
            document.getElementById("upload-photos-tab").click();
        });
    </script>
</head>

<body>
    <div class="container mt-5">
        <!-- <h2 class="mb-4">Member Details</h2> -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="basic-details-tab" data-toggle="tab" href="#basic-details">Member Details</a>
            </li>
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
                    <button type="submit" id="saveButton" name="educationOccupationSubmit">Save</button>
                    <button type="button" id="nextButton1" class="btn btn-primary">Next</button>
                </form>
            </div>
            <!-- Upload Photos Tab -->
            <div id="upload-photos" class="tab-pane fade">
                <div class="container mt-3">
                    <!-- Form for uploading photos -->
                    <form action="submit.php" method="post" enctype="multipart/form-data" onsubmit="return validateImages()">
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
                        <button type="submit" name="upload_photos_submit" class="btn btn-primary">Save</button>
                        <button type="submit" id="nextButton2" class="btn btn-primary">Next</button>
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

                <br>
                <form id="partnerPreferenceForm" action="d.php" method="post" onsubmit="return validateForms()">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-row">
                    <div class="form-group col-md-3">
        <label for="age_from">Age From</label>
        <select class="form-control" id="age_from" name="age_from" required>
            <option value="" disabled selected>Select Your Age</option>
            <option value="18">18 years</option>
            <option value="19">19 years</option>
            <!-- Add more options for ages -->
            <option value="35">35 years</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid age range.
        </div>
    </div>
                        <div class="form-group col-md-3">
                            <label for="age_to">Age To</label>
                            <select class="form-control" id="age_to" name="age_to" required>
                                <option value="" disabled selected>Select Your Age To</option>
                                <option value="25">25 years</option>
                                <!-- Add more options for ages -->
                                <option value="55">55 years</option>
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
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_physical_status">Physical Status</label>
                            <select class="form-control" id="par_physical_status" name="par_physical_status" required>
                                <option value="" disabled selected>Select Your Looking For</option>
                                <option value="slim">Slim</option>
                                <option value="fit">Fit</option>
                                <option value="chubby">Chubby</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_eating_habits">Eating Habits</label>
                            <select class="form-control" id="par_eating_habits" name="par_eating_habits" required>
                                <option value="" disabled selected>Select Your eatingHabits</option>
                                <option value="veg">Vegetarian</option>
                                <option value="non-veg">Non-Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_smoking_habits">Smoking Habits</label>
                            <select class="form-control" id="smoking_habits" name="par_smoking_habits" required>
                                <option value="" disabled selected>Select Your Smoking Habits</option>
                                <option value="daily">Daily</option>
                                <option value="occasional">Occasional</option>
                                <option value="teetotaler">Teetotaler</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_drinking_habits">Drinking Habits</label>
                            <select class="form-control" id="par_drinking_habits" name="par_drinking_habits" required>
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
                            <input type="text" class="form-control" id="par_doshTypes" name="par_doshTypes" placeholder="Enter Dosh Type" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_stars">Star</label>
                            <select class="form-control" id="par_stars" name="par_stars" required>
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
                            <div class="section-title">Education & occupation Preference </div>
                        </div>
                    </div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_education">Education</label>
                            <input type="text" class="form-control" id="par_education" name="par_education" placeholder="Enter Education" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_occupation">Occupation</label>
                            <input type="text" class="form-control" id="par_occupation" name="par_occupation" placeholder="Enter Occupation" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_annualIncomes">Annual Income</label>
                            <select class="form-control" id="par_annualIncomes" name="par_annualIncomes" required>
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
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("myForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent default form submission behavior

                // Check validations
                if (validateForm()) {
                    // If validation passes, proceed with saving form data
                    alert("Form saved successfully!");
                    // Add code to save form data or navigate to the next step here
                    document.getElementById("nextPageBtn").disabled = false;
                }
            });
        });

        function goToNextPage() {
            window.location.href = "next-page.html"; // Replace "next-page.html" with the URL of your next page
        }

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
            if (state === "") {
                alert("Please select your state of living.");
                return false;
            }
            if (city === "") {
                alert("Please select your city of living.");
                return false;
            }
            if (country === "") {
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
            if (eatingHabits === "") {
                alert("Please select eatingHabits.");
                return false;
            }
            if (smokingHabitss === "") {
                alert("Please select smokingHabits.");
                return false;
            }
            if (drinkingHabitss === "") {
                alert("Please select drinkingHabits.");
                return false;
            }

            if (religion === "") {
                alert("Please select religion.");
                return false;
            }
            if (caste === "") {
                alert("Please select caste.");
                return false;
            }

            if (motherTongue === "") {
                alert("Please select motherTongue.");
                return false;
            }
            if (doshType === "") {
                alert("Please select doshtype.");
                return false;
            }
            if (star === "") {
                alert("Please select star.");
                return false;
            }

            if (countryLivingIn === "") {
                alert("Please select countryLivingIn.");
                return false;
            }

            if (stateLivingIn === "") {
                alert("Please select stateLivingIn.");
                return false;
            }

            if (cityLivingIn === "") {
                alert("Please select cityLivingIn.");
                return false;
            }

            if (education === "") {
                alert("Please select education.");
                return false;
            }

            if (occupation === "") {
                alert("Please select occupation.");
                return false;
            }

            if (annualIncome === "") {
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
            }
            // Add more states and their cities as needed
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("myForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent default form submission behavior

                // Check validations
                if (validateForm()) {
                    // If validation passes, proceed with saving form data
                    alert("Form saved successfully!");
                    // Add code to save form data or navigate to the next step here
                    document.getElementById("nextPageBtn").disabled = false;
                }
            });
        });

        function goToNextPage() {
            window.location.href = "next-page.html"; // Replace "next-page.html" with the URL of your next page
        }
        // Define the validateImages function to perform image validation
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

    <!-- <script>
    // JavaScript for form validation and navigation
    document.getElementById("nextButton1").addEventListener("click", function() {
        // Validate member details form fields
        if (validateMemberDetailsForm()) {
            document.getElementById("nextButton1").disabled = true; // Disable Next button after validation
            document.getElementById("upload-photos-tab").click(); // Activate next tab
        }
    });

    document.getElementById("saveButton").addEventListener("click", function() {
        // Validate member details form fields
        if (validateMemberDetailsForm()) {
            document.getElementById("nextButton1").disabled = false; // Enable Next button after successful validation
            alert("Form saved successfully!");
        }
    });

    function validateMemberDetailsForm() {
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
        return true; // Return true if validation passes, false otherwise
    }

    function validateUploadPhotosForm() {
        // Validation logic for upload photos form
        return true; // Return true if validation passes, false otherwise
    }
</script> -->
    <script>
        document.getElementById("saveButton").addEventListener("click", function() {
            // Save form data
            saveFormData();

            // Validate member details form fields
            if (validateMemberDetailsForm()) {
                // Enable Next button after successful validation
                document.getElementById("nextButton1").disabled = false;
                // Inform the user that the form is saved
                alert("Form saved successfully!");
            }
        });

        document.getElementById("nextButton1").addEventListener("click", function() {
            // Validate member details form fields before proceeding to the next tab
            if (validateMemberDetailsForm()) {
                // Activate next tab
                document.getElementById("upload-photos-tab").click();
            }
        });

        function saveFormData() {
            // Get form data
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

            // Example: Save form data to localStorage
            localStorage.setItem("formData", JSON.stringify({
                firstName: firstName,
                lastName: lastName,
                dob: dob,
                gender: gender,
                profileCreatedBy: profileCreatedBy,
                email: email,
                mobile: mobile,
                maritalStatus: maritalStatus,
                mother: mother,
                password: password,
                confirmPassword: confirmPassword,
                religion: religion,
                caste: caste,
                subcaste: subcaste,
                highestEducation: highestEducation,
                additionalDegree: additionalDegree,
                employedIn: employedIn,
                occupation: occupation,
                annualIncome: annualIncome,
                familyType: familyType,
                familyValue: familyValue,
                familyStatus: familyStatus,
                fatherOccupation: fatherOccupation,
                motherOccupation: motherOccupation,
                numBrothers: numBrothers,
                numMarriedBrothers: numMarriedBrothers,
                numSisters: numSisters,
                country: country,
                state: state,
                city: city,
                diet: diet,
                smokingHabits: smokingHabits,
                drinkingHabits: drinkingHabits,
                height: height,
                weight: weight,
                bodyType: bodyType,
                complexion: complexion,
                physicalStatus: physicalStatus,
                doshType: doshType,
                star: star,
                raasi: raasi,
                birthTime: birthTime,
                birthPlace: birthPlace,
                additionalInfo: additionalInfo
            }));
        }

        function validateMemberDetailsForm() {
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
            if (state === "") {
                alert("Please select your state of living.");
                return false;
            }
            if (city === "") {
                alert("Please select your city of living.");
                return false;
            }
            if (country === "") {
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
            return true; // Return true if validation passes, false otherwise
        }
    </script>

    <script>
        document.getElementById("nextButton2").addEventListener("click", function() {
            // Redirect to the next page
            window.location.href = "#partner_preference";
        });

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

</body>

</html>