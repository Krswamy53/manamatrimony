<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
    <h2>Update Profile</h2>
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

    include "db.php";

    // Step 2: Retrieve user details based on ID
    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];
        
        // Fetch user details from the database
        $sql = "SELECT * FROM user_profiles WHERE id = $user_id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "User not found.";
            exit;
        }
    } else {
        echo "User ID not provided.";
        exit;
    }

    // Step 3: Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $profileCreatedBy = $_POST["profileCreatedBy"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $maritalStatus = $_POST["maritalStatus"];
        $mother = $_POST["mother"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $religion = $_POST["religion"];
        $caste = $_POST["caste"];
        $subcaste = $_POST["subcaste"];
        $willingToMarryOtherCaste = isset($_POST["willingToMarryOtherCaste"]) ? $_POST["willingToMarryOtherCaste"] : "off";
        $highestEducation = isset($_POST["highestEducation"]) ? $_POST["highestEducation"] : "";
        $additionalDegree = isset($_POST["additionalDegree"]) ? $_POST["additionalDegree"] : "";
        $employedIn = isset($_POST["employedIn"]) ? $_POST["employedIn"] : "";
        $occupation = isset($_POST["occupation"]) ? $_POST["occupation"] : "";
        $annualIncome = isset($_POST["annualIncome"]) ? $_POST["annualIncome"] : "";
        $familyType = isset($_POST["familyType"]) ? $_POST["familyType"] : "";
        $familyValue = isset($_POST["familyValue"]) ? $_POST["familyValue"] : "";
        $familyStatus = isset($_POST["familyStatus"]) ? $_POST["familyStatus"] : "";
        $fatherOccupation = isset($_POST["fatherOccupation"]) ? $_POST["fatherOccupation"] : "";
        $motherOccupation = isset($_POST["motherOccupation"]) ? $_POST["motherOccupation"] : "";
        $numBrothers = isset($_POST["numBrothers"]) ? $_POST["numBrothers"] : "";
        $numMarriedBrothers = isset($_POST["numMarriedBrothers"]) ? $_POST["numMarriedBrothers"] : "";
        $numSisters = isset($_POST["numSisters"]) ? $_POST["numSisters"] : "";
        $numMarriedSisters = isset($_POST["numMarriedSisters"]) ? $_POST["numMarriedSisters"] : "";
        $inputCountry = isset($_POST["inputCountry"]) ? $_POST["inputCountry"] : "";
        $inputState = isset($_POST["inputState"]) ? $_POST["inputState"] : "";
        $inputCity = isset($_POST["inputCity"]) ? $_POST["inputCity"] : "";
        $diet = isset($_POST["diet"]) ? $_POST["diet"] : "";
        $smokingHabits = isset($_POST["smokingHabits"]) ? $_POST["smokingHabits"] : "";
        $drinkingHabits = isset($_POST["drinkingHabits"]) ? $_POST["drinkingHabits"] : "";
        $bodyType = isset($_POST["bodyType"]) ? $_POST["bodyType"] : "";
        $complexion = isset($_POST["complexion"]) ? $_POST["complexion"] : "";
        $physicalStatus = isset($_POST["physicalStatus"]) ? $_POST["physicalStatus"] : "";
        $doshType = isset($_POST["doshType"]) ? $_POST["doshType"] : "";
        $star = isset($_POST["star"]) ? $_POST["star"] : "";
        $raasi = isset($_POST["raasi"]) ? $_POST["raasi"] : "";
        $birthTime = isset($_POST["birthTime"]) ? $_POST["birthTime"] : "";
        $birthPlace = isset($_POST["birthPlace"]) ? $_POST["birthPlace"] : "";
        $additionalInfo = isset($_POST["additionalInfo"]) ? $_POST["additionalInfo"] : "";
        
        // Update query
        $sql = "UPDATE user_profiles SET 
                firstName='$firstName', 
                lastName='$lastName', 
                dob='$dob', 
                gender='$gender', 
                profileCreatedBy='$profileCreatedBy', 
                email='$email', 
                mobile='$mobile', 
                maritalStatus='$maritalStatus', 
                mother='$mother', 
                password='$password', 
                confirmPassword='$confirmPassword', 
                religion='$religion', 
                caste='$caste', 
                subcaste='$subcaste', 
                willingToMarryOtherCaste='$willingToMarryOtherCaste', 
                highestEducation='$highestEducation', 
                additionalDegree='$additionalDegree', 
                employedIn='$employedIn', 
                occupation='$occupation', 
                annualIncome='$annualIncome', 
                familyType='$familyType', 
                familyValue='$familyValue', 
                familyStatus='$familyStatus', 
                fatherOccupation='$fatherOccupation', 
                motherOccupation='$motherOccupation', 
                numBrothers='$numBrothers', 
                numMarriedBrothers='$numMarriedBrothers', 
                numSisters='$numSisters', 
                numMarriedSisters='$numMarriedSisters', 
                inputCountry='$inputCountry', 
                inputState='$inputState', 
                inputCity='$inputCity', 
                diet='$diet', 
                smokingHabits='$smokingHabits', 
                drinkingHabits='$drinkingHabits', 
                bodyType='$bodyType', 
                complexion='$complexion', 
                physicalStatus='$physicalStatus', 
                doshType='$doshType', 
                star='$star', 
                raasi='$raasi', 
                birthTime='$birthTime', 
                birthPlace='$birthPlace', 
                additionalInfo='$additionalInfo' 
                WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
      
    <form action="" method="post">
    <div class="form-row">
    <div class="form-group col-md-4">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-group col-md-4">
        <!-- Personal Information -->
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>">
    </div>
    <div class="form-group col-md-4"> 
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male" <?php if($row['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($row['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if($row['gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <!-- Additional Fields -->
        <label for="profileCreatedBy">Profile Created By:</label>
        <input type="text" id="profileCreatedBy" name="profileCreatedBy" value="<?php echo $row['profileCreatedBy']; ?>"><br><br>
    </div>
    </div>
        <!-- Add more fields here -->
        
        <!-- Contact Information -->
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        </div>
        <div class="form-group col-md-6">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>
        </div>
        </div>
        <!-- Additional Information -->
        <div class="form-group col-md-4">
        <label for="maritalStatus">Marital Status:</label>
        <select id="maritalStatus" name="maritalStatus">
            <option value="Single" <?php if($row['maritalStatus'] == 'Single') echo 'selected'; ?>>Single</option>
            <option value="Married" <?php if($row['maritalStatus'] == 'Married') echo 'selected'; ?>>Married</option>
            <!-- Add more options if needed -->
        </select><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="mother">Mother's Name:</label>
        <input type="text" id="mother" name="mother" value="<?php echo $row['mother']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" value="<?php echo $row['religion']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="caste">Caste:</label>
        <input type="text" id="caste" name="caste" value="<?php echo $row['caste']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="subcaste">Subcaste:</label>
        <input type="text" id="subcaste" name="subcaste" value="<?php echo $row['subcaste']; ?>"><br><br>
        </div>
        <!-- Include other fields similarly -->

        <!-- Employment and Education Information -->
        <div class="form-group col-md-4">
        <label for="highestEducation">Highest Education:</label>
        <input type="text" id="highestEducation" name="highestEducation" value="<?php echo $row['highestEducation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="additionalDegree">Additional Degree:</label>
        <input type="text" id="additionalDegree" name="additionalDegree" value="<?php echo $row['additionalDegree']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="employedIn">Employed In:</label>
        <input type="text" id="employedIn" name="employedIn" value="<?php echo $row['employedIn']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation" name="occupation" value="<?php echo $row['occupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="annualIncome">Annual Income:</label>
        <input type="text" id="annualIncome" name="annualIncome" value="<?php echo $row['annualIncome']; ?>"><br><br>
        </div>
        <!-- Family Information -->
        <div class="form-group col-md-4">
        <label for="familyType">Family Type:</label>
        <input type="text" id="familyType" name="familyType" value="<?php echo $row['familyType']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="familyValue">Family Value:</label>
        <input type="text" id="familyValue" name="familyValue" value="<?php echo $row['familyValue']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="familyStatus">Family Status:</label>
        <input type="text" id="familyStatus" name="familyStatus" value="<?php echo $row['familyStatus']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="fatherOccupation">Father's Occupation:</label>
        <input type="text" id="fatherOccupation" name="fatherOccupation" value="<?php echo $row['fatherOccupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="motherOccupation">Mother's Occupation:</label>
        <input type="text" id="motherOccupation" name="motherOccupation" value="<?php echo $row['motherOccupation']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numBrothers">Number of Brothers:</label>
        <input type="text" id="numBrothers" name="numBrothers" value="<?php echo $row['numBrothers']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numMarriedBrothers">Number of Married Brothers:</label>
        <input type="text" id="numMarriedBrothers" name="numMarriedBrothers" value="<?php echo $row['numMarriedBrothers']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numSisters">Number of Sisters:</label>
        <input type="text" id="numSisters" name="numSisters" value="<?php echo $row['numSisters']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="numMarriedSisters">Number of Married Sisters:</label>
        <input type="text" id="numMarriedSisters" name="numMarriedSisters" value="<?php echo $row['numMarriedSisters']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <!-- Location Information -->
        <label for="inputCountry">Country:</label>
        <input type="text" id="inputCountry" name="inputCountry" value="<?php echo $row['inputCountry']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State:</label>
        <input type="text" id="inputState" name="inputState" value="<?php echo $row['inputState']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="inputCity">City:</label>
        <input type="text" id="inputCity" name="inputCity" value="<?php echo $row['inputCity']; ?>"><br><br>
        </div>
        <!-- Lifestyle Information -->
        <div class="form-group col-md-4">
        <label for="diet">Diet:</label>
        <input type="text" id="diet" name="diet" value="<?php echo $row['diet']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="smokingHabits">Smoking Habits:</label>
        <input type="text" id="smokingHabits" name="smokingHabits" value="<?php echo $row['smokingHabits']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="drinkingHabits">Drinking Habits:</label>
        <input type="text" id="drinkingHabits" name="drinkingHabits" value="<?php echo $row['drinkingHabits']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="bodyType">Body Type:</label>
        <input type="text" id="bodyType" name="bodyType" value="<?php echo $row['bodyType']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="complexion">Complexion:</label>
        <input type="text" id="complexion" name="complexion" value="<?php echo $row['complexion']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="physicalStatus">Physical Status:</label>
        <input type="text" id="physicalStatus" name="physicalStatus" value="<?php echo $row['physicalStatus']; ?>"><br><br>
        </div>
        <!-- Astrological Information -->
        <div class="form-group col-md-4">
        <label for="doshType">Dosh Type:</label>
        <input type="text" id="doshType" name="doshType" value="<?php echo $row['doshType']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="star">Star:</label>
        <input type="text" id="star" name="star" value="<?php echo $row['star']; ?>"><br><br>
    </div>
        <div class="form-group col-md-4">
        <label for="raasi">Raasi:</label>
        <input type="text" id="raasi" name="raasi" value="<?php echo $row['raasi']; ?>"><br><br>
        </div>
        <div class="form-group col-md-4">
        <label for="birthTime">Birth Time:</label>
        <input type="text" id="birthTime" name="birthTime" value="<?php echo $row['birthTime']; ?>"><br><br>
        <div class="form-group col-md-4">
        <label for="birthPlace">Birth Place:</label>
        <input type="text" id="birthPlace" name="birthPlace" value="<?php echo $row['birthPlace']; ?>"><br><br>
        </div>
        <!-- Additional Information -->
        <div class="form-group col-md-4">
        <label for="additionalInfo">Additional Info:</label>
        <textarea id="additionalInfo" name="additionalInfo"><?php echo $row['additionalInfo']; ?></textarea><br><br>
        </div></div></div>
        <input type="submit" value="Update">
    
    </form>
</body>
</html>

