<?php 
include_once('connection.php');
session_start();


if(isset($_REQUEST['Verify_OTP']))
{
  $otp = $_REQUEST['otp'];
  $select_query = mysqli_query($conn,"SELECT * from users WHERE otp='$otp' ");
  $count = mysqli_num_rows($select_query);
  $row = mysqli_fetch_assoc($select_query);
  if($count>0)
  {
    if(){

    }
    $select_query = mysqli_query($conn, "UPDATE users SET otp='$otp' WHERE email='$email'");
    header('location: index.html');
  }
  else
  {
    $msg = "Invalid OTP!";
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
    <link
        href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Cookie&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="bg-img"></div>
    <section class="login-page">
        <!-- <div class="container"> -->
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
                    <p id="otp-descrip">Please enter the OTP sent to 9876546786</p>
                    <form class="otp-form" method="REQUEST" action="">
                        <div class="otp-field">
                            <input class="otp-box" type="text" maxlength="1" />
                            <input class="otp-box" type="text" maxlength="1" />
                            <input class="otp-box" type="text" maxlength="1" />
                            <input class="otp-box" type="text" maxlength="1" />
                            <input class="otp-box" type="text" maxlength="1" />
                            <input class="otp-box" type="text" maxlength="1" />
                        </div>
                        <input type="hidden" id="hidden-otp" name="otp" />
                        <button class="verify-btn" type="submit" name="Verify_OTP">Verify</button>
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </section>
    </div>

    <script src="/script.js"></script>
    <script>
        const inputs = document.querySelectorAll(".otp-field input");
        const hiddenOtpInput = document.getElementById("hidden-otp");

        inputs.forEach((input, index) => {
            input.dataset.index = index;
            input.addEventListener("keyup", handleOtp);
            input.addEventListener("paste", handleOnPasteOtp);
        });

        function handleOtp(e) {

            const input = e.target;
            let value = input.value;
            let isValidInput = value.match(/[0-9]/gi);
            input.value = "";
            input.value = isValidInput ? value[0] : "";

            let fieldIndex = input.dataset.index;
            if (fieldIndex < inputs.length - 1 && isValidInput) {
                input.nextElementSibling.focus();
            }

            if (e.key === "Backspace" && fieldIndex > 0) {
                input.previousElementSibling.focus();
            }

            if (fieldIndex == inputs.length - 1 && isValidInput) {
                updateHiddenOTP();
            }
        }

        function handleOnPasteOtp(e) {
            const data = e.clipboardData.getData("text");
            const value = data.split("");
            if (value.length === inputs.length) {
                inputs.forEach((input, index) => (input.value = value[index]));
                updateHiddenOTP();
            }
        }

        function updateHiddenOTP() {
            let otp = "";
            inputs.forEach((input) => {
                otp += input.value;
            });
            hiddenOtpInput.value = otp;
            console.log("Hidden OTP Updated:", otp);
        }
    </script>

</body>

</html>