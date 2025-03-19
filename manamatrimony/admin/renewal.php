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

if (!isset($_GET['id'])) {
    // Handle case where user ID is not provided
    echo "User ID not provided.";
    exit;
}
$user_id = $_GET['id'];

include "db.php";


// Step 2: Fetch data from the user_profiles table
$sql = "SELECT * FROM user_profiles WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if user profile exists
if ($result->num_rows > 0) {
    // Fetch user profile
    $user_profile = $result->fetch_assoc();
} else {
    // Handle case where user profile is not found
    echo "User profile not found.";
    exit;
}

// Close the statement
$stmt->close();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $paymentMode = $_POST["paymentMode"];
    $activationDate = $_POST["activationDate"];
    $plan = $_POST["plan"];
    $bankDetail = $_POST["bankDetail"];

    // Calculate expiration date based on plan duration
    $duration = ($plan == "premium") ? 365 : 10; // Default duration for free plan is 10 days
    $expirationDate = date('Y-m-d', strtotime($activationDate . ' + ' . $duration . ' days'));

    // Determine payment status
    $currentDate = date('Y-m-d');
    if ($currentDate > $expirationDate) {
        // Payment overdue
        $paymentStatus = "Renewal";
    } else {
        // Payment up to date
        $paymentStatus = "Paid";
    }

    // Update user profile status to reflect payment status
    $sql = "UPDATE user_profiles SET payment = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $paymentStatus, $user_id);
    $stmt->execute();
    $stmt->close();

    // Redirect to a success page
    header("Location: allprofiles.php?payment_status=" . urlencode($paymentStatus));
    exit;
}

// Close the connection
$conn->close();
?>


<!-- HTML and JavaScript code remains unchanged -->

<!-- HTML and JavaScript code remains unchanged -->


<!-- HTML and JavaScript code remains unchanged -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonial - Admin Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
   <style>
        .status{
            margin-left: 50px;
        }
        .container{
            margin-left: 280px;
           width: 80%;
        }
        .form-group{
          margin-left: -130px;
          width: 95%;
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
    width: 1px; 
}

