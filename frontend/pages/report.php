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

        <div class="report_main">
            <label for="">Select the Report Type:</label><br>
            <select name="" id="">
                <option value="1">Stock Balance Report</option>
                <option value="2">Purchase Report</option>
                <option value="3">Sales report</option>
            </select><br><br>
            <label for="">From Date</label><br>
            <input type="date" name="" id=""><br><br>
            <label for="">To Date</label><br>
            <input type="date" name="" id=""><br><br>
            <input type="submit" value="Generate" class="btn-success">

        </div>
    </div>
    <script src=" ../assets/js/index.js">
    </script>
</body>

</html>