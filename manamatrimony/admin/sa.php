<?php
// Assuming you have a database connection established
// Replace the database connection details with your own
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root";
$password = "";
$dbname = "shadhi";

try {
    $pdo = new PDO("mysql:servername=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the ID from the POST data
    $id = $_POST['id'];

    // Now you can use this ID to fetch the corresponding record from your database
    // For example:
    $sql = "SELECT * FROM user-profiles WHERE id = :id"; // Adjust 'your_table' to your actual table name
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Now you have the row containing the values to populate the form for editing
    // You can use these values to pre-fill the form fields

    // Example usage:
    $age_from = $row['age_from'];
    $age_to = $row['age_to'];
    $height_from = $row['height_from'];
    $height_to = $row['height_to'];
    $looking_for = $row['looking_for'];
    $par_physical_status = $row['par_physical_status'];
    $par_eating_habits = $row['par_eating_habits'];
    $par_smoking_habits = $row['par_smoking_habits'];
    $par_drinking_habits = $row['par_drinking_habits'];
    $par_religion = $row['par_religion'];
    $par_caste = $row['par_caste'];
    $par_mother_tongue = $row['par_mother_tongue'];
    $par_doshTypes = $row['par_doshTypes'];
    $par_stars = $row['par_stars'];
    $par_country_living_in = $row['par_country_living_in'];
    $par_state_living_in = $row['par_state_living_in'];
    $par_city_living_in = $row['par_city_living_in'];
    $par_education = $row['par_education'];
    $par_occupation = $row['par_occupation'];
    $par_annualIncomes = $row['par_annualIncomes'];

    // Redirect the user after fetching the details
    // header("Location: edit_form.php"); // Redirect to the page with the form for editing
    // exit();
}

// If the form is not submitted or if there's an error, you can display the form for editing with pre-filled values if available
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
</head>
<body>
    <form id="partnerPreferenceForm" action="d.php" method="post" onsubmit="return validateForms()">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <!-- Age From -->
        <label for="age_from">Age From</label>
        <input type="text" id="age_from" name="age_from" value="<?php echo $age_from; ?>">
        
        <!-- Age To -->
        <label for="age_to">Age To</label>
        <input type="text" id="age_to" name="age_to" value="<?php echo $age_to; ?>">

        <!-- Height -->
        <label for="height_from">Height From</label>
        <input type="text" id="height_from" name="height_from" value="<?php echo $height_from; ?>">
        <label for="height_to">Height To</label>
        <input type="text" id="height_to" name="height_to" value="<?php echo $height_to; ?>">

        <!-- Looking For -->
        <label for="looking_for">Looking For</label>
        <input type="text" id="looking_for" name="looking_for" value="<?php echo $looking_for; ?>">

        <!-- Physical Status -->
        <label for="par_physical_status">Physical Status</label>
        <input type="text" id="par_physical_status" name="par_physical_status" value="<?php echo $par_physical_status; ?>">

        <!-- Eating Habits -->
        <label for="par_eating_habits">Eating Habits</label>
        <input type="text" id="par_eating_habits" name="par_eating_habits" value="<?php echo $par_eating_habits; ?>">

        <!-- Smoking Habits -->
        <label for="par_smoking_habits">Smoking Habits</label>
        <input type="text" id="par_smoking_habits" name="par_smoking_habits" value="<?php echo $par_smoking_habits; ?>">

        <!-- Drinking Habits -->
        <label for="par_drinking_habits">Drinking Habits</label>
        <input type="text" id="par_drinking_habits" name="par_drinking_habits" value="<?php echo $par_drinking_habits; ?>">

        <!-- Religion -->
        <label for="par_religion">Religion</label>
        <input type="text" id="par_religion" name="par_religion" value="<?php echo $par_religion; ?>">

        <!-- Caste -->
        <label for="par_caste">Caste</label>
        <input type="text" id="par_caste" name="par_caste" value="<?php echo $par_caste; ?>">

        <!-- Mother Tongue -->
        <label for="par_mother_tongue">Mother Tongue</label>
        <input type="text" id="par_mother_tongue" name="par_mother_tongue" value="<?php echo $par_mother_tongue; ?>">

        <!-- Dosh Type -->
        <label for="par_doshTypes">Dosh Type</label>
        <input type="text" id="par_doshTypes" name="par_doshTypes" value="<?php echo $par_doshTypes; ?>">

        <!-- Star -->
        <label for="par_stars">Star</label>
        <input type="text" id="par_stars" name="par_stars" value="<?php echo $par_stars; ?>">

        <!-- Country Living In -->
        <label for="par_country_living_in">Country Living In</label>
        <input type="text" id="par_country_living_in" name="par_country_living_in" value="<?php echo $par_country_living_in; ?>">

        <!-- State Living In -->
        <label for="par_state_living_in">State Living In</label>
        <input type="text" id="par_state_living_in" name="par_state_living_in" value="<?php echo $par_state_living_in; ?>">

        <!-- City Living In -->
        <label for="par_city_living_in">City Living In</label>
        <input type="text" id="par_city_living_in" name="par_city_living_in" value="<?php echo $par_city_living_in; ?>">

        <!-- Education -->
        <label for="par_education">Education</label>
        <input type="text" id="par_education" name="par_education" value="<?php echo $par_education; ?>">

        <!-- Occupation -->
        <label for="par_occupation">Occupation</label>
        <input type="text" id="par_occupation" name="par_occupation" value="<?php echo $par_occupation; ?>">

        <!-- Annual Income -->
        <label for="par_annualIncomes">Annual Income</label>
        <input type="text" id="par_annualIncomes" name="par_annualIncomes" value="<?php echo $par_annualIncomes; ?>">

        <input type="submit" value="Update">
    </form>
</body>
</html>