/* Media query for screens up to 768px */
@media (max-width: 768px) {
    .status {
        margin-left: 0; /* Reset margin-left for smaller screens */
    }
    .container {
        margin-left: 0;
        width: 100%; /* Adjust width to fill the screen */
    }
    .form-group {
        margin-left: 0;
        width: 100%; /* Adjust width to fill the screen */
    }
    .logout-btn,
    .btn-success {
        margin-left: 0;
        margin-top: 10px; /* Adjust margin-top for smaller screens */
        width: 100%; /* Ensure button occupies full width */
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
            <!-- sidebar menu -->
            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link " data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item"><a href="allprofiles.php" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a></li>
 
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Approve Active To Paid
            </div>
            <div class="card-body">
            <form id="paymentForm" method="post" >


                    <!-- User information section -->
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <!-- Placeholder for profile image -->
                            <img src="<?php echo isset($user_profile['photo1_url']) ? $user_profile['photo1_url'] : ''; ?>"  alt="User Profile Picture" style="max-width: 150px; max-height: 240px;margin-top:0px;">
                            </div>
                        <div class="col-md-5">
                            <h3 style="color:green;"><?php echo isset($user_profile['firstName']) ? $user_profile['firstName'] : ''; ?> <?php echo isset($user_profile['lastName']) ? $user_profile['lastName'] : ''; ?></h3>
                            <p>Country: <?php echo isset($user_profile['inputCountry']) ? $user_profile['inputCountry'] : 'Not available'; ?></p>
                            <p>State: <?php echo isset($user_profile['inputState']) ? $user_profile['inputState'] : 'Not available'; ?></p>
                            <p>City: <?php echo isset($user_profile['inputCity']) ? $user_profile['inputCity'] : 'Not available'; ?></p>
                        </div>
                        <div class="col-md-5">
                        <p>Status: <?php echo isset($user_profile['status']) ? $user_profile['status'] : 'Not available'; ?></p>

                           
                            <p>Gender: <?php echo isset($user_profile['gender']) ? $user_profile['gender'] : 'Not available'; ?></p>
                            <p>Religion: <?php echo isset($user_profile['religion']) ? $user_profile['religion'] : 'Not available'; ?></p>
                            <p>Caste: <?php echo isset($user_profile['caste']) ? $user_profile['caste'] : 'Not available'; ?></p>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row mb-3">
                            <!-- First column -->
                            <div class="col-md-6">
                                <!-- Payment details -->
                                <div class="form-group">
                                    <label for="paymentMode">Payment Mode:</label>
                                    <select class="form-control" id="paymentMode" name="paymentMode" required>
                                        <option value="">Select Payment Mode</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="debit_card">Debit Card</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="activationDate">Activation Date:</label>
                                    <input type="date" class="form-control" id="activationDate" name="activationDate" required>
                                </div>
                                <div class="form-group">
                                    <label for="plan">Plan:</label>
                                    <select class="form-control" id="plan" name="plan" required>
                                        <option value="">Choose Plan</option>
                                        <option value="free">Free</option>
                                        <option value="premium">Premium</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bankDetail">Bank Detail:</label>
                                    <textarea class="form-control" id="bankDetail" name="bankDetail" rows="3" required></textarea>
                                </div>
                            </div>
                            <!-- Second column -->
                            <div class="col-md-6 subscription-details" style="display:none;">
                                <!-- Subscription details -->
                                <div class="form-group">
                                    <label for="duration">Duration:</label>
                                    <input type="text" class="form-control" id="duration" name="duration" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numContacts">No. of Contacts:</label>
                                    <input type="text" class="form-control" id="numContacts" name="numContacts" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numMessages">No. of Messages:</label>
                                    <input type="text" class="form-control" id="numMessages" name="numMessages" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numSMS">No. of SMS:</label>
                                    <input type="text" class="form-control" id="numSMS" name="numSMS" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numViews">No. of View Profile:</label>
                                    <input type="text" class="form-control" id="numViews" name="numViews" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="chatAmount">Chat Amount:</label>
                                    <input type="text" class="form-control" id="chatAmount" name="chatAmount" readonly>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.13.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
          event.preventDefault();
          var paymentMode = document.getElementById('paymentMode').value;
          var activationDate = document.getElementById('activationDate').value;
          var plan = document.getElementById('plan').value;
          var bankDetail = document.getElementById('bankDetail').value;
          
          // Validation logic here
          if (paymentMode === '') {
            alert('Please select a payment mode.');
            return false;
          }
          if (activationDate === '') {
            alert('Please enter an activation date.');
            return false;
          }
          if (plan === '') {
            alert('Please select a plan.');
            return false;
          }
          if (bankDetail.trim() === '') {
            alert('Please enter bank details.');
            return false;
          }
          
          // If all validations pass
          this.submit();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#plan').change(function(){
                if($(this).val() !== '') {
                    $('.subscription-details').show();
                } else {
                    $('.subscription-details').hide();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#plan').change(function(){
                if($(this).val() === 'free') {
                    $('.subscription-details').show();
                    $('#duration').val('10');
                    $('#numContacts').val('0');
                    $('#numMessages').val('0');
                    $('#numSMS').val('0');
                    $('#numViews').val('0');
                    $('#chatAmount').val('rs.0');
                } else if($(this).val() === 'premium') {
                    $('.subscription-details').show();
                    $('#duration').val('365');
                    $('#numContacts').val('200');
                    $('#numMessages').val('1000');
                    $('#numSMS').val('0');
                    $('#numViews').val('1000');
                    $('#chatAmount').val('rs.1000');
                } else {
                    $('.subscription-details').hide();
                }
            });
        });
    </script>
     <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/chart-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
