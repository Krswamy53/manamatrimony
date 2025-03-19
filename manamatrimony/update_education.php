<?php
session_start();
include("db.php"); // Ensure this file contains your database connection

// Check if the user is logged in (Assuming user ID is stored in session)
if (!isset($_SESSION['id'])) {
    echo "Unauthorized access!";
    exit();
}

$user_id = $_SESSION['id']; // Correct variable name

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $highestEducation = mysqli_real_escape_string($conn, $_POST['highestEducation']);
    $additionalDegree = mysqli_real_escape_string($conn, $_POST['additionalDegree']);
    $employedIn = mysqli_real_escape_string($conn, $_POST['employedIn']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $annualIncome = mysqli_real_escape_string($conn, $_POST['annualIncome']);

    // Update query (Corrected `$id` to `$user_id`)
    $sql = "UPDATE user_profiles SET 
            highestEducation = '$highestEducation',
            additionalDegree = '$additionalDegree',
            employedIn = '$employedIn',
            occupation = '$occupation',
            annualIncome = '$annualIncome'
            WHERE id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Education Information updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request!";
}
?>
