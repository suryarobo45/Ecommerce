<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
</head>

<body>
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
                    <h1 class="text-center">Review List</h1>
                    <div class="row p-3" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;border-radius: 10px;">
                        <div class="col-lg-9"></div>
                        <div class="col-lg-3">
                            <div class="input-group">
                                <input type="text" class="form-control p-3 rounded-2" placeholder="search Reviews">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-search p-2" title="search reviews"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <div class="table-responsive" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                                <table class="table">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Customer</th>
                                            <th>Review</th>
                                            <th>Ratings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Product A</td>
                                            <td>John Doe</td>
                                            <td>Great product!</td>
                                            <td>
                                                <span class="material-symbols-outlined">star</span>
                                                <span class="material-symbols-outlined">star</span>
                                                <span class="material-symbols-outlined">star</span>
                                                <span class="material-symbols-outlined">star</span>
                                                <span class="material-symbols-outlined">star_border</span>
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>