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
    <link rel="stylesheet" href="../assets/css/style.css?v=1">

    <script src="../assets/js/jquery-3.6.3.min.js"></script>
    <title>D_I | Sales</title>
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
            <img class="purchase-head" src="https://icons-for-free.com/download-icon-buy+cart+ecommerce+sale+shop+shopping+icon+icon-1320085802595884802_24.png" alt="" width="30" height="30">
            <h3>Sales Entry</h3>
        </div>
        <div class="product-main" style="overflow-y: scroll; height:60vh;">
            <label for="invoice_no">Invoice No:</label>
            <input type="text" id="invoice_no" class="sales_invoice_no">
            <label for="invoice_date">Invoice Date:</label>
            <input type="text" id="invoice_date" class="sales_date" disabled><br><br>

            <label for="item_name" id="item_name_label">Item_name</label>
            <select id="sales_item" style="width: 80%;">
                <option value="----Select the item----"></option>
            </select><br><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="item_qty" class="sales_item_qty">
            <label for="purchase_rate" style="margin-left: 30px;">Sales Rate:</label>
            <input type="search" id="rate_sales" disabled>
            <label for="discount_amt">Discount Amt:</label>
            <input type="number" id="discount_amt" class="sales_discount"><br><br><br>
            <button class="btn-primary" style="width:15%;" id="sales_product_add">Add Products</button>
            <button class="btn-primary" style="width:15%;" id="sales_save">Save</button>
            <button class="btn-danger" style="width:15%;" id="sales_reset">Reset</button>
            <input type="text" id="searchBill_sales" class="searchBills" placeholder="Search Bills">
            <button class="btn-primary" id="search_purchase_bill">Search</button><br><br><br>
            <table id="user_table_head" style="width:90%;">
                <tr>
                    <th>#</th>
                    <th>Item Name</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Discount</th>
                    <th>Total</th>
                </tr>
                <tbody id="sales_bill_data" style="text-align: center;">

                </tbody><br>
            </table>
            <div class="table-footer">
                <h4 class="sales_total"></h4>
            </div>
        </div>
        <div class="confirmation-box">
            <div class="confirm_head">
                <b>Confirmation</b>
                <b id="close_product_confirm">X</b>
            </div>
            <p class="confirm-description">Are you Sure to Save?</p><br>

            <div class="btn-part">
                <button class="btn-primary" style="width: 6rem;" id="sales_save_confirm">Save</button>
                <p class="btn-danger" style="width: 4rem;" id="cancel_btn">Cancel</p>
            </div>

        </div>
    </div>
    <script>
        <?php include "../assets/js/index.js" ?>
    </script>
</body>

</html>