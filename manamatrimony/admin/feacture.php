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

include "db.php";
// Step 2: Fetch data from the database
$sql = "SELECT * FROM user_profiles"; // Change 'your_table' to the name of your table
$result = $conn->query($sql);

// Step 4: Handle status update
if(isset($_GET['id']) && isset($_GET['status'])) {
    $user_id = $_GET['id'];
    $new_status = $_GET['status'];

    // Update status in the database
    $update_sql = "UPDATE user_profiles SET status='$new_status' WHERE id=$user_id";
    if ($conn->query($update_sql) !== TRUE) {
        echo "Error updating status: " . $conn->error;
    } else {
        // Redirect back to the same page after updating status
        header("Location: allprofiles.php");
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>Matrimonial - Admin Template</title>

   <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
        body {
            background-color: beige;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 5px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
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
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(calc(33.33% - 20px), 1fr));
            gap: 20px;
            padding: 20px;
        }
        .user-card {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    padding: 5px;
    background-color: white;
    margin-bottom: 20px;
    width: 1000px; /* Adjust the width as needed */
}

.user-details-left{
    margin-top: 50px;
}
.user-image {
    flex: 0 0 auto;
    width: 280px; /* Adjust the width of the container */
    margin-right: 20px; /* Add space between image and details */
}

.user-image img {
    margin-top: 20px;
    width: 90%; /* Set the image width to fill its container */
    height: 190px; /* Automatically adjust the height to maintain aspect ratio */
}

#actionButtons{
   
    margin-left: 320px;
}
.user-details-left, .user-details-right {
    flex: 1;
}

.user-details-left p, .user-details-right p {
    margin: 5px 0;
}

.button-row {
    margin-top: 20px;
   
}

.btn-edit, .btn-view {
    display: inline-block;
    width: 150px;
    margin-right: 10px;
}

        .custom-scroll {
            overflow-y: auto;
        }
        ::-webkit-scrollbar {
            width: 1px; /* Set the width of the scrollbar */
        }
        .button-group-container {
  background-color: #fff; 
  border-radius: 8px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  padding: 8px; 


}
.button-container {
    border: 1px solid #ccc;
    padding: 15px;
    background-color: white;
    display: flex;
    /* margin-left:20px; */
    justify-content: flex-start;
    width: 1000PX;
    margin-top: 0px;
  }
  .button-container .btn {
    margin-right: 10px; /* Spacing between buttons */
    padding: 8px;
    width: 500px;
  }
    .custom-checkbox {
    transform: scale(1.5); 
    margin-top: 5px; 
    margin-left:20px;
}
.btn-custom-width {
    width: 150px; 
    margin-left: 20px;
   
}
.custom-width {
  width: 220px;
  
}
.btn-success {
    background-color: #28a745; /* Bootstrap green */
}

.btn-outline-danger {
    color: #dc3545; /* Bootstrap red */
    border-color: #dc3545;
}
.main-content{
    margin-left: -150px;
    margin-top: -50px;
}
.container-fluid{
    margin-left: 150px;
    width: 88%;
}
.user-checkbox{
    margin-top: -200px;
}
#selectAll{
    margin-top: 10px;
}
.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; /* Ensure it's above other content */
}
/* @media only screen and (max-width: 768px) {
    .fixed-sidebar {
        width: 100%; 
    }

    .container-fluid,
    .main-content {
        margin-left: 0; 
        width: 100%;
    }
    .user-details-left,
    .user-details-right {
        width: 100%;
    }
    .user-card {
        flex: 1 1 100%; 
    }
} */

    </style>
</head>
<body>
    <div class="container-fluid">
        <button class="sidebar-collapse-mini d-xl-none d-block"><i class="bi bi-list"></i></button>
        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini">
        <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <a href="index.html"><img src="assets/images/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>

               
            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>
 
                            <!-- <li class="sidebar-item has-sub"> -->
                            <!-- <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a> -->
                            <!-- <ul class="sub-menu">
                            <li><a href="Active.php" class="sub-menu-item">Active Members</a></li>
                            <li><a href="inactive.php" class="sub-menu-item">Inactive Members</a></li>
                            <li><a href="paid.php" class="sub-menu-item">Paid Members</a></li>
                            <li><a href="unpaid.php" class="sub-menu-item">Unpaid Members</a></li>
                            <li><a href="allprofiles.php" class="sub-menu-item">All Profiles</a></li>
                            </ul> -->
                            <!-- </li>                            -->
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="feacture.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members </span></a></li>

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="express.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Expreess Interest </span></a></li>
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
        <div class="container-fluid mt-4">
   
    <h3>Feature Members</h3>
    <div class="btn-toolbar" role="toolbar">
    <div class="button-container">
            
            <a href="allprofiles.php" class="btn btn-success"><i class="bi bi-people"></i> All Member</a>
            <a href="addmembers.php" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Member</a>
      </div>
