<?php
include('db.php');

if (isset($_GET['expiry']) && is_numeric($_GET['expiry'])) {
    $expiryTimestamp = $_GET['expiry'];
    if (time() > $expiryTimestamp) {
        echo '<script>alert("The reset link has expired. Please request a new one."); window.location.href="login.php.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("Invalid request."); window.location.href="login.php.php";</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $otp = $_POST['otp'];

    // Validate passwords
    if ($password !== $confirm_password) {
        echo '<script>alert("Passwords do not match."); window.location.href="login.php.php";</script>';
        exit();
    }

    if (strlen($password) < 8) {
        echo '<script>alert("Password must be at least 8 characters long."); window.location.href="login.php.php";</script>';
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Update password if OTP matches
    $stmt = $conn->prepare("UPDATE admin SET password = ? WHERE email = ? AND otp = ?");
    if ($stmt) {
        $stmt->bind_param('sss', $hashedPassword, $email, $otp);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo '<script>alert("Password changed successfully."); window.location.href="login.php.php";</script>';
        } else {
            echo '<script>alert("OTP does not match or password could not be changed. Please try again."); window.location.href="login.php.php";</script>';
        }

        $stmt->close();
    } else {
        echo '<script>alert("Database error. Please try again."); window.location.href="login.php.php";</script>';
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="assets/bootstrap-icon/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="form-area">
            <div class="form-row">
                <div class="form-panel">
                    <div class="logo mb-5">
                        <img src="assets/images/l.png" alt="logo">
                        <p class="text-center mt-20"><span class="d-block fw-bold mb-10 fs-6">Hello! let's get started</span> Sign in to continue.</p>
                    </div>
                    <!-- Form -->
                    <form class="mb-4" method="post" onsubmit="return validateForm()">
                        <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="text" class="form-control form-control-lg" placeholder="Email" name="email">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="text" class="form-control form-control-lg" placeholder="otp" name="otp">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="password" class="form-control form-control-lg" placeholder="confirmpassword" name="confirmpassword">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-check mb-4">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember">Remember Me</label>
                        </div> -->
                        <button type="submit" class="btn btn-lg btn-primary w-100">Update password</button>
                    </form>
                    <!-- End Form -->
                    <!-- <p>Don't have an account? <a href="register.html">Sign up</a> here</p>
                    <a href="password.html">Forgot Password?</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
