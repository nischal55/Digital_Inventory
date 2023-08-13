<?php

include "../config.php";
$sql = "select product_name,sales_id from sales_details join products on sales_details.item_id=products.product_id order by sales_id desc limit 3";

$result = mysqli_query($conn, $sql);

$json = array();

while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo (json_encode($json));
