<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recently Visited</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        .recently-visited-header {
    background-color: #4CAF50; /* Green background */
    color: #4CAF50; /* Green text */
    padding: 0px; /* Padding */
    
    border-top-left-radius: 10px; /* Rounded top left corner */
    border-top-right-radius: 10px; /* Rounded top right corner */
    text-transform: uppercase; 
}
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* 5 equal-width columns */
            grid-gap: 20px; /* Adjust the gap between grid items */
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
            text-align: center;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
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
            margin-top:-250px;
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
        .ss{
            margin-left: -60px;
        }
        .sss{
            margin-right: -60px;
        }
    </style>
     <script>
        let currentPage = 0;
        const itemsPerPage = 5; // Display 5 items per page

        function showPage(page) {
            const items = document.querySelectorAll('.grid-item');
            const totalPages = Math.ceil(items.length / itemsPerPage);
            currentPage = page;

            if (currentPage < 0) {
                currentPage = 0;
            }
            if (currentPage >= totalPages) {
                currentPage = totalPages - 1;
            }

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
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText);
                    var gridItem = document.getElementById('grid-item-' + recipientId);
                    if (gridItem) {
                        gridItem.parentNode.removeChild(gridItem);
                        showPage(currentPage); // Refresh the page after removing an item
                    }
                }
            };
            xhr.send("recipient_id=" + recipientId);
        }
    </script>

    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="recently-visited-header">
                    RECENTLY VISITED
                </div>
                <h4>Shorlist List</h4>
            </div>
        </div>
        <div class="right">
       
        <hr>
        <div class="arrow-buttons">
            <button onclick="prevPage()">&#9664; Previous</button>
            <button onclick="nextPage()">Next &#9654;</button>
        </div>
        <?php
            // Fetch recipient IDs and additional details from the 'shortlist' and 'user_profiles' tables
            $query = "SELECT * FROM shortlist s 
                      INNER JOIN user_profiles up ON s.recipient_id = up.id 
                      WHERE s.user_id = " . $_SESSION['id'];
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                echo "<div class='grid-container'>";
                while ($row = $result->fetch_assoc()) {
                    $imageData = base64_encode($row['photo']);
                    echo "<div class='grid-item' id='grid-item-" . htmlspecialchars($row['id']) . "'>
                          <h3>" . htmlspecialchars($row['firstName']) . "</h3>
                          <div class='image-container'>";
                    if (!empty($imageData)) {
                        echo "<img src='data:image/jpeg;base64," . htmlspecialchars($imageData) . "' alt='User Photo' />";
                    } else {
                        echo "<p>No photo available.</p>";
                    }
                    echo "</div>
                          <div>
                              <table>
                                  <tr><th>ID</th><td>:</td><td>" . htmlspecialchars($row['id']) . "</td></tr>
                                  <tr><th>Age</th><td>:</td><td>" . htmlspecialchars($row['age_from']) . "</td></tr>
                                  <tr><th>Gender</th><td>:</td><td>" . htmlspecialchars($row['gender']) . "</td></tr>
                                  <tr><th>Marital Status</th><td>:</td><td>" . htmlspecialchars($row['maritalStatus']) . "</td></tr>
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

            $conn->close();
            ?>
        <!-- <div class="arrow-buttonss">
            <button onclick="prevPage()" class="ss">&#9664; </button>
            <button onclick="nextPage()" class="sss"> &#9654;</button>
        </div> -->
    </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>