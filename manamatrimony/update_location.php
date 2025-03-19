<?php
session_start();
include "db.php"; // Ensure this file properly connects to your database

if (!isset($_SESSION['id'])) {
    echo "User not logged in.";
    exit();
}

$id = $_SESSION['id'];

$inputCountry = mysqli_real_escape_string($conn, $_POST['inputCountry']);
$inputState = mysqli_real_escape_string($conn, $_POST['inputState']);
$inputCity = mysqli_real_escape_string($conn, $_POST['inputCity']);

$sql = "UPDATE user_profileS SET inputCountry='$inputCountry', inputState='$inputState', inputCity='$inputCity' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Location information updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
