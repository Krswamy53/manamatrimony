<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bride_id = $_POST['brideID'];  // Corrected form field name
    $bride_name = $_POST['brideName'];
    $groom_id = $_POST['groomId'];
    $groom_name = $_POST['groomName'];
    $engagement_date = $_POST['engagementYear'] . '-' . $_POST['engagementMonth'] . '-' . $_POST['engagementDay'];
    $marriage_date = $_POST['marriageYear'] . '-' . $_POST['marriageMonth'] . '-' . $_POST['marriageDay'];
    
    $success_story = isset($_POST['successStory']) ? $_POST['successStory'] : NULL;


    // Handling file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploadPhoto"]["name"]);
    if (move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], $target_file)) {
        $photo_path = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
    var_dump($_POST); // Check values from the form
    // Use prepared statements to prevent SQL injection
    // Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO success_stories (brideID, brideName, groomId, groomName, engagementDate, marriageDate, photoPath, success_story) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssss", $bride_id, $bride_name, $groom_id, $groom_name, $engagement_date, $marriage_date, $photo_path, $success_story);

if ($stmt->execute()) {
    echo "<script>
    alert('New record created successfully');
    window.location.href='su.php';
  </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

}
?>
