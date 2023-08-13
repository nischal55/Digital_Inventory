<?php
include("../config.php");
$total_user_query = "select count(user_id) as total_user from user";
$total_purchaseBill_query = "select count(bill_id) as total_purchase from bill_details";
$total_category_query = "select count(category_id) as total_category from product_category";
$total_salesBill_query = "Select count(sales_bill_no) as total_sales from sales_bill_details";

$result_one = mysqli_query($conn, $total_user_query);
$result_two = mysqli_query($conn, $total_purchaseBill_query);
$result_three = mysqli_query($conn, $total_category_query);
$result_four = mysqli_query($conn, $total_salesBill_query);


while ($row = mysqli_fetch_assoc($result_one)) {
    $total_user = $row['total_user'];
}
while ($row2 = mysqli_fetch_assoc($result_two)) {
    $total_purchase = $row2['total_purchase'];
}
while ($row3 = mysqli_fetch_assoc($result_three)) {
    $total_category = $row3['total_category'];
}
while ($row4 = mysqli_fetch_assoc($result_four)) {
    $total_sales = $row4['total_sales'];
}

$json = array(
    "total_user" => $total_user,
    "total_purchase" => $total_purchase,
    "total_category" => $total_category,
    "total_sales" => $total_sales
);
echo (json_encode($json));
