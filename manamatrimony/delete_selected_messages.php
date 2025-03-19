<?php
session_start();

if (isset($_POST['selected_messages']) && isset($_SESSION['id'])) {
    // Database connection details
    include 'db.php';


    $selected_messages = $_POST['selected_messages'];
    $user_id = $_SESSION['id'];

    // Prepare the query to delete messages
    $placeholders = rtrim(str_repeat('?,', count($selected_messages)), ',');
    $sql = "DELETE FROM messaging WHERE id IN ($placeholders) AND sender_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the parameters
        $types = str_repeat('i', count($selected_messages)) . 'i';
        $bind_params = array_merge(array($types), $selected_messages, array($user_id));
        $bind_args = array();
        foreach ($bind_params as $key => &$value) {
            $bind_args[$key] = &$value;
        }
        call_user_func_array(array($stmt, 'bind_param'), $bind_args);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Display JavaScript alert
            echo "<script>
                    alert('Messages deleted successfully.');
                    window.location.href = 'fetch_sent_messages.php';
                  </script>";
        } else {
            echo "No messages were deleted.";
        }

        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No messages selected or user not logged in.";
}
?>