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
                            <h5 class="fs-1">About Us<i class="fa-solid fa-pen-fancy ps-lg-3"></i></h5>

                        </div>
                        <div class="col-lg-6">
                            <a href="dashboard.php"> <i class="fa-solid fa-home p-3  rounded-5 float-end mt-lg-2 my-icon text-white" title="go home"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <div class="fs-3">Why Us?</div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sunt eum modi incidunt laborum. Voluptatibus aspernatur quod sit, exercitationem omnis asperiores culpa dolor ipsum! Aliquam eveniet architecto, sequi sed, excepturi eaque laborum incidunt amet voluptatibus cumque velit culpa nihil quia aut sapiente quasi quos a id! Similique est quas, sint numquam ut, minima atque asperiores dicta aliquid maxime, ad unde suscipit beatae harum a voluptas accusamus. Laborum eaque praesentium quod necessitatibus corrupti aut consequuntur. Iusto odio ad vitae, voluptates iure amet rerum nobis optio fugiat illo. Temporibus veritatis unde neque voluptates repellat, quod voluptatem iste necessitatibus eveniet quaerat a minus.</textarea>
                            </div>
                            <div class="fs-3">Address</div>

                        </div>
                        <div class="col-lg-12 ">
                            <div class="row">
                                <div class="col-lg-5 border text-lg-center p-2">
                                    <ul class="" style="list-style: none ;">
                                        <li>Phone : +91 9876543210</li>
                                        <li>Watsapp : +91 9876543210</li>
                                        <li>Email : abc@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5 border text-lg-center p-2">
                                <div class="fs-5">Visit Our Location</div>
                                <div>Libs dept <br>123,abc street, abc nagar <br>chennai-621730 <br>Tamilnadu</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>