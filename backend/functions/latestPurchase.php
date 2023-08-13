<?php

include "../config.php";
$sql = "select product_name,purchase_id from purchase_details join products on purchase_details.product_id=products.product_id order by purchase_id desc limit 3";

$result = mysqli_query($conn, $sql);

$json = array();

while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo (json_encode($json));
