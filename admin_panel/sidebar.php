<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include necessary CSS and PHP files -->
    <?php include("link.php"); ?>
    <style>
       /* CSS styles for the sidebar and dropdowns */
.dropdown-content {
    display: none;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 8px 0;
    z-index: 1;
    width: 200px;
    top: -50px;
    left: 0;
    /* Dropdown background color */
}

.dropdown-content a {
    display: block;
    border-radius: 10px;
    padding-left: 20px !important;
    padding: 10px;
    color: #ffffff;
    text-decoration: none;
    transition: background-color 0.3s;
}

.dropdown-content a:hover {
    background-color: #f2f2f2;
    color: black !important;
}

.opt-list li .opt-head.active,
.opt-list li a.active {
    background-color: var(--obj-color); /* Example active background color */
    color: #007bff; /* Example active text color */
}

.opt-head {
    font-size: 18px !important;
    cursor: pointer; /* Add cursor pointer to indicate clickable */
}

.side-bar::-webkit-scrollbar {
    width: 16px;
    background-color: rgb(50, 50, 50);
}

.side-bar::-webkit-scrollbar-track {
    background-color: #151435;
    margin-block: 3px;
    border-radius: 100vw;
}

.side-bar::-webkit-scrollbar-thumb {
    background-color: rgb(200, 200, 200);
    border: 4px rgb(50, 50, 50) solid;
    border-radius: 100vw;
}

.side-bar::-webkit-scrollbar-thumb:hover {
    background-color: rgb(175, 175, 175);
}

.side-bar::-webkit-scrollbar-thumb:active {
    background-color: rgb(150, 150, 150);
}


    </style>
</head>

<body>
    <div class="side-bar">
        <div class="sidebar-container">
            <div class="profile"></div>
            <nav class="option-tab" style="margin-left: -40px !important;">
                <ul class="opt-list">
                    <li>
                        <a class="opt-links" href="dashboard.php" id="dashboard-link">
                            <span class="material-symbols-outlined">dashboard</span>
                            <button class="opt-head">DASHBOARD</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="pos-menu-btn-1">
                            <span class="material-symbols-outlined">group</span>
                            <button class="opt-head">POS</button>
                        </a>
                        <ul id="pos-menu-1" class="dropdown-content">
                            <li><a href="pos.php">POS</a></li>
                            <li><a href="pos_order.php">Order</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="pos-menu-btn-2">
                            <span class="material-symbols-outlined">shopping_cart</span>
                            <button class="opt-head">order</button>
                        </a>
                        <ul id="pos-menu-2" class="dropdown-content">
                            <li><a href="all-order.php">All<span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="all-order.php">Pending <span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="all-order.php">Processing <span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="#">Out For Delivery <span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="#">Delivered <span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="#">Returned <span class="badge text-bg-danger ms-2 rounded-5">4</span></a></li>
                            <li><a href="#">Failed <span class="badge text-bg-danger ms-2 rounded-5">1</span></a></li>
                            <li><a href="#">Canceled <span class="badge text-bg-danger ms-2 rounded-5">0</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="user.php">
                            <span class="material-symbols-outlined">group</span>
                            <button class="opt-head">USER</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="drop-menu-btn">
                            <span class="material-symbols-outlined">category</span>
                            <button class="opt-head">PRODUCTS</button>
                        </a>
                        <ul id="drop-menu" class="dropdown-content">
                            <li><a href="products.php">All Products</a></li>
                            <li><a href="category.php">Category</a></li>
                            <li><a href="#">Going on Offers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="settings-trigger">
                            <span class="material-symbols-outlined">settings</span>
                            <button class="opt-head">SETTINGS</button>
                        </a>
                        <ul id="settings-dropdown" class="dropdown-content set-content">
                            <li><a href="sitesetting.php">logo setting</a></li>
                            <li><a href="#">profile setting</a></li>
                            <li><a href="#">Option 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="#">
                            <span class="material-symbols-outlined">support</span>
                            <button class="opt-head">SERVICE</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="banner-menu-btn">
                            <span class="material-symbols-outlined">resize</span>
                            <button class="opt-head">BANNER</button>
                        </a>
                        <ul id="banner-menu" class="dropdown-content">
                            <li><a href="add_new_banner.php">Add New Banner</a></li>
                            <li><a href="banner-list.php">Banner List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="product-review.php">
                            <span class="material-symbols-outlined">star_half</span>
                            <button class="opt-head">Reviews</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="send-notification.php">
                            <span class="material-symbols-outlined">notifications</span>
                            <button class="opt-head">Send Notification</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="reports-menu-btn">
                            <span class="material-symbols-outlined">bar_chart</span>
                            <button class="opt-head">Reports</button>
                        </a>
                        <ul id="reports-menu" class="dropdown-content">
                            <li><a href="earning-report.php">Earning Report</a></li>
                            <li><a href="order-report.php">Order Report</a></li>
                            <li><a href="product-report.php">Product Report</a></li>
                            <li><a href="sale-report.php">Sale Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="opt-links" href="subscriped-mail.php">
                            <span class="material-symbols-outlined">
                                mark_email_unread
                            </span>
                            <button class="opt-head">Subscriped Emails</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="customer-list.php">
                            <span class="material-symbols-outlined">
                                switch_account
                            </span>
                            <button class="opt-head">Customer List</button>
                        </a>
                    </li>
                    <li>
                        <a class="opt-links" href="#" id="settings-menu-btn">
                            <span class="material-symbols-outlined">
                                settings
                            </span>
                            <button class="opt-head">Settings</button>
                        </a>
                        <ul id="settings-menu" class="dropdown-content">
                            <li><a href="about-settings.php">About Us</a></li>
                            <li><a href="social-media-setting.php">Social Media</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button id="logout"><a href="../login.php">LOGOUT</a></button>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function() {
    var toggleSpeed = 200; // Speed in milliseconds

    // Function to handle dropdown toggle
    function toggleDropdown(triggerSelector, dropdownSelector) {
        $(triggerSelector).click(function(event) {
            event.preventDefault();
            event.stopPropagation();

            var dropdown = $(dropdownSelector);
            if (dropdown.is(":visible")) {
                dropdown.stop(true, true).slideUp(toggleSpeed);
            } else {
                $(".dropdown-content").not(dropdown).stop(true, true).slideUp(toggleSpeed); // Close other dropdowns
                dropdown.stop(true, true).slideDown(toggleSpeed);
            }
        });
    }

    // Initialize dropdowns
    toggleDropdown("#settings-trigger", "#settings-dropdown");
    toggleDropdown("#drop-menu-btn", "#drop-menu");
    toggleDropdown("#pos-menu-btn-1", "#pos-menu-1");
    toggleDropdown("#pos-menu-btn-2", "#pos-menu-2");
    toggleDropdown("#banner-menu-btn", "#banner-menu");
    toggleDropdown("#reports-menu-btn", "#reports-menu");
    toggleDropdown("#settings-menu-btn", "#settings-menu");

  
});

    </script>
</body>

</html>
