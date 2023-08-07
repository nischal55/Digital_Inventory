<?php
include "../config.php";
$supplier_name = $_POST['supplier_name'];
$supplier_address = $_POST['supplier_address'];
$supplier_contact = $_POST['supplier_contact'];
$sql = "INSERT INTO supplier(supplier_name,supplier_address,supplier_contact)values('$supplier_name','$supplier_address','$supplier_contact');";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo ('success');
}
