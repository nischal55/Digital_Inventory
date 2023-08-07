<?php
include "../config.php";
$bill_id = $_POST['bill_id'];
$sql = "SELECT product_name,purchase_rate,purchase_qty,discount_amt,((purchase_rate*purchase_qty)-discount_amt)as total FROM purchase_details join products on products.product_id = purchase_details.product_id where bill_id='$bill_id'";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
