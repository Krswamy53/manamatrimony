<?php
session_start();
if(!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Connect to MySQL database
    include "db.php";

    // Retrieve advertisement details based on ID
    $advertisement_id = $_POST['advertisement_id'];
    $adName = $_POST['adName'];
    $adDate = $_POST['adDate'];
    $adLevel = $_POST['adLevel'];
    $adLink = $_POST['adLink'];
    $contactNumber = $_POST['contactNumber'];
    $contactPerson = $_POST['contactPerson'];
    $adStatus = $_POST['adStatus'];

    // Check if a new image is uploaded
    if ($_FILES['adImage']['size'] > 0) {
        // Handle image upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["adImage"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $newImageName = uniqid() . '.' . $imageFileType;
        $target_path = $target_dir . $newImageName;

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["adImage"]["tmp_name"]);
        if($check !== false) {
            // Check file size
            if ($_FILES["adImage"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                exit;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                exit;
            }
            // if everything is ok, try to upload file
            if (move_uploaded_file($_FILES["adImage"]["tmp_name"], $target_path)) {
                // Update advertisement details including the new image
                $sql = "UPDATE advertisements SET adName='$adName', adDate='$adDate', adLevel='$adLevel', adLink='$adLink', adImage='$newImageName', contactNumber='$contactNumber', contactPerson='$contactPerson', adStatus='$adStatus' WHERE id=$advertisement_id";
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            echo "File is not an image.";
            exit;
        }
    } else {
        // Update advertisement details excluding the image
        $sql = "UPDATE advertisements SET adName='$adName', adDate='$adDate', adLevel='$adLevel', adLink='$adLink', contactNumber='$contactNumber', contactPerson='$contactPerson', adStatus='$adStatus' WHERE id=$advertisement_id";
    }

    if ($conn->query($sql) === TRUE) {
        // Redirect to the page where you display all advertisements
        header("Location: advertise.php");
        exit;
    } else {
        echo "Error updating advertisement: " . $conn->error;
    }

    $conn->close();
}

// If ID is not provided, redirect to the page where you display all advertisements
if (!isset($_GET['id'])) {
    header("Location: advertise.php");
    exit;
}

// Connect to the database and fetch advertisement details based on ID
$advertisement_id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "shadhi";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch advertisement details
$sql = "SELECT * FROM advertisements WHERE id=$advertisement_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $adName = $row['adName'];
    $adDate = $row['adDate'];
    $adLevel = $row['adLevel'];
    $adLink = $row['adLink'];
    $adImage = $row['adImage'];
    $contactNumber = $row['contactNumber'];
    $contactPerson = $row['contactPerson'];
    $adStatus = $row['adStatus'];
} else {
    echo "Advertisement not found";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Advertisement</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="shortcut icon" href="favicon.png">
<style>
    table {
        margin-top: 20px;
    }
    table th, table td {
        padding: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Edit Advertisement</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="advertisement_id" value="<?php echo $advertisement_id; ?>">
        <table class="table">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Advertisement Name:</td>
                <td><input type="text" name="adName" value="<?php echo $adName; ?>"></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="date" name="adDate" value="<?php echo $adDate; ?>"></td>
            </tr>
            <tr>
                <td>Level:</td>
                <td><input type="text" name="adLevel" value="<?php echo $adLevel; ?>"></td>
            </tr>
            <tr>
                <td>Link:</td>
                <td><input type="text" name="adLink" value="<?php echo $adLink; ?>"></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td>
                    <input type="file" name="adImage">
                    <?php if (!empty($adImage)) { ?>
                        <br><img src="uploads/<?php echo $adImage; ?>" width="150">
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><input type="text" name="contactNumber" value="<?php echo $contactNumber; ?>"></td>
            </tr>
            <tr>
                <td>Contact Person:</td>
                <td><input type="text" name="contactPerson" value="<?php echo $contactPerson; ?>"></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <select name="adStatus">
                        <option value="Approved" <?php if($adStatus == 'Approved') echo 'selected'; ?>>Approved</option>
                        <option value="Unapproved" <?php if($adStatus == 'Unapproved') echo 'selected'; ?>>Unapproved</option>
                        <option value="Pending" <?php if($adStatus == 'Pending') echo 'selected'; ?>>Pending</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Update Advertisement</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
