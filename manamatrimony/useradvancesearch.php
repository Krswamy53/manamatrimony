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
    <title>User Advances search</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
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

        textarea {
            height: 50px;
            width: 400px;
            border-radius: 10px;
        }

        .sbtn {

            width: 200px;
            border-radius: 10px;
            background-color: orangered;
            color: white;
            font-weight: bold;

            border: none;
            margin-left: 90px;



        }

        .sbtn:hover {
            background-color: blue;
        }

        .uu {
            display: flex;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
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
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .content {
            padding: 10px;
        }

        .left {
            width: 285px;
            border-radius: 10px;
            padding: 10px;
            margin-left: 20px;
        }

        .stl {
            text-align: center;
            margin-left: 50px;
        }

        .stl h2 {
            color: orangered;
        }

        .one {
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            padding-bottom: 20px;
            margin-bottom: 20px;
            width: 260px;
        }

        hr {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 20px;
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
            border-radius: 5px;
            width: 100%;
            max-width: 900px;
            padding: 20px;
            box-sizing: border-box;
        }

        .right {
            margin-top: 10px;
        }



        select {
            height: 40px;
            width: 270px;
            float: left;
            margin: 20px;
            border-radius: 10px;
            margin-left: 50px;
            box-sizing: border-box;
        }

        th {
            text-align: left;
            padding: 10px;
            color: #7393B3;
            font-family: sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
        }

        td {
            text-align: left;
            padding: 10px;
            font-family: sans-serif;
            color: green;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .grid-itemm {
            border: solid;
            width: 950px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            justify-content: space-between;
            margin-bottom: 20px;
            box-sizing: border-box;
            margin-left: 50px;
            margin-top: 30px;
        }

        .grid-main {
            display: flex;
            flex-direction: row;
            padding: 20px;
            justify-content: space-between;
            flex-wrap: wrap;
            box-sizing: border-box;
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
            float: left;
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
            margin-left: 350px;
            box-sizing: border-box;
        }

        .image-section img {
            height: 250px;
            width: 220px;
            border-radius: 10px;
        }

        .letsbtn:hover {
            background-color: orangered;
        }

        .userpro {
            /* display:flex; */
           
        }

        .firstuser {
            display: flex;
            justify-content:space-around;
           
        }

        .seconduser {
            display: flex;
            justify-content:space-around;
           
        }

        .button-container {
            display: flex;
            padding: 20px;
            flex-direction: row;
            justify-content: space-between;
            background-color: lightgray;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;

        }

        .button-container2 {
            display: flex;
            padding: 20px;
            flex-direction: row;
            justify-content: space-between;
            background-color: lightgray;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            width: 940px;
        }

        .message {
            padding: 10px 20px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            background-color: green;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;

        }

        .blocklist {
            padding: 10px 20px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            background-color: red;
            color: #fff;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;

        }

        .shortlist {
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            background-color: orange;
            color: #fff;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;

        }

        .button-container>div:hover {
            background-color: #0056b3;
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
                margin-left: 80%;
                padding: 20px;

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

        @media screen and (max-width: 600px) {

            .navbar a,
            .right-icons a,
            .dropdown .dropbtn {
                float: none;
                display: block;
                text-align: left;
            }

            .firstuser {
                flex-direction: column;
            }

            .seconduser {
                flex-direction: column;
                margin-left: 0;
            }

            .right-icons {
                margin-right: 0;
            }

            .dropdown-content {
                position: relative;
            }

            .mainn {
                gap: 10px;
                flex-direction: column;
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
    </style>
    <!-- for message pop up -->

    <style>
        .rowh {
            margin-right: 29px;
        }
    </style>
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Popup Styles */
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            border: 1px solid #888;
            bottom: 20px;
            right: 20px;
        }

        .popup .close {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php

    // include 'pro.php';
    ?>


    <?php include ("nav.php") ?>
    </div>
    <!-- nav bar end -->
    <!-- content start --><br><br><br>
    <div class="stl">
        <br>
        <h2>Advance Search</h2>
        <!-- <p>Get your results instantly and fastway </p> -->
    </div>
    <div class="mainn">
        <div class="left">
            <div class="">
                <div class="">


                    <!-- <p>profile picture</p> -->

                </div>
                <!-- <a href="change.php"> change profile picture</a> -->

            </div>







            <?php
include("db.php"); // Include database connection

$inboxCount = 0;
$outboxCount = 0;

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id']; // Get logged-in user ID

    // Count Inbox Messages (Messages where user is the receiver)
    $inboxQuery = "SELECT COUNT(*) FROM messaging WHERE receiver_id = ?";
    $stmt = $conn->prepare($inboxQuery);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($inboxCount);
    $stmt->fetch();
    $stmt->close();

    // Count Outbox Messages (Messages where user is the sender)
    $outboxQuery = "SELECT COUNT(*) FROM messaging WHERE sender_id = ?";
    $stmt = $conn->prepare($outboxQuery);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($outboxCount);
    $stmt->fetch();
    $stmt->close();
}
?>

<!-- Updated HTML with Dynamic Message Counts -->
<div class="one">
    <div class="me">
        <p>Message</p>
    </div>
    <a href="message.php">Inbox (<?php echo $inboxCount; ?>)</a>
    <hr>
    <a href="fetch_sent_messages.php">Outbox (<?php echo $outboxCount; ?>)</a>
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
                <a href="#"> Express Interest Received</a>
                <hr>
                <a href="shortlist.php?action=shortlist">My shortlist Profile</a>
                <hr>
                <a href="#">My Blocklist Profile</a>
                
                <!-- <a href="">My Profile Viewed By</a> -->

            </div>


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
            <hr>
            <div class="userpro">
                <form action="" method="POST">
                    <div class="firstuser">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <select class="custom-select-box ages selcs" title="To Age" id="gender" name="gender"
                                onChange="fillage(this.value)" required tabindex="2">
                                <option value="" selected>gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
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
                            <select class="custom-select-box ages selcs" title="To Age" id="maxAge" name="maxAge"
                                required tabindex="3" size="1">
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
                    <!-- first user closed -->
                    <div class="seconduser">
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select height" name="height" id="height" required tabindex="1">
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
                                <option value="Unmarried" selected>Unmarried</option>
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

                    </div>
                    <!-- second user end -->

                    <div class="seconduser">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <select class="cast" title="Select caste" name="caste" id="caste" tabindex="7">
                                <option value="Any">Caste</option>
                            </select>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select education" name="education" id="education" required tabindex="1">
                                <option value="12th">12th</option>
                                <option value="Degree">Degree</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Sc">B.Sc</option>
                                <option value="B.Arch">B.Arch </option>
                                <option value="B.Ed">B.Ed</option>
                                <option value="B.Ed (Education)	">B.Ed (Education) </option>
                                <option value="B.El.Ed (Elementary Education)	">B.El.Ed (Elementary
                                    Education)
                                </option>

                                <option value="BDS (Dental Surgery)	">BDS (Dental Surgery) </option>
                                <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                <option value="CA (Chartered Accountant)	">CA (Chartered Accountant)
                                </option>
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
                                <option value="Master of Health Administration	">Master of Health
                                    Administration
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
                                <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental
                                    Surgery)
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
                            <select class="custom-select-box ages selcs" title="To Age" id="country" name="country"
                                required tabindex="3" size="1">
                                <option value="" selected>Country Living In</option>



                                <option value="India">India</option>
                                <option value="others">others</option>


                            </select>

                        </div>
                    </div>
                    <!-- second user end -->



                    <!-- <div class="seconduser">
 <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <select class="custom-select-box ages selcs" title="state" id="state" name="state"
                                        required tabindex="3" size="1">

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
                                    <select class="custom-select-box ages selcs" name="city" id="city" required
                                        tabindex="3" size="1">
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
</div> -->
                    <!-- second user end -->
                    <div class="seconduser">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <select class="custom-select-box ages selcs" title="To Age" id="state" name="state" required
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
                            <select class="custom-select-box ages selcs" title="To Age" id="city" name="city" required
                                tabindex="3" size="1">
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

                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select photo" name="photo" id="with_photo" required tabindex="1">
                                <option value="withphoto" selected> With Photo</option>
                                <option value="withoutphoto"> Without Photo</option>
                            </select>
                        </div>
                    </div>
                    <!-- second user end -->
                    <div class="seconduser">
                        <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                            <select class="custom-select-box ages selcs" data-max-options="1" data-live-search="true"
                                title="Select occupation" name="occupation" id="occupation" required tabindex="1">
                                <option value="Any" selected>Any Occupation</option>
                                <option value="Software">Software
                                </option>
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

                                <option value="Agriculture">Agriculture</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3  form-group">
                            <select class="custom-select-box ages selcs" id="income" name="income"
                                onChange="fillage(this.value)" required tabindex="2">
                                <option value="" selected>Annual Income</option>
                                <option value="4LPA">4LPA</option>
                                <option value="3-4">3-4LPA</option>
                                <option value="4-5">4-5LPA</option>
                                <option value="5-6">5-6LPA</option>
                                <option value="6-7">6-7LPA</option>



                            </select>
                        </div>
                        </div>
                       



                        <div class="styled-input agile-styled-input-top form-group col-md-12">

                            <button type="submit" name="Search" onClick="" class="letsbtn"> Let's Begin</button>
                        </div>
                    
                    <!-- second user end -->



                </form>


            </div>
            <!-- userpro end -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['results'])) {

                    foreach ($_POST['results'] as $result) {

                        echo '<div class="result-item">' . $result . '</div>'; // Output each result item
            
                    }

                }
                //   else {
                //     echo "No results found.";
                //   }
            } else {
                echo "No data submitted.";
            }
            ?>



            <?php
            // Turn off notices
            error_reporting(E_ALL & ~E_NOTICE);
            ini_set('display_errors', 0);
            ?>




            <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $gender = $_POST['gender'];
                $religion = $_POST['religion'];
                $caste = $_POST['caste'];
                $minAge = $_POST['minAge'];
                $maxAge = $_POST['maxAge'];
                $inputCountry = $_POST['country'];
                $inputState = $_POST['state'];
                $inputCity = $_POST['city'];
                $par_occupation = $_POST['occupation'];
                $highestEducation = $_POST['education'];
                $par_annualIncomes = $_POST['income'];
                $maritalStatus = $_POST['maritalStatus']; // Changed 'status' to 'maritalStatus'
            
                // Construct SQL query
                $sql = "SELECT * FROM user_profiles WHERE gender = '$gender' ";

                // Append conditions based on provided filters
                if (!empty($minAge) && !empty($maxAge)) {
                    $sql .= "AND age_from BETWEEN $minAge AND $maxAge ";
                }
                if (!empty($religion)) {
                    $sql .= "AND religion = '$religion' ";
                }
                if (!empty($caste)) {
                    $sql .= "AND caste = '$caste' ";
                }
                if (!empty($inputCountry)) {
                    $sql .= "AND inputCountry = '$inputCountry' ";
                }
                if (!empty($inputState)) {
                    $sql .= "AND inputState = '$inputState' ";
                }
                if (!empty($inputCity)) {
                    $sql .= "AND inputCity = '$inputCity' ";
                }
                if (!empty($par_occupation)) {
                    $sql .= "AND par_occupation = '$par_occupation' ";
                }
                if (!empty($highestEducation)) {
                    $sql .= "AND highestEducation = '$highestEducation' ";
                }
                if (!empty($par_annualIncomes)) {
                    $sql .= "AND par_annualIncomes = '$par_annualIncomes' ";
                }
                if (!empty($maritalStatus)) {
                    $sql .= "AND maritalStatus = '$maritalStatus' "; // Changed 'status' to 'maritalStatus'
                }

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        // Output data based on view
                        // echo "<h1>Your Search Results</h1>";
                        // Output data of each row in list format
                        echo "<script>";
                        echo "document.querySelector('input[name=\"gender\"][value=\"$gender\"]').checked = true;";
                        echo "document.querySelector('input[name=\"religion\"][value=\"$religion\"]').checked = true;";
                        echo "document.querySelector('input[name=\"caste\"][value=\"$caste\"]').checked = true;";
                        echo "</script>";
                        echo "<div id='list-container'>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='list-item grid-itemm'>";
                            echo "<div class='grid-main'>";
                            // Image section
                            $imageURL = $row["photo1_url"];
                            echo '<div class="image-section">';
                            echo '<img src="' . htmlspecialchars($imageURL) . '" alt="User Image"/>';
                            echo "</div>";
                            // Basic information section
                            echo '<div class="additional-details-section">';
                            echo '<table>'; // Start of the table
                            // Basic info section
                            echo "<tr><th>ID</th><td>" . $row["id"] . "</td></tr>";
                            echo "<tr><th>Name</th><td>" . $row["firstName"] . "</td></tr>";
                            echo "<tr><th>Gender</th><td>" . $row["gender"] . "</td></tr>";
                            echo "<tr><th>Religion</th><td>" . $row["religion"] . "</td></tr>";
                            echo "<tr><th>Caste</th><td>" . $row["caste"] . "</td></tr>";
                            echo "<tr><th>Age</th><td>" . $row["age_from"] . "</td></tr>";
                            echo "<tr><th>Education</th><td>" . $row["highestEducation"] . "</td></tr>";
                            echo '</table>'; // End of the table
                            echo '</div>';
                            // Additional details section
                            echo '<div class="additional-details-section">';
                            echo '<table>'; // Start of the table
                            echo "<tr><th>Height</th><td>" . $row["height"] . "</td></tr>";
                            echo "<tr><th>Country</th><td>" . $row["inputCountry"] . "</td></tr>";
                            echo "<tr><th>State</th><td>" . $row["inputState"] . "</td></tr>";
                            echo "<tr><th>City</th><td>" . $row["inputCity"] . "</td></tr>";
                            echo "<tr><th>Income</th><td>" . $row["par_annualIncomes"] . "</td></tr>";
                            echo "<tr><th>Occupation</th><td>" . $row["par_occupation"] . "</td></tr>";
                            echo '</table>'; // End of the table
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="button-container">';
                            echo '<a href="#" class="message" onclick="openPopup(' . $row["id"] . ')"><i class="fas fa-envelope"></i> Send Message</a>';

                            // Inside the PHP loop where you display user profiles
                            echo '<a href="#" class="shortlist" onclick="addToShortlist(' . $row["id"] . ')"><i class="fas fa-star"></i> Add to Shortlist</a>';

                            //                echo '<a href="#" class="blocklist" onclick="addToBlocklist(' . $row["id"] . ', \'' . $row["Name"] . '\')"><i class="fas fa-ban"></i> Add to Blocklist</a>';
            
                            echo '</div>';
                            echo "</div>";
                        }
                        echo "</div>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            mysqli_close($conn);
            ?>


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



        </div>
        <!-- right part end -->
    </div>
    </div>

    <script>
        // Function to add user to shortlist via AJAX
        function addToShortlist(recipientId) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // Check if the response contains "success" message
                    if (this.responseText.trim() === "success") {
                        // Show success message in a popup
                        alert("Successfully added to your shortlist!");
                    } else {
                        // Show error message in a popup
                        alert("Successfully added adding to shortlist!");
                    }
                }
            };
            xhttp.open("POST", "", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("action=addToShortlist&recipient_id=" + recipientId);
        }
    </script>
    <?php

    session_start();

    // Database connection
    include 'db.php';

    // Handling form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
        if ($_POST["action"] === "addToShortlist") {

            $userId = $_SESSION['id'];
            $recipientId = $_POST['recipient_id'];

            // Check if already in the shortlist
            $checkQuery = "SELECT * FROM shortlist WHERE user_id = '$userId' AND recipient_id = '$recipientId'";
            $checkResult = mysqli_query($conn, $checkQuery);

            if (mysqli_num_rows($checkResult) > 0) {
                // Already shortlisted
                echo "already shortlisted";
            } else {
                // Add to shortlist
                $insertQuery = "INSERT INTO shortlist (user_id, recipient_id) VALUES ('$userId', '$recipientId')";
                if (mysqli_query($conn, $insertQuery)) {
                    echo "success";
                } else {
                    echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
                }
            }
            exit; // Prevent further execution
        }
    }
    ?>

    <script>
        function openPopup(userId) {
            // Set the receiver_id in the modal
            document.getElementById('receiver_id').value = userId;
            // Open the modal
            document.getElementById('messageModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('messageModal').style.display = "none";
        }

        function closePopup() {
            document.getElementById('successPopup').style.display = "none";
        }

        function sendMessage() {
            var formData = new FormData(document.getElementById('messageForm'));

            // Log form data for debugging
            for (var pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            fetch('send_message.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data); // Log the response for debugging
                    if (data.trim() === 'success') {
                        document.getElementById('messageModal').style.display = "none";
                        document.getElementById('successPopup').style.display = "block";
                        setTimeout(closePopup, 3000);
                    } else {
                        alert('Failed to send message. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
        }

    </script>
    <!-- Message Modal -->
    <div id="messageModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Send Message</h2>
            <form id="messageForm">
                <input type="hidden" name="sender_id" id="sender_id" value="1">
                <!-- Assuming sender_id is 1 for testing -->
                <input type="hidden" name="receiver_id" id="receiver_id">
                <!-- <label for="message">Message:</label> -->
                <div class="uu">
                    <textarea name="message" id="message" required></textarea>
                    <button type="button" class="sbtn" onclick="sendMessage()">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Popup -->
    <div id="successPopup" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Message Sent Successfully</h2>
        </div>
    </div>



    </div>
    </div>
    <br>
    <?php

    include 'userfooter.php';
    ?>
</body>

</html>

<!-- nav bar script -->

<!-- end -->