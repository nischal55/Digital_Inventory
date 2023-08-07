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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/jquery.PrintArea.js"></script>
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
            <h3 style="width: 10rem; cursor:pointer;" id="product_report_head">Product List</h3>

            <input type="text" placeholder="search" id="searchedData" style="margin-left: 30rem; margin-top:10px;  height:2rem; width:10rem;">
            <input type="submit" value="Search" class="btn-primary" id="searchBtnProduct" style="margin-left: 10px; height:50px;">
            <!-- <button id="printProductReport">print</button> -->
        </div>
        <div class="product_data" id="product_details_report" style="height: 28rem; width:75vw; overflow:scroll;">
            <table style="margin-left: 2rem; overflow-y:scroll; font-family:sans-serif; text-align:center;">
                <thead>
                    <tr>
                        <th>#</th>;
                        <th>Item Image</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Purchase Rate</th>
                        <th>Sales Rate</th>
                        <th>Supplier Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="product_tr_details" style="overflow-y: scroll;">

                </tbody>
            </table>
        </div>


    </div>
    </div>
    <script>
        <?php include('../assets/js/index.js') ?>
    </script>
</body>

</html>