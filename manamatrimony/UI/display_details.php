<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .grid-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            gap: 20px;
            padding: 20px;
            margin-left: 130px;
        }

        .grid-box {
            display: flex;
            flex-direction: column;
        }

        .grid-item {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex-basis: calc(25% - 20px);
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            flex-shrink: 0;
            min-width: 300px;
        }

        .grid-item img {
            align-self: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .detail p {
            margin: 5px 0;
            text-align: justify;
        }

        .slider-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .list-container {
            padding: 50px;
            width: 70%;
            margin-left: 100px;
        }

        .list-item {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
        }

        .list-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .details {
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .left-details {
            flex-grow: 1;
            text-align: justify;
            margin-left: 200px;
        }

        .right-details {
            flex-shrink: 0;

            width: 50%;
            text-align: right;
            margin-right: 10px;

        }

        .list-item p {
            margin: 5px 0;
        }

        strong {
            text-align: justify;
        }

        #prev,
        #next {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "shadi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $gender = $conn->real_escape_string($_POST['gender']);
    $ageFrom = isset($_POST['ageFrom']) ? intval($_POST['ageFrom']) : 0;
    $ageTo = isset($_POST['ageTo']) ? intval($_POST['ageTo']) : 100;
    $religion = $conn->real_escape_string($_POST['religion']);
    $caste = $conn->real_escape_string($_POST['caste']);
    $viewType = $_POST['viewType']; // Retrieve viewType parameter
    
    // Define fields based on viewType
    $fields = ''; // Initialize $fields variable
    if ($viewType === 'grid') {
        $fields = "name, location, job, gender, age, image";
    } elseif ($viewType === 'list') {
        $fields = "name, location, job, gender, age, religion, caste, height, education, mother_tongue, image";
    }

    // Construct SQL query
    $sql = "SELECT $fields FROM userdetails WHERE gender='$gender'";

    // Add conditions and filters...
    if (!empty($religion)) {
        $sql .= " AND religion='$religion'";
    }
    if (!empty($caste)) {
        $sql .= " AND caste='$caste'";
    }

    $sql .= " AND age BETWEEN $ageFrom AND $ageTo";

    // Execute query
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        echo "<div class='slider-buttons'>";
        echo "<button id='prev'>&#10094;</button>";
        echo "<button id='next'>&#10095;</button>";
        echo "</div>";

        if ($viewType === 'grid') {
            echo "<div class='grid-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='grid-box'>";
                echo "<div class='grid-item'>";
                echo "<p style='color: orange;'><strong>" . $row["name"] . "</strong></p>";

                echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Profile Image'>";
                echo "<div class='detail'>";

                echo "<p><strong>Location:</strong> " . $row["location"] . "</p>";
                echo "<p><strong>Job:</strong> " . $row["job"] . "</p>";
                echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
                echo "<p><strong>Age:</strong> " . $row["age"] . "</p>";
                echo "</div>"; // End of details
                echo "</div>"; // End of grid-item
                echo "</div>"; // End of grid-box
            }
            echo "</div>"; // End of grid-container
        } elseif ($viewType === 'list') {
            // Display list view (no changes)
            echo "<div class='list-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='list-item'>";
                echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Profile Image'>";
                echo "<div class='details'>";
                echo "<div class='left-details'>";
                echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
                echo "<p><strong>Location:</strong> " . $row["location"] . "</p>";
                echo "<p><strong>Job:</strong> " . $row["job"] . "</p>";
                echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
                echo "<p><strong>Age:</strong> " . $row["age"] . "</p>";
                echo "</div>"; // End of left-details
                echo "<div class='right-details'>";
                echo "<p><strong>Religion:</strong> " . $row["religion"] . "</p>";
                echo "<p><strong>Caste:</strong> " . $row["caste"] . "</p>";
                echo "<p><strong>Height:</strong> " . $row["height"] . "</p>";
                echo "<p><strong>Education:</strong> " . $row["education"] . "</p>";
                echo "<p><strong>Mother Tongue:</strong> " . $row["mother_tongue"] . "</p>";
                echo "</div>"; 
                echo "</div>"; 
                echo "</div>"; 
            }
            echo "</div>"; // End of list-container
        }
    } else {
        echo "No results found for the selected criteria.";
    }

    $conn->close();
    ?>

    <script>
        var gridContainer = document.querySelector('.grid-container');
        var prevButton = document.getElementById("prev");
        var nextButton = document.getElementById("next");

        var currentIndex = 0;
        var gridItems = document.querySelectorAll('.grid-item');
        var totalItems = gridItems.length;
        var itemsPerView = 4; // Number of items to show per view

        // Function to update visibility of grid items
        function updateVisibility() {
            gridItems.forEach(function (item, index) {
                if (index >= currentIndex && index < currentIndex + itemsPerView) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Function to handle clicking on next button
        function showNextItems() {
            if (currentIndex < totalItems - itemsPerView) {
                currentIndex += itemsPerView;
                if (currentIndex > totalItems - itemsPerView) {
                    currentIndex = totalItems - itemsPerView;
                }
                updateVisibility();
            }
        }

        // Function to handle clicking on previous button
        function showPreviousItems() {
            if (currentIndex > 0) {
                currentIndex -= itemsPerView;
                if (currentIndex < 0) {
                    currentIndex = 0;
                }
                updateVisibility();
            }
        }

        // Event listener for previous button click
        prevButton.addEventListener("click", function () {
            showPreviousItems();
        });

        // Event listener for next button click
        nextButton.addEventListener("click", function () {
            showNextItems();
        });

        updateVisibility();
    </script>

</body>

</html>