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
    $doshType = $_POST['doshType'];
    $star = $_POST['star'];
    $raasi = $_POST['raasi'];
    $birthTime = $_POST['birthTime'];
    $birthPlace = $_POST['birthPlace'];

    // Update user details
    $sql = "UPDATE user_profiles SET 
            doshType=?, 
            star=?, 
            raasi=?, 
            birthTime=?, 
            birthPlace=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $doshType, $star, $raasi, $birthTime, $birthPlace, $id);
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
        <h2>Edit Astrological Information</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Dosh Type:</label>
            <input type="text" name="doshType" value="<?php echo $user_profile['doshType']; ?>"><br><br>
            <label>Star:</label>
            <input type="text" name="star" value="<?php echo $user_profile['star']; ?>"><br><br>
            <label>Raasi:</label>
            <input type="text" name="raasi" value="<?php echo $user_profile['raasi']; ?>"><br><br>
            <label>Birth Time:</label>
            <input type="text" name="birthTime" value="<?php echo $user_profile['birthTime']; ?>"><br><br>
            <label>Birth Place:</label>
            <input type="text" name="birthPlace" value="<?php echo $user_profile['birthPlace']; ?>"><br><br>
            <input type="submit" value="Save Changes">
        </form>
    </div>

</body>

</html>