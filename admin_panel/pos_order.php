<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("link.php"); ?>
    <title>POS Orders</title>
    <style>
        

        .pos-order-box {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            padding: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group-text {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            padding: 8px;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 0 5px 5px 0;
            padding: 8px;
            flex: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions-button {
            display: flex;
            gap: 10px;
        }

        .actions-button button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .actions-button .edit {
            background-color: #4CAF50;
            color: white;
        }

        .actions-button .edit:hover {
            background-color: #45a049;
        }

        .actions-button .delete {
            background-color: #f44336;
            color: white;
        }

        .actions-button .delete:hover {
            background-color: #e53935;
        }
    </style>
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
                    <h1 class="mb-4">POS Orders</h1>
                    <div class="row">
                        <div class="col-lg-12 pos-order-box">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-group m-2">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-magnifying-glass p-2"></i>
                                        </span>
                                        <input type="text" class="form-control p-2" placeholder="Search Orders" aria-label="Search Orders" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-lg-8"></div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Customer</th>
                                        <th>Payment Status</th>
                                        <th>Total</th>
                                        <th>Order Status</th>
                                        <th>Order Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#12345</td>
                                        <td>2024-05-14</td>
                                        <td>John Doe</td>
                                        <td>Paid</td>
                                        <td>$99.99</td>
                                        <td>Shipped</td>
                                        <td>Online</td>
                                        <td class="actions-button">
                                            <button class="edit">Edit</button>
                                            <button class="delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>#12346</td>
                                        <td>2024-05-13</td>
                                        <td>Jane Smith</td>
                                        <td>Pending</td>
                                        <td>$49.99</td>
                                        <td>Processing</td>
                                        <td>In-Store</td>
                                        <td class="actions-button">
                                            <button class="edit">Edit</button>
                                            <button class="delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>#12347</td>
                                        <td>2024-05-12</td>
                                        <td>Bob Johnson</td>
                                        <td>Paid</td>
                                        <td>$149.99</td>
                                        <td>Delivered</td>
                                        <td>Online</td>
                                        <td class="actions-button">
                                            <button class="edit">Edit</button>
                                            <button class="delete">Delete</button>
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
