<?php
include "../config.php";
$product_id = $_POST['product_id_no'];
$sql = "SELECT purchase_price from products where product_id='1'";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
