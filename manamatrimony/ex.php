<?php
session_start();
$id = $_SESSION["id"];

if (!isset($id)) {
    // Redirect the user to the login page if they are not logged in
    header("Location: loginform.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['searchsubmit'])) {
    include 'db.php';

    $searched_id = $_POST['searchid'];

    // Fetch data from the database for the searched ID
    $sql = "SELECT * FROM user_profiles WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $searched_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Check if the searched profile ID belongs to the logged-in user
            if ($id == $row['id']) {
                // Store the profile details in a database table
                $insertSql = "INSERT INTO stored_profiles (user_id, firstName, lastName, email, dob, mobile, religion, caste, inputCountry, inputState, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $insertStmt = $conn->prepare($insertSql);
                $insertStmt->bind_param("sssssssssss", $row['id'], $row['firstName'], $row['lastName'], $row['email'], $row['dob'], $row['mobile'], $row['religion'], $row['caste'], $row['inputCountry'], $row['inputState'], $row['gender']);
                $insertStmt->execute();
            }
        }
    }
    $stmt->close();
    $conn->close();
}
?>

<!-- Display Stored Profile Details -->
<div class="stored-profiles">
    <?php
    include 'db.php';

    // Fetch stored profile details from the database
    $storedSql = "SELECT * FROM stored_profiles WHERE user_id = ?";
    $storedStmt = $conn->prepare($storedSql);
    $storedStmt->bind_param("s", $id);
    $storedStmt->execute();
    $storedResult = $storedStmt->get_result();

    if ($storedResult->num_rows > 0) {
        while ($storedRow = $storedResult->fetch_assoc()) {
            // Display stored profile details
            echo '<div class="profile">';
            echo "<p><b>First Name:</b>{$storedRow['firstName']}</p>";
            echo "<p><b>Last Name:</b>{$storedRow['lastName']}</p>";
            echo "<p><b>Email:</b>{$storedRow['email']}</p>";
            // Display other profile details...
            echo '</div>';
        }
    } else {
        // Display a message if no stored profiles are found
        echo "No stored profiles found.";
    }
    $storedStmt->close();
    $conn->close();
    ?>
</div>
