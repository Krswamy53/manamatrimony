<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['name'])) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Profile</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS for additional styling -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .header-container {
            padding: 20px 0;
        }

        .print-btn {
            margin-bottom: 15px;
        }

        .member-info {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }

        .container {

            margin-left: 270px;
            width: 80%;

        }

        .row {
            margin-left: 20px;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
            margin-right: -15px;
            margin-top: -235px;


        }

        .box {
            width: 820px;
            color: orangered;
        }

        .col-md-6 {
            width: 400px;

        }
        .align-values span {
            flex: 2;
            color: orangered;
            text-align: left;
            padding-left: 100px;
            margin-left: 50px;
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
                <a href="index.php"><img src="assets/images/l.PNG" alt="LOGO" style="height :80px; width:150px; margin-left: -20px;"></a>

               
            </div>

            <div class="menu">
                <div class="custom-scroll">
                    <div class="sidebar-menu">
                    <ul>
                        <h5 style="color:red;">Welcome, <?php echo $name; ?></h5>

                          
                            <li class="sidebar-item"><a href="index.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Dashboard</span></a></li>
                          
                            <li class="sidebar-item"><a href="addmembers.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Members</span></a></li>
                            <li class="sidebar-item"><a href="filterprofile.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Filter Members</span></a></li>
                            <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link active" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>All Members</span></a>
                            <ul class="sub-menu">
                            <li><a href="Active.php" class="sub-menu-item">Active Members</a></li>
                            <li><a href="inactive.php" class="sub-menu-item">Inactive Members</a></li>
                            <li><a href="paid.php" class="sub-menu-item">Paid Members</a></li>
                            <li><a href="unpaid.php" class="sub-menu-item">Unpaid Members</a></li>
                            <li><a href="allprofiles.php" class="sub-menu-item">All Profiles</a></li>
                            </ul>
                            </li>                           
                            <li class="sidebar-item"><a href="add_plan.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Add Plans </span></a></li>
                            <li class="sidebar-item"><a href="feacture.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Feacture Members </span></a></li>

                            <li class="sidebar-item"><a href="suceessstories.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Success Stories </span></a></li>
                            <li class="sidebar-item"><a href="express.php" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right"  tabindex="0"><i class="bi bi-hexagon-fill"></i> <span>Expreess Interest </span></a></li>
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
        <div class="container">
           
            <?php
            // Database connection
            include "db.php";

            // Retrieve the ID from the URL parameter
            $id = $_GET['id']; // Make sure to sanitize and validate user input

            // Query to fetch the member's details from the database
            $query = "SELECT * FROM user_profiles WHERE id = $id";
            $result = $conn->query($query);

            // Check if the query was successful and if a row was returned
            if ($result && $result->num_rows > 0) {
                // Fetch the member's details from the result
                $row = $result->fetch_assoc();
            ?>
             <div class="header-container">
                
                <!-- <button class="btn btn-success print-btn">Print This Profile</button> -->
                <div class="member-info">
                    <span><?php echo $row['firstName']; ?></span> | <span class="btn btn-primary">MatrId: SL<?php echo $row['id']; ?></span>
                </div>
            </div>
                <div class="left">


                    <div class="col-md-12 b" >
                        <img src="<?php echo $row['photo1_url']; ?>" alt="User Image" style="max-width: 250px; max-height:200px;margin-top:25px;">
                    </div>
                </div>
                <br>
                <div class="right">
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Basic Details</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>First Name :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['firstName']; ?></span></p>
                            <p><strong>Last Name :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['lastName']; ?></span></p>
                            <p><strong>Date of Birth :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['dob']; ?></span></p>
                            <p><strong>Gender :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['gender']; ?></span></p>
                        </div>
                        <div class="col-md-6">

                            <p><strong>Email :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['email']; ?></span></p>
                            <p><strong>Mobile :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['mobile']; ?></span></p>
                            <p><strong>Profile Created By :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;<?php echo $row['profileCreatedBy']; ?></span></p>
                            <p><strong>Marital Status :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['maritalStatus']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Religion Information</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>religion :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['religion']; ?></span></p>
                            <p><strong>caste :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['caste']; ?></span></p>

                        </div>
                        <div class="col-md-6">

                            <p><strong>subcaste :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $row['subcaste']; ?></span></p>

                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Education & Occupation Details</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>highestEducation :</strong> <span style="color: orangered;"><?php echo $row['highestEducation']; ?></span></p>
                            <p><strong>annualIncome :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp; &nbsp; <?php echo $row['annualIncome']; ?></span></p>
                            <p><strong>occupation :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<?php echo $row['occupation']; ?></span></p>
                        </div>
                        <div class="col-md-6">

                            <p><strong>employedIn :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<?php echo $row['employedIn']; ?></span></p>
                            <p><strong>additionalDegree :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp; <?php echo $row['additionalDegree']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Family Details</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 ">


                            <p><strong>familyType :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['familyType']; ?></span></p>
                            <p><strong>motherOccupation :</strong><span style="color: orangered;"> <?php echo $row['motherOccupation']; ?></span></p>
                            <p><strong>numMarriedSisters :</strong><span style="color: orangered;"> <?php echo $row['numMarriedSisters']; ?></span></p>
                            <p><strong>fatherOccupation :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;<?php echo $row['fatherOccupation']; ?></span></p>
                            <p><strong>numSisters :</strong><span style="color: orangered;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['numSisters']; ?></span></p>
                        </div>
                        <div class="col-md-6">

                            <p><strong>familyValue :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['familyValue']; ?></span></p>
                            <p><strong>numMarriedBrothers :</strong><span style="color: orangered;"> <?php echo $row['numMarriedBrothers']; ?></span></p>
                            <p><strong>familyStatus :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['familyStatus']; ?></span></p>
                            <p><strong>fatherOccupation :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fatherOccupation']; ?></span></p>
                            <p><strong>numBrothers :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['numBrothers']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Location Information</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>Country Living In :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['inputCountry']; ?></span></p>
                            <p><strong>State Living In :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['inputState']; ?></span>
                            </p>

                        </div>
                        <div class="col-md-6">

                            <p><strong>City Living In :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['inputCity']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Habits and Hobbies</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>diet :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['diet']; ?></span></p>
                            <p><strong>drinkingHabits :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['drinkingHabits']; ?></span></p>

                        </div>
                        <div class="col-md-6">

                            <p><strong>smokingHabits :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['smokingHabits']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Physical Attributes</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>height :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['height']; ?></span></p>
                            <p><strong>weight :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['weight']; ?></span></p>
                            <p><strong>physicalStatus :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['physicalStatus']; ?></span></p>



                        </div>
                        <div class="col-md-6">

                            <p><strong>bodyType :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['bodyType']; ?></span></p>
                            <p><strong>complexion :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['complexion']; ?></span></p>
                        </div>
                    </div>
                    <div class="col-md-12 box">
                        <div class="member-info" style="color:green">Horoscope detail</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">


                            <p><strong>doshType :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['doshType']; ?></span></p>
                            <p><strong>birthTime :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['birthTime']; ?></span></p>
                            <!-- <p><strong>birthPlace:</strong> <?php echo $row['birthPlace']; ?></p> -->



                        </div>
                        <div class="col-md-6">

                            <p><strong>star :</strong><span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['star']; ?></span></p>
                            <p><strong>birthPlace :</strong> <span style="color: orangered;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['birthPlace']; ?></span></p>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                // If no details are found for the given ID, display an error message
                echo "Details not found";
            }

            // Close the database connection
            $conn->close();
            ?>
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


        <!-- Include Bootstrap JS and its dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>