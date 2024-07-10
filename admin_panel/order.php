<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
</head>

<body>
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
                    <h1 class="dash-head">RECENT ORDERS</h1>
                    <!-- order -->
                    <div class="dtl-table recent-order">
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
                                    <td style="color: #56c700;">Delivered</td>
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
                    <div class="dtl-table orders">
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
                                    <td style="color: #56c700;">Delivered</td>
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
                </div>
            </div>
        </section>
    </main>
</body>

</html>