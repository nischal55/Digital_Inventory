<?php
include "../config.php";
$supplier = $_POST['supplier'];
$sql = "SELECT * from products where supplier_id=$supplier";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
