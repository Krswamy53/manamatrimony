<?php
session_start();
$id = $_SESSION["id"];

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

        .stl {
            text-align: center;
            margin-left: 280px;
            margin-top: 30px;
        }


        button:hover {
            background-color: #45a049;
        }

        .spot {
            background-color: #F0FFFF;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 900px;
            padding: 20px;
            margin-left: -269px;

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
        <div class="welcome">
            <?php
            // Database connection
            $servername = "localhost"; // Change this to your database servername
            $username = "root"; // Change this to your database username
            $password = ""; // Change this to your database password
            $dbname = "shadhi"; // Change this to your database name
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch photo from the database
            $sql = "SELECT profile_picture FROM user_profiles WHERE id = '$id'"; // Change the condition according to your requirement
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Display image
                    // Change the content type according to your image type
                    echo "<img src=$row[profile_picture] alt='profile_picture' height='30px' width='40px'/>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            <?php
            if (isset($_SESSION['firstName'])) {
                if (isset($_SESSION['profile_picture'])) {
                    echo '<img src="' . $_SESSION['profile_picture'] . '" alt="Profile Picture">';
                }
                echo 'Welcome: ' . $_SESSION['firstName'];
            }
            ?>
        </div>

        <?php

        include 'nav.php';
        ?>

    </div>
    <!-- nav bar end -->
    <!-- content start -->
    <div class="stl">
        <h2>Photo Privacy</h2>
        <!-- <p>This is you all profiles detail which You aaded you view you all details and also can edit all you
            detailfrom Here </p> -->
    </div>
    <div class="mainn">
        <div class="left">
            <div class="one">
                <div class="me">


                    <?php
                    // Database connection
                    $servername = "localhost"; // Change this to your database servername
                    $username = "root"; // Change this to your database username
                    $password = ""; // Change this to your database password
                    $dbname = "shadhi"; // Change this to your database name
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch photo from the database
                    $sql = "SELECT profile_picture FROM user_profiles WHERE id = '$id'"; // Change the condition according to your requirement
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            // Display image
                            // Change the content type according to your image type
                            echo "<img src=$row[profile_picture] alt='profile_picture' height='150px' width='150px'/>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>



                    <!-- <p>profile picture</p> -->

                </div>
                <a href="change.php"> change profile picture</a>
                <!-- <hr>
                <a href="">Out Box</a> -->
            </div>


            <div class="one">
                <div class="me">
                    <p>Message</p>

                </div>
                <a href=""> Inbox</a>
                <hr>
                <a href="">Out Box</a>
            </div>






            <div class="one">
                <div class="me">
                    <p>My Profile</p>

                </div>
                <a href=""> Edit Profile</a>
                <hr>
                <a href="">Manage Photos</a>
            </div>



            <div class="one">
                <div class="me">
                    <p>Profile Details</p>

                </div>
                <a href=""> Express Interest Received</a>
                <hr>
                <a href="">My shortlist Profile</a>
                <hr>
                <a href="">My Blocklist Profile</a>
                <hr>
                <a href="">My Profile Viewed By</a>
                <hr>
                <a href="">I Visited Profile</a>
                <hr>
                <a href="">Mobile Numbers Viewed By Me</a>
                <hr>
                <a href="">Photos Password Request</a>

            </div>


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
            <div class="stl">

                <!-- <p>This is you all profiles detail which You aaded you view you all details and also can edit all you
            detailfrom Here </p> -->
                <div class="spot">
                    <form method="POST">
                        <label for="visibility">Profile Picture Visibility:</label>
                        <select name="visibility" id="visibility">
                            <option value="visible">Visible</option>
                            <option value="invisible">Invisible</option>
                        </select>
                        <button type="submit" name="updateVisibility"
                            style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 12px;">Update</button>

                    </form>
                </div>

            </div>

        </div>
        <!-- right part end -->
    </div>
    </div>






    </div>

</body>

</html>

<?php
// Check if form is submitted
if (isset($_POST['updateVisibility'])) {
    // Get selected visibility option
    $visibility = $_POST['visibility'];

    // Database connection
    $servername = "localhost"; // Change this to your database servername
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "shadhi"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update visibility setting in database
    $sql = "UPDATE user_profiles SET privacy_setting = '$visibility' WHERE id = '$id'"; // Assuming 'id' is the column name for user ID
    if ($conn->query($sql) === TRUE) {
        // PHP code to echo JavaScript for alert
        echo "<script>alert('Visibility updated successfully');</script>";
    } else {
        echo "Error updating visibility: " . $conn->error;
    }


    $conn->close();
}
?>