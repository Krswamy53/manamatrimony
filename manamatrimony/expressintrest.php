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
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    <style>
    .tab-content {
        border: 1px solid #ddd;
        border-top: none;
        padding: 10px;
    }

    .custom-checkbox {
        margin: 20px 0;
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
        float: right;
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

    / Adjustments for the icons / .right-icons a {
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
        /* float: none; */
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

        / box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;/ width: 285px;
        border-radius: 10px;
        padding: 10px;


    }

    .stl {
        text-align: center;
        float: right;
        margin-top: -400px;
        margin-left: 300px;
    }

    .stlp {
        text-align: center;

        margin-top: 00px;
        margin-left: 100px;
    }


    .stl h2 {
        color: orangered;


    }

    .one {
        border: solid -1px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px;
        /* padding-bottom: 20px; */
        margin-bottom: 30px;
        margin-top: 20px;
        width: 270px;
        height: auto;


    }

    hr {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        /* margin-bottom: 20px; */
        margin-top: 20px;
    }

    .me {
        padding: 10px;
        background-color: orangered;
        text-align: center;
        color: white;
        width: 270px;

        border-radius: 5px;

    }

    .two {
        margin-left: 5px;
        margin-top: 50px;

    }

    .tw {
        margin-left: 15px;
    }

    .me1 {

        background-color: orangered;
        text-align: center;
        color: white;
        box-size: border-box;


        border-radius: 5px;

    }

    .one a {
        text-decoration: none;
        margin-left: 20px;

    }

    .one a:hover {
        color: orangered;
    }


    .mainn {

        margin-top: -20px;

    }

    .spot {
        background-color: #F0FFFF;
        border: solid 1px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px;
        width: 900px;
        padding: 20px;

    }

    @media (max-width: 768px) {

        .stl {
            text-align: center;
            margin-top: 00px;
            margin-left: 0px;
        }

        .stlp {
            text-align:center;
            justify-content: justify;
            margin-top:0px;
            margin-left:0px;
        }


        .stl h2 {
            color: orangered;
            text-align: left;


        }

        .one {
            border: solid -1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            /* padding-bottom: 20px; */
            margin-bottom: 30px;
            margin-top: 20px;
            width: 270px;
            height: auto;


        }

        hr {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            /* margin-bottom: 20px; */
            margin-top: 20px;
        }

        .me {
            padding: 10px;
            background-color: orangered;
            text-align: center;
            color: white;
            width: 270px;

            border-radius: 5px;

        }

        .two {
            margin-left: 5px;
            margin-top: auto;

        }

        .tw {
            margin-left: 15px;
        }

        .me1 {

            background-color: orangered;
            text-align: center;
            color: white;
            box-size: border-box;


            border-radius: 5px;

        }

        .one a {
            text-decoration: none;
            margin-left: 20px;

        }

        .one a:hover {
            color: orangered;
        }


        .mainn {

            margin-top: auto;

        }

        .spot {
            background-color: #F0FFFF;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: 900px;
            padding: 20px;

        }

    }

    .welcome {
        margin-left: 80%;
        padding: 20px;

    }

    / search details / .container {
        display: flex;
        flex-wrap: wrap;
    }

    .column {
        flex: 1 1 25%;
        padding: 10px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    img {
        max-width: 100%;
        height: ;
        display: block;
        margin: 0 auto;
    }

    .right {

        float: right;
        width: 900px;
        margin-top: -250px;
        margin-left: 20px;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
            0 1px 3px rgba(0, 0, 0, 0.08);
    }
    .nav.nav-tabs {
            
        }

    .nav-tabs .nav-link.active {
        background-color: #f8f9fa;
        border-top: 2px solid #28a745;
        text-align: center;

    }

    @media (max-width:768px) {

        .welcome {
            margin-left: auto;
            padding: 20px;

        }

        / search details / .container {
            display: flex;
            flex-wrap: wrap;
        }

        .column {
            flex: 1 1 25%;
            padding: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        img {
            max-width: auto;
            height: ;
            display: block;
            margin: 0 auto;
        }

        .right {

            
            width:auto;
            margin-top:0px;
            margin-left: 0px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
                0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .nav-tabs .nav-link.active {
            background-color: #f8f9fa;
            border-top: 2px solid #28a745;

        }

    }


    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
        /* Adjust column width as needed */
        grid-auto-rows: auto;
        grid-gap: 20px;
        width: 40%;
        margin-left: 70px;
    }

    /* Grid item */
    .grid-item {
        border: 1px solid #ddd;
        /* Border around each grid item */
        padding: 20px;
        background-color: #FFDEB1;
        position: relative;
    }

    .profile-details p span {
        font-weight: bold;
    }

    @media (max-width: 600px) {
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            /* Adjust column width as needed */
            grid-auto-rows: auto;
            grid-gap: 20px;
            width: auto;
            margin-left: auto;
        }

        /* Grid item */
        .grid-item {
            border: 1px solid #ddd;
            /* Border around each grid item */
            padding: 20px;
            background-color: #FFDEB1;
            position: relative;
            margin-left: auto;
        }

        .profile-details p span {
            font-weight: bold;
        }
    }

    .actions {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }


    .rowh {
        margin-right: 29px;
    }

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

    .popup {
        display: none;
        position: absolute;
        width: 300px;
        background-color: white;
        border: 1px solid #888;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        padding: 20px;
        border-radius: 5px;
    }

    .popup-content {
        position: relative;
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

    #messageForm {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #messageForm textarea {
        width: 100%;
        height: 100px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    #messageForm button {
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: green;
        color: white;
        cursor: pointer;
    }

    #messageForm button:hover {
        background-color: darkgreen;
    }

    .nav.nav-tabs {
            width:900px;
            padding-left:150px;
            
        }

        .nav-items1{
            width:900px;
            padding-left:150px;
            
        }
        

    
    .nav-tabs {
        border-bottom: 2px solid #ddd;


        background-color: wheat;
        padding: 0 0 0 px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
            0 1px 3px rgba(0, 0, 0, 0.08);
            
       
    }

    .nav-tabs .nav-item {
        margin-bottom: 0px;
        

    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-radius: 0;
        color: black;
        font-size: 16px;
        padding: 10px 20px;
        transition: all 0.3s ease;
        

    }

    .nav-tabs .nav-link:hover {
        border-color: #ddd;
        background-color: #e9ecef;
        color: #0056b3;
        border-top: 5px solid;
        border-top-color: orange;
        

    }

    .nav-tabs .nav-link.active {
        background-color: #fff;
        border-color: #ddd #ddd #fff;
        color: black;
       
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        cursor: not-allowed;
    }

    @media (max-width: 768px) {

        .nav.nav-tabs {
            width:100%;
           margin-left:0px;
           padding-left:0px;
            
        }
        .nav-items1{
            width:100%;
            padding-left:0px;
            margin-left:0px;
            
        }

        .nav-tabs {
            flex-direction: column;
            align-items: flex-start;
        }

        .nav-tabs .nav-item {
            width:auto;
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 1px solid #ddd;
            width:auto;
        }

        .nav-tabs .nav-link.active {
            border-bottom: 2px solid #0056b3;
        }
    }


    .table-container {
        display: table;
        width:auto;
        border-collapse: separate;
        border-spacing: 0 15px;
        background-color: #F0FFFF;
      
    }

    .table-row {
        display: table-row;
        width:100%;
        background-color: #F0FFFF;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
       
        
    }

    .table-cell {
        display: table-cell;
        vertical-align: top;
        padding: 10px;
        
    }

    .photo-cell img {
        width: 500px;
        height: 200px;
        border-radius: 50%;
    }

    .profile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile-name {
        font-size: 16px;
        font-weight: bold;
    }

    .sent-at {
        font-size: 14px;
        color: gray;
    }

    .profile-data {
        font-size: 14px;
        margin: 10px 0;
    }

    .action-buttons {
        display: flex;
        gap: 50px;
        margin-left: 470px;

    }

    .action-button {
        display: flex;
        gap: 50px;
        margin-left: 350px;

    }

    .send-message-button,
    .reminder-button,
    .delete-button {
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    .send-message-button {
        background-color: blue;
    }

    .reminder-button {
        background-color: green;
    }

    .delete-button {
        background-color: red;
    }

    .send-message-button i,
    .reminder-button i,
    .delete-button i {
        margin-right: 5px;
    }


    @media (max-width: 768px) {
        .table-container {
            display:flex;
            width: auto;
            border-collapse: separate;
            border-spacing: 0 15px;
            background-color: #F0FFFF;
            /* Add space between rows */
        }

        .table-row {
            display: table-row;
            width: auto;
            background-color: #F0FFFF;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding:0px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding-bottom:0px;
        }

        .table-cell {
            display: table-cell;
            vertical-align: top;
            padding:0px;
        }

        .photo-cell img {
            width: auto;
            height: auto;
            border-radius: 50%;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-name {
            font-size: 16px;
            font-weight: bold;
        }

        .sent-at {
            font-size: 14px;
            color: gray;
        }

        .profile-data {
            font-size: 14px;
            margin: 10px 0;
        }

        .action-buttons {
            display: flex;
            gap: 60px;
            margin-left: 0px;
            height:50px;

        }

        .action-button {
            display:column;
            gap:15px;
            width:20px;
            margin-left:-100px;

        }

        .send-message-button,
        .reminder-button,
        .delete-button {
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .send-message-button {
            background-color: blue;
        }

        .reminder-button {
            background-color: green;
        }

        .delete-button {
            background-color: red;
        }

        .send-message-button i,
        .reminder-button i,
        .delete-button i {
            margin-right: 5px;
        }

    }
    </style>
</head>

<!-- delete -->

<script>
function deleteItem(itemId) {
    var item = document.getElementById('grid-item-' + itemId);
    if (item) {
        item.remove();
    }
}
</script>




<!-- ajax for alert-->


<!-- dispaly hover -->

<body>

    <?php include "pro.php"; ?>
    <?php include "nav.php"; ?>
    <!-- nav bar end -->
    <!-- content start -->

    <div class="mainn">
        <div class="left">
            <div>
                <div class="me two">
                    <p><i class="fas fa-star"></i> Express Interest Received</p>

                </div>
            </div>
            <div class="left">
                <div class="one">
                    <div class="me" onclick="toggleDropdown()">
                        <p>Express Interest Received &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                id="dropdownIcon" class="fas fa-minus"></i></p>
                    </div>
                    <div id="dropdownOptions">
                        <a href="interstpending.php" style="color: green;">Interest Received Pending
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-chevron-right"></i></a>
                        <hr>
                        <a href="interstaccepted.php" style="color: green;">Interest Received Accepted
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                        <hr>
                        <a href="interstreject.php" style="color: green;">Interest Received Rejected
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="left">

                <div class="me ">
                    <a href="expressent.php" style="text-decoration:none;color:white;">Express Interest Sent
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-plus"></i></a>


                </div>


                <div class="stl">
                    <h2>All Express Interest</h2>
                    <p class="stlp">Here You can see your all Express intersts which you send and
                        Recived from
                        members and with left side panel you can access other particular Express Interest.
                    </p>
                </div>
                


                <div class="right">


                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#sent" id="sentInterestBtn">
                                <h3><i class="fas fa-paper-plane"></i> All Sent Interests</h3>
                            </a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" data-toggle="tab" href="#received" id="receivedInterestBtn">
                                <h3><i class="fas fa-envelope-open"></i> All Received Interests </h3>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="sent" class="container tab-pane active"><br>
                        
                            <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$current_user_id = $_SESSION['id']; 

$sql = "SELECT receiver.id AS receiver_id, receiver.photo1_url AS receiver_photo, receiver.firstName AS receiver_firstName, receiver.lastName AS receiver_lastName, m.message AS receiver_message, m.sentat AS sent_at
        FROM messages m
        JOIN user_profiles receiver ON m.receiver_id = receiver.id
        WHERE m.sender_id = $current_user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in table format
    echo "<div class='table-container'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='table-row' id='message-row-" . $row['receiver_id'] . "'>";
        echo "<div class='table-cell photo-cell'><img src='" . htmlspecialchars($row["receiver_photo"]) . "' alt='Profile Picture'></div>";
        echo "<div class='table-cell'>";
        echo "<div class='profile-header'>";
        echo "<span class='profile-name'>" . htmlspecialchars($row["receiver_firstName"]) . " " . htmlspecialchars($row["receiver_lastName"]) . "</span>";
        echo "<span class='sent-at'>" . htmlspecialchars($row["sent_at"]) . "</span>";
        echo "</div>";
        echo "<p class='profile-data'><strong>Express Interest sent:</strong> <span>" . htmlspecialchars($row["receiver_message"]) . "</span></p>";
        echo "<h5 style='color: green; cursor: pointer;' class='message' onclick='openPopup(" . $row['receiver_id'] . ")'><i class='fas fa-envelope'></i> Send Message</h5>";
        echo "<div class='action-buttons'>";
        echo "<button class='reminder-button' onclick='setReminder(" . $row["receiver_id"] . ")'><i class='fa fa-bell'></i> Reminder</button>";
        echo "<button class='delete-button' onclick='deleteItem(" . $row["receiver_id"] . ")'><i class='fa fa-trash'></i> Delete</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No user found";
}

$conn->close();
?>


                        </div>
                        
                        <div id="received" class="container tab-pane fade"><br>
                            <?php
// Establish database connection
include 'db.php';
// Current user's id (assuming you have this stored in the session)
$current_user_id = $_SESSION['id']; // Assuming you're using session for authentication

// Fetch sender details for the current user's received messages
$sql = "SELECT sender.id AS sender_id, sender.photo1_url, sender.firstName, sender.lastName, sender.dob, sender.religion, sender.caste, sender.subcaste
        FROM messages m
        JOIN user_profiles sender ON m.sender_id = sender.id
        WHERE m.receiver_id = $current_user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in grid view
    // echo "<div class='table-container'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='table-row' id='message-row-" . $row["sender_id"] . "'>";
        echo "<div class='table-cell'><img src='" . htmlspecialchars($row["photo1_url"]) . "' alt='User Image' /></div>";
        echo "<div class='table-cell'>";
        echo "<p><strong>First Name:</strong> <span style='color:green;'>" . htmlspecialchars($row["firstName"]) . "</span></p>";
        echo "<p><strong>Last Name:</strong> <span style='color:green;'>" . htmlspecialchars($row["lastName"]) . "</span></p>";
        echo "<p><strong>Date Of Birth:</strong> <span style='color:green;'>" . htmlspecialchars($row["dob"]) . "</span></p>";
        echo "<p><strong>Religion:</strong> <span style='color:green;'>" . htmlspecialchars($row["religion"]) . "</span></p>";
        echo "<p><strong>Caste:</strong> <span style='color:green;'>" . htmlspecialchars($row["caste"]) . "</span></p>";
        echo "<p><strong>Subcaste:</strong> <span style='color:green;'>" . htmlspecialchars($row["subcaste"]) . "</span></p>";
        echo "<div class='action-button'>";
        echo "<h6 style='color: white; width:100px;height:40px; background-color: green; border: 1px solid green; padding: 5px; border-radius: 5px; cursor: pointer;' onclick='acceptInterest(" . $row["sender_id"] . ")'><i class='fa fa-check'></i> Accept</h6>";
        echo "<h6 style='color: white; width:100px;height:40px; background-color: red; border: 1px solid red; padding: 5px; border-radius: 5px; cursor: pointer;' onclick='rejectInterest(" . $row["sender_id"] . ")'><i class='fa fa-times'></i> Reject</h6>";
        echo "<h6 style='color: white;width:100px;height:40px; background-color: salmon; border: 1px solid salmon; padding: 5px; border-radius: 5px; cursor: pointer;' onclick='deleteItem(" . $row["sender_id"] . ")'><i class='fa fa-trash'></i> Delete</h6>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No user found";
}

$conn->close();
?>



                        </div>
                        
                    </div>
                  
                    

                    <script>
                    function deleteItem(senderId) {
                        if (confirm('Are you sure you want to delete this item?')) {
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "delete_item.php", true);
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Remove the item from the DOM
                                    var item = document.getElementById('grid-item-' + senderId);
                                    if (item) {
                                        item.parentNode.removeChild(item);
                                    }
                                }
                            };
                            xhr.send("sender_id=" + senderId);
                        }
                    }
                    </script>

                    <script>
                    function acceptInterest(id) {
                        updateInterestStatus(id, 'accept');
                    }

                    function rejectInterest(id) {
                        updateInterestStatus(id, 'reject');
                    }

                    function updateInterestStatus(id, action) {
                        // Send AJAX request to update status
                        $.ajax({
                            url: 'update_status.php', // Change to your server-side script
                            type: 'POST',
                            data: {
                                id: id,
                                action: action
                            },
                            success: function(response) {
                                // Handle success response
                                console.log(response);
                                alert('Status updated successfully.');
                                // You can also update the UI here if needed
                            },
                            error: function(xhr, status, error) {
                                // Handle error response
                                console.error(xhr.responseText);
                                alert('Error updating status: ' + error);
                            }
                        });
                    }
                    </script>

                    <!-- delete item -->
                    <script>
                    function deleteItem(receiverId) {
                        var row = document.getElementById('message-row-' + receiverId);
                        if (row) {
                            row.remove();
                        }

                    }
                    </script>


                    <!-- send message -->
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
                                <input type="hidden" name="sender_id" id="sender_id" value="<?php echo $user_id;?>">
                                <input type="hidden" name="receiver_id" id="receiver_id">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" required></textarea>
                                <button type="button" onclick="sendMessage()">Send</button>
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



                    <script>
                    // Get references to the buttons
                    var sentInterestBtn = document.getElementById('sentInterestBtn');
                    var receivedInterestBtn = document.getElementById('receivedInterestBtn');

                    // Add click event listeners
                    sentInterestBtn.addEventListener('click', function() {
                        showSentInterestContent();
                    });

                    receivedInterestBtn.addEventListener('click', function() {
                        showReceivedInterestContent();
                    });

                    // Functions to show content
                    function showSentInterestContent() {
                        document.getElementById('sent').style.display = 'block';
                        document.getElementById('received').style.display = 'none';
                    }

                    function showReceivedInterestContent() {
                        document.getElementById('sent').style.display = 'none';
                        document.getElementById('received').style.display = 'block';
                    }
                    </script>

                    <!-- Add this JavaScript at the end of your HTML -->


                    <script>
                    function openPopup(receiverId) {
                        document.getElementById('receiver_id').value = receiverId;
                        document.getElementById('messagePopup').style.display = 'block';
                    }

                    function closePopup() {
                        document.getElementById('messagePopup').style.display = 'none';
                    }

                    function sendMessage() {
                        const senderId = document.getElementById('sender_id').value;
                        const receiverId = document.getElementById('receiver_id').value;
                        const message = document.getElementById('message').value;

                        // Implement your send message logic here, e.g., an AJAX call to the server
                        alert('Message sent to receiver ID: ' + receiverId);

                        // Close the popup after sending the message
                        closePopup();
                    }
                    </script>

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

                        var messages = document.getElementById('message').value.trim();
                        console.log("Textarea content:", messages);
                        // Check if the message is not empty
                        if (messages === "") {
                            alert("Please enter a message.");
                            return;
                        }

                        // Create FormData object
                        var formData = new FormData(document.getElementById('messageForm'));

                        // Log the FormData entries
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
                    


</body>

</html>