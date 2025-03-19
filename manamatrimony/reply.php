<?php
session_start();

if (isset($_SESSION['id']) && isset($_POST['message_id']) && isset($_POST['reply'])) {
    // Connect to your database
    include 'db.php';

    $user_id = $_SESSION['id'];
    $message_id = intval($_POST['message_id']);
    $reply = htmlspecialchars($_POST['reply'], ENT_QUOTES);

    // Fetch the sender_id from the original message
    $sql = "SELECT sender_id FROM messaging WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $message_id);
        $stmt->execute();
        $stmt->bind_result($sender_id);
        $stmt->fetch();
        $stmt->close();

        if ($sender_id) {
            // Insert the reply into the messaging table
            $sql = "INSERT INTO messaging (message, sender_id, receiver_id) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("sii", $reply, $user_id, $sender_id);
                if ($stmt->execute()) {
                    echo "Reply sent successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error in preparing statement: " . $conn->error;
            }
        } else {
            echo "Original message sender not found.";
        }
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
