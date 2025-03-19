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

include 'db.php';

// Fetch user data from the database
$sql = "SELECT * FROM user_profiles WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
    $religion = $userData['religion'];
    $caste = $userData['caste'];
    $gender = $userData['gender'];

    // Determine opposite gender for matchmaking
    $oppositeGender = ($gender == 'male') ? 'female' : 'male';

    // Fetch matching profiles excluding shortlisted ones
    $sql = "SELECT * FROM user_profiles 
            WHERE id != ? 
            AND religion = ? 
            AND caste = ? 
            AND gender = ? 
            AND id NOT IN (SELECT recipient_id FROM shortlist WHERE user_id = ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssi", $id, $religion, $caste, $oppositeGender, $id);
    $stmt->execute();
    $matchingProfiles = $stmt->get_result();

    // Close statement
    $stmt->close();
} else {
    echo "User data not found.";
}

// Close database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Userhome</title>
    <style>
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

    /* Style for field names */
    .column p b {
        display: inline-block;
        width: 100px;
        /* Adjust width as needed */
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Style for fetched details */
    .column p {
        margin: 0;
        padding-left: 10px;
        /* Add left padding for details */
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
        width: 315px;
        border-radius: 10px;
        padding: 10px;
        margin-top: -70px;

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
        width: 100%;
        padding: 20px;

    }

    .right {

        margin-top: 10px;
        margin-left: 10px;
    }



    form {
        max-width: 400px;
        margin: 0 auto;
        text-align: right;
        padding: 20px;
    }


    label {
        display: block;
        margin-bottom: 5px;
    }


    input[type="text"] {
        width: 200px;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button[type="submit"] {
        padding: 8px 16px;
        background-color: orangered;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    /* .h2{
            text-align: center;
        } */

    .blurred {
        filter: blur(5px);
    }

    .container {
        width: 90%;
        /* margin: 0 auto; */
        margin-left: -30px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 equal-width columns */
        grid-gap: 20px;
        /* Adjust the gap between grid items */
    }

    .grid-item {
        box-sizing: border-box;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: transform 0.5s ease-in-out;
    }

    .grid-item h3 {
        margin-top: 0;
    }

    .image-container {
        width: 100%;
        /* Set your desired width */
        height: 150px;
        /* Set your desired height */
        overflow: hidden;
        /* Ensure content doesn't overflow */
        display: flex;
        /* Center the image within the container */
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        /* Optional: add a border */
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
        /* Ensure the image covers the container while maintaining aspect ratio */
    }

    .button-container {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    .button-container a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }

    .button-container a.shortlist {
        background-color: #dc3545;
    }

    .button-container a:hover {
        opacity: 0.8;
    }

    .arrow-buttons {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }

    .arrow-buttons button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .arrow-buttons button:hover {
        opacity: 0.8;
    }

    .arrow-buttonss {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
        margin-top: -250px;
    }

    .arrow-buttonss button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .arrow-buttonss button:hover {
        opacity: 0.8;
    }

    .ss {
        margin-left: -60px;
    }

    .sss {
        margin-right: -60px;
    }

    .recently-visited-header {
        background-color: #4CAF50;
        /* Green background */
        color: white;
        /* White text */
        padding: 10px;
        /* Padding */
        border-top-left-radius: 10px;
        /* Rounded top left corner */
        border-top-right-radius: 10px;
        /* Rounded top right corner */
        text-transform: uppercase;
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



    .containers {
        width: 100%;
        margin-top: -90px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .progress-bar {
        background-color: #f39c12;
    }

    .ss {
        margin-top: -100px;
    }

    /* .containerss{
    width: 80%;
    margin-left: 0px;
  
} */
    @media screen and (max-width: 768px) {
        .column {
            flex: 0 0 100%;


        }

        .column p {
            text-align: left;
            margin-left: 60px;

        }
    }

    /* .card {
    width: auto;
    max-width: 100%;
    height: auto;
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
} */

    /* .card-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
} */

    .row {
        display: flex;
        flex-wrap: wrap;
        /* width: 100%; */
    }

    .col-md-8,
    .col-md-4 {
        flex: 1;
        min-width: 200px;
        height: 110px;
        margin-bottom: 10px;

    }

    .progress {
        height: 1px;
        border-radius: 5px;
        background-color: #e9ecef;
        width: 100%;
    }

    .progress-bar {
        height: 100%;
        border-radius: 5px;
        transition: width 0.4s ease-in-out;
    }

    .text-right {
        text-align: right;

    }

    .text-success {
        font-size: 15px;
        text-align: center;

    }

    /* .complete-profile-link {
    display: block;
    text-align: center;
    margin-top: 10px;
} */

    /* Responsive Design */
    @media (max-width: 768px) {
        .card {
            padding: 15px;
            margin: 10px;
        }

        .col-md-8,
        .col-md-4 {
            min-width: 100%;
            text-align: center;
        }

        .text-right {
            text-align: center;
        }
    }
    </style>
</head>

<body>





    <div>
        <?php include 'pro.php'; ?>
        <?php include 'nav.php'; ?>
        <br><br><br><br>
    </div>

    <!-- Content start -->
    <div class="stl"></div>
    <br>
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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Display user information if available -->
                                <?php if (isset($userData) && !empty($userData)): ?>
                                <?php
                        $firstName = $userData['firstName'] ?? ''; // Using the null coalescing operator to handle undefined offsets
                        $lastName = $userData['lastName'] ?? '';

                        // Calculate profile completion percentage
                        $essentialFields = ['firstName', 'lastName', 'dob', 'gender', 'maritalStatus', 'email', 'mobile', 'profileCreatedBy', 'photo1_url'];
                        $optionalFields = ['mother', 'religion', 'caste', 'subcaste', 'familyType', 'familyValue', 'familyStatus', 'fatherOccupation', 'motherOccupation', 'numBrothers', 'numMarriedBrothers', 'numSisters', 'numMarriedSisters', 'inputCountry', 'inputState', 'inputCity', 'diet', 'smokingHabits', 'drinkingHabits', 'height', 'weight', 'bodyType', 'complexion', 'physicalStatus', 'doshType', 'star', 'raasi', 'birthTime', 'additionalInfo', 'birthPlace', 'highestEducation', 'additionalDegree', 'employedIn', 'occupation', 'annualIncome', 'age_from', 'age_to', 'height_from', 'height_to', 'looking_for', 'par_physical_status', 'par_eating_habits', 'par_smoking_habits', 'par_drinking_habits', 'par_religion', 'par_caste', 'par_doshTypes', 'par_mother_tongue', 'par_stars','par_country_living_in', 'par_state_living_in', 'par_city_living_in', 'par_education', 'par_annualIncomes', 'willingToMarryOtherCaste', 'photo2_url', 'photo3_url', 'photo4_url', 'photo5_url', 'photo6_url', 'photo7_url', 'photo8_url'];
                        $totalFields = count($essentialFields) + count($optionalFields);
                        $filledEssentialFields = 0;
                        foreach ($essentialFields as $field) {
                            if (!empty($userData[$field])) {
                                $filledEssentialFields++;
                            }
                        }
                        $filledOptionalFields = 0;
                        foreach ($optionalFields as $field) {
                            if (!empty($userData[$field])) {
                                $filledOptionalFields++;
                            }
                        }
                        $profileCompletion = (($filledEssentialFields + $filledOptionalFields) / $totalFields) * 100;
                        ?>

                                <h6>Hello <strong
                                        class="text-danger"><?php echo $firstName . ' ' . $lastName; ?></strong>
                                    <span class="text-muted">(SL<?php echo $id . ' ' ?>)</span>
                                </h6>
                                <p>Your profile is
                                    <strong><?php echo number_format($profileCompletion, 2); ?>%</strong> complete
                                </p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                        style="width: <?php echo number_format($profileCompletion, 2); ?>%; background-color: orangered;"
                                        aria-valuenow="<?php echo $profileCompletion; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <p class="mt-2 text-muted">Tip: insert all details which can help you to find
                                    perfect life partner</p>
                                <?php if ($profileCompletion < 100): ?>
                                <!-- Show link to complete profile if profile is not 100% complete -->
                                <a href="userprofile.php" class="text-success">Complete Your Profile</a>
                                <?php endif; ?>
                                <?php else: ?>
                                <!-- Display a message if user data is not available -->
                                <p>Sorry, user data is not available.</p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 text-right">
                                <!-- <h5 class="text-muted">RECENT LOGIN</h5> -->
                                <!-- Display recent login information here -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="one">
                <div class="me">
                    <p>Message</p>
                </div>
                <a href="message.php">Inbox</a>
                <hr>
                <a href="fetch_sent_messages.php">Outbox</a>
            </div>

            <div class="one">
                <div class="me">
                    <p>My Profile</p>
                </div>
                <a href="userprofile.php">Edit Profile</a>
                <hr>
                <a href="userprofile.php">Manage Photos</a>
                <hr>
                <a href="userchangeprofilepicture.php">Change Profile Picture</a>
            </div>

            <div class="one">
                <div class="me">
                    <p>Profile Details</p>
                </div>
                <a href="#">Express Interest Received</a>
                <hr>
                <a href="shortlist.php">My Shortlist Profile</a>
                <hr>
                <a href="shortlist.php">My Blocklist Profile</a>
            </div>
        </div>

        <!-- Right side part start -->
        <div class="container mt-3">
            <div class="right">
                <div class="containers">

                </div>
                <br>
                <div class="spot">
                    <form method="POST" action="">
                        <p><b>SEARCH </b><input type="text" name="searchid" required
                                placeholder="Enter id to search "></input>

                            <button type="submit" name="searchsubmit">submit</button>
                        </p>
                    </form>
                    <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['searchsubmit'])) {
                    // Database connection
                    include 'db.php';

                    $id = $_POST['searchid'];
                    // Fetch data from the database
                    $sql = "SELECT * FROM user_profiles WHERE id = '$id'"; // Change the condition according to your requirement
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            // Display profile picture based on privacy setting
                            $profilePicture = ($row['privacy_setting'] == 'visible') ? $row['photo1_url'] : 'placeholder.png';
                            $imgClass = ($row['privacy_setting'] == 'invisible') ? 'blurred' : '';

                            // Display mobile number based on contact_privacy setting
                            $contactPrivacy = $row['contact_privacy'];
                            $mobile = ($contactPrivacy == 'visible') ? $row['mobile'] : '**********';

                            echo '<div class="container">';
                            echo '<div class="row">';

                            echo '<div class="column">';
                            echo "<img src='{$profilePicture}' alt='profile_picture' height='200px' width='200px' class='img {$imgClass}' />";
                            echo '</div>';

                            echo '<div class="column">';
                            echo " <p><b>First Name:</b><span style='color:green'>{$row['firstName']}</span></p>";
                            echo " <p><b>Last Name:</b><span style='color:green'>{$row['lastName']}</span></p>";
                            echo " <p><b>Email:</b><span style='color:green'>{$row['email']}</span></p>";
                            echo " <p><b>DOB:</b><span style='color:green'>{$row['dob']}</span></p>";
                            // Display mobile number based on privacy setting
                            echo "<p><b>Mobile:</b><span style='color:green'>{$mobile}</span></p>";
                            echo '</div>';


                            echo '<div class="column">';
                            echo " <p><b>Religion:</b><span style='color:green'>{$row['religion']}</span></p>";
                            echo " <p><b>Caste:</b><span style='color:green'>{$row['caste']}</span></p>";
                            echo " <p><b>Country:</b><span style='color:green'>{$row['inputCountry']}</span></p>";
                            echo " <p><b>State:</b><span style='color:green'>{$row['inputState']}</span></p>";
                            echo " <p><b>Gender:</b><span style='color:green'>{$row['gender']}</span></p>";
                            echo '</div>';


                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                }
                ?>



                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="recently-visited-header">Shortlist Members</div>
                    </div>
                </div>
                <div class="right">
                    <hr>
                    <div class="arrow-buttons">
                        <button onclick="prevShortlistPage()">&#9664; Previous</button>
                        <button onclick="nextShortlistPage()">Next &#9654;</button>
                    </div>
                    <?php
$id = $_SESSION["id"];
include 'db.php';

// Pagination variables for shortlist
$shortlistLimit = 5; // Number of items per page
$shortlistPage = isset($_GET['shortlistPage']) ? (int)$_GET['shortlistPage'] : 1;
$shortlistOffset = ($shortlistPage - 1) * $shortlistLimit;

// Query with pagination for shortlist
$query = "SELECT * FROM shortlist s INNER JOIN user_profiles up ON s.recipient_id = up.id WHERE s.user_id = ? LIMIT ? OFFSET ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("iii", $id, $shortlistLimit, $shortlistOffset);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<div class='grid-container'>";
    while ($row = $result->fetch_assoc()) {
        $imageData = base64_encode($row['photo']);
        echo "<div class='grid-item' id='grid-item-" . htmlspecialchars($row['id']) . "'>
            <div style='text-align: center;'>
                <h3><span style='color: orangered;'>" . htmlspecialchars($row['firstName'] . ' ' . $row['lastName']) . "</span></h3>
            </div>
            <div class='image-container'>";
        if (!empty($row['photo1_url'])) {
            echo "<img src=\"{$row['photo1_url']}\" alt=\"profile_picture\" />";
        } else if (!empty($imageData)) {
            echo "<img src='data:image/jpeg;base64," . htmlspecialchars($imageData) . "' alt='User Photo' />";
        } else {
            echo "<p>No photo available.</p>";
        }

        echo "</div>
            <div>
                <table>
                    <tr><th>ID</th><td>:</td><td>" . htmlspecialchars($row['id']) . "</td></tr>
                                       
                                     <tr><th>Gender</th><td>:</td><td>" . htmlspecialchars($row['gender']) . "</td></tr>
                                    <tr><th>Caste</th><td>:</td><td>" . htmlspecialchars($row['caste']) . "</td></tr>
                                     <tr><th>Religion</th><td>:</td><td>" . htmlspecialchars($row['religion']) . "</td></tr>
                </table>
            </div>
            <div class='button-container'>
                <a href='javascript:void(0);' onclick='unShortlist(" . htmlspecialchars($row['id']) . ")' class='shortlist'>Remove</a>
            </div>
            </div>";
    }
    echo "</div>";
} else {
    echo "<p>No profiles shortlisted.</p>";
}
?>



                </div>
            </div>
            <div class="containerss mt-3">
                <div class="right">
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="recently-visited-header">Matching Profiles</div>
                        </div>
                    </div>
                    <div class="right">
                        <hr>
                        <div class="arrow-buttons">
                            <button onclick="prevMatchingProfilesPage()">&#9664; Previous</button>
                            <button onclick="nextMatchingProfilesPage()">Next &#9654;</button>
                        </div>
                        <?php
                $sql = "SELECT * FROM user_profiles WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $userData = $result->fetch_assoc();
                    $religion = $userData['religion'];
                    $caste = $userData['caste'];
                    $gender = $userData['gender'];

                    $oppositeGender = ($gender == 'male') ? 'female' : 'male';

                    $matchingLimit = 5; 
                    $matchingPage = isset($_GET['matchingPage']) ? (int)$_GET['matchingPage'] : 1;
                    $matchingOffset = ($matchingPage - 1) * $matchingLimit;

                    // Fetch matching profiles with pagination
                    $sql = "SELECT * FROM user_profiles WHERE id != ? AND religion = ? AND caste = ? AND gender = ? LIMIT ? OFFSET ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("isssii", $id, $religion, $caste, $oppositeGender, $matchingLimit, $matchingOffset);
                    $stmt->execute();
                    $matchingProfiles = $stmt->get_result();

                    if ($matchingProfiles->num_rows > 0) {
                        echo "<div class='grid-container'>";
                        while ($row = $matchingProfiles->fetch_assoc()) {
                            $imageData = base64_encode($row['photo']);
                            echo "<div class='grid-item' id='grid-item-" . htmlspecialchars($row['id']) . "'>
 <h3 style='color: orangered; text-align: center;'>" . htmlspecialchars($row['firstName']) . " " . htmlspecialchars($row['lastName']) . "</h3>                                <div class='image-container'>";
                                if (!empty($row['photo1_url'])) {
                                    echo "<img src=\"{$row['photo1_url']}\" alt=\"profile_picture\" />";
                                } else if (!empty($imageData)) {
                                    echo "<img src='data:image/jpeg;base64," . htmlspecialchars($imageData) . "' alt='User Photo' />";
                                } else {
                                    echo "<p>No photo available.</p>";
                                }
                            echo "</div>
                                <div>
                                    <table>
                                        <tr><th>ID</th><td>:</td><td>" . htmlspecialchars($row['id']) . "</td></tr>
                                        <tr><th>Gender</th><td>:</td><td>" . htmlspecialchars($row['gender']) . "</td></tr>
                                        <tr><th>Caste</th><td>:</td><td>" . htmlspecialchars($row['caste']) . "</td></tr>
                                        <tr><th>Religion</th><td>:</td><td>" . htmlspecialchars($row['religion']) . "</td></tr>

                                        </table>
                                </div>
                               
                            </div>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>No matching profiles found.</p>";
                    }
                
                    // Close statement
                    $stmt->close();
                } else {
                    echo "<p>User data not found.</p>";
                }
                
                // Close database connection
                $conn->close();
                ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function prevShortlistPage() {
            const urlParams = new URLSearchParams(window.location.search);
            let page = parseInt(urlParams.get('shortlistPage')) || 1;
            if (page > 1) {
                urlParams.set('shortlistPage', page - 1);
                window.location.search = urlParams.toString();
            }
        }

        function nextShortlistPage() {
            const urlParams = new URLSearchParams(window.location.search);
            let page = parseInt(urlParams.get('shortlistPage')) || 1;
            urlParams.set('shortlistPage', page + 1);
            window.location.search = urlParams.toString();
        }

        function prevMatchingProfilesPage() {
            const urlParams = new URLSearchParams(window.location.search);
            let page = parseInt(urlParams.get('matchingPage')) || 1;
            if (page > 1) {
                urlParams.set('matchingPage', page - 1);
                window.location.search = urlParams.toString();
            }
        }

        function nextMatchingProfilesPage() {
            const urlParams = new URLSearchParams(window.location.search);
            let page = parseInt(urlParams.get('matchingPage')) || 1;
            urlParams.set('matchingPage', page + 1);
            window.location.search = urlParams.toString();
        }
        </script>


    </div>
    <br>




    <?php include 'userfooter.php'; ?>

    <script>
    let currentPage = 0;
    const itemsPerPage = 4;

    function showPage(page) {
        const items = document.querySelectorAll('.grid-item');
        const totalPages = Math.ceil(items.length / itemsPerPage);
        currentPage = page;

        if (currentPage < 0) currentPage = 0;
        if (currentPage >= totalPages) currentPage = totalPages - 1;

        items.forEach((item, index) => {
            item.style.display = 'none';
            if (index >= currentPage * itemsPerPage && index < (currentPage + 1) * itemsPerPage) {
                item.style.display = 'block';
            }
        });
    }

    function nextPage() {
        showPage(currentPage + 1);
    }

    function prevPage() {
        showPage(currentPage - 1);
    }

    document.addEventListener('DOMContentLoaded', () => {
        showPage(0);
    });

    function unShortlist(recipientId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "unshortlist.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                var gridItem = document.getElementById('grid-item-' + recipientId);
                if (gridItem) {
                    gridItem.parentNode.removeChild(gridItem);
                    showPage(currentPage);
                }
            }
        };
        xhr.send("recipient_id=" + recipientId);
    }
    </script>
</body>

</html>