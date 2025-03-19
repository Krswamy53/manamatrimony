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
            /* margin-left:280px; */
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
            /* margin-left:260px */
            text-align: center;



        }

        .letsbtn:hover {
            background-color: orangered;
        }

        .loc {
            display: flex;
            justify-content: space-around;
        }

        .style {
            text-align: center;
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
        <h2>Occupation search</h2>
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
                <form class="form-horizontal" action="" method="post">

                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select Gender" name="gender" id="gender" required tabindex="1">
                                <option value="male">Male</option>
                                <option value="female" selected>Female</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select Gender" name="education" id="education" required tabindex="1">
                                <option value="Any" selected>Education</option>
                                <option value="12th">12th</option>
                                <option value="B.A">B.A</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Sc">B.Sc</option>
                                <option value="B.Arch">B.Arch </option>
                                <option value="B.Ed">B.Ed</option>
                                <option value="B.El.Ed (Elementary Education)	">B.El.Ed (Elementary Education)
                                </option>
                                <option value="B.Lib.Sc (Library Sciences)	">B.Lib.Sc (Library Sciences)
                                </option>
                                <option value="B.P.Ed. (Physical Education)">B.P.Ed. (Physical Education)
                                </option>
                                <option value="B.Plan (Planning)	">B.Plan (Planning) </option>
                                <option value="	Bachelor of Fashion Technology		"> Bachelor of Fashion
                                    Technology </option>
                                <option value="	BBA/BBM/BBS	"> BBA/BBM/BBS </option>
                                <option value="BCA (Computer Application)		">BCA (Computer Application)
                                </option>
                                <option value="BE B.Tech (Engineering)">BE B.Tech (Engineering)</option>
                                <option value="BFA (Fine Arts)">BFA (Fine Arts)</option>
                                <option value="BHM (Hotel Management)	">BHM (Hotel Management) </option>
                                <option value="BL/LLB/BGL (Law)">BL/LLB/BGL (Law)</option>
                                <option value="BSW (Social Work)">BSW (Social Work)</option>
                                <option value="	B.Pharm (Pharmacy)		"> B.Pharm (Pharmacy) </option>
                                <option value="	B.V.Sc. (Veterinary Science)"> B.V.Sc. (Veterinary Science)
                                </option>
                                <option value="BDS (Dental Surgery)	">BDS (Dental Surgery) </option>
                                <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                <option value="CA (Chartered Accountant)	">CA (Chartered Accountant) </option>
                                <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial
                                    Analyst)</option>
                                <option value="CS (Company Secretary)">CS (Company Secretary)</option>
                                <option value="ICWA">ICWA</option>
                                <option value="Integrated PG">Integrated PG</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Fashion/ Design	">Fashion/ Design </option>
                                <option value="Languages	">Languages </option>
                                <option value="Pilot Licenses	">Pilot Licenses </option>
                                <option value="M.Arch. (Architecture)	">M.Arch. (Architecture) </option>
                                <option value="M.Ed. (Education)">M.Ed. (Education)</option>
                                <option value="M.Lib.Sc. (Library Sciences)">M.Lib.Sc. (Library Sciences)
                                </option>
                                <option value="M.Plan. (Planning)">M.Plan. (Planning)</option>
                                <option value="Master of Fashion Technology">Master of Fashion Technology
                                </option>
                                <option value="Master of Health Administration	">Master of Health Administration
                                </option>
                                <option value="Master of Hospital Administration">Master of Hospital
                                    Administration</option>
                                <option value="MBA/PGDM">MBA/PGDM</option>
                                <option value="MCA PGDCA part time	">MCA PGDCA part time </option>
                                <option value="MCA/PGDCA">MCA/PGDCA</option>
                                <option value="ME/M.Tech/MS (Engg/Sciences)">ME/M.Tech/MS (Engg/Sciences)
                                </option>
                                <option value="MFA (Fine Arts)	">MFA (Fine Arts) </option>
                                <option value="ML/LLM (Law)	">ML/LLM (Law) </option>
                                <option value="MSW (Social Work)	">MSW (Social Work) </option>
                                <option value="PG Diploma">PG Diploma</option>
                                <option value="M.Com. (Commerce)">M.Com. (Commerce)</option>
                                <option value="M.Sc. (Science)">M.Sc. (Science)</option>
                                <option value="MA (Arts)">MA (Arts)</option>
                                <option value="M.Pharm. (Pharmacy)	">M.Pharm. (Pharmacy) </option>
                                <option value="M.V.Sc. (Veterinary Science)">M.V.Sc. (Veterinary Science)
                                </option>
                                <option value="MBBS">MBBS</option>
                                <option value="MD/ MS (Medicine)">MD/ MS (Medicine)</option>
                                <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental Surgery)
                                </option>
                                <option value="BPT (Physiotherapy">BPT (Physiotherapy</option>
                                <option value="MPT (Physiotherapy)">MPT (Physiotherapy)</option>
                                <option value="M.Phil. (Philosophy)">M.Phil. (Philosophy)</option>
                                <option value="Ph.D. (Doctorate)	">Ph.D. (Doctorate) </option>
                                <option value="Other Doctorate">Other Doctorate</option>
                                <option value="Other Diploma">Other Diploma</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="10th">10th</option>
                                <option value="Below 10th">Below 10th</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select Gender" name="occupation" id="occupation" required tabindex="1">
                                <option value="Any" selected>Occupation</option>
                                <option value="Advertising/ Entertainment/ Media">Advertising/ Entertainment/
                                    Media</option>
                                <option value="Architecture & Design">Architecture & Design</option>
                                <option value="Artists">Artists</option>
                                <option value=" Animators & Web Designers"> Animators & Web Designers</option>
                                <option value="Banking">Banking</option>
                                <option value=" Insurance & Financial Services"> Insurance & Financial Services
                                </option>
                                <option value="Beauty">Beauty</option>
                                <option value=" Fashion & Jewellery Designers"> Fashion & Jewellery Designers
                                </option>
                                <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur
                                </option>
                                <option value="Civil Services / Law Enforcement">Civil Services / Law
                                    Enforcement</option>
                                <option value="Construction">Construction</option>
                                <option value="Customer Service/ Call Centre/BPO">Customer Service/ Call
                                    Centre/BPO</option>
                                <option value="Defence">Defence</option>
                                <option value="Education/ Training">Education/ Training</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Export/ Import">Export/ Import</option>
                                <option value="Finance and Accounts">Finance and Accounts</option>
                                <option value="Government Employee">Government Employee</option>
                                <option value="Health Care">Health Care</option>
                                <option value="Hotels/ Restaurants">Hotels/ Restaurants</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="IT">IT</option>
                                <option value="Legal">Legal</option>
                                <option value="Loss Prevention Manager">Loss Prevention Manager</option>
                                <option value="Management / Corporate Professionals">Management / Corporate
                                    Professionals</option>
                                <option value="Manufacturing/ Engineering/ R&D">Manufacturing/ Engineering/ R&D
                                </option>
                                <option value="Marketing and Communications">Marketing and Communications
                                </option>
                                <option value="Merchant Navy">Merchant Navy</option>
                                <option value="Non Working">Non Working</option>
                                <option value="Oil & Gas">Oil & Gas</option>
                                <option value="Others">Others</option>
                                <option value="Pharmaceutical/ Biotechnology">Pharmaceutical/ Biotechnology
                                </option>
                                <option value="Purchase/ Logistics/ Supply chain">Purchase/ Logistics/ Supply
                                    chain</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail Chains">Retail Chains</option>
                                <option value="Sales/ Business Development">Sales/ Business Development</option>
                                <option value="Science">Science</option>
                                <option value="Telecom/ ISP">Telecom/ ISP</option>
                                <option value="Travel/ Airlines">Travel/ Airlines</option>
                                <option value="Agriculture">Agriculture</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3  form-group">
                            <select class="custom-select-box ages selcs" id="income" name="income"
                                onChange="fillage(this.value)" required tabindex="2">
                                <option value="" selected>Annual Income</option>
                                <option value="2-3LPA">2-3LPA</option>
                                <option value="3-4LPA">3-4LPA</option>
                                <option value="4-5LPA">4-5LPA</option>
                                <option value="5-6LPA">5-6LPA</option>
                                <option value="6-7LPA">6-7LPA</option>
                                <option value="7-8LPA">7-8LPA</option>
                                <option value="8-9LPA">8-9LPA</option>
                                <option value="9-10LP">9-10LPA</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="style">
                <input type="hidden">
                <span></span>
                <button class="letsbtn" type="submit" id="search" name="search">
                    Submit</button>
            </div>
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
                // $country = $_POST['country'];
                // $state = $_POST['state'];
                // $city = $_POST['city'];
                $occupation = $_POST['occupation'];
                $education = $_POST['education'];
                $income = $_POST['income'];
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
    </div>







    </div>
</body>

</html>

<!-- nav bar script -->

<!-- end -->