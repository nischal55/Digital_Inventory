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
    <title>D_I | User</title>

    <style>
        <?php include "../assets/css/style.css" ?>
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
        <div class="heading-section">
            <div class="heading">
                <img src="../assets/images/category_no_back.png" alt="" height="40" style="margin: 10px;">
                <h3>SUPPLIERS</h3>
            </div>

            <div class="button-setion">
                <button id="addSuppliers" class="btn-primary"><b>ADD NEW SUPPLIER</b></button>
            </div>
        </div>
        <div class="supplierReg">
            <div class="useReg_header">
                <b id="reg_head">Supplier Register</b>
                <b id="close_btn">X</b>
            </div><br><br><br><br><br>
            <div class="user_reg_input">
                <label for="supplier_name">Supplier_name:</label><br>
                <input type="text" id="supplier_name_reg"><br><br>
                <label for="supplier_address">Supplier_Address:</label><br>
                <input type="text" id="supplier_address"><br><br>
                <label for="Contact_no">Contact No.</label><br>
                <input type="text" id="supplier_contact"><br><br>
                <br><br>
                <button class="btn-primary" style="width: 97%;" id="supplier_save">Save</button>

            </div>

        </div>

        <div class="main-body">

            <table id="user_table_head">
                <tr>
                    <th>#</th>
                    <th>Supplier Name</th>
                    <th>Supplier Address</th>
                    <th>Supplier Contact No</th>
                    <th>Actions</th>
                </tr>
                <tbody id="supplier_table_body" style="text-align: center;">

                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script>
        <?php include "../assets/js/index.js"  ?>
    </script>
</body>

</html>