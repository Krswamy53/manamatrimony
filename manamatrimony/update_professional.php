<?php
session_start();
require_once 'db.php'; // Include database connection file

if (!isset($_SESSION['id'])) {
    echo "User not logged in!";
    exit;
}

$id = $_SESSION['id']; // Get logged-in user ID

// Get updated values from the form
$par_education = isset($_POST['par_education']) ? trim($_POST['par_education']) : '';
$par_occupation = isset($_POST['par_occupation']) ? trim($_POST['par_occupation']) : '';
$par_annualIncomes = isset($_POST['par_annualIncomes']) ? trim($_POST['par_annualIncomes']) : '';
$employedIn = isset($_POST['employedIn']) ? trim($_POST['employedIn']) : '';

// Validate inputs
if (empty($par_education) || empty($par_occupation) || empty($par_annualIncomes) || empty($employedIn)) {
    echo "All fields are required!";
    exit;
}

// Update query
$sql = "UPDATE user_profiles SET 
    par_education = ?, 
    par_occupation = ?, 
    par_annualIncomes = ?, 
    employedIn = ? 
    WHERE id = ?";

$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssssi", $par_education, $par_occupation, $par_annualIncomes, $employedIn, $id);
    if ($stmt->execute()) {
        echo "Professional information updated successfully!";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>