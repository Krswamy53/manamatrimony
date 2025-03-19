<?php
include 'db.php'; // Include database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Update payment status to "Paid"
    $query = "UPDATE user_profiles SET payment = 'Paid' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
