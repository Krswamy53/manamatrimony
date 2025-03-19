<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Connect to MySQL database
    include "db.php";
    // Step 2: Receive the user IDs from the AJAX request
    $userIds = json_decode($_POST['userIds']);

    // Step 3: Update the 'feature' column in the database for the selected users
    // Prepare the SQL statement
    $update_featured_sql = "UPDATE user_profiles SET feature = 1 WHERE id IN (" . implode(",", $userIds) . ")";

    // Execute the SQL statement
    if ($conn->query($update_featured_sql) !== TRUE) {
        echo "Error marking users as Featured: " . $conn->error;
    } else {
        echo "Users marked as Featured successfully!";
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request method is not POST, redirect to an error page or handle it accordingly
    header("HTTP/1.0 405 Method Not Allowed");
    exit;
}
?>
