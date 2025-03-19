<?php
session_start();

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'shadhi';

$mobile_number = $_SESSION['mobile_number'];
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM user_profiles WHERE mobile = '$mobile_number'";

$result = mysqli_query($conn, $sql);
if ($result) {
    $num = mysqli_num_rows($result);
}

?>
<?php


$host = 'localhost'; // Your MySQL host
$user = 'root'; // Your MySQL username
$pass = ''; // Your MySQL password
$dbname = 'shadhi'; // Your MySQL database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $maritalStatus = $_POST['maritalStatus'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $subcaste = $_POST['subcaste'];
    $mother_tongue = $_POST['mother'];
    $country_living_in = $_POST['country_living_in'];
    $state_living_in = $_POST['state_living_in'];
    $city_living_in = $_POST['city_living_in'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bodyType = $_POST['bodyType'];
    $complexion = $_POST['complexion'];
    $physicalStatus = $_POST['physicalStatus'];
    $highestEducation = $_POST['highestEducation'];
    $additionalDegree = $_POST['additionalDegree'];
    $occupation = $_POST['occupation'];
    $employedIn = $_POST['employedIn'];
    $annualIncome = $_POST['annualIncome'];
    $diet = $_POST['diet'];
    $smokingHabits = $_POST['smokingHabits'];
    $drinkingHabits = $_POST['drinkingHabits'];
    $doshType = $_POST['doshType'];
    $star = $_POST['star'];
    $birthTime = $_POST['birthTime'];
    $birthPlace = $_POST['birthPlace'];
    $familyStatus = $_POST['familyStatus'];
    $familyType = $_POST['familyType'];
    $familyValue = $_POST['familyValue'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $motherOccupation = $_POST['motherOccupation'];
    $numBrothers = $_POST['numBrothers'];
    $numSisters = $_POST['numSisters'];
    $additionalInfo = $_POST['additionalInfo'];


    // $sql = "INSERT INTO user_profiles (firstName, lastName, gender, email, password, mobile, dob, maritalStatus, religion, caste, subcaste, mother_tongue, country_living_in, state_living_in, city_living_in, height, weight, bodyType, complexion, physicalStatus, highestEducation, additionalDegree, occupation, employedIn, annualIncome, diet, smoking_habits, drinking_habits, dosh_type, star, birthTime, birthPlace,familyStatus, familyType,familyValue,fatherOccupation,motherOccupation,numBrothers,numSisters,additionalInfo) VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$mobile', '$dob', '$maritalStatus', '$religion', '$caste', '$subcaste', '$mother_tongue', '$country_living_in', '$state_living_in', '$city_living_in', '$height', '$weight', '$bodyType', '$complexion', '$physicalStatus', '$highestEducation', '$additionalDegree', '$occupation', '$employedIn', '$annualIncome', '$diet', '$smoking_habits', '$drinking_habits', '$dosh_type', '$star', '$birthTime', '$birthPlace', '$familyStatus','$familyType', '$familyValue', '$fatherOccupation', '$motherOccupation', '$numBrothers', '$numSisters', '$additionalInfo')";
    $sql = "UPDATE user_profiles SET password='$password',maritalStatus='$maritalStatus',mother='$mother_tongue',religion='$religion',caste='$caste',subcaste='$subcaste',inputState='$state_living_in',inputCity='$city_living_in',height='$height',weight='$weight',bodyType='$bodyType',complexion='$complexion',physicalStatus='$physicalStatus',highestEducation='$highestEducation',additionalDegree='$additionalDegree',occupation='$occupation',employedIn='$employedIn',annualIncome='$annualIncome',diet='$diet',smokingHabits='$smokingHabits',drinkingHabits='$drinkingHabits',doshType='$doshType',star='$star',birthTime='$birthTime',birthPlace='$birthPlace',familyStatus='$familyStatus',familyType='$familyType',familyValue='$familyValue',fatherOccupation='$fatherOccupation',motherOccupation='$motherOccupation',numBrothers='$numBrothers',numSisters='$numSisters',additionalInfo='$additionalInfo' WHERE mobile='$mobile_number'";

    if ($conn->query($sql) === TRUE) {
        echo "Registered Successfully";
        echo "<script>alert(' Registered successfully');</script>";
        header("Location: loginform.php"); // Redirect to loginform.php
        exit; // Make sure to exit to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QguEWtJ8Xz1ugLr/Q8JUsAJi8tu3ezcvrjz+LoxC1Gjb3a7vuTkpFQ9II1Rz5WJVVqwIJU/pxyVdplNnJiLnSg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Matchmaking Service</title>
    <style>
        .progress-tracker ul {
            display: flex;
            justify-content: space-around;
            list-style-type: none;
            padding: 0;
            list-style-type: none;

        }

        .progress-tracker li {
            font-weight: bold;
            position: relative;
            color: #999;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
            text-decoration:none;
        }

        .progress-tracker li.completed {
            color: #0f0;
            /* Color for completed steps */
        }

        .progress-tracker li.active {
            color: #00f;
            /* Color for active step */
        }

        .progress-tracker li::before {
            content: '';
            width: 20px;
            /* Diameter of the circle */
            height: 20px;
            /* Diameter of the circle */
            background-color: #ccc;
            /* Default color for incomplete steps */
            border-radius: 50%;
            /* To make the shape a circle */
            display: block;
            margin: 0 auto 20px;
            /* Margin to separate the circles */
            transition: background-color 0.3s ease-in-out;
            /* Transition for background color change */
        }

        .progress-tracker li.completed::before,
        .progress-tracker li.active::before {
            background-color: #00f;
            /* Color for active and completed steps */
        }

        .progress-tracker li:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 50%;
            left: calc(50% + 10px);
            /* Space between circles */
            width: calc(100% - 20px);
            /* Length of the line */
            height: 2px;
            /* Thickness of the line */
            background-color: #ccc;
            /* Color of the line */
            transform: translateY(-50%);
        }
        .section {
    display: none;
}
.section.active {
    display: block;
}
.progress-tracker li.completed::after {
            content: "✔";
            margin-left: 10px;
        }




        .container {
            display: flex;
            justify-content: space-between;
            transition: transform 0.3s ease-in-out;
            /* Transition for moving between steps */
        }


        .section {
            width: 45%;
            /* Adjust as needed */
            margin-bottom: 20px;
            transition: opacity 0.3s ease-in-out;
            /* Transition for opacity change */
        }

        .section h2 {
            text-align: center;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
        }

        .section ul li {
            margin-bottom: 10px;
        }

        .card {
            text-align: center;
        }

        .card img {
            width: 50px;
            height: 50px;
        }

        .slidebox {
            padding: 50px;
            margin-top: -210%;
        }

        /* Styling for form elements */
        /* CSS for form table layout */
        form table {
            width: 100%;
            border-collapse: collapse;

        }

        form table td {
            padding: 8px;

        }

        form table td:first-child {
            width: 30%;
            /* Adjust the width of the first column if needed */
            font-weight: bold;
            /* Make labels bold */
        }

        form table input[type="text"],
        form table input[type="password"],
        form table input[type="email"],
        form table input[type="tel"] {
            width: 100%;
            /* Ensure input fields take full width of their container */
            padding: 8px;
            /* Add padding to input fields */
            border: 1px solid #ccc;
            /* Add border to input fields */
            border-radius: 4px;
            /* Add border radius to input fields */
        }

        .form-group {
            margin-top: 20px;
            /* Add margin to the form group */
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        /* CSS for dropdowns */
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            /* Additional styling as needed */
        }

        /* CSS for Date of Birth field */
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            /* Additional styling as needed */
        }

        /* CSS for time input */
        input[type="time"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            /* Additional styling as needed */
        }

        /* CSS for number input */
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            /* Additional styling as needed */
        }

        /* CSS for textarea */
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            /* Additional styling as needed */
        }

        /* Checkbox in single line */
        /* Checkbox in single line */
        .form-group2 {
            display: flex;
            align-items: center;
            /* Ensure checkboxes are aligned horizontally */
        }

        .form-group2 input[type="checkbox"] {
            margin-right: 10px;
            /* Add space between checkboxes */
        }

        .form-group2 label {
            margin: 0;
            /* Remove default margin to ensure proper alignment */
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }


        .required {
            color: red;
        }

        /* Style for information cards */

        .section.information-cards {
            width: 45%;
            /* Adjust as needed */
            margin-left: auto;
            /* Move to the right side */
            margin-right: 0;
            /* Reset right margin */
        }


        /* Style for information cards /  */
        .information-cards {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }

        .information-cards h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .information-cards ul {
            list-style-type: none;
            padding: 0;
        }

        .information-cards li {
            margin-bottom: 20px;
        }

        .card {
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .card img {
            width: 50px;
            height: 50px;
        }

        .card p {
            margin-top: 10px;
        }




        .section information-cards {
            margin-left: -20px;
        }

        form {
            padding: 20px;

        }

        .form-group2 {
            display: inline-block;
            margin-right: 10px;

        }

        .form-group2 input[type="checkbox"] {
            margin-right: 5px;

        }

        .form-group2 label {
            margin: 0;

        }

        form table td {
            padding: 10px;

        }


        .account-information legend .icon {
            color: orangered;
            font-size: 16px;
            margin-right: 1px;

        }

        legend {
            color: orangered;
            font-size: 19px;
        }

        .header {
            display: flex;
            align-items: center;
            padding-bottom: 10px;

        }

        .header-icon {
            color: green;
            font-size: 36px;

        }

        .header-text {
            color: green;
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;

        }



        .main-text {
            font-size: 18px;

        }

        .icon {
            color: red;
            /* Adjust the color as needed */
            font-size: 24px;
            /* Adjust the font size as needed */
            margin-right: 10px;
            /* Add space between the icon and the text */
        }


        @media (max-width: 768px) {

            /* For smaller screens, stack the sections vertically */
            .container {
                flex-direction: column;
            }

            .section {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include  'header.php' ?>
    <br><br><br><br>
    <header>
        <h1><i class="fas fa-kiss-wink-heart icon"></i> Completing this page will take you closer to your perfect
            match.</h1>
    </header>

    <br>
    <script>
        function moveToStep(stepNumber) {
            // Mark previous steps as completed
            for (let i = 1; i < stepNumber; i++) {
                document.getElementById(`step${i}-btn`).classList.add('completed');
            }

            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });

            // Remove active class from all step buttons
            document.querySelectorAll('.progress-tracker li').forEach(li => {
                li.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(`step${stepNumber}`).classList.add('active');

            // Add active class to the selected step button
            document.getElementById(`step${stepNumber}-btn`).classList.add('active');
        }

        function submitForm() {
            // Mark step 3 as completed
            document.getElementById('step3-btn').classList.add('completed');
            alert('Form submitted successfully!');
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Initially display the first step
            document.getElementById('step1').classList.add('active');
        });
    </script>

<div class="progress-tracker">
        <ul>
            <li id="step1-btn" class="active" onclick="moveToStep(1)">Step 1</li>
            <li id="step2-btn" onclick="moveToStep(2)">Step 2</li>
            <li id="step3-btn" onclick="moveToStep(3)">Step 3</li>
        </ul>
    </div>
    <br><br><br><br>
    <div class="container">
        <section class="section account-information active" id="step1">

        <div class="header">
            <div class="header-icon"><i class="fas fa-user"></i></div>
            <div class="header-text">Personal Information</div>
        </div>



        <p class="main-text">
            You have many matching profiles based on your details. Completing this page will take you closer to your
            perfect match.
        </p>
        <br>

        <table>
            <tr>
                <td>Mandatory Fields<span class="required">*</span></td>


            </tr>
        </table>
        <br>
        <!-- <fieldset> -->
        <?php
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <form id="memberDetailsForm" method="post" action="" onsubmit="return validateMemberDetailsForm()">
                    <legend><i class="fas fa-user-circle icon"></i> Account Information</legend>
                    <table>

                        <tr>
                            <td>First Name<span class="required">*</span></td>
                            <td><input type="text" class="oneform" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>" placeholder="Enter your first name" readonly></td>
                        </tr>
                        <tr>
                            <td>Last Name<span class="required">*</span></td>
                            <td><input type="text" class="oneform" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>" placeholder="Enter your last name" readonly></td>
                        </tr>
                        <tr>
                            <td>Email Address<span class="required">*</span></td>
                            <td><input type="text" class="oneform" id="email" value="<?php echo $row['email']; ?>" placeholder="Enter your email" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td>Password<span class="required">*</span></td>
                            <td><input type="text" class="oneform" id="password" name="password" placeholder="Enter your password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Password<span class="required">*</span></td>
                            <td><input type="text" class="oneform" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password"></td>
                        </tr>
                        <tr>
                            <td>Mobile No<span class="required">*</span></td>
                            <td><input type="tel" class="oneform" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" placeholder="Enter your mobile number" read only></td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-user-circle icon"></i> Some Personal information</legend>
                    <table>

                        <tr>
                            <td>Gender<span class="required">*</span></td>
                            <td>

                                <select class="oneform" id="gender" name="gender" <?php echo $readonly ? 'disabled' : ''; ?>>
                                    <option value="male" <?php if ($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                                    <option value="female" <?php if ($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
                                    <option value="other" <?php if ($row['gender'] == 'other') echo 'selected'; ?>>Other</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td>Date of Birth<span class="required">*</span></td>
                            <td><input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']; ?>"></td>
                        </tr>

                        <tr>
                            <td>Marital Status<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatus" name="maritalStatus" value="Married">
                                    <label for="Married">Married</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatus" name="maritalStatus" value="Unmarried">
                                    <label for="Unmarried">Unmarried</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatus" name="maritalStatus" value="Widow">
                                    <label for="Widow">Widow</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatus" name="maritalStatus" value="divorced">
                                    <label for="divorced">Divorced</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Religion<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="religion" name="religion" <?php echo $readOnly ? 'disabled' : ''; ?>>
                                    <option disabled selected>Select Religion</option>
                                    <option value="hindu" <?php if ($row['religion'] == 'hindu') echo 'selected'; ?>>Hindu</option>
                                    <option value="muslim" <?php if ($row['religion'] == 'muslim') echo 'selected'; ?>>Muslim</option>
                                    <option value="christian" <?php if ($row['religion'] == 'christian') echo 'selected'; ?>>Christian</option>
                                    <option value="sikhism" <?php if ($row['religion'] == 'sikhism') echo 'selected'; ?>>Sikhism</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td>Cast<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="caste" name="caste" onchange="populateSubcaste()">
                                    <option value="" disabled selected>Select Caste</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input class="form-check-input ml-2" type="checkbox" id="willingToMarryOtherCaste" name="willingToMarryOtherCaste">
                                <label for="willingToMarryOtherCaste">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, I am willing to marry</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Sub-Cast<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="subcaste" name="subcaste">
                                    <option value="" disabled selected>Select Subcaste</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mother Tongue<span class="required">*</span></td>
                            <td>
                                <input type="text" class="form-control" id="mother_tongue" name="mother" value="<?php echo $row['mother']; ?>" placeholder="Enter Mother Tongue">

                            </td>
                        </tr>
                        <tr>
                            <td>Country Living in<span class="required">*</span></td>
                            <td>
                                <select id="country_living_in" name="country_living_in">
                                    <option value="" disabled>Select Your country Living In</option>
                                    <option value="india" <?php echo ($row['inputCountry'] == 'india') ? 'selected' : ''; ?>>India</option>
                                    <option value="usa" <?php echo ($row['inputCountry'] == 'usa') ? 'selected' : ''; ?>>USA</option>
                                    <option value="australia" <?php echo ($row['inputCountry'] == 'australia') ? 'selected' : ''; ?>>Australia</option>
                                    <option value="japan" <?php echo ($row['inputCountry'] == 'japan') ? 'selected' : ''; ?>>Japan</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>State Living In<span class="required">*</span></td>
                            <td>
                                <select id="state_living_in" name="state_living_in">
                                    <option value="" disabled selected>Select Your State LivingIn</option>
                                    <option value="telangana">telangana</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>City Living In<span class="required">*</span></td>
                            <td>
                                <select id="city_living_in" name="city_living_in">
                                    <option value="" disabled selected>Select Your city LivingIn</option>
                                    <option value="hyd">hyd</option>
                                </select>
                            </td>
                        </tr>


                    </table>
                    <legend><i class="fas fa-running icon"></i> Physical Attributes</legend>

                    <table>
                        <tr>
                            <td>Height<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="height" name="height">
                                    <option value="" disabled selected>Select Your Height</option>
                                    <option value="4ft">4ft</option>
                                    <option value="5ft">5ft</option>
                                    <option value="6ft">6ft</option>
                                    <option value="7ft">7ft</option>
                                    <option value="8ft">8ft</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Weight<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="weight" name="weight">
                                    <option value="" disabled selected>Select Your Weight</option>
                                    <option value="20kg">20kg</option>
                                    <!-- Add other options up to 150kg -->
                                    <option value="150kg">150kg</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Body type<span class="required"></span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="bodyType" name="bodyType" value="curvy">
                                    <label for="curvy">Curvy</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="bodyType" name="bodyType" value="slim">
                                    <label for="slim">Slim</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Complexion<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexion" name="complexion" value="fair">
                                    <label for="fair">Fair</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexion" name="complexion" value="medium">
                                    <label for="medium">Medium</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexion" name="complexion" value="olive">
                                    <label for="olive">Olive</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexion" name="complexion" value="dark">
                                    <label for="dark">Dark</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Physical Status<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="physicalStatus" name="physicalStatus">
                                    <option value="" disabled selected>Select Your Physical Status</option>
                                    <option value="slim">Slim</option>
                                    <option value="fit">Fit</option>
                                    <option value="chubby">Chubby</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-book icon"></i> Education & Occupation</legend>


                    <table>
                        <tr>
                            <td>heighest Education<span class="required">*</span></td>
                            <td>
                                <select class="custom-select-box" name="highestEducation">
                                    <option value="" selected disabled>Select Highest Qualification</option>
                                    <option value="12th">12th</option>
                                    <option value="B.A. (Arts)">B.A. (Arts)</option>
                                    <option value="B.Com (Commerce)">B.Com (Commerce)</option>
                                    <option value="B.Sc (Science)">B.Sc (Science)</option>
                                    <option value="B.Arch (Architecture)	">B.Arch (Architecture) </option>
                                    <option value="B.Ed (Education)	">B.Ed (Education) </option>
                                    <option value="B.El.Ed (Elementary Education)	">B.El.Ed (Elementary
                                        Education) </option>
                                    <option value="B.Lib.Sc (Library Sciences)	">B.Lib.Sc (Library Sciences)
                                    </option>
                                    <option value="B.P.Ed. (Physical Education)">B.P.Ed. (Physical
                                        Education)</option>
                                    <option value="B.Plan (Planning)	">B.Plan (Planning) </option>
                                    <option value="	Bachelor of Fashion Technology		"> Bachelor of Fashion
                                        Technology </option>
                                    <option value="	BBA/BBM/BBS	"> BBA/BBM/BBS </option>
                                    <option value="BCA (Computer Application)		">BCA (Computer Application)
                                    </option>
                                    <option value="BE B.Tech (Engineering)">BE B.Tech (Engineering)</option>
                                    <option value="BFA (Fine Arts)">BFA (Fine Arts)</option>
                                    <option value="BHM (Hotel Management)	">BHM (Hotel Management) </option>
                                    <option value="BL/LLB/BGL (Law)">BL/LLB/BGL (Law)</option>
                                    <option value="BSW (Social Work)">BSW (Social Work)</option>
                                    <option value="	B.Pharm (Pharmacy)		"> B.Pharm (Pharmacy) </option>
                                    <option value="	B.V.Sc. (Veterinary Science)"> B.V.Sc. (Veterinary
                                        Science)</option>
                                    <option value="BDS (Dental Surgery)	">BDS (Dental Surgery) </option>
                                    <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                    <option value="CA (Chartered Accountant)	">CA (Chartered Accountant)
                                    </option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered
                                        Financial Analyst)</option>
                                    <option value="CS (Company Secretary)">CS (Company Secretary)</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="Integrated PG">Integrated PG</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Fashion/ Design	">Fashion/ Design </option>
                                    <option value="Languages	">Languages </option>
                                    <option value="Pilot Licenses	">Pilot Licenses </option>
                                    <option value="M.Arch. (Architecture)	">M.Arch. (Architecture) </option>
                                    <option value="M.Ed. (Education)">M.Ed. (Education)</option>
                                    <option value="M.Lib.Sc. (Library Sciences)">M.Lib.Sc. (Library
                                        Sciences)</option>
                                    <option value="M.Plan. (Planning)">M.Plan. (Planning)</option>
                                    <option value="Master of Fashion Technology">Master of Fashion
                                        Technology</option>
                                    <option value="Master of Health Administration	">Master of Health
                                        Administration </option>
                                    <option value="Master of Hospital Administration">Master of Hospital
                                        Administration</option>
                                    <option value="MBA/PGDM">MBA/PGDM</option>
                                    <option value="MCA PGDCA part time	">MCA PGDCA part time </option>
                                    <option value="MCA/PGDCA">MCA/PGDCA</option>
                                    <option value="ME/M.Tech/MS (Engg/Sciences)">ME/M.Tech/MS
                                        (Engg/Sciences)</option>
                                    <option value="MFA (Fine Arts)	">MFA (Fine Arts) </option>
                                    <option value="ML/LLM (Law)	">ML/LLM (Law) </option>
                                    <option value="MSW (Social Work)	">MSW (Social Work) </option>
                                    <option value="PG Diploma">PG Diploma</option>
                                    <option value="M.Com. (Commerce)">M.Com. (Commerce)</option>
                                    <option value="M.Sc. (Science)">M.Sc. (Science)</option>
                                    <option value="MA (Arts)">MA (Arts)</option>
                                    <option value="M.Pharm. (Pharmacy)	">M.Pharm. (Pharmacy) </option>
                                    <option value="M.V.Sc. (Veterinary Science)">M.V.Sc. (Veterinary
                                        Science)</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MD/ MS (Medicine)">MD/ MS (Medicine)</option>
                                    <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental
                                        Surgery)</option>
                                    <option value="BPT (Physiotherapy">BPT (Physiotherapy</option>
                                    <option value="MPT (Physiotherapy)">MPT (Physiotherapy)</option>
                                    <option value="M.Phil. (Philosophy)">M.Phil. (Philosophy)</option>
                                    <option value="Ph.D. (Doctorate)	">Ph.D. (Doctorate) </option>
                                    <option value="Other Doctorate">Other Doctorate</option>
                                    <option value="Other Diploma">Other Diploma</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="10th">10th</option>
                                    <option value="Below 10th">Below 10th</option>
                                    <!-- Add more education options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Additional Degree<span class="required"></span></td>
                            <td>
                                <select class="custom-select-box" name="additionalDegree" id="additionalDegree">
                                    <option value="" selected disabled>Select Highest Qualification</option>
                                    <option value="12th">12th</option>
                                    <option value="B.A. (Arts)">B.A. (Arts)</option>
                                    <option value="B.Com (Commerce)">B.Com (Commerce)</option>
                                    <option value="B.Sc (Science)">B.Sc (Science)</option>
                                    <option value="B.Arch (Architecture)	">B.Arch (Architecture) </option>
                                    <option value="B.Ed (Education)	">B.Ed (Education) </option>
                                    <option value="B.El.Ed (Elementary Education)	">B.El.Ed (Elementary
                                        Education) </option>
                                    <option value="B.Lib.Sc (Library Sciences)	">B.Lib.Sc (Library Sciences)
                                    </option>
                                    <option value="B.P.Ed. (Physical Education)">B.P.Ed. (Physical
                                        Education)</option>
                                    <option value="B.Plan (Planning)	">B.Plan (Planning) </option>
                                    <option value="	Bachelor of Fashion Technology		"> Bachelor of Fashion
                                        Technology </option>
                                    <option value="	BBA/BBM/BBS	"> BBA/BBM/BBS </option>
                                    <option value="BCA (Computer Application)		">BCA (Computer Application)
                                    </option>
                                    <option value="BE B.Tech (Engineering)">BE B.Tech (Engineering)</option>
                                    <option value="BFA (Fine Arts)">BFA (Fine Arts)</option>
                                    <option value="BHM (Hotel Management)	">BHM (Hotel Management) </option>
                                    <option value="BL/LLB/BGL (Law)">BL/LLB/BGL (Law)</option>
                                    <option value="BSW (Social Work)">BSW (Social Work)</option>
                                    <option value="	B.Pharm (Pharmacy)		"> B.Pharm (Pharmacy) </option>
                                    <option value="	B.V.Sc. (Veterinary Science)"> B.V.Sc. (Veterinary
                                        Science)</option>
                                    <option value="BDS (Dental Surgery)	">BDS (Dental Surgery) </option>
                                    <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                    <option value="CA (Chartered Accountant)	">CA (Chartered Accountant)
                                    </option>
                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered
                                        Financial Analyst)</option>
                                    <option value="CS (Company Secretary)">CS (Company Secretary)</option>
                                    <option value="ICWA">ICWA</option>
                                    <option value="Integrated PG">Integrated PG</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Fashion/ Design	">Fashion/ Design </option>
                                    <option value="Languages	">Languages </option>
                                    <option value="Pilot Licenses	">Pilot Licenses </option>
                                    <option value="M.Arch. (Architecture)	">M.Arch. (Architecture) </option>
                                    <option value="M.Ed. (Education)">M.Ed. (Education)</option>
                                    <option value="M.Lib.Sc. (Library Sciences)">M.Lib.Sc. (Library
                                        Sciences)</option>
                                    <option value="M.Plan. (Planning)">M.Plan. (Planning)</option>
                                    <option value="Master of Fashion Technology">Master of Fashion
                                        Technology</option>
                                    <option value="Master of Health Administration	">Master of Health
                                        Administration </option>
                                    <option value="Master of Hospital Administration">Master of Hospital
                                        Administration</option>
                                    <option value="MBA/PGDM">MBA/PGDM</option>
                                    <option value="MCA PGDCA part time	">MCA PGDCA part time </option>
                                    <option value="MCA/PGDCA">MCA/PGDCA</option>
                                    <option value="ME/M.Tech/MS (Engg/Sciences)">ME/M.Tech/MS
                                        (Engg/Sciences)</option>
                                    <option value="MFA (Fine Arts)	">MFA (Fine Arts) </option>
                                    <option value="ML/LLM (Law)	">ML/LLM (Law) </option>
                                    <option value="MSW (Social Work)	">MSW (Social Work) </option>
                                    <option value="PG Diploma">PG Diploma</option>
                                    <option value="M.Com. (Commerce)">M.Com. (Commerce)</option>
                                    <option value="M.Sc. (Science)">M.Sc. (Science)</option>
                                    <option value="MA (Arts)">MA (Arts)</option>
                                    <option value="M.Pharm. (Pharmacy)	">M.Pharm. (Pharmacy) </option>
                                    <option value="M.V.Sc. (Veterinary Science)">M.V.Sc. (Veterinary
                                        Science)</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MD/ MS (Medicine)">MD/ MS (Medicine)</option>
                                    <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental
                                        Surgery)</option>
                                    <option value="BPT (Physiotherapy">BPT (Physiotherapy</option>
                                    <option value="MPT (Physiotherapy)">MPT (Physiotherapy)</option>
                                    <option value="M.Phil. (Philosophy)">M.Phil. (Philosophy)</option>
                                    <option value="Ph.D. (Doctorate)	">Ph.D. (Doctorate) </option>
                                    <option value="Other Doctorate">Other Doctorate</option>
                                    <option value="Other Diploma">Other Diploma</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="10th">10th</option>
                                    <option value="Below 10th">Below 10th</option>
                                    <!-- Add more education options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Occupation<span class="required">*</span></td>
                            <td>
                                <select class="custom-select-box" name="occupation" id="occupation">
                                    <option value="" selected disabled>Select Occupation</option>
                                    <option value="" selected disabled>Enter Occupation</option>
                                    <option value="Advertising/ Entertainment/ Media">Advertising/
                                        Entertainment/ Media</option>
                                    <option value="Architecture & Design">Architecture & Design</option>
                                    <option value="Artists">Artists</option>
                                    <option value=" Animators & Web Designers"> Animators & Web Designers
                                    </option>
                                    <option value="Banking">Banking</option>
                                    <option value=" Insurance & Financial Services"> Insurance & Financial
                                        Services</option>
                                    <option value="Beauty">Beauty</option>
                                    <option value=" Fashion & Jewellery Designers"> Fashion & Jewellery
                                        Designers</option>
                                    <option value="Business Owner / Entrepreneur">Business Owner /
                                        Entrepreneur</option>
                                    <option value="Civil Services / Law Enforcement">Civil Services / Law
                                        Enforcement</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Customer Service/ Call Centre/BPO">Customer Service/ Call
                                        Centre/BPO</option>
                                    <option value="Defence">Defence</option>
                                    <option value="Education/ Training">Education/ Training</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Export/ Import">Export/ Import</option>
                                    <option value="Finance and Accounts">Finance and Accounts</option>
                                    <option value="Government Employee">Government Employee</option>
                                    <option value="Health Care">Health Care</option>
                                    <option value="Hotels/ Restaurants">Hotels/ Restaurants</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="IT">IT</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Loss Prevention Manager">Loss Prevention Manager</option>
                                    <option value="Management / Corporate Professionals">Management /
                                        Corporate Professionals</option>
                                    <option value="Manufacturing/ Engineering/ R&D">Manufacturing/
                                        Engineering/ R&D</option>
                                    <option value="Marketing and Communications">Marketing and
                                        Communications</option>
                                    <option value="Merchant Navy">Merchant Navy</option>
                                    <option value="Non Working">Non Working</option>
                                    <option value="Oil & Gas">Oil & Gas</option>
                                    <option value="Others">Others</option>
                                    <option value="Pharmaceutical/ Biotechnology">Pharmaceutical/
                                        Biotechnology</option>
                                    <option value="Purchase/ Logistics/ Supply chain">Purchase/ Logistics/
                                        Supply chain</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Retail Chains">Retail Chains</option>
                                    <option value="Sales/ Business Development">Sales/ Business Development
                                    </option>
                                    <option value="Science">Science</option>
                                    <option value="Telecom/ ISP">Telecom/ ISP</option>
                                    <option value="Travel/ Airlines">Travel/ Airlines</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <!-- Add more occupation options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Employed in<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedIn" name="employedIn" value="government">
                                    <label for="government">Government</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedIn" name="employedIn" value="private">
                                    <label for="private">Private</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedIn" name="employedIn" value="self-employed">
                                    <label for="self-employed">Self-employed</label>
                                </div>
                                <!-- Add more checkboxes as needed -->
                            </td>
                        </tr>


                        <tr>
                            <td>Annual income<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="annualIncome" name="annualIncome">
                                    <option value="" disabled selected>Select Your Annual Income</option>

                                    <option value="doesnt_matter">Doesn't Matter</option>
                                    <option value="2LPA">2 LPA</option>
                                    <option value="3LPA">3 LPA</option>
                                    <option value="4LPA">4 LPA</option>
                                    <option value="5LPA">5 LPA</option>
                                    <option value="6LPA">6 LPA</option>

                                </select>
                            </td>
                        </tr>

                    </table>
                    <legend><i class="fas fa-glass-cheers icon"></i> Habits</legend>
                    <table>

                        <tr>
                            <td>Diet<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="diet	" name="diet" value="vegetarian">
                                    <label for="vegetarian">Vegetarian</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="diet	" name="diet" value="eggetarian">
                                    <label for="vegan">Eggetarian</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="diet	" name="diet" value="non-vegetarian">
                                    <label for="non-vegetarian">Non-Vegetarian</label>
                                </div>
                                <!-- <div class="form-group2">
                            <input type="checkbox" id="other-diet" name="diet" value="other">
                            <label for="other-diet">Other</label>
                        </div> -->
                            </td>
                        </tr>


                        <tr>
                            <td>Smoking<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabits" name="smokingHabits" value="smoker">
                                    <label for="smoker">Smoker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabits" name="smokingHabits" value="non-smoker">
                                    <label for="non-smoker">Non-Smoker</label>
                                </div>
                                <!-- <div class="form-group2">
                            <input type="checkbox" id="occasional-smoker" name="smoking" value="occasional-smoker">
                            <label for="occasional-smoker">Occasional Smoker</label>
                        </div> -->
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabits" name="smokingHabits" value="quit-smoking">
                                    <label for="quit-smoking">Quit Smoking</label>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td>Drinking<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="drinkingHabits	" name="drinkingHabits" value="social-drinker">
                                    <label for="social-drinker">Social Drinker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="drinking_habits" name="drinkingHabits" value="non-drinker">
                                    <label for="non-drinker">Non-Drinker</label>
                                </div>
                                <!-- <div class="form-group2">
                            <input type="checkbox" id="occasional-drinker" name="drinking" value="occasional-drinker">
                            <label for="occasional-drinker">Occasional Drinker</label>
                        </div> -->
                                <div class="form-group2">
                                    <input type="checkbox" id="drinkingHabits" name="drinkingHabits" value="heavy-drinker">
                                    <label for="heavy-drinker">Heavy Drinker</label>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <legend><i class="fas fa-moon icon"></i> Horoscope Details</legend>
                    <br>
                    <p>We suggest Our members to please insert your Horoscope details even of you dont believen in it because
                        our lots of members interested in this details</p>
                    <br>
                    <table>
                        <tr>
                            <td>Have Dosh?<span class="required"></span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type" name="doshType" value="yes">
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type" name="doshType" value="no">
                                    <label for="no">No</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type" name="doshType" value="donoknow">
                                    <label for="do-not-know">Do not Know</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Star<span class="required"></span></td>
                            <td>
                                <select id="star" name="star">
                                    <option value="" disabled selected> select star</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth Time<span class="required"></span></td>
                            <td>
                                <input type="time" class="oneform" id="birthTime" name="birthTime">
                            </td>
                        </tr>

                        <tr>
                            <td>Birth place<span class="required"></span></td>
                            <td><input type="text" class="onefrom" id="birthPlace" name="birthPlace"></td>
                        </tr>

                    </table>
                    <legend><i class="fas fa-users icon"></i> Family Profile</legend>

                    <table>
                        <tr>
                            <td>Family status<span class="required"></span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus" name="familyStatus" value="MiddleClass">
                                    <label for="married">Middle Class</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus" name="familyStatus" value="UpperMiddleClass">
                                    <label for="single"> Upper Middle Class</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus" name="familyStatus" value="Rich">
                                    <label for="divorced">Rich</label>
                                </div>
                                <!-- <div class="form-group2">
                            <input type="checkbox" id="Affluent" name="family-status" value="Affluent">
                            <label for="widowed">Affluent</label>
                        </div> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Family type<span class="required"></span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyType" name="familyType" value="Joint">
                                    <label for="married">Joint</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyType" name="familyType" value="Nuclear">
                                    <label for="single">Nuclear</label>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>Family value<span class="required"></span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue" name="familyValue" value="orthodox">
                                    <label for="orthodox">orthodox</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue" name="familyValue" value="Traditional">
                                    <label for="Traditional">Traditional</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue" name="familyValue" value="Moderate">
                                    <label for="Moderate">Moderate</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue" name="familyValue" value="liberal">
                                    <label for="liberal">liberal</label>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>Father Occupation<span class="required"></span></td>
                            <td><input type="text" id="fatherOccupation" name="fatherOccupation"></td>
                        </tr>
                        <tr>
                            <td>Mother Occupation<span class="required"></span></td>
                            <td><input type="text" id="motherOccupation" name="motherOccupation"></td>
                        </tr>
                        <tr>
                            <td>No.of Brother<span class="required"></span></td>
                            <td><input type="number" id="numBrothers" name="numBrothers"></td>
                        </tr>
                        <tr>
                            <td>No.of sister<span class="required"></span></td>
                            <td><input type="number" id="numSisters" name="numSisters"></td>
                        </tr>

                    </table>
                    <legend><i class="fas fa-user-edit icon"></i> Something About You</legend>

                    <br>
                    <p> write some of about you.for Example Which of person you are,about you,<strong>presonality,Hobbies,About
                            you family </strong>ect.</p>
                    <table>
                        <tr>
                            <td>Something About you<span class="required">*</span></td>
                            <td> <textarea class="oneform" id="additionalInfo" name="additionalInfo" rows="5"></textarea></textarea></td>
                        </tr>

                    </table>
                    <div class="form-group">
                    <button onclick="moveToStep(2)">Continue</button>
                    </div>
                    <!-- <button type="submit">Submit</button> -->
                </form>
        <?php
            }
        } else {
            echo "<tr>";
            echo "<td colspan='6'>No results</td>";
            echo "</tr>";
        }



        ?>
        <!-- </fieldset> -->

    </section>


    <br>


    </div>
    <div class="slidebox">
        <section class="section information-cards">
            <h2>Information Cards</h2>
            <ul>
                <li>
                    <div class="card">
                        <img src="data:image/png;base64,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" alt="Mobile Verified" style="width: 150px; height:100px; color:pink;">
                        <h3>Mobile Verified Profiles</h3>
                    </div>
                </li>
                <!-- Add other cards here -->
                <li>
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" alt="Many Happy Couples" style="width: 150px; height: 100px;">
                        <h3>Many Happy Couples</h3>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE3nTk1h4GEiq4zxeoQ_ZyQQMLTa4rjQsKxB4aNA-5mw&s" alt="Most Trusted Matrimony" style="width: 150px; height: 100px;">
                        <h3>Most Trusted Matrimony</h3>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section personal-details" id="step2">
            <h2>Personal Details</h2>
            <p>Enter your personal details here.</p>
            <button onclick="moveToStep(3)">Continue</button>
        </section>
        <section class="section confirmation" id="step3">
            <h2>Confirmation</h2>
            <p>Confirm your information.</p>
            <button onclick="submitForm()">Submit</button>
        </section>
    </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Add footer content here -->
    <?php include 'footer.php' ?>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#countryLivingIn').change(function() {
            var country = $(this).val();
            var stateDropdown = $('#stateLivingIn');
            var cityDropdown = $('#cityLivingIn');

            // Clear existing options
            stateDropdown.empty();
            cityDropdown.empty();

            // Populate state options based on selected country
            var stateOptions = [];
            if (country === "usa") {
                stateOptions = ["New York", "California", "Texas"];
            } else if (country === "australia") {
                stateOptions = ["New South Wales", "Victoria", "Queensland"];
            } else if (country === "japan") {
                stateOptions = ["Tokyo", "Osaka", "Kyoto"];
            } else if (country === "india") {
                stateOptions = ["Andhra Pradesh", "Telangana", "Karnataka", "Uttar Pradesh", "Madhya Pradesh"];
            }

            // Add state options to dropdown
            stateOptions.forEach(function(option) {
                stateDropdown.append($('<option>', {
                    value: option.toLowerCase().replace(/\s/g, '_'), // Convert spaces to underscores and make lowercase
                    text: option
                }));
            });

            // Populate city options based on selected country (assuming the same cities for all states)
            var cityOptions = [];
            if (country === "usa") {
                cityOptions = ["New York City", "Los Angeles", "Houston"];
            } else if (country === "australia") {
                cityOptions = ["Sydney", "Melbourne", "Brisbane"];
            } else if (country === "japan") {
                cityOptions = ["Tokyo", "Osaka", "Kyoto"];
            } else if (country === "india") {
                cityOptions = ["Hyderabad", "Bangalore", "Mumbai", "New Delhi", "Chennai"];
            }

            // Add city options to dropdown
            cityOptions.forEach(function(option) {
                cityDropdown.append($('<option>', {
                    value: option.toLowerCase().replace(/\s/g, '_'), // Convert spaces to underscores and make lowercase
                    text: option
                }));
            });
        });

        // Trigger change event to populate state and city dropdowns initially
        $('#countryLivingIn').change();
    });
