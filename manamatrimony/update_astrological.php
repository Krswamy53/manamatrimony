<?php
session_start();
require_once "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming user_id is stored in session
    $user_id = $_SESSION['id'];

    $zodiacSign = $_POST['doshType'];
    $rashi = $_POST['star'];
    $nakshatra = $_POST['raasi'];
    $mangalStatus = $_POST['birthTime'];
    $birthPlace = $_POST['birthPlace'];

    // Update query
    $query = "UPDATE user_profiles SET 
                doshType = ?, 
                star = ?, 
                raasi = ?, 
                birthTime = ?,
                birthPlace= ?
              WHERE id = ?";
              
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("sssssi", $zodiacSign, $rashi, $nakshatra, $mangalStatus, $birthPlace, $user_id);
        if ($stmt->execute()) {
            echo "Astrological details updated successfully!";
        } else {
            echo "Error updating details: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Error in query preparation: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request!";
}
?>
