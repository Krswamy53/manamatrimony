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
    <title>ServoBoard - HTML Admin Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        header{
            background-color:#B4C424;
        }
        .logout-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 35px;
            cursor: pointer;
            border-radius: 5px;
            /* margin-top: 20px; */
            margin-left: 20px;
        }
    </style>
</head>
<body>
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
                        <li class="sidebar-item"><a href="index.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" tabindex="0"><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a></li>
                        <li class="sidebar-item"><a href="extra_component.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Extra Components" tabindex="0"><i class="bi bi-collection-fill"></i> <span>Add Profiles</span></a></li>
                        <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-stack"></i> <span>All Profiles</span></a>
                            <ul class="sub-menu">
                                <li><a href="component_alert.html" class="sub-menu-item">Active Members</a></li>
                                <li><a href="component_badge.html" class="sub-menu-item">Inactive Members</a></li>
                                <li><a href="component_badge.html" class="sub-menu-item">Paid Members</a></li>
                                <li><a href="component_badge.html" class="sub-menu-item">Unpaid Members</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="form_layout.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Layout" tabindex="0"><i class="bi bi-file-earmark-medical-fill"></i> <span>Filter Profiles</span></a></li>
                        <li class="sidebar-item"><a href="editor.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Editor" tabindex="0"><i class="bi bi-pen-fill"></i> <span>Express Interest</span></a></li>
                        <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-stack"></i> <span>Advertisement</span></a>
                            <ul class="sub-menu">
                                <li><a href="component_alert.html" class="sub-menu-item">Add Advertisement</a></li>
                                <li><a href="component_badge.html" class="sub-menu-item">All Advertisements</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Table" tabindex="0"><i class="bi bi-grid-1x2-fill"></i> <span>Success Stories</span></a></li>
                        <li class="sidebar-item"><a href="data_table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Datatable" tabindex="0"><i class="bi bi-file-earmark-spreadsheet-fill"></i> <span>Feature Members</span></a></li>
                        <li class="sidebar-item"><a href="widget.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets" tabindex="0"><i class="bi bi-pentagon-fill"></i> <span>Admin Profile</span></a></li>
                        <li class="sidebar-item"><a href="chart.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts" tabindex="0"><i class="bi bi-bar-chart-fill"></i> <span>Change Password</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navbar header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-green" >
            <div class="container-fluid">
                
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">ServoBoard</a> -->
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <h5 style="color:yellow;">&#129333;Welcome, <?php echo $name; ?></h5>
                    <button class="logout-btn" onclick="location.href='login.php'">Logout</button>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
  
</body>
</html>
