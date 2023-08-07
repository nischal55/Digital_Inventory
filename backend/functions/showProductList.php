<?php
include "../config.php";
$sql = "SELECT * from products join product_category on product_category.category_id=products.category_id join supplier on supplier.supplier_id=products.supplier_id";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
