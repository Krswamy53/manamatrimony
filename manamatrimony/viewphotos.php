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
    <title>Document</title>
    <style>
        /* Style for the profile details container */
        .profile-details {
            display: flex;
            /* Use flexbox for layout */
            justify-content: space-between;
            /* Space between columns */
            width: 100%;
            /* Full width */
            max-width: 800px;
            /* Maximum width */
            margin: 0 auto;
            /* Center the container */
            padding: 20px;
            /* Add some padding */
        }

        /* Style for each column */
        .profile-column {
            flex: 0 0 48%;
            /* Each column takes up 48% of the container */
        }

        /* Style for each field */
        .profile-field {
            margin-bottom: 10px;
            /* Add some space between fields */
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
            height: ;
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

            / box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;/ width: 285px;
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
            width: 250px;

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

        .dropdown-content a {}

        .mainn {
            display: flex;
            gap: 30px;
        }

        .spot {
            background-color: LemonChiffon;
            border: solid 1px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            width: auto;
            padding: 20px;
            margin-left: 20px;
            text-align: center;

        }

        .right {

            margin-top: 10px;
        }

        .welcome {
            margin-left: 80%;
            padding: 20px;
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
            right: 45px;
            margin-top: -50px;
            transform: translateY(-50%);
            background-color: grey;
            padding: 10px;
            border-radius: 69%;
            display: flex;
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


        /* .h2{
            text-align: center;
        } */
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
    <!-- nav bar end -->
    <!-- content start -->
    <div class="stl">
        <h2>My Photos</h2>
        <!-- <p>This is your profile detaisl which you add which you can view details and you can edit your details from here -->
        </p>

    </div>
    <!-- <div class="spot">
        <p>Edit your profile details is very easy. Just click the right pencil button (<i style="color:red" class="fa fa-pencil"></i>) and here you go. You can edit your profile details.</p>
        <span class="cross-button" onclick="closeSpot()"><i class="fa fa-times"></i></span>
    </div> -->
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
                <a href="message.php"><i class="fa fa-send-o" style="font-size:26px"></i> Send Message</a>
                <hr>
                <a href="viewphotos.php"><i class="fa fa-image" style="font-size:26px"></i></i> View Photos</a>
            </div>







            <div class="one">
                <div class="me">
                    <p>Message</p>

                </div>
                <a href="message.php"> Inbox</a>
                <hr>
                <a href="fetch_sent_messages.php">Out Box</a>
            </div>



            <div class="one">
                <div class="me">
                    <p>Interest</p>

                </div>
                <a href="expressintrest.php"> Received</a>
                <hr>
                <a href="expressintrest.php">Sent</a>

            </div>

            <!-- <div class="one">
                <div class="me">
                    <p>Photo Request</p>

                </div>
                <a href=""> Received</a>
                <hr>
                <a href="">Sent</a>
            </div> -->


        </div>



        <!-- left part end  -->
        <!-- right side part start -->
        <div class="right">
            <div class="rightone">
                <div class="rightme">
                    <div class="col-md-12">

                        <?php
                        // Your existing database connection code
                        include 'db.php';

                        $id = $_SESSION['id']; // Fetching the ID from the session

                        $sql = "SELECT photo1_url, photo2_url, photo3_url, photo4_url, photo5_url, photo6_url, photo7_url, photo8_url FROM user_profiles WHERE id = ?";
                        $stmt = $conn->prepare($sql);

                        if ($stmt === false) {
                            die("Error preparing statement: " . $conn->error);
                        }

                        $stmt->bind_param("i", $id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        $photos = [];
                        if ($result->num_rows > 0) {
                            // Fetching the photos
                            $row = $result->fetch_assoc();
                            $photos = [
                                $row['photo1_url'],
                                $row['photo2_url'],
                                $row['photo3_url'],
                                $row['photo4_url'],
                                $row['photo5_url'],
                                $row['photo6_url'],
                                $row['photo7_url'],
                                $row['photo8_url'],
                            ];
                        } else {
                            echo "No photos found for the given ID.";
                        }

                        $stmt->close();
                        $conn->close();
                        ?>
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>User Photos</title>
                            <style>
                                .photo-grid {
                                    display: flex;
                                    flex-wrap: wrap;
                                    justify-content: center;
                                }

                                .photo-grid .photo-container {
                                    width: 200px;
                                    height: 200px;
                                    margin: 5px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    overflow: hidden;
                                    transition: transform 0.3s ease-in-out;
                                    position: relative;
                                }

                                .photo-grid img {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    transition: transform 0.3s ease-in-out;
                                }

                                .photo-grid .photo-container:hover img {
                                    transform: scale(1.2);
                                }

                                @media (max-width: 768px) {
                                    .photo-grid .photo-container {
                                        width: 100px;
                                        height: 100px;
                                    }
                                }

                                /* Modal styles */
                                .modal {
                                    display: none;
                                    position: fixed;
                                    z-index: 1000;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    overflow: auto;
                                    background-color: rgba(0, 0, 0, 0.9);
                                }

                                .modal-content {
                                    margin: auto;
                                    display: block;
                                    max-width: 90%;
                                    max-height: 90%;
                                }

                                .modal-content,
                                .close {
                                    cursor: pointer;
                                }

                                .close {
                                    position: absolute;
                                    top: 15px;
                                    right: 35px;
                                    color: #f1f1f1;
                                    font-size: 40px;
                                    font-weight: bold;
                                }

                                .caption {
                                    color: #f1f1f1;
                                    text-align: center;
                                    margin: 10px 0;
                                    font-size: 16px;
                                    font-weight: bold;
                                }

                                .nav-button {
                                    position: absolute;
                                    top: 50%;
                                    width: auto;
                                    margin-top: -22px;
                                    padding: 16px;
                                    color: white;
                                    font-weight: bold;
                                    font-size: 18px;
                                    cursor: pointer;
                                    border-radius: 3px;
                                    user-select: none;
                                    -webkit-user-select: none;
                                    z-index: 1001;
                                }

                                .prev-button {
                                    left: 0;
                                }

                                .next-button {
                                    right: 0;
                                }
                            </style>
                        </head>

                        <body>
                            <div class="photo-grid">
                                <?php foreach ($photos as $index => $photo) : ?>
                                    <?php if (!empty($photo)) : ?>
                                        <div class="photo-container">
                                            <img id="myImg<?php echo $index + 1; ?>" src="<?php echo htmlspecialchars($photo); ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <div class="nav-button prev-button" onclick="showPrev()">&#10094;</div>
                                <div class="nav-button next-button" onclick="showNext()">&#10095;</div>
                                <img id="modalImg" class="modal-content" alt="User Photo">
                                <div id="caption" class="caption"></div>
                            </div>

                            <script>
                                var modal = document.getElementById("myModal");
                                var modalImg = document.getElementById("modalImg");
                                var captionText = document.getElementById("caption");
                                var images = document.querySelectorAll(".photo-grid img");
                                var currentIndex = 0;

                                images.forEach(function(img, index) {
                                    img.onclick = function() {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                        currentIndex = index;
                                    }
                                });

                                var span = document.getElementsByClassName("close")[0];
                                span.onclick = function() {
                                    modal.style.display = "none";
                                }

                                document.onkeydown = function(evt) {
                                    evt = evt || window.event;
                                    if (evt.keyCode == 27) {
                                        modal.style.display = "none";
                                    } else if (evt.keyCode == 37) { // Left arrow
                                        showPrev();
                                    } else if (evt.keyCode == 39) { // Right arrow
                                        showNext();
                                    }
                                };

                                function showNext() {
                                    if (currentIndex < images.length - 1) {
                                        modalImg.src = images[++currentIndex].src;
                                        captionText.innerHTML = images[currentIndex].alt;
                                    }
                                }

                                function showPrev() {
                                    if (currentIndex > 0) {
                                        modalImg.src = images[--currentIndex].src;
                                        captionText.innerHTML = images[currentIndex].alt;
                                    }
                                }
                            </script>
                        </body>

                        </html>


















                    </div>
















                    <!-- right part end -->
                </div>
            </div>






        </div>

</body>

</html>

<!-- nav bar script -->

<!-- end -->