<?php
// Assuming you have a database connection file (db_connection.php)
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
        ?>