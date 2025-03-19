<?php
session_start();
include "db.php"; // Ensure database connection

if (!isset($_SESSION['id'])) {
    echo "User not logged in.";
    exit();
}

$user_id = $_SESSION['id'];

$smokingHabits = mysqli_real_escape_string($conn, $_POST['smokingHabits']);
$drinkingHabits = mysqli_real_escape_string($conn, $_POST['drinkingHabits']);
$diet = mysqli_real_escape_string($conn, $_POST['diet']);

$sql = "UPDATE user_profiles SET smokingHabits='$smokingHabits', drinkingHabits='$drinkingHabits', diet='$diet' WHERE id='$user_id'";

if (mysqli_query($conn, $sql)) {
    echo "Health information updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
