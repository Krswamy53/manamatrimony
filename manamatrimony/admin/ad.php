<?php
include "db.php";
// Process form submission if data is sent via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $adName = $_POST["adName"];
    $adDate = $_POST["adDate"];
    $adLevel = $_POST["adLevel"];
    $adLink = $_POST["adLink"];
    $adImage = $_POST["adImage"];
    $contactNumber = $_POST["contactNumber"];
    $contactPerson = $_POST["contactPerson"];
    $adStatus = $_POST["adStatus"];

    // Convert adDate to YYYY-MM-DD format if necessary
    $adDate = date("Y-m-d", strtotime($adDate));

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO advertisements (adName, adDate, adLevel, adLink, adImage, contactNumber, contactPerson, adStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $adName, $adDate, $adLevel, $adLink, $adImage, $contactNumber, $contactPerson, $adStatus);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Success alert and redirect
        echo "<script>
                alert('New record inserted successfully');
                window.location.href = 'advertisement.php';
              </script>";
    } else {
        // Error alert
        echo "<script>
                alert('Error: " . $stmt->error . "');
              </script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
