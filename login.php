<?php  //login php
session_start();
include_once ('connection.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_REQUEST['Login'])) {
    $email = $_REQUEST['email'];
    $select_query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $res = mysqli_num_rows($select_query);
    
    if($res > 0) {
        $data = mysqli_fetch_array($select_query);
        // $name = $data['name'];
        // $_SESSION['name'] = $name;
        $otp = rand(100000, 999999); // Generate OTP

        $message = '<div>
            <p><b>Login OTP</b></p>
            <p>You are receiving this email for OTP to Login with us .</p>
            <br>
            <p>Your OTP is: <b>'.$otp.'</b></p>
            <br>
            <p>If you did not request OTP, Please ignore.</p>
            <br>
            <p>Please Do not Share Your OTP.</p>
        </div>';

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'asban.sijo@gmail.com'; // Replace with your Gmail email
            $mail->Password = 'xbjm fcqf mmrh felc'; // Replace with your Gmail password
            $mail->setFrom('asban.sijo@gmail.com', 'Asban Sijo'); // Replace with your name
            $mail->addAddress($email);
            $mail->Subject = "OTP";
            $mail->isHTML(true);
            $mail->Body = $message;
            
            if($mail->send()) {
                $insert_query = mysqli_query($conn, "UPDATE users SET otp='$otp' WHERE email='$email'");
                $_SESSION['emails'] = $email;
                header('location: otp.php');
            } else {
                $msg = "Email not delivered";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $msg = "Invalid user";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Cookie&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</head>
<body>
    <div class="bg-img"></div>
    <section class="login-page">
        <div class="container">
            <div class="login-form">
                <div class="log-left">
                    <div class="log-head">
                        <h2>LOGIN</h2>
                        <p>Get way in to your Orders, Cart, Wishlist..</p>
                    </div>
                    <div class="log-banner">
                        <img src="./images/log_banner.png" alt="">
                    </div>
                </div>
                <div class="log-right">
                <form id="login-form" method="POST" action="">
                    <input type="text" id="email" placeholder="Enter Email/Mobile Number" name="email"><br>
                    <div class="error-mail"></div>
                    <button id="login-btn" type="submit" name="Login">Request OTP</button>
                </form>
                <div class="log-bottom"><a href="signin.php">New User? Create account</a></div>
                </div>
            </div>
        </div>
    </section>
    </div>
    
<script>
        $(document).ready(function () {
        $("#login-form").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                }
            },
            messages: {
                email: {
                    required: "Please enter an email address.",
                    email: "Please enter a valid email address."
                }
            }
        });
    });
</script>
    
</body>
</html>