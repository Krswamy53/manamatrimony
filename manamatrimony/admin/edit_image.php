<?php

include "db.php";

// Handle image editing
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload_photos_submit"])) {
    // Check if any file is selected for upload
    if (empty($_FILES["photos"]["tmp_name"][0])) {
        echo '<script>alert("Please select at least one image."); window.location.href = "editing.php?id=' . $user_id . '";</script>';
        exit; // Stop further execution if no image is selected
    }

    // Retrieve user ID from the form
    $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : null;

    // Check if user ID is provided
    if (!$user_id) {
        die("User ID is missing.");
    }

    // Variable to track successful uploads
    $uploadSuccess = false;

    // Iterate through each uploaded file
    foreach ($_FILES["photos"]["tmp_name"] as $key => $tmp_name) {
        $file_name = $_FILES["photos"]["name"][$key];
        $file_tmp = $_FILES["photos"]["tmp_name"][$key];
        $file_type = $_FILES["photos"]["type"][$key];
        $file_size = $_FILES["photos"]["size"][$key];

        if ($file_name) {
            // File upload directory
            $uploadDir = "uploads/";
            $targetFile = $uploadDir . basename($file_name);

            // Check file size and type
            if ($file_size > 1048576) { // 1 MB
                echo "File size must be less than 1MB.";
                continue;
            }
            $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
            if (!in_array($file_type, $allowed_types)) {
                echo "Invalid file type.";
                continue;
            }

            // Move uploaded file to specified directory
            if (move_uploaded_file($file_tmp, $targetFile)) {
                // Determine the appropriate column name based on the key
                $column_name = "photo" . ($key + 1) . "_url";

                // Update the corresponding column in the database
                $sql = "UPDATE user_profiles SET $column_name = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $targetFile, $user_id);
                $stmt->execute();
                $stmt->close();

                $uploadSuccess = true; // Set upload success flag to true
                echo "Photo {$key} uploaded successfully.<br>";
            } else {
                echo "Failed to upload photo {$key}.<br>";
            }
        }
    }

    // If at least one file was successfully uploaded, display alert and redirect
    if ($uploadSuccess) {
        echo '<script>alert("Photos uploaded successfully."); window.location.href = "editing.php?id=' . $user_id . '";</script>';
        exit; // Stop further execution of PHP script
    }
}

$conn->close();
?>
