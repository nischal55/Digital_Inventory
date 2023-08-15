<?php
session_start();
if (isset($_SESSION['username']) != 1) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css?v=1"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <title>D_I | Dashboard</title>
</head>
<style>
    <?php include("../assets/css/style.css") ?>
</style>

<body>
    <div class="container">
        <?php
        if ($_SESSION['usergroup'] == '1') {
            include "../layouts/navbar.php";
        } else if ($_SESSION['usergroup'] == '2') {
            include "../layouts/supervisorNav.php";
        } else {
            include "../layouts/tellerNav.php";
        } ?> <div class="alert-success">Welcome to Digital Inventory
        </div>
        <div class="container-two">
            <div class="card">
                <img src="../assets/images/profile_icon.png" alt="" height="137" width="125">
            </div>
            <div class="card">
                <h1 id="userid" class="dashItem"></h1>
            </div>
            <div class="card">
                <img src="../assets/images/purchase.png" alt="" height="137" width="126">
            </div>
            <div class="card">
                <h1 id="total_purchase" class="dashItem"></h1>
            </div>
            <div class=" card">
                <img src="../assets/images/category.png" alt="" height="137" width="126">
            </div>
            <div class="card">
                <h1 id="total_category" class="dashItem"></h1>
            </div>
            <div class=" card">
                <img src="../assets/images/sales.png" alt="" height="137" width="126">
            </div>
            <div class="card">
                <h1 id="total_sales" class="dashItem"></h1>
            </div>
        </div>
        <div class=" container-three">
            <div class="summary-report">
                <p>Highest Selling products</p>
                <hr><br>
                <table border="1" style="border-collapse: collapse; margin-left:20px; width:18rem;">
                    <tbody id="highestSales" class="table_data"></tbody>
                </table>

            </div>
            <div class="summary-report">
                <p>Latest Purchase</p>
                <hr><br>
                <table border="1" style="border-collapse: collapse; margin-left:20px; width:18rem;">
                    <tbody id="latestPurchase" class="table_data"></tbody>
                </table>
            </div>
            <div class="summary-report">
                <p>Recent Sales</p>
                <hr><br>
                <table border="1" style="border-collapse: collapse; margin-left:20px; width:18rem;">
                    <tbody id="recentSales" class="table_data"></tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
    <script>
        <?php include "../assets/js/index.js" ?>
    </script>

</body>

</html>