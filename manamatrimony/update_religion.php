<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $subcaste = $_POST['subcaste'];
    $willingToMarryOtherCaste = $_POST['willingToMarryOtherCaste'];

    $sql = "UPDATE user_profiles SET 
            religion = ?, 
            caste = ?, 
            subcaste = ?, 
            willingToMarryOtherCaste = ? 
            WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $religion, $caste, $subcaste, $willingToMarryOtherCaste, $id);
    
    if ($stmt->execute()) {
        echo "Religion details updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
