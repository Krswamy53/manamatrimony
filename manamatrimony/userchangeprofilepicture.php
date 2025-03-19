<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Get logged-in user ID
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;

            font-family: Arial, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: green;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .right-icons {
            float: right;
            margin-right: 50px;

        }

        /* Adjustments for the icons */
        .right-icons a {
            padding: 14px 16px;
            color: white;
            text-decoration: none;
        }

        .right-icons a:hover {
            background-color: orange;
        }

        .column {
            flex: 1 1 25%;
            padding: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .img {
            max-width: 100%;

            display: block;
            margin: 0 auto;
        }


        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: orange;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: gold;
            ;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .content {
            padding: 10px;
        }

        .left {

            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            width: 285px;
            border-radius: 10px;
            padding: 10px;


        }

        .stl {
            text-align: center;
        }

        .stl h2 {
            color: orangered
        }

        .one {
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            padding-bottom: 20px;
            margin-bottom: 20px;

        }

        hr {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .me {
            padding: 10px;
            background-color: orangered;
            text-align: center;
            color: white;

            border-radius: 5px;
            margin-bottom: 20px;
        }

        .one a {
            text-decoration: none;
            margin-left: 20px;



        }

        .one a:hover {
            color: orangered;
        }


        .mainn {
            display: flex;
            gap: 30px;
        }

        .spot {
            background-color: #F0FFFF;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 900px;
            padding: 20px;

        }

        .right {

            margin-top: 10px;
        }

        .welcome {
            margin-left: 80%;
            padding: 20px;
        }


        form {
            max-width: 400px;
            margin: 0 auto;
        }


        label {
            display: block;
            margin-bottom: 5px;
        }


        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;

        }


        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        button:hover {
            background-color: #45a049;
        }

        /* .h2{
            text-align: center;
        } */
    </style>
    <style>
        .blurred {
            filter: blur(5px);
        }
    </style>
</head>

<body>

    <div>
        <?php

        // include 'pro.php';
        ?>

        <?php

        include 'nav.php';
        ?>

    </div>
    <!-- nav bar end -->
    <!-- content start -->
    <div class="stl">
        <h2>Update Profile Picture</h2>
        <!-- <p>This is you all profiles detail which You aaded you view you all details and also can edit all you
            detailfrom Here </p> -->
    </div>
    <div class="mainn">
        <div class="left">
            <div class="one">
                <div class="me">


                    <?php
                   include 'db.php';

                    // Fetch photo from the database
                    $sql = "SELECT photo1_url FROM user_profiles WHERE id = '$id'"; // Change the condition according to your requirement
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            // Display image
                            // Change the content type according to your image type
                            echo "<img src=$row[photo1_url] alt='photo1_url' height='150px' width='150px'/>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>



                    <!-- <p>profile picture</p> -->

                </div>
                <a href="userchangeprofilepicture.php"> change profile picture</a>
                <!-- <hr>
                <a href="">Out Box</a> -->
            </div>


            <div class="one">
                <div class="me">
                    <p>Message</p>

                </div>
                <a href="message.php"> Inbox</a>
                <hr>
                <a href="fetch_sent_messages.php">Out Box</a>
            </div>






            <div class="one">
                <div class="me">
                    <p>My Profile</p>

                </div>
                <a href="userprofile.php"> Edit Profile</a>
                <hr>
                <a href="userprofile.php">Manage Photos</a>
            </div>



            <div class="one">
                <div class="me">
                    <p>Profile Details</p>

                </div>
                <a href="expressintrest.php"> Express Interest Received</a>
                <hr>
                <a href="shortlist.php">My shortlist Profile</a>
                <hr>
                <a href="shortlist.php">My Blocklist Profile</a>
                <!-- <hr>
                <a href="">My Profile Viewed By</a>
                <hr>
                <a href="">I Visited Profile</a>
                <hr>
                <a href="">Mobile Numbers Viewed By Me</a>
                <hr>
                <a href="">Photos Password Request</a> -->

            </div>


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
    <div class="spot">
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="photo1_url" accept="image/*" required onchange="previewImage(this, 'preview1')">
            <img id="preview1" src="" alt="Preview 1" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo2_url" accept="image/*" required onchange="previewImage(this, 'preview2')">
            <img id="preview2" src="" alt="Preview 2" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo3_url" accept="image/*" required onchange="previewImage(this, 'preview3')">
            <img id="preview3" src="" alt="Preview 3" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo4_url" accept="image/*" required onchange="previewImage(this, 'preview4')">
            <img id="preview4" src="" alt="Preview 4" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo5_url" accept="image/*" required onchange="previewImage(this, 'preview5')">
            <img id="preview5" src="" alt="Preview 5" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo6_url" accept="image/*" required onchange="previewImage(this, 'preview6')">
            <img id="preview6" src="" alt="Preview 6" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo7_url" accept="image/*" required onchange="previewImage(this, 'preview7')">
            <img id="preview7" src="" alt="Preview 7" style="max-width: 100px; display: none;">
            
            <input type="file" name="photo8_url" accept="image/*" required onchange="previewImage(this, 'preview8')">
            <img id="preview8" src="" alt="Preview 8" style="max-width: 100px; display: none;">
            
            <button type="submit" name="upload_profile_pictures">Upload</button>
        </form>
    </div>
</div>

<script>
    function previewImage(input, previewId) {
        let file = input.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById(previewId).src = e.target.result;
                document.getElementById(previewId).style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<?php
$id = $_SESSION["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload_profile_pictures'])) {
    include 'db.php';

    $target_dir = "uploads/";
    $columns = ['photo1_url', 'photo2_url', 'photo3_url', 'photo4_url', 'photo5_url', 'photo6_url', 'photo7_url', 'photo8_url'];
    $uploadedFiles = [];

    foreach ($columns as $index => $column) {
        $fileInputName = $column;
        if (!empty($_FILES[$fileInputName]["name"])) {
            $fileName = basename($_FILES[$fileInputName]["name"]);
            $target_file = $target_dir . time() . "_" . $fileName; // Unique filename
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $uploadOk = 1;

            // Validate image type
            $check = getimagesize($_FILES[$fileInputName]["tmp_name"]);
            if ($check === false) {
                echo "File $fileName is not an image.";
                $uploadOk = 0;
            }

            // Limit file size (500KB)
            if ($_FILES[$fileInputName]["size"] > 500000) {
                echo "Sorry, file $fileName is too large.";
                $uploadOk = 0;
            }

            // Allow specific file formats
            if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed for $fileName.";
                $uploadOk = 0;
            }

            // Upload file
            if ($uploadOk && move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file)) {
                $uploadedFiles[$column] = $target_file;
            } else {
                echo "Sorry, there was an error uploading $fileName.";
            }
        }
    }

    // If at least one file was uploaded, update database
    if (!empty($uploadedFiles)) {
        $updateFields = [];
        foreach ($uploadedFiles as $column => $filePath) {
            $updateFields[] = "$column = '$filePath'";
        }

        $sql = "UPDATE user_profiles SET " . implode(", ", $updateFields) . " WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Profile photos updated successfully.'); window.location.href = 'userprofile.php';</script>";
        } else {
            echo "Error updating profile pictures: " . $conn->error;
        }
    }

    $conn->close();
}
?>

        <!-- right part end -->
    </div>
    </div>






    </div>
    <br>
    <?php

include 'userfooter.php';
?>
</body>

</html>