</script>
<script>
    $(document).ready(function() {
        $('#religion').change(function() {
            var religion = $(this).val();
            var casteDropdown = $('#caste');
            var subcasteDropdown = $('#subcaste');

            // Clear existing options
            casteDropdown.empty();
            subcasteDropdown.empty();

            // Populate caste options based on religion
            var casteOptions = [];
            if (religion === "hindu") {
                casteOptions = ["OC", "BC", "SC"];
            } else if (religion === "muslim") {
                casteOptions = ["OC", "BC"];
            } else if (religion === "christian") {
                casteOptions = ["OC", "BC"];
            }

            // Add caste options to dropdown
            casteOptions.forEach(function(option) {
                casteDropdown.append($('<option>', {
                    value: option,
                    text: option
                }));
            });

            // Populate subcaste options based on caste
            var subcasteOptions = [];
            if (religion === "hindu") {
                subcasteOptions = ["Subcaste11_OC", "Subcaste12_OC", "Subcaste13_OC"];
            } else if (religion === "muslim") {
                subcasteOptions = ["Subcaste21_BC", "Subcaste22_BC", "Subcaste23_BC"];
            } else if (religion === "christian") {
                subcasteOptions = ["Subcaste31_BC", "Subcaste32_BC", "Subcaste33_BC"];
            }


            // Add subcaste options to dropdown
            subcasteOptions.forEach(function(option) {
                subcasteDropdown.append($('<option>', {
                    value: option,
                    text: option
                }));
            });
        });
    });
