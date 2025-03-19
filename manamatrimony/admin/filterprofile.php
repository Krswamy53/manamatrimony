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
// Collect form data
$gender = isset($_POST['selectGender']) ? $_POST['selectGender'] : '';
$keyword = isset($_POST['inputKeyword']) ? $_POST['inputKeyword'] : '';
$country = isset($_POST['Country']) ? $_POST['Country'] : '';
$state = isset($_POST['State']) ? $_POST['State'] : '';
$city = isset($_POST['inputCity']) ? $_POST['inputCity'] : '';
$religion = isset($_POST['inputReligion']) ? $_POST['inputReligion'] : '';
$caste = isset($_POST['inputCaste']) ? $_POST['inputCaste'] : '';

// Construct MySQL query based on form data
$sql = "SELECT * FROM user_profiles WHERE 1=1";
if ($gender != 'Select Gender') {
    $sql .= " AND gender = '$gender'";
}
if (!empty($keyword)) {
    $sql .= " AND (email = '$keyword')";
}
if (!empty($country)) {
    $sql .= " AND country = '$country'";
}
if (!empty($state)) {
    $sql .= " AND state = '$state'";
}
if (!empty($city)) {
    $sql .= " AND inputCity = '$city'";
}
if (!empty($religion)) {
    $sql .= " AND religion = '$religion'";
}
if (!empty($caste)) {
    $sql .= " AND caste = '$caste'";
}

// Execute the query
$result = $conn->query($sql);
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
        .profile-box {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px; /* Adjusted padding */
            margin-bottom: 20px;
            display: flex;
            width: 1035px; /* Adjusted width */
            margin-left: 280px;
            background-color : white;
        }

        .profile-box img {
            width: 250px; /* Adjusted image size */
            height: 220px; /* Adjusted image size */
            margin-right: 20px;
            flex-shrink: 0;
            margin-top: 20px;
        }

        .details {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-left: 0; /* Removed padding */
            margin-left: 100px; /* Added left margin */

        }

        .details-column {
            flex-basis: 46%;
            margin-bottom: 10px;
            margin-left: 22px;
        }

        .details-column p {
            margin: 15px 0;
        }
        .custom-scroll{
    overflow-y:auto;
}
::-webkit-scrollbar {
    width: 1px; / Set the width of the scrollbar /
}
.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; /* Ensure it's above other content */
}
/* Add this CSS in your <style> tag or an external CSS file */

/* Responsive Styles */
@media screen and (max-width: 768px) {
  .main-content{
    width: 80%;
  }
 
    .profile-box {
    flex-direction: column; /* Stack elements vertically */
    align-items: center; /* Center align items */
  }

  .profile-box img {
    order: 0; /* Reset the order */
    margin-bottom: 10px; /* Reduce margin between image and details */
  }

  .details {
    text-align: center; /* Center align text */
    margin-top: 10px; /* Add margin above details */
    margin-left: -30px;
  }
}

@media screen and (min-width: 768px) {
  .sidebar-collapse-mini {
    display: none;
  }
  .sidebar-menu {
    display: block;
  }
  .fixed-sidebar {
    width: 280px;
  }
 
  .logo h3 {
    display: block;
  }
}

@media screen and (max-width: 992px) {
  .profile-box {
    width: 95%; /* Adjust width for smaller screens */
    margin-left: 0px; /* Center align profile box */
    margin-right: auto;
  }

  .details {
    margin-left: 0; /* Remove left margin */
    margin-right: 0; /* Remove right margin */
  }

  .details-column {
    margin-left: 0; /* Remove left margin */
  }
}

@media screen and (max-width: 576px) {
  .details {
    flex-direction: column; /* Stack details vertically on small screens */
  }
  .details-column {
    flex-basis: auto; /* Take full width on small screens */
    margin-left: 0; /* Remove left margin */
    margin-bottom: 20px; /* Increase bottom margin for better spacing */
  }
  .profile-box img {
    width: 100%; /* Make profile image full width on small screens */
    height: auto; /* Maintain aspect ratio */
    margin-right: 0; /* Remove right margin */
    margin-top: 0; /* Remove top margin */
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
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
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
       <div>
        <div class="main-content">
            <div class="top-boxes mb-10">
                <br> 
                <form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="selectGender">Gender</label>
            <select id="selectGender" class="form-control" name="selectGender">
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputKeyword"> User Name or Email</label>
            <input type="text" class="form-control" id="inputKeyword" name="inputKeyword" placeholder="Enter User Name or Email">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCountry">Country</label>
            <input type="text" class="form-control" id="inputCountry" name="inputCountry" placeholder="Enter Country">
        </div>
        <!-- <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <input type="text" class="form-control" id="inputState" name="inputState" placeholder="Enter state">
        </div> -->
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Enter city">
        </div>
    </div>

    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="inputReligion">Religion</label>
            <input type="text" class="form-control" id="inputReligion" name="inputReligion" placeholder="Enter religion">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCaste">Caste</label>
            <input type="text" class="form-control" id="inputCaste" name="inputCaste" placeholder="Enter caste">
        </div>
    </div>

  
    <button type="submit" class="btn btn-primary">Search Now</button>
</form>


            
            </div>
        </div>
        <!-- <h2 class="">Filtered Profiles</h2> -->
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='profile-box'>";
            // Displaying the first photo
            if (!empty($row['photo1_url'])) {
                echo "<img src='{$row['photo1_url']}' alt='Profile Image'>";
            } else {
                // Display a placeholder image or leave it blank
                // You can use a default placeholder image or leave it blank
                // For example, using a default placeholder image:
                echo "<img src='placeholder_image.jpg' alt='No Image Available'>";
            }

            echo "<div class='details'>";
            echo "<div class='details-column'>";
            echo "<p><strong>Name:</strong> {$row['firstName']} {$row['lastName']}</p>";
            echo "<p><strong>Email:</strong> {$row['email']}</p>";
            echo "<p><strong>Gender:</strong> {$row['gender']}</p>";
            echo "<p><strong>mobile_number:</strong> {$row['mobile']}</p>";
            // echo "<p><strong>Age:</strong> {$row['dob']}</p>";
            echo "<p><strong>Education:</strong> {$row['highestEducation']}</p>";
            echo "</div>";
            echo "<div class='details-column'>";
            echo "<p><strong>Country:</strong> {$row['inputCountry']}</p>";
            echo "<p><strong>City:</strong> {$row['inputCity']}</p>";
            echo "<p><strong>Religion:</strong> {$row['religion']}</p>";
            echo "<p><strong>Caste:</strong> {$row['caste']}</p>";
            echo "<p><strong>Marital Status:</strong> {$row['maritalStatus']}</p>";
            echo "<p><strong>Date of Birth:</strong> {$row['dob']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No results found</p>";
    }
    ?>
            

    <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
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