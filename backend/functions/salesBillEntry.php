<?php
include "../config.php";
include "../config.php";
session_start();
$username = $_SESSION['username'];
//Bill Creation 
$bill_date = getdate(date("U"));
$bill_date_entry = "$bill_date[weekday], $bill_date[month] $bill_date[mday], $bill_date[year]";
$sql = "INSERT INTO bill_details(bill_date,username,bill_operation)values('$bill_date_entry','$username','sales')";
$result = mysqli_query($conn, $sql);

$sql_bill = "Select bill_id from bill_details order by bill_id desc limit 1";
$result2 = mysqli_query($conn, $sql_bill);
while ($row = mysqli_fetch_assoc($result2)) {
    $bill_id_db = $row['bill_id'];
}
