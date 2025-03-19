<?php
session_start();
include 'db.php'; // Ensure this file contains your database connection

if (!isset($_SESSION['id'])) {
    echo "Unauthorized access!";
    exit;
}

$user_id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $familyType = trim($_POST['familyType']);
    $familyValue = trim($_POST['familyValue']);
    $familyStatus = trim($_POST['familyStatus']);
    $fatherOccupation = trim($_POST['fatherOccupation']);
    $motherOccupation = trim($_POST['motherOccupation']);
    $numBrothers = trim($_POST['numBrothers']);
    $numMarriedBrothers = trim($_POST['numMarriedBrothers']);
    $numSisters = trim($_POST['numSisters']);
    $numMarriedSisters = trim($_POST['numMarriedSisters']);

    $sql = "UPDATE user_profiles SET 
                familyType = ?, 
                familyValue = ?, 
                familyStatus = ?, 
                fatherOccupation = ?, 
                motherOccupation = ?, 
                numBrothers = ?, 
                numMarriedBrothers = ?, 
                numSisters = ?, 
                numMarriedSisters = ? 
            WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssiissi", $familyType, $familyValue, $familyStatus, $fatherOccupation, $motherOccupation, $numBrothers, $numMarriedBrothers, $numSisters, $numMarriedSisters, $user_id);
        if ($stmt->execute()) {
            echo "Family information updated successfully!";
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