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
    <title>D_I | User</title>
</head>

<body>
    <div class="container">
        <?php include "../layouts/navbar.php"; ?>
        <div class="heading-section">
            <div class="heading">
                <img src="../assets/images/category_no_back.png" alt="" height="40" style="margin: 10px;">
                <h3>USERS</h3>
            </div>

            <div class="button-setion">
                <button id="addUsers" class="btn-primary"><b>ADD NEW USERS</b></button>
            </div>
        </div>
        <div class="userReg">
            <div class="useReg_header">
                <b id="reg_head">User Register</b>
                <b id="close_btn">X</b>
            </div><br><br><br><br><br>
            <div class="user_reg_input">
                <label for="username" id="username">Username</label><br>
                <input type="text" id="user_name"><br><br>
                <label for="password" id="password">Password</label><br>
                <input type="password" id="user_password"><br><br>
                <label for="Contact_no" id="contact">Contact No.</label><br>
                <input type="text" id="user_contact"><br><br>
                <label for="Email">Email ID</label><br>
                <input type="email" id="email"><br><br>
                <label for="user_grp">User Group</label><br>
                <select id="user_grp">
                    <option value="1">Admin</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Teller</option>
                </select><br><br>
                <label for="status">Status</label><br>
                <select id="user_status">
                    <option value="Active">Active</option>
                    <option value="Not_Active">Not Active</option>
                </select>
                <br><br><br>
                <button class="btn-primary" style="width: 97%;" id="user_save">Save</button>

            </div>

        </div>

        <div class="main-body">

            <table id="user_table_head" style="width:100%;">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Group</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <tbody id="user_table_body">

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