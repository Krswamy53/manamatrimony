<?php
session_start();
include 'db.php'; // Database connection

if (!isset($_SESSION['id'])) {
    echo "User not logged in!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["planname"])) {
    $user_id = $_SESSION['id'];
    $planname = $_POST["planname"];

    // Update payment status and planname in `user_profiles`
    $sql = "UPDATE user_profiles SET payment = 'pending', planname = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $planname, $user_id);

    if ($stmt->execute()) {
        echo "Payment status updated to Pending for plan: " . htmlspecialchars($planname);
    } else {
        echo "Error updating payment status.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
