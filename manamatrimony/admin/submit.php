<?php

// MySQL database connection
include "db.php";

function handle_error($sql, $conn) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if (isset($_POST['educationOccupationSubmit'])) {
    // Fetching data from the form
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $profileCreatedBy = $_POST['profileCreatedBy'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $maritalStatus = $_POST['maritalStatus'] ?? '';
    $mother = $_POST['mother'] ?? '';
    $password = $_POST['password'] ?? '';
    $religion = $_POST['religion'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    // Add other form fields here...
    
    $caste = $_POST['caste'] ?? '';
    $subcaste = $_POST['subcaste'] ?? '';
    $familyType = $_POST['familyType'] ?? '';
    $familyValue = $_POST['familyValue'] ?? '';
    $familyStatus = $_POST['familyStatus'] ?? '';
    $fatherOccupation = $_POST['fatherOccupation'] ?? '';
    $motherOccupation = $_POST['motherOccupation'] ?? '';
    $numBrothers = $_POST['numBrothers'] ?? '';
    $numMarriedBrothers = $_POST['numMarriedBrothers'] ?? '';
    $numSisters = $_POST['numSisters'] ?? '';
    $numMarriedSisters = $_POST['numMarriedSisters'] ?? '';
    $willingToMarryOtherCaste = isset($_POST['willingToMarryOtherCaste']) ? 'yes' : 'no'; 
    $inputCountry = $_POST['inputCountry'] ?? '';
    $inputState = $_POST['inputState'] ?? '';
    $inputCity = $_POST['inputCity'] ?? '';
    $diet = $_POST['diet'] ?? '';
    $smokingHabits = $_POST['smokingHabits'] ?? '';
    $drinkingHabits = $_POST['drinkingHabits'] ?? '';
    $height = $_POST['height'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $bodyType = $_POST['bodyType'] ?? '';
    $complexion = $_POST['complexion'] ?? '';
    $physicalStatus = $_POST['physicalStatus'] ?? '';
    $doshType = $_POST['doshType'] ?? '';
    $star = $_POST['star'] ?? '';
    $raasi = $_POST['raasi'] ?? '';
    $birthTime = $_POST['birthTime'] ?? '';
    $birthPlace = $_POST['birthPlace'] ?? '';
    $additionalInfo = $_POST['additionalInfo'] ?? '';
    $highestEducation = $_POST['highestEducation'] ?? '';
    $additionalDegree = $_POST['additionalDegree'] ?? '';
    $employedIn = $_POST['employedIn'] ?? '';
    $occupation = $_POST['occupation'] ?? '';
    $annualIncome = $_POST['annualIncome'] ?? '';
    $ageFrom = $_POST['age_from'] ?? '';
    $ageTo = $_POST['age_to'] ?? '';
    $heightFrom = $_POST['height_from'] ?? '';
    $heightTo = $_POST['height_to'] ?? '';
    $lookingFor = $_POST['looking_for'] ?? '';
    $par_physicalStatus = $_POST['par_physical_status'] ?? '';
    $par_eatingHabits = $_POST['par_eating_habits'] ?? '';
    $par_smokingHabits = $_POST['par_smoking_habits'] ?? '';
    $par_drinkingHabits = $_POST['par_drinking_habits'] ?? '';
    $par_religion = $_POST['par_religion'] ?? '';
    $par_caste = $_POST['par_caste'] ?? '';
    $par_motherTongue = $_POST['par_mother_tongue'] ?? '';
    $par_doshType = $_POST['par_doshTypes'] ?? '';
    $par_star = $_POST['par_stars'] ?? '';
    $par_countryLivingIn = $_POST['par_country_living_in'] ?? '';
    $par_stateLivingIn = $_POST['par_state_living_in'] ?? '';
    $par_cityLivingIn = $_POST['par_city_living_in'] ?? '';
    $par_education = $_POST['par_education'] ?? '';
    $par_occupation = $_POST['par_occupation'] ?? '';
    $par_annualIncome = $_POST['par_annualIncomes'] ?? '';

    // Check if the mobile number already exists
    $sql = "SELECT * FROM user_profiles WHERE mobile = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('This mobile number is already registered.'); window.location.href = 'addmembers.php';</script>";
        exit();
    }

    // Check if the email already exists
    $sql = "SELECT * FROM user_profiles WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('This email is already registered.'); window.location.href = 'addmembers.php';</script>";
        exit();
    }

    // Insert the new user profile
    $photoUrls = [];
    $photoUploaded = false; // Flag to track if at least one photo is uploaded

    // Allowed file extensions
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    // Loop through the uploaded photos and process them
    for ($i = 1; $i <= 8; $i++) {
        $photoName = 'photo' . $i;
        if (isset($_FILES[$photoName]) && $_FILES[$photoName]['error'] === UPLOAD_ERR_OK) {
            // Validate file extension
            $fileExtension = strtolower(pathinfo($_FILES[$photoName]['name'], PATHINFO_EXTENSION));
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Error uploading photo $i: Only JPG, JPEG, and PNG files are allowed.<br>";
                continue; // Skip processing this file
            }

            // Process the uploaded file
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES[$photoName]['name']);
            if (move_uploaded_file($_FILES[$photoName]['tmp_name'], $targetFile)) {
                // File uploaded successfully
                $photoUrl = $conn->real_escape_string($targetFile); // Store the file path
                $photoUrls[$i] = $photoUrl; // Store in an array with index $i
                $photoUploaded = true; // Set flag to true
            } else {
                // Error uploading file
                echo "Error uploading photo $i: " . $_FILES[$photoName]['error'] . "<br>";
            }
        } elseif ($_FILES[$photoName]['error'] !== UPLOAD_ERR_NO_FILE) {
            // Some error occurred other than no file uploaded
            echo "Error with photo $i: " . $_FILES[$photoName]['error'] . "<br>";
        }
    }

    // Check if at least one photo is uploaded
    if (!$photoUploaded) {
        echo '<script>alert("Please upload at least one photo."); window.location.href = "addmembers.php";</script>';
        exit();
    }

    // Construct the SQL query
    $sql = "INSERT INTO user_profiles (firstName, lastName, dob, gender, profileCreatedBy, email, mobile, maritalStatus, mother, password, religion, confirmPassword, caste, subcaste, familyType, familyValue, familyStatus, fatherOccupation, motherOccupation, numBrothers, numMarriedBrothers, numSisters, numMarriedSisters, willingToMarryOtherCaste, inputCountry, inputState, inputCity, diet, smokingHabits, drinkingHabits, height, weight, bodyType, complexion, physicalStatus, doshType, star, raasi, birthTime, birthPlace, additionalInfo, highestEducation, additionalDegree, employedIn, occupation, annualIncome, age_from, age_to, height_from, height_to, looking_for, par_physical_status, par_eating_habits, par_smoking_habits, par_drinking_habits, par_religion, par_caste, par_mother_tongue, par_doshTypes, par_stars, par_country_living_in, par_state_living_in, par_city_living_in, par_education, par_occupation, par_annualIncomes";

    // Add placeholders for photo URLs to the SQL query
    for ($i = 1; $i <= 8; $i++) {
        $sql .= ", photo{$i}_url"; // Append column name
    }

    // Add VALUES part of the SQL query
    $sql .= ") VALUES ('$firstName', '$lastName', '$dob', '$gender', '$profileCreatedBy', '$email', '$mobile', '$maritalStatus', '$mother', '$password', '$religion', '$confirmPassword', '$caste', '$subcaste', '$familyType', '$familyValue', '$familyStatus', '$fatherOccupation', '$motherOccupation', '$numBrothers', '$numMarriedBrothers', '$numSisters', '$numMarriedSisters', '$willingToMarryOtherCaste', '$inputCountry', '$inputState', '$inputCity', '$diet', '$smokingHabits', '$drinkingHabits', '$height', '$weight', '$bodyType', '$complexion', '$physicalStatus', '$doshType', '$star', '$raasi', '$birthTime', '$birthPlace', '$additionalInfo', '$highestEducation', '$additionalDegree', '$employedIn', '$occupation', '$annualIncome', '$ageFrom', '$ageTo', '$heightFrom', '$heightTo', '$lookingFor', '$par_physicalStatus', '$par_eatingHabits', '$par_smokingHabits', '$par_drinkingHabits', '$par_religion', '$par_caste', '$par_motherTongue', '$par_doshType', '$par_star', '$par_countryLivingIn', '$par_stateLivingIn', '$par_cityLivingIn', '$par_education', '$par_occupation', '$par_annualIncome'";

    // Add photo URLs to the VALUES part of the SQL query
    for ($i = 1; $i <= 8; $i++) {
        $sql .= ", '" . ($photoUrls[$i] ?? '') . "'"; // Append photo URL
    }

    // Complete the SQL query
    $sql .= ")";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record inserted successfully"); window.location.href = "addmembers.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $conn->error . '"); window.location.href = "addmembers.php";</script>';
    }
}

?>
