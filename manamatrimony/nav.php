<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>User Details</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .navbar-custom {
        overflow: hidden;
        background-color: green;

        background-color: green;

        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar-custom a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown-custom {
        float: left;
        overflow: hidden;
    }

    .dropdown-custom .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .dropdown-custom .dropbtn i {
        margin-left: 8px;
        /* Adjust the space as needed */
    }

    .navbar-custom a:hover,
    .dropdown-custom:hover .dropbtn {
        background-color: orange;
    }

    .dropdown-custom-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-custom-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-custom-content a:hover {
        background-color: gold;
    }

    .dropdown-custom:hover .dropdown-custom-content {
        display: block;
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
        background-color: gold;
    }

    .right-icons .dropdown-custom-content a {
        color: black;
    }

    .navbar-custom .icon {
        display: none;
    }

    @media screen and (max-width: 768px) {

        .navbar-custom a:not(:first-child),
        .dropdown-custom .dropbtn {
            display: none;
        }

        .navbar-custom a.icon {
            float: right;
            display: block;
        }

        .navbar-custom.responsive {
            position: relative;
        }

        .navbar-custom.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .navbar-custom.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .navbar-custom.responsive .dropdown-custom {
            float: none;
        }

        .navbar-custom.responsive .dropdown-custom-content {
            position: relative;
        }

        .navbar-custom.responsive .dropdown-custom .dropbtn {
            display: block;
            width: 80%;
            text-align: left;
        }

        .navbar-custom.responsive .dropdown-custom-content a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    .navbar-custom a.active,
    .dropdown-custom .dropbtn.active {
        background-color: darkorange;
        /* Active link color */
        color: white;
    }

    .table-container {
        display: table;
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table-row {
        display: table-row;
        border-bottom: 1px solid #ddd;
    }

    .table-cell {
        display: table-cell;
        padding: 10px;
        vertical-align: top;
    }

    .photo-cell img {
        width: 100px;
        height: auto;
        border-radius: 50%;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .action-buttons h6 {
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 5px;
        color: white;
    }

    .navbar-custom a.active,
    .dropdown-custom .dropbtn.active {
        background-color: darkorange;
        /* Change to your preferred active color */
        color: white;
    }
    .leftside{
        margin-left: -100px;
    }
    </style>
</head>

<body>
    <div class="navbar-custom" id="navbar">
        <a href="userhome.php" id="home">My Home</a>
        <a href="userprofile.php" id="profile">View Profile</a>
        <a href="message.php" id="messages">Messages</a>


        <div class="dropdown-custom">
            <button class="dropbtn" id="membership">Membership <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-custom-content">
                <a href="memberships.php">Membership Plans</a>
                <a href="currentmembership.php">Current Plan</a>
            </div>
        </div>
        <div class="dropdown-custom">
            <button class="dropbtn" id="profile-details">Profile Details <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-custom-content">
                <a href="shortlist.php?action=shortlist">Shortlisted Profiles</a>
                <a href="#">Blocklisted Profiles</a>
            </div>
        </div>
        <div class="dropdown-custom">
            <button class="dropbtn" id="search">Search <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-custom-content">
                <a href="userquicksearch.php">Quick Search</a>
                <a href="userbasicsearch.php">Basic Search</a>
                <a href="useradvancesearch.php">Advance Search</a>
                <a href="userlocationsearch.php">Location Search</a>
                <a href="useroccupationsearch.php">Occupation Search</a>
            </div>
        </div>
        <?php
include 'db.php'; // Database connection

$notifications = [];

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    // Fetch the latest 4 messages where the logged-in user is the receiver
    $sql = "SELECT sender_id, message, DandT FROM messaging 
            WHERE receiver_id = ? 
            ORDER BY DandT DESC 
            LIMIT 4";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
    $stmt->close();
}
$conn->close();
?>

        <div class="right-icons">
    <div class="dropdown-custom">
        <button class="dropbtn" id="notifications">
            <i class="fa fa-bell"></i>
            <?php if (count($notifications) > 0): ?>
                <span class="badge"><?php echo count($notifications); ?></span>
            <?php endif; ?>
        </button>
        <div class="dropdown-custom-content leftside">
            <?php if (!empty($notifications)): ?>
                <?php foreach ($notifications as $notif): ?>
                    <a href="message.php">
                        <strong>From User <?php echo $notif['sender_id']; ?>:</strong>
                        <?php echo htmlspecialchars($notif['message']); ?>
                        <br><small><?php echo $notif['DandT']; ?></small>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <a href="#">No new messages</a>
            <?php endif; ?>
        </div>
    </div>
</div>

        <?php
include 'db.php'; // Database connection

$profileImage = "uploads/default-profile.png"; // Default profile image

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    // Fetch user profile image from the database
    $sql = "SELECT photo1_url FROM user_profiles WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (!empty($row['photo1_url'])) {
            $profileImage = $row['photo1_url']; // Use stored path directly
        }
    }
    $stmt->close();
}
$conn->close();
?>

        <div class="right-icons">
            <div class="dropdown-custom dropbtn" id="settings">


                <img src="<?php echo htmlspecialchars($profileImage); ?>" alt="Profile"
                    style="margin-top: 11px; width: 25px; height: 25px; border-radius: 50%; overflow: hidden; display: flex; align-items: center; justify-content: center;">




                <div class="dropdown-custom-content">
                    <a href="accountsettings.php"> <?php
if (isset($_SESSION['firstName'])) {
    echo '<div class="name-id">' . $_SESSION['firstName'] . ':<span class="id"><strong>SL</strong>' . $_SESSION['id'] . '</span></div>';
}?></a>
                  <a href=""><?php if (isset($_SESSION['payment'])) {
    echo '<div class="membership-payment">Enrollment: <span class="pay">' . $_SESSION['payment'] . '</span></div>';
}
?></a>
                    <a href="photoprivacy.php">Photo Privacy</a>
                    <a href="contactprivacy.php">Contact View</a>
                    <a href="userchangepassword.php">Change Password</a>

                    <a href="loginform.php">Logout</a>
                </div>

            </div>
        </div>






        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
    function toggleNavbar() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar-custom") {
            x.className += " responsive";
        } else {
            x.className = "navbar-custom";
        }
    }

    function setActiveNav() {
        var currentPath = window.location.pathname.split("/").pop();
        var navLinks = {
            "userhome.php": "home",
            "userprofile.php": "profile",
            "message.php": "messages",
            // "expressintrest.php": "interest",
            "userquicksearch.php": "search",
            "userbasicsearch.php": "search",
            "useradvancesearch.php": "search",
            "userlocationsearch.php": "search",
            "useroccupationsearch.php": "search",
            "photoprivacy.php": "settings",
            "contactprivacy.php": "settings",
            "userchangepassword.php": "settings",
            "loginform.php": "settings",
            "shortlist.php": "profile-details"
        };

        if (navLinks[currentPath]) {
            document.getElementById(navLinks[currentPath]).classList.add("active");
        }
    }

    document.addEventListener("DOMContentLoaded", setActiveNav);
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>