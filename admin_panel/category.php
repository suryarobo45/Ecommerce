<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
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
                    <h1 class="dash-head">Categories</h1>
                    <div class="add-category"><button id="mybtn">Add Category<span class="material-symbols-outlined">
                                add
                            </span></button></div>
                    <div class="modal" id="my-modal">
                        <div class="category-modal">
                            <h2>ADD CATEGORY</h2>
                            <span class="close">&times;</span>
                            <div class="left">
                                <div class="upload-img-container">
                                    <label for="img-input">
                                        <span class="material-symbols-outlined add-photo">
                                            add_a_photo
                                        </span>
                                        <p>Upload an Image</p>
                                    </label>
                                    <input type="file" id="img-input" accept="image/jpg, image/png">
                                </div>
                            </div>
                            <div class="right">
                                <input type="text" placeholder="Category Name">
                                <button class="add">ADD</button>
                            </div>

                        </div>
                    </div>
                    <div class="modal" id="edit-modal">
                        <div class="category-edit-modal">
                            <h2>EDIT CATEGORY</h2>
                            <span class="edit-close">&times;</span>
                            <div class="left">
                                <div class="upload-img-container">
                                    <label for="img-input">
                                        <span class="material-symbols-outlined add-photo">
                                            add_a_photo
                                        </span>
                                        <p>Upload an Image</p>
                                    </label>
                                    <input type="file" id="img-input" accept="image/jpg, image/png">
                                </div>
                            </div>
                            <div class="right">
                                <input type="text" placeholder="Category Name">
                            </div>

                            <button class="add">EDIT</button>
                        </div>
                    </div>
                    <div class="dtl-table categories">
                        <div class="category-tab">
                            <div class="category-cards" id="redirect-btn">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Mobiles</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Laptops</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Accessories</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Fashion</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Appliances</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Toys&Baby</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Furniture</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                            <div class="category-cards">
                                <div class="card-inner-container">
                                    <div class="img-container"></div>
                                    <div class="card-head">
                                        <h3>Mobile</h3>
                                    </div>
                                    <div class="card-status">
                                        <p>ACTIVE</p>
                                    </div>
                                    <div class="edit-category"><button id="edit-btn">EDIT</button></div>
                                    <div class="dlt-category"><button>DELETE</button></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- <script>
        $(function () {
            $("#header").load("navbar.php");
            $("#side-bar").load("sidebar.php");
        });
    </script> -->
    <script src="../script.js"></script>
</body>

</html>