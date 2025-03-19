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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-XYZ=" crossorigin="anonymous" />

    <title>Document</title>
    <style>
    .profile-details {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }

    .profile-column {
        flex: 1;
        padding: 10px;
        /* border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
    }

    .profile-field {
        margin-bottom: 20px;
    }

    .strong {
        display: inline-block;
        width: 120px;
    }

    .marriage-pref {
        white-space: nowrap;
    }



    body {
        margin: 0;
        padding: 0;

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
    }

    .right-icons {
        float: right;
        margin-right: 50px;

    }

    .stl {
        text-align: center;
    }

    .stl h2 {
        color: orangered
    }

    .stl p {
        margin-top: -5px;
        color: #0000FF;

    }

    .spot {
        background-color: #FFFDD0;
        border: solid 1px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px;
        width: 50px;
        height: 40px;
        padding: 10px;
        margin: 20px;
        margin-left: 200px;

    }

    /* Adjustments for the icons */
    .right-icons a {
        padding: 14px 16px;
        color: white;
        text-decoration: none;
    }

    .right-icons a:hover {
        background-color: orange;
    }

    .column {
        flex: 1 1 25%;
        padding: 10px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .img {
        max-width: 100%;

        display: block;
        margin: 0 auto;
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
        padding: 12px 16px;
        text-decoration: none;
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
        padding: 10px;
    }

    .left {

        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        width: 299px;
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
        width: 278px;


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
        background-color: LemonChiffon;
        border: solid 1px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px;
        width: 920px;
        padding: 10px;
        margin-left: 200px;
        text-align: center;

    }


    .right {

        margin-top: 10px;
    }




    form {
        max-width: 400px;
        margin: 0 auto;
    }


    label {
        display: block;
        margin-bottom: 5px;
    }

    .cross-button {
        cursor: pointer;
        color: LemonChiffon;
        position: absolute;
        top: 50%;
        right: 215px;
        margin-top: -28px;
        transform: translateY(-50%);
        background-color: grey;
        padding: 5px;
        border-radius: 69%;
        display: flex;
        font-size: 11px;
        margin-right: 20px;
        justify-content: center;
        align-items: center;

    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }


    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }


    button:hover {
        background-color: #45a049;
    }

    .right {
        width: 80%;
        box-sizing: border-box;
        padding: 30px;
        margin-top: -10px;
    }



    .member-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: green;
    }

    .member-info a {
        text-decoration: none;
    }

    .member-info.basic-details {
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: green;
        background-color: wheat;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 8px 0px;
    }

    .partner-preferences {
        color: white;
        padding: 10px;
        background-color: green;
        text-align: center;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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
            margin-left: 0;
            text-align: center;
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

    @media screen and (min-width: 480px) and (max-width: 968px) {

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
            flex-direction: row;
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

    /* Responsive styles */
    @media only screen and (max-width: 768px) {

        /* Adjust container width for smaller screens */
        .right {
            width: 100%;
            padding: 0 15px;
        }

        /* Make profile columns stack on top of each other */
        .profile-column {
            width: 100%;
        }

        .spot {
            display: none;
            /* Hide the spot element */
        }

        .one {
            margin: auto;
        }
    }

    .leftside {
        margin-left: -250px;
    }

    .column_rightside {
        margin-left: 85px;
    }
    </style>
</head>

<body>
    <script>
    function closeSpot() {
        var spot = document.querySelector('.spot');
        spot.style.display = 'none'; // Hide the spot div
    }
    </script>
    <div>
        <?php

        // include 'pro.php';
        ?>

        <?php

        include 'nav.php';
        ?>
    </div>
    <br><br><br>
    <!-- nav bar end -->
    <!-- content start -->
    <div class="stl">
        <h2>My Profile</h2>
        <p>This is your profile details which you add which you can view details and you can edit your details from
            here.
        </p>

    </div>
    <!-- <div class="spot">
        <p>Edit your profile details is very easy. Just click the right pencil button (<i style="color:red" class="fa fa-pencil"></i>) and here you go. You can edit your profile details.</p>
        <span class="cross-button" onclick="closeSpot()"><i class="fa fa-times"></i></span>
    </div> -->
    <!-- <a href="download_user.php" class="btn btn-primary" style="margin-top:10px;">Download User Details</a> -->

    <div class="mainn">
        <div class="left">
            <div class="one">
                <div class="me">
                    <?php
                    // Database connection
                    include 'db.php';

                    // Fetch photo from the database
                    $sql = "SELECT photo1_url FROM user_profiles WHERE id = '$id'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Display image
                            echo "<img src='{$row['photo1_url']}' alt='Profile Picture' height='150px' width='150px'/>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </div>
                <a href="userchangeprofilepicture.php"> change profile picture</a>
                <!-- <hr>
                <a href="">Out Box</a> -->
            </div>


            <div class="one">
                <br>
                <a href=""><i class="fa fa-send-o" style="font-size:23px"></i> Send Message</a>
                <hr>
                <a href="viewphotos.php"><i class="fa fa-image" style="font-size:23px"></i></i> View Photos</a>
                <hr>
                <a href="download_user.php">
                    <i class="fas fa-download" style="font-size:23px"></i> Profile Download
                </a>

            </div>







            <?php
include("db.php"); // Include your DB connection file

$inboxCount = 0;
$outboxCount = 0;

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id']; // Logged-in user ID

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

            <!-- HTML Structure -->
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
                    <p>Interest</p>

                </div>
                <a href="expressintrest.php"> Received</a>
                <hr>
                <a href="expressintrest.php">Sent</a>

            </div>

            <!-- <div class="one"> -->
            <!-- <div class="me">
                    <p>Photo Request</p>

                </div>
                <a href=""> Received</a>
                <hr>
                <a href="">Sent</a> -->
            <!-- </div> -->


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
            <div class="rightone">
                <div class="rightme">
                    <div class="col-md-12">
                        <div class="member-info basic-details">
                            <span>
                                <i class="fas fa-file-alt"></i> Basic Details
                            </span>

                            <a href="#" id="editProfile" style="text-decoration: none;">
                                <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                            </a>
                        </div>
                    </div>

                    <?php
        include 'db.php';
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];

            $sql = "SELECT * FROM user_profiles WHERE id = '$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user_profile = $result->fetch_assoc();
            } else {
                echo "No user found with ID: $id";
            }
        }
        ?>

                    <form id="editProfileForm">
                        <div class="profile-details">
                            <div class="profile-column leftside">
                                <div class="profile-field">
                                    <strong class="strong">First Name:</strong>
                                    <span class="view-mode"><?php echo $user_profile['firstName']; ?></span>
                                    <input type="text" class="edit-mode" name="firstName"
                                        value="<?php echo $user_profile['firstName']; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">Last Name:</strong>
                                    <span class="view-mode"><?php echo $user_profile['lastName']; ?></span>
                                    <input type="text" class="edit-mode" name="lastName"
                                        value="<?php echo $user_profile['lastName']; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">Email:</strong>
                                    <span class="view-mode"><?php echo $user_profile['email']; ?></span>
                                    <input type="email" class="edit-mode" name="email"
                                        value="<?php echo $user_profile['email']; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">Gender:</strong>
                                    <span
                                        class="view-mode"><?php echo $user_profile['gender'] ?? 'Not specified'; ?></span>
                                    <select class="edit-mode" name="gender" style="display:none;">
                                        <option value="Male"
                                            <?php echo ($user_profile['gender'] == 'Male') ? 'selected' : ''; ?>>Male
                                        </option>
                                        <option value="Female"
                                            <?php echo ($user_profile['gender'] == 'Female') ? 'selected' : ''; ?>>
                                            Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="profile-column column_rightside">
                                <div class="profile-field">
                                    <strong class="strong">Mobile:</strong>
                                    <span class="view-mode"><?php echo $user_profile['mobile']; ?></span>
                                    <input type="text" class="edit-mode" name="mobile"
                                        value="<?php echo $user_profile['mobile']; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">DOB:</strong>
                                    <span class="view-mode"><?php echo $user_profile['dob']; ?></span>
                                    <input type="date" class="edit-mode" name="dob"
                                        value="<?php echo $user_profile['dob']; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">Mother Tongue:</strong>
                                    <span class="view-mode"><?php echo $user_profile['mother'] ?? ''; ?></span>
                                    <input type="text" class="edit-mode" name="mother"
                                        value="<?php echo $user_profile['mother'] ?? ''; ?>" style="display:none;">
                                </div>
                                <div class="profile-field">
                                    <strong class="strong">Marital Status:</strong>
                                    <span class="view-mode"><?php echo $user_profile['maritalStatus'] ?? ''; ?></span>
                                    <select class="edit-mode" name="maritalStatus" style="display:none;">
                                        <option value="Single"
                                            <?php echo ($user_profile['maritalStatus'] == 'Single') ? 'selected' : ''; ?>>
                                            Single</option>
                                        <option value="Married"
                                            <?php echo ($user_profile['maritalStatus'] == 'Married') ? 'selected' : ''; ?>>
                                            Married</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="editButtons" style="display:none; margin-top:10px;">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" id="cancelEdit" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
            document.getElementById("editProfile").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode").forEach(el => el.style.display = "inline-block");
                document.getElementById("editButtons").style.display = "block";
            });

            document.getElementById("cancelEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode").forEach(el => el.style.display = "none");
                document.getElementById("editButtons").style.display = "none";
            });

            document.getElementById("editProfileForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_profile.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>





            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-book"></i> Religion Information
                        </span>
                        <a href="#" id="editReligionInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="religionInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Religion:</strong>
                                <span class="view-mode-religion"><?php echo $user_profile['religion']; ?></span>
                                <input type="text" name="religion" class="edit-mode-religion form-control"
                                    value="<?php echo $user_profile['religion']; ?>" style="display: none;">
                            </div>
                            <div class="profile-field">
                                <strong class="strong">Caste:</strong>
                                <span class="view-mode-religion"><?php echo $user_profile['caste']; ?></span>
                                <input type="text" name="caste" class="edit-mode-religion form-control"
                                    value="<?php echo $user_profile['caste']; ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Subcaste:</strong>
                                <span class="view-mode-religion"><?php echo $user_profile['subcaste']; ?></span>
                                <input type="text" name="subcaste" class="edit-mode-religion form-control"
                                    value="<?php echo $user_profile['subcaste']; ?>" style="display: none;">
                            </div>
                            <div class="profile-field">
                                <strong class="strong">Willing To Marry Other Caste:</strong>
                                <span
                                    class="view-mode-religion"><?php echo $user_profile['willingToMarryOtherCaste']; ?></span>
                                <select name="willingToMarryOtherCaste" class="edit-mode-religion form-control"
                                    style="display: none;">
                                    <option value="Yes"
                                        <?php echo ($user_profile['willingToMarryOtherCaste'] == 'Yes') ? 'selected' : ''; ?>>
                                        Yes</option>
                                    <option value="No"
                                        <?php echo ($user_profile['willingToMarryOtherCaste'] == 'No') ? 'selected' : ''; ?>>
                                        No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="editReligionButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelReligionEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editReligionInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-religion").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-religion").forEach(el => el.style.display =
                    "inline-block");
                document.getElementById("editReligionButtons").style.display = "block";
            });

            document.getElementById("cancelReligionEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-religion").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-religion").forEach(el => el.style.display = "none");
                document.getElementById("editReligionButtons").style.display = "none";
            });

            document.getElementById("religionInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_religion.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>







            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-graduation-cap"></i> Education Information
                        </span>
                        <a href="#" id="editEducationInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="educationInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Highest Education:</strong>
                                <span class="view-mode-education"
                                    style="color: green;"><?php echo $user_profile['highestEducation']; ?></span>
                                <input type="text" name="highestEducation" class="edit-mode-education form-control"
                                    value="<?php echo $user_profile['highestEducation']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Additional Degree:</strong>
                                <span class="view-mode-education"
                                    style="color: green;"><?php echo $user_profile['additionalDegree']; ?></span>
                                <input type="text" name="additionalDegree" class="edit-mode-education form-control"
                                    value="<?php echo $user_profile['additionalDegree']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Employed In:</strong>
                                <span class="view-mode-education"
                                    style="color: green;"><?php echo $user_profile['employedIn']; ?></span>
                                <input type="text" name="employedIn" class="edit-mode-education form-control"
                                    value="<?php echo $user_profile['employedIn']; ?>" style="display: none;">
                            </div><br>
                        </div>
                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Occupation:</strong>
                                <span class="view-mode-education"
                                    style="color: green;"><?php echo $user_profile['occupation']; ?></span>
                                <input type="text" name="occupation" class="edit-mode-education form-control"
                                    value="<?php echo $user_profile['occupation']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Annual Income:</strong>
                                <span class="view-mode-education"
                                    style="color: green;"><?php echo $user_profile['annualIncome']; ?></span>
                                <input type="text" name="annualIncome" class="edit-mode-education form-control"
                                    value="<?php echo $user_profile['annualIncome']; ?>" style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editEducationButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelEducationEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editEducationInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-education").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-education").forEach(el => el.style.display =
                    "inline-block");
                document.getElementById("editEducationButtons").style.display = "block";
            });

            document.getElementById("cancelEducationEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-education").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-education").forEach(el => el.style.display = "none");
                document.getElementById("editEducationButtons").style.display = "none";
            });

            document.getElementById("educationInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_education.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>





            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-users"></i> Family Information
                        </span>
                        <a href="#" id="editFamilyInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="familyInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Family Type:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['familyType']; ?></span>
                                <input type="text" name="familyType" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['familyType']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Family Value:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['familyValue']; ?></span>
                                <input type="text" name="familyValue" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['familyValue']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Family Status:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['familyStatus']; ?></span>
                                <input type="text" name="familyStatus" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['familyStatus']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Father Occupation:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['fatherOccupation']; ?></span>
                                <input type="text" name="fatherOccupation" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['fatherOccupation']; ?>" style="display: none;">
                            </div><br>
                        </div>
                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Mother Occupation:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['motherOccupation']; ?></span>
                                <input type="text" name="motherOccupation" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['motherOccupation']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">No of Brothers:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['numBrothers']; ?></span>
                                <input type="text" name="numBrothers" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['numBrothers']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Married Brothers:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['numMarriedBrothers']; ?></span>
                                <input type="text" name="numMarriedBrothers" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['numMarriedBrothers']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">No of Sisters:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['numSisters']; ?></span>
                                <input type="text" name="numSisters" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['numSisters']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">Married Sisters:</strong>
                                <span class="view-mode-family"
                                    style="color: green;"><?php echo $user_profile['numMarriedSisters']; ?></span>
                                <input type="text" name="numMarriedSisters" class="edit-mode-family form-control"
                                    value="<?php echo $user_profile['numMarriedSisters']; ?>" style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editFamilyButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelFamilyEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editFamilyInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-family").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-family").forEach(el => el.style.display = "inline-block");
                document.getElementById("editFamilyButtons").style.display = "block";
            });

            document.getElementById("cancelFamilyEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-family").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-family").forEach(el => el.style.display = "none");
                document.getElementById("editFamilyButtons").style.display = "none";
            });

            document.getElementById("familyInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_family.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>



            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-map-marker-alt"></i> Location Information
                        </span>
                        <a href="#" id="editLocationInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="locationInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Country:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo $user_profile['inputCountry']; ?></span>
                                <input type="text" name="inputCountry" class="edit-mode-location form-control"
                                    value="<?php echo $user_profile['inputCountry']; ?>" style="display: none;">
                            </div><br>
                            <div class="profile-field">
                                <strong class="strong">State:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo $user_profile['inputState']; ?></span>
                                <input type="text" name="inputState" class="edit-mode-location form-control"
                                    value="<?php echo $user_profile['inputState']; ?>" style="display: none;">
                            </div><br>
                        </div>
                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">City:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo $user_profile['inputCity']; ?></span>
                                <input type="text" name="inputCity" class="edit-mode-location form-control"
                                    value="<?php echo $user_profile['inputCity']; ?>" style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editLocationButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelLocationEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editLocationInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-location").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-location").forEach(el => el.style.display =
                    "inline-block");
                document.getElementById("editLocationButtons").style.display = "block";
            });

            document.getElementById("cancelLocationEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-location").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-location").forEach(el => el.style.display = "none");
                document.getElementById("editLocationButtons").style.display = "none";
            });

            document.getElementById("locationInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_location.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>


            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-heartbeat"></i> Health Information
                        </span>
                        <a href="#" id="editHealthInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="healthInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Smoking Habits:</strong>
                                <span class="view-mode-health"
                                    style="color: green;"><?php echo $user_profile['smokingHabits']; ?></span>
                                <select name="smokingHabits" class="edit-mode-health form-control"
                                    style="display: none;">
                                    <option value="Non-smoker"
                                        <?php if ($user_profile['smokingHabits'] == "Non-smoker") echo "selected"; ?>>
                                        Non-smoker</option>
                                    <option value="Occasional"
                                        <?php if ($user_profile['smokingHabits'] == "Occasional") echo "selected"; ?>>
                                        Occasional</option>
                                    <option value="Regular"
                                        <?php if ($user_profile['smokingHabits'] == "Regular") echo "selected"; ?>>
                                        Regular</option>
                                </select>
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Drinking Habits:</strong>
                                <span class="view-mode-health"
                                    style="color: green;"><?php echo $user_profile['drinkingHabits']; ?></span>
                                <select name="drinkingHabits" class="edit-mode-health form-control"
                                    style="display: none;">
                                    <option value="Non-drinker"
                                        <?php if ($user_profile['drinkingHabits'] == "Non-drinker") echo "selected"; ?>>
                                        Non-drinker</option>
                                    <option value="Occasional"
                                        <?php if ($user_profile['drinkingHabits'] == "Occasional") echo "selected"; ?>>
                                        Occasional</option>
                                    <option value="Regular"
                                        <?php if ($user_profile['drinkingHabits'] == "Regular") echo "selected"; ?>>
                                        Regular</option>
                                </select>
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Diet:</strong>
                                <span class="view-mode-health"
                                    style="color: green;"><?php echo $user_profile['diet']; ?></span>
                                <select name="diet" class="edit-mode-health form-control" style="display: none;">
                                    <option value="Vegetarian"
                                        <?php if ($user_profile['diet'] == "Vegetarian") echo "selected"; ?>>Vegetarian
                                    </option>
                                    <option value="Non-Vegetarian"
                                        <?php if ($user_profile['diet'] == "Non-Vegetarian") echo "selected"; ?>>
                                        Non-Vegetarian</option>
                                    <option value="Vegan"
                                        <?php if ($user_profile['diet'] == "Vegan") echo "selected"; ?>>Vegan</option>
                                </select>
                            </div><br>
                        </div>
                    </div>

                    <div id="editHealthButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelHealthEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editHealthInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-health").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-health").forEach(el => el.style.display = "inline-block");
                document.getElementById("editHealthButtons").style.display = "block";
            });

            document.getElementById("cancelHealthEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-health").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-health").forEach(el => el.style.display = "none");
                document.getElementById("editHealthButtons").style.display = "none";
            });

            document.getElementById("healthInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_health.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>


            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-running"></i> Physical Information
                        </span>
                        <a href="#" id="editPhysicalInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="physicalInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Height:</strong>
                                <span class="view-mode-physical"
                                    style="color: green;"><?php echo $user_profile['height']; ?></span>
                                <input type="text" name="height" class="edit-mode-physical form-control"
                                    value="<?php echo $user_profile['height']; ?>" style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Weight:</strong>
                                <span class="view-mode-physical"
                                    style="color: green;"><?php echo $user_profile['weight']; ?></span>
                                <input type="text" name="weight" class="edit-mode-physical form-control"
                                    value="<?php echo $user_profile['weight']; ?>" style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Body Type:</strong>
                                <span class="view-mode-physical"
                                    style="color: green;"><?php echo $user_profile['bodyType']; ?></span>
                                <select name="bodyType" class="edit-mode-physical form-control" style="display: none;">
                                    <option value="Slim"
                                        <?php if ($user_profile['bodyType'] == "Slim") echo "selected"; ?>>Slim</option>
                                    <option value="Athletic"
                                        <?php if ($user_profile['bodyType'] == "Athletic") echo "selected"; ?>>Athletic
                                    </option>
                                    <option value="Average"
                                        <?php if ($user_profile['bodyType'] == "Average") echo "selected"; ?>>Average
                                    </option>
                                    <option value="Heavy"
                                        <?php if ($user_profile['bodyType'] == "Heavy") echo "selected"; ?>>Heavy
                                    </option>
                                </select>
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Complexion:</strong>
                                <span class="view-mode-physical"
                                    style="color: green;"><?php echo $user_profile['complexion']; ?></span>
                                <select name="complexion" class="edit-mode-physical form-control"
                                    style="display: none;">
                                    <option value="Fair"
                                        <?php if ($user_profile['complexion'] == "Fair") echo "selected"; ?>>Fair
                                    </option>
                                    <option value="Medium"
                                        <?php if ($user_profile['complexion'] == "Medium") echo "selected"; ?>>Medium
                                    </option>
                                    <option value="Dark"
                                        <?php if ($user_profile['complexion'] == "Dark") echo "selected"; ?>>Dark
                                    </option>
                                </select>
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Physical Status:</strong>
                                <span class="view-mode-physical"
                                    style="color: green;"><?php echo $user_profile['physicalStatus']; ?></span>
                                <select name="physicalStatus" class="edit-mode-physical form-control"
                                    style="display: none;">
                                    <option value="Normal"
                                        <?php if ($user_profile['physicalStatus'] == "Normal") echo "selected"; ?>>
                                        Normal</option>
                                    <option value="Disabled"
                                        <?php if ($user_profile['physicalStatus'] == "Disabled") echo "selected"; ?>>
                                        Disabled</option>
                                </select>
                            </div><br>
                        </div>
                    </div>

                    <div id="editPhysicalButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelPhysicalEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editPhysicalInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-physical").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-physical").forEach(el => el.style.display =
                    "inline-block");
                document.getElementById("editPhysicalButtons").style.display = "block";
            });

            document.getElementById("cancelPhysicalEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-physical").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-physical").forEach(el => el.style.display = "none");
                document.getElementById("editPhysicalButtons").style.display = "none";
            });

            document.getElementById("physicalInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_physical.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>



            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-star"></i> Astrological Information
                        </span>
                        <a href="#" id="editAstrologicalInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="astrologicalInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Dosh Type:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['doshType']); ?></span>
                                <input type="text" name="doshType" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['doshType']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Star:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['star']); ?></span>
                                <input type="text" name="star" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['star']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Raasi:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['raasi']); ?></span>
                                <input type="text" name="raasi" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['raasi']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Birth Time:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['birthTime']); ?></span>
                                <input type="text" name="birthTime" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['birthTime']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Birth Place:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['birthPlace']); ?></span>
                                <input type="text" name="birthPlace" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['birthPlace']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editAstrologicalButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelAstrologicalEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editAstrologicalInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-astro").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-astro").forEach(el => el.style.display = "inline-block");
                document.getElementById("editAstrologicalButtons").style.display = "block";
            });

            document.getElementById("cancelAstrologicalEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-astro").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-astro").forEach(el => el.style.display = "none");
                document.getElementById("editAstrologicalButtons").style.display = "none";
            });

            document.getElementById("astrologicalInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_astrological.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>


            <h3 class="partner-preferences">
                <i class="fas fa-heart"></i> PARTNER PREFERENCES
            </h3>
            <br>
            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-info-circle"></i> Basic Information
                        </span>
                        <a href="#" id="editBasicInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="basicInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Marital Status:</strong>
                                <span class="view-mode-basic"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_physical_status']); ?></span>
                                <input type="text" name="par_physical_status" class="edit-mode-basic form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_physical_status']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Height:</strong>
                                <span class="view-mode-basic"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['height_from']); ?></span>
                                <input type="text" name="height_from" class="edit-mode-basic form-control"
                                    value="<?php echo htmlspecialchars($user_profile['height_from']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Smoking Habits:</strong>
                                <span class="view-mode-basic"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_smoking_habits']); ?></span>
                                <input type="text" name="par_smoking_habits" class="edit-mode-basic form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_smoking_habits']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Drinking Habits:</strong>
                                <span class="view-mode-basic"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_drinking_habits']); ?></span>
                                <input type="text" name="par_drinking_habits" class="edit-mode-basic form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_drinking_habits']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Physical Status:</strong>
                                <span class="view-mode-basic"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_physical_status']); ?></span>
                                <input type="text" name="par_physical_status" class="edit-mode-basic form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_physical_status']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editBasicButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelBasicEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editBasicInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-basic").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-basic").forEach(el => el.style.display = "inline-block");
                document.getElementById("editBasicButtons").style.display = "block";
            });

            document.getElementById("cancelBasicEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-basic").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-basic").forEach(el => el.style.display = "none");
                document.getElementById("editBasicButtons").style.display = "none";
            });

            document.getElementById("basicInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_basic.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>




            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-briefcase"></i> Professional Information
                        </span>
                        <a href="#" id="editProfessionalInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="professionalInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Highest Education:</strong>
                                <span class="view-mode-prof"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_education']); ?></span>
                                <input type="text" name="par_education" class="edit-mode-prof form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_education']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Occupation:</strong>
                                <span class="view-mode-prof"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_occupation']); ?></span>
                                <input type="text" name="par_occupation" class="edit-mode-prof form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_occupation']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Annual Income:</strong>
                                <span class="view-mode-prof"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_annualIncomes']); ?></span>
                                <input type="text" name="par_annualIncomes" class="edit-mode-prof form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_annualIncomes']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Employed In:</strong>
                                <span class="view-mode-prof"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['employedIn']); ?></span>
                                <input type="text" name="employedIn" class="edit-mode-prof form-control"
                                    value="<?php echo htmlspecialchars($user_profile['employedIn']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editProfessionalButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelProfessionalEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editProfessionalInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-prof").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-prof").forEach(el => el.style.display = "inline-block");
                document.getElementById("editProfessionalButtons").style.display = "block";
            });

            document.getElementById("cancelProfessionalEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-prof").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-prof").forEach(el => el.style.display = "none");
                document.getElementById("editProfessionalButtons").style.display = "none";
            });

            document.getElementById("professionalInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_professional.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>




            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-star"></i> Family and Astrological Information
                        </span>
                        <a href="#" id="editFamilyAstroInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="familyAstroInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Religion:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_religion']); ?></span>
                                <input type="text" name="par_religion" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_religion']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Caste:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_caste']); ?></span>
                                <input type="text" name="par_caste" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_caste']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Mother Tongue:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_mother_tongue']); ?></span>
                                <input type="text" name="par_mother_tongue" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_mother_tongue']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">Dosh Type:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_doshTypes']); ?></span>
                                <input type="text" name="par_doshTypes" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_doshTypes']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">Star:</strong>
                                <span class="view-mode-astro"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_stars']); ?></span>
                                <input type="text" name="par_stars" class="edit-mode-astro form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_stars']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editFamilyAstroButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelFamilyAstroEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editFamilyAstroInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-astro").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-astro").forEach(el => el.style.display = "inline-block");
                document.getElementById("editFamilyAstroButtons").style.display = "block";
            });

            document.getElementById("cancelFamilyAstroEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-astro").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-astro").forEach(el => el.style.display = "none");
                document.getElementById("editFamilyAstroButtons").style.display = "none";
            });

            document.getElementById("familyAstroInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_family_astro.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>




            <div class="rightme">
                <div class="col-md-12">
                    <div class="member-info basic-details">
                        <span>
                            <i class="fas fa-globe"></i> Location Information
                        </span>
                        <a href="#" id="editLocationInfo" style="text-decoration: none;">
                            <i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Edit
                        </a>
                    </div>
                </div>

                <form id="locationInfoForm">
                    <div class="profile-details">
                        <div class="profile-column leftside">
                            <div class="profile-field">
                                <strong class="strong">Country:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_country_living_in']); ?></span>
                                <input type="text" name="par_country_living_in" class="edit-mode-location form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_country_living_in']); ?>"
                                    style="display: none;">
                            </div><br>

                            <div class="profile-field">
                                <strong class="strong">State:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_state_living_in']); ?></span>
                                <input type="text" name="par_state_living_in" class="edit-mode-location form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_state_living_in']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>

                        <div class="profile-column column_rightside">
                            <div class="profile-field">
                                <strong class="strong">City:</strong>
                                <span class="view-mode-location"
                                    style="color: green;"><?php echo htmlspecialchars($user_profile['par_city_living_in']); ?></span>
                                <input type="text" name="par_city_living_in" class="edit-mode-location form-control"
                                    value="<?php echo htmlspecialchars($user_profile['par_city_living_in']); ?>"
                                    style="display: none;">
                            </div><br>
                        </div>
                    </div>

                    <div id="editLocationButtons" style="display: none; margin-top: 10px;">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="cancelLocationEdit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <script>
            document.getElementById("editLocationInfo").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelectorAll(".view-mode-location").forEach(el => el.style.display = "none");
                document.querySelectorAll(".edit-mode-location").forEach(el => el.style.display =
                    "inline-block");
                document.getElementById("editLocationButtons").style.display = "block";
            });

            document.getElementById("cancelLocationEdit").addEventListener("click", function() {
                document.querySelectorAll(".view-mode-location").forEach(el => el.style.display = "inline");
                document.querySelectorAll(".edit-mode-location").forEach(el => el.style.display = "none");
                document.getElementById("editLocationButtons").style.display = "none";
            });

            document.getElementById("locationInfoForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch("update_locations.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        location.reload();
                    })
                    .catch(error => console.error("Error:", error));
            });
            </script>



            <!-- right part end -->
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