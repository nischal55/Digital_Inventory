<?php
include "../config.php";
$product_id = $_POST['sales_item_id'];
$sql = "select * from products where product_id ='$product_id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo ($row['product_name']);
}
