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
                    <h1 class="dash-head">All Products</h1>
                    <div class="category-dropdown">
                        <button class="category-list-btn">Select Category<span class="material-symbols-outlined">expand_more</span></button>
                        <section class="category-dropdown-menu">
                            <button class="category-dropdown-option" id="all-prod">All Product</button>
                            <button class="category-dropdown-option" id="mobile-btn">Mobiles</button>
                            <button class="category-dropdown-option">Laptops</button>
                            <button class="category-dropdown-option">Accessories</button>
                            <button class="category-dropdown-option">Fashion</button>
                            <button class="category-dropdown-option">Appliances</button>
                            <button class="category-dropdown-option">Toys & Baby</button>
                            <button class="category-dropdown-option">Furniture</button>
                        </section>
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
                                    <td>Nikon D7500</td>
                                    <td>956123</td>
                                    <td>4800$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Gaming chair</td>
                                    <td>416123</td>
                                    <td>700$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Noise AirBuds</td>
                                    <td>456123</td>
                                    <td>15$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Recliner</td>
                                    <td>456123</td>
                                    <td>1000$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Canon DSLR</td>
                                    <td>856123</td>
                                    <td>5250$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Gaming Table</td>
                                    <td>426123</td>
                                    <td>500$</td>
                                    <td><button class="edit-user-2">Edit</button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Boat AirBuds</td>
                                    <td>556123</td>
                                    <td>10$</td>
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
        var categoryDropdownBtn = document.querySelector(".category-list-btn");
        var categoryDropdownList = document.querySelector(".category-dropdown-menu");
        categoryDropdownBtn.addEventListener("click", function(event) {
            event.preventDefault();
            categoryDropdownList.classList.toggle("show");
        });
        window.addEventListener("click", function(event) {
            if (!event.target.matches(".category-list-btn")) {
                if (categoryDropdownList.classList.contains("show")) {}
            }
        });

        var mobiles = document.querySelector("#mobile-btn");
        var allProd = document.querySelector("#all-prod");

        mobiles.onclick = function() {
            location.href = "mobile.php";
        }
        allProd.onclick = function() {
            location.href = "products.php";
        }
    </script>
</body>

</html>