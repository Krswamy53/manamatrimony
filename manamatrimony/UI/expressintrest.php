<?php
session_start();
$id = $_SESSION["id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

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

        / box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;/ width: 285px;
        border-radius: 10px;
        padding: 10px;


    }

    .stl {
        text-align: center;


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
        width: 290px;

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
        width:270px;

        border-radius: 5px;
        margin-bottom: 10px;
    }

    .two{
        margin-left:5px;
    }
    .tw{
        margin-left:15px;
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
        
        margin-top:-20px;
        
    }

    .spot {
        background-color: #F0FFFF;
        border: solid 1px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px;
        width: 900px;
        padding: 20px;

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
    width: 37%; 
    margin-top:-300px;
    margin-right:10px;
}

.nav-tabs .nav-link.active {
            background-color: #f8f9fa;
            border-top: 2px solid #28a745;

        }


    /* Grid container */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        /* Adjust column width as needed */
        grid-auto-rows: auto;
        grid-gap: 20px;
        width:100%;
        
        /* Adjust the gap between grid items */
    }

    /* Grid item */
    .grid-item {
        border: 1px solid #ddd;
        /* Border around each grid item */
        padding: 20px;
        background-color: #f9f9f9;
    }

    /* Style for profile picture */
    .grid-item img {
        max-width: 100%;
        height: auto;
    }

    /* Style for profile details */
    .grid-item p {
        margin: 10px 0;
    }

    .sent-interests {
    border: 1px solid #ccc; /* Border color */
    background-color: #f9f9f9; /* Background color */
    padding: 10px; /* Add some padding for spacing */
    margin-bottom: 20px; /* Add margin at the bottom */
   
    margin-right:5px;
}

.sent-interests:hover {
    background-color: #e9e9e9; /* Change background color on hover */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a box shadow on hover */
}


    /* Adjustments for responsiveness */
    @media screen and (max-width: 768px) {
        .grid-container {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            /* Adjust for smaller screens */
        }
    }
    </style>
</head>
<script>
    function toggleDropdown() {
        var dropdownIcon = document.getElementById('dropdownIcon');
        var dropdownOptions = document.getElementById('dropdownOptions');
        
        if (dropdownOptions.style.display === 'none') {
            dropdownOptions.style.display = 'block';
            dropdownIcon.className = 'fas fa-minus';
            dropdownOptions.style.height = 'auto'; // Reset height to auto
        } else {
            dropdownOptions.style.display = 'none';
            dropdownIcon.className = 'fas fa-plus';
            dropdownOptions.style.height = '0'; // Collapse the dropdown
        }
    }

    // Adjust height based on content
    window.addEventListener('resize', function() {
        var dropdownOptions = document.getElementById('dropdownOptions');
        dropdownOptions.style.height = 'auto'; // Reset height to auto
    });