</div>



    <div class="card mt-3">
    <div class="card-body">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="selectAll">
            <label class="form-check-label" for="selectAll">Select All</label>
            <span style="margin-right: 10px;"></span>
            <button type="button" id="markFeaturedBtn" class="btn btn-outline-danger ms-2"><i class="bi bi-star-fill"></i> Featured</button>

            <!-- Add space between buttons -->
            <span style="margin-right: 10px;"></span>

            <button type="button" id="removeFeaturedBtn" class="btn btn-outline-danger ms-2"><i class="bi bi-x-circle"></i> Remove Featured</button>
        </div>
    </div>
</div>


</div>
        <div class="main-content">
            <div class="top-boxes mb-10">
                <div class="container mt-5">
                  
                    <div class="grid-container">
                        <div class="user-card-container">
                        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='user-card'>";
        echo "<input type='checkbox' name='selected_users[]' class='user-checkbox' value='" . $row['id'] . "' />"; // Add checkbox
        echo "<div class='user-image'>";
        echo "<img src='" . $row["photo1_url"] . "' alt='User Photo'>";
        echo "</div>";
        echo "<div class='user-details-left'>";
        
        // Display "Featured" badge if feature value is 1
        if ($row['feature'] == 1) {
    // Display "Featured" badge on the top right corner
    echo "<div class='featured-badge'><span class='badge bg-success'>Featured</span></div>";
}

        
        echo "<p><strong>Name:</strong> " . $row["firstName"]. " " . $row["lastName"]. "</p>";
        echo "<p><strong>Gender:</strong> " . $row["gender"]. "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
        echo "<p><strong>Mobile Number:</strong> " . $row["mobile"]. "</p>";
        echo "<p><strong>Education:</strong> " . $row["highestEducation"]. "</p>";
        echo "<div class='button-row'>";
        echo "<a href='editing.php?id=" . $row['id'] . "' class='btn btn-edit btn-warning' style='width: 150px;color:white;'>Edit</a>";
        echo "<a href='sample.php?id=" . $row['id'] . "' class='btn btn-view btn-info' style='width: 150px;'>View More</a>";
        echo "</div>";
        echo "</div>";
        echo "<div class='user-details-right'>";
        echo "<p><strong>Age:</strong> " . $row["dob"]. "</p>";
        echo "<p><strong>Country:</strong> " . $row["inputCountry"]. "</p>";
        echo "<p><strong>Religion:</strong> " . $row["religion"]. "</p>";
        echo "<p><strong>Caste:</strong> " . $row["caste"]. "</p>";
        echo "<p><strong>Height:</strong> " . $row["height"]. "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript imports -->
    <!-- Adjust JavaScript imports as needed -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the "Select All" checkbox
    var selectAllCheckbox = document.getElementById('selectAll');
    
    // Get all checkboxes to toggle
    var userCheckboxes = document.querySelectorAll('.user-checkbox');
    
    // Attach an event listener to the "Select All" checkbox
    selectAllCheckbox.addEventListener('change', function() {
        // Toggle each checkbox based on the state of the "Select All" checkbox
        userCheckboxes.forEach(function(checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get the "Mark Featured" button
    var markFeaturedBtn = document.getElementById('markFeaturedBtn');
    
    // Attach a click event listener to the "Mark Featured" button
    markFeaturedBtn.addEventListener('click', function() {
        // Get all checkboxes that are checked
        var selectedCheckboxes = document.querySelectorAll('.user-checkbox:checked');
        // Extract IDs of selected users
        var selectedUserIds = [];
        selectedCheckboxes.forEach(function(checkbox) {
            selectedUserIds.push(checkbox.value);
        });
        
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'fe.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Update UI if needed
                    alert('Selected users marked as Featured successfully!');
                } else {
                    // Handle error
                    alert('Error: Unable to mark users as Featured.');
                }
            }
        };
        xhr.send('userIds=' + JSON.stringify(selectedUserIds));
    });
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the "Remove Featured" button
        var removeFeaturedBtn = document.getElementById('removeFeaturedBtn');
        
        // Attach a click event listener to the "Remove Featured" button
        removeFeaturedBtn.addEventListener('click', function() {
            // Get all checkboxes that are checked
            var selectedCheckboxes = document.querySelectorAll('.user-checkbox:checked');
            // Extract IDs of selected users
            var selectedUserIds = [];
            selectedCheckboxes.forEach(function(checkbox) {
                selectedUserIds.push(checkbox.value);
            });
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'remove_featured.php', true); 
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Update UI if needed
                        alert('Selected users removed from Featured successfully!');
                        location.reload(); 
                    } else {
                        // Handle error
                        alert('Error: Unable to remove users from Featured.');
                    }
                }
            };
            xhr.send('userIds=' + JSON.stringify(selectedUserIds));
        });
    });
</script>
         
                <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
   
    <script src="assets/js/main.js"></script>
 
</body>