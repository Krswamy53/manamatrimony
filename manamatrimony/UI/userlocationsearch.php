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
            font-family: sans-serif;

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
            font-family: sans-serif;

        }

        .right-icons {
            float: right;
            margin-right: 50px;

        }

        .right-icons a {
            padding: 14px 16px;
            color: white;
            text-decoration: none;
        }

        .right-icons a:hover {
            background-color: orange;
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
            / padding: 12px 16px;/ text-decoration: none;
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
            / padding: 10px;/
        }

        .left {

box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
width: 285px;
border-radius: 10px;
padding: 10px;


}

        .stl {
            text-align: center;
            margin-left: 280px;
            margin-top: 30px;
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
            background-color: #F0FFFF;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 900px;
            padding: 20px;

        }

        .right {

            margin-top: 10px;
            flex-direction: column;
        }

        .welcome {
            margin-left: 80%;
            padding: 20px;

        }

        select {
            height: 40px;
            width: 270px;
            float: left;
            margin: 20px;
            border-radius: 10px;
            /* margin-left: 150px; */
        }

        th {
            text-align: left;
            padding: 10px;
            color: green;
            font-family: sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
        }

        td {
            text-align: left;
            padding: 10px;
            font-family: sans-serif;
            color: blue;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .grid-itemm {
            border: solid;
            width: 1000px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            justify-content: space-between;
            margin-bottom: 20px;

        }

        .grid-main {
            display: flex;
            flex-direction: row;
            padding: 20px;
            justify-content: space-between;
        }

        .quick {
            display: flex;

        }

        .firstrow {
            display: flex;
            float: left;
        }

        .second-row {
            display: flex;
            float: left
        }

        .letsbtn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;

            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin: 20px;
            width: 270px;
            margin-left: 360px;



        }

        .letsbtn:hover {
            background-color: orangered;
        }

        .loc {
            display: flex;
            justify-content: space-around;
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
        <!-- nav bar end -->
        <!-- content start -->
        <div class="stl">
            <h2>Location search</h2>
            <p>Get your results instantly and fastway </p>
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

                </div>





                <div class="one">
                    <div class="me">

                    </div>
                    <a href=""> Inbox</a>
                    <hr>
                    <a href="">Out Box</a>
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
                <hr>
                <div class="loc">
                    <div class="first">
                        <form class="form-horizontal" action="" method="post">
                            <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                <select class="custom-select-box ages selcs" data-max-options="1"
                                    data-live-search="true" title="Select Gender" name="gender" id="gender" required
                                    tabindex="1">
                                    <option value="">Select Gender</option>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-3 form-group">
                                <select class="custom-select-box ages selcs" name="country" id="country" required
                                    tabindex="2">
                                    <option value="">Country Living In</option>
                                    <option value="India">India</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Srilanka">Srilanka</option>
                                    <option value="USA">USA</option>
                                    <option value="Dubbai">Dubbai</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Russia">Russia</option>
                                    <option value="China">China</option>
                                </select>
                            </div>

                    </div>

                    <div class="second">
                        <div class="col-lg-4 col-md-4 col-sm-3 form-group">
                            <select class="custom-select-box ages selcs" name="state" id="state" required tabindex="3">
                                <option value="">State Living In</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-3 form-group">
                            <select class="custom-select-box ages selcs" name="city" id="city" required tabindex="4">
                                <option value="">City Living In</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="vishakapatnam">vishakapatnam </option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Mumbai">Mumbai</option>
                            </select>
                        </div>

                    </div>

                </div>

                <button class="letsbtn" type="submit" id="search" name="search">
                    Submit</button>

                </form>
                <!-- loc -->




                <?php


                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $dbname = 'shadhi';

                $conn = mysqli_connect($host, $user, $pass, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $gender = $_POST['gender'];
                    // $religion = $_POST['religion'];
                    // $caste = $_POST['caste'];
                    // $minAge = $_POST['minAge'];
                    // $maxAge = $_POST['maxAge'];
                    $country = $_POST['country'];
                    $state = $_POST['state'];
                    $city = $_POST['city'];
                    // $occupation = $_POST['occupation'];
                    // $education = $_POST['education'];
                    // $income = $_POST['income'];
                    // $status = $_POST['status'];
                
                    // Construct SQL query
                    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' ";

                    // Append conditions based on provided filters
                    if (!empty($minAge) && !empty($maxAge)) {
                        $sql .= "AND age BETWEEN $minAge AND $maxAge ";
                    }
                    if (!empty($religion)) {
                        $sql .= "AND religion = '$religion' ";
                    }
                    if (!empty($caste)) {
                        $sql .= "AND caste = '$caste' ";
                    }
                    if (!empty($country)) {
                        $sql .= "AND country = '$country' ";
                    }
                    if (!empty($state)) {
                        $sql .= "AND state = '$state' ";
                    }
                    if (!empty($city)) {
                        $sql .= "AND city = '$city' ";
                    }
                    if (!empty($occupation)) {
                        $sql .= "AND occupation = '$occupation' ";
                    }
                    if (!empty($education)) {
                        $sql .= "AND education = '$education' ";
                    }
                    if (!empty($income)) {
                        $sql .= "AND income = '$income' ";
                    }
                    if (!empty($status)) {
                        $sql .= "AND status = '$status' ";
                    }

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            // Output data of each row in grid format
                            echo "<h1>Your Search Results</h1>";
                            echo "<div class='grid-containerr'>";
                            while ($row = mysqli_fetch_assoc($result)) {


                                echo "<div class='grid-itemm'>";
                                echo "<div class='grid-main'>";

                                // Image section
                                $imageData = $row["phot"];
                                $imageType = 'phot/jpeg'; // Change this according to your image type
                                echo '<div class="image-section">';
                                echo '<img src="data:' . $imageType . ';base64,' . base64_encode($imageData) . '"/>';
                                echo "</div>";

                                // Basic information section
                                echo '<div class="basic-info-section">';
                                echo '<table>'; // Start of the table
                
                                // Basic info section
                                echo "<tr><th>Name</th><td>" . $row["Name"] . "</td></tr>";
                                echo "<tr><th>Gender</th><td>" . $row["gender"] . "</td></tr>";
                                echo "<tr><th>Religion</th><td>" . $row["religion"] . "</td></tr>";
                                echo "<tr><th>Caste</th><td>" . $row["caste"] . "</td></tr>";
                                echo "<tr><th>Age</th><td>" . $row["age"] . "</td></tr>";
                                echo "<tr><th>Education</th><td>" . $row["education"] . "</td></tr>";
                                echo '</table>'; // End of the table
                                echo '</div>';

                                // Additional details section
                                echo '<div class="additional-details-section">';
                                echo '<table>'; // Start of the table
                
                                echo "<tr><th>Height</th><td>" . $row["height"] . "</td></tr>";
                                echo "<tr><th>Country</th><td>" . $row["country"] . "</td></tr>";
                                echo "<tr><th>State</th><td>" . $row["state"] . "</td></tr>";
                                echo "<tr><th>City</th><td>" . $row["city"] . "</td></tr>";
                                echo "<tr><th>Income</th><td>" . $row["income"] . "</td></tr>";
                                echo "<tr><th>Occupation</th><td>" . $row["occupation"] . "</td></tr>";

                                echo '</table>'; // End of the table
                                echo '</div>';
                                echo "</div>"; // Close the outer div
                

                                // Button container
                


                                echo "</div>";
                            }
                            echo "</div>";
                        }
                        // else {
                        //     echo "0 results";
                        // }
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }

                mysqli_close($conn);
                ?>
                <?php
                // Turn off notices
                error_reporting(E_ALL & ~E_NOTICE);
                ini_set('display_errors', 0);
                ?>

                <!-- right part end -->
            </div>

        </div>







    </div>
</body>

</html>

<!-- nav bar script -->

<!-- end -->