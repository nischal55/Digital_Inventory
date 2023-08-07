<?php
include "../config.php";
$json = array();
$sql = "select * from supplier";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
