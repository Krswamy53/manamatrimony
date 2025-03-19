<?php
// Establish database connection
include "db.php";
// Collect form data
$gender = isset($_POST['selectGender']) ? $_POST['selectGender'] : '';
$keyword = isset($_POST['inputKeyword']) ? $_POST['inputKeyword'] : '';
$country = isset($_POST['Country']) ? $_POST['Country'] : '';
$state = isset($_POST['State']) ? $_POST['State'] : '';
$city = isset($_POST['inputCity']) ? $_POST['inputCity'] : '';
$religion = isset($_POST['inputReligion']) ? $_POST['inputReligion'] : '';
$caste = isset($_POST['inputCaste']) ? $_POST['inputCaste'] : '';

// Construct MySQL query based on form data
$sql = "SELECT * FROM users WHERE 1=1";
if ($gender != 'Select Gender') {
    $sql .= " AND gender = '$gender'";
}
if (!empty($keyword)) {
    $sql .= " AND (username = '$keyword' OR email = '$keyword')";
}
if (!empty($country)) {
    $sql .= " AND country = '$country'";
}
if (!empty($state)) {
    $sql .= " AND state = '$state'";
}
if (!empty($city)) {
    $sql .= " AND city = '$city'";
}
if (!empty($religion)) {
    $sql .= " AND religion = '$religion'";
}
if (!empty($caste)) {
    $sql .= " AND caste = '$caste'";
}

// Execute the query
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Profiles</title>
    <style>
      .profile-box {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px; /* Adjusted padding */
            margin-bottom: 20px;
            display: flex;
            width: 900px; /* Adjusted width */
            margin-left: 350px;
        }

        .profile-box img {
            width: 150px; /* Adjusted image size */
            height: 180px; /* Adjusted image size */
            margin-right: 20px;
            flex-shrink: 0;
            margin-top: 20px;
        }

        .details {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-left: 0; /* Removed padding */
            margin-left: 100px; /* Added left margin */

        }

        .details-column {
            flex-basis: 46%;
            margin-bottom: 10px;
            margin-left: 22px;
        }

        .details-column p {
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <h2>Filtered Profiles</h2>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='profile-box'>";
            echo "<img src='{$row['photo']}' alt='Profile Photo'>";
            echo "<div class='details'>";
            echo "<div class='details-column'>";
            echo "<p><strong>Name:</strong> {$row['first_name']} {$row['last_name']}</p>";
            echo "<p><strong>Email:</strong> {$row['email']}</p>";
            echo "<p><strong>Gender:</strong> {$row['gender']}</p>";
            echo "<p><strong>mobile_number:</strong> {$row['mobile_number']}</p>";
            echo "<p><strong>Age:</strong> {$row['age']}</p>";
            echo "<p><strong>Education:</strong> {$row['education']}</p>";
            echo "</div>";
            echo "<div class='details-column'>";
            echo "<p><strong>Country:</strong> {$row['Country']}</p>";
            echo "<p><strong>City:</strong> {$row['City']}</p>";
            echo "<p><strong>Religion:</strong> {$row['religion']}</p>";
            echo "<p><strong>Caste:</strong> {$row['caste']}</p>";
            echo "<p><strong>Marital Status:</strong> {$row['marital_status']}</p>";
            echo "<p><strong>Date of Birth:</strong> {$row['date_of_birth']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No results found</p>";
    }
    ?>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
