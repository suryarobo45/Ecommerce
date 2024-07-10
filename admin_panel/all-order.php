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
                    <h1 class="fs-3">Orders <span class="badge bg-primary rounded-5">2</span></h1>
                    <div class="row p-3 mt-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <div class="col-lg-8">
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control p-2 " placeholder="Search Orders">
                                <div class="input-group-text"><i class="fa-solid fa-search p-2"></i></div>
                            </div>
                        </div>
                       
                        <div class="col-lg-12">
                            <table class="table mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ORDER</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">CUSTOMER</th>
                                        <th scope="col">BRANCH</th>
                                        <th scope="col">PAYMENT STATUS</th>   
                                        <th scope="col">TOTAL</th>
                                        <th scope="col">ORDER STATUS</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1007</td>
                                        <td>21-05-2024</td>
                                        <td>surya</td>
                                        <td>chennai</td>
                                        <td><span class="badge rounded-5 bg danger"></span></td>
                                        <td><i class="bi bi-currency-rupee"></i>1500</td>
                                        <td><span class="badge rounded-5 bg-primary"></span>Pending</td>
                                        <td>
                                            <div class="dropdown dropdown-toggle btn-secondary text-center" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-gear"></i>
                                            </div>
                                            <ul class="dropdown-menu">
                                                <li><a  class="dropdown-item" href="">Edit</a></li>
                                                <li><a class="dropdown-item" href="">Delete</a></li>
                                            </ul>
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