<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish database connection
include 'db.php';

// Get POST data
$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];
$message = $_POST['message'];
$status = 'unread'; // Default status

// Validate inputs
if (!isset($sender_id) || !isset($receiver_id) || !isset($message)) {
    echo "Invalid input.";
    exit();
}

// Insert notification into the database
$sql = "INSERT INTO notifications (sender_id, receiver_id, message, timestamp, status) VALUES (?, ?, ?, NOW(), ?)";

$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("iiss", $sender_id, $receiver_id, $message, $status);
    if ($stmt->execute()) {
        echo "Notification sent successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
