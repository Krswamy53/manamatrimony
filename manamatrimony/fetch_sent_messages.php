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
    <title>Out Box Messages</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        .message {
            margin-bottom: 10px;
        }

        .full-message {
            display: none;
        }

        .full-message {
            /*            display: none;*/
        }

        .message {
            margin-bottom: 20px;
            /*            border: solid 2px;*/
        }

        textarea {
            height: 50px;
            width: 800px;
            border-radius: 10px;
        }

        .reply-btn {
            padding: 12px 18px;
            width: 200px;
            border-radius: 10px;
            text-align: center;
            margin-left: 300px;
            background-color: orangered;
            color: white;
        }

        .reply-btn:hover {
            background-color: orange;
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

        .message {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            border: solid 2px #E5E4E2;
            border-radius: 2px;
            text-align: left;

            justify-content: space-between;
            width: 900px;
            padding: 10px;
            background-color: #E5E4E2;


        }

        #deleteButton {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #deleteButton:hover {
            background-color: #e60000;
        }


        .checkbox-div {
            flex: 0 0 50px;
        }

        .name-div,
        .date-div,
        .message-div {
            margin-left: 10px;
        }

        .short-message {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            /* Adjust as needed */
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
            width: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            justify-content: space-between;
            margin-bottom: 20px;
            box-sizing: border-box;
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
            margin-left: 50px;
            box-sizing: border-box;
        }

        .letsbtn:hover {
            background-color: orangered;
        }

        .message {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            justify-content: space-between;
        }


        .checkbox-div {
            flex: 0 0 50px;
            text-align: center;
        }


        .name-div {
            flex: 1;
            font-weight: bold;
        }


        .message-div {
            flex: 3;
            padding: 0 10px;
        }


        .date-div {
            flex: 1;
            text-align: right;
        }


        .full-message {
            flex-basis: 100%;
            padding: 10px;
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
            display: none;
        }

        .reply-btn {
            margin-top: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            padding: 10px;
            box-sizing: border-box;
        }

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

        @media screen and (max-width: 1200px) {

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
                flex-direction: column;
            }

            .left,
            .spot {
                width: calc(100% - 20px);
                margin-left: 15px;
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

            .message {
                width: 300px;
                margin-left: 30px;
                flex-direction: column;
                text-align: left;
            }
        }
    </style>
    <style>

    </style>
    <style>

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
            <h2>Your Outbox</h2>
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





                <!-- <div class="one">
                <div class="me">

                </div>
                <a href=""> Inbox</a>
                <hr>
                <a href="">Out Box</a>
            </div> -->


                <div class="one">
                    <div class="me">
                        <p>Message</p>

                    </div>
                    <a href="message.php"> Inbox</a>
                    <hr>
                    <a href="fetch_sent_messages.php" id="outbox-link">Out Box</a>
                </div>




            </div>



            <!-- left part end  -->
            <!-- right side part start -->
            <div class="right">
                <hr>
                <div class="">
                    <div class="col-lg-12 mt-3">




                    </div>
                    <?php
                    if (isset($_SESSION['id'])) {
                        // Database connection details
                        include 'db.php';


                        $user_id = $_SESSION['id'];

                        // Query to fetch sent messages, recipient IDs, and recipient names
                        $sql = "SELECT m.id, m.message, m.receiver_id, up.firstName AS recipient_name, DATE(m.DandT) AS sent_date 
            FROM messaging m
            JOIN user_profiles up ON m.receiver_id = up.id
            WHERE m.sender_id = ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt) {
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                echo '<form id="messageForm" method="post" action="delete_selected_messages.php">';
                                while ($row = $result->fetch_assoc()) {
                                    $message = htmlspecialchars($row['message']);
                                    $short_message = substr($message, 0, 50);
                                    $message_id = $row['id'];
                                    $recipient_name = htmlspecialchars($row['recipient_name']);
                                    $sent_date = $row['sent_date']; // Fetching the date portion of DandT column value
                                    echo '<div class="message">';
                                    echo "<div class='checkbox-div'><input type='checkbox' name='selected_messages[]' value='$message_id' class='message-checkbox'></div>";
                                    echo "<div class='name-div'><strong>$recipient_name</strong></div>";

                                    echo "<div class='message-div'><span class='short-message'>$short_message</span></div>";
                                    echo "<div class='date-div'><strong>$sent_date</strong></div>";
                                    //                echo "<a href='#' class='read-more' data-id='$message_id'>Read More</a>";
                                    echo "<div class='full-message' id='message-$message_id' style='display:none;'>
                        <p>$message</p>
                        <textarea placeholder='Type your reply...'></textarea><hr>
                        <button class='reply-btn' data-id='$message_id'>Reply</button>
                      </div>";
                                    echo "</div>";
                                }
                                echo '<button type="submit" id="deleteButton" style="display:none;">Delete Selected Messages</button>';
                                echo '</form>';
                            } else {
                                echo "No sent messages found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Error in preparing statement: " . $conn->error;
                        }

                        $conn->close();
                    } else {
                        echo "You are not logged in.";
                    }
                    ?>



                    <script>
                        document.addEventListener('DOMContentLoaded', (event) => {
                            const checkboxes = document.querySelectorAll('.message-checkbox');
                            const deleteButton = document.getElementById('deleteButton');

                            checkboxes.forEach(checkbox => {
                                checkbox.addEventListener('change', () => {
                                    const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
                                    deleteButton.style.display = anyChecked ? 'block' : 'none';
                                });
                            });
                        });
                    </script>


                </div>

                <script>
                    document.getElementById('outbox-link').addEventListener('click', function (event) {
                        event.preventDefault();

                        fetch('fetch_sent_messages.php')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('messages-container').innerHTML = data;

                                document.querySelectorAll('.read-more').forEach(function (button) {
                                    button.addEventListener('click', function () {
                                        const messageId = this.getAttribute('data-id');
                                        const fullMessage = document.getElementById('message-' + messageId);
                                        fullMessage.style.display = fullMessage.style.display === 'none' ? 'block' : 'none';
                                    });
                                });
                            })
                            .catch(error => console.error('Error fetching messages:', error));
                    });
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

<!-- end -->