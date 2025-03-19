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
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
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
    margin-right: 300px;
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
        float: right;
        margin-top: auto;
        margin-right: auto;
    }

    .stlp {
        text-align: justify;
        justify-content: justify;


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

        padding-left: auto;

        border-radius: 5px;

    }

    .two {

        margin-top: auto;

    }

    .tw {
        margin-left: auto;
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
        margin-left: auto;

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
    width: 700px;
    margin-top: -400px;
    margin-right: 200px;
    background-color: #FDCDB6;
}

.nav-tabs .nav-link.active {
    background-color: #f8f9fa;
    border-top: 2px solid #28a745;

}

.fh3{
            color:black;
            font-weight:bold;
           text-align:center;
           margin-top:10px;
        
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

        float: right;
        width: auto;
        margin-top: auto;
        margin-right: auto;
        background-color: #FDCDB6;
    }

    .nav-tabs .nav-link.active {
        background-color: #f8f9fa;
        border-top: 2px solid #28a745;

    }

    .fh3{
            color:black;
            font-weight:bold;
           text-align:center;
           margin-top:10px;
        
        }
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
    /* Adjust column width as needed */
    grid-auto-rows: auto;
    grid-gap: 20px;
    width: 60%;
    margin-left: 80px;

    /* Adjust the gap between grid items */
}

/* Grid item */
.grid-item {
    border: 1px solid #ddd;
    /* Border around each grid item */
    padding: 20px;
    background-color: #FFDEB1;
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

.popup h2 {
    margin-top: 0;
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

@media (max-width: 768px) {
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        /* Adjust column width as needed */
        grid-auto-rows: auto;
        grid-gap: 20px;
        width: auto;
        margin-left: 30px;
    }

    /* Grid item */
    .grid-item {
        border: 1px solid #ddd;
        /* Border around each grid item */
        padding: 20px;
        background-color: #FFDEB1;
        position: relative;
        margin-left: 0px;
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
</style>

<!--plus--->


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
<script>
$('.reminder-icon').on('click', function() {
    var receiverId = $(this).data(
        'recipient_id'); // Assuming you have the receiver's ID stored as a data attribute
    var message = "some one show intrest on you";

    // Send AJAX request
    $.ajax({
        url: 'sendreminder.php', // URL of your PHP script
        method: 'POST',
        data: {
            receiver_id: receiverId,
            message: message
        }, // Data to send
        success: function(response) {
            alert(response); // Show success message
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Show error message
        }
    });
});
</script>

<!-- dispaly hover -->

<body>

    <div>
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
                        <br>
                        <div id="dropdownOptions">
                            <a href="interstpending.php" style="color: green;">Interest Received Pending
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i
                                    class="fas fa-chevron-right"></i></a>
                            <hr>
                            <a href="interstaccepted.php" style="color: green;">Interest Received Accepted
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                            <hr>
                            <a href="interstreject.php" style="color: green;">Interest Received Rejected
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                    class="fas fa-chevron-right"></i></a><br><br>
                        </div>
                    </div>
                </div>

                <div class="left">

                    <div class="me ">
                        <a href="expressent.php" style="text-decoration:none;color:white;">Express Interest Sent
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-plus"></i></a>
                    </div>
                    <br>
                    <div class="right">


                        <!-- <ul class="nav nav-tabs"> -->
                        <!-- <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#sent" id="sentInterestBtn"><h3><i class="fas fa-paper-plane"></i> All Sent Interests</h3></a>
        </li> -->
                        <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link" data-toggle="tab" href="#received" id="receivedInterestBtn"> -->
                        <h3 class="fh3">Interst Recived Accepted</h3>
                        </a>
                        </li>
                        </ul>


                        <!-- <div id="received" class="container tab-pane fade "><br> -->

                        <?php
    // Establish database connection
    include 'db.php';

    // Fetch user's gender from the database
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
        $sql = "SELECT gender,caste FROM user_profiles WHERE id = $user_id";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Determine the opposite gender
            $row = $result->fetch_assoc();
            $user_gender = $row["gender"];
            $user_caste = $row["caste"];
            $opposite_gender = ($user_gender == 'male') ? 'female' : 'male';
    
            // Fetch profiles of the opposite gender
            $sql = "SELECT * FROM user_profiles WHERE express='accept'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // Output data of each row in grid view
                echo "<div class='grid-container'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='grid-item' id='grid-item-" . $row["id"] . "'>";
                    echo "<img src='" . $row["photo1_url"] . "' alt='Profile Picture'>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>First Name:</strong> <span style='color:green;'>"   . $row["firstName"] . "</p>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>Last Name:</strong> <span style='color:green;'> " . $row["lastName"] . "</p>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>Date Of Birth:</strong> <span style='color:green;'> " . $row["dob"] . "</p>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>Religion:</strong> <span style='color:green;'> " . $row["religion"] . "</p>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>Caste: </strong> <span style='color:green;'>" . $row["caste"] . "</p>";
                    echo "<p style='font-size: 16px; font-weight: bold;'><strong>Subcaste:</strong> <span style='color:green;'> " . $row["subcaste"] . "</p>";
                    echo "<div style='display: flex; justify-content: space-between; margin-top: 10px;'>";
                    echo "<h4 style='color: green;cursor: pointer'><i class='fa fa-envelope'></i> Send Message</h4>";
                    echo "<div style='display: flex; gap: 20px;'>";
                    echo "<h4 style='color: white; background-color: green; border: 1px solid green; padding: 5px; border-radius: 5px; margin-right: 10px; cursor: pointer' onclick='rejectInterest(" . $row["id"] . ")'><i class='fa-solid fa-times'></i> Reject</h4>";
                    echo "<h4 style='color: white; background-color: salmon; border: 1px solid green; padding: 5px; border-radius: 5px; cursor: pointer;' onclick='deleteItem(" . $row["id"] . ")'><i class='fa fa-trash'></i> Delete</h4>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "0 results";
            }
        } else {
            echo "User not found";
        }
    } else {
        echo "User ID not set";
    }
    $conn->close();
    ?>
                    </div>
                </div>
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
                            <input type="hidden" name="sender_id" id="sender_id" value="1">
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
                <?php include"userfooter.php"; ?>
               

</body>

</html>