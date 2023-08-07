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
    <!-- <link rel="stylesheet" href="../assets/css/style.css?v=1"> -->
    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <title>D_I | Purchase</title>
    <style>
        <?php include "../assets◘/css/style.css" ?>
    </style>
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
        <div class="purchase-container">
            <div class="header_section">
                <img class="purchase-head" src="https://icons-for-free.com/download-icon-buy+cart+ecommerce+sale+shop+shopping+icon+icon-1320085802595884802_24.png" alt="" width="30" height="30">
                <h3>Purchase Entry</h3>
            </div>
            <div class="product-main">
                <label for="invoice_no" id="invoice_no_label">Invoice No:</label>
                <input type="text" id="invoice_no">
                <label for="invoice_date" id="invoice_date_label">Invoice Date:</label>
                <input type="date" id="invoice_date"><br><br>
                <label for="supplier_name">Supplier: </label>
                <select id="supplier_name" class="supplier_name">


                </select>
                <label for="item_name" id="item_name_label">Item_name</label>
                <select id="purchase_item">

                </select><br><br>
                <label for="quantity">Quantity:</label>
                <input type="number" id="item_qty">
                <label for="purchase_rate">Purchase Rate:</label>
                <input type="search" id="rate_purchase" disabled>
                <label for="discount_amt">Discount Amt:</label>
                <input type="search" id="discount_amt"><br><br><br>

                <button class="btn-primary" style="width:15%;" id="add_products">Add Products</button>
                <button class="btn-primary" style="width:15%;" id="save_purchase_bill">Save</button>
                <button class="btn-danger" style="width:15%;" id="purchase_reset">Reset</button>
                <input type="text" id="searchBill" class="searchBills" placeholder="Search Bills">
                <button class="btn-primary" id="search_purchase_bill">Search</button>
                <br><br><br>
                <table id=" user_table_head" style="width:90%;">
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Discount</th>
                        <th>Total</th>

                    </tr>
                    <tbody id="purchase_bill_data" style="text-align: center;">

                    </tbody><br>

                </table>
                <div class="table-footer">
                    <h4 class="purchase_total"></h4>
                </div>
            </div>
            <div class="confirmation-box">
                <div class="confirm_head">
                    <b>Confirmation</b>
                    <b id="close_product_confirm">X</b>
                </div>
                <p class="confirm-description">Are you Sure to Save?</p><br>

                <div class="btn-part">
                    <button class="btn-primary" style="width: 6rem; height:3rem; margin-top:1rem; margin-right:10px;" class="product_confirm" id="purchase_save_confirm">Save</button>
                    <p class="btn-danger" style="width: 4rem;" id="cancel_btn">Cancel</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        <?php include "../assets/js/index.js" ?>
    </script>
</body>

</html>