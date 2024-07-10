<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
</head>

<body>
    <style>
        .notifi-border-img {
            height: 200px !important;
            border: 1px solid black;
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
                    <h1 class="text-center"><i class="fa-solid fa-bell"></i> Notification</h1>
                    <div class="row p-3" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <form action="">
                            <div class="col-lg-12">
                                <div class="float-start">
                                    <label for="" class="form-label fs-5 ms-1">Tittle</label>
                                </div>
                                <input type="text" class="form-control" placeholder="New Notification">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="float-start fs-5 ms-1 mb-2">Description <i class="fa -solid fa-pen ps-2"></i></div>
                                <textarea name="" class="form-control" rows="4" id=""></textarea>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="float-start fs-5 ms-1 mb-2">Image <span class="text-success">(Ratio 3:1)</span></div>
                                <input type="file" class="form-control p-3" id="imageInput">
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="../Green Watercolour Opening Soon Banner (1).png" class="img-fluid notifi-border-img rounded-3" alt="" id="imagePreview">
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="btn bg-success text-white">Send Notification</div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-5">
                                <label for="" class="d-flex justify-content-lg-start fs-4 mb-4">
                                    Notification Table
                                </label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Notification 1</td>
                                            <td>Description of Notification 1</td>
                                            <td><img src="notification_image_1.jpg" alt="Notification Image"></td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-cog"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Notification 2</td>
                                            <td>Description of Notification 2</td>
                                            <td><img src="notification_image_2.jpg" alt="Notification Image"></td>
                                            <td>Inactive</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-cog"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
document.getElementById('imageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imagePreview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>
</body>

</html>