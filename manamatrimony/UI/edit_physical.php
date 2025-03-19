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
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bodyType = $_POST['bodyType'];
    $complexion = $_POST['complexion'];
    $physicalStatus = $_POST['physicalStatus'];

    // Update user details
    $sql = "UPDATE user_profiles SET 
            height=?, 
            weight=?, 
            bodyType=?, 
            complexion=?, 
            physicalStatus=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $height, $weight, $bodyType, $complexion, $physicalStatus, $id);
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
        <h2>Edit Physical Information</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Height:</label>
            <input type="text" name="height" value="<?php echo $user_profile['height']; ?>"><br><br>
            <label>Weight:</label>
            <input type="text" name="weight" value="<?php echo $user_profile['weight']; ?>"><br><br>
            <label>Body Type:</label>
            <input type="text" name="bodyType" value="<?php echo $user_profile['bodyType']; ?>"><br><br>
            <label>Complexion:</label>
            <input type="text" name="complexion" value="<?php echo $user_profile['complexion']; ?>"><br><br>
            <label>Physical Status:</label>
            <input type="text" name="physicalStatus" value="<?php echo $user_profile['physicalStatus']; ?>"><br><br>
            <input type="submit" value="Save Changes">
        </form>
    </div>
</body>

</html>