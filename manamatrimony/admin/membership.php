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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $planName = $_POST['planName'];
    $planType = $_POST['planType'];
    $planDuration = $_POST['planDuration'];
    $allowContacts = $_POST['allowContacts'];
    $status = $_POST['status'];
    $allowMessages = $_POST['allowMessages'];
    $planAmount = $_POST['planAmount'];
    $allowProfile = $_POST['allowProfile'];
    $chat = isset($_POST['chat']) ? $_POST['chat'] : '';

    // Insert data into database
    $sql = "INSERT INTO membership_plans (planName, planType, planDuration, allowContacts, status, allowMessages, planAmount, allowProfile, chat) VALUES ('$planName', '$planType', '$planDuration', '$allowContacts', '$status', '$allowMessages', '$planAmount', '$allowProfile', '$chat')";
    
    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
<head><style>body {
    font-family: Arial, sans-serif;
}

.container {
    width: 78%;
    margin: auto;

    background-color: #f8f8f8;
    padding: 20px;
    margin-left: 320px;
}

.header {
    font-size: 24px;
    margin-bottom: 10px;
}

.breadcrumb {
    /* list-style: none;
    overflow: hidden; */
    font-size: 14px;
    text-align: right;
    margin-bottom: 0;/ Remove default margin / margin-left: 600px;
}

.breadcrumb li {
    display: inline-block;

}

.breadcrumb li a {
    text-decoration: none;
    color: black;
    background: #dddddd;
    padding: 5px 10px;
    border-radius: 5px;

}

.breadcrumb li a:hover {
    background: #cccccc;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 24px 15px 32px;
    text-align: justify;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    position: relative;
}

.button i {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
}

.advertisement-box {
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 8px;

}


@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");



input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 20px;
}

.row {
    display: flex;
    justify-content: space-between;

}

.column {
    flex: 45%;
    margin-right: 5%;
}

.radio-group {
    display: inline-block;
}

.radio-group label {
    display: inline-block;
    margin-right: 10px;
}

