<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];

include "db.php";
// Step 2: Handle filters
$filter = "";
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    if ($filter === "active") {
        $sql = "SELECT * FROM user_profiles WHERE status='active'";
    } elseif ($filter === "inactive") {
        $sql = "SELECT * FROM user_profiles WHERE status='inactive'";
    } elseif ($filter === "paid") {
        $sql = "SELECT * FROM user_profiles WHERE payment='paid'";
    } elseif ($filter === "unpaid") {
        $sql = "SELECT * FROM user_profiles WHERE payment='unpaid'";
    } elseif ($filter === "feature") {
        $sql = "SELECT * FROM user_profiles WHERE feature=1";
    } else {
        $sql = "SELECT * FROM user_profiles"; // Default to all profiles if filter is not recognized
    }
} else {
    $sql = "SELECT * FROM user_profiles"; // Default to all profiles
}

$result = $conn->query($sql);

// Step 3: Handle status update
if (isset($_GET['id']) && isset($_GET['status'])) {
    $user_id = $_GET['id'];
    $new_status = $_GET['status'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE user_profiles SET status=? WHERE id=?");
    $stmt->bind_param("si", $new_status, $user_id);
    if ($stmt->execute() !== TRUE) {
        echo "Error updating status: " . $conn->error;
    } else {
        // Redirect back to the same page after updating status
        header("Location: allprofiles.php?filter=$filter");
        exit;
    }
    $stmt->close();
}
$conn->close();
?>

<?php

include "db.php";

// Fetch counts for each filter
$counts = [];
$filters = ['active', 'inactive', 'paid', 'unpaid', 'feature'];
foreach ($filters as $filter) {
    if ($filter == 'paid' || $filter == 'unpaid') {
        $sql = "SELECT COUNT(*) as count FROM user_profiles WHERE payment = '$filter'";
    } else if ($filter == 'feature') {
        $sql = "SELECT COUNT(*) as count FROM user_profiles WHERE feature = 1";
    } else {
        $sql = "SELECT COUNT(*) as count FROM user_profiles WHERE status = '$filter'";
    }
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $counts[$filter] = $row['count'];
}

// Fetch count for all profiles
$sql = "SELECT COUNT(*) as count FROM user_profiles";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$counts['all'] = $row['count'];

// Handle filter selection
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$whereClause = '';
if ($filter == 'active' || $filter == 'inactive') {
    $whereClause = "WHERE status = '$filter'";
} elseif ($filter == 'paid' || $filter == 'unpaid') {
    $whereClause = "WHERE payment = '$filter'";
} elseif ($filter == 'feature') {
    $whereClause = "WHERE feature = 1";
}

// Fetch profiles based on the selected filter
$sql = "SELECT * FROM user_profiles $whereClause";
$result = $conn->query($sql);

// Handle status update
if (isset($_GET['id']) && isset($_GET['status'])) {
    $user_id = $_GET['id'];
    $new_status = $_GET['status'];

    // Update status in the database
    $update_sql = "UPDATE user_profiles SET status='$new_status' WHERE id=$user_id";
    if ($conn->query($update_sql) !== TRUE) {
        echo "Error updating status: " . $conn->error;
    } else {
        // Redirect back to the same page after updating status
        header("Location: allprofiles.php?filter=$filter");
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
        
        body{
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
            /* margin-left: 50px; */
        }
        .user-card {
            border: 1px solid #ccc;
            padding: 20px;
           
        }
        .user-card img {
            max-width: 100%;
            height: auto;
            
        }
        
        .btn {
        width: 100px; /* Adjust width as needed */
        height: 40px; /* Adjust height as needed */
        margin-right: 10px; /* Adjust margin between buttons */
    }
    .button-row {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .button-row .btn {
            flex: 1;
        }
        .user-card {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: white;
}

.user-card .user-image {
    height: 300px; /* Set a fixed height for the image container */
    overflow: hidden; /* Ensure that images don't overflow the container */
}

.user-card .user-image img {
    width: 100%; /* Ensure images fill the container width */
    height: auto; /* Maintain aspect ratio */
}
.custom-scroll{
    overflow-y:auto;
}
::-webkit-scrollbar {
    width: 1px; 
}
.button-container {
    border: 1px solid #ccc;
    padding: 15px;
    background-color: white;
    display: flex;
    margin-left:20px;
    justify-content: flex-start;
    width: 985PX;
    margin-top: 0px;
  }
  .button-container .btn {
    margin-right: 10px; /* Spacing between buttons */
    padding: 8px;
    width: 500px;
  }
  .button-containers {
    border: 1px solid #ccc;
    padding: 15px;
    background-color: white;
    display: flex;
    margin-left:20px;
    justify-content: flex-start;
    width: 985PX;
    margin-top: 0px;
  }
  .button-containers .btn {
    margin-right: 10px; /* Spacing between buttons */
    padding: 8px;
    width: 180px;
  }
@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr;
        margin-left: -45px;
        /* margin-left: 40px; Add a left margin of 40px */
        width: auto;
    }
}


@media (min-width: 768px) {
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(calc(33.33% - 20px), 1fr));
        gap: 20px;
        padding: 20px;
     
    }
   
   
}


