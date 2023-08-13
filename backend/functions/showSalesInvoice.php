<?php
include "../config.php";
$sql = "SELECT * FROM sales_bill_details order by sales_bill_no desc limit 1";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $sales_bill_no = $row['sales_bill_no'];
    if (is_null($sales_bill_no)) {
        echo ("1");
    } else {
        echo ($row['sales_bill_no'] + 1);
    }
}
