<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .progress-tracker ul {
            list-style-type: none;
            display: flex;
            gap: 10px;
        }

        .progress-tracker li {
            cursor: pointer;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .progress-tracker li.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .progress-tracker li.completed {
            background-color: #28a745;
            color: white;
            border-color: #28a745;
        }

        .progress-tracker li.completed::after {
            content: "✔";
            margin-left: 10px;
        }

        .error-message {
            color: red;
            display: none;
        }

        .table143 {
            width: 100%;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
<?php include  'header.php' ?>
<br><br>
    <div class="progress-tracker">
        <ul>
            <li id="step1-btn" class="active" onclick="moveToStep(1)">Step 1</li>
            <li id="step2-btn" onclick="moveToStep(2)">Step 2</li>
            <li id="step3-btn" onclick="moveToStep(3)">Step 3</li>
        </ul>
    </div>

    <div class="container">
        <section class="section account-information active" id="step1">
            <h2>Account Information</h2>
            <form id="form1">
                <table class="table143">
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
                            <td><input type="password" class="oneform" id="password" name="password" placeholder="Enter your password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Password<span class="required">*</span></td>
                            <td><input type="password" class="oneform" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password"></td>
                        </tr>
                        <tr>
                            <td>Mobile No<span class="required">*</span></td>
                            <td><input type="tel" class="oneform" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" placeholder="Enter your mobile number" read only></td>
                        </tr>
                </table>
                <span class="error-message" id="error-step1">Please fill out all required fields.</span>
                <br>
                <button type="button" onclick="validateStep(1)">Continue</button>
            </form>
        </section>
        <section class="section personal-details" id="step2">
            <h2>Personal Details</h2>
            <form id="form2">
                <table>
                    <tr>
                        <td><label for="firstname">First Name:</label></td>
                        <td><input type="text" id="firstname" name="firstname" required></td>
                    </tr>
                    <tr>
                        <td><label for="lastname">Last Name:</label></td>
                        <td><input type="text" id="lastname" name="lastname" required></td>
                    </tr>
                </table>
                <span class="error-message" id="error-step2">Please fill out all required fields.</span>
                <br>
                <button type="button" onclick="validateStep(2)">Continue</button>
            </form>
        </section>
        <section class="section confirmation" id="step3">
            <h2>Confirmation</h2>
            <p>Confirm your information.</p>
            <button type="button" onclick="submitForm()">Submit</button>
        </section>
    </div>

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

        function validateStep(stepNumber) {
            const form = document.getElementById(`form${stepNumber}`);
            if (form.checkValidity()) {
                document.getElementById(`error-step${stepNumber}`).style.display = 'none';
                moveToStep(stepNumber + 1);
            } else {
                document.getElementById(`error-step${stepNumber}`).style.display = 'block';
            }
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
    <br>
    <?php include  'footer.php'?>
</body>

</html>