<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include("link.php"); ?>
</head>

<body>
    <style>
        .product-update-col {
            padding: 40px;
            border-radius: 10px;
        }

        .custom-design-box,.confirmed-box {
            position: relative;
            transition: 0.3s ease-in-out;
        }

        .custom-design-box,.confirmed-box:hover {
            transform: translateY(-20px);
        }

        .confirmed-box {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                }

        .confirmed-box i {
            margin-left: 150px !important;
            margin-bottom: 20px;
            background-color: #151435;
        }

        @media(max-width: 641px) {
            .product-update-col {
                display: none !important;
            }
        }


        #slider {
            width: 100%;
            height: 100vh !important;
        }


        .Content {
            position: relative;
        }

        .Content-main {
            background: #555;
        }

        .Content-main p {
            padding: 300px 0;
            text-align: center;
            color: #fff;
        }




        a {
            color: #fff;
        }

        a:hover,
        a:active {
            text-decoration: none;
        }

        .slider-head {
            position: absolute;
            z-index: 20;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 2vw;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #fff;
        }
    </style>
    <header>
        <?php require_once("navbar.php") ?>
        <?php require_once("sidebar.php") ?>
        <div id="header"></div>
    </header>
    <main>
        <div id="side-bar"></div>
        <section class="dash-panel">
            <div class="dash-container">
                <div class="dashboard">
                    <!-- <h1 class="welcome-head">Welcome Admin</h1>
                    <span>Here is Your Business Statistics.</span>
                    <h1 class="dash-head mt-5">DASHBOARD</h1> -->
                    <!-- ---- Dashboard Overview ---- -->
                    <div class="insight ">
                        <div class="out">
                            <div class="flex-container ">
                                <div class="sales">
                                    <span class="material-symbols-outlined sale">analytics</span>
                                    <div class="inner-flex-container">
                                        <div class="sales-data">
                                            <h3>Total Orders</h3>
                                            <h1>$10,000</h1>
                                        </div>
                                        <div class="wrapper">
                                            <div class="container chart" data-size="300" data-value="73" data-arrow="down"></div>
                                        </div>

                                    </div>
                                    <p class="end-desc">Last 24 hours</p>
                                </div>
                            </div>
                        </div>
                        <div class="out">
                            <div class="flex-container">
                                <div class="expenses">
                                    <span class="material-symbols-outlined sale">bar_chart</span>
                                    <div class="inner-flex-container">
                                        <div class="sales-data">
                                            <h3>Total Income</h3>
                                            <h1>$10,000</h1>
                                        </div>

                                    </div>
                                    <p class="end-desc">Last 24 hours</p>
                                </div>
                            </div>
                        </div>
                        <div class="out">
                            <div class="flex-container">
                                <div class="income">
                                    <span class="material-symbols-outlined sale">trending_up</span>
                                    <div class="inner-flex-container">
                                        <div class="sales-data">
                                            <h3>Recent Users</h3>
                                            <h1>$10,000</h1>
                                        </div>

                                    </div>
                                    <p class="end-desc">Last 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-5 product-update-col d-block" >
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="all-box p-2 confirmed-box">All <br><br>7 <span class="pe-lg-0 "><i class="fa-solid fa-wand-magic-sparkles p-3 rounded-5 text-white"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="confirmed-box p-2 ">Delivered <br><br>7 <span><i class="fa-solid fa-truck p-3 text-white  rounded-5"></i></span></div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="confirmed-box p-2 ">Returned<br><br>7 <span><i class="fa-solid fa-clock-rotate-left p-3 rounded-5 text-white"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="confirmed-box p-2 ">Failed<br><br>7 <span><i class="fa-solid fa-ban p-3 text-white rounded-5"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- recent order -->
                    <div class="dtl-table recent-order">
                        <h2>RECENT ORDERS</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Number</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Iphone 14pro max</td>
                                    <td>456123</td>
                                    <td>paid</td>
                                    <td style="color: #56c700;">Confirmed</td>
                                    <td style="color: #ffa31a;">details</td>
                                </tr>
                                <tr>
                                    <td>Nikon D7500</td>
                                    <td>956123</td>
                                    <td>due</td>
                                    <td style="color: #ff2121;">Pending</td>
                                    <td style="color: #ffa31a;">details</td>
                                </tr>
                                <tr>
                                    <td>Gaming chair</td>
                                    <td>416123</td>
                                    <td>paid</td>
                                    <td style="color: #56c700;">Confirmed</td>
                                    <td style="color: #ffa31a;">details</td>
                                </tr>
                                <tr>
                                    <td>Noise AirBuds</td>
                                    <td>456123</td>
                                    <td>paid</td>
                                    <td style="color: #56c700;">Confirmed</td>
                                    <td style="color: #ffa31a;">details</td>
                                </tr>
                                <tr>
                                    <td>Recliner</td>
                                    <td>456123</td>
                                    <td>due</td>
                                    <td style="color: #ff2121;">Pending</td>
                                    <td style="color: #ffa31a;">details</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-5 ">
                        <div class="col-lg-5 p-5 rounded-5 col-12" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                            <div class="fs-3 mb-5 pt-2  p-2  rounded-2" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">Total Business Overview<i class="fa-solid fa-chart-pie float-end"></i></div>
                            <canvas id="myDashboardChart" style="width:100%;max-width:600px;max-height: 900px;margin-top: 20% !important;"></canvas>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6 rounded-5 p-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            <div class="fs-3 mb-5 pt-2  p-2  rounded-2" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">Top selling products<i class="fa-solid fa-gifts float-end"></i></div>
                            <div class="row p-3">
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);">
                                        Sold:200</div>
                                    <img class="img-fluid" src="../pexels-n-voitkevich-6214476.jpg" alt="">
                                    <div class="text-center pt-2">Custom design</div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);">
                                        Sold:200</div>
                                    <img class="img-fluid" src="../pexels-n-voitkevich-6214476.jpg" alt="">
                                    <div class="text-center pt-2">Custom design</div>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);">
                                        Sold:200</div>
                                    <img class="img-fluid" src="../pexels-n-voitkevich-6214476.jpg" alt="">
                                    <div class="text-center pt-2">Custom design</div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);">
                                        Sold:200</div>
                                    <img class="img-fluid" src="../pexels-n-voitkevich-6214476.jpg" alt="">
                                    <div class="text-center pt-2">Custom design</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 rounded-5 p-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            <div class="fs-3 mb-5 pt-2  p-2  rounded-2" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">Top Customers<i class="fa-solid fa-user-tie float-end"></i></div>
                            <div class="row p-3">
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);">
                                        Order:200</div>
                                    <img class="img-fluid" src="../20943704.jpg" alt="">
                                    <div class="text-center pt-2">bahu</div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);">
                                        Order:200</div>
                                    <img class="img-fluid" src="../20943704.jpg" alt="">
                                    <div class="text-center pt-2">mohan</div>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);">
                                        Order:200</div>
                                    <img class="img-fluid" src="../20943704.jpg" alt="">
                                    <div class="text-center pt-2">Surya</div>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-5  col-12 p-4 rounded-3 mb-4 custom-design-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="sold-box text-center bg-success p-2 rounded-5 text-white mb-3" style="clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);">
                                        Order:200</div>
                                    <img class="img-fluid" src="../20943704.jpg" alt="">
                                    <div class="text-center pt-2">sandhya</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6 col-12 p-5 rounded-5" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
                            <div class="fs-3 mb-5 pt-2  p-2  rounded-2" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">Recent Reviws<i class="fa-solid fa-hand-holding-heart float-end"></i>
                                <div class="Content">
                                    <div id="slider">
                                        <h1 class="slider-head">Customer reviws</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <script>
        // JavaScript for the first chart
        const XValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        const YValues = [55, 49, 44, 24, 15];
        const barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("myDashboardChart", {
            type: "pie",
            data: {
                labels: XValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: YValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                }
            }
        });
    </script>

    <script>
        var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
        if (windowwidth > 268) {
            var responsiveImage = [{
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample04.jpg'
                },
                {
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample05.jpg'
                },
                {
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample06.jpg'
                }
            ];
        } else {
            var responsiveImage = [{
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample04.jpg'
                },
                {
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample05.jpg'
                },
                {
                    src: 'https://www.s-graphi.co.jp/img/SAMPLE/code/code_sample06.jpg'
                }
            ];
        }

        $('#slider').vegas({
            overlay: true,
            transition: 'fade2',
            transitionDuration: 2000,
            delay: 5000,
            animationDuration: 20000,
            animation: 'random',
            slides: responsiveImage,
        });
    </script>
</body>

</html>