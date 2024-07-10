<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
</head>

<body>
    <style>
        .my-icon {
            background-color: var(--sec-color);
        }

        .my-btn {
            background-color: var(--sec-color) !important;
        }

        .shadow {
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        }
    </style>
    <header>
        <div id="header"></div>
        <?php require_once("navbar.php") ?>
        <?php require_once("sidebar.php") ?>
    </header>
    <main>
        <!-- side-bar -->
        <div id="side-bar"></div>
        <section class="dash-panel">
            <div class="dash-container">
                <div class="dashboard">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="fs-1">Subscribed Customers<i class="fa-solid fa-envelopes-bulk ps-lg-3"></i></h5>

                        </div>
                        <div class="col-lg-6">
                            <a href="dashboard.php"> <i class="fa-solid fa-home p-3  rounded-5 float-end mt-lg-2 my-icon text-white" title="go home"></i>
                            </a>
                        </div>
                    </div>

                    <div class="row  p-5 border mt-5">
                        <div class="col-lg-8 col-2"></div>
                        <div class="col-lg-4 col-10">
                            <div class="input-group input-group-lg">
                                <input type="search" placeholder="Search" class="form-control p-lg-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.NO</th>
                                        <th scope="col">EMAIL</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            <div class="btn my-btn text-white"><i class="fa-solid fa-angle-left"></i> Prev</div>
                            <div class="btn my-btn ms-3 text-white">Next <i class="fa-solid fa-angle-right"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>