<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

if (isset($_POST['approveButton']) && isset($_POST['approvedIds'])) {
    // Step 1: Connect to MySQL database
    include "db.php";

    // Step 2: Update database records for approval
    $ids = $_POST['approvedIds'];
    $placeholders = rtrim(str_repeat('?, ', count($ids)), ', ');
    $sql = "UPDATE UserInformation SET Status = 'Approved' WHERE id IN ($placeholders)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(str_repeat('s', count($ids)), ...$ids);
    if ($stmt->execute()) {
        echo "Records approved successfully";
    } else {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error: " . $conn->error;
    }
    $conn->close();
} else {
    header("HTTP/1.1 400 Bad Request");
}
?>
