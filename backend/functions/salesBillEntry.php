<?php
include "../config.php";
include "../config.php";
session_start();
$username = $_SESSION['username'];
//Bill Creation 
$bill_date = getdate(date("U"));
$bill_date_entry = "$bill_date[weekday], $bill_date[month] $bill_date[mday], $bill_date[year]";
$sql = "INSERT INTO sales_bill_details(sales_bill_date,username,bill_operation)values('$bill_date_entry','$username','sales')";
$result = mysqli_query($conn, $sql);

$sql_bill = "Select sales_bill_no from sales_bill_details order by sales_bill_no desc limit 1";
$result2 = mysqli_query($conn, $sql_bill);
while ($row = mysqli_fetch_assoc($result2)) {
    $sales_bill_no_db = $row['sales_bill_no'];
}
if ($result) {
    $sales_detailss = $_POST['sales_bill_details'];
    foreach ($sales_detailss as $sales_details) {
        $sales_id = $sales_details['sales_item'];
        $sales_date = $sales_details['sales_date'];
        $sales_rate = $sales_details['sales_rate'];
        $sales_qty = $sales_details['sales_qty'];
        $sales_discount = $sales_details['sales_discount'];
        $sql2 = "Insert into sales_details(item_id,discount_amt,sales_qty,sales_bill_no,sales_date,sales_rate)values('$sales_id','$sales_discount','$sales_qty','$sales_bill_no_db','$sales_date','$sales_rate')";

        $result3 = mysqli_query($conn, $sql2);
    }
    if ($result3) {
        echo ("success");
    } else {
        echo "fail";
    }
} else ('fail');
