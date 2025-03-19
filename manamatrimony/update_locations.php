<?php
session_start();
require_once "db.php"; // Include your database connection file

if (!isset($_SESSION['id'])) {
    echo "Unauthorized access!";
    exit;
}

$user_id = $_SESSION['user_id']; // Get the logged-in user's ID

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $par_country_living_in = isset($_POST['par_country_living_in']) ? trim($_POST['par_country_living_in']) : "";
    $par_state_living_in = isset($_POST['par_state_living_in']) ? trim($_POST['par_state_living_in']) : "";
    $par_city_living_in = isset($_POST['par_city_living_in']) ? trim($_POST['par_city_living_in']) : "";

    // Validate input (Optional: Add more validation if needed)
    if (empty($par_country_living_in) || empty($par_state_living_in) || empty($par_city_living_in)) {
        echo "All fields are required!";
        exit;
    }

    // Prepare SQL statement
    $sql = "UPDATE user_profiles SET 
            par_country_living_in = ?, 
            par_state_living_in = ?, 
            par_city_living_in = ? 
            WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssi", $par_country_living_in, $par_state_living_in, $par_city_living_in, $user_id);
        
        if ($stmt->execute()) {
            echo "Location Information updated successfully!";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Database error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request!";
}
?>
