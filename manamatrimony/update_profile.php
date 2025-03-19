<?php
include 'db.php';
session_start();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $email = trim($_POST['email']);
        $gender = trim($_POST['gender']);
        $mobile = trim($_POST['mobile']);
        $dob = trim($_POST['dob']);
        $mother = trim($_POST['mother']);
        $maritalStatus = trim($_POST['maritalStatus']);

        $stmt = $conn->prepare("UPDATE user_profiles SET firstName=?, lastName=?, email=?, gender=?, mobile=?, dob=?, mother=?, maritalStatus=? WHERE id=?");
        $stmt->bind_param("ssssssssi", $firstName, $lastName, $email, $gender, $mobile, $dob, $mother, $maritalStatus, $id);

        if ($stmt->execute()) {
            echo "Profile updated successfully!";
        } else {
            echo "Error updating profile: " . $conn->error;
        }

        $stmt->close();
    }
}
$conn->close();
?>
