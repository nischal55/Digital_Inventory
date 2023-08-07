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
    <link rel="stylesheet" href="../assets/css/style.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <title>D_I | Dashboard</title>
</head>

<body>
    <div class="container">
        <?php include "../layouts/navbar.php"; ?>
        <div class="alert-success">Welcome to Digital Inventory</div>
        <div class="container-two">
            <div class="card">
                <img src="../assets/images/profile_icon.png" alt="" height="137" width="125">
            </div>
            <div class="card"></div>
            <div class="card">
                <img src="../assets/images/purchase.png" alt="" height="137" width="126">
            </div>
            <div class="card"></div>
            <div class="card">
                <img src="../assets/images/category.png" alt="" height="137" width="126">
            </div>
            <div class="card"></div>
            <div class="card">
                <img src="../assets/images/sales.png" alt="" height="137" width="126">
            </div>
            <div class="card"></div>
        </div>
        <div class="container-three">
            <div class="summary-report">
                <p>Highest Selling products</p>
            </div>
            <div class="summary-report">
                <p>Latest Sales</p>
            </div>
            <div class="summary-report">
                <p>Recent Sales</p>
            </div>
        </div>

    </div>
    </div>
    <script src="../assets/js/index.js"></script>

</body>

</html>