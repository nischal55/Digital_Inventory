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

    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <title>D_I | Product</title>
</head>

<body>
    <div class="container">
        <?php
        if ($_SESSION['usergroup'] == '1') {
            include "../layouts/navbar.php";
        } else if ($_SESSION['usergroup'] == '2') {
            include "../layouts/supervisorNav.php";
        } else {
            include "../layouts/tellerNav.php";
        } ?>
        <div class="header_section">
            <img class="purchase-head" src="../assets/images/category_no_back.png" alt="" width="30" height="30">
            <h3>Product Entry</h3>
        </div>
        <div class="product-main">
            <form action="../../backend/functions/productAdd.php" method="post" enctype="multipart/form-data">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" required><br><br>
                <label for="supplier_name">Supplier Name:</label>
                <select id="supplier_name" name="supplier_name" required></select>
                <label for="category">Category:</label>
                <select id="category" name="product_category" required></select><br><br>
                <label for="purchase_rate">Purchase Rate:</label>
                <input type="number" name="purchase_rate" id="purchase_rate" required>
                <label for="sales">Sales:</label>
                <input type="number" name="sales_rate" id="sales_rate" required><br><br>
                <label for="product_image">Product Image:</label>
                <input type="file" id="product_image" name="file" required>
                <br><br><br>

                <div class="btn-group">
                    <p class="btn-primary" style="width:10%;" id="category_save_btn">Save</p>
                    <p class="btn-success" id="view_product_report">View Report</p>
                </div>
                <div class="confirmation-box">
                    <div class="confirm_head">
                        <b>Confirmation</b>
                        <b id="close_product_confirm">X</b>
                    </div>
                    <p class="confirm-description">Are you Sure to Save?</p><br>

                    <div class="btn-part">
                        <button class="btn-primary" style="width: 6rem; height:3rem; margin-top:1rem; margin-right:10px;" id="product_save_confirm">Save</button>
                        <p class="btn-danger" style="width: 4rem;" id="cancel_btn">Cancel</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        <?php include('../assets/js/index.js') ?>
    </script>
</body>

</html>