<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Number Verification</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
}

.verification-container {
    width: 400px;
    height: 560px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.verification-box {
    width: 300px;
    height: 300px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 3px 3px 4px rgba(0, 0, 0, .5);
}

.header {
    text-align: center;
}

.mobile-icon {
    /* Add styles for your mobile icon */
}

#verification-pin {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
}

#verify-btn,
#resend-otp {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: green;
    color: white;
    cursor: pointer;
    margin-top: 5px;
}

#resend-otp {
    background-color: orange;
}

#edit-mobile,
#skip-verification {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: blue;
    text-decoration: none;
}
</style>

<body>
    <script>
    // script.js
    document.getElementById('verify-btn').addEventListener('click', function() {
        var pin = document.getElementById('verification-pin').value;
        if (pin === '') {
            alert('Please enter the PIN.');
        } else {
            // Add verification logic here
            alert('PIN entered: ' + pin);
        }
    });

    document.getElementById('resend-otp').addEventListener('click', function() {
        // Add logic to resend OTP
        alert('OTP has been resent.');
    });
    </script>
    <div class="verification-container">
        <div class="header">
        <i class="fas fa-mobile-alt" style="font-size:50px;color:orange"></i>
 <!-- You can replace this with an actual icon -->
            <h2 style="color:orange;">Mobile Number Verification</h2>
        </div>

        <p>Verify your mobile number now to activate your profile.</p>
        <p>It is mandatory to verify your mobile number otherwise your profile will not be displayed to other members.
        </p>

        <div class="verification-box">
            <p>Verify mobile number through SMS</p>
            <p>An SMS with verification PIN has been sent to <span style="color:orange;">+91-1234567890</span></p>
            <a href="#" id="edit-mobile" style="color:orange;">Edit Mobile No</a>
            <input type="text" id="verification-pin" placeholder="Enter PIN">
            <button id="verify-btn">Verify</button>
            <button id="resend-otp">Send OTP Again</button>
        </div>
        <a href="#" id="skip-verification">Skip mobile verification</a>
    </div>
    <script src="script.js"></script>
</body>

</html>