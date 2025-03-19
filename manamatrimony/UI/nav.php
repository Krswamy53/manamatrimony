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
        }

        .dropdown:hover .dropdown-content {
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

        .right-icons .dropdown-content a {
            color: black;
        }

        .navbar .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child),
            .dropdown .dropbtn,
            .right-icons {
                display: none;
            }

            .navbar a.icon {
                float: right;
                display: block;
            }
        }
        

        @media screen and (max-width: 600px) {
            .navbar.responsive {
                position: relative;
                
            }

            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .navbar.responsive a,
            .navbar.responsive .dropdown .dropbtn,
            .navbar.responsive .right-icons {
                float: none;
                display: block;
                text-align: left;
            }

            .navbar.responsive .dropdown-content {
                position: relative;
            }

            .navbar.responsive .dropdown .dropdown-content {
                display: none;
            }

            .navbar.responsive .dropdown:hover .dropdown-content {
                display: block;
            }
        }
        
    </style>
</head>

<body>
    <div class="navbar" id="myNavbar">
        <a href="userhome.php">My Home</a>
        <a href="userp.php">View Profile</a>
        <a href="#home">Messages</a>
        <a href="expressintrest.php">Express Interest</a>
        <div class="dropdown">
            <button class="dropbtn">Search <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="userquicksearch.php">Quick Search</a>
                <a href="userbasicsearch.php">Basic Search</a>
                <a href="useradvancesearch.php">Advance Search</a>
                <a href="userlocationsearch.php">Location Search</a>
                <a href="useroccupationsearch.php">Occupation Search</a>
                <a href="#">Keyword Search</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Membership <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Membership Plans</a>
                <a href="#">Current Plan</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Profile Details <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Shortlisted Profiles</a>
                <a href="#">Blocklisted Profiles</a>
            </div>
        </div>
        <div class="right-icons">
            <a href="#"><i class="fa fa-bell"></i></a>
        </div>
        <div class="right-icons">
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-cog"></i></button>
                <div class="dropdown-content">
                    <a href="photoprivacy.php" style="color:black;">Photo Privacy</a>
                    <a href="contactprivacy.php" style="color:black;">Contact View</a>
                    <a href="usercp.php" style="color:black;">Change Password</a>
                    <a href="loginform.php" style="color:black;">Logout</a>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
       function toggleNavbar() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}

    </script>
</body>

</html>
