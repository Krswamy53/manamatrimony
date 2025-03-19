<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

include "db.php";

// Step 2: Retrieve user details based on ID
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Fetch user details from the database
    $sql = "SELECT * FROM user_profiles WHERE id = $user_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

// Step 3: Handle form submission
if(isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    
    // Update user details in the database
    $update_sql = "UPDATE user_profiles SET firstName='$first_name', lastName='$last_name', email='$email', gender='$gender', mobile='$mobile', dob='$dob' WHERE id=$user_id";
    if ($conn->query($update_sql) !== TRUE) {
        echo "Error updating user details: " . $conn->error;
    } else {
        // Redirect to the user profile page after updating
        header("Location: allprofiles.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>
    <!-- Your HTML content here -->
    <div class="container">
        <h2>Edit User Profile</h2>
        <form method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $row['firstName']; ?>"><br><br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $row['lastName']; ?>"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male" <?php if($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
            </select><br><br>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <!-- Your JavaScript content here -->
</body>
</html>