</script>
<script>
    function validateMemberDetailsForm() {
        // Get field values
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var mobile = document.getElementById("mobile").value;
        var gender = document.getElementById("gender").value;
        var dob = document.getElementById("dob").value;
        var maritalStatus = document.querySelectorAll('input[name="marital-status"]:checked').length > 0;
        var religion = document.getElementById("religion").value;
        var caste = document.getElementById("caste").value;
        var subcaste = document.getElementById("subcaste").value;
        var motherTongue = document.getElementById("motherTongue").value;
        var countryLivingIn = document.getElementById("countryLivingIn").value;
        var stateLivingIn = document.getElementById("stateLivingIn").value;
        var cityLivingIn = document.getElementById("cityLivingIn").value;
        var height = document.getElementById("height").value;
        var weight = document.getElementById("weight").value;
        var bodyTypeCurvy = document.getElementById("curvy").checked;
        var bodyTypeSlim = document.getElementById("slim").checked;
        var complexionFair = document.getElementById("fair").checked;
        var complexionMedium = document.getElementById("medium").checked;
        var complexionOlive = document.getElementById("olive").checked;
        var complexionDark = document.getElementById("dark").checked;
        var physicalStatus = document.getElementById("physicalStatus").value;
        var education = document.getElementsByName("education")[0].value;
        var occupation = document.getElementsByName("occupation")[0].value;
        var employed = document.getElementById("employed").checked;
        var unemployed = document.getElementById("unemployed").checked;
        var selfEmployed = document.getElementById("self-employed").checked;
        var annualIncome = document.getElementById("annualIncomes").value;
        var diet = document.querySelectorAll('input[name="diet"]:checked').length;
        var smoking = document.querySelectorAll('input[name="smoking"]:checked').length;
        var drinking = document.querySelectorAll('input[name="drinking"]:checked').length;








        // Check if any of the required fields are empty
        if (!firstName.trim()) {
            alert("Please enter your first name.");
            return false;
        }

        if (!lastName.trim()) {
            alert("Please enter your last name.");
            return false;
        }

        if (!email.trim()) {
            alert("Please enter your email address.");
            return false;
        }

        if (!password.trim()) {
            alert("Please enter your password.");
            return false;
        }

        if (!confirmPassword.trim()) {
            alert("Please confirm your password.");
            return false;
        }

        if (!mobile.trim()) {
            alert("Please enter your mobile number.");
            return false;
        }

        // Check if email is valid
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Check if password matches confirm password
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        // Check if mobile number is valid
        var mobileRegex = /^[0-9]{10}$/;
        if (!mobileRegex.test(mobile)) {
            alert("Please enter a valid 10-digit mobile number.");
            return false;
        }
        if (gender == "") {
            alert("Please select your gender");
            return false;
        }

        if (dob == "") {
            alert("Please enter your date of birth");
            return false;
        }

        if (!maritalStatus) {
            alert("Please select your marital status");
            return false;
        }

        if (religion == "") {
            alert("Please select your religion");
            return false;
        }

        if (caste == "") {
            alert("Please select your caste");
            return false;
        }

        if (subcaste == "") {
            alert("Please select your subcaste");
            return false;
        }

        if (motherTongue == "") {
            alert("Please enter your mother tongue");
            return false;
        }

        if (countryLivingIn == "") {
            alert("Please select the country you are living in");
            return false;
        }

        if (stateLivingIn == "") {
            alert("Please select the state you are living in");
            return false;
        }

        if (cityLivingIn == "") {
            alert("Please select the city you are living in");
            return false;
        }
        // Validation for Height
        if (height == "") {
            alert("Please select your height.");
            return false;
        }

        // Validation for Weight
        if (weight == "") {
            alert("Please select your weight.");
            return false;
        }

        // Validation for Body Type
        if (!bodyTypeCurvy && !bodyTypeSlim) {
            alert("Please select at least one body type.");
            return false;
        }

        // Validation for Complexion
        if (!complexionFair && !complexionMedium && !complexionOlive && !complexionDark) {
            alert("Please select at least one complexion.");
            return false;
        }

        // Validation for Physical Status
        if (physicalStatus == "") {
            alert("Please select your physical status.");
            return false;
        }
        // Validation for Highest Education
        if (education === "") {
            alert("Please select your highest education.");
            return false;
        }

        // Validation for Occupation
        if (occupation === "") {
            alert("Please select your occupation.");
            return false;
        }

        // Validation for Employed In
        if (!employed && !unemployed && !selfEmployed) {
            alert("Please select at least one option for employed in.");
            return false;
        }

        // Validation for Annual Income
        if (annualIncome === "") {
            alert("Please select your annual income.");
            return false;
        }
        // Validation for Diet
        if (diet === 0) {
            alert("Please select your diet preference.");
            return false;
        }

        // Validation for Smoking
        if (smoking === 0) {
            alert("Please select your smoking habit.");
            return false;
        }

        // Validation for Drinking
        if (drinking === 0) {
            alert("Please select your drinking habit.");
            return false;
        }

        var dosh = document.querySelectorAll('input[name="dosh"]:checked').length;
        if (dosh === 0) {
            alert("Please select if you have dosh.");
            return false; // Prevent form submission
        }

        // // Validation for Star
        // var star = document.getElementById('star').value;
        // if (star === "") {
        //     alert("Please select a star.");
        //     return false;
        // }

        // Validation for Birth Time
        var birthTime = document.getElementById('birthTime').value;
        if (birthTime === "") {
            alert("Please enter your birth time.");
            return false;
        }

        // Validation for Birth Place
        var birthPlace = document.getElementById('birthPlace').value;
        if (birthPlace === "") {
            alert("Please enter your birth place.");
            return false;
        }
        var statusChecked = document.querySelectorAll('input[name="family-status"]:checked').length;

        if (statusChecked === 0) {
            alert("Please select a family status.");
            return false;
        }
        var typeChecked = document.querySelectorAll('input[name="family-type"]:checked').length;
        if (typeChecked === 0) {
            alert("Please select a family type.");
            return false;
        }


        // If all validations pass, the form can be submitted
        return true;
    }
</script>

</html>
<!-- i  am select  religion and i need  auto dropdown in caste  and subcaste -->