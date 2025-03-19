<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

if (!isset($_GET['id'])) {
    // Handle case where user ID is not provided
    echo "User ID not provided.";
    exit;
}

$user_id = $_GET['id'];

include "db.php";
// Step 2: Fetch user profile data
$sql = "SELECT * FROM user_profiles WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if user profile exists
if ($result->num_rows > 0) {
    // Fetch user profile
    $user_profile = $result->fetch_assoc();
} else {
    // Handle case where user profile is not found
    echo "User profile not found.";
    exit;
}

$stmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve submitted data
    $paymentMode = $_POST['paymentMode'];
    $activationDate = $_POST['activationDate'];
    $plan = $_POST['plan'];
    $bankDetail = $_POST['bankDetail'];

    // Display submitted data and user profile information
    echo "<h2>Payment Details for: " . $user_profile['firstName'] . " " . $user_profile['lastName'] . "</h2>";
    echo "<p>Payment Mode: $paymentMode</p>";
    echo "<p>Activation Date: $activationDate</p>";
    echo "<p>Plan: $plan</p>";
    echo "<p>Bank Detail: $bankDetail</p>";

    // Display user profile information
    echo "<h3>User Profile Information</h3>";
    echo "<p>Country: " . $user_profile['inputCountry'] . "</p>";
    echo "<p>State: " . $user_profile['inputState'] . "</p>";
    // Add more fields as needed

    // Close database connection
    $conn->close();

    // You can also include a link to go back to the previous page
}
?>
