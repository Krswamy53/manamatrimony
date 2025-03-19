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
    <title>Advance Search</title>
    <style>
        .using {
            display: flex;
        }

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

        .content {}

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
            margin-left: 329px;



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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shadhi";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch photo from the database
            $sql = "SELECT profile_picture FROM user_profiles WHERE id = '$id'"; // Change the condition according to your requirement
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

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
                <!-- <hr>
                <a href="">Out Box</a> -->
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
        <form class="form-horizontal" action="" method="POST" name="form1">
            <div class="row">
                <div class="using">
                    <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                        <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                            title="Select Gender" name="gender" id="gender" required tabindex="1">
                            <option value="Male">Male</option>
                            <option value="Female" selected>Female</option>
                        </select>
                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-3  form-group">
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


                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <select class="custom-select-box ages selcs" title="To Age" id="maxAge" name="maxAge" required
                            tabindex="3" size="1">
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

                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                    <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                        title="Select Gender" name="height" id="height" required tabindex="1">
                        <option value="height" selected>Height</option>
                        <option value="4ft">4 feet</option>
                        <option value="4.2ft">4.2 feet</option>
                        <option value="4.4ft">4.4 feet</option>
                        <option value="4.6ft">4.6 feet</option>
                        <option value="4.8ft">4.8 feet</option>
                        <option value="4.10ft">4.10 feet</option>
                        <option value="5ft">5 feet</option>
                        <option value="5.2ft">5.2 feet</option>
                        <option value="5.4ft">5.4 feet</option>
                        <option value="5.6ft">5.6 feet</option>
                        <option value="5.8ft">5.8 feet</option>
                        <option value="5.9ft">5.9 feet</option>
                        <option value="5.10ft">5.10 feet</option>
                        <option value="6ft">6 feet</option>
                        <option value="6.2ft">6.2 feet</option>
                        <option value="6.4ft">6.4 feet</option>
                        <option value="6.6ft">6.6 feet</option>
                        <option value="6.8ft">6.8 feet</option>
                        <option value="6.10ft">6.10 feet</option>
                        <option value="7.0ft">7 feet</option>
                        <option value="7.1ft">7.1 feet</option>
                        <option value="7.2ft">7.2 feet</option>
                        <option value="7.3ft">7.3 feet</option>
                    </select>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                    <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                        title="Select Gender" name="status" id="status" required tabindex="1">
                        <option value="unmarried" selected>unmarried</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Any">Any</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
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

                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                    <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
                        <option value="Any">Caste</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                    <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                        title="Select Gender" name="education" id="education" required tabindex="1">
                        <option value="Any" selected>Any Education</option>
                        <option value="12th">12th</option>
                        <option value="B.A. (Arts)">B.A. (Arts)</option>
                        <option value="B.Com (Commerce)">B.Com (Commerce)</option>
                        <option value="B.Sc (Science)">B.Sc (Science)</option>
                        <option value="B.Arch (Architecture)	">B.Arch (Architecture) </option>
                        <option value="B.Ed (Education)	">B.Ed (Education) </option>
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
                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                    <select class="custom-select-box ages selcs" title="country" id="country" name="country" required
                        tabindex="3" size="1">
                        <option value="" selected>Country Living In</option>



                        <option value="India">India</option>
                        <option value="others">others</option>

                    </select>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                    <select class="custom-select-box ages selcs" title="state" id="state" name="state" required
                        tabindex="3" size="1">

                        <option value="">Select a state...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>

                    </select>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                    <select class="custom-select-box ages selcs" name="city" id="city" required tabindex="3" size="1">
                        <option value="" selected>City Live In</option>


                        <option value="Agra">Agra</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Allahabad">Allahabad</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Aurangabad">Aurangabad</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                        <option value="Goa">Goa</option>
                        <option value="Gurgaon">Gurgaon</option>
                        <option value="Guwahati">Guwahati</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Indore">Indore</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Jalandhar">Jalandhar</option>
                        <option value="Jammu">Jammu</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Jamshedpur">Jamshedpur</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Ludhiana">Ludhiana</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Nashik">Nashik</option>
                        <option value="Navi Mumbai">Navi Mumbai</option>
                        <option value="Noida">Noida</option>
                        <option value="Patna">Patna</option>
                        <option value="Pune">Pune</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Surat">Surat</option>
                        <option value="Thane">Thane</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Visakhapatnam">Visakhapatnam</option>

                    </select>
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                    title="Select photo" name="photo" id="with_photo" required tabindex="1">
                    <option value="withphoto" selected> With Photo</option>
                    <option value="withoutphoto"> Without Photo</option>
                </select>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                    title="Select occupation" name="occupation" id="occupation" required tabindex="1">
                    <option value="Any" selected>Any Occupation</option>
                    <option value="Advertising/ Entertainment/ Media">Advertising/
                        Entertainment/
                        Media</option>
                    <option value="Architecture & Design">Architecture & Design</option>
                    <option value="Artists">Artists</option>
                    <option value=" Animators & Web Designers"> Animators & Web Designers
                    </option>
                    <option value="Banking">Banking</option>
                    <option value=" Insurance & Financial Services"> Insurance & Financial
                        Services
                    </option>
                    <option value="Beauty">Beauty</option>
                    <option value=" Fashion & Jewellery Designers"> Fashion & Jewellery
                        Designers
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
                    <option value="Manufacturing/ Engineering/ R&D">Manufacturing/ Engineering/
                        R&D
                    </option>
                    <option value="Marketing and Communications">Marketing and Communications
                    </option>
                    <option value="Merchant Navy">Merchant Navy</option>
                    <option value="Non Working">Non Working</option>
                    <option value="Oil & Gas">Oil & Gas</option>
                    <option value="Others">Others</option>
                    <option value="Pharmaceutical/ Biotechnology">Pharmaceutical/ Biotechnology
                    </option>
                    <option value="Purchase/ Logistics/ Supply chain">Purchase/ Logistics/
                        Supply
                        chain</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Retail Chains">Retail Chains</option>
                    <option value="Sales/ Business Development">Sales/ Business Development
                    </option>
                    <option value="Science">Science</option>
                    <option value="Telecom/ ISP">Telecom/ ISP</option>
                    <option value="Travel/ Airlines">Travel/ Airlines</option>
                    <option value="Agriculture">Agriculture</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3  form-group">
                <select class="custom-select-box ages selcs" id="income" name="income" onChange="fillage(this.value)"
                    required tabindex="2">
                    <option value="" selected>Annual Income</option>
                    <option value="2-3">2-3LPA</option>
                    <option value="3-4">3-4LPA</option>
                    <option value="4-5">4-5LPA</option>
                    <option value="5-6">5-6LPA</option>
                    <option value="6-7">6-7LPA</option>
                    <option value="7-8">7-8LPA</option>
                    <option value="8-9">8-9LPA</option>
                    <option value="9-10">9-10LPA</option>
                    <option value="10-50">10-50LPA</option>
                    <option value="50-1cr">50-1cr</option>
                    <option value="< 1cr">Over 1cr</option>

                </select>
            </div>



            <div class="styled-input agile-styled-input-top form-group col-md-12">
                <input type="hidden">
                <span></span>
                <button class="letsbtn" type="submit" name="Search" onClick=""><span class="btn-title"> Let's
                        Begin</span></button>
            </div>











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