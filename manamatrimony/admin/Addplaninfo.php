<?php
include "db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $plan_name = $_POST["planName"];
    $price = $_POST["planAmount"];
    $duration = $_POST["planDuration"];
    $messages = $_POST["allowMessages"];
   
    $live_chat = $_POST["chat"];
    $profile_views = $_POST["allowProfile"];

   

    // Escape special characters in strings to prevent SQL injection
    $plan_name = $conn->real_escape_string($plan_name);
    $duration = $conn->real_escape_string($duration);
    $messages = $conn->real_escape_string($messages);
    $live_chat = $conn->real_escape_string($live_chat);

    // SQL to insert data into database
    $sql = "INSERT INTO membership_plans(`planName`, `planAmount`, `planDuration`, `allowMessages`, `chat`, `allowProfile`) 
            VALUES ('$plan_name', $price, '$duration', '$messages', '$live_chat', $profile_views)";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Close database connection
        $conn->close();
?>
        <script>
            // Display alert box
            alert("New record created successfully");
            window.location.href = "add_plan.php";
        </script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
