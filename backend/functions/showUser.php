<?php
include "../config.php";
$sql = "SELECT username,email_id,user_contact,group_name,status FROM user join user_group where user.group_id=user_group.group_id";
$result = mysqli_query($conn, $sql);
$json = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($json, $row);
}
echo json_encode($json);
