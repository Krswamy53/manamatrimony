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
    <title>Message</title>
    <style>
         .full-message {
            display: none;
        }

        .message {
            margin-bottom: 20px;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        .message {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #f9f9f9;
    width:900px;
    justify-content:space-between;
}

.message strong {
    color: #333;
}

.short-message {
    display: inline-block;
    margin-right: 10px;
}

.read-more {
    color: #007bff;
    cursor: pointer;
    text-decoration: none;
}

.read-more:hover {
    text-decoration: underline;
}

.full-message {
    margin-top: 10px;
}

textarea {
    width: 100%;
    padding: 5px;
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    
}

.reply-btn {
    display: flex;
    align-items: center;
    background-color: green;
    color: #fff;
    border: none;
    padding: 10px 15px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
   margin-left:700px;
    
    
}
.reply-btn::before {
    content: "\1F4E8"; /* Unicode for mail icon */
    display: inline-block;
    margin-right: 5px;
}

.reply-btn:hover {
    background-color: orangered;
}
.read-less {
        background-color: green;
        border: 1px solid #ccc;
        color: white;
        padding: 5px 10px;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
        margin-top: 5px;
        display: none; /* Initially hidden */
        border-radius:10px;
    }

    .read-less:hover {
        background-color: orangered;
    }
/* .read-more{
    background-color: blue;
        border: 1px solid #ccc;
        color: white;
        padding: 5px 10px;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
        margin-top: 5px;
        display: none;
        border-radius:10px;
}
.read-more:hover {
        background-color: orangered;
    } */


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
            background-color: grey;
            color: white;
        }
        .read-more{
            text-decoration: none;
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

        .reply-btn:hover {
            background-color: orange;
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
            .message{
                width:300px;
                margin-left:30px;
            }
            textarea{
                width:250px;
            }
            .reply-btn{
                margin-left:30px;
            }
            .count{
                margin-left:30px;
            }
        }
    </style>
    <style>
       
    </style>
</head>

<body>
    <style>
       


    </style>

    <div class="userr">

        <div>

            <?php

            // include 'pro.php';s
            ?>


            <?php include ("nav.php") ?>
        </div>
        <!-- nav bar end -->
        <!-- content start -->
        <br><br><br>
        <div class="stl">
            <h2>Your Inbox</h2>
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





                


                <?php
include("db.php"); // Include your DB connection file

$inboxCount = 0;
$outboxCount = 0;

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id']; // Get logged-in user ID

    // Count Inbox Messages (Received messages)
    $inboxQuery = "SELECT COUNT(*) as inbox_count FROM messaging WHERE receiver_id = ?";
    $stmt = $conn->prepare($inboxQuery);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($inboxCount);
    $stmt->fetch();
    $stmt->close();

    // Count Outbox Messages (Sent messages)
    $outboxQuery = "SELECT COUNT(*) as outbox_count FROM messaging WHERE sender_id = ?";
    $stmt = $conn->prepare($outboxQuery);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($outboxCount);
    $stmt->fetch();
    $stmt->close();
}
?>

<!-- Updated HTML Structure with Dynamic Counts -->
<div class="one">
    <div class="me">
        <p>Message</p>
    </div>
    <a href="message.php">Inbox (<?php echo $inboxCount; ?>)</a>
    <hr>
    <a href="fetch_sent_messages.php">Outbox (<?php echo $outboxCount; ?>)</a>
</div>








            </div>



            <!-- left part end  -->
            <!-- right side part start -->
             <br>
            <div class="right">
                <hr>
                <div class="">
                    <div class="col-lg-12 mt-3">




                    </div>

                    <?php

                    if (isset($_SESSION['id'])) {
                        // Connect to your database
                        include 'db.php';

                        $user_id = $_SESSION['id'];

                        // Query to count messages for the user
                        $count_sql = "SELECT COUNT(*) AS message_count FROM messaging WHERE receiver_id = ?";
                        $count_stmt = $conn->prepare($count_sql);
                        if ($count_stmt) {
                            $count_stmt->bind_param("i", $user_id);
                            $count_stmt->execute();
                            $count_stmt->bind_result($message_count);
                            $count_stmt->fetch();
                            $count_stmt->close();
                        } else {
                            echo "Error in preparing statement: " . $conn->error;
                        }

                        $conn->close();
                    } else {
                        $message_count = 0;
                    }
                    ?>

<div class="count">
                    <?php
                    if (isset($_SESSION['id'])) {
                        echo "<a href='inboxex.php'>Inbox (" . $message_count . ")</a>";
                    }
                    ?>
                    </div>
                   <div id="messages">
    <?php
    if (isset($_SESSION['id'])) {
        // Database connection details
        include 'db.php';

        $user_id = $_SESSION['id'];

        // Query to fetch messages, sender IDs, and sender names
        $sql = "SELECT m.id, m.message, m.sender_id, up.firstName AS sender_name 
                FROM messaging m
                JOIN user_profiles up ON m.sender_id = up.id
                WHERE m.receiver_id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $message = htmlspecialchars($row['message']);
                    $short_message = substr($message, 0, 50);
                    $message_id = $row['id'];
                    $sender_name = htmlspecialchars($row['sender_name']);
                    echo '<div class="message">';
                    echo "<strong>$sender_name</strong>: <span class='short-message'>$short_message...</span> ";
                    echo "<a href='#' class='read-more' data-id='$message_id'>Read More</a>";
                    echo "<button class='read-less' style='display:none;' data-id='$message_id'>Read Less</button>";
                    echo "<div class='full-message' id='message-$message_id' style='display:none;'>
                            <p>$message</p>
                            <textarea placeholder='Type your reply...'></textarea>
                            <button class='reply-btn' data-id='$message_id'>Reply</button>
                          </div>";
                    echo "</div>";
                }
            } else {
                echo "No messages found.";
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
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.read-more').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                var messageId = this.getAttribute('data-id');
                document.getElementById('message-' + messageId).style.display = 'block';
                // Show Read Less button
                this.nextElementSibling.style.display = 'inline-block';
                // Hide Read More button
                this.style.display = 'none';
            });
        });

        document.querySelectorAll('.read-less').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                var messageId = this.getAttribute('data-id');
                document.getElementById('message-' + messageId).style.display = 'none';
                // Show Read More button
                this.previousElementSibling.style.display = 'inline-block';
                // Hide Read Less button
                this.style.display = 'none';
            });
        });

        document.querySelectorAll('.reply-btn').forEach(function (element) {
            element.addEventListener('click', function () {
                var messageId = this.getAttribute('data-id');
                var replyText = this.previousElementSibling.value;

                fetch('reply.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'message_id=' + messageId + '&reply=' + encodeURIComponent(replyText)
                })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        this.previousElementSibling.value = '';
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>



                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            document.querySelectorAll('.read-more').forEach(function (element) {
                                element.addEventListener('click', function (e) {
                                    e.preventDefault();
                                    var messageId = this.getAttribute('data-id');
                                    document.getElementById('message-' + messageId).style.display = 'block';
                                });
                            });

                            document.querySelectorAll('.reply-btn').forEach(function (element) {
                                element.addEventListener('click', function () {
                                    var messageId = this.getAttribute('data-id');
                                    var replyText = this.previousElementSibling.value;

                                    fetch('reply.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded'
                                        },
                                        body: 'message_id=' + messageId + '&reply=' + encodeURIComponent(replyText)
                                    })
                                        .then(response => response.text())
                                        .then(data => {
                                            alert(data);
                                            this.previousElementSibling.value = '';
                                        })
                                        .catch(error => console.error('Error:', error));
                                });
                            });
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
<script>
    
</script>