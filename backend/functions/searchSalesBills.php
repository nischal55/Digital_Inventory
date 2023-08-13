<?php
include "../config.php";
$bill_id = $_POST['sales_billsearch_id'];
$sql = "SELECT product_name,sales_rate,sales_qty,discount_amt,((sales_rate*sales_qty)-discount_amt)as sales_total FROM sales_details join products on products.product_id = sales_details.item_id where sales_bill_no='$bill_id'";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
