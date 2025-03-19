<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['id'];
    $recipientId = $_POST['recipient_id'];

    // Insert the match into the matches table
    $query = "INSERT INTO matches (user_id, recipient_id) VALUES ($userId, $recipientId)";
    if ($conn->query($query) === TRUE) {
        echo "Profile added to matches.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
