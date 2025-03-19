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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-XYZ=" crossorigin="anonymous" />

    <title>Document</title>
    <style>
        /* Style for the profile details container */
        .profile-details {
            display: flex;
            /* Use flexbox for layout */
            justify-content: space-between;
            /* Space between columns */
            width: 100%;
            /* Full width */
            max-width: 800px;
            /* Maximum width */
            margin: 0 auto;
            /* Center the container */
            padding: 20px;
            /* Add some padding */
        }

        /* Style for each column */
        .profile-column {
            flex: 0 0 48%;
            /* Each column takes up 48% of the container */
        }

        /* Style for each field */
        .profile-field {
            margin-bottom: 10px;
            /* Add some space between fields */
        }

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

        .stl {
            text-align: center;
        }

        .stl h2 {
            color: orangered
        }

        .stl p {
            margin-top: -5px;
            color: #0000FF;

        }

        .spot {
            background-color: #FFFDD0;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 50px;
            height: 40px;
            padding: 10px;
            margin: 20px;
            margin-left: 200px;

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
            height: ;
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

            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;/ width: 285px;
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

        .dropdown-content a {}

        .mainn {
            display: flex;
            gap: 30px;
        }

        .spot {
            background-color: LemonChiffon;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: auto;
            padding: 20px;
            margin-left: 20px;
            text-align: center;

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

        .cross-button {
            cursor: pointer;
            color: LemonChiffon;
            position: absolute;
            top: 50%;
            right: 45px;
            margin-top: -50px;
            transform: translateY(-50%);
            background-color: grey;
            padding: 10px;
            border-radius: 69%;
            display: flex;
            justify-content: center;
            align-items: center;
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

        .right {
            width: 80%;
            box-sizing: border-box;
            padding: 30px;
            margin-top: -10px;
        }



        .member-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: green;
        }

        .member-info a {
            text-decoration: none;
        }

        .member-info.basic-details {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: green;
            background-color: wheat;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 8px 0px;
        }

        .partner-preferences {
            color: white;
            padding: 10px;
            background-color: green;
            text-align: center;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>
</head>

<body>
    <script>
        function closeSpot() {
            var spot = document.querySelector('.spot');
            spot.style.display = 'none'; // Hide the spot div
        }
    </script>
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
        <h2>My Profile</h2>
        <p>This is your profile detaisl which you add which you can view details and you can edit your details from here
        </p>

    </div>
    <div class="spot">
        <p>Edit your profile details is very easy. Just click the right pencil button (<i style="color:red"
                class="fa fa-pencil"></i>) and here you go. You can edit your profile details.</p>
        <span class="cross-button" onclick="closeSpot()"><i class="fa fa-times"></i></span>
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
                <hr>
                <a href=""><i class="fa fa-send-o" style="font-size:26px"></i> Send Message</a>
                <hr>
                <a href=""><i class="fa fa-image" style="font-size:26px"></i></i> View Photos</a>
            </div>







            <div class="one">
                <div class="me">
                    <p>Message</p>

                </div>
                <a href=""> Inbox</a>
                <hr>
                <a href="">Outbox</a>
            </div>



            <div class="one">
                <div class="me">
                    <p>Interest</p>

                </div>
                <a href=""> Received</a>
                <hr>
                <a href="">Sent</a>

            </div>

            <div class="one">
                <div class="me">
                    <p>Photo Request</p>

                </div>
                <a href=""> Received</a>
                <hr>
                <a href="">Sent</a>
            </div>


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
            <div class="rightone">
                <div class="rightme">
                    <div class="col-md-12">
                        <div class="member-info basic-details">
                            <span>
                                <i class="fas fa-file-alt"></i> Basic Details
                            </span>

                            <a href="edit_profile.php" style="text-decoration: none;">
                                <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                            </a>
                        </div>

                    </div>


                    <?php
                    // Start the session
                    // session_start();
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "shadhi";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Assuming the user ID is stored in $_SESSION['user_id']
                    if (isset($_SESSION['id'])) {
                        $id = $_SESSION['id'];

                        $sql = "SELECT * FROM user_profiles WHERE id = '$id'";
                        $result = $conn->query($sql);

                        // Check if there are results
                        if ($result->num_rows > 0) {
                            // Fetch the first row (assuming only one user is returned)
                            $user_profile = $result->fetch_assoc();
                        } else {
                            echo "No user found with ID: $user_id";
                        }
                    }
                    ?>
                    <div class="profile-details">
                        <div class="profile-column">
                            <div class="profile-field">
                                <strong>First Name:</strong> <?php echo $user_profile['firstName']; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>Last Name:</strong> <?php echo $user_profile['lastName']; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>Email:</strong> <?php echo $user_profile['email']; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>Gender:</strong> <?php echo $user_profile['gender'] ?? 'Not specified'; ?>
                            </div><br>
                        </div>
                        <div class="profile-column">
                            <div class="profile-field">
                                <strong>Mother Tongue:</strong> <?php echo $user_profile['mother'] ?? ''; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>Mobile:</strong> <?php echo $user_profile['mobile'] ?? ''; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>DOB:</strong> <?php echo $user_profile['dob']; ?>
                            </div><br>
                            <div class="profile-field">
                                <strong>Marital Status:</strong> <?php echo $user_profile['maritalStatus'] ?? ''; ?>
                            </div><br>
                        </div>
                    </div>


                </div>
            </div>




            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-book"></i> Religion Information
                        </span>

                        <a href="edit_religion.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt"
                                style="margin-right: 5px; text-decoration: none;box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 8px 0px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Religion:</strong> <?php echo $user_profile['religion']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Caste:</strong> <?php echo $user_profile['caste']; ?>
                        </div><br>

                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Subcaste:</strong> <?php echo $user_profile['subcaste']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Willing To Marry Other Caste:</strong>
                            <?php echo $user_profile['willingToMarryOtherCaste']; ?>
                        </div><br>

                    </div>
                </div>
            </div>





            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-graduation-cap"></i> Education Information
                        </span>

                        <a href="edit_education.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px; text-decoration: none;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Highest Education:</strong> <?php echo $user_profile['highestEducation']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Additional Degree:</strong> <?php echo $user_profile['additionalDegree']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Employed In:</strong> <?php echo $user_profile['employedIn']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Occupation:</strong> <?php echo $user_profile['occupation']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Annual Income:</strong> <?php echo $user_profile['annualIncome']; ?>
                        </div><br>
                    </div>
                </div>
            </div>




            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-users"></i> Family Information
                        </span>

                        <a href="edit_family.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px; text-decoration: none;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Family Type:</strong> <?php echo $user_profile['familyType']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Family Value:</strong> <?php echo $user_profile['familyValue']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Family Status:</strong> <?php echo $user_profile['familyStatus']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Father's Occupation:</strong> <?php echo $user_profile['fatherOccupation']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Mother's Occupation:</strong> <?php echo $user_profile['motherOccupation']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Number of Brothers:</strong> <?php echo $user_profile['numBrothers']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Number of Married Brothers:</strong>
                            <?php echo $user_profile['numMarriedBrothers']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Number of Sisters:</strong> <?php echo $user_profile['numSisters']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Number of Married Sisters:</strong>
                            <?php echo $user_profile['numMarriedSisters']; ?>
                        </div><br>
                    </div>
                </div>
            </div>


            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-map-marker-alt"></i> Location Information
                        </span>

                        <a href="edit_location.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Country:</strong> <?php echo $user_profile['inputCountry']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>State:</strong> <?php echo $user_profile['inputState']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>City:</strong> <?php echo $user_profile['inputCity']; ?>
                        </div><br>
                    </div>
                </div>
            </div>

            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-heartbeat"></i> Health Information
                        </span>

                        <a href="edit_health.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Smoking Habits:</strong> <?php echo $user_profile['smokingHabits']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Drinking Habits:</strong> <?php echo $user_profile['drinkingHabits']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Diet:</strong> <?php echo $user_profile['diet']; ?>
                        </div><br>
                    </div>
                </div>
            </div>

            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-running"></i> Physical Information
                        </span>

                        <a href="edit_physical.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Height:</strong> <?php echo $user_profile['height']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Weight:</strong> <?php echo $user_profile['weight']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Body Type:</strong> <?php echo $user_profile['bodyType']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Complexion:</strong> <?php echo $user_profile['complexion']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Physical Status:</strong> <?php echo $user_profile['physicalStatus']; ?>
                        </div><br>
                    </div>
                </div>
            </div>


            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-star"></i> Astrological Information
                        </span>

                        <a href="edit_astrological.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Dosh Type:</strong> <?php echo $user_profile['doshType']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Star:</strong> <?php echo $user_profile['star']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Raasi:</strong> <?php echo $user_profile['raasi']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Birth Time:</strong> <?php echo $user_profile['birthTime']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Birth Place:</strong> <?php echo $user_profile['birthPlace']; ?>
                        </div><br>
                    </div>
                </div>
            </div>
            <h3 class="partner-preferences">
                <i class="fas fa-heart"></i> PARTNER PREFERENCES
            </h3>
            <br>
            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-info-circle"></i> Basic Information
                        </span>

                        <a href="edit_basic.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Marital Status:</strong> <?php echo $user_profile['maritalStatus']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Height:</strong> <?php echo $user_profile['height']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Smoking Habits:</strong> <?php echo $user_profile['smokingHabits']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Drinking Habits:</strong> <?php echo $user_profile['drinkingHabits']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Physical Status:</strong> <?php echo $user_profile['physicalStatus']; ?>
                        </div><br>
                    </div>
                </div>
            </div>



            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-briefcase"></i> Professional Information
                        </span>
                        <a href="edit_professional.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Highest Education:</strong> <?php echo $user_profile['highestEducation']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Occupation:</strong> <?php echo $user_profile['occupation']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Annual Income:</strong> <?php echo $user_profile['annualIncome']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Employed In:</strong> <?php echo $user_profile['employedIn']; ?>
                        </div><br>
                    </div>
                </div>
            </div>



            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-star"></i> Family and Astrological Information
                        </span>

                        <a href="edit_religion1.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Religion:</strong> <?php echo $user_profile['religion']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Caste:</strong> <?php echo $user_profile['caste']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Mother:</strong> <?php echo $user_profile['mother']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Dosh Type:</strong> <?php echo $user_profile['doshType']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>Star:</strong> <?php echo $user_profile['star']; ?>
                        </div><br>
                    </div>
                </div>
            </div>



            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-globe"></i> Location Information
                        </span>

                        <a href="edit_location1.php" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>


                <div class="profile-details">
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>Country:</strong> <?php echo $user_profile['inputCountry']; ?>
                        </div><br>
                        <div class="profile-field">
                            <strong>State:</strong> <?php echo $user_profile['inputState']; ?>
                        </div><br>
                    </div>
                    <div class="profile-column">
                        <div class="profile-field">
                            <strong>City:</strong> <?php echo $user_profile['inputCity']; ?>
                        </div><br>
                    </div>
                </div>
            </div>

            <!-- right part end -->
        </div>
    </div>






    </div>

</body>

</html>

<!-- nav bar script -->

<!-- end -->