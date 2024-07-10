<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <h1 class="dash-head">USERS</h1>
                    <div class="dtl-table user-chart">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>adhi</td>
                                    <td>adhi@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Thomas</td>
                                    <td>thomas@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>diya</td>
                                    <td>diya@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="dlt-user">Inactive</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>abcd</td>
                                    <td>abcd@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>xyz</td>
                                    <td>xyz@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>surya</td>
                                    <td>surya@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>diya</td>
                                    <td>diya@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="dlt-user">Inactive</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>abcd</td>
                                    <td>abcd@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>xyz</td>
                                    <td>xyz@gmail.com</td>
                                    <td>**********</td>
                                    <td><button class="edit-user">Active</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>