<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toEmail = $_POST['email'];

    if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL) || !preg_match('/@gmail\.com$/', $toEmail)) {
        echo '<script>alert("Please enter a valid Gmail address."); window.location.href = "forgotpassword.php";</script>';
        exit();
    }
    $sql = "SELECT * FROM  admin WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $toEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo '<script>alert("Invalid email. Please register to reset the password."); window.location.href = "forgotpassword.php";</script>';
            exit();
        }
    } else {
        die('SQL prepare error: ' . $conn->error);
    }

    $otp = mt_rand(100000, 999999);
    $expiryTimestamp = time() + (5 * 60);

    $sql = "UPDATE  admin SET otp = ? WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("is", $otp, $toEmail);
        if (!$stmt->execute()) {
            echo '<script>alert("Failed to save OTP to the database."); window.location.href = "forgotpassword.php";</script>';
            exit();
        }
    } else {
        die('SQL prepare error: ' . $conn->error);
    }
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ranga1172136@gmail.com';
        $mail->Password = 'njasiwgunycekowv';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('ManaMatrimony@gmail.com', 'Mana Matrimony');
        $mail->addAddress($toEmail);

        $mail->isHTML(true);
        $mail->Subject = "One Time Password (OTP)";
        $mail->Body = "Your OTP is: $otp<br><br><a href='http://localhost/manamatrimony/admin/updatepassword.php?email=" . urlencode($toEmail) . "&timestamp=" . time() . "&expiry=$expiryTimestamp' style='background-color: #4CAF50; color: white; padding: 15px 25px; text-align: center; text-decoration: none; display: inline-block; border-radius: 10px;'>Change Password</a>";

        if ($mail->send()) {
            echo '<script>alert("OTP sent successfully."); window.location.href = "login.php";</script>';
        } else {
            echo '<script>alert("Failed to send OTP. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
        }
    } catch (Exception $e) {
        echo '<script>alert("Failed to send OTP. Mailer Error: ' . $e->getMessage() . '");</script>';
    }
}
