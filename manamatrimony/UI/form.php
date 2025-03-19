<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
       <style>
        .container {
            max-width: 420px;
            margin: 0 auto;
            height: 536px;
            border: solid 2px;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, .5);
            padding: 5px 16px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: -10px;
            height: 50px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            / Adjusts space between the two form groups /
        }

        .form-group {
            flex: 1;
            / Each form group takes up equal width /
            margin-right: 10px;
            / Adjust spacing between form groups /
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            / Adjusts space between the two form groups /
        }

        .form-group {
            flex: 1;
            / Each form group takes up equal width /
            margin-right: 10px;
            / Adjust spacing between form groups /
        }

        label {
            display: flex;
            height: 20px;
            color: orange;
            text-align: center;

        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: -20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: 30px;
        }

        .dob-fields {
            display: flex;

            .form-group2 {
                display: inline-block;
                vertical-align: middle;
            }

            .form-group2 input[type="checkbox"] {
                margin-right: 5px;
                / Adjust the spacing between the checkbox and label /
            }

        }

        .form-group2 {
            display: flex;
            align-items: center;
        }

        .form-group2 input[type="checkbox"] {
            margin-right: 5px;
        }

        .form-group2 label {
            margin: 0;
            / Remove default margin to ensure proper alignment /
        }

        .dob-fields input {
            flex: 1;
            margin-right: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        .ch {
            color: black;
        }

        .bt {
            margin-top: -10px;
            margin-left: 34%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    </style>
</head>

<body>

    <div class="container">
        <h2 style="text-align:center;color:orange;">REGISTER NOW</h2>
        <form action="#" method="POST" class="from" onsubmit="return validateForm()">
            <!-- Your form fields here -->
            <div class="form-row">
                <div class="form-group">
                    <label for="profile-created-by"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp; Profile Created By</label>
                    <input type="text" id="profile-created-by" name="profile-created-by" placeholder="Profile Created By">
                </div>
                <div class="form-group">
                    <label for="gender"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Select Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="first-name"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Enter First Name</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="last-name"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Enter Last Name</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="dob"><i class="fas fa-calendar"></i>&nbsp;&nbsp;&nbsp; Date of Birth</label>
                <div class="dob-fields">
                    <select id="dob-day" name="dob-day">
                        <option value="">Day</option>
                        <!-- Options for days -->
                        <!-- You can generate options dynamically using JavaScript or hardcode them -->
                        <?php
                        for ($day = 1; $day <= 31; $day++) {
                            echo "<option value=\"$day\">$day</option>";
                        }
                        ?>
                    </select>
                    <select id="dob-month" name="dob-month">
                        <option value="">Month</option>
                        <!-- Options for months -->
                        <!-- You can generate options dynamically using JavaScript or hardcode them -->
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <!-- Add options for other months -->
                    </select>
                    <select id="dob-year" name="dob-year">
                        <option value="">Year</option>
                        <!-- Options for years -->
                        <!-- You can generate options dynamically using JavaScript or hardcode them -->
                        <?php
                        $currentYear = date("Y");
                        for ($year = $currentYear; $year >= 1900; $year--) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="religion"><i class="fas fa-book"></i>&nbsp;&nbsp;&nbsp; Select Your Religion</label>
                <select id="religion" name="religion">
                    <option value="">Select Religion</option>
                    <option value="hindu">Hindu</option>
                    <option value="christian">Christian</option>
                    <option value="muslim">Muslim</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="mother-tongue"><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp; Mother Tongue</label>
                <select id="mother-tongue" name="mother-tongue">
                    <option value="">Select Mother Tongue</option>
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <option value="chinese">Chinese</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="country"><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp; Country</label>
                <input type="text" id="country" name="country" placeholder="Country">
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-mobile-alt" style="color:orange"></i>&nbsp;&nbsp;&nbsp; Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp; Enter Your Email Id</label>
                <input type="text" id="email" name="email" placeholder="Enter Your Email Id">
            </div>
            <div class="form-group2">
                <input type="checkbox" id="terms" name="terms">&nbsp;
                <label class="ch" for="terms"> I accept &nbsp; <strong>terms & conditions</strong>&nbsp; and
                    &nbsp;<strong>privacy policy.</strong></label>
            </div>
            <div class="bt">
                <button type="submit">Register Now</button>
            </div>
        </form>
        <script>
            function validateForm() {
                var profileCreatedBy = document.getElementById('profile-created-by').value;
                var gender = document.getElementById('gender').value;
                var firstName = document.getElementById('first-name').value;
                var lastName = document.getElementById('last-name').value;
                var dobDay = document.getElementById('dob-day').value;
                var dobMonth = document.getElementById('dob-month').value;
                var dobYear = document.getElementById('dob-year').value;
                var religion = document.getElementById('religion').value;
                var motherTongue = document.getElementById('mother-tongue').value;
                var country = document.getElementById('country').value;
                var phone = document.getElementById('phone').value;
                var email = document.getElementById('email').value;
                var terms = document.getElementById('terms').checked;

                // Your validation code here
                // Return true or false based on your validation logic

                return true; // Return true to allow form submission
            }
        </script>
    </div>

</body>

</html>
