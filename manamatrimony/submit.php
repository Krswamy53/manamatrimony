<?php
include"db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Assuming email is unique and used to identify the user
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $marital_status = is_array($_POST['maritalStatus']) ? implode(", ", $_POST['maritalStatus']) : $_POST['maritalStatus'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $subcaste = $_POST['subcaste'];
    $mother_tongue = $_POST['mother'];
    $country_living_in = $_POST['inputCountry'];
    $state_living_in = $_POST['inputState'];
    $city_living_in = $_POST['inputCity'];
    
    // Checkbox handling
    $willingToMarryOtherCaste = isset($_POST['willingToMarryOtherCaste']) ? 'yes' : 'no';

    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bodyType = is_array($_POST['bodyType']) ? implode(", ", $_POST['bodyType']) : $_POST['bodyType'];
    $complexion = is_array($_POST['complexion']) ? implode(", ", $_POST['complexion']) : $_POST['complexion'];
    $physicalStatus = $_POST['physicalStatus'];
    $smoking_habits = is_array($_POST['smokingHabits']) ? implode(", ", $_POST['smokingHabits']) : $_POST['smokingHabits'];
    $drinking_habits = is_array($_POST['drinkingHabits']) ? implode(", ", $_POST['drinkingHabits']) : $_POST['drinkingHabits'];
    $diet = is_array($_POST['diet']) ? implode(", ", $_POST['diet']) : $_POST['diet'];
    $dosh_type = is_array($_POST['doshType']) ? implode(", ", $_POST['doshType']) : $_POST['doshType'];
    $raasi = is_array($_POST['raasi']) ? implode(", ", $_POST['raasi']) : $_POST['raasi'];

    $star = $_POST['star'];
    $birth_time = $_POST['birthTime'];
    $birth_place = $_POST['birthPlace'];
    $highest_education = $_POST['highestEducation'];
    $additional_degree = $_POST['additionalDegree'];
    $employed_in = is_array($_POST['employedIn']) ? implode(", ", $_POST['employedIn']) : $_POST['employedIn'];
    $occupation = $_POST['occupation'];
    $annual_income = $_POST['annualIncome'];

    $family_status = is_array($_POST['familyStatus']) ? implode(", ", $_POST['familyStatus']) : $_POST['familyStatus'];
    $family_type = is_array($_POST['familyType']) ? implode(", ", $_POST['familyType']) : $_POST['familyType'];
    $family_value = is_array($_POST['familyValue']) ? implode(", ", $_POST['familyValue']) : $_POST['familyValue'];
    $father_occupation = $_POST['fatherOccupation'];
    $mother_occupation = $_POST['motherOccupation'];
    $num_brothers = $_POST['numBrothers'];
    $numMarriedBrothers = $_POST['numMarriedBrothers'];

    $num_sisters = $_POST['numSisters'];
    $numMarriedSisters = $_POST['numMarriedSisters'];

    // Additional Information
    $additional_info = $_POST['additionalInfo'];

    // Create the directory if it does not exist
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Handle file uploads
    $photo1 = basename($_FILES['photos']['name'][0]);
    $photo2 = basename($_FILES['photos']['name'][1]);
    $photo3 = basename($_FILES['photos']['name'][2]);
    $photo4 = basename($_FILES['photos']['name'][3]);

    $photo1_path = $target_dir . $photo1;
    $photo2_path = $target_dir . $photo2;
    $photo3_path = $target_dir . $photo3;
    $photo4_path = $target_dir . $photo4;

    move_uploaded_file($_FILES['photos']['tmp_name'][0], $photo1_path);
    move_uploaded_file($_FILES['photos']['tmp_name'][1], $photo2_path);
    move_uploaded_file($_FILES['photos']['tmp_name'][2], $photo3_path);
    move_uploaded_file($_FILES['photos']['tmp_name'][3], $photo4_path);

    $age_from = $_POST['age_from'];
    $age_to = $_POST['age_to'];
    $height_from = $_POST['height_from'];
    $height_to = $_POST['height_to'];
    $looking_for = $_POST['looking_for'];
    $par_physical_status = $_POST['par_physical_status'];
    $eating_habits = $_POST['par_eating_habits'];
    $par_smoking_habits = $_POST['par_smoking_habits'];
    $par_drinking_habits = $_POST['par_drinking_habits'];
    $par_religion = $_POST['par_religion'];
    $par_caste = $_POST['par_caste'];
    $par_mother_tongue = $_POST['par_mother_tongue'];
    $dosh_types = is_array($_POST['par_doshTypes']) ? implode(", ", $_POST['par_doshTypes']) : $_POST['par_doshTypes'];
    $stars = is_array($_POST['par_stars']) ? implode(", ", $_POST['par_stars']) : $_POST['par_stars'];
    $par_country_living_in = $_POST['par_country_living_in'];
    $par_state_living_in = $_POST['par_state_living_in'];
    $par_city_living_in = $_POST['par_city_living_in'];
    $par_education = $_POST['par_education'];
    $par_occupation = $_POST['par_occupation'];
    $par_annual_income = $_POST['par_annualIncomes'];

    // Retrieve user ID based on email
    $stmt = $conn->prepare("SELECT id FROM user_profiles WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userId);
    $stmt->fetch();
    $stmt->close();

    // Check if user ID is retrieved
    if ($userId) {
        $sql = "UPDATE user_profiles SET 
                firstName='$first_name', 
                lastName='$last_name', 
                password='$password', 
                mobile='$mobile', 
                gender='$gender', 
                dob='$dob', 
                maritalStatus='$marital_status', 
                religion='$religion', 
                caste='$caste', 
                subcaste='$subcaste', 
                mother='$mother_tongue', 
                inputCountry='$country_living_in', 
                inputState='$state_living_in',
                inputCity='$city_living_in',
                willingToMarryOtherCaste='$willingToMarryOtherCaste',
                height='$height', 
                weight='$weight', 
                bodyType='$bodyType', 
                complexion='$complexion', 
                physicalStatus='$physicalStatus', 
                smokingHabits='$smoking_habits', 
                drinkingHabits='$drinking_habits', 
                diet='$diet', 
                doshType='$dosh_type', 
                raasi='$raasi', 
                star='$star', 
                birthTime='$birth_time', 
                birthPlace='$birth_place', 
                highestEducation='$highest_education', 
                additionalDegree='$additional_degree', 
                employedIn='$employed_in', 
                occupation='$occupation', 
                annualIncome='$annual_income', 
                familyStatus='$family_status', 
                familyType='$family_type', 
                familyValue='$family_value', 
                fatherOccupation='$father_occupation', 
                motherOccupation='$mother_occupation', 
                numBrothers='$num_brothers', 
                numMarriedBrothers='$numMarriedBrothers', 
                numSisters='$num_sisters', 
                numMarriedSisters='$numMarriedSisters', 
                additionalInfo='$additional_info', 
                photo1_url='$photo1_path', 
                photo2_url='$photo2_path', 
                photo3_url='$photo3_path',
                photo4_url='$photo4_path',
                age_from='$age_from', 
                age_to='$age_to', 
                height_from='$height_from', 
                height_to='$height_to', 
                looking_for='$looking_for', 
                par_physical_status='$par_physical_status', 
                par_eating_habits='$eating_habits', 
                par_smoking_habits='$par_smoking_habits', 
                par_drinking_habits='$par_drinking_habits', 
                par_religion='$par_religion', 
                par_caste='$par_caste', 
                par_mother_tongue='$par_mother_tongue', 
                par_doshTypes='$dosh_types', 
                par_stars='$stars', 
                par_country_living_in='$par_country_living_in', 
                par_state_living_in='$par_state_living_in', 
                par_city_living_in='$par_city_living_in', 
                par_education='$par_education', 
                par_occupation='$par_occupation', 
                par_annualIncomes='$par_annual_income' 
                WHERE id='$userId'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Record updated successfully");</script>';
            // Redirect to loginform.php after the alert
            echo '<script>window.location.href = "loginform.php";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>
