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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <title>Add / Update Advertisement</title>
    <style>
      body {
      font-family: Arial, sans-serif;
    }

    .header {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .breadcrumb { 
    font-size: 14px;
    margin-bottom: 0; 
    margin-left:600px;
}
.breadcrumb li {
    display: inline-block; 
    margin-right: 10px; 
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

        .form-container {

            width: 70%;
          margin-left: 350px;
            padding: 10px;
           
          
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        
        .grid-item {
            margin-bottom: 10px;
        }

        .label-inline {
            display: inline-block;
            width: 150px;
            /* Adjust as needed */
        }

        .grid-item {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            height: 120%;
            /* Adjust the height as needed */
        }

        input[type="radio"] {
            width: 10%;
            padding: 5px;
            margin: 3px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            height: 120%;

        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            height: 120%;

        }




        .label-container {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            margin-top: 40px;
            margin-left: 20px;

        }

        .label-container label {
            margin-right: 8px;
           

        }

        .status-container {
            display: inline-flex;
            align-items: center;


        }

        .status-container input[type="radio"],
        .status-container label {
            margin-right: 8px;
            margin-bottom: 10px;

        }






        .button-container {
            margin-top: 20px;
            margin-left: 40%;


        }

        .btn-green {
            background-color: green;
            color: white;
            height: 35px;
            width: 140px;
        }

        .btn-red {
            background-color: red;
            color: white;
            height: 35px;
            width: 140px;
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
        body{
        background-color: beige;
      }
        /* Additional styling for buttons and form elements */
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
            <!-- sidebar menu -->
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
            <!-- sidebar menu -->
        </div>



    <div class="form-container">
 
<div class="header">Manage Advertisement</div>
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> &#9751;Home</a></li>
    <li><a href="#">Add New Advertisement</a></li>
</ul>


<div class="advertisement-box">
  <button class="button"><i class="gg-menu"></i>All Advertisement</button>
</div>



        <!-- <h2>ADD / UPDATE ADVERTISEMENT</h2> -->
        <form method="post" action="ad.php">
            <div class="grid-container">
                <div class="grid-item">
                    <label for="adName">Advertisement Name:</label>
                    <input type="text" id="adName" name="adName">
                </div>
                <div class="grid-item">
                    <label for="adDate">Advertisement Date:</label>
                    <input type="text" id="adDate" name="adDate">
                </div>
                <div class="grid-item">
                    <label for="adLevel">Advertisement Level:</label>
                    <select id="adLevel" name="adLevel">
                        <option value="level1">Level 1</option>
                        <!-- Add more levels as needed -->
                    </select>
                </div>
                <div class="grid-item">
                    <label for="adLevel">Advertisement Link:</label>
                    <!-- <input type="text" id="adLink" name="adLink"> -->
                    <input type="text" id="ad" name="adLink">

                </div>
                <div class="grid-item">
                    <label for="adImage">Select Advertisement Image:</label>
                    <input type="file" id="adImage" name="adImage">
                </div>
                <div class="grid-item">
                    <label for="contactNumber">Contact Number:</label>
                    <input type="text" id="contactNumber" name="contactNumber">
                </div>
                <div class="grid-item">
                    <label for="contactPerson">Contact person:</label>
                    <input type="text" id="contactPerson" name="contactPerson">
                </div>
                <div class="grid-item">
                    <div class="label-container">
                        <label for="adStatus">Advertisement Status:</label>
                        <div class="status-container">
                            <input type="radio" id="active" name="adStatus" value="active">
                            <label for="active">Active</label>
                            <input type="radio" id="inactive" name="adStatus" value="inactive">
                            <label for="inactive">Inactive</label>
                        </div>
                    </div>
                </div>

                <div class="grid-item"></div> <!-- Placeholder for the last grid item in the second row -->
            </div>
            <div class="button-container">
                <input type="submit" value="Submit" class="submit-btn btn-green">
                <input type="button" value="Cancel" class="cancel-btn btn-red">
            </div>
        </form>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission

            // Validate Advertisement Name
            var adName = document.getElementById('adName').value.trim();
            if (adName === '') {
                alert('Please enter Advertisement Name');
                return false; // Stop form submission
            }

            // Validate Advertisement Date
            var adDate = document.getElementById('adDate').value.trim();
            if (adDate === '') {
                alert('Please enter Advertisement Date');
                return false; // Stop form submission
            }

            // Validate Advertisement Level
            var adLevel = document.getElementById('adLevel').value.trim();
            if (adLevel === '') {
                alert('Please select Advertisement Level');
                return false; // Stop form submission
            }

            // Validate Advertisement Link
            var adLink = document.getElementById('ad').value.trim();
            if (adLink === '') {
                alert('Please enter Advertisement Link');
                return false; // Stop form submission
            }

            // Validate Advertisement Image
            var adImage = document.getElementById('adImage').value.trim();
            if (adImage === '') {
                alert('Please select Advertisement Image');
                return false; // Stop form submission
            }

            // Validate Contact Number
            var contactNumber = document.getElementById('contactNumber').value.trim();
            if (contactNumber === '') {
                alert('Please enter Contact Number');
                return false; // Stop form submission
            }

            // Validate Contact Person
            var contactPerson = document.getElementById('contactPerson').value.trim();
            if (contactPerson === '') {
                alert('Please enter Contact Person');
                return false; // Stop form submission
            }

            // Validate Advertisement Status
            var adStatus = document.querySelector('input[name="adStatus"]:checked');
            if (!adStatus) {
                alert('Please select Advertisement Status');
                return false; // Stop form submission
            }

            // If all fields are valid, submit the form
            alert('Form submitted successfully!');
            form.submit();
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
