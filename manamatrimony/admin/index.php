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
<?php
include "db.php";
// SQL query to get the count of users
$sql = "SELECT COUNT(*) AS user_count FROM user_profiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetching user count
    $row = $result->fetch_assoc();
    $user_count = $row['user_count'];
} else {
    $user_count = 0;
}

// SQL query to get the count of active users
$sql = "SELECT COUNT(*) AS active_user_count FROM user_profiles WHERE status = 'Active'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetching active user count
    $row = $result->fetch_assoc();
    $active_user_count = $row['active_user_count'];
} else {
    $active_user_count = 0;
}

// Close connection
$conn->close();
?>
<?php
include "db.php";

// SQL query to get the count of inactive users
$sql = "SELECT COUNT(*) AS inactive_user_count FROM user_profiles WHERE status = 'Inactive'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetching inactive user count
    $row = $result->fetch_assoc();
    $inactive_user_count = $row['inactive_user_count'];
} else {
    $inactive_user_count = 0;
}

// Close connection
$conn->close();
?>
<?php
include "db.php";

// SQL query to count members
$sql = "SELECT COUNT(*) AS member_count FROM user_payments";
$result = $conn->query($sql);

// Variable to store member count
$member_count = 0;

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $member_count = $row["member_count"];
    }
}

// Close connection
$conn->close();
?>
<?php
include "db.php";

// SQL query to get the count
$sql = "SELECT COUNT(*) as count FROM membership_plans";
$result = $conn->query($sql);

// Fetch the count
$count = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];
}

$conn->close();
?>

<?php
include "db.php";
// SQL query to count members
$sql = "SELECT COUNT(*) AS successCount FROM success_stories";
$result = $conn->query($sql);

// Variable to store member count
$successCount = 0;

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $successCount = $row["successCount"];
    }
}

// Count of users with status 'Approved'
$sqlApproved = "SELECT COUNT(*) AS approvedCount FROM success_stories WHERE status = 'Approved'";
$resultApproved = $conn->query($sqlApproved);
$rowApproved = $resultApproved->fetch_assoc();
$approvedCount = $rowApproved['approvedCount'];

// Count of users with status 'Unapproved'
$sqlUnapproved = "SELECT COUNT(*) AS unapprovedCount FROM success_stories WHERE status = 'Unapproved'";
$resultUnapproved = $conn->query($sqlUnapproved);
$rowUnapproved = $resultUnapproved->fetch_assoc();
$unapprovedCount = $rowUnapproved['unapprovedCount'];

// Count of users with status 'Pending'
$sqlPending = "SELECT COUNT(*) AS pendingCount FROM success_stories WHERE status = 'Pending'";
$resultPending = $conn->query($sqlPending);
$rowPending = $resultPending->fetch_assoc();
$pendingCount = $rowPending['pendingCount'];

// Close the database connection
$conn->close();
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
        body{
        background-color: beige;
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
        .custom-scroll{
    overflow-y:auto;
}
::-webkit-scrollbar {
    width: 1px; / Set the width of the scrollbar /
}
.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 200px; 
    overflow-y: auto; 
}

.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; 
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

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>
    
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>

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
       
        </div>
        
      
        <div class="main-content">
            <div class="top-boxes mb-10">
                <div class="row g-10">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    
    <div class="panel" id="profilePanel">
        <div class="panel-body">
            <div class="part-icon bg-primary">
                <i class="bi bi-eye-fill"></i>
            </div>
            <div class="part-txt">
                <?php
              
              include "db.php";

              
                $count_sql = "SELECT COUNT(*) as total_count FROM user_profiles"; 
                $count_result = $conn->query($count_sql);
                $total_count = $count_result->fetch_assoc()['total_count'];

              
                echo "<p><span>All Profiles <br> $total_count</span></p>";

               
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-3 col-sm-6" onclick="redirectToActivePage()">
    <div class="panel">
        <div class="panel-body">
            <div class="part-icon bg-info">
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="part-txt">
                <p><span>Active Users<br> <?php echo $active_user_count; ?></span></p>
            </div>
        </div>
    </div>
</div>



                    <div class="col-xl-3 col-lg-3 col-sm-6" onclick="redirectToinActivePage()">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="part-icon bg-success">
                                    <i class="bi bi-person-plus-fill"></i>
                                </div>
                                <div class="part-txt">
    <p><span>Inactive Users <br> <?php echo $inactive_user_count; ?></span></p>
