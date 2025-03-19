<?php
session_start();
include"db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender_id = $_SESSION['id']; 
    $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Log the received data for debugging
    file_put_contents('debug.log', "Sender ID: $sender_id, Receiver ID: $receiver_id, Message: $message\n", FILE_APPEND);
    
    $sql = "INSERT INTO messaging (sender_id, receiver_id, message) VALUES ('$sender_id', '$receiver_id', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "Error: " . mysqli_error($conn); // Return the MySQL error for debugging
    }
}

mysqli_close($conn);
?>
