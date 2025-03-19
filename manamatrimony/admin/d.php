<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

include "db.php";

// Step 2: Handle form submission for partner preference
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_partner_preference'])) {
    // Sanitize input
    $id = $conn->real_escape_string($_POST["id"]);
    $age_from = $conn->real_escape_string($_POST["age_from"]);
    $age_to = $conn->real_escape_string($_POST["age_to"]);
    $height_from = $conn->real_escape_string($_POST["height_from"]);
    $height_to = $conn->real_escape_string($_POST["height_to"]);
    $looking_for = $conn->real_escape_string($_POST["looking_for"]);
    $par_physical_status = $conn->real_escape_string($_POST["par_physical_status"]);
    $par_eating_habits = $conn->real_escape_string($_POST["par_eating_habits"]);
    $par_smoking_habits = $conn->real_escape_string($_POST["par_smoking_habits"]);
    $par_drinking_habits = $conn->real_escape_string($_POST["par_drinking_habits"]);
    $par_religion = $conn->real_escape_string($_POST["par_religion"]);
    $par_caste = $conn->real_escape_string($_POST["par_caste"]);
    $par_mother_tongue = $conn->real_escape_string($_POST["par_mother_tongue"]);
    $par_doshTypes = $conn->real_escape_string($_POST["par_doshTypes"]);
    $par_stars = $conn->real_escape_string($_POST["par_stars"]);
    $par_country_living_in = $conn->real_escape_string($_POST["par_country_living_in"]);
    $par_state_living_in = $conn->real_escape_string($_POST["par_state_living_in"]);
    $par_city_living_in = $conn->real_escape_string($_POST["par_city_living_in"]);
    $par_education = $conn->real_escape_string($_POST["par_education"]);
    $par_occupation = $conn->real_escape_string($_POST["par_occupation"]);
    $par_annualIncomes = $conn->real_escape_string($_POST["par_annualIncomes"]);

    // Update query
    $sql = "UPDATE user_profiles SET 
            age_from='$age_from', 
            age_to='$age_to', 
            height_from='$height_from', 
            height_to='$height_to', 
            looking_for='$looking_for', 
            par_physical_status='$par_physical_status', 
            par_eating_habits='$par_eating_habits', 
            par_smoking_habits='$par_smoking_habits', 
            par_drinking_habits='$par_drinking_habits', 
            par_religion='$par_religion', 
            par_caste='$par_caste', 
            par_mother_tongue='$par_mother_tongue', 
            par_doshTypes='$par_doshTypes', 
            par_stars='$par_stars',
            par_country_living_in='$par_country_living_in',
            par_state_living_in='$par_state_living_in',
            par_city_living_in='$par_city_living_in',
            par_education='$par_education',
            par_occupation='$par_occupation',
            par_annualIncomes='$par_annualIncomes' 
            WHERE id='$id'";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Partner preference updated successfully");';
        echo 'window.location.href = "editing.php?id=' . $id . '";';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Error updating partner preference: ' . $conn->error . '");';
        echo 'window.location.href = "editing.php?id=' . $id . '";';
        echo '</script>';
    }
}

// Step 3: Close connection
$conn->close();
?>