</script>

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
        <h2>All Express Interest</h2>
        <p style="text-align:center;">Here You can see your all Express intersts which you send and Recived<br>
            from members and with left side panel you can access other particular Express Interest.
        </p>
    </div>

    
    <div class="mainn">
        <div class="left">
            <div>
                <div class="me tw">
                    <p><i class="fas fa-star"></i> Express Interest Received</p>

                </div>
            </div>








            <div class="left">
    <div class="one">
        <div class="me" onclick="toggleDropdown()">
            <p>Express Interest Received &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i id="dropdownIcon" class="fas fa-minus"></i></p>
        </div>
        <div id="dropdownOptions" style="display: block;">
            <a href="#" style="color: green;">Interest Received Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-chevron-right"></i></a>
            <hr>
            <a href="#" style="color: green;">Interest Received Accepted &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
            <hr>
            <a href="#" style="color: green;">Interest Received Rejected &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</div>




                <div class="mainn">
                    <div class="left">
                        <div>
                            <div class="me two">
                                <p>Express Interest Sent
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fas fa-plus"></i></p>

                            </div>
                        </div>





                    </div>
                </div>

                <div class="right">
                <div class="sent-interests">
               
    <h2><i class="fas fa-envelope-open"></i> All Received Interests </h2>
        </div>
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shadhi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user's gender from the database
    $user_id = $_SESSION['id'];
    $sql = "SELECT gender FROM user_profiles WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Determine the opposite gender
        $row = $result->fetch_assoc();
        $user_gender = $row["gender"];
        $opposite_gender = ($user_gender == 'male') ? 'female' : 'male';

        // Fetch profiles of the opposite gender
        $sql = "SELECT * FROM user_profiles WHERE gender = '$opposite_gender'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row in grid view
            echo "<div class='grid-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='grid-item'>";
                echo "<img src='" . $row["profile_picture"] . "' alt='Profile Picture'>";
                echo "<p>First Name: " . $row["firstName"] . "</p>";
                echo "<p>Last Name: " . $row["lastName"] . "</p>";
                echo "<p>Date Of Birth: " . $row["dob"] . "</p>";
                echo "<p>Religion: " . $row["religion"] . "</p>";
                echo "<p>Caste: " . $row["caste"] . "</p>";
                echo "<p>Subcaste: " . $row["subcaste"] . "</p>";
                echo "<div style='display: flex; justify-content: space-between; margin-top: 10px;'>";
                echo "<h4 style='color: green;'><i class='fa fa-envelope'></i> Send Message</h4>";
                echo "<div style='display: flex; gap: 20px;'>";
                echo "<h4 style='color: white; background-color: green; border: 1px solid green; padding: 5px; border-radius: 5px; margin-right: 10px;'><i class='fa fa-bell'></i> Reminder</h4>";
                echo "<h4 style='color: white; background-color: salmon; border: 1px solid green; padding: 5px; border-radius: 5px;'><i class='fa fa-trash'></i> Delete</h4>";
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
    $conn->close();
    ?>
</div>

<div class="right">
<div class="sent-interests">
    <h2><i class="fas fa-paper-plane"></i> All Sent Interests</h2>
</div>
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shadhi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user's gender from the database
    $user_id = $_SESSION['id'];
    $sql = "SELECT gender FROM user_profiles WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Determine the opposite gender
        $row = $result->fetch_assoc();
        $user_gender = $row["gender"];
        $opposite_gender = ($user_gender == 'male') ? 'female' : 'male';

        // Fetch profiles of the opposite gender
        $sql = "SELECT * FROM user_profiles WHERE gender = '$opposite_gender'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row in grid view
            echo "<div class='grid-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='grid-item'>";
                echo "<img src='" . $row["profile_picture"] . "' alt='Profile Picture'>";
                echo "<p>First Name: " . $row["firstName"] . "</p>";
                echo "<p>Last Name: " . $row["lastName"] . "</p>";
                echo "<p>Date Of Birth: " . $row["dob"] . "</p>";
                echo "<p>Religion: " . $row["religion"] . "</p>";
                echo "<p>Caste: " . $row["caste"] . "</p>";
                echo "<p>Subcaste: " . $row["subcaste"] . "</p>";
                echo "<div style='display: flex; justify-content: space-between; margin-top: 10px;'>";
                echo "<h4 style='color: green;'><i class='fa fa-envelope'></i> Send Message</h4>";
                echo "<div style='display: flex; gap: 20px;'>";
                echo "<h4 style='color: white; background-color: green; border: 1px solid green; padding: 5px; border-radius: 5px; margin-right: 10px;'><i class='fa fa-bell'></i> Reminder</h4>";
                echo "<h4 style='color: white; background-color: salmon; border: 1px solid green; padding: 5px; border-radius: 5px;'><i class='fa fa-trash'></i> Delete</h4>";
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
    $conn->close();
    ?>

</div>

</body>

</html>

<!-- nav bar script -->

<!-- end -->