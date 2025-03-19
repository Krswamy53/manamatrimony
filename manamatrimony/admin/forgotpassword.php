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
                    <form class="mb-4" method="post" action="forgotpasswordopt.php">
                        <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="text" class="form-control form-control-lg" placeholder="Email" name="email">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mb-4">
                            <div class="form-group has-icon-left">
                                <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-check mb-4">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember">Remember Me</label>
                        </div> -->
                        <button type="submit" class="btn btn-lg btn-primary w-100">Send otp</button>
                    </form>
                    <!-- End Form -->
                    <!-- <p>Don't have an account? <a href="register.html">Sign up</a> here</p> -->
                    <a href="password.html">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
