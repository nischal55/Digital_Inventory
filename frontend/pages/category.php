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
    <title>D_I | Category</title>
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
        <div class="category-main" style="width:100%;">
            <div class="add_category">
                <div class="heading-section">
                    <img src="../assets/images/category_no_back.png" alt="" height="40" style="margin: 10px;">
                    <h2>ADD CATEGORY</h2>
                </div>
                <div class="add_section">
                    <input type="text" id="add_category" placeholder="Add Categories"><br><br>
                    <button class="btn-primary" id="btnAddCategory"><b> Add Category</b></button>
                </div>
            </div>
            <div class="display_category">
                <div class="category-heading-section">
                    <img src="../assets/images/category_no_back.png" alt="" height="40" style="margin-top: 10px;">
                    <h2>ALL CATEGORY</h2><br>



                </div>
                <div class="display_section" style="font-family: 'Opens Sans',sans-serif;">
                    <table id="category-table">
                        <tr>
                            <thead>
                                <th>#</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </thead>

                        </tr>
                        <tbody id="category_table_body">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src=" ../assets/js/index.js">
    </script>
</body>

</html>