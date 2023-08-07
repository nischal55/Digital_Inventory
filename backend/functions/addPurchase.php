<?php
include "../config.php";
session_start();
$username = $_SESSION['username'];
//Bill Creation 
$bill_date = getdate(date("U"));
$bill_date_entry = "$bill_date[weekday], $bill_date[month] $bill_date[mday], $bill_date[year]";
$sql = "INSERT INTO bill_details(bill_date,username,bill_operation)values('$bill_date_entry','$username','purchase')";
$result = mysqli_query($conn, $sql);

$sql_bill = "Select bill_id from bill_details order by bill_id desc limit 1";
$result2 = mysqli_query($conn, $sql_bill);
while ($row = mysqli_fetch_assoc($result2)) {
    $bill_id_db = $row['bill_id'];
}
if ($result) {
    $purchase_datass = $_POST['bill_details'];
    //invoice_no, invoice_date, product_id, purchase_rate, item_qty, discount_amt_purchase
    foreach ($purchase_datass as $purchase_datas) {
        $product_id = $purchase_datas['product_id'];
        $invoice_no = $purchase_datas['invoice_no'];
        $invoice_date = $purchase_datas['invoice_date'];
        $purchase_qty = $purchase_datas['item_qty'];
        $discount_amt = $purchase_datas['discount_amt_purchase'];
        $purchase_rate = $purchase_datas['purchase_rate'];


        $sql2 = "INSERT INTO purchase_details(product_id,invoice_no,invoice_date,purchase_qty,discount_amt,bill_id,purchase_rate)values('$product_id','$invoice_no','$invoice_date','$purchase_qty','$discount_amt','$bill_id_db','$purchase_rate')";

        $result3 = mysqli_query($conn, $sql2);
    }
    if ($result3) {
        echo ("success");
    } else {
        echo "fail";
    }
} else ('fail');
