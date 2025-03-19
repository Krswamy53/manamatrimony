<?php
// Fetch user details from the database based on the user ID passed via GET parameter
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    include "db.php";

    // Step 2: Fetch user details from the database
    $sql = "SELECT * FROM user_profiles WHERE id = $user_id";
    $result = $conn->query($sql);

    // Check if user details are found
    if ($result->num_rows > 0) {
        $user_profile = $result->fetch_assoc();
    } else {
        echo "User details not found.";
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View More</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .row {
            margin-bottom: 20px;
        }
        .col {
            border: 1px solid #ddd;
            padding: 10px;
        }
        .col img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- First Column -->
            <div class="col-md-4">
    <img src="<?php echo $user_profile['file_name']; ?>" alt="User Image"  class="rounded-circle" alt="User Profile Picture" style="max-width: 250px;">
</div>

            <!-- Second Column -->
            <div class="col-md-4">
                <p><strong>Name:</strong> <?php echo $user_profile['firstName'] . ' ' . $user_profile['lastName']; ?></p>
                <p><strong>Date of Birth:</strong> <?php echo $user_profile['dob']; ?></p>
                <p><strong>Gender:</strong> <?php echo $user_profile['gender']; ?></p>
                <p><strong>Email:</strong> <?php echo $user_profile['email']; ?></p>
                <p><strong>Mobile:</strong> <?php echo $user_profile['mobile']; ?></p>
                <p><strong>Raasi:</strong> <?php echo $user_profile['raasi']; ?></p>
            </div>
            <!-- Third Column -->
            <div class="col-md-4">
                <p><strong>Marital Status:</strong> <?php echo $user_profile['maritalStatus']; ?></p>
                <p><strong>Religion:</strong> <?php echo $user_profile['religion']; ?></p>
                <p><strong>Caste:</strong> <?php echo $user_profile['caste']; ?></p>
                <p><strong>Subcaste:</strong> <?php echo $user_profile['subcaste']; ?></p>
                <p><strong>Height:</strong> <?php echo $user_profile['height']; ?></p>
                <p><strong>Weight:</strong> <?php echo $user_profile['weight']; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
