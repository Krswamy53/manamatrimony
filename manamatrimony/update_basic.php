<?php
session_start();
include "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure the user is logged in
    if (!isset($_SESSION['id'])) {
        echo "User not logged in.";
        exit;
    }

    $user_id = $_SESSION['id']; // Get the logged-in user's ID

    // Retrieve form data and sanitize input
    $par_physical_status = htmlspecialchars($_POST['par_physical_status']);
    $height_from = htmlspecialchars($_POST['height_from']);
    $par_smoking_habits = htmlspecialchars($_POST['par_smoking_habits']);
    $par_drinking_habits = htmlspecialchars($_POST['par_drinking_habits']);

    // Update query
    $sql = "UPDATE user_profiles SET 
                par_physical_status = ?, 
                height_from = ?, 
                par_smoking_habits = ?, 
                par_drinking_habits = ?
            WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $par_physical_status, $height_from, $par_smoking_habits, $par_drinking_habits, $user_id);

        if ($stmt->execute()) {
            echo "Basic information updated successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
