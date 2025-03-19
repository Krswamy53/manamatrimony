<?php
include "db.php";

// Check if plan ID is provided in the URL
if (isset($_GET['id'])) {
    $plan_id = $_GET['id'];

   

    // SQL to select plan from database
    $sql = "SELECT * FROM plans WHERE id=$plan_id";
    $result = $conn->query($sql);

    // Check if the plan exists
    if ($result->num_rows > 0) {
        // Fetch plan details
        $row = $result->fetch_assoc();
        $plan_name = $row['plan_name'];
        $price = $row['price'];
        $duration = $row['duration'];
        $messages = $row['messages'];
        $content_views = $row['content_views'];
        $live_chat = $row['live_chat'];
        $profile_views = $row['profile_views'];
    } else {
        echo "Plan not found";
    }

    // Close database connection
    $conn->close();
} else {
    echo "Plan ID not provided";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Plan</title>
</head>
<body>
    <h2>Edit Plan</h2>
    <form action="edit_plan_process.php" method="post">
        <input type="hidden" name="plan_id" value="<?php echo $plan_id; ?>">
        <label for="plan_name">Plan Name:</label><br>
        <input type="text" id="plan_name" name="plan_name" value="<?php echo $plan_name; ?>"><br>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="<?php echo $price; ?>"><br>
        <label for="duration">Duration:</label><br>
        <input type="number" id="duration" name="duration" value="<?php echo $duration; ?>"><br>
        <label for="messages">Messages:</label><br>
        <input type="number" id="messages" name="messages" value="<?php echo $messages; ?>"><br>
        <label for="content_views">Content Views:</label><br>
        <input type="number" id="content_views" name="content_views" value="<?php echo $content_views; ?>"><br>
        <label for="live_chat">Live Chat:</label><br>
        <select id="live_chat" name="live_chat">
            <option value="yes" <?php if ($live_chat == 'yes') echo 'selected'; ?>>Yes</option>
            <option value="no" <?php if ($live_chat == 'no') echo 'selected'; ?>>No</option>
        </select><br>
        <label for="profile_views">Profile Views:</label><br>
        <input type="number" id="profile_views" name="profile_views" value="<?php echo $profile_views; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
