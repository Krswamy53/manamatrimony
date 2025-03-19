<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Footer Icons font awesome link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <style>
        .site-footer {
            background: #f5f5f5;
            padding: 20px 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }
        


        .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: calc(100% - 10px); /* Adjusted width to accommodate margin-left: 5% */
    margin: 0;
    margin-left: 5%;
    padding: 0;
    flex-wrap: wrap;
}

        .footer-column,
        .footer-social {
            flex: 1;
            margin: 0 10px;
            min-width: 150px;
            box-sizing: border-box;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
        }

        .footer-column h3,
        .footer-social h4 {
            color: green;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 8px;
        }

        .footer-column ul li a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #222;
        }

        .footer-social {
            display: flex;
            flex-direction: column;
            margin-left: -20px;
            /* Move left */
            margin-top: -0px;
            /* Move up */
            justify-content: flex-start;
            /* Align social icons container to the top */
        }

        .social-icons {
            display: flex;
            gap: 19.7px;
            margin-top: 1px;
        }

        .social-icons a {
            font-size: 20px;
            color: #EB2869;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #222;
        }

        .footer-credits {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        @media (max-width: 1024px) {
            .footer-container {
                flex-wrap: wrap;
                /* Allow wrapping for responsiveness */
            }

            .footer-column,
            .footer-social {
                flex: 1 1 45%;
                /* Adjust the flex properties for responsiveness */
                margin: 10px 0;
                /* Add margin for spacing between items */
            }
        }


        @media (max-width: 767px) {
            .footer-container {
                flex-direction: column;
                margin-left: 10px;
            }

            .footer-column {
                width: 100%;
                margin-bottom: 20px;
            }

            .p {
                margin-left: 34px;

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
                    <li><a href="loginform.php">Login</a></li>
                    <li><a href="index.php">Register</a></li>
                    <li><a href="#">Upgrade Membership</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Information</h3>
                <ul>
                    <li><a href="successstory.php">Success Stories</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Join us on social</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/login/" target="_blank" rel="noopener noreferrer"
                        aria-label="Facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://in.pinterest.com/login/" target="_blank" rel="noopener noreferrer"
                        aria-label="Pinterest">
                        <i class="fa-brands fa-pinterest"></i>
                    </a>
                    <a href="https://twitter.com/i/flow/login" target="_blank" rel="noopener noreferrer"
                        aria-label="Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/login" target="_blank" rel="noopener noreferrer"
                        aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="footer-credits">
            © Designed and Developed by
            <strong><a href="https://www.bsitsoftware.com/" target="_blank" rel="noopener noreferrer"
                    style="color:#ec167f; text-decoration: none;">
                    BSIT Software Services Private Limited
                </a></strong>
        </div> -->
    </footer>
</body>

</html>