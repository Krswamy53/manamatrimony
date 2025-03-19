<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if user has permission to access this script (optional)
// Add your permission checks here if needed

include "db.php";

// Step 2: Handle the AJAX request
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["userIds"])) {
    // Decode the JSON string containing the selected user IDs
    $selectedUserIds = json_decode($_POST["userIds"]);

    // Prepare and execute SQL query to remove "Featured" status from selected users
    $sql = "UPDATE user_profiles SET feature = 0 WHERE id IN (" . implode(",", $selectedUserIds) . ")";
    if ($conn->query($sql) === TRUE) {
        // Return success response
        http_response_code(200);
        echo "Selected users removed from Featured successfully!";
    } else {
        // Return error response
        http_response_code(500);
        echo "Error: Unable to remove users from Featured.";
    }
} else {
    // Return error response if the request method is not POST or user IDs are not provided
    http_response_code(400);
    echo "Error: Invalid request.";
}

// Close database connection
$conn->close();
?>
