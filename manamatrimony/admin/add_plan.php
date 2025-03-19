<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Matrimonial - Admin Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
     .logout-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 50px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: 20px;
            
        }
        .custom-scroll{
    overflow-y:auto;
}
::-webkit-scrollbar {
    width: 1px; / Set the width of the scrollbar /
}
    </style>

</head>
<body>


<div class="container-fluid">
        <button class="sidebar-collapse-mini d-xl-none d-block"><i class="bi bi-list"></i></button>
        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini">
        <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <a href="index.php"><img src="uploads/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>

               
            </div>
           
           
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>
    
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password  </span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password  </span></a></li>

                            <button class="logout-btn" onclick="location.href='login.php'" style="position: sticky; bottom: 10px;">Logout</button>


                           
                        </ul>
                    </div>
                </div>
            </div>
          
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->
        <div class="main-content">
<style>

.button-group {
    display: flex;
    gap: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
    height: 80px;
    align-items: center;
    padding-left: 20px;
    text-align: center;

}
 body{
        background-color: beige;
      }

.button-groups {
    display: flex;
    gap: 10px;
    align-items: center;

}

.btn1 {
    gap: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
    height: 100px;
    padding-left: 10px;


}


.custom-btn {
    height: 40px;
    width: 150px;
    line-height: 20px;
    padding: 0 10px;
    background: #00e68a;
    color: #ffff;

}

.headings {
    font-size: 15px;
    font-weight: bold;
    padding-top: 10px;
}

.custom-btn1 {
    height: 40px;
    width: 160px;
    line-height: 20px;
    padding: 0 10px;
    background: #F8F8F8;
    color: red;
}

.button-group1 {
    display: flex;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
    height: 80px;
    align-items: center;
    padding-left: 20px;
    text-align: center;

}

.button-group2 {

    gap: 40px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;

}

h2 {
    padding: 30px;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.name_container {
    display: flex;
    gap: 40px;
    padding-bottom: 10px;
    /* color: black; */
    font-size: 20px;

}

.info-boxs {


    display: flex;
    flex-direction: row;
    align-items: center;
    
}

.info-box {
    align-items: center;
    margin-bottom: 40px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #ffff;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    border-radius: 5px;


}

.info-box img {
    width: 150px;
    height: 150px;
    margin-right: 20px;
    border-radius: 10px;
}

.info-box p {
    margin: 0;
    color: red;
}

.info-box p:first-child {
    font-weight: bold;

}

.info-box p:not(:first-child) {
    margin-top: 10px;
}

/* New styles for horizontal layout */
.info-box .image-container {
    width: 150px;
    height: 150px;
    margin-right: 20px;
    border-radius: 10px;
    overflow: hidden;
}

.info-box .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.info-box .fields-container {
    flex: 1;
}

.field-group {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10px;
}

.field-group .field {
    width: calc(33.33% - 10px);
    /* 3 fields per line with 10px margin between them */
    margin-right: 10px;
}
.plan {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 10px;
    width: calc(30% - 20px); /* Set width to 50% of the container width minus margin */
    display: inline-block;
    vertical-align: top;
    box-sizing: border-box; /* Include padding and border in the width calculation */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add a subtle shadow effect */
    background-color: white;
    margin-left: 35px;
}

.plan:nth-child(odd) {
    clear: both; /* Clear the float every odd numbered plan to start a new row */
}

.plan h4 {
    color: darkgreen;
    text-decoration: underline;
}

.plan p {
    color: black;
}

.buttons {
    margin-top: 10px;
    display: flex; /* Use flexbox to align buttons horizontally */
}

.buttons button,
.buttons a {
    margin-right: 10px;
}
.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; /* Ensure it's above other content */
}
@media (max-width: 767px) {
            .plan {
                width: 100%;
                margin-left: 0;
            }
            .col-md-6 {
        width: 100%;
    }

        }

        @media (min-width: 768px) {
            .plan {
                width: 48%;
                margin-left: 1%;
            }
        }

        @media (min-width: 992px) {
            .plan {
                width: 30%;
                margin-left: 1.66%;
            }
        }