@media (min-width: 992px) {
    .container {
        max-width: 960px;
        
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
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
                <a href="index.html"><img src="assets/images/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>

               
            </div>
           
           
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Profiles</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Profiles</span></a></li>
                            <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a>
                            <ul class="sub-menu">
                            <li><a href="Active.php" class="sub-menu-item">Active Members</a></li>
                            <li><a href="inactive.php" class="sub-menu-item ">Inactive Members</a></li>
                            <li><a href="paid.php" class="sub-menu-item">Paid Members</a></li>
                            <li><a href="unpaid.php" class="sub-menu-item ">Unpaid Members</a></li>
                            <li><a href="allprofiles.php" class="sub-menu-item active">All Profiles</a></li>
                            </ul>
                            </li>                           
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="feacture.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members </span></a></li>

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="express.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Expreess Interest </span></a></li>
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password  </span></a></li>
                         
                            <button class="logout-btn" onclick="location.href='login.php'">Logout</button>


                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->
        <div class="main-content">
            <div class="top-boxes mb-10">
            <div class="container mt-5">
            <h4 style="margin-left:25px;margin-top:-50px;">All Members</h4>
            <div class="button-container">
            
            <a href="allprofiles.php" class="btn btn-success"><i class="bi bi-people"></i> All Member</a>
            <a href="addmembers.php" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Member</a>
      </div>
      <div class="button-containers">
      <a href="allprofiles.php?filter=active" class="btn btn-primary">Active (<?php echo $counts['active']; ?>)</a>
        <a href="allprofiles.php?filter=inactive" class="btn btn-secondary">Inactive (<?php echo $counts['inactive']; ?>)</a>
        <a href="allprofiles.php?filter=paid" class="btn btn-success">Paid (<?php echo $counts['paid']; ?>)</a>
        <a href="allprofiles.php?filter=unpaid" class="btn btn-warning">Unpaid (<?php echo $counts['unpaid']; ?>)</a>
        <a href="allprofiles.php?filter=feature" class="btn btn-info">Featured (<?php echo $counts['feature']; ?>)</a>
        <a href="allprofiles.php" class="btn btn-dark">All Profiles (<?php echo $counts['all']; ?>)</a>
                </div>
          
            <div class="grid-container">
            <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='user-card'>";

         echo "<div class='user-image'>"; // Add a container div for the image
        echo "<img src='" . $row["photo1_url"] . "' alt='User Photo'>";
        echo "</div>"; // Close the container div for the image
        echo "<p><strong>Name:</strong> " . $row["firstName"]. " " . $row["lastName"]. "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
        echo "<p><strong>Gender:</strong> " . $row["gender"]. "</p>";
        echo "<p><strong>Mobile Number:</strong> " . $row["mobile"]. "</p>";
        echo "<p><strong>Age:</strong> " . $row["dob"]. "</p>";
       
        echo "<div class='button-row'>";
        echo "<form method='get'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'/>";
        echo "<input type='hidden' name='status' value='" . ($row['status'] == 'active' ? 'inactive' : 'active') . "'/>";
        echo "<button type='submit' class='btn btn-" . ($row['status'] == 'active' ? 'danger' : 'success') . "' style='width: 125px'>" . ($row['status'] == 'active' ? 'Inactive' : 'Active') . "</button>";

        echo "</form>";

 
        $button_class = 'btn btn-success'; 

       
        if ($row['payment'] == 'unpaid') {
            $button_class = 'btn btn-danger'; 
            $href = 'approve.php?id=' . $row['id']; 
        } elseif ($row['payment'] == 'Renewal') {
            $button_class = 'btn btn-secondary'; 
            $href = 'renewal.php?id=' . $row['id']; 
        } else {
            $href = 'allprofiles.php';
        }
        
        
echo "<a href='" . $href . "' class='" . $button_class . "' style='width: 150px;'>" . $row['payment'] . "</a>";        echo "</div>";
echo "<div class='button-row'>";
echo "<a href='editing.php?id=" . $row['id'] . "' class='btn btn-edit btn-warning' style='width: 150px;color:white;'>Edit</a>";

echo "<a href='sample.php?id=" . $row['id'] . "' class='btn btn-view btn-info' style='width: 150px;'>View More</a>";
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
