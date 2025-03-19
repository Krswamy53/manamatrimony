<html>

<head>
    <!-- Footer Icons font awesome link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />

    <style>
        .site-footer {
            background: #f5f5f5;
            padding: 20px 0;
            font-family: Arial, sans-serif;
        }

        .social-icons {
            font-size: 20px;
        }

        .footer-container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-column {
            width: 22%;
            margin-bottom: 20px;
        }

        .footer-column h3,
        .footer-column h4 {
            color: green;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li a {
            color: #666;
            text-decoration: none;
        }

        .footer-column ul li a:hover {
            color: #222;
        }

        @media (max-width: 767px) {
            .site-footer {
                flex-direction: column;
            }

            .footer-column {
                flex: 1 1 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Help And Support</h3>
                <ul>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQ</a></li>
                    <li><a href="returns-and-cancellation.php">Refund Policy</a></li>
                </ul>
                <h4>About Us</h4>
                <p>Welcome to Matrimonywebsite</p>
            </div>
            <div class="footer-column">
                <h3>Terms & Policy</h3>
                <ul>
                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="#">Report Misuse</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Need Help?</h3>
                <ul>
                    <li><a href="loginform">Login</a></li>
                    <li><a href="index.php">Register</a></li>
                    <li><a href="#" class="highlight">Upgrade Membership</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Information</h3>
                <ul>
                    <li><a href="success_story.php">Success Story</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
                <h4>Join us on social</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/login/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://in.pinterest.com/login/" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/login" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>