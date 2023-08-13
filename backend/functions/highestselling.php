<?php
include "../config.php";
$sql = "select item_id,product_name,count(sales_id) as total_sales from sales_details join products on sales_details.item_id=products.product_id group by item_id order by(total_sales) desc limit 3";

$result = mysqli_query($conn, $sql);

$json = array();

while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo (json_encode($json));
