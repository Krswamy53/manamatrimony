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
        header("Location: demos.php?filter=$filter");
        exit;
    }
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
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
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
        }
        .user-card {
            border: 1px solid #ccc;
            padding: 20px;
           
        }
        .user-card img {
            max-width: 100%;
            height: auto;
            
        }
        
      
   
        .user-row {
    display: flex;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    padding: 10px;
}

.user-image img {
    width: 150px;
    height: 150px;
    margin-left: 20px;
    margin-top: 45PX;
}

.user-info {
    flex: 1;
}

.user-details {
    flex: 1;
    margin-top: 35px;
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

.button-group-container {
  background-color: #fff; 
  border-radius: 8px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  padding: 8px; 


}
.btn-edit, .btn-view {
    display: inline-block;
    width: 150px;
    margin-right: 10px;
}
.button-container {
    border: 1px solid #ccc;
    padding: 15px;
    background-color: white;
    display: flex;
    /* margin-left:20px; */
    justify-content: flex-start;
    width: 1005PX;
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
    /* margin-left:20px; */
    justify-content: flex-start;
    width: 1005PX;
    margin-top: 0px;
  }
  .button-containers .btn {
    margin-right: 10px; /* Spacing between buttons */
    padding: 8px;
    width: 180px;
  }
  .toolbar {
        background-color: #fff; /* White background for the toolbar */
        border: 1px solid #ccc; /* Light gray border */
        padding: 8px 10px;
        display: flex;
        align-items: center;
    }
    .toolbar * {
        margin-right: 10px; /* Spacing between elements */
    }
    .toolbar label {
        margin-bottom: 0; 
        margin-left: 5px;
    }
    #selectAll{
        margin-left: 15px;
    }
    .btn-custom {
        color: #fff; /* White text */
        background-color: #dc3545; /* Red background */
        border-color: #dc3545; 
        width: 206px;
    }
    .btn-custom:hover {
        background-color: #c82333; /* Darker red on hover */
        border-color: #bd2130;
    }
    .btn-custom:focus, .btn-custom:active {
        box-shadow: none; /* Remove focus shadow */
    }
    .button-row {
    display: flex;
    gap: 10px;
}
.button-row a {
    width: 150px;
}
.user-checkbox{
    margin-top: -200px;
}
.user-info{
    margin-left: 30px;
/* margin-top: 35px; */
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
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>
    
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
            <!-- sidebar menu -->
        </div>




        <!-- main sidebar -->
        <div class="main-content">
            <div class="top-boxes mb-10">
            <div class="container mt-5">
            <h4 style="margin-left:25px;margin-top:-50px;">All Profiles</h4>
            <div class="button-container">
            
            <a href="allprofiles.php" class="btn btn-success"><i class="bi bi-people"></i> All Member</a>
            <a href="addmembers.php" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Member</a>
      </div>
      <br>
      <div class="button-containers">
      <a href="demos.php?filter=active" class="btn btn-primary">Active (<?php echo $counts['active']; ?>)</a>
        <a href="demos.php?filter=inactive" class="btn btn-secondary">Inactive (<?php echo $counts['inactive']; ?>)</a>
        <a href="demos.php?filter=paid" class="btn btn-success">Paid (<?php echo $counts['paid']; ?>)</a>
        <a href="demos.php?filter=unpaid" class="btn btn-warning">Unpaid (<?php echo $counts['unpaid']; ?>)</a>
        <!-- <a href="demos.php?filter=feature" class="btn btn-info">Featured (<?php echo $counts['feature']; ?>)</a> -->
        <a href="demos.php" class="btn btn-dark">All Profiles (<?php echo $counts['all']; ?>)</a>
                </div>
<br>
<div class="toolbar">
        <input type="checkbox" id="selectAll">
        <label for="selectAll">Select All</label>
        <button onclick="submitForm('delete')" class="btn btn-custom"><i class="fas fa-trash-alt"></i> Delete</button>
        <button onclick="submitForm('activate')" class="btn btn-custom"><i class="fas fa-check"></i> Active</button>
        <button onclick="submitForm('deactivate')" class="btn btn-custom"><i class="fas fa-times"></i> Inactive</button>
        <button class="btn btn-custom"><i class="fas fa-ban"></i> Suspended</button>
    </div>
    <br>
        <?php
       if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='user-row'>";
            echo "<input type='checkbox' name='selected_users[]' class='user-checkbox' value='" . $row['id'] . "' />"; // Add checkbox

            echo "<div class='user-image'>";
      
              
               
            
            

            echo "<img src='" . $row["photo1_url"] . "' alt='User Photo'>";
            echo "</div>";
            
            echo "<div class='user-info'>";
            // Remove the line below to hide the ID
            // echo "<p><strong>ID:</strong> " . $row["id"]. "</p>";
            echo "<p style='color: orangered; margin-left: 0px;'><strong><em>" . $row["firstName"]. " " . $row["lastName"]. "</em></strong> <span class='badge bg-success'>SL" . $row["id"] . " </span></p>";

            echo "<p><strong>Name:</strong> " . $row["firstName"]. " " . $row["lastName"]. "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
            echo "<p><strong>Country:</strong> " . $row["inputCountry"]. "</p>";
            echo "<p><strong>Education:</strong> " . $row["highestEducation"]. "</p>";
            echo "<div class='button-row'>"; // Flexbox and gap are defined in the stylesheet
            // Approve button
            // echo "<a href='approve.php?id=" . $row['id'] . "' class='btn btn-approve btn-success'>Active To Approve</a>";
            // Edit Button $button_class = 'btn btn-success'; 

       
            $button_class = 'btn btn-success'; 

       
        if ($row['payment'] == 'unpaid') {
            $button_class = 'btn btn-danger'; 
            $href = 'approve.php?id=' . $row['id']; 
        } elseif ($row['payment'] == 'Renewal') {
            $button_class = 'btn btn-secondary'; 
            $href = 'renewal.php?id=' . $row['id']; 
        } else {
            $href = 'demos.php';
        }
        
        
        echo "<a href='" . $href . "' class='" . $button_class . "' style='width: 150px;'>" . $row['payment'] . "</a>"; 
        echo "<a href='editing.php?id=" . $row['id'] . "' class='btn btn-edit btn-warning'>Edit</a>";
            // View More Button
            echo "<a href='view.php?id=" . $row['id'] . "' class='btn btn-view btn-info ok'>View More</a>";            echo "</div>";
            
            echo "</div>";
            echo "<div class='user-details'>";
            echo "<p><strong>Religion:</strong> " . $row["religion"]. "</p>";
            echo "<p><strong>Caste:</strong> " . $row["caste"]. "</p>"; 
            echo "<p><strong>Mobile Number:</strong> " . $row["mobile"]. "</p>";
        // Assuming $row["dob"] contains the date of birth in the format "YYYY-MM-DD"
$dateOfBirth = new DateTime($row["dob"]);
$today = new DateTime();
$age = $today->diff($dateOfBirth)->y;

echo "<p><strong>Age:</strong> " . $age . "</p>";

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
            

        <script src="assets/js/jquery-3.6.0.min.js"></script>
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
<script>
        function submitForm(action) {
            let selectedIds = [];
            document.querySelectorAll('.user-checkbox:checked').forEach(function(checkbox) {
                selectedIds.push(checkbox.value);
            });

            if (selectedIds.length === 0) {
                alert("Please select at least one user.");
                return;
            }

            if (action === 'delete') {
                document.getElementById('deleteIds').value = selectedIds.join(',');
                document.getElementById('deleteForm').submit();
            } else if (action === 'activate' || action === 'deactivate') {
                document.getElementById('statusIds').value = selectedIds.join(',');
                document.getElementById('statusValue').value = action === 'activate' ? 'Active' : 'Inactive';
                document.getElementById('statusForm').submit();
            }
        }
    </script>
    <script>
    function submitForm(action) {
        let selectedIds = [];
        document.querySelectorAll('.user-checkbox:checked').forEach(function(checkbox) {
            selectedIds.push(checkbox.value);
        });

        if (selectedIds.length === 0) {
            alert("Please select at least one user.");
            return;
        }

        let form = document.createElement('form');
        form.method = 'post';

        if (action === 'delete') {
            form.action = 'delete_users.php';
            form.innerHTML = '<input type="hidden" name="ids" value="' + selectedIds.join(',') + '">';
        } else if (action === 'activate' || action === 'deactivate') {
            form.action = 'update_status.php';
            let status = action === 'activate' ? 'Active' : 'Inactive';
            form.innerHTML = '<input type="hidden" name="ids" value="' + selectedIds.join(',') + '">' +
                             '<input type="hidden" name="status" value="' + status + '">';
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>

</body>
</html>