<?php
session_start();

include "db.php";

$sql = "SELECT * FROM user_profiles WHERE mobile = '$mobile_number'";

$result = mysqli_query($conn, $sql);
if ($result) {
    $num = mysqli_num_rows($result);
}

?>
<?php


include "db.php";

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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Registraion Form</title>
    <style>
        :root {
            --primary-color: rgb(11, 78, 179);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            font-family: Montserrat, "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: grid;
            place-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input,
        select {
            display: block;
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        .width-50 {
            width: 50%;
        }

        .ml-auto {
            margin-left: auto;
        }

        .text-center {
            text-align: center;
        }

        .progressbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            counter-reset: step;
            margin: 2rem 0 4rem;
        }

        .progressbar::before,
        .progress {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: #dcdcdc;
            z-index: -1;
        }

        .progress {
            background-color: var(--primary-color);
            width: 0%;
            transition: 0.3s;
        }

        .progress-step {
            width: 2.1875rem;
            height: 2.1875rem;
            background-color: #dcdcdc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step);
        }

        .progress-step::after {
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.5rem);
            font-size: 0.85rem;
            color: #666;
        }

        .progress-step-active {
            background-color: var(--primary-color);
            color: #f3f3f3;
        }

        .form {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 0.35rem;
            padding: 1.5rem;
        }

        .form-step {
            display: none;
            transform-origin: top;
            animation: animate 0.5s;
        }

        .form-step-active {
            display: block;
        }

        .input-group {
            margin: 2rem 0;
        }

        @keyframes animate {
            from {
                transform: scale(1, 0);
                opacity: 0;
            }

            to {
                transform: scale(1, 1);
                opacity: 1;
            }
        }

        .btns-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .btn {
            padding: 0.75rem;
            display: block;
            text-decoration: none;
            background-color: var(--primary-color);
            color: #f3f3f3;
            text-align: center;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
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
            font-size: 24px;
            margin-right: 10px;
        }

        form table {
            width: 100%;
            border-collapse: collapse;
        }

        form table td {
            padding: 8px;
        }

        form table td:first-child {
            width: 30%;
            font-weight: bold;
        }

        form table input[type="text"],
        form table input[type="password"],
        form table input[type="email"],
        form table input[type="tel"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group {
            margin-top: 20px;
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

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
        }

        input[type="date"],
        input[type="time"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
        }

        .oneform {
            width: 60%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-group2 {
            display: inline-block;
            margin-right: 10px;
        }

        .form-group2 input[type="checkbox"] {
            display: none;
        }

        .form-group2 label {
            display: inline-block;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .form-group2 label::before {
            content: "";
            display: inline-block;
            position: absolute;
            left: 0;
            top: 2px;
            width: 18px;
            height: 18px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
        }

        .form-group2 input[type="checkbox"]:checked+label::before {
            background-color: #007bff;
        }

        .form-group2 label::after {
            content: "\2713";
            display: none;
            position: absolute;
            left: 4px;
            top: 0;
            color: #fff;
        }

        .form-group2 input[type="checkbox"]:checked+label::after {
            display: inline-block;
        }

        .required {
            color: red;
        }

        @media (max-width: 768px) {
            .form {
                width: 100%;
                padding: 1rem;
            }

            .btns-group {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .btn {
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <br><br>

    <?php
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <form id="multiStepForm" class="form" action="submit.php" method="post" enctype="multipart/form-data" novalidate>
                <h1 class="text-center">Registration Form</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Step"></div>
                    <div class="progress-step" data-title="Step"></div>
                    <div class="progress-step" data-title="Step"></div>
                </div>
                <div class="form-step form-step-active">

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
                    <table class="table143">
                        <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                        <tr>
                            <td>First Name<span class="required">*</span></td>
                            <td>
                                <input type="text" class="form-control <?php if ($firstNameError)
                                    echo 'is-invalid'; ?>" id="firstName" name="firstName"
                                    value="<?php echo $row['firstName']; ?>" placeholder="Enter your first name" readonly
                                    required>
                                <div class="invalid-feedback">First name is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Last Name<span class="required">*</span></td>
                            <td>
                                <input type="text" class="form-control <?php if ($lastNameError)
                                    echo 'is-invalid'; ?>" id="lastName" name="lastName"
                                    value="<?php echo $row['lastName']; ?>" placeholder="Enter your last name" readonly
                                    required>
                                <div class="invalid-feedback">Last name is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Email Address<span class="required">*</span></td>
                            <td>
                                <input type="email" class="form-control <?php if ($emailError)
                                    echo 'is-invalid'; ?>" id="email" name="email" value="<?php echo $row['email']; ?>"
                                    placeholder="Enter your email" required>
                                <div class="invalid-feedback">Valid email address is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Password<span class="required">*</span></td>
                            <td>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" required
                                    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
                                    title="Password must be at least 8 characters long, contain at least one special character, one uppercase letter, and one lowercase letter.">
                                <div class="invalid-feedback">
                                    Password must be at least 8 characters long, contain at least one special character, one
                                    uppercase letter, and one lowercase letter.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Confirm Password<span class="required">*</span></td>
                            <td>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    placeholder="Confirm your password" required>

                                <div class="password-mismatch invalid-feedback">
                                    Passwords do not match.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile No<span class="required">*</span></td>
                            <td>
                                <input type="tel" class="form-control <?php if ($mobileError)
                                    echo 'is-invalid'; ?>" id="mobile" name="mobile"
                                    value="<?php echo $row['mobile']; ?>" placeholder="Enter your mobile number" readonly
                                    required>
                                <div class="invalid-feedback">Mobile number is required.</div>
                            </td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-user-circle icon"></i> Some Personal Information</legend>
                    <table>
                        <tr>
                            <td>Gender<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($genderError)
                                    echo 'is-invalid'; ?>" id="gender" name="gender" <?php echo $readonly ? 'disabled' : ''; ?> required>
                                    <option value="male" <?php if ($row['gender'] == 'male')
                                        echo 'selected'; ?>>Male</option>
                                    <option value="female" <?php if ($row['gender'] == 'female')
                                        echo 'selected'; ?>>Female
                                    </option>
                                    <option value="other" <?php if ($row['gender'] == 'other')
                                        echo 'selected'; ?>>Other</option>
                                </select>
                                <div class="invalid-feedback">Gender is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Birth<span class="required">*</span></td>
                            <td>
                                <input type="date" class="form-control <?php if ($dobError)
                                    echo 'is-invalid'; ?>" id="dob" name="dob" value="<?php echo $row['dob']; ?>"
                                    required>
                                <div class="invalid-feedback">Date of birth is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marital Status<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatusMarried" name="maritalStatus[]" value="Married">
                                    <label for="maritalStatusMarried">Married</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatusUnmarried" name="maritalStatus[]" value="Unmarried">
                                    <label for="maritalStatusUnmarried">Unmarried</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatusWidow" name="maritalStatus[]" value="Widow">
                                    <label for="maritalStatusWidow">Widow</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="maritalStatusDivorced" name="maritalStatus[]" value="Divorced">
                                    <label for="maritalStatusDivorced">Divorced</label>
                                </div>
                                <div class="invalid-feedback" id="maritalStatusError">Please select at least one marital status.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Religion<span class="required">*</span></td>
                            <td>
                                <select class="form-control" id="religion" name="religion" <?php echo $readOnly ? 'disabled' : ''; ?>>
                                    <option disabled selected>Select Religion</option>
                                    <option value="hindu" <?php if ($row['religion'] == 'hindu')
                                        echo 'selected'; ?>>Hindu
                                    </option>
                                    <option value="muslim" <?php if ($row['religion'] == 'muslim')
                                        echo 'selected'; ?>>Muslim
                                    </option>
                                    <option value="christian" <?php if ($row['religion'] == 'christian')
                                        echo 'selected'; ?>>
                                        Christian</option>
                                    <option value="sikhism" <?php if ($row['religion'] == 'sikhism')
                                        echo 'selected'; ?>>Sikhism
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cast<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($casteError)
                                    echo 'is-invalid'; ?>" id="caste" name="caste" onchange="populateSubcaste()"
                                    required>
                                    <option value="" disabled selected>Select Caste</option>
                                    <!-- Add options dynamically using PHP if needed -->
                                </select>
                                <div class="invalid-feedback">Cast is required.</div>
                            </td>
                        </tr>

                        <tr>
                            <td>Sub-Cast<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($subcasteError)
                                    echo 'is-invalid'; ?>" id="subcaste" name="subcaste" required>
                                    <option value="" disabled selected>Select Subcaste</option>
                                    <!-- Add options dynamically using JavaScript when a caste is selected -->
                                </select>
                                <div class="invalid-feedback">Sub-Cast is required.</div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="form-group2">
                                <input type="checkbox" id="willingToMarryOtherCaste" name="willingToMarryOtherCaste">
                                <label for="willingToMarryOtherCaste">Yes, I am willing to marry</label>
                            </td>
                        </tr>

                        <tr>
                            <td>Mother Tongue<span class="required">*</span></td>
                            <td>
                                <input type="text" class="form-control <?php if ($motherTongueError)
                                    echo 'is-invalid'; ?>" id="mother" name="mother"
                                    value="<?php echo $row['mother']; ?>" placeholder="Enter Mother Tongue" required>
                                <div class="invalid-feedback">Mother Tongue is required.</div>
                            </td>
                        </tr>

                        <tr>
                            <td>Country Living in<span class="required">*</span></td>
                            <td>
                                <select id="country_living_in" class="form-control <?php if ($countryLivingInError)
                                    echo 'is-invalid'; ?>" name="inputCountry" required>
                                    <option value="" disabled>Select Your country Living In</option>
                                    <option value="india" <?php echo ($row['inputCountry'] == 'india') ? 'selected' : ''; ?>>India
                                    </option>
                                    <option value="usa" <?php echo ($row['inputCountry'] == 'usa') ? 'selected' : ''; ?>>USA
                                    </option>
                                    <option value="australia" <?php echo ($row['inputCountry'] == 'australia') ? 'selected' : ''; ?>>Australia</option>
                                    <option value="japan" <?php echo ($row['inputCountry'] == 'japan') ? 'selected' : ''; ?>>Japan
                                    </option>
                                </select>
                                <div class="invalid-feedback">Country Living in is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>State Living in<span class="required">*</span></td>
                            <td>
                                <select id="state_living_in" class="form-control <?php if ($countryLivingInError)
                                    echo 'is-invalid'; ?>" name="inputState" required>
                                    <option value="" disabled selected>Select Your State LivingIn</option>
                                    <option value="AP">Andhra Pradesh (AP)</option>
                                    <option value="TS">Telangana (TS)</option>
                                    <option value="KA">Karnataka (KA)</option>
                                    <option value="UP">Uttar Pradesh (UP)</option>
                                    <option value="MP">Madhya Pradesh (MP)</option>
                                </select>
                                <div class="invalid-feedback">State Living in is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>City Living in<span class="required">*</span></td>
                            <td>
                                <select id="city_living_in" class="form-control" name="inputCity" required>
                                    <!-- Options will be populated dynamically based on the selected state -->
                                </select>
                                <div class="invalid-feedback">City Living in is required.</div>
                            </td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-running icon"></i> Physical Attributes</legend>

                    <table class="table143">
                        <tr>
                            <td>Height<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($heightError)
                                    echo 'is-invalid'; ?>" id="height" name="height" required>
                                    <option value="" disabled selected>Select Your Height</option>
                                    <option value="4ft">4ft</option>
                                    <option value="5ft">5ft</option>
                                    <option value="6ft">6ft</option>
                                    <option value="7ft">7ft</option>
                                    <option value="8ft">8ft</option>
                                </select>
                                <div class="invalid-feedback">Height is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Weight<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($weightError)
                                    echo 'is-invalid'; ?>" id="weight" name="weight" required>
                                    <option value="" disabled selected>Select Your Weight</option>
                                    <option value="70kg">70kg</option>
                                    <option value="75kg">75kg</option>
                                    <option value="80kg">80kg</option>
                                    <option value="85kg">85kg</option>
                                    <option value="90kg">90kg</option>
                                    <option value="95kg">95kg</option>
                                    <option value="150kg">150kg</option>
                                </select>
                                <div class="invalid-feedback">Weight is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Body type</td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="bodyTypeCurvy" name="bodyType[]" value="curvy">
                                    <label for="bodyTypeCurvy">Curvy</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="bodyTypeSlim" name="bodyType[]" value="slim">
                                    <label for="bodyTypeSlim">Slim</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Complexion<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexionFair" name="complexion[]" value="fair">
                                    <label for="complexionFair">Fair</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexionMedium" name="complexion[]" value="medium">
                                    <label for="complexionMedium">Medium</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexionOlive" name="complexion[]" value="olive">
                                    <label for="complexionOlive">Olive</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="complexionDark" name="complexion[]" value="dark">
                                    <label for="complexionDark">Dark</label>
                                </div>
                                <div class="invalid-feedback">At least one complexion is required.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Physical Status<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($physicalStatusError)
                                    echo 'is-invalid'; ?>" id="physicalStatus" name="physicalStatus" required>
                                    <option value="" disabled selected>Select Your Physical Status</option>
                                    <option value="slim">Slim</option>
                                    <option value="fit">Fit</option>
                                    <option value="chubby">Chubby</option>
                                </select>
                                <div class="invalid-feedback">Physical Status is required.</div>
                            </td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-book icon"></i> Education & Occupation</legend>
                    <table class="table143">
                        <tr>
                            <td>Highest Education<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($highestEducationError)
                                    echo 'is-invalid'; ?>" name="highestEducation" required>
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
                                    <!-- Continue adding other options -->
                                </select>
                                <div class="invalid-feedback">Highest Education is required.</div>
                            </td>
                        </tr>
                        <!-- Additional Degree section -->
                        <tr>
                            <td>Additional Degree</td>
                            <td>
                                <select class="form-control" name="additionalDegree" id="additionalDegree">
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
                                    <!-- Continue adding other options -->
                                </select>
                            </td>
                        </tr>
                        <!-- Occupation section -->
                        <tr>
                            <td>Occupation<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($occupationError)
                                    echo 'is-invalid'; ?>" name="occupation" id="occupation" required>
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
                                    <!-- Continue adding other options -->
                                </select>
                                <div class="invalid-feedback">Occupation is required.</div>
                            </td>
                        </tr>
                        <!-- Employed in section -->
                        <tr>
                            <td>Employed in<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedInGovernment" name="employedIn[]" value="government">
                                    <label for="employedInGovernment">Government</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedInPrivate" name="employedIn[]" value="private">
                                    <label for="employedInPrivate">Private</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="employedInSelfEmployed" name="employedIn[]"
                                        value="self-employed">
                                    <label for="employedInSelfEmployed">Self-employed</label>
                                </div>
                            </td>
                        </tr>
                        <!-- Annual Income section -->
                        <tr>
                            <td>Annual Income<span class="required">*</span></td>
                            <td>
                                <select class="form-control <?php if ($annualIncomeError)
                                    echo 'is-invalid'; ?>" id="annualIncome" name="annualIncome" required>
                                    <option value="doesnt_matter">Doesn't Matter</option>
                                    <option value="2LPA">2 LPA</option>
                                    <option value="3LPA">3 LPA</option>
                                    <option value="4LPA">4 LPA</option>
                                    <option value="5LPA">5 LPA</option>
                                    <option value="6LPA">6 LPA</option>
                                    <!-- Add more options if needed -->
                                </select>
                                <div class="invalid-feedback">Annual Income is required.</div>
                            </td>
                        </tr>
                    </table>

                    <legend><i class="fas fa-glass-cheers icon"></i> Habits</legend>
                    <table class="table143">
                        <!-- Diet section -->
                        <tr>
                            <td>Diet<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="dietVegetarian" name="diet[]" value="vegetarian">
                                    <label for="dietVegetarian">Vegetarian</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dietEggetarian" name="diet[]" value="eggetarian">
                                    <label for="dietEggetarian">Eggetarian</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dietNonVegetarian" name="diet[]" value="non-vegetarian">
                                    <label for="dietNonVegetarian">Non-Vegetarian</label>
                                </div>
                            </td>
                        </tr>
                        <!-- Smoking habits section -->
                        <tr>
                            <td>Smoking<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabitsSmoker" name="smokingHabits[]" value="smoker">
                                    <label for="smokingHabitsSmoker">Smoker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabitsNonSmoker" name="smokingHabits[]"
                                        value="non-smoker">
                                    <label for="smokingHabitsNonSmoker">Non-Smoker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="smokingHabitsQuitSmoking" name="smokingHabits[]"
                                        value="quit-smoking">
                                    <label for="smokingHabitsQuitSmoking">Quit Smoking</label>
                                </div>
                            </td>
                        </tr>
                        <!-- Drinking habits section -->
                        <tr>
                            <td>Drinking<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="drinkingHabitsSocialDrinker" name="drinkingHabits[]"
                                        value="social-drinker">
                                    <label for="drinkingHabitsSocialDrinker">Social Drinker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="drinkingHabitsNonDrinker" name="drinkingHabits[]"
                                        value="non-drinker">
                                    <label for="drinkingHabitsNonDrinker">Non-Drinker</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="drinkingHabitsHeavyDrinker" name="drinkingHabits[]"
                                        value="heavy-drinker">
                                    <label for="drinkingHabitsHeavyDrinker">Heavy Drinker</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <legend><i class="fas fa-moon icon"></i> Horoscope Details</legend>
                    <br>
                    <p>We suggest Our members to please insert your Horoscope details even if you don't believe in it because
                        our lots of members interested in these details</p>
                    <br>
                    <table class="table143">
                        <tr>
                            <td>Have Dosh?<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type_yes" name="doshType[]" value="yes">
                                    <label for="dosh_type_yes">Yes</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type_no" name="doshType[]" value="no">
                                    <label for="dosh_type_no">No</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="dosh_type_dontknow" name="doshType[]" value="donotknow">
                                    <label for="dosh_type_dontknow">Do not Know</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Raasi<span class="required">*</span></td>
                            <td><input type="text" class="form-control" id="raasi" name="raasi" required></td>
                        </tr>
                        <tr>
                            <td>Star<span class="required">*</span></td>
                            <td>
                                <select id="star" class="form-control" name="star" required>
                                    <option value="" disabled selected>select star</option>
                                    <option value="Ashwini">Ashwini</option>
                                    <option value="Bharani">Bharani</option>
                                    <option value="Krittika">Krittika</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="Mrigshira">Mrigshira</option>
                                    <option value="Ardra">Ardra</option>
                                    <option value="Punarvasu">Punarvasu</option>
                                    <option value="Pushya">Pushya</option>
                                    <option value="Ashlesha">Ashlesha</option>
                                    <option value="Magha">Magha</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth Time<span class="required">*</span></td>
                            <td>
                                <input type="time" class="form-control" id="birthTime" name="birthTime" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth place<span class="required">*</span></td>
                            <td><input type="text" class="form-control" id="birthPlace" name="birthPlace" required></td>
                        </tr>
                    </table>

                    <legend><i class="fas fa-users icon"></i> Family Profile</legend>

                    <table class="table143">
                        <tr>
                            <td>Family status<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus_middleclass" name="familyStatus[]"
                                        value="MiddleClass">
                                    <label for="familyStatus_middleclass">Middle Class</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus_uppermiddleclass" name="familyStatus[]"
                                        value="UpperMiddleClass">
                                    <label for="familyStatus_uppermiddleclass">Upper Middle Class</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyStatus_rich" name="familyStatus[]" value="Rich">
                                    <label for="familyStatus_rich">Rich</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Family type<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyType_joint" name="familyType[]" value="Joint">
                                    <label for="familyType_joint">Joint</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyType_nuclear" name="familyType[]" value="Nuclear">
                                    <label for="familyType_nuclear">Nuclear</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Family value<span class="required">*</span></td>
                            <td>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue_orthodox" name="familyValue[]" value="Orthodox">
                                    <label for="familyValue_orthodox">Orthodox</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue_traditional" name="familyValue[]"
                                        value="Traditional">
                                    <label for="familyValue_traditional">Traditional</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue_moderate" name="familyValue[]" value="Moderate">
                                    <label for="familyValue_moderate">Moderate</label>
                                </div>
                                <div class="form-group2">
                                    <input type="checkbox" id="familyValue_liberal" name="familyValue[]" value="Liberal">
                                    <label for="familyValue_liberal">Liberal</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Father Occupation<span class="required">*</span></td>
                            <td><input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Mother Occupation<span class="required">*</span></td>
                            <td><input type="text" class="form-control" id="motherOccupation" name="motherOccupation" required>
                            </td>
                        </tr>
                        <tr>
                            <td>No. of Brother<span class="required">*</span></td>
                            <td><input type="number" class="form-control" id="numBrothers" name="numBrothers" required></td>
                        </tr>
                        <tr>
                            <td>No. of Married Brother<span class="required">*</span></td>
                            <td><input type="number" class="form-control" id="numMarriedBrothers" name="numMarriedBrothers"
                                    required></td>
                        </tr>
                        <tr>
                            <td>No. of Sister<span class="required">*</span></td>
                            <td><input type="number" class="form-control" id="numSisters" name="numSisters" required></td>
                        </tr>
                        <tr>
                            <td>No. of Married Sister<span class="required">*</span></td>
                            <td><input type="number" class="form-control" id="numMarriedSisters" name="numMarriedSisters"
                                    required></td>
                        </tr>
                    </table>





                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const maritalStatusCheckboxes = document.querySelectorAll('input[name="maritalStatus[]"]');
                            const maritalStatusError = document.getElementById('maritalStatusError');

                            maritalStatusCheckboxes.forEach(function (checkbox) {
                                checkbox.addEventListener('change', function () {
                                    let checked = false;
                                    maritalStatusCheckboxes.forEach(function (checkbox) {
                                        if (checkbox.checked) {
                                            checked = true;
                                        }
                                    });
                                    if (!checked) {
                                        maritalStatusError.style.display = 'block';
                                    } else {
                                        maritalStatusError.style.display = 'none';
                                    }
                                });
                            });
                        });
                    </script>




                    <br>
                    <p> write some of about you.for Example Which of person you are,about
                        you,<strong>presonality,Hobbies,About
                            you family </strong>ect.</p>
                    <table>
                        <tr>
                            <td>Something About you<span class="required">*</span></td>
                            <td>
                                <textarea class="form-control <?php if ($additionalInfoError)
                                    echo 'is-invalid'; ?>" id="additionalInfo" name="additionalInfo" rows="5"
                                    required></textarea>
                                <div class="invalid-feedback">Something about you is required.</div>
                            </td>
                        </tr>
                    </table>

                    <div>
                        <button type="button" class="btn btn-primary btn-next">Next</button>
                    </div>
                </div>
                <div class="form-step">
                    <div class="form-group">
                        <label for="photos">Choose Images<span class="required">*</span></label>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="file" class="form-control-file" id="photo1" name="photos[]" required>
                                <div class="invalid-feedback">
                                    Please upload the first image.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="file" class="form-control-file" id="photo2" name="photos[]" required>
                                <div class="invalid-feedback">
                                    Please upload the second image.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="file" class="form-control-file" id="photo3" name="photos[]" required>
                                <div class="invalid-feedback">
                                    Please upload the third image.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="file" class="form-control-file" id="photo4" name="photos[]" required>
                                <div class="invalid-feedback">
                                    Please upload the third image.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Previous</a>
                        <a href="#" class="btn btn-next">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Partner Preference</h2>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="age_from">Age From</label>
                            <select class="form-control" id="age_from" name="age_from" required>
                                <option value="" disabled selected>Select Your Age from</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid age range.
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="age_to">Age To</label>
                            <select class="form-control" id="age_to" name="age_to" required>
                                <option value="" disabled selected>Select Your Age To</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid age range.
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="height_from">Height</label>
                            <select class="form-control" id="height_from" name="height_from" required>
                                <option value="" disabled selected>Select Height</option>
                                <option value="4ft">4ft</option>
                                <option value="5ft">5ft</option>
                                <option value="6ft">6ft</option>
                                <option value="7ft">7ft</option>
                                <option value="8ft">8ft</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid height range.
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="height_to">To</label>
                            <select class="form-control" id="height_to" name="height_to" required>
                                <option value="" disabled selected>Select Height</option>
                                <option value="4ft">4ft</option>
                                <option value="5ft">5ft</option>
                                <option value="6ft">6ft</option>
                                <option value="7ft">7ft</option>
                                <option value="8ft">8ft</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid height range.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="looking_for">Looking For</label>
                            <select class="form-control" id="looking_for" name="looking_for" required>
                                <option value="" disabled selected>Select Your Looking For</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select what you are looking for.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_physical_status">Physical Status</label>
                            <select class="form-control" id="par_physical_status" name="par_physical_status" required>
                                <option value="" disabled selected>Select Physical Status</option>
                                <option value="slim">Slim</option>
                                <option value="fit">Fit</option>
                                <option value="chubby">Chubby</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a physical status.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_eating_habits">Eating Habits</label>
                            <select class="form-control" id="par_eating_habits" name="par_eating_habits" required>
                                <option value="" disabled selected>Select Eating Habits</option>
                                <option value="veg">Vegetarian</option>
                                <option value="non-veg">Non-Vegetarian</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select eating habits.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_smoking_habits">Smoking Habits</label>
                            <select class="form-control" id="par_smoking_habits" name="par_smoking_habits" required>
                                <option value="" disabled selected>Select Smoking Habits</option>
                                <option value="daily">Daily</option>
                                <option value="occasional">Occasional</option>
                                <option value="teetotaler">Teetotaler</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select smoking habits.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_drinking_habits">Drinking Habits</label>
                            <select class="form-control" id="par_drinking_habits" name="par_drinking_habits" required>
                                <option value="" disabled selected>Select Drinking Habits</option>
                                <option value="daily">Daily</option>
                                <option value="occasional">Occasional</option>
                                <option value="teetotaler">Teetotaler</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select drinking habits.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_religion">Religion</label>
                            <select class="form-control" id="par_religion" name="par_religion" required>
                                <option value="" disabled selected>Select Religion</option>
                                <option value="hindu">Hindu</option>
                                <option value="muslim">Muslim</option>
                                <option value="christian">Christian</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select religion.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_caste">Caste</label>
                            <select class="form-control" id="par_caste" name="par_caste" required>
                                <option value="" disabled selected>Select Caste</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select caste.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_mother_tongue">Mother Tongue</label>
                            <input type="text" class="form-control" id="par_mother_tongue" name="par_mother_tongue"
                                placeholder="Enter Mother Tongue" required>
                            <div class="invalid-feedback">
                                Please enter mother tongue.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_doshTypes">Dosh Type</label>
                            <input type="text" class="form-control" id="par_doshTypes" name="par_doshTypes"
                                placeholder="Enter Dosh Type" required>
                            <div class="invalid-feedback">
                                Please enter dosh type.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_stars">Star</label>
                            <select class="form-control" id="par_stars" name="par_stars" required>
                                <option value="" disabled selected>Select Star</option>

                                <option value="Ashwini">Ashwini</option>
                                <option value="Bharani">Bharani</option>
                                <option value="Krittika">Krittika</option>
                                <option value="Rohini">Rohini</option>
                                <option value="Mrigshira">Mrigshira</option>
                                <option value="Ardra">Ardra</option>
                                <option value="Punarvasu">Punarvasu</option>
                                <option value="Pushya">Pushya</option>
                                <option value="Ashlesha">Ashlesha</option>
                                <option value="Magha">Magha</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select star.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_country_living_in">Country Living In</label>
                            <select class="form-control" id="par_country_living_in" name="par_country_living_in" required>
                                <option value="" disabled selected>Select Country Living In</option>
                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="australia">Australia</option>
                                <option value="japan">Japan</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select country living in.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_state_living_in">State Living In</label>
                            <select class="form-control" id="par_state_living_in" name="par_state_living_in" required>
                                <option value="" disabled selected>Select State Living In</option>
                                <option value="AP">Andhra Pradesh (AP)</option>
                                <option value="TS">Telangana (TS)</option>
                                <option value="KA">Karnataka (KA)</option>
                                <option value="UP">Uttar Pradesh (UP)</option>
                                <option value="MP">Madhya Pradesh (MP)</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select state living in.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_city_living_in">City Living In</label>
                            <select class="form-control" id="par_city_living_in" name="par_city_living_in" required>
                                <option value="" disabled selected>Select City Living In</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select city living in.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_education">Education</label>
                            <input type="text" class="form-control" id="par_education" name="par_education"
                                placeholder="Enter Education" required>
                            <div class="invalid-feedback">
                                Please enter education.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="par_occupation">Occupation</label>
                            <input type="text" class="form-control" id="par_occupation" name="par_occupation"
                                placeholder="Enter Occupation" required>
                            <div class="invalid-feedback">
                                Please enter occupation.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="par_annualIncomes">Annual Income</label>
                            <select class="form-control" id="par_annualIncomes" name="par_annualIncomes" required>
                                <option value="" disabled selected>Select Annual Income</option>
                                <option value="doesnt_matter">Doesn't Matter</option>
                                <option value="2LPA">2 LPA</option>
                                <option value="3LPA">3 LPA</option>
                                <option value="4LPA">4 LPA</option>
                                <option value="5LPA">5 LPA</option>
                                <option value="6LPA">6 LPA</option>
                                <!-- Add more options as needed -->
                            </select>
                            <div class="invalid-feedback">
                                Please select annual income.
                            </div>
                        </div>
                    </div>
                    <div class="btns-group">

                        <a href="#" class="btn btn-prev"
                            style="margin-top: 8px; height: 52px; display: flex; align-items: center; justify-content: center;">
                            <span style="padding-top: 5px;">Previous</span>
                        </a>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- <div class="btns-group">
                        <a href="#" class="btn btn-prev">Previous</a>
                        <a href="#" class="btn btn-next">Next</a>
                    </div> -->
            </form>
            </div>

            <?php
        }
    } else {
        echo "<tr>";
        echo "<td colspan='6'>No results</td>";
        echo "</tr>";
    }



    ?>
    <script>
        $(document).ready(function () {
            $('#par_religion').change(function () {
                var religion = $(this).val();
                var casteDropdown = $('#par_caste');

                // Clear existing options
                casteDropdown.empty();

                // Populate caste options based on religion
                var casteOptions = [];
                if (religion === "hindu") {
                    casteOptions = ["Brahmin", "Vaishya", "Reddy", "Kapu", "Kshatriya", "Yadhava", "Chowdary"];
                } else if (religion === "muslim") {
                    casteOptions = ["Mohammads", "Shaiks", "Phatans", "Khans", "Dhudekula"];
                } else if (religion === "christian") {
                    casteOptions = ["Catholicism", "Protestantism", "Orthodox Christianity", "Assyrins", "Luthern"];
                }

                // Add caste options to dropdown
                casteOptions.forEach(function (option) {
                    casteDropdown.append($('<option>', {
                        value: option.toLowerCase(), // Using lowercase value for consistency
                        text: option
                    }));
                });
            });
        });

    </script>
    <script>

        $(document).ready(function () {
            $('#par_state_living_in').change(function () {
                var state = $(this).val();
                var cityDropdown = $('#par_city_living_in');

                // Clear existing options
                cityDropdown.empty();

                // Populate city options based on selected state
                var cityOptions = [];
                if (state === "AP") {
                    cityOptions = ["Guntur", "Hyderabad", "Visakhapatnam (Vizag)"];
                } else if (state === "TS") {
                    cityOptions = ["Hyderabad", "Warangal", "Nizamabad"];
                } else if (state === "KA") {
                    cityOptions = ["Bangalore", "Mysore", "Hubli"];
                } else if (state === "UP") {
                    cityOptions = ["Lucknow", "Kanpur", "Varanasi"];
                } else if (state === "MP") {
                    cityOptions = ["Indore", "Bhopal", "Jabalpur"];
                }

                // Add city options to dropdown
                cityOptions.forEach(function (option) {
                    cityDropdown.append($('<option>', {
                        value: option.toLowerCase(), // Using lowercase value for consistency
                        text: option
                    }));
                });
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#state_living_in').change(function () {
                var state = $(this).val();
                var cityDropdown = $('#city_living_in');

                // Clear existing options
                cityDropdown.empty();

                // Populate city options based on selected state
                var cityOptions = [];
                if (state === "AP") {
                    cityOptions = ["Visakhapatnam", "Vijayawada", "Guntur"];
                } else if (state === "TS") {
                    cityOptions = ["Hyderabad", "Warangal", "Nizamabad"];
                } else if (state === "KA") {
                    cityOptions = ["Bangalore", "Mysore", "Hubli"];
                } else if (state === "UP") {
                    cityOptions = ["Lucknow", "Kanpur", "Varanasi"];
                } else if (state === "MP") {
                    cityOptions = ["Indore", "Bhopal", "Jabalpur"];
                }

                // Add city options to dropdown
                cityOptions.forEach(function (option) {
                    cityDropdown.append($('<option>', {
                        value: option,
                        text: option
                    }));
                });
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#religion').change(function () {
                var religion = $(this).val();
                var casteDropdown = $('#caste');
                var subcasteDropdown = $('#subcaste');

                // Clear existing options
                casteDropdown.empty();
                subcasteDropdown.empty();

                // Populate caste options based on religion
                var casteOptions = [];
                if (religion === "hindu") {
                    casteOptions = ["Brahmin", "Vaishya", "Reddy", "Kapu", "Kshatriya", "Yadhava", "Chowdary"];
                } else if (religion === "muslim") {
                    casteOptions = ["Mohammads", "Shaiks", "Phatans", "Khans", "Dhudekula"];
                } else if (religion === "christian") {
                    casteOptions = ["Catholicism", "Protestantism", "Orthodox Christianity", "Assyrins", "Luthern",];
                } else if (religion === "Sikhism") {
                    casteOptions = ["Ahluwalias", "Kambos", "Ramgarhias", "Rai Sikh",];
                }

                // Add caste options to dropdown
                casteOptions.forEach(function (option) {
                    casteDropdown.append($('<option>', {
                        value: option,
                        text: option
                    }));
                });

                // Populate subcaste options based on caste
                var subcasteOptions = [];
                if (religion === "hindu") {
                    subcasteOptions = ["OC", "BC", "SC"];
                } else if (religion === "muslim") {
                    subcasteOptions = ["OC", "BC"];
                } else if (religion === "christian") {
                    subcasteOptions = ["OC", "BC"];
                } else if (religion === "Sikhism") {
                    subcasteOptions = ["OC", "BC"];
                }


                // Add subcaste options to dropdown
                subcasteOptions.forEach(function (option) {
                    subcasteDropdown.append($('<option>', {
                        value: option,
                        text: option
                    }));
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add click event listener to Next buttons
            $('.btn-next').click(function () {
                var currentStep = $(this).closest('.form-step');
                var isValid = true;

                // Validate all fields in the current step
                currentStep.find('input, select, textarea').each(function () {
                    if (!this.checkValidity()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        $(this).removeClass('is-valid');
                    } else {
                        $(this).addClass('is-valid');
                        $(this).removeClass('is-invalid');
                    }
                });

                // Proceed to the next step if all fields are valid
                if (isValid) {
                    currentStep.removeClass('form-step-active');
                    currentStep.next().addClass('form-step-active');
                }
            });

            // Add click event listener to Previous buttons
            $('.btn-prev').click(function () {
                var currentStep = $(this).closest('.form-step');
                currentStep.removeClass('form-step-active');
                currentStep.prev().addClass('form-step-active');
            });
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('form');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                if (validateForm()) {
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }

        function validateForm() {
            const currentStep = formSteps[formStepsNum];
            const inputs = currentStep.querySelectorAll("input, textarea, select");
            let isValid = true;

            inputs.forEach((input) => {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add("is-invalid");
                } else {
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                }
            });

            return isValid;
        }
    </script>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false || !passwordsMatch()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });

                // Function to check if passwords match
                function passwordsMatch() {
                    var password = document.getElementById('password');
                    var confirmPassword = document.getElementById('confirmPassword');
                    var match = password.value === confirmPassword.value;

                    if (!match) {
                        confirmPassword.setCustomValidity('Passwords do not match');
                    } else {
                        confirmPassword.setCustomValidity('');
                    }

                    return match;
                }

                // Check passwords on input
                var passwordField = document.getElementById('password');
                var confirmPasswordField = document.getElementById('confirmPassword');

                passwordField.addEventListener('input', passwordsMatch);
                confirmPasswordField.addEventListener('input', passwordsMatch);
            }, false);
        })();
    </script>
</body>

</html>