<?php // signin php
include ("./connection.php");
include("./admin_panel/link.php");
session_start();
if (isset($_POST['sign-in'])) {
    $userName = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    // Validate that all fields are filled
    if (empty($userName) || empty($mobile) || empty($email)) {
        $_SESSION['status'] = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email format.";
    } else {
        
        $conn = mysqli_connect($host, $user, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Check if the email already exists
        if (mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['status'] = "Email Already Exist";
            // echo "User Already Exist";
        } else {
            // Insert user data into the database
            $stmt = mysqli_prepare($conn, "INSERT INTO users (user_name, mobile, email) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $userName, $mobile, $email);

            if (mysqli_stmt_execute($stmt)) {
                // $_SESSION['status'] = "Registration successful.";
                header('location:login.php');
            } else {
                $_SESSION['status'] = "Registration failed: " . mysqli_error($conn);
            }
        }

        // Close the database connection
        mysqli_close($conn);
    }
}


?> 
<link rel="stylesheet" href="./admin_panel/Adminstyles.css">
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
                        <h2>New User?</h2>
                        <p>Sign in with your mail id</p>
                    </div>
                    <div class="log-banner">
                        <img src="./images/log_banner.png" alt="">
                    </div>
                </div>
                <div class="log-right">
                <form id="signin-form" method="POST" action="">
                    <input type="text" id="" placeholder="User Name" name="username"><br>
                    <input type="text" id="phone" placeholder="mobile number" name="mobile">
                    <input type="email" id="email" placeholder="Enter email address" name="email"><br>
                    <div class="error-mail"></div>
                    <button class="signin-btn" type="submit" name="sign-in">Sign-In</button>
                </form>
                <div class="log-bottom"><a href="login.php">Existing User? Login</a></div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <script>
        
    $(document).ready(function () {
        $("#signin-form").validate({
            rules: {
                username: {
                    required: true
                },
                mobile: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                username: {
                    required: "Please enter a username."
                },
                mobile: {
                    required: "Please enter a mobile number."
                },
                email: {
                    required: "Please enter an email address.",
                    email: "Please enter a valid email address."
                }
            },
            
            submitHandler: function () {
                $.ajax({
                    type: "POST",
                    url: "signin.php",
                    data: $('#signin-form').serialize(),
                    success: function (response) {
                        $('.error-mail').text("User Already Exist");
                    }
                    
                });
            }
        });
    });
</script>


   
</body>
</html>