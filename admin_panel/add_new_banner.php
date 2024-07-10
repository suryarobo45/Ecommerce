<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
</head>

<body>
    <style>
        .banner-img {

            background-size: cover;
        }

        .banner-img img {
            max-width: 100%;
            max-height: 100%;
        }

        .form-label i {
            padding-right: 10px;
        }

        .banner-submit {
            padding: 10px 50px !important;
        }

        .ban-head {
            text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4),
                0px 8px 13px rgba(0, 0, 0, 0.1),
                0px 18px 23px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
    </style>
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
                    <div class="d-flex justify-content-center">
                        <h2 class="text-center ban-head"><i class="fa-solid fa-circle-plus pe-3"></i>Add New Banner</h2>
                    </div>
                    <div class="p-3" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <div class="row">
                            <div class="col-lg-6 mt-5 col-12">
                                <label for="banner-title" class="form-label fs-3"><i class="fa-solid fa-feather-pointed pe-3 fs-2"></i>Banner Title</label>
                                <input type="text" id="banner-title" class="form-control mt-3 p-3" placeholder="New Banner">
                            </div>
                            <div class="col-lg-6 mt-5 col-12">
                                <label for="item-type" class="form-label fs-3"><i class="fa-solid fa-cart-shopping pe-3 fs-2"></i>Item Type</label>
                                <select id="item-type" class="form-select mt-3 p-3" aria-label="Default select example">
                                    <option selected value="product">Product</option>
                                    <option value="category">Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-5 col-12">
                                <label for="banner-image" class="form-label fs-3"><i class="fa-solid fa-image pe-3 fs-2"></i>Banner Image</label>
                                <input type="file" id="banner-image" class="form-control mb-4 p-3">
                                <div class="banner-img">
                                    <img id="banner-img-preview" src="../Green Watercolour Opening Soon Banner (1).png" alt="Banner Preview">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5 col-12">
                                <label for="item-select" id="item-select-label" class="form-label fs-3"><i class="fa-solid fa-cart-shopping pe-3 fs-2"></i>Product Type</label>
                                <select id="item-select" class="form-select p-3" aria-label="Default select example">
                                    <option selected value="product1">Product Option 1</option>
                                    <option value="product2">Product Option 2</option>
                                </select>
                                <div class="d-flex justify-content-center mt-5">
                                    <div class="btn bg-success text-white banner-submit rounded-5">Submit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const itemTypeSelect = $('#item-type');
            const itemSelectLabel = $('#item-select-label');
            const itemSelect = $('#item-select');
            const bannerImageInput = $('#banner-image');
            const bannerImgPreview = $('#banner-img-preview');

            itemTypeSelect.change(function() {
                const selectedValue = $(this).val();
                if (selectedValue === 'product') {
                    itemSelectLabel.html('<i class="fa-solid fa-cart-shopping pe-3 fs-2"></i>Product Type');
                    itemSelect.html('<option selected value="product1">Product Option 1</option><option value="product2">Product Option 2</option>');
                } else if (selectedValue === 'category') {
                    itemSelectLabel.html('<i class="fa-solid fa-list pe-3 fs-2"></i>Category Type');
                    itemSelect.html('<option selected value="category1">Category Option 1</option><option value="category2">Category Option 2</option>');
                }
            });

            bannerImageInput.change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        bannerImgPreview.attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>