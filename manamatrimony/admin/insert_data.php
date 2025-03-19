<?php
// Database connection
include "db.php";
// Retrieve form data
$first_name = $_POST['inputFirstName'];
$last_name = $_POST['inputLastName'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$gender = $_POST['inputGender'];
$mobile_number = $_POST['inputMobile'];
$age = $_POST['inputAge'];
$marital_status = $_POST['inputMaritalStatus'];
$username = $_POST['inputUsername'];
$date_of_birth = $_POST['inputDOB'];
$mother_tongue = $_POST['inputMotherTongue'];
$religion = $_POST['inputReligion'];
$caste = $_POST['inputCaste'];
$education = $_POST['inputEducation'];
$nakshatras = $_POST['inputNakshatras'];
$birth_time = $_POST['inputBirthTime'];
$birth_place = $_POST['inputBirthPlace'];
$Country = $_POST['inputCountry'];
$City = $_POST['inputCity'];
$height = $_POST['inputHeight'];
$weight = $_POST['inputWeight'];
$physical_appearance = $_POST['inputPhysicalAppearance'];
$diet = $_POST['inputDiet'];
$drinking_habits = $_POST['inputDrinking'];
$smoking_habits = $_POST['inputSmoking'];
$photo = $_FILES['inputPhoto']['name']; // Capturing the filename of the uploaded photo

// Check if email already exists
$email_check_query = "SELECT * FROM users WHERE email = '$email'";
$email_result = $conn->query($email_check_query);
if ($email_result->num_rows > 0) {
    // Display alert for duplicate email
    echo "<script>alert('Email already exists. Please use a different email address.'); window.location.href = 'addmembers.php';</script>";
    exit();
}

// Check if mobile number already exists
$mobile_check_query = "SELECT * FROM users WHERE mobile_number = '$mobile_number'";
$mobile_result = $conn->query($mobile_check_query);
if ($mobile_result->num_rows > 0) {
    // Display alert for duplicate mobile number
    echo "<script>alert('Mobile number already exists. Please use a different number.'); window.location.href = 'addmembers.php';</script>";
    exit();
}

// Prepare SQL statement to insert data into the table
$sql = "INSERT INTO users (first_name, last_name, email, password, gender, mobile_number, age, marital_status, username, date_of_birth, mother_tongue, religion, caste, education, nakshatras, birth_time, birth_place, height, weight, physical_appearance, diet, drinking_habits, smoking_habits, photo, Country, City) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssisssssssssssssssssss", $first_name, $last_name, $email, $password, $gender, $mobile_number, $age, $marital_status, $username, $date_of_birth, $mother_tongue, $religion, $caste, $education, $nakshatras, $birth_time, $birth_place, $height, $weight, $physical_appearance, $diet, $drinking_habits, $smoking_habits, $photo, $Country, $City);

// Execute the prepared statement
if ($stmt->execute()) {
    // Move the uploaded file to a permanent location (make sure to validate file type and size)
    move_uploaded_file($_FILES['inputPhoto']['tmp_name'], "uploads/" . $photo);
    // Redirect to a success page or display a success message here
    echo "<script>alert('New record created successfully'); window.location.href = 'addmembers.php';</script>";
} else {
    // Display an error message if the insertion fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
