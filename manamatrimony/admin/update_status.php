<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ids = explode(',', $_POST['ids']);
    $status = $_POST['status'];

    if (!empty($ids) && !empty($status)) {
        $idList = implode(',', array_map('intval', $ids));
        $sql = "UPDATE user_profiles SET status='$status' WHERE id IN ($idList)";

        if ($conn->query($sql) === TRUE) {
            // Close the database connection
            $conn->close();
            // Display success message
            echo "<script>alert('Records updated successfully');</script>";
            // Redirect to demos.php
            echo "<script>window.location.href = 'demos.php';</script>";
            exit; // Exit to prevent further execution of the script
        } else {
            // Display error message
            echo "Error updating records: " . $conn->error;
        }
    }
} else {
    // Redirect to demos.php if accessed directly without POST request
    header("Location: demos.php");
    exit;
}
?>
