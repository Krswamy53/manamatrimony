<?php
// Replace 'your_database_host', 'your_database_name', 'your_username', and 'your_password' with your actual database credentials
include "db.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files are uploaded
    if (isset($_FILES['photos'])) {
        $uploadedPhotos = array();
        $errors = array();

        // Loop through each uploaded file
        foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
            // Process file here...
            $file_name = $_FILES['photos']['name'][$key];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION); // Retrieve file extension

            // Generate a unique file name
            $file_name_new = uniqid() . "." . $file_extension;

            // Move the uploaded file to a folder on your server
            $upload_directory = 'uploads/';
            $target_path = $upload_directory . $file_name_new;

            if (move_uploaded_file($tmp_name, $target_path)) {
                // Store the file name in the database
                $sql = "INSERT INTO photos (file_name) VALUES ('$file_name_new')";
                if ($conn->query($sql) === TRUE) {
                    $uploadedPhotos[] = $file_name_new; // Store the file name for displaying later
                } else {
                    $errors[] = "Error inserting file into database: " . $conn->error;
                }
            } else {
                $errors[] = "Error uploading file: " . $_FILES['photos']['error'][$key];
            }
        }

        // Display errors, if any
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }

        // Display uploaded photos
        if (!empty($uploadedPhotos)) {
            echo "Photos uploaded successfully:<br>";
            foreach ($uploadedPhotos as $photo) {
                echo "<img src='uploads/$photo' width='200'><br>";
            }
        }
    }
    // Display success message
    echo "<script>alert('Photos uploaded successfully!');</script>";
}

// Close the database connection
$conn->close();
?>