</style>
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
     $allow_contacts = $_POST["allowContacts"];

     // Create connection
     
     // Escape special characters in strings to prevent SQL injection
     $plan_name = $conn->real_escape_string($plan_name);
     $duration = $conn->real_escape_string($duration);
     $messages = $conn->real_escape_string($messages);
     $live_chat = $conn->real_escape_string($live_chat);
     $allow_contacts = $conn->real_escape_string($allow_contacts);

     // SQL to insert data into database
     $sql = "INSERT INTO membership_plans(`planName`, `planAmount`, `planDuration`, `allowMessages`, `chat`, `allowProfile`, `allowContacts`) 
             VALUES ('$plan_name', $price, '$duration', '$messages', '$live_chat', $profile_views, '$allow_contacts')";

     // Execute SQL query
     if ($conn->query($sql) === TRUE) {
         echo "<script>
                 alert('New record created successfully');
                 window.location.href = 'add_plan.php';
               </script>";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }

     // Close database connection
     $conn->close();
 }
 ?>
 <div class="container-fluid">
     
     <div class="row g-10">
         <div class="col-xl-12 col-lg-12">
             <div class="panel mb-10">
                 <div class="panel-heading">
                     <span>Add Plans</span>
                 </div>
                 <div class="panel-body">
                     <form class="row g-3" id="filterForm" method="post" action="">
                         <div class="row g-3">
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="planName" class="form-label">Plan Name</label>
                                     <input type="text" class="form-control" name="planName" id="planName" required>
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="planAmount" class="form-label">Plan Price</label>
                                     <input type="number" class="form-control" name="planAmount" id="planAmount" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row g-3">
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="planDuration" class="form-label">Plan Duration</label>
                                     <input type="number" class="form-control" name="planDuration" id="planDuration" required>
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="allowMessages" class="form-label">Messages</label>
                                     <input type="text" class="form-control" name="allowMessages" id="allowMessages" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row g-3">
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="chat" class="form-label">Live Chat</label>
                                     <select name="chat" id="chat" class="form-select" required>
                                         <option value="yes">Yes</option>
                                         <option value="no">No</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="allowProfile" class="form-label">Profile Views</label>
                                     <input type="number" class="form-control" name="allowProfile" id="allowProfile" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row g-3">
                             <div class="col-6">
                                 <div class="mb-3">
                                     <label for="allowContacts" class="form-label">Allow Contacts</label>
                                     <input type="text" class="form-control" name="allowContacts" id="allowContacts" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row justify-content-center">
                             <div class="col-md-6">
                                 <div class="btn-box d-flex justify-content-center" style="padding-bottom:20px;">
                                     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
                 <?php
                include "db.php";
                 // SQL to fetch data from database
                 $sql = "SELECT * FROM membership_plans";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                     // Output data of each row
                     while ($row = $result->fetch_assoc()) {
                         echo '<div class="plan">';
                         echo '<h4>' . $row["planName"] . '</h4>';
                         echo '<p>Plan Price: ' . $row["planAmount"] . '</p>';
                         echo '<p>Duration: ' . $row["planDuration"] . '</p>';
                         echo '<p>Messages: ' . $row["allowMessages"] . '</p>';
                         echo '<p>Live Chat: ' . $row["chat"] . '</p>';
                         echo '<p>Profile Views: ' . $row["allowProfile"] . '</p>';
                         echo '<p>Allow Contacts: ' . $row["allowContacts"] . '</p>';
                         echo '<div class="buttons">';
                         echo '<form method="post" action="delete_plan.php">';
                         echo '<input type="hidden" name="plan_id" value="' . $row['id'] . '">';
                         echo '<button type="submit" class="btn btn-danger" name="delete">Delete Plan</button>';
                         echo '</form>';
                         echo '</div>';
                         echo '</div>';
                     }
                 } else {
                     echo "0 results";
                 }

                 // Close database connection
                 $conn->close();
                 ?>
             </div>
         </div>
     </div>
 </div>
 <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>