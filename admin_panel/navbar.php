<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
    <style>
        body {
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-theme {
            background-color: #333;
            color: #fff;
        }

        .theme-toggle {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        #dark-light {
            width: 50px;
            height: 25px;
            background-color: #ccc;
            border-radius: 25px;
            position: relative;
            display: flex;
            align-items: center;
            padding: 2px;
            box-sizing: border-box;
        }

        .indicator {
            width: 21px;
            height: 21px;
            background-color: black;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .dark-theme #dark-light .indicator {
            transform: translateX(24px);
        }
    </style>
</head>

<body>
    <header>
        <section class="nav-bar">
            <div class="container">
                <nav class="navs">
                    <div class="col-lg-4"><a class="admin" href="#">ADMIN</a></div>
                    <i class="fa-solid fa-bars text-white d-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
                    <div class="theme-toggle">
                        <div id="dark-light" title="Switch to dark mode">
                            <div class="indicator"></div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
 
    </div>
  </div>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.getElementById("dark-light");
            const body = document.body;

            // Function to update the tooltip based on the current theme
            function updateTooltip() {
                if (body.classList.contains('dark-theme')) {
                    toggle.setAttribute('title', 'Switch to light mode');
                } else {
                    toggle.setAttribute('title', 'Switch to dark mode');
                }
            }

            // Check local storage for theme preference
            if (localStorage.getItem('theme') === 'dark') {
                body.classList.add('dark-theme');
            }

            // Initialize the tooltip
            updateTooltip();

            toggle.addEventListener("click", function() {
                body.classList.toggle("dark-theme");
                // Save the theme preference in local storage
                if (body.classList.contains('dark-theme')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.removeItem('theme');
                }
                // Update the tooltip
                updateTooltip();
            });
        });
    </script>
</body>

</html>
