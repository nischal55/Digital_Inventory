<style>
    <?php include "../assets/css/style.css"; ?>
</style>
<div class="menu">
    <div class="header">
        <p>DIGITAL INVENTORY</p>
    </div>
    <div class="nav-menu">
        <ul>
            <li><a href="../pages/tellerDashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="../pages/product.php"><i class="fa-solid fa-grid-2" style="color: #ffffff;"></i> Products</a> </li>
            <li><a href="../pages/purchase.php"><i class="fa-solid fa-cart-shopping"></i> Purchase Management</a> </li>
            <li><a href="../pages/sales.php"><i class="fa-brands fa-sellsy"></i> Sales Management</a> </li>
            <li><a href="../pages/report.php"><i class="fa-solid fa-grid-2"></i> Reports</a> </li>

        </ul>
    </div>
</div>
<div class="main">
    <div class="top-portion">
        <div id="dateShow">
            <p id="date"></p>
        </div>
        <div id="userShow">
            <img src="https://icon-library.com/images/account-icon-png/account-icon-png-2.jpg" alt="" height="30" width="30">
            <p id="username"><?php echo ($_SESSION['username']) ?></p>
            <div id="dropdownMenu">
                <img src="https://icon-library.com/images/dropdown-arrow-icon/dropdown-arrow-icon-11.jpg" id="dropdown" height="20" width="20">
            </div>
        </div>

    </div>
    <div class="dropdown_logout">
        <p class="user_menu">User Details</p>

        <p class="user_menu" id="logout_menu">logout</p>

    </div>

    <script>

    </script>