<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Grid</title>
    <style>
         .main-grid {
            position: relative;
            max-width: 960px;
            margin: 0 auto;
            background: url('your-background-image.jpg') center center/cover;/ Replace 'your-background-image.jpg' with your image / padding: 20px;/ Adjust padding as needed / display: flex;
            justify-content: center;
            align-items: center;

        }

        .slider-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 960px;
        }

        .profile-container {
            border: 1px solid #ccc;
            display: flex;
            padding: 10px;
            text-align: center;
            /* margin-left: 100px; */
            margin: 10px;
            width: calc(33.33% - 20px);/ Adjust width for three profiles in a row / box-sizing: border-box;
            background-image: linear-gradient(-225deg, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
            flex-direction: row;/ Updated to display profiles in row direction /
        }

        .profile-container p {
            margin: 0;
            font-weight: bold;
            color: white;
            text-align: left;
            padding: 5px;
            padding-left: 85px;
        }

        .pimage {
            border-radius: 10px;
            width: 250px;
            height: 250px;
        }

        / Styles for Responsive Design / @media screen and (max-width: 767px) {
            .profile-container {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 480px) {
            .profile-container {
                width: calc(100% - 20px);
            }
        }

        .nav-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .nav-buttons button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <div class="uniq">
        <div class="sec-title text-center">
            <span class="title">Introducing Profile </span>
            <h2>Our Groom & Bride</h2>
        </div>

        <div class="main-grid">
            <div class="slider-container">
                <!-- PHP Code to Fetch Profiles -->
                <?php
                // Include database connection
                include 'db.php';

                // Query to fetch female user profiles
                $sql = "SELECT firstName, age_from, inputCountry, photo1_url FROM user_profiles WHERE gender = 'female'";
                $result = $conn->query($sql);

                // Check if any profiles are found
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each profile and display it
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='profile-container'>";
                        echo "<img class='pimage' src='" . $row["photo1_url"] . "' alt='Profile Photo'>";
                        echo "<p>Name&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["firstName"] . "</p>";
                        echo "<p>Age&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["age_from"] . "</p>";
                        echo "<p>Country&nbsp;:&nbsp;&nbsp;" . $row["inputCountry"] . "</p>";
                        echo "<a href='loginform.php' class='view-profile'><button>Explore More</button></a>";
                        echo "</div>";
                    }
                } else {
                    echo "No records found";
                }

                // Close database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
        <div class="nav-buttons">
            <button onclick="prevProfiles()">Previous</button>
            <button onclick="nextProfiles()">Next</button>
        </div>
        <script>
            var slideIndex = 0;
            var profiles = document.getElementsByClassName('profile-container');

            function showProfiles(index) {
                // Hide all profiles
                for (var i = 0; i < profiles.length; i++) {
                    profiles[i].style.display = 'none';
                }
                // Show the selected three profiles
                for (var i = index; i < index + 3 && i < profiles.length; i++) {
                    profiles[i].style.display = 'block';
                }
            }

            function nextProfiles() {
                slideIndex += 3;
                if (slideIndex >= profiles.length) {
                    slideIndex = 0;
                }
                showProfiles(slideIndex);
            }

            function prevProfiles() {
                slideIndex -= 3;
                if (slideIndex < 0) {
                    slideIndex = Math.max(0, profiles.length - (profiles.length % 3 === 0 ? 3 : profiles.length % 3));
                }
                showProfiles(slideIndex);
            }

            // Initial display
            showProfiles(slideIndex);
        </script>
</body>

</html>