.button-container {

    margin-left: 450px;
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
</style>
</head>

<body>
    <div class="container-fluid">
        <button class="sidebar-collapse-mini d-xl-none d-block"><i class="bi bi-list"></i></button>
        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini">
            <div class="logo">
                <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
                <h3>Subhalekha</h3>

            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                        <ul>
                            <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                            <!-- <li class="sidebar-title"><span>Menu</span></li> -->
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Dashboard" tabindex="0"><i
                                        class="bi bi-grid-fill"></i> <span>Dashboard</span></a></li>

                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link active"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Profiles</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>filter Profiles</span></a>
                            </li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Profiles</span></a></li>
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a>
                            </li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link"
                                    data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements"
                                    tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password </span></a>
                            </li>

                            <button class="logout-btn" onclick="location.href='login.php'">Logout</button>

                            <!-- <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-stack"></i> <span>Components</span></a>
                                <ul class="sub-menu">
                                    <li><a href="component_alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="component_badge.html" class="sub-menu-item">Badge</a></li>
                                    <li><a href="component_button.html" class="sub-menu-item">Button</a></li>
                                    <li><a href="component_card.html" class="sub-menu-item">Card</a></li>
                                    <li><a href="component_carousel.html" class="sub-menu-item">Carousel</a></li>
                                    <li><a href="component_list_group.html" class="sub-menu-item">List Group</a></li>
                                    <li><a href="component_modal.html" class="sub-menu-item">Modal</a></li>
                                    <li><a href="component_progress.html" class="sub-menu-item">Progress</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="extra_component.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Extra Components" tabindex="0"><i class="bi bi-collection-fill"></i> <span>Extra Components</span></a></li>
                            <li class="sidebar-title"><span>Forms & Tables</span></li>
                            <li class="sidebar-item"><a href="form_element.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Elements" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Form Elements</span></a></li>
                            <li class="sidebar-item"><a href="form_layout.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Layout" tabindex="0"><i class="bi bi-file-earmark-medical-fill"></i> <span>Form Layout</span></a></li>
                            <li class="sidebar-item"><a href="editor.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Form Editor" tabindex="0"><i class="bi bi-pen-fill"></i> <span>Text Editor</span></a></li>
                            <li class="sidebar-item"><a href="table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Table" tabindex="0"><i class="bi bi-grid-1x2-fill"></i> <span>Table</span></a></li>
                            <li class="sidebar-item"><a href="data_table.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Datatable" tabindex="0"><i class="bi bi-file-earmark-spreadsheet-fill"></i> <span>Datatable</span></a></li>
                            <li class="sidebar-title"><span>Extra UI</span></li>
                            <li class="sidebar-item"><a href="widget.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets" tabindex="0"><i class="bi bi-pentagon-fill"></i> <span>Widgets</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons" tabindex="0"><i class="bi bi-egg-fill"></i> <span>Icons</span></a>
                                <ul class="sub-menu">
                                    <li><a href="bootstrap_icon.html" class="sub-menu-item">Bootstrap Icons </a></li>
                                    <li><a href="font_awesome.html" class="sub-menu-item">Fontawesome</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="chart.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts" tabindex="0"><i class="bi bi-bar-chart-fill"></i> <span>Apexcharts</span></a></li>
                            <li class="sidebar-title"><span>Pages</span></li>
                            <li class="sidebar-item"><a href="email.html" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Email Application" tabindex="0"><i class="bi bi-envelope-fill"></i> <span>Email Application</span></a></li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" tabindex="0"><i class="bi bi-person-badge-fill"></i> <span>Authentication</span></a>
                                <ul class="sub-menu">
                                    <li><a href="login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="register.html" class="sub-menu-item">Register</a></li>
                                    <li><a href="password.html" class="sub-menu-item">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item has-sub">
                                <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Errors" tabindex="0"><i class="bi bi-x-octagon-fill"></i> <span>Errors</span></a>
                                <ul class="sub-menu">
                                    <li><a href="403.html" class="sub-menu-item">403</a></li>
                                    <li><a href="404.html" class="sub-menu-item">404</a></li>
                                    <li><a href="500.html" class="sub-menu-item">500</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <div class="container">

            <div class="header">Manage Plan</div>
            <div>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> &#9751;Home</a></li>
                    <li><a href="#">Manage plan</a></li>
                </ul>

            </div>
            <div class="advertisement-box">
                <button class="button"><i class="gg-menu"></i>All memebership plans</button>
            </div>
            <br>
            <form method="post">
                <div class="row">
                    <div class="column">
                        <label for="planName">Plan Name:</label><br>
                        <input type="text" id="planName" name="planName"><br>
                        <label for="planType">Plan Type:</label><br>
                        <input type="text" id="planType" name="planType"><br>
                        <label for="planDuration">Plan Duration:</label><br>
                        <input type="text" id="planDuration" name="planDuration"><br>
                        <label for="allowContacts">Allow Contacts:</label><br>
                        <input type="text" id="allowContacts" name="allowContacts"><br>
                        <label for="status">Status:</label><br>
                        <select id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select><br>
                    </div>
                    <div class="column">


                        <label for="allowMessages">Allow Messages:</label><br>
                        <input type="text" id="allowMessages" name="allowMessages"><br>
                        <label for="planAmount">Plan Amount:</label><br>
                        <input type="text" id="planAmount" name="planAmount"><br>
                        <label for="allowProfile">Allow Profile:</label><br>
                        <input type="text" id="allowProfile" name="allowProfile"><br>
                        <label for="chat">Chat:</label><br>
                        <div class="radio-group">
                            <br>
                            <input type="radio" id="yes" name="chat" value="yes">
                            <label for="yes">Yes</label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" id="no" name="chat" value="no">
                            <label for="no">No</label>
                        </div>

                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
            </form>

        </div>

</body>

</html>