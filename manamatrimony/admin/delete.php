<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteIds'])) {
    // Step 1: Connect to MySQL database
    include "db.php";

    // Step 2: Delete rows from the database
    $ids = $_POST['deleteIds'];
    $placeholders = rtrim(str_repeat('?, ', count($ids)), ', ');
    $sql = "DELETE FROM UserInformation WHERE id IN ($placeholders)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(str_repeat('s', count($ids)), ...$ids);
    if ($stmt->execute()) {
        echo "Rows deleted successfully";
    } else {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error: " . $conn->error;
    }
    $conn->close();
} else {
    header("HTTP/1.1 400 Bad Request");
}
?>
