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
                            <h5 class="fs-1">Earning Reports <i class="fa-solid fa-chart-line ps-lg-3"></i></h5>
                            <div class="fs-5">Admin : <span class="text-danger">Username</span></div>

                        </div>
                        <div class="col-lg-6">
                            <a href="dashboard.php"> <i class="fa-solid fa-home p-3  rounded-5 float-end mt-lg-2 my-icon text-white" title="go home"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-lg-5 pb-lg-4">
                        <div class="col-lg-12">
                            <div class="fs-5">Overview</div>
                        </div>
                    </div>
                    <div class="row  p-5 border">
                    <div class="col-lg-4"></div>
                        <div class="col-lg-4 mb-2">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Start Date</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">End Date</label>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="shadow">
                                <div class="row">
                                    <div class="col-lg-6 p-5 col-5">
                                        <h4 class="">Total Sold</h4>
                                        <i class="fa-solid fa-arrow-trend-up text-success"></i><span class="text-success ps-2">₹ 0.00</span>
                                    </div>
                                    <div class="col-lg-6 text-end col-7 mt-lg-5 mt-5 pe-5">
                                        <i class="fa-solid fa-strikethrough  p-3  rounded-5 bg-success text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="shadow">
                                <div class="row">
                                    <div class="col-lg-6 p-5 col-5">
                                        <h4 class="">Total tax</h4>
                                        <i class="fa-solid fa-arrow-trend-up text-danger"></i><span class="text-danger ps-2">₹ 0.00</span>
                                    </div>
                                    <div class="col-lg-6 text-end col-7 mt-lg-5 mt-5 pe-5">
                                        <i class="fa-solid fa-money-bill-1  p-3  rounded-5 text-white my-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border mt-5 p-5">
                        <div class="col-lg-12">
                            <div>TOTAL SALE OF 2024 : <span class="text-success"> ₹0.00</span></div>
                            <canvas id="myChart" style="width:100%;"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script>
        const xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15,17];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "#ffa31a",
                    borderColor: "white",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: true
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 6,
                            max: 16
                        }
                    }],
                }
            }
        });
    </script>
</body>

</html>