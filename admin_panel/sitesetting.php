<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
    <!-- Add Font Awesome for the icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <?php require_once("navbar.php") ?>
        <?php require_once("sidebar.php") ?>
        <div id="header"></div>
    </header>
    <style>
        .logo-outer-box {
            padding: 130px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            position: relative;
            overflow: hidden;
        }

        .another {
            background-image: url('../Black\ Simple\ Corporate\ Job\ Vacancy\ LinkedIn\ Single\ Image\ Ad.png') !important;
            background-size: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            left: 0;
            background-size: cover;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .logo-outer-box:hover {
            transition: all 0.3s ease-in-out;
            box-shadow: rgba(15, 15, 15, 0.4) -5px 5px, rgba(3, 3, 3, 0.3) -10px 10px, rgba(0, 0, 0, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
        }

        .logo-outer-box:hover .another {
            transform: scale(1.1);
        }

        .logo-inner-box {
            position: absolute;
            top: 45%;
            left: 55%;
            transform: translate(-50%, -35%);
            border-radius: 50%;
            border: 2px solid green;
            background-size: cover;
            background-position: center;
            width: 300px;
            height: 300px;
            overflow: hidden;
            font-family: 'Times New Roman', Times, serif;
            cursor: pointer;
        }

        .logo-inner-box i {
            left: 30px;
            margin-top: 100px !important;
        }

        .logo-inner-box .text-center {
            position: absolute;
            z-index: 1;
        }

        .logo-inner-box .text-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            text-align: center;
        }

        .rgba-color {
            background-color: rgba(101, 185, 101, 0.3);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transition: bottom 0.4s ease;
        }

        .logo-inner-box:hover .rgba-color {
            bottom: -100%;
        }
    </style>
    <header>
        <div id="header"></div>
    </header>
    <main>
        <div id="side-bar"></div>
        <section class="dash-panel mt-5">
            <div class="dash-container ">
                <div class="dashboard row">
                    <div class="col-lg-6">
                        <h1 class="dash-head fs-1">Settings</h1>
                    </div>
                    <div class="col-lg-6">
                        <a href="dashboard.html">
                            <div class="btn bg-secondary float-end text-white p-3 rounded-5"><i class="fa-solid fa-house me-3"></i>Dashboard
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 logo-outer-box">
                        <div class="another position-absolute top-0"></div>
                    </div>
                    <div class="logo-inner-box" onclick="document.getElementById('fileInput').click();">
                        <i class="fa-solid fa-cloud-arrow-up d-flex justify-content-center mt-5 fs-1 text-white"></i>
                        <div class="text-center fs-3 pt-4 text-black" style="margin-top: 25%;">Click To Upload<br>Logo</div>
                        <div class="rgba-color"></div>
                        <input type="file" id="fileInput" style="display: none;" onchange="previewImage(event);">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        function previewImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.querySelector('.logo-inner-box');
                output.style.backgroundImage = 'url(' + reader.result + ')';
                // Hide the upload icon and text
                output.querySelector('i').style.display = 'none';
                output.querySelector('.text-center').style.display = 'none';
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>