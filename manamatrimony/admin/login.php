<?php
session_start();
include 'db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepared statement to prevent SQL injection
    $sql = "SELECT id, name, password FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            // Authentication successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
            exit;
        } else {
            echo '<script>alert("Incorrect email or password.");</script>';
        }
    } else {
        echo '<script>alert("Incorrect email or password.");</script>';
    }

    $stmt->close();
}

$conn->close();
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
                    <form class="mb-4" action="login.php" method="POST">
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
                                <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-4">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100">Sign In</button>
                    </form>
                    <!-- End Form -->
                    <!-- <p>Don't have an account? <a href="register.html">Sign up</a> here</p> -->
                    <a href="forgotpassword.php">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
