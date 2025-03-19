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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Fetch user's current password from the database
    $sql = "SELECT password FROM admin WHERE name = '" . $_SESSION['name'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        // Verify if the entered current password matches the stored password
        if ($current_password === $stored_password) {
            // Check if new password and confirm password match
            if ($new_password === $confirm_password) {
                // Update the password in the database
                $update_sql = "UPDATE admin SET password = '$new_password' WHERE name = '" . $_SESSION['name'] . "'";
                if ($conn->query($update_sql) === TRUE) {
                    // Password updated successfully
                    echo '<script>alert("Password changed successfully.");</script>';
                } else {
                    // Error updating password
                    echo '<script>alert("Error: ' . $conn->error . '");</script>';
                }
            } else {
                // New password and confirm password do not match
                echo '<script>alert("New password and confirm password do not match.");</script>';
            }
        } else {
            // Incorrect current password
            echo '<script>alert("Incorrect current password.");</script>';
        }
    } else {
        // User not found in database
        echo '<script>alert("User not found.");</script>';
    }
}

// Close the connection
$conn->close();
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
      
   .form-container {
    width: 500px;
   margin-left: 100px;
   margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    box-sizing: border-box;
}

.form-group input[type="password"]:focus {
    outline: none;
    border-color: #aaa;
}

.error-message {
    color: red;
    margin-bottom: 10px;
}

.success-message {
    color: green;
    margin-bottom: 10px;
}
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #0056b3;
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
.logout-btn {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999; /* Ensure it's above other content */
}
@media (max-width: 768px) {
            .form-container {
                width: 70%;
                margin-left: 0px;
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
                            <li class="sidebar-item"><a href="advertise.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Adervisements </span></a></li>
                            <li class="sidebar-item"><a href="adminprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Admin Profile </span></a></li>

                            <li class="sidebar-item"><a href="changepassword.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Change Password  </span></a></li>
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
            <div class="row g-10">
                <div class="col-xl-6 col-lg-6">
                <div class="profile-container">
        <h2>Change Password</h2>
       
        <div class="form-container">
    <form id="passwordChangeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required>
                <span id="passwordError" class="error-message"></span>
            </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="button">Change Password</button>

    </form>
</div>

    </div>  
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
    <script>
        document.getElementById("passwordChangeForm").addEventListener("submit", function(event) {
            var newPassword = document.getElementById("new_password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var passwordError = document.getElementById("passwordError");
            var uppercaseRegex = /[A-Z]/;
            var lowercaseRegex = /[a-z]/;
            var numericRegex = /\d/g;

            if (newPassword !== confirmPassword) {
                passwordError.textContent = "New password and confirm password do not match.";
                event.preventDefault(); // Prevent form submission
            } else if (newPassword.length < 8) {
                passwordError.textContent = "Password must be at least 8 characters long.";
                event.preventDefault(); // Prevent form submission
            } else if (!uppercaseRegex.test(newPassword)) {
                passwordError.textContent = "Password must contain at least one uppercase letter.";
                event.preventDefault(); // Prevent form submission
            } else if (!lowercaseRegex.test(newPassword)) {
                passwordError.textContent = "Password must contain at least one lowercase letter.";
                event.preventDefault(); // Prevent form submission
            } else if ((newPassword.match(numericRegex) || []).length < 3) {
                passwordError.textContent = "Password must contain at least three numeric digits.";
                event.preventDefault(); // Prevent form submission
            } else {
                passwordError.textContent = ""; // Clear any previous error message
            }
        });
    </script>
</body>
</html>