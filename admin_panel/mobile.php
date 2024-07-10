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
                    <h1 class="dash-head">MOBILES</h1>
                    <div><button class="add-product">ADD PRODUCT<span class="material-symbols-outlined">
                                add
                            </span></button></div>
                    <div class="modal" id="add-prod-modal">
                        <div class="product-modal">
                            <h2>ADD Product</h2>
                            <span class="prod-close">&times;</span>
                            <div class="left">
                                <div class="upload-img-container prod-img">
                                    <label for="img-input">
                                        <span class="material-symbols-outlined add-photo">
                                            add_a_photo
                                        </span>
                                        <p>Upload an Image</p>
                                    </label>
                                    <input type="file" id="img-input" accept="image/jpg, image/png">
                                </div>
                               
                               <div class="col-lg-2"></div>
                               <div class="col-lg-8 mb-3"><input class="form-control p-2 pro-inputs" placeholder="Tax" type="text"></div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-8 mb-3"><input class="form-control p-2 pro-inputs" placeholder="Discount" type="text"></div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-2"></div>
                               <div class="col-lg-8 mb-3"><input class="form-control p-2 pro-inputs" placeholder="Stock" type="text"></div>
                               <div class="col-lg-2"></div>
                            </div>
                            <div class="right prod-inputs">
                                <input type="text" class="form-control" placeholder="Product Name">
                                <input type="text" class="form-control" placeholder="Product Price">
                                <input type="text" name="select Category" id="select" placeholder="Select Brand">
                                <section class="category-dropdown-select">
                                    <button class="category-select-option">brand1</button>
                                    <button class="category-select-option">brand2</button>
                                    <button class="category-select-option">brand3</button>
                                    <button class="category-select-option">brand4</button>
                                    <button class="category-select-option">brand5</button>
                                    <button class="category-select-option">brand6</button>
                                    <button class="category-select-option">brand7</button>
                                </section>
                                <select class="form-select m-3 p-3 rounded-3" aria-label="Default select example">
                                    <option selected>Unit</option>
                                    <option value="1">Kg</option>
                                    <option value="2">Gm</option>
                                    <option value="3">Ltr</option>
                                    <option value="3">Pc</option>
                                </select>
                                <select class="form-select m-3 p-3" aria-label="Default select example">
                                    <option selected>Tax type</option>
                                    <option value="1">percentage</option>
                                    <option value="2">amount</option>
                                </select>
                                <select class="form-select m-3 p-3" aria-label="Default select example">
                                    <option selected>Discount type type</option>
                                    <option value="1">percentage</option>
                                    <option value="2">amount</option>
                                </select>
                                <button class="add prod-add">ADD</button>
                            </div>

                        </div>
                    </div>
                    <div class="dtl-table product-tab">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Product Number</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Iphone 14pro max</td>
                                    <td>456123</td>
                                    <td>1500$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Google Pixel 6a</td>
                                    <td>956123</td>
                                    <td>700$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Vivo X80</td>
                                    <td>416123</td>
                                    <td>1000$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Iphone 12</td>
                                    <td>456123</td>
                                    <td>820$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Poco F3GT</td>
                                    <td>456123</td>
                                    <td>400$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>OnePlus 9pro</td>
                                    <td>856123</td>
                                    <td>650$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mi Note12pro</td>
                                    <td>426123</td>
                                    <td>500$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Moto edge30</td>
                                    <td>556123</td>
                                    <td>410$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        var addProdBtn = document.querySelector(".add-product");
        var productModal = document.getElementById("add-prod-modal");
        var closeBtn = document.getElementsByClassName("prod-close")[0];

        addProdBtn.onclick = function() {
            productModal.style.display = "block";
        };

        closeBtn.onclick = function() {
            productModal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == productModal) {
                productModal.style.display = "none";
            }
        };

        var categorySelectBtn = document.getElementById("select");
        var categorySelectList = document.querySelector(".category-dropdown-select");
        categorySelectBtn.addEventListener("click", function(event) {
            event.preventDefault();
            categorySelectList.classList.toggle("drop");
        });
        window.addEventListener("click", function(event) {
            if (!event.target.matches("#select")) {
                if (categorySelectList.classList.contains("drop")) {}
            }
        });
    </script>
</body>

</html>