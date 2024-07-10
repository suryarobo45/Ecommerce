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
                            <h5 class="fs-1">Social Media<i class="fa-solid fa-photo-film ps-lg-3"></i></h5>

                        </div>
                        <div class="col-lg-6">
                            <a href="dashboard.php"> <i class="fa-solid fa-home p-3  rounded-5 float-end mt-lg-2 my-icon text-white" title="go home"></i>
                            </a>
                        </div>
                    </div>

                    <div class="row  p-3 border mt-5">
                        <div class="col-lg-12">
                            <div class="fs-5">Social Media Form
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Instagram</option>
                                    <option value="1">Facebook</option>
                                    <option value="2">Twitter</option>
                                    <option value="3">Linkedin</option>
                                </select>
                                <label for="floatingSelect">Media Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Social Media Link</label>
                            </div>
                        </div>
                        <div class="col-lg-12 text-lg-end text-center mt-3">
                            <div class="btn my-btn text-white">Save</div>
                        </div>
                        <div class="col-lg-8 col-2  mt-3 fs-5">Social Media Table</div>
                        <div class="col-lg-4 col-10 mt-3">
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
                                        <th scope="col">NAME</th>
                                        <th scope="col">LINK</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Instagram</td>
                                        <td>.....</td>
                                        <td>Active</td>
                                        <td>
                                        <div class="dropdown">
                                                <div class="fa-solid fa-gear dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                </div>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
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