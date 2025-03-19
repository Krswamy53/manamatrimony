<?php
include "db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Check if plan_id is set
    if(isset($_POST['plan_id'])) {
        // Retrieve plan_id from form data
        $plan_id = $_POST['plan_id'];
        
        // Create connection
     
        // SQL to delete plan from database
        $sql = "DELETE FROM membership_plans WHERE id = '$plan_id'";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            // Close database connection
            $conn->close();
            // Alert box and redirect using JavaScript
            echo '<script>alert("Plan deleted successfully"); window.location.href = "add_plan.php";</script>';
            exit; // Prevent further execution
        } else {
            echo "Error deleting plan: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        echo "Plan ID is not set";
    }
} else {
    echo "Invalid request";
}
?>
