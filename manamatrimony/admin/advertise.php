<?php
session_start();
if(isset($_SESSION['name'])) {
  $name = $_SESSION['name'];
} else {
  // Redirect to login page if not logged in
  header("Location: login.php");
  exit;
}
if (!isset($_SESSION['name'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Connect to MySQL database
    include "db.php";


// Approve button clicked
if (isset($_POST['approveButton']) && isset($_POST['deleteIds'])) {
  $ids = $_POST['deleteIds'];
  $sql = "UPDATE advertisements SET Status = 'Approved' WHERE id IN (" . implode(",", $ids) . ")";
  if ($conn->query($sql) === TRUE) {
      // Do something after successful approval
  } else {
      echo "Error updating records: " . $conn->error;
  }
}



    // Unapprove button clicked
    if (isset($_POST['unapproveButton']) && isset($_POST['deleteIds'])) {
        $ids = $_POST['deleteIds'];
        $sql = "UPDATE advertisements SET Status = 'Unapproved' WHERE id IN (" . implode(",", $ids) . ")";
        if ($conn->query($sql) === TRUE) {
            // Do something after successful unapproval
        } else {
            echo "Error updating records: " . $conn->error;
        }
    }

    // Delete button clicked
    if (isset($_POST['deleteButton']) && isset($_POST['deleteIds'])) {
        $ids = $_POST['deleteIds'];
        $sql = "DELETE FROM advertisements WHERE id IN (" . implode(",", $ids) . ")";
        if ($conn->query($sql) === TRUE) {
            // Do something after successful deletion
        } else {
            echo "Error deleting records: " . $conn->error;
        }
    }

    $conn->close();
}

// Step 1: Connect to MySQL database
include "db.php";


// Step 2: Fetch count of user profiles
$count_sql = "SELECT COUNT(*) as total_count FROM advertisements"; // Change 'user_profiles' to the name of your table
$count_result = $conn->query($count_sql);
$total_count = $count_result->fetch_assoc()['total_count'];

// Step 3: Fetch count of members with status "Approved"
$approved_sql = "SELECT COUNT(*) as approved_count FROM advertisements WHERE Status = 'Approved'";
$approved_result = $conn->query($approved_sql);
$approved_count = $approved_result->fetch_assoc()['approved_count'];

// Step 4: Fetch count of members with status "Unapproved"
$unapproved_sql = "SELECT COUNT(*) as unapproved_count FROM advertisements WHERE Status = 'Unapproved'";
$unapproved_result = $conn->query($unapproved_sql);
$unapproved_count = $unapproved_result->fetch_assoc()['unapproved_count'];

// Step 5: Fetch count of members with status "Pending"

// Step 5: Fetch data from the advertisements table
$sql = "SELECT id, status, adName, adDate, adLevel, adLink, adImage, contactNumber, contactPerson, adStatus FROM advertisements"; // Include the 'status' column in the SELECT statement
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matrimonial - Admin Template</title>
<!-- Bootstrap CSS -->

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
    .btn-toolbar.mb-3 {
        margin-left: 30px;
        margin-top: 8px;
      /* padding:20px; */
      
      
        
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
    .button-group-container {
  background-color: #fff; 
  border-radius: 8px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  padding: 8px; 


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
.container{
  margin-left: 270px;
  width: auto;
}
table{
  width: 50%;
}
.custom-scroll{
    overflow-y:auto;
}
::-webkit-scrollbar {
    width: 1px; / Set the width of the scrollbar /
}
#actionButtons button {
        width: 244px; /* Adjust the value to your desired width */
    }
    .custom-checkbox {
  margin-left: 20px; /* Align to the right */
  width: 50px; /* Set the width to 200px */
}
.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; /* Ensure it's above other content */
}

@media (max-width: 768px) {
    .container {
        padding: 0 20px; /* Increase padding for smaller screens */
        
        width:60%;
    }

    .btn-custom-width {
        width: 100%; /* Make buttons full width */
        margin-bottom: 10px; /* Add some spacing between buttons */
    }

    .custom-scroll {
        max-height: 300px; /* Limit height for scrollable elements on smaller screens */
    }

    .container {
        margin-left: 0; /* Remove left margin for smaller screens */
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
                <a href="index.php"><img src="uploads/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>

               
            </div>
           
           
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
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
                            <!-- <li class="sidebar-item"><a href="feacture.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members </span></a></li> -->

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <!-- <li class="sidebar-item"><a href="express.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Expreess Interest </span></a></li> -->
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
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
        <div class="container mt-3">
  <!-- Button group -->
  <div class="button-group-container">
  <div class="btn-toolbar mb-3">
  <button type="button" class="btn btn-success mr-3 custom-width">
     <a href="advertisement.php" style="color:white;"> + Add Advertisement </a> 
    </button>
    <button type="button" class="btn btn-success mr-3 custom-width">
      All Advertise <span class="badge badge-light"><?php echo $total_count; ?></span>
    </button>
    <button type="button" id="btnApproved" class="btn btn-success mr-3 custom-width">Approved Advertise
      <span class="badge badge-light"><?php echo $approved_count; ?></span>
    </button>
    <button type="button" id="btnUnapproved" class="btn btn-warning mr-3 custom-width">
    Unapproved Advertise <span class="badge badge-light"><?php echo $unapproved_count; ?></span>
</button>


    
</div>
</div>
<br>
  <!-- Action buttons -->
  <form id="deleteForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="mb-3" id="actionButtons" >
    <div class="button-group-container">
    <td><input type="checkbox" id="selectAll" class="custom-checkbox" /></td>
      <td colspan="6">Select All</td>
      <button type="submit" class="btn btn-danger mr-2 btn-custom-width" name="deleteButton">Delete</button>
      <button type="submit" class="btn btn-success mr-2 btn-custom-width" name="approveButton">Approve</button>
      <button type="submit" class="btn btn-warning btn-custom-width" name="unapproveButton">Unapprove</button>
    </div>
    </div>

    <!-- List header -->
    <!-- <h2 class="mb-3">ALL ABOUT ME LIST</h2> -->

    <!-- Table actions -->
    <div class="row mb-3">

      <!-- <div class="col d-flex justify-content-end">
    Search by brideID: <input type="text" class="form-control ml-2" id="searchInput" style="width: auto;">
  </div> -->
    </div>

    <!-- Table -->
   <!-- Table -->
<!-- Table -->
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Select</th>
            <th scope="col">Status</th>
            <th scope="col">edit</th>
            <th scope="col">adName</th>
            <th scope="col">adDate</th>
            <th scope="col">adLevel</th>
            <th scope="col">adLink</th>
            <th scope="col">adImage</th>
            <!-- <th scope="col">contactNumber</th> -->
            <th scope="col">contactPerson</th>
            <!-- <th scope="col">adStatus</th> -->
        </tr>
    </thead>
    <tbody id="tableBody">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr data-id='" . $row["id"] . "'>";
                
                // Checkbox
                echo "<td><input type='checkbox' class='custom-checkbox' data-status='" . ($row["Status"] ?? '') . "' name='deleteIds[]' value='" . $row["id"] . "'></td>";
                
                // Status column with icons and colors
                echo "<td>";
                if(isset($row["status"])) { // Changed "Status" to "status"
                    if($row["status"] === "Approved") {
                        echo "<i class='bi bi-hand-thumbs-up-fill text-success'></i>"; // Like icon with green color
                    } elseif($row["status"] === "Unapproved") {
                        echo "<i class='bi bi-hand-thumbs-down-fill text-danger'></i>"; // Dislike icon with red color
                    }
                }
                echo "</td>";
// Edit button
echo "<td><a href='edit.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a></td>";

                // Other columns
                echo "<td>" . $row["adName"] . "</td>";
                echo "<td>" . $row["adDate"] . "</td>";
                echo "<td>" . $row["adLevel"] . "</td>";
                echo "<td>" . $row["adLink"] . "</td>";
                echo "<td><img src='uploads/" . $row["adImage"] . "' alt='Advertisement Image' style='width: 55px; height: 70px; border-radius: 60%;'></td>";

                // echo "<td>" . $row["contactNumber"] . "</td>";
                echo "<td>" . $row["contactPerson"] . "</td>";
                // echo "<td>" . $row["adStatus"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No data found</td></tr>";
        }
        ?>
    </tbody>
</table>




  </form>
</div>

<!-- Bootstrap JS and dependencies -->
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
$(document).ready(function() {
  // Check/uncheck select all checkbox
  $('#selectAll').click(function() {
    $('.custom-checkbox').prop('checked', $(this).prop('checked'));
    toggleActionButtons(); // Toggle action buttons visibility
  });

  // Check/uncheck individual checkboxes
  $('.custom-checkbox').click(function() {
    toggleActionButtons(); // Toggle action buttons visibility
  });

  // Function to toggle action buttons visibility based on checkbox selection
  function toggleActionButtons() {
    if ($('.custom-checkbox:checked').length > 0) {
      $('#actionButtons').show();
    } else {
      $('#actionButtons').hide();
    }
  }
});
</script>
<script>
  $(document).ready(function() {
    // Check/uncheck select all checkbox
    $('#selectAll').click(function() {
      var isChecked = $(this).prop('checked');
      $('.custom-checkbox').prop('checked', isChecked);
      toggleActionButtons(); // Toggle action buttons visibility
    });

    // Check/uncheck individual checkboxes
    $('.custom-checkbox').click(function() {
      // Check if all checkboxes are checked
      var allChecked = $('.custom-checkbox:checked').length === $('.custom-checkbox').length;
      $('#selectAll').prop('checked', allChecked);

      toggleActionButtons(); // Toggle action buttons visibility
    });

    // Function to toggle action buttons visibility based on checkbox selection
    function toggleActionButtons() {
      if ($('.custom-checkbox:checked').length > 0) {
        $('#actionButtons').show();
      } else {
        $('#actionButtons').hide();
      }
    }
  });
</script>

<script>
$(document).ready(function() {
    // Function to update table rows based on search input
    function updateTableRows(searchTerm) {
        var rows = $('#tableBody').find('tr');
        rows.hide().filter(function() {
            var brideID = $(this).find('td:nth-child(3)').text().trim(); // Change to the appropriate column index
            return brideID === searchTerm; 
        }).show();
    }

    // Listen for input events in the search input field
    $('#searchInput').on('input', function() {
        var searchTerm = $(this).val().trim();
        updateTableRows(searchTerm);
    });
});
</script>

<script>
  $(document).ready(function() {
    // Event listener for the "Approved About Me" button
    $('#btnApproved').click(function() {
        filterRowsByStatus('Approved');
    });

    // Event listener for the "Unapproved About Me" button
    $('#btnUnapproved').click(function() {
        filterRowsByStatus('Unapproved');
    });

    // Event listener for the "Pending About Me" button
    $('#btnPending').click(function() {
    filterRowsByStatus('pending');
});

    // Function to filter table rows based on status
    function filterRowsByStatus(status) {
    var rows = $('#tableBody').find('tr');
    rows.hide().filter(function() {
        var rowStatus = $(this).find('td:nth-child(2)').text().trim(); // Status is in the 2nd column
        return rowStatus === status;
    }).show();
}
});

  </script>

</body>
</html>
