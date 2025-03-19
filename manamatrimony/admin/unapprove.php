<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

if (isset($_POST['unapproveButton']) && isset($_POST['unapprovedIds'])) {
    // Step 1: Connect to MySQL database
    include "db.php";
    // Step 2: Update database records for unapproval
    $ids = $_POST['unapprovedIds'];
    $placeholders = rtrim(str_repeat('?, ', count($ids)), ', ');
    $sql = "UPDATE UserInformation SET Status = 'Unapproved' WHERE id IN ($placeholders)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(str_repeat('s', count($ids)), ...$ids);
    if ($stmt->execute()) {
        echo "Records unapproved successfully";
    } else {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error: " . $conn->error;
    }
    $conn->close();
} else {
    header("HTTP/1.1 400 Bad Request");
}
?>
