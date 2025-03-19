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
    $sql = "SELECT * FROM user_profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_profile = $result->fetch_assoc();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $maritalStatus = $_POST['maritalStatus'];
    $smokingHabits = $_POST['smokingHabits'];
    $drinkingHabits = $_POST['drinkingHabits'];
    $physicalStatus = $_POST['physicalStatus'];
    $diet = $_POST['diet'];

    // Update user details
    $sql = "UPDATE user_profiles SET 
            maritalStatus=?, 
            smokingHabits=?, 
            drinkingHabits=?, 
            physicalStatus=?, 
            diet=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $maritalStatus, $smokingHabits, $drinkingHabits, $physicalStatus, $diet, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully'); window.location='userp.php';</script>";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <!-- Your CSS styles -->
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

<body>
    <div class="edit-profile">
        <h2>Edit Basic Information</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Marital Status:</label>
            <input type="text" name="maritalStatus" value="<?php echo $user_profile['maritalStatus']; ?>"><br><br>
            <label>Smoking Habits:</label>
            <input type="text" name="smokingHabits" value="<?php echo $user_profile['smokingHabits']; ?>"><br><br>
            <label>Drinking Habits:</label>
            <input type="text" name="drinkingHabits" value="<?php echo $user_profile['drinkingHabits']; ?>"><br><br>
            <label>Physical Status:</label>
            <input type="text" name="physicalStatus" value="<?php echo $user_profile['physicalStatus']; ?>"><br><br>
            <label>Diet:</label>
            <input type="text" name="diet" value="<?php echo $user_profile['diet']; ?>"><br><br>
            <input type="submit" value="Save Changes">
        </form>
    </div>

</body>

</html>