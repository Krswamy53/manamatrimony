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
            margin-left: 150px;
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

        .stl {
            text-align: center;
            margin-left: 280px;
            margin-top: 30px;
        }

        .letsbtn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            /* Green */
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin: 20px;
            width: 270px;
            margin-left: 150px;
        }

        .letsbtn:hover {
            background-color: orangered;
        }

        .profile-picture {
            border-radius: 50%;
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
                    echo '<img src="' . $_SESSION['profile_picture'] . '" alt="Profile Picture" class="profile-picture">';
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
        <h2>Quick search</h2>
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
            <div class="">
                <div class="col-lg-12 mt-3">



                    <form class="form-horizontal" action="userquicksearch.php" method="POST">
                        <div class="quick">
                            <div class="fistrow">

                                <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                    <select class="custom-select-box ages selcs" data-max-options="1"
                                        data-live-search="true" title="Select Gender" name="gender" id="gender" required
                                        tabindex="1">
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    </select>
                                </div>




                                <div class="col-lg-4 col-md-4 col-sm-4  form-group">
                                    <select class="custom-select-box ages selcs" id="minAge" name="minAge"
                                        onChange="fillage(this.value)" required tabindex="2">
                                        <option value="" selected> From Age</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                                    <select class="custom-select-box ages selcs" title="To Age" id="maxAge"
                                        name="maxAge" required tabindex="3" size="1">
                                        <option value="" selected> To Age</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
                                </div>
                            </div>


                            <div class="secondrow">



                                <div class="col-lg-4 col-md-4 col-sm-4 form-group cast1">
                                    <select class="cast" title="Select Religion" name="religion" id="religion"
                                        onChange="fillcaste(this.value)" tabindex="5">
                                        <option value="Christian">Christian</option>
                                        <option value="Hindu">Hindu</option>
                                        <!-- <option value="Inter-Religion">Inter-Religion</option> -->
                                        <option value="Jain">Jain</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Sikh">Sikh</option>
                                    </select>
                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 form-group ">
                                    <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
                                        <option value="Any">Caste</option>
                                    </select>
                                    </select>
                                </div>


                                <div class="styled-input agile-styled-input-top form-group col-md-12">
                                    <input type="hidden">
                                    <span></span>
                                    <button class="letsbtn" type="submit" name="Search" onClick="getsearch1()"><span
                                            class=""> Let's Begin</span></button>
                                </div>
                            </div>





                        </div>
                </div>

                </form>













                <script>
                    function fillcaste(religion) {
                        var casteSelect = document.getElementById("caste");
                        casteSelect.innerHTML = ""; // Clear existing options

                        var casteOptions = {}; // Define caste options based on religion

                        // Populate caste options based on selected religion
                        switch (religion) {
                            case "Christian":
                                casteOptions = {
                                    "Any": "Any",
                                    "Catholicism": "Catholicism",
                                    "Protestantism": "Protestantism",
                                    "Orthodox Christianity": "Orthodox Christianity",
                                    "Assyrins": "Assyrins",
                                    "Luthern": "Luthern",
                                    "Other": "Other"
                                };
                                break;
                            case "Hindu":
                                casteOptions = {
                                    "Any": "Any",
                                    "Kapu": "Kapu",
                                    "Reddy": "Reddy",
                                    "Chowdary": "Chowdary",
                                    "Kshatriya": "Kshatriya",
                                    "Vaishya": "Vaishya",
                                    "Gowda": "Gowda",
                                    "Rajaka": "Rajaka",
                                    "Brahmin": "Brahmin",

                                    "Yadhava": "Yadhava",
                                    "Other": "Other"
                                };
                                break;
                            case "Muslim":
                                casteOptions = {
                                    "Any": "Any",
                                    "Mohammads": "Mohammads",
                                    "Shaiks": "Shaiks",
                                    "Phatans": "Phatans",
                                    "Khans": "Khans",
                                    "Dhudekula": "Dhudekula",
                                    "Other": "Other"
                                };
                                break;
                            case "Jain":
                                casteOptions = {
                                    "Any": "Any",
                                    "Digambara": "Digambara",
                                    "Svetambara": "Svetambara",
                                    "Other": "Other"
                                };
                                break;
                            case "Sikh":
                                casteOptions = {
                                    "Any": "Any",
                                    "Ahluwalias": "Ahluwalias",
                                    "Kambos": "Kambos",
                                    "Ramgarhias": "Ramgarhias",
                                    "Rai Sikh": "Rai Sikh",
                                    "Other": "Other"
                                };
                                break;

                            default:
                                casteOptions = {
                                    "Any": "Any"
                                };
                                break;
                        }

                        // Add caste options to the dropdown
                        for (var caste in casteOptions) {
                            var option = document.createElement("option");
                            option.value = casteOptions[caste];
                            option.text = caste;
                            casteSelect.add(option);
                        }
                    }


                </script>
                <!-- <script>
function toggleView(view) {
var items = document.querySelectorAll('.result-item');

if (view === 'grid') {
// Show only gender, age, and country
items.forEach(item => {
item.querySelector('.result-religion').style.display = 'none';
item.querySelector('.result-caste').style.display = 'none';
});
} else if (view === 'list') {
// Show all details
items.forEach(item => {
item.querySelector('.result-religion').style.display = 'block';
item.querySelector('.result-caste').style.display = 'block';
});
}
}
</script> -->
                <script>
                    function toggleView(view) {
                        var items = document.querySelectorAll('.result-item');
                        var form = document.createElement('form');
                        form.setAttribute('method', 'POST');
                        form.setAttribute('action', 'search.php');

                        // Append each result item as a hidden input field to the form
                        items.forEach(item => {
                            var hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'results[]');
                            hiddenInput.setAttribute('value', item.outerHTML);
                            form.appendChild(hiddenInput);
                        });

                        document.body.appendChild(form);

                        // Submit the form
                        form.submit();
                    }
                </script>
            </div>
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
                $religion = $_POST['religion'];
                $caste = $_POST['caste'];

                if (isset($_POST['minAge']) && isset($_POST['maxAge'])) {
                    $minAge = $_POST['minAge'];
                    $maxAge = $_POST['maxAge'];

                    // Construct SQL query with age segregation
                    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' AND religion = '$religion' AND caste = '$caste' AND age BETWEEN $minAge AND $maxAge";
                } else {
                    // Construct SQL query without age segregation
                    $sql = "SELECT * FROM subhalekha WHERE gender = '$gender' AND religion = '$religion' AND caste = '$caste'";
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
        </div>
        <!-- right part end -->
    </div>
    </div>






    </div>
</body>

</html>

<!-- nav bar script -->

<!-- end -->