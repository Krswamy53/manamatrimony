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
    <title>Contact Privacy</title>
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

        .hover-button:hover {
            background-color: green;
            /* Change background color to green on hover */
        }

        button[type="submit"]:hover {
            background-color: green !important;
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

        /* Media Queries for responsiveness */
        @media screen and (max-width: 1200px) {
            .spot {
                width: calc(100% - 40px);
                margin: 10px auto;
            }

            .grid-itemm {
                width: 100%;
            }

            .navbar a,
            .dropdown .dropbtn,
            .right-icons {
                float: none;
                display: block;
                text-align: left;
            }

            .right-icons {
                margin-right: 0;
            }

            .dropdown-content {
                position: relative;
            }

            .welcome {
                margin-left: 0;
                text-align: center;
            }

            .mainn {
                flex-direction: column;
                gap: 0;
            }

            .left,
            .spot {
                width: calc(100% - 40px);
                margin: 10px auto;
            }

            select {
                width: calc(100% - 40px);
                margin: 20px auto;
            }

            .letsbtn {
                width: calc(100% - 40px);
                margin: 20px auto;
            }
        }

        @media screen and (min-width: 480px) and (max-width: 968px) {

            .navbar a,
            .right-icons a,
            .dropdown .dropbtn {
                float: none;
                display: block;
                text-align: left;
            }

            .right-icons {
                margin-right: 0;
            }

            .dropdown-content {
                position: relative;
            }

            .mainn {
                gap: 10px;
                flex-direction: row;
            }

            .left,
            .spot {
                width: calc(100% - 20px);
                margin: 10px auto;
                text-align: center;
            }

            .welcome {
                padding: 5px;
            }

            select,
            .letsbtn {
                width: 300px;
                margin: 20px
            }

            .quick {
                flex-direction: column;
            }

            .stl {
                margin-left: 0;
            }

            .grid-main {
                flex-direction: column;
            }

            .grid-itemm {
                width: 320px;
                margin: 10px;
            }

            .me {
                width: 300px;
            }

            .one {
                width: 320px;
            }

            .userr {
                margin: 0;
                padding: 0;
            }

            .right hr {
                display: none;
            }
        }

        /* Responsive styles for 767px */
        @media (max-width: 767px) {
            .right {
                float: none;
                width: 100%;
            }

            /* Media Query for screen width between 768px and 1200px */
            @media (min-width: 768px) and (max-width: 1200px) {
                .left-div {
                    width: 50%;
                }

                .right-div {
                    width: 45%;
                    margin-left: 5%;
                }
            }
        }
        @media (max-width: 768px) {
            .right {
                float: none;
                width: 100%;
            }
            h2{
                margin-left: -270px;
            }

            .spot {
                /* margin-left: 0px; */
                margin-left: -215px;
                width: 200px;
            }
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
    <!-- content start --><br><br><br>
    <div class="stl">
        <h2>Contact Privacy</h2>
        <!-- <p>This is you all profiles detail which You aaded you view you all details and also can edit all you
            detailfrom Here </p> -->
    </div>
    <div class="mainn">
        <div class="left">
            <div class="one">
            <div class="me">
                    <?php
                    // Database connection
                    include 'db.php';

                    // Fetch photo from the database
                    $sql = "SELECT photo1_url FROM user_profiles WHERE id = '$id'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Display image
                            echo "<img src='{$row['photo1_url']}' alt='Profile Picture' height='150px' width='150px'/>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
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
            <div class="stl">

                <!-- <p>This is you all profiles detail which You aaded you view you all details and also can edit all you
            detailfrom Here </p> -->
                <div class="spot">
                    <form method="POST">
                        <label for="visibility">Profile Contact Setting:</label>
                        <select name="visibility" id="visibility">
                            <option value="visible">Visible</option>
                            <option value="invisible">Invisible</option>
                        </select>
                        <button type="submit" name="updateVisibility" style="background-color: orangered;   color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 12px;">Update</button>

                    </form>
                </div>

            </div>

        </div>
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

<?php
// Check if form is submitted
if (isset($_POST['updateVisibility'])) {
    // Get selected visibility option
    $visibility = $_POST['visibility'];

    // Database connection
    include 'db.php';

    // Update visibility setting in database
    $sql = "UPDATE user_profiles SET contact_privacy = '$visibility' WHERE id = '$id'"; // Assuming 'id' is the column name for user ID
    if ($conn->query($sql) === TRUE) {
        // PHP code to echo JavaScript for alert
        echo "<script>alert('Visibility updated successfully');</script>";
    } else {
        echo "Error updating visibility: " . $conn->error;
    }


    $conn->close();
}
?>