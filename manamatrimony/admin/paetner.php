<?php


session_start();

// Check if user is logged in
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

include "db.php";

// Step 2: Retrieve user details based on ID
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Fetch user details from the database
    $sql = "SELECT * FROM user_profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['partnerPreferenceForm'])) {
    // Retrieve form data
    $id = $_POST["id"];
    $age_from = $_POST["age_from"];
    $age_to = $_POST["age_to"];
    $height_from = $_POST["height_from"];
    $height_to = $_POST["height_to"];

    // Update query for partner preference
    $sql = "UPDATE user_profiles SET 
            age_from=?, 
            age_to=?, 
            height_from=?, 
            height_to=?
            WHERE id=?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $age_from, $age_to, $height_from, $height_to, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Partner preference updated successfully";
    } else {
        // Log the error or display a user-friendly message
        echo "An error occurred while updating partner preference. Please try again later.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

