<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shadhi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    // Fetch user details
    $sql = "SELECT * FROM user_profiles WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user_profile = $result->fetch_assoc();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];

    $sql = "UPDATE user_profiles SET 
            firstName='$firstName', 
            lastName='$lastName', 
            email='$email', 
            dob='$dob', 
            gender='$gender', 
            maritalStatus='$maritalStatus' 
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location='userp.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <style>
        /* Center the form on the page */

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .edit-profile {
            width: 80%;
            max-width: 600px;
            padding: 10px;
            margin-top: 50px;
            /* Adjust top margin as needed */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.8em;
            margin-top: 5px;
        }
    </style>
</head>


<div class="edit-profile">
    <h2>Edit Basic Information</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>First Name:</label>
        <input type="text" name="firstName" value="<?php echo $user_profile['firstName']; ?>"><br><br>
        <label>Last Name:</label>
        <input type="text" name="lastName" value="<?php echo $user_profile['lastName']; ?>"><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $user_profile['email']; ?>"><br><br>
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $user_profile['dob']; ?>"><br><br>
        <label>Gender:</label>
        <select name="gender">
            <option value="male" <?php if ($user_profile['gender'] === 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if ($user_profile['gender'] === 'female') echo 'selected'; ?>>Female</option>
            <option value="other" <?php if ($user_profile['gender'] === 'other') echo 'selected'; ?>>Other</option>
        </select><br><br>
        <label>Marital Status:</label>
        <select name="maritalStatus">
            <option value="single" <?php if ($user_profile['maritalStatus'] === 'single') echo 'selected'; ?>>Single</option>
            <option value="married" <?php if ($user_profile['maritalStatus'] === 'married') echo 'selected'; ?>>Married</option>
            <option value="divorced" <?php if ($user_profile['maritalStatus'] === 'divorced') echo 'selected'; ?>>Divorced</option>
            <option value="widowed" <?php if ($user_profile['maritalStatus'] === 'widowed') echo 'selected'; ?>>Widowed</option>
        </select><br><br>
        <input type="submit" value="Save Changes">
    </form><br><br>
</div>
</body>

</html>