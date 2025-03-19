<?php
include "db.php";
$mobileNumber = $_POST['mobile'];

// Perform a database query to check if the mobile number already exists
// Replace 'your_table_name' with your actual table name and 'your_column_name' with the column where mobile numbers are stored
$sql = "SELECT * FROM user_profiles WHERE mobile  = '$mobileNumber'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Mobile number already exists
    echo 'exists';
} else {
    // Mobile number does not exist
    echo 'not_exists';
}

// Close the database connection
mysqli_close($conn);
?>
