<?php
session_start();
if (isset($_SESSION['id']) && isset($_POST['recipient_id'])) {
    // Database connection
    include 'db.php';

    $userId = $_SESSION['id'];
    $recipientId = $_POST['recipient_id'];

    // Update the shortlist table to set recipient_id to zero
    $query = "UPDATE shortlist SET recipient_id = 0 WHERE user_id = ? AND recipient_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $userId, $recipientId);

    if ($stmt->execute()) {
        echo "Remove from shortlisted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
