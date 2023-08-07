<?php
include "../config.php";
$username = $_POST['username_reg'];
$password = $_POST['password_reg'];
$contact = $_POST['user_contact_reg'];
$user_email = $_POST['email_reg'];
$user_grp_reg = $_POST['user_grp_reg'];
$user_status_reg = $_POST['user_status_reg'];
$encrypted_pass = password_hash($password, PASSWORD_DEFAULT);


if (empty($username)) {
    echo ("empty_username");
} else if (empty($password)) {
    echo ("empty_password");
} else if (empty($contact)) {
    echo ("empty_contact");
} else if (empty($user_email)) {
    echo ("empty_email");
} else if (empty($user_grp_reg)) {
    echo ("empty_user_reg");
} else if (empty($user_status_reg)) {
    echo ('empty_user_status');
} else {
    $sql = "INSERT INTO user(username,password,email_id,user_contact,status,group_id)values('$username','$encrypted_pass','$user_email','$contact','$user_status_reg','$user_grp_reg')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo ("success");
    } else {
        echo ("Fail");
    }
}
