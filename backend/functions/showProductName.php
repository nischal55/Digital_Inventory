<?php
include "../config.php";
$product_id = $_POST['product_id_no'];
$sql = "SELECT product_name from products where product_id='$product_id'";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
