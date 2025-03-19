<?php
session_start();
include 'db.php';


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
    $highestEducation = $_POST['highestEducation'];
    $employedIn = $_POST['employedIn'];
    $annualIncome = $_POST['annualIncome'];
    $additionalDegree = $_POST['additionalDegree'];
    $occupation = $_POST['occupation'];

    // Update user details
    $sql = "UPDATE user_profiles SET
            highestEducation=?,
            employedIn=?,
            annualIncome=?,
            additionalDegree=?,
            occupation=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $highestEducation, $employedIn, $annualIncome, $additionalDegree, $occupation, $id);
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

            font-family: Arial, sans-serif;

        }

        .left {

            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            width: 315px;
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
            width: 285px;


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
            background-color: LemonChiffon;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 920px;
            padding: 10px;
            margin-left: 200px;
            text-align: center;

        }


        .right {

            margin-top: 10px;
            width: 80%;
            margin-right: 250px;
        }


        /* edit profilecss */
        .edit-profile {
            width: 80%;
            max-width: 600px;
            padding: 10px;
            margin-left: 25%;
            /* margin-top: 50px; */
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

            .s {
                width: 240px;
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

            .s {
                width: 200px;
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
    </style>
</head>

<body>
    <?php

    include 'pro.php';
    ?>
    <?php

    include 'nav.php';
    ?>
    <br><br><br><br>
    <div class="mainn">
    <div class="left">
            <div class="one">
                <div class="me">


                    <?php
                    // Database connection
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
                <br>
                <a href="message.php"><i class="fa fa-send-o" style="font-size:23px"></i> Send Message</a>
                <hr>
                <a href="viewphotos.php"><i class="fa fa-image" style="font-size:23px"></i></i> View Photos</a>
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
                    <p>Interest</p>

                </div>
                <a href="#"> Received</a>
                <hr>
                <a href="#">Sent</a>

            </div>

            <div class="one">
                <div class="me">
                    <p>Photo Request</p>

                </div>
                <a href="#"> Received</a>
                <hr>
                <a href="#">Sent</a>
            </div>


        </div>
        <div class="right">
            <br>
            <div class="edit-profile">
                <h2>Edit Education Information</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label>Highest Education:</label>
                    <input type="text" name="highestEducation" value="<?php echo $user_profile['highestEducation']; ?>"><br><br>
                    <label>Employed In:</label>
                    <input type="text" name="employedIn" value="<?php echo $user_profile['employedIn']; ?>"><br><br>
                    <label>Annual Income:</label>
                    <input type="text" name="annualIncome" value="<?php echo $user_profile['annualIncome']; ?>"><br><br>
                    <label>Additional Degree:</label>
                    <input type="text" name="additionalDegree" value="<?php echo $user_profile['additionalDegree']; ?>"><br><br>
                    <label>Occupation:</label>
                    <input type="text" name="occupation" value="<?php echo $user_profile['occupation']; ?>"><br><br>
                    <input type="submit" value="Save Changes">
                </form>
            </div>
        </div>
    </div>
    <?php

    include 'userfooter.php';
    ?>
</body>

</html>