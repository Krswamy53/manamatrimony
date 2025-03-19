<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .slider-container {
            position: relative;
            margin:0 auto;
            max-width:960px;
        }

        .slider {
            overflow: hidden;
            white-space: nowrap;
            position: relative; 
           
        }

        .slider {
            white-space: nowrap;
            position: relative;
            transition: transform 0.5s ease; / Add transition for smooth sliding effect /
        }

        .slide {
            display: none; 
            width: 100%;
            
            margin-right: 100px;

        }

        .slide.active {
            display: inline-block; 
        }

        .profile-container {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            margin: 10px; 
            width: 320px; 
            box-sizing: border-box; 
            background-color: lightpink;
            border-radius: 10px;
        }

        .profile-container2 {
            display: inline-block;
            /* border: solid 1px; */
            background-color:black;
        }

        .profile-container p {
            margin: 0;
            font-weight: bold;
            color: white;
            text-align: left;
            padding: 10px;
        }

        .slide-buttons {
            position: absolute;

            left: 50%;
           
            transform: translateX(-50%);
            bottom: 10px;
            
        }

        .pimage {
            border-radius: 10px;
            width: 300px;
        }

        .slide-buttons button {
            cursor: pointer;
            background-color: #f1f1f1;
            color: black;
            padding: 10px;
            border: none;
            margin-left: 5px;
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        .slide-buttons button:hover {
            background-color: #ccc; 
        }

        button.prev,
        button.next {
            cursor: pointer;
            background-color: #f1f1f1;
            color: black;
            padding: 10px;
            border: none;
            margin-right: 5px;
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        button.prev:hover,
        button.next:hover {
            background-color: #ccc; 
        }
        .uniq{
            margin-left:120px;
        }
    </style>
</head>
<body>
    <div class="uniq">
        <div class="sec-title text-center">
            <span class="title">Introducing Profile </span>
            <h2>Our Groom & Bride</h2>
        </div>

        <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'shadhi';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, age, country, phot
                FROM subhalekha
                WHERE gender = 'female' AND position = 'active'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='slider'>";
            echo "<button class='prev' onclick='plusSlides(-1)'>❮</button>";
            $profileCount = 0;

            while ($row = mysqli_fetch_assoc($result)) {

                if ($profileCount % 3 === 0) {
                    echo "<div class='slide'>"; 
                }
                echo "<div class='profile-container2'>";

                echo "<div class='profile-container'>";
                echo "<img class='pimage' src='data:image/jpeg;base64," . base64_encode($row['phot']) . "' />";
                echo "<p>Name: " . $row["name"] . "</p>";
                echo "<p>Age: " . $row["age"] . "</p>";
                echo "<p>Country: " . $row["country"] . "</p>";
                echo "</div>"; 
                echo "</div>";

                $profileCount++;

                if ($profileCount % 3 === 0) {
                    echo "<button class='next' onclick='plusSlides(1)'>❯</button>";
                    echo "</div>"; 
                }
            }

            if ($profileCount % 3 !== 0) {
                echo "</div>";
            }

            echo "</div>"; 
        } else {
            echo "No records found";
        }

        mysqli_close($conn);
        ?>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active'); // Hide all slides
            }
            slides[slideIndex - 1].classList.add('active'); 
        }
    </script>
</body>
</html>
