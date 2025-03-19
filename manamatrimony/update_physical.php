<?php
session_start();
include "db.php"; // Ensure database connection

if (!isset($_SESSION['id'])) {
    echo "User not logged in.";
    exit();
}

$user_id = $_SESSION['id'];

$height = mysqli_real_escape_string($conn, $_POST['height']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);
$bodyType = mysqli_real_escape_string($conn, $_POST['bodyType']);
$complexion = mysqli_real_escape_string($conn, $_POST['complexion']);
$physicalStatus = mysqli_real_escape_string($conn, $_POST['physicalStatus']);

$sql = "UPDATE user_profiles SET height='$height', weight='$weight', bodyType='$bodyType', complexion='$complexion', physicalStatus='$physicalStatus' WHERE id='$user_id'";

if (mysqli_query($conn, $sql)) {
    echo "Physical information updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
