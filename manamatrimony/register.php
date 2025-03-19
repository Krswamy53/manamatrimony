<?php
// Database connection
$servername = "localhost";
$username = "root";  // Change if necessary
$password = "";  // Change if necessary
$database = "shadhi"; // Change to your actual database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize inputs
    $firstName = trim(mysqli_real_escape_string($conn, $_POST['firstName']));
    $lastName = trim(mysqli_real_escape_string($conn, $_POST['lastName']));
    $dob = trim($_POST['dob']);
    $religion = isset($_POST['religion']) ? trim($_POST['religion']) : NULL;
    $mother = isset($_POST['mother']) ? trim($_POST['mother']) : NULL;
    $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $terms = isset($_POST['terms']) ? 1 : 0;

    // Check if mobile number or email already exists
    $checkQuery = "SELECT * FROM user_profiles WHERE mobile = '$mobile' OR email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // If duplicate entry found, show an alert message
        echo "<script>alert('Error: Mobile number or Email already exists!'); window.location.href='registerform.php';</script>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO user_profiles (firstName, lastName, dob, religion, mother, mobile, email, password, terms_accepted) 
                VALUES ('$firstName', '$lastName', '$dob', '$religion', '$mother', '$mobile', '$email', '$password', '$terms')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful!'); window.location.href='loginform.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "'); window.location.href='registerform.php';</script>";
        }
    }
}

$conn->close();
?>
