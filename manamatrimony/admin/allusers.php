<?php
include "db.php";

// Step 2: Fetch data from the database
$sql = "SELECT * FROM users"; // Change 'your_table' to the name of your table
$result = $conn->query($sql);

// Step 4: Handle status update
if(isset($_POST['status_update'])) {
    $user_id = $_POST['user_id'];
    $new_status = $_POST['new_status'];
    
    // Update status in the database
    $update_sql = "UPDATE users SET status='$new_status' WHERE id=$user_id";
    if ($conn->query($update_sql) !== TRUE) {
        echo "Error updating status: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        /* Step 3: Add CSS styles */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function submitOnce(form) {
            if(form.submitted) {
                return false;
            }
            form.submitted = true;
            return true;
        }
    </script>
</head>
<body>

    <!-- Step 3: Display data using HTML -->
    <h2>User Details</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>email</th>
           
            <th>Gender</th>
            <th>Mobile Number</th>
            <th>Age</th>
           <th>Marital Status</th>
          
           <th>Mother Tongue</th>
           <th>Religion</th>
           <th>caste</th>
            <th>Action</th>
        </tr>
        <?php
        // Output data of each row
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"]. "</td>";
                echo "<td>" . $row["first_name"]. "</td>";
                echo "<td>" . $row["last_name"]. "</td>";
                echo "<td>" . $row["email"]. "</td>";
                // echo "<td>" . $row["password"]. "</td>";
                echo "<td>" . $row["gender"]. "</td>";
                // echo "<td>" . $row["dob"] . "/" . $row["dobMonth"] . "/" . $row["dobYear"] . "</td>";
                echo "<td>" . $row["mobile_number"]. "</td>";
                echo "<td>" . $row["age"]. "</td>";
                echo "<td>" . $row["marital_status"]. "</td>";
             
                // echo "<td>" . $row["date_of_birth"]. "</td>";
                echo "<td>" . $row["mother_tongue"]. "</td>";
                echo "<td>" . $row["religion"]. "</td>";
                echo "<td>" . $row["caste"]. "</td>";
               
                echo "<td>";
                echo "<form method='post' onsubmit='return submitOnce(this);'>";
                echo "<input type='hidden' name='user_id' value='" . $row['id'] . "'/>";
                if ($row["status"] == 'active') {
                    echo "<input type='hidden' name='new_status' value='inactive'/>";
                    echo "<input type='submit' name='status_update' value='Inactive'/>";
                } else {
                    echo "<input type='hidden' name='new_status' value='active'/>";
                    echo "<input type='submit' name='status_update' value='Active'/>";
                }
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>

</body>
</html>
