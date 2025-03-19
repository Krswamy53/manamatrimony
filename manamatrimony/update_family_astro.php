<?php
session_start();
require_once "db.php"; // Include your database connection file

if (!isset($_SESSION['id'])) {
    echo "Unauthorized access!";
    exit;
}

$user_id = $_SESSION['id']; // Get the logged-in user's ID

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $par_religion = isset($_POST['par_religion']) ? trim($_POST['par_religion']) : "";
    $par_caste = isset($_POST['par_caste']) ? trim($_POST['par_caste']) : "";
    $par_mother_tongue = isset($_POST['par_mother_tongue']) ? trim($_POST['par_mother_tongue']) : "";
    $par_doshTypes = isset($_POST['par_doshTypes']) ? trim($_POST['par_doshTypes']) : "";
    $par_stars = isset($_POST['par_stars']) ? trim($_POST['par_stars']) : "";

    // Validate input (Optional: Add more validation if needed)
    if (empty($par_religion) || empty($par_caste) || empty($par_mother_tongue) || empty($par_doshTypes) || empty($par_stars)) {
        echo "All fields are required!";
        exit;
    }

    // Prepare SQL statement
    $sql = "UPDATE user_profiles SET 
            par_religion = ?, 
            par_caste = ?, 
            par_mother_tongue = ?, 
            par_doshTypes = ?, 
            par_stars = ? 
            WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssi", $par_religion, $par_caste, $par_mother_tongue, $par_doshTypes, $par_stars, $user_id);
        
        if ($stmt->execute()) {
            echo "Family & Astrological Information updated successfully!";
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
