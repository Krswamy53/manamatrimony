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
            width: 260px;

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




        .quick {
            display: flex;

        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 50px;
            flex-direction: column;


        }

        .grid-item {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;

            background-color: red;
            float: left;

        }

        .row {
            display: flex;

            width: auto;
            justify-content: space-between;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #7393B3;
        }

        td {
            text-align: left;
            padding: 5px;
            color: green;
        }

        img {
            height: 200px;
            width: 200px;
        }
    </style>

</head>

<body>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(900px, 1fr));
            gap: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .grid-item {
            border: 1px solid #ccc;
            padding: 16px;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: center;
            box-sizing: border-box;
        }

        .image-container {
            margin-bottom: 16px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex: 1;
            margin: 0 10px;
        }

        h3 {
            margin-top: 0;
        }

        p {
            margin: 5px 0;
        }

        .active {
            color: red;

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
            color: #fff;
            font-weight: bold;
            text-decoration: none;
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
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;

        }

        .button-container>div:hover {
            background-color: #0056b3;
        }
    </style>

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

        textarea {
            height: 50px;
            width: 400px;
            border-radius: 10px;
        }

        .sbtn {
            height: 50px;
            width: 200px;
            border-radius: 10px;
            background-color: orangered;
            color: white;
            font-weight: bold;

            border: none;
            margin-left: 30px;



        }

        .sbtn:hover {
            background-color: blue;
        }

        .uu {
            display: flex;
        }
    </style>
    </head>

    <body>

       
            <div class="userr">

                <div>
                    <?php

                    // include 'pro.php';
                    ?>
                    <?php include ("nav.php") ?>
                </div>
                <!-- nav bar end -->
                <!-- content start -->
                <br><br><br>
                <div class="stl">
                    <h2>Your Shortlisted Members</h2>
                    <!-- <p>Get your results instantly and fastway </p> -->
                </div>
                <div class="mainn">
                    <div class="left">
                        <div class="">
                            <div class="">


                                <!-- <p>profile picture</p> -->
                                <!--  -->
                            </div>
                            <!-- <a href="change.php"> change profile picture</a> -->

                        </div>





                        <div class="one">
                            <div class="me">
                                <p>Profile Details</p>

                            </div>
                            <a href=""> Express Interest Received</a>
                            <hr>
                            <a class="active" href="">My shortlist Profile</a>
                            <hr>
                            <a href="">My Blocklist Profile</a>
                            <hr>
                            <a href="">My Profile Viewed By</a>

                        </div>


                    </div>



                    <!-- left part end  -->
                    <!-- right side part start -->
                    <div class="right">
                        <hr>
                        <div class="">
                            <div class="col-lg-12 mt-3">




                            </div>
                            <!-- right side part start -->
                            <?php
                            if (isset($_SESSION['id'])) {
                                // Database connection
                                include 'db.php';
                                // Check if the action parameter is set to "shortlist"
                                if (isset($_GET['action']) && $_GET['action'] == 'shortlist') {
                                    // Fetch recipient IDs and additional details from the 'shortlist' and 'user_profiles' tables
                                    $query = "SELECT *
                  FROM shortlist s 
                  INNER JOIN user_profiles up ON s.recipient_id = up.id 
                  WHERE s.user_id = " . $_SESSION['id'];
                                    $result = $conn->query($query);

                                    // Display recipient IDs and additional details in grid format
                                    echo "<div class='grid-container'>";
                                    while ($row = $result->fetch_assoc()) {
                                        // Encode the binary image data to base64
                                        $imageData = base64_encode($row['photo']);
                                        echo "<div class='grid-item' id='grid-item-" . $row['id'] . "'>
                    <h3>" . htmlspecialchars($row['firstName']) . "</h3>
                    <div class='row'>
                        <div class='image-container'>";
                                        // Check if the image data is not empty before displaying the image
                                        if (!empty($imageData)) {
                                            echo "<img src='data:image/jpeg;base64," . $imageData . "' alt='User Photo' />";
                                        } else {
                                            echo "<p>No photo available.</p>";
                                        }
                                        echo "</div>
                        <div class='column'>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['id']) . "</td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['age_from']) . "</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['gender']) . "</td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['maritalStatus']) . "</td>
                                </tr>
                                <tr>
                                    <th>Religion</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['religion']) . "</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['par_occupation']) . "</td>
                                </tr>
                            </table>
                        </div>
                        <div class='column'>
                            <table>
                                <tr>
                                    <th>Caste</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['caste']) . "</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['highestEducation']) . "</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['inputState']) . "</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['inputCountry']) . "</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>:</td>
                                    <td>" . htmlspecialchars($row['inputCity']) . "</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                     <div class='button-container'>
                    <a href='#' class='message' onclick='openPopup(" . $row['id'] . ")'><i class='fas fa-envelope'></i> Send Message</a>
                    <a href='#' class='shortlist' onclick='unShortlist(" . $row['id'] . ")'><i class='fas fa-star'></i> Un Shortlist</a>
                </div>
                  </div>";
                                    }
                                    echo "</div>";
                                }


                                $conn->close();
                            }
                            ?>
                            <script>
                                function unShortlist(recipientId) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "unshortlist.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState == 4 && xhr.status == 200) {
                                            alert(xhr.responseText);
                                            // Optionally, you can remove the grid item from the DOM after unshortlisting
                                            var gridItem = document.getElementById('grid-item-' + recipientId);
                                            if (gridItem) {
                                                gridItem.parentNode.removeChild(gridItem);
                                            }
                                        }
                                    };
                                    xhr.send("recipient_id=" + recipientId);
                                }
                            </script>







                            <!-- php -->




                        </div>
                        <!-- right part end -->
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
            <input type="hidden" name="sender_id" id="sender_id" value="1"> <!-- Assuming sender_id is 1 for testing -->
            <input type="hidden" name="receiver_id" id="receiver_id">
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            <button class="sbtn" type="button" onclick="sendMessage()">Send</button>
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


<!-- end -->