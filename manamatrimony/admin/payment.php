<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $paymentMode = $_POST['paymentMode'];
    $activationDate = $_POST['activationDate'];
    $plan = $_POST['plan'];
    $bankDetail = $_POST['bankDetail'];
    $duration = $_POST['duration'];
    $numContacts = $_POST['numContacts'];
    $numMessages = $_POST['numMessages'];
    $numSMS = $_POST['numSMS'];
    $numViews = $_POST['numViews'];
    $chatAmount = $_POST['chatAmount'];
    $user_id = $_GET['id']; // Assuming you're passing user ID via GET
    
    include "db.php";

    // Step 2: Fetch user profile data
    $profile_sql = "SELECT * FROM user_profiles WHERE id = ?";
    $profile_stmt = $conn->prepare($profile_sql);
    $profile_stmt->bind_param("i", $user_id);
    $profile_stmt->execute();
    $profile_result = $profile_stmt->get_result();

    // Check if user profile exists
    if ($profile_result->num_rows > 0) {
        // Fetch user profile
        $user_profile = $profile_result->fetch_assoc();

        // Retrieve first name and last name
        $firstName = $user_profile['firstName'];
        $lastName = $user_profile['lastName'];
    } else {
        // Handle case where user profile is not found
        echo "User profile not found.";
        exit;
    }

    // Close statement
    $profile_stmt->close();

    // Step 3: Insert payment and user profile details into the database
    $insert_sql = "INSERT INTO user_payments (user_id, firstName, lastName, payment_mode, activation_date, plan, bank_detail, duration, numContacts, numMessages, numSMS, numViews, chatAmount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("issssssssssss", $user_id, $firstName, $lastName, $paymentMode, $activationDate, $plan, $bankDetail, $duration, $numContacts, $numMessages, $numSMS, $numViews, $chatAmount);
    
    if ($insert_stmt->execute()) {
        echo "Payment details inserted successfully.";
    } else {
        echo "Error inserting payment details: " . $conn->error;
    }

    // Close statement and connection
    $insert_stmt->close();
    $conn->close();
} else {
    // If form data is not submitted, redirect back to the form page
    header("Location: form.php?id={$_GET['id']}");
    exit;
}
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process payment form data here

    // Get the ID of the user whose details need to be hidden
    $hidden_user_id = $_GET['id'];

    // Set session variable to indicate form submission
    $_SESSION['hidden_user_id'] = $hidden_user_id;

    // Redirect back to demos.php
    header("Location: demos.php");
    exit;
}

// After processing the form, unset the session variable
unset($_SESSION['hidden_user_id']);


?>