</div>

                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-3 col-lg-3 col-sm-6" onclick="advertise()">
    <div class="panel">
        <div class="panel-body">
            <div class="part-icon bg-info">
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="part-txt">
                <?php
               include"db.php";
                // Step 2: Fetch count of advertisements
                $count_sql = "SELECT COUNT(*) as total_count FROM advertisements"; // Change 'advertisements' to the name of your table
                $count_result = $conn->query($count_sql);
                
                // Step 3: Display the count
                if ($count_result->num_rows > 0) {
                    $row = $count_result->fetch_assoc();
                    $total_count = $row["total_count"];
                    echo "<p><span>Advertisements <br> $total_count</span></p>";
                } else {
                    echo "No advertisements found";
                }

                // Step 4: Close the database connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>


                </div>
                <br>
                 <div class="top-boxes mb-10">
                <div class="row g-10">
                <?php
include "db.php";

// SQL query to count rows where payment is 'paid'
$sql = "SELECT COUNT(*) AS paid_count FROM user_profiles WHERE payment = 'paid'";

if ($result = $conn->query($sql)) {
    // Fetch the result
    $row = $result->fetch_assoc();
    // Store the count of paid users in a variable
    $paid_user_count = $row['paid_count'];
    // Free result set
    $result->free();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>


<div class="col-xl-3 col-lg-3 col-sm-6" onclick="paid()">
    <div class="panel">
        <div class="panel-body">
            <div class="part-icon bg-primary">
                <i class="bi bi-eye-fill"></i>
            </div>
            <div class="part-txt">
                <p><span>Paid <br> <?php echo $paid_user_count; ?></span></p>
            </div>
        </div>
    </div>
</div>


<?php
include "db.php";

// SQL query to count rows where payment is 'unpaid'
$sql = "SELECT COUNT(*) AS unpaid_count FROM user_profiles WHERE payment = 'unpaid'";

if ($result = $conn->query($sql)) {
    // Fetch the result
    $row = $result->fetch_assoc();
    // Store the count of unpaid users in a variable
    $unpaid_user_count = $row['unpaid_count'];
    // Free result set
    $result->free();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>


<div class="col-xl-3 col-lg-3 col-sm-6" onclick="unpaid()">
    <div class="panel">
        <div class="panel-body">
            <div class="part-icon bg-danger">
                <i class="bi bi-bookmark-dash-fill"></i>
            </div>
            <div class="part-txt">
                <p><span>Unpaid <br> <?php echo $unpaid_user_count; ?></span></p>
            </div>
        </div>
    </div>
</div>

                   
<div class="col-xl-3 col-lg-3 col-sm-6" onclick="plans()">
    
    <div class="panel">
        <div class="panel-body">
            <div class="part-icon bg-success">
                <i class="bi bi-person-plus-fill"></i>
            </div>
            <div class="part-txt">
                <p><span>Plans</span></p>
                <p><?php echo $count; ?></p>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-lg-3 col-sm-6" onclick="success()">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="part-icon bg-danger">
                                    <i class="bi bi-bookmark-dash-fill"></i>
                                </div>
                                <div class="part-txt">
                        <p><span>Success Story</span> <?php echo $successCount; ?></p>
                    </div>
                            </div>
                        </div>
                    </div>
                  

             <div></div><div></div>
                    
                   
                  
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="part-icon bg-danger">
                                    <i class="bi bi-bookmark-dash-fill"></i>
                                </div>
                                <div class="part-txt">
                        <p><span>Approved</span> <?php echo $approvedCount ?></p>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="part-icon bg-danger">
                                    <i class="bi bi-bookmark-dash-fill"></i>
                                </div>
                                <div class="part-txt">
                        <p><span>Unapproved</span> <?php echo $unapprovedCount ?></p>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="part-icon bg-danger">
                                    <i class="bi bi-bookmark-dash-fill"></i>
                                </div>
                                <div class="part-txt">
                        <p><span>Pending </span><?php echo $pendingCount; ?></p>
                    </div>
                            </div>
                        </div>
                    </div>

                </div>


                
                
            </div>


            <br>
                 

                </div>


                
                
            </div>
            
            
          

            <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->
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
</html>