<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];

include "db.php";

// Delete selected rows
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_rows'])) {
        foreach ($_POST['delete_rows'] as $delete_id) {
            $sql = "DELETE FROM messages WHERE id = $delete_id";
            if ($conn->query($sql) !== TRUE) {
                echo "Error deleting record: " . $conn->error;
            }
        }
    }
}

$conn->close();
?>
<?php
// Database connection
include "db.php";

// Query to get the count of messages from your table
$messageCountQuery = "SELECT COUNT(*) AS message_count FROM messages";
$messageCountResult = mysqli_query($conn, $messageCountQuery); // Use $conn instead of $connection

// Fetch the count
if ($messageCountResult) {
    $row = mysqli_fetch_assoc($messageCountResult);
    $messageCount = $row['message_count'];
} else {
    // Handle errors if the query fails
    $messageCount = 0; // Default count if query fails
}

// Close the connection after use
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Interest</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
        }

        .border-bottom {
            height: 2px;
        }

        table th {
            white-space: nowrap;
        }

        table td {
            vertical-align: middle;
        }

        .custom-select {
            width: auto;
            display: inline-block;
        }

        .form-inline .form-control {
            width: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: none;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: orangered;
        }

        .custom-scroll {
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 1px;
        }

        .container {
            margin-left: 300px;
            width: 78%;
        }
       
    </style>
</head>
<body>
<div class="fixed-sidebar sidebar-mini">
    <div class="logo">
        <button class="sidebar-collapse"><i class="bi bi-list"></i></button>
        <a href="index.html"><img src="assets/images/l.PNG" alt="LOGO" style="height: 80px; width: 150px; margin-left: -20px;"></a>
    </div>
    <div class="menu">
        <div class="custom-scroll">
            <div class="sidebar-menu">
                <ul>
                    <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>
                    <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                    <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Profiles</span></a></li>
                    <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Profiles</span></a></li>
                    <li class="sidebar-item has-sub">
                        <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a>
                        <ul class="sub-menu">
                            <li><a href="Active.php" class="sub-menu-item">Active Members</a></li>
                            <li><a href="inactive.php" class="sub-menu-item">Inactive Members</a></li>
                            <li><a href="paid.php" class="sub-menu-item">Paid Members</a></li>
                            <li><a href="unpaid.php" class="sub-menu-item">Unpaid Members</a></li>
                            <li><a href="allprofiles.php" class="sub-menu-item">All Profiles</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans</span></a></li>
                    <li class="sidebar-item"><a href="feacture.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members</span></a></li>
                    <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories</span></a></li>
                    <li class="sidebar-item"><a href="express.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Express Interest</span></a></li>
                    <li class="sidebar-item"><a href="advertise.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Advertisements</span></a></li>
                    <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile</span></a></li>
                    <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password</span></a></li>
                    <form method="POST" action="logout.php">
                        <button class="logout-btn" type="submit">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Express Interest</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Express Interest</li>
            </ol>
        </nav>
    </div>
    
    <div class="card mb-3">
    <div class="card-body text-center">
        <button class="btn btn-success btn-lg">
            <i class="fa-regular fa-bars"></i> All Express Interest 
            <span class="badge badge-light"><?php echo $messageCount; ?></span>
        </button>
    </div>
</div>
    
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center" style="margin-left: 30px;">
            <input type="checkbox" class="form-check-input" id="mainCheckbox">
            <button class="btn btn-danger" id="deleteButton">
                <i class="fa fa-trash"></i> Delete
            </button>
        </div>
    </div>
    
    <div class="border-bottom border-success mb-2"></div>
    <h5>ALL EXPRESS INTEREST LIST</h5>
    <!-- <div class="d-flex justify-content-between align-items-center mb-2">
        <div>
            <label for="recordsPerPage" class="mr-2">Records Per Page :-</label>
            <select id="recordsPerPage" class="custom-select">
                <option selected>10</option>
                <option>20</option>
                <option>50</option>
            </select>
        </div>
        <div class="form-inline">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" class="form-control">
        </div>
    </div> -->
    <br>
    <form id="deleteForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <th>Select</th>
                <th>Sender ID</th>
                <th>Receiver ID</th>
                <th>Message</th>
                <th>Sent At</th>
            </tr>
            <?php
          include "db.php";

            $sql = "SELECT id, sender_id, receiver_id, message, sentat FROM messages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td><input type='checkbox' name='delete_rows[]' class='rowCheckbox' value='" . $row["id"] . "'></td>
                            <td>" . $row["sender_id"]. "</td>
                            <td>" . $row["receiver_id"]. "</td>
                            <td>" . $row["message"]. "</td>
                            <td>" . $row["sentat"]. "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No results</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </form>
</div>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
   
    <script src="assets/js/main.js"></script>
<script>
        // Select/Deselect all checkboxes based on mainCheckbox
        document.getElementById('mainCheckbox').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('.rowCheckbox');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById('mainCheckbox').checked;
            });
        });

        // Submit the form on delete button click
        document.getElementById('deleteButton').addEventListener('click', function() {
            // Perform the delete action (e.g., form submission)
            document.getElementById('deleteForm').submit();
            // Show alert after deletion
            alert('Items have been deleted successfully');
        });

        // Update mainCheckbox based on individual rowCheckboxes
        document.querySelectorAll('.rowCheckbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var checkboxes = document.querySelectorAll('.rowCheckbox');
                var allChecked = true;
                checkboxes.forEach(function(checkbox) {
                    if (!checkbox.checked) {
                        allChecked = false;
                    }
                });
                document.getElementById('mainCheckbox').checked = allChecked;
            });
        });
    </script>
    
</body>
</html>
