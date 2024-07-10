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
        .my-btn{
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
                            <h5 class="fs-1">Product Reports<i class="fa-solid fa-clipboard-check ps-lg-3"></i></h5>
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
                        <div class="col-lg-3 mb-lg-0 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="1">Chennai</option>
                                    <option value="2">Coimbatore</option>
                                </select>
                                <label for="floatingSelect">Select Branch</label>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="1">product-1</option>
                                    <option value="2">product2</option>
                                </select>
                                <label for="floatingSelect">Select Product</label>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Start Date</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">End Date</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>Total Orders :</li>
                                <li>Total Item Qty :</li>
                                <li>Total Amount : <span>₹</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="btn border"><i class="fa-solid fa-download"></i> Export</div>
                        </div>
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">s.no</th>
                                        <th scope="col">ORDER</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">QTY</th>
                                        <th scope="col">AMOUNT</th>
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