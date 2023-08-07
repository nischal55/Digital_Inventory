<?php
include "../config.php";
$category = $_POST['categoryName'];
$sql = "INSERT INTO product_category(category_name) values('$category')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "success";
} else {
    echo ("fail");
}
