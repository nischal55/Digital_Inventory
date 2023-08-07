<?php
include "../config.php";
$product_name = $_POST['product_name'];
$supplier_name = $_POST['supplier_name'];
$product_category = $_POST['product_category'];
$purchase_rate = $_POST['purchase_rate'];
$sales_rate = $_POST['sales_rate'];
$product_image = $_FILES['file'];

//Saving Image in Server PC
$filename = $product_image['name'];
$temp_name = $product_image['tmp_name'];
$file = '../../frontend/assets/uploads/' . $filename;
move_uploaded_file($temp_name, $file);

//Moving Data to database:
$sql = "INSERT INTO products(product_name,product_image,purchase_price,sales_price,supplier_id,category_id)values('$product_name','$filename','$purchase_rate','$sales_rate','$supplier_name','$product_category')";

$result = mysqli_query($conn, $sql);
if ($result) {
    header('location:../../frontend/pages/product.php');
}
