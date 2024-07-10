<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile</title>
    <?php include("link.php"); ?>
</head>

<body>
    <header>
        <?php require_once("navbar.php") ?>
        <?php require_once("sidebar.php") ?>
        <div id="header"></div>
    </header>
    <main>
        <!-- side-bar -->
        <div id="side-bar"></div>
        <section class="dash-panel">
            <div class="dash-container">
                <div class="dashboard">
                    <h1 class="d-flex justify-content-center"><i class="fa-solid fa-table-list pe-4"></i>Banner List</h1>
                    <div class="row p-2" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                        <div class="col-lg-6">
                            <h2>Banner Table</h2>
                        </div>
                        <div class="col-lg-6 text-end">
                            <a href="add_new_banner.php">
                                <div class="btn bg-success text-white rounded-5 p-3"><i class="fa-solid fa-circle-plus pe-2"></i> Add New Banner</div>
                            </a>
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table">
                                <thead class="table-light ">
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th scope="row">1</th>
                                        <td>Sample Title</td>
                                        <td><img class="ps-2" src="../Green Watercolour Opening Soon Banner (1).png" alt="Sample Image" class="img-fluid" width="50"></td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-sm rounded-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="btn  btn-sm rounded-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